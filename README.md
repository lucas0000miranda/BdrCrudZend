# CRUD Zend for BDR Talents Corporate

## Introduction

This is a skeleton application using the Zend Framework MVC layer and module
systems. Also, comes with a feature that allows you to upload users avatar pictures and listed then.

## Setup

### Pre-requisites:

* XAMPP as server
* Composer

### Installation

First we need to clone the project.

```bash
cd ~/code # or whatever directory you keep your projects in

git clone git@github.com:lucas0000miranda/BdrCrudZend.git
cd BdrCrudZend
```

Install the composer as globally (recommended).
```bash
sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer
```
Update dependencies
```bash
$ composer update
```

Install any Editor (nano/vim)
```bash
$ apt-get install vim
```
Change the localholst target to 'BdrCrudZend/public'
Do the:
```bash
http://localhost:8080/
```

# Data Base

For run the database, you can use SQLITE and run the schema.sql (data/schema.sql). Or do that directlly:
```bash
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
```

