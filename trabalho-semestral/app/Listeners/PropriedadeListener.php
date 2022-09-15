<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use Illuminate\Support\Facades\Mail;
use App\Mail\NovaPropriedade;

use App\Events\PropriedadeEvent;

class PropriedadeListener{
    public function __construct(){
        //

    }

    public function handle(PropriedadeEvent $event){
        Mail::to($event->user)->send(
            new NovaPropriedade($event->propriedade)
            
        );

    }
}
