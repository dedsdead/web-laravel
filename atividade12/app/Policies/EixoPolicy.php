<?php

namespace App\Policies;

use App\Models\Eixo;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

use App\Facades\UserPermissions;

class EixoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return UserPermissions::isAuthorized('eixos.index');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Eixo  $eixo
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Eixo $eixo)
    {
        return UserPermissions::isAuthorized('eixos.show');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return UserPermissions::isAuthorized('eixos.create');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Eixo  $eixo
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Eixo $eixo)
    {
        return UserPermissions::isAuthorized('eixos.edit');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Eixo  $eixo
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Eixo $eixo)
    {
        return UserPermissions::isAuthorized('eixos.destroy');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Eixo  $eixo
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Eixo $eixo)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Eixo  $eixo
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Eixo $eixo)
    {
        //
    }
}
