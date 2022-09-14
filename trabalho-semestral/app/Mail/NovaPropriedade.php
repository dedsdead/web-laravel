<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use App\Models\Propriedade;

class NovaPropriedade extends Mailable{
    use Queueable, SerializesModels;

    public $user;
    public $propriedade;

    public function __construct(User $user, Propriedade $propriedade){
        $this->user = $user;
        $this->propriedade = $propriedade;

    }

    public function build(){
        return $this->view('mail.nova-propriedade')->with([
            'user' => $this->user,
            'propriedade' => $this->propriedade,
        ]);
    }
}
