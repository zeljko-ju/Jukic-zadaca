drop database if exists urar;
create database urar;
use urar;

create table urar (
    ime varchar(50),
    lokacija varchar(50),
    radno_vrijeme datetime

);
create table korisnici (
    ime varchar,
    prezime varchar,
    kontakt varchar(50),
);