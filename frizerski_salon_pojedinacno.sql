

drop database if exists frizerski_salon;
create database frizerski_salon;
use frizerski_salon;

create table djelatnice (
    ime varchar(50),
    prezime varchar(50),
    usluga varchar(50),
    smjena datetime
);
create table korisnici (
    ime varchar(50),
    prezime varchar (50),
    termin datetime
);
