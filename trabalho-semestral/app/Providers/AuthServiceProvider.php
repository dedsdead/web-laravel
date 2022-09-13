<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

use App\Models\Cliente;
use App\Policies\ClientePolicy;
use App\Models\Propriedade;
use App\Policies\PropriedadePolicy;
use App\Models\Venda;
use App\Policies\VendaPolicy;

class AuthServiceProvider extends ServiceProvider{
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        Cliente::class => ClientePolicy::class,
        Propriedade::class => PropriedadePolicy::class,
        Venda::class => VendaPolicy::class,

    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
