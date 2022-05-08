drop database if exists doktorska_ordinacija;
create database doktorska_ordinacija;
use doktorska_ordinacija;

create table doktor (
    ime varchar(50),
    prezime varchar(50),
    specijalizacija varchar(50),
    dezurstvo datetime
);

create table sestre(
    ime varchar(50),
    prezime varchar(50),
    odjel varchar(50),
    dezurstvo datetime
);