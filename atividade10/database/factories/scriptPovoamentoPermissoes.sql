/* PERMISSOES DE ALUNOS */

/* crud alunos */
INSERT INTO `permissions` (`regra`, `permissao`, `type_id`) VALUES ('alunos.create', 0, 1), ('alunos.destroy', 0, 1), ('alunos.edit', 0, 1), ('alunos.index', 0, 1), ('alunos.show', 0, 1);

/* crud cursos */
INSERT INTO `permissions` (`regra`, `permissao`, `type_id`) VALUES ('cursos.create', 0, 1), ('cursos.destroy', 0, 1), ('cursos.edit', 0, 1), ('cursos.index', 1, 1), ('cursos.show', 0, 1);

/* crud disciplinas */
INSERT INTO `permissions` (`regra`, `permissao`, `type_id`) VALUES ('disciplinas.create', 0, 1), ('disciplinas.destroy', 0, 1), ('disciplinas.edit', 0, 1), ('disciplinas.index', 0, 1), ('disciplinas.show', 0, 1);

/* crud eixos */
INSERT INTO `permissions` (`regra`, `permissao`, `type_id`) VALUES ('eixos.create', 0, 1), ('eixos.destroy', 0, 1), ('eixos.edit', 0, 1), ('eixos.index', 1, 1), ('eixos.show', 0, 1);

/* crud professores */
INSERT INTO `permissions` (`regra`, `permissao`, `type_id`) VALUES ('professores.create', 0, 1), ('professores.destroy', 0, 1), ('professores.edit', 0, 1), ('professores.index', 0, 1), ('professores.show', 0, 1);


/* PERMISSOES DE PROFESSORES */

/* crud alunos */
INSERT INTO `permissions` (`regra`, `permissao`, `type_id`) VALUES ('alunos.create', 0, 2), ('alunos.destroy', 0, 2), ('alunos.edit', 0, 2), ('alunos.index', 1, 2), ('alunos.show', 0, 2);

/* crud cursos */
INSERT INTO `permissions` (`regra`, `permissao`, `type_id`) VALUES ('cursos.create', 1, 2), ('cursos.destroy', 1, 2), ('cursos.edit', 1, 2), ('cursos.index', 1, 2), ('cursos.show', 1, 2);

/* crud disciplinas */
INSERT INTO `permissions` (`regra`, `permissao`, `type_id`) VALUES ('disciplinas.create', 0, 2), ('disciplinas.destroy', 0, 2), ('disciplinas.edit', 0, 2), ('disciplinas.index', 1, 2), ('disciplinas.show', 0, 2);

/* crud eixos */
INSERT INTO `permissions` (`regra`, `permissao`, `type_id`) VALUES ('eixos.create', 1, 2), ('eixos.destroy', 1, 2), ('eixos.edit', 1, 2), ('eixos.index', 1, 2), ('eixos.show', 1, 2);

/* crud professores */
INSERT INTO `permissions` (`regra`, `permissao`, `type_id`) VALUES ('professores.create', 0, 2), ('professores.destroy', 0, 2), ('professores.edit', 0, 2), ('professores.index', 1, 2), ('professores.show', 0, 2);


/* PERMISSOES DE DIRETORES */

/* crud alunos */
INSERT INTO `permissions` (`regra`, `permissao`, `type_id`) VALUES ('alunos.create', 1, 3), ('alunos.destroy', 1, 3), ('alunos.edit', 1, 3), ('alunos.index', 1, 3), ('alunos.show', 1, 3);

/* crud cursos */
INSERT INTO `permissions` (`regra`, `permissao`, `type_id`) VALUES ('cursos.create', 1, 3), ('cursos.destroy', 1, 3), ('cursos.edit', 1, 3), ('cursos.index', 1, 3), ('cursos.show', 1, 3);

/* crud disciplinas */
INSERT INTO `permissions` (`regra`, `permissao`, `type_id`) VALUES ('disciplinas.create', 1, 3), ('disciplinas.destroy', 1, 3), ('disciplinas.edit', 1, 3), ('disciplinas.index', 1, 3), ('disciplinas.show', 1, 3);

/* crud eixos */
INSERT INTO `permissions` (`regra`, `permissao`, `type_id`) VALUES ('eixos.create', 1, 3), ('eixos.destroy', 1, 3), ('eixos.edit', 1, 3), ('eixos.index', 1, 3), ('eixos.show', 1, 3);

/* crud professores */
INSERT INTO `permissions` (`regra`, `permissao`, `type_id`) VALUES ('professores.create', 1, 3), ('professores.destroy', 1, 3), ('professores.edit', 1, 3), ('professores.index', 1, 3), ('professores.show', 1, 3);
