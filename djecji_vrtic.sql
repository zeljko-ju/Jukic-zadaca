drop database if exists djecji_vrtic;
create database djecji_vrtic;
use djecji_vrtic

create table odgajateljice (
    ime varchar(50),
    prezime varchar(50),
    odgojna_skupina varchar(50)
);
create table djeca (
    ime varchar(50),
    prezime varchar(50),
    uzrast varchar(50)
);