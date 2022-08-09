<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class FlushSessions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'session:flush';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Flush all user sessions';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $driver = config('session.driver');
        $method_name = 'clean' . ucfirst($driver);
        if ( method_exists($this, $method_name) ) {
            try {
                $this->$method_name();
                $this->info('Session data cleaned.');
            } catch (\Exception $e) {
                $this->error($e->getMessage());
            }
        } else {
            $this->error("Nao foi possivel apagar os dados de sessao de '{$driver}'.");
        }
    }

    protected function cleanFile () {
        $directory = config('session.files');
        $ignoreFiles = ['.gitignore', '.', '..'];

        $files = scandir($directory);

        foreach ( $files as $file ) {
            if( !in_array($file,$ignoreFiles) ) {
                unlink($directory . '/' . $file);
            }
        }
    }
}
