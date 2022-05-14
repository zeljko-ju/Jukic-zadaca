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
    datum_rodjenja datetime,
    placa decimal(18,2)
);


alter table sudjeluje add foreign key (projekt) references projekt(sifra);
alter table sudjeluje add foreign key (programer) references programer(sifra);

insert into projekt (naziv, cijena)
values ('edunovapp25', '74999,99');

insert into programer (ime, prezime, datum_rodjenja, placa)
values ('Željko', 'Jukić', '1991-03-26', '7865,14');

insert into sudjeluje (projekt, programer, datum_pocetka, datum_kraja)
values (1, 1, '2022-03-03', '2028-01-01');
