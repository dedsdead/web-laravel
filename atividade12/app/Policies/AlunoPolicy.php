<?php

namespace App\Policies;

use App\Models\Aluno;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

use App\Facades\UserPermissions;

class AlunoPolicy
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
        return UserPermissions::isAuthorized('alunos.index');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Aluno $aluno)
    {
        return UserPermissions::isAuthorized('alunos.show');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return UserPermissions::isAuthorized('alunos.create');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Aluno $aluno)
    {
        return UserPermissions::isAuthorized('alunos.edit');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Aluno $aluno)
    {
        return UserPermissions::isAuthorized('alunos.destroy');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Aluno $aluno)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Aluno $aluno)
    {
        //
    }
}
