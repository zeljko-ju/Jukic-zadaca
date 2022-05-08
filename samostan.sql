drop database samostan if exists;
create database samostan;
use samostan;

create table svecenici (
    ime varchar(50),
    prezime varchar(50),
    red varchar(50),
    zaduzenje varchar(50), 
    nadredeni varchar(50)

);
