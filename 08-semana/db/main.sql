drop database if exists academico;

create database if not exists academico;

use academico;

create table if not exists estudiantes(
    id_estudiante integer unsigned not null primary key auto_increment,
    `name` varchar(100) not null,
    `lastname` varchar(100) not null,
    `email` varchar(100) not null unique,
    `description` text ,
    `created_at` timestamp not null default current_timestamp,
    `updated_at` timestamp not null default current_timestamp on update current_timestamp

);

SHOW VARIABLES LIKE 'validate_password%';
mysql> SET GLOBAL validate_password.length = 4;
mysql> SET GLOBAL validate_password.policy=LOW;
SET GLOBAL validate_password.policy = 0;

