drop database if exists todo;
create database todo;
use todo;

create table zadatak (
    sifra int not null primary key auto_increment,
    zadaci varchar(255)

);