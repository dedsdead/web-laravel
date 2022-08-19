<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

use App\Models\Aluno;
use App\Policies\AlunoPolicy;
use App\Models\Curso;
use App\Policies\CursoPolicy;
use App\Models\Disciplina;
use App\Policies\DisciplinaPolicy;
use App\Models\Eixo;
use App\Policies\EixoPolicy;
use App\Models\Matricula;
use App\Policies\MatriculaPolicy;
use App\Models\Professor;
use App\Policies\ProfessorPolicy;
use App\Models\Vinculo;
use App\Policies\VinculoPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        Aluno::class => AlunoPolicy::class,
        Curso::class => CursoPolicy::class,
        Disciplina::class => DisciplinaPolicy::class,
        Eixo::class => EixoPolicy::class,
        Matricula::class => MatriculaPolicy::class,
        Professor::class => ProfessorPolicy::class,
        Vinculo::class => VinculoPolicy::class,
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
