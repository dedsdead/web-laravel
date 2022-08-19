<?php

namespace App\Policies;

use App\Models\Curso;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

use App\Facades\UserPermissions;

class CursoPolicy
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
        return UserPermissions::isAuthorized('cursos.index');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Curso $curso)
    {
        return UserPermissions::isAuthorized('cursos.show');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return UserPermissions::isAuthorized('cursos.create');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Curso $curso)
    {
        return UserPermissions::isAuthorized('cursos.edit');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Curso $curso)
    {
        return UserPermissions::isAuthorized('cursos.destroy');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Curso $curso)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Curso $curso)
    {
        //
    }
}
