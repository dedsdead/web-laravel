<?php

namespace App\Policies;

use App\Models\Cliente;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

use App\Facades\UserPermissions;

class ClientePolicy {
    use HandlesAuthorization;

    public function viewAny(User $user){
        return UserPermissions::isAuthorized('clientes.index');

    }

    public function view(User $user, Cliente $cliente){
        return UserPermissions::isAuthorized('clientes.show');

    }

    public function create(User $user){
        return UserPermissions::isAuthorized('clientes.create');

    }

    public function update(User $user, Cliente $cliente){
        return UserPermissions::isAuthorized('clientes.edit');

    }

    public function delete(User $user, Cliente $cliente){
        return UserPermissions::isAuthorized('clientes.destroy');

    }

    public function restore(User $user, Cliente $cliente){
        //

    }

    public function forceDelete(User $user, Cliente $cliente){
        //

    }
}
