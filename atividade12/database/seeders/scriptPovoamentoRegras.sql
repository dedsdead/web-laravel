/* crud alunos */
INSERT INTO `rules` (`name`) VALUES ('alunos.create'), ('alunos.destroy'), ('alunos.edit'), ('alunos.index'), ('alunos.show');

/* crud cursos */
INSERT INTO `rules` (`name`) VALUES ('cursos.create'), ('cursos.destroy'), ('cursos.edit'), ('cursos.index'), ('cursos.show');

/* crud disciplinas */
INSERT INTO `rules` (`name`) VALUES ('disciplinas.create'), ('disciplinas.destroy'), ('disciplinas.edit'), ('disciplinas.index'), ('disciplinas.show');

/* crud eixos */
INSERT INTO `rules` (`name`) VALUES ('eixos.create'), ('eixos.destroy'), ('eixos.edit'), ('eixos.index'), ('eixos.show');

/* crud professores */
INSERT INTO `rules` (`name`) VALUES ('professores.create'), ('professores.destroy'), ('professores.edit'), ('professores.index'), ('professores.show');

/* crud vinculos */
INSERT INTO `rules` (`name`) VALUES ('vinculos.index'), ('vinculos.store');

/* crud matriculas */
INSERT INTO `rules` (`name`) VALUES ('matriculas.store'), ('matriculas.show');