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
```

# Screen Shots
![alt text](![alt text](https://github.com/lucas0000miranda/BdrCrudZend/blob/master/bin/screen_shots/Captura%20de%20Tela%202020-03-15%20%C3%A0s%2022.10.14.png)

![alt text](![alt text](https://github.com/lucas0000miranda/BdrCrudZend/blob/master/bin/screen_shots/Captura%20de%20Tela%202020-03-15%20%C3%A0s%2022.11.04.png)

![alt text](![alt text](https://github.com/lucas0000miranda/BdrCrudZend/blob/master/bin/screen_shots/Captura%20de%20Tela%202020-03-15%20%C3%A0s%2022.11.21.png)

![alt text](![alt text](https://github.com/lucas0000miranda/BdrCrudZend/blob/master/bin/screen_shots/Captura%20de%20Tela%202020-03-15%20%C3%A0s%2022.17.34.png)
