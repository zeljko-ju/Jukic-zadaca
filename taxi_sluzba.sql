drop database if exists taxi_sluzba;
create database taxi_sluzba;
use taxi_sluzba;

create table vozac (
    ime varchar(50),
    prezime varchar(50),
    vozilo_br varchar(50),
    recenzija varchar(2),
    br_prevezenih_putnika varchar(5)
);

create table korisnici (
    ime varchar(50),
    lokacija varchar(50),
    odrediste varchar (50)

);