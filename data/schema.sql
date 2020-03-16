CREATE TABLE `bdr` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `phone` VARCHAR(12) NOT NULL,
    `picture` VARCHAR(100),
    PRIMARY KEY (`id`)
) COLLATE='utf8_general_ci' ENGINE=InnoDB;

INSERT INTO `bdr` (`name`, `email`, `phone`, `picture`)
 VALUES ('Lucas', 'lucas.dev@em.com.br', '76512953632', '');

 INSERT INTO `bdr` (`name`, `email`, `phone`, `picture`)
 VALUES ('Talita', 'Talita.wifw@em.com.br', '4283929383', '');

 INSERT INTO `bdr` (`name`, `email`, `phone`, `picture`)
 VALUES ('Nalva', 'nalva.mom@em.com.br', '5674342323', '');

 INSERT INTO `bdr` (`name`, `email`, `phone`, `picture`)
 VALUES ('Elias', 'elias.dad@em.com.br', '9803434123', '');

 INSERT INTO `bdr` (`name`, `email`, `phone`, `picture`)
 VALUES ('Wilson', 'wilson.inlaw@em.com.br', '5432432400', '');
