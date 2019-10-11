# LoginCRUD_PHP_No_OOP
Login and CRUD in PHP without Object Oriented Programming

This is the database

CREATE DATABASE misfinanzas;
USE misfinanzas;
CREATE TABLE `operations` (
  `id` int(11) NOT NULL,
  `description` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `value` float NOT NULL,
  `type` enum('Ingreso','Egreso') COLLATE utf8_unicode_ci NOT NULL,
  `fk_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE `operations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user` (`fk_user`) USING BTREE;
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `operations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `operations`
  ADD CONSTRAINT `operations_ibfk_1` FOREIGN KEY (`fk_user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;
