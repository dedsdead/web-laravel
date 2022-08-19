/* PERMISSOES DE PROFESSORES */

/* crud alunos */
INSERT INTO `permissions` (`rule_id`, `role_id`, `permissao`) VALUES (1, 1, 0), (2, 1, 0), (3, 1, 0), (4, 1, 0), (5, 1, 0);

/* crud cursos */
INSERT INTO `permissions` (`rule_id`, `role_id`, `permissao`) VALUES (6, 1, 0), (7, 1, 0), (8, 1, 0), (9, 1, 1), (10, 1, 0);

/* crud disciplinas */
INSERT INTO `permissions` (`rule_id`, `role_id`, `permissao`) VALUES (11, 1, 0), (12, 1, 0), (13, 1, 0), (14, 1, 0), (15, 1, 0);

/* crud eixos */
INSERT INTO `permissions` (`rule_id`, `role_id`, `permissao`) VALUES (16, 1, 0), (17, 1, 0), (18, 1, 0), (19, 1, 1), (20, 1, 0);

/* crud professores */
INSERT INTO `permissions` (`rule_id`, `role_id`, `permissao`) VALUES (21, 1, 0), (22, 1, 0), (23, 1, 0), (24, 1, 0), (25, 1, 0);

/* crud vinculos */
INSERT INTO `permissions` (`rule_id`, `role_id`, `permissao`) VALUES (26, 1, 0), (27, 1, 0);

/* crud matriculas */
INSERT INTO `permissions` (`rule_id`, `role_id`, `permissao`) VALUES (28, 1, 0), (29, 1, 0);


/* PERMISSOES DE COORDENADORES */

/* crud alunos */
INSERT INTO `permissions` (`rule_id`, `role_id`, `permissao`) VALUES (1, 2, 0), (2, 2, 0), (3, 2, 0), (4, 2, 1), (5, 2, 0);

/* crud cursos */
INSERT INTO `permissions` (`rule_id`, `role_id`, `permissao`) VALUES (6, 2, 1), (7, 2, 1), (8, 2, 1), (9, 2, 1), (10, 2, 1);

/* crud disciplinas */
INSERT INTO `permissions` (`rule_id`, `role_id`, `permissao`) VALUES (11, 2, 0), (12, 2, 0), (13, 2, 0), (14, 2, 1), (15, 2, 0);

/* crud eixos */
INSERT INTO `permissions` (`rule_id`, `role_id`, `permissao`) VALUES (16, 2, 1), (17, 2, 1), (18, 2, 1), (19, 2, 1), (20, 2, 1);

/* crud professores */
INSERT INTO `permissions` (`rule_id`, `role_id`, `permissao`) VALUES (21, 2, 0), (22, 2, 0), (23, 2, 0), (24, 2, 1), (25, 2, 0);

/* crud vinculos */
INSERT INTO `permissions` (`rule_id`, `role_id`, `permissao`) VALUES (26, 2, 0), (27, 2, 0);

/* crud matriculas */
INSERT INTO `permissions` (`rule_id`, `role_id`, `permissao`) VALUES (28, 2, 1), (29, 2, 1);

/* PERMISSOES DE DIRETORES */

/* crud alunos */
INSERT INTO `permissions` (`rule_id`, `role_id`, `permissao`) VALUES (1, 3, 1), (2, 3, 1), (3, 3, 1), (4, 3, 1), (5, 3, 1);

/* crud cursos */
INSERT INTO `permissions` (`rule_id`, `role_id`, `permissao`) VALUES (6, 3, 1), (7, 3, 1), (8, 3, 1), (9, 3, 1), (10, 3, 1);

/* crud disciplinas */
INSERT INTO `permissions` (`rule_id`, `role_id`, `permissao`) VALUES (11, 3, 1), (12, 3, 1), (13, 3, 1), (14, 3, 1), (15, 3, 1);

/* crud eixos */
INSERT INTO `permissions` (`rule_id`, `role_id`, `permissao`) VALUES (16, 3, 1), (17, 3, 1), (18, 3, 1), (19, 3, 1), (20, 3, 1);

/* crud professores */
INSERT INTO `permissions` (`rule_id`, `role_id`, `permissao`) VALUES (21, 3, 1), (22, 3, 1), (23, 3, 1), (24, 3, 1), (25, 3, 1);

/* crud vinculos */
INSERT INTO `permissions` (`rule_id`, `role_id`, `permissao`) VALUES (26, 3, 1), (27, 3, 1);

/* crud matriculas */
INSERT INTO `permissions` (`rule_id`, `role_id`, `permissao`) VALUES (28, 3, 1), (29, 3, 1);