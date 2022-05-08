
drop database if exists udruga_za_zastitu_zivotinja;
create database udruga_za_zastitu_zivotinja;
use udruga_za_zastitu_zivotinja;

create table djelatnici (
    ime varchar(50),
    prezime varchar(50),
    broj_sticenika varchar(50)
);

create table sticenici (
    ime varchar(50),
    vrsta_zivotinje varchar(50),
    pasmina varchar(50)
);