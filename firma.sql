#C:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8 < C:\Users\php\Documents\GitHub\Jukic-zadaca\firma.sql

drop database if exists firma;
create database firma;
use firma;

create table projekt (
    sifra int not null primary key auto_increment,
    naziv varchar(50),
    cijena decimal(18,2)
);

create table sudjeluje (
    sifra int not null primary key auto_increment,
    projekt int not null,
    programer int,
    datum_pocetka datetime,
    datum_kraja datetime 

);

create table programer (
    sifra int not null primary key auto_increment,
    ime varchar(50),
    prezime varchar(50),
    datum_rodena datetime,
    placa decimal(18,2)
);


alter table sudjeluje add foreign key (projekt) references projekt(sifra);
alter table sudjeluje add foreign key (programer) references programer(sifra);
