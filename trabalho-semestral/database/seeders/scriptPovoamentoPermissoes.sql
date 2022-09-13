/* PERMISSOES DE VISITANTES */

/* crud clientes */
INSERT INTO `permissions` (`resource_id`, `role_id`, `permission`) VALUES (1, 1, 0), (2, 1, 0), (3, 1, 0), (4, 1, 0), (5, 1, 0);

/* crud propriedades */
INSERT INTO `permissions` (`resource_id`, `role_id`, `permission`) VALUES (6, 1, 0), (7, 1, 0), (8, 1, 0), (9, 1, 1), (10, 1, 1);

/* crud vendas */
INSERT INTO `permissions` (`resource_id`, `role_id`, `permission`) VALUES (11, 1, 0), (12, 1, 0), (13, 1, 0), (14, 1, 0), (15, 1, 0);


/* PERMISSOES DE CORRETORES */

/* crud clientes */
INSERT INTO `permissions` (`resource_id`, `role_id`, `permission`) VALUES (1, 2, 1), (2, 2, 1), (3, 2, 1), (4, 2, 1), (5, 2, 1);

/* crud propriedades */
INSERT INTO `permissions` (`resource_id`, `role_id`, `permission`) VALUES (6, 2, 1), (7, 2, 1), (8, 2, 1), (9, 2, 1), (10, 2, 1);

/* crud vendas */
INSERT INTO `permissions` (`resource_id`, `role_id`, `permission`) VALUES (11, 2, 1), (12, 2, 1), (13, 2, 1), (14, 2, 1), (15, 2, 1);