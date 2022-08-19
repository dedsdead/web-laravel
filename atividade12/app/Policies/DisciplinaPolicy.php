<?php

namespace App\Policies;

use App\Models\Disciplina;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

use App\Facades\UserPermissions;

class DisciplinaPolicy
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
        return UserPermissions::isAuthorized('disciplinas.index');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Disciplina  $disciplina
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Disciplina $disciplina)
    {
        return UserPermissions::isAuthorized('disciplinas.show');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return UserPermissions::isAuthorized('disciplinas.create');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Disciplina  $disciplina
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Disciplina $disciplina)
    {
        return UserPermissions::isAuthorized('disciplinas.edit');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Disciplina  $disciplina
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Disciplina $disciplina)
    {
        return UserPermissions::isAuthorized('disciplinas.destroy');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Disciplina  $disciplina
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Disciplina $disciplina)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Disciplina  $disciplina
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Disciplina $disciplina)
    {
        //
    }
}
