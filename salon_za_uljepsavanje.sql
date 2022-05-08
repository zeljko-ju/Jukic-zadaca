
drop database if exists salon_za_uljepsavanje;
create database salon_za_uljepsavanje;
use salon_za_uljepsavanje;

create table djelatnice (
    ime varchar(50),
    prezime varchar(50),
    usluga varchar(50),
    termin datetime


);
create table korisnici (
    ime varchar(50),
    prezime varchar (50),
    termin datetime
);