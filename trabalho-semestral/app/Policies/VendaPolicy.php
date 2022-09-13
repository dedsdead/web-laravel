<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Venda;
use Illuminate\Auth\Access\HandlesAuthorization;

use App\Facades\UserPermissions;

class VendaPolicy {
    use HandlesAuthorization;

    public function viewAny(User $user){
        return UserPermissions::isAuthorized('vendas.index');
        
    }

    public function view(User $user, Venda $venda){
        return UserPermissions::isAuthorized('vendas.show');

    }

    public function create(User $user){
        return UserPermissions::isAuthorized('vendas.create');

    }

    public function update(User $user, Venda $venda){
        return UserPermissions::isAuthorized('vendas.edit');

    }

    public function delete(User $user, Venda $venda){
        return UserPermissions::isAuthorized('vendas.destroy');

    }

    public function restore(User $user, Venda $venda){
        //

    }

    public function forceDelete(User $user, Venda $venda){
        //
        
    }
}
