<?php

namespace App\Policies;

use App\Models\Propriedade;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

use App\Facades\UserPermissions;

class PropriedadePolicy {
    use HandlesAuthorization;
    
    public function viewAny(User $user){
        return UserPermissions::isAuthorized('propriedades.index');

    }

    public function view(User $user, Propriedade $propriedade){
        return UserPermissions::isAuthorized('propriedades.show');

    }

    public function create(User $user){
        return UserPermissions::isAuthorized('propriedades.create');

    }

    public function update(User $user, Propriedade $propriedade){
        return UserPermissions::isAuthorized('propriedades.edit');

    }

    public function delete(User $user, Propriedade $propriedade){
        return UserPermissions::isAuthorized('propriedades.destroy');

    }

    public function restore(User $user, Propriedade $propriedade){
        //

    }

    public function forceDelete(User $user, Propriedade $propriedade){
        //

    }
}
