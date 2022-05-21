#u samostanu se nalaze svećenici, svaki svećenik
#je zaduzen za vise poslova, jedan posao moze obavljati vise svećenika, 
#svaki svecenik ima nadređenog
## C:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8  < C:\Users\php\Documents\GitHub\Jukic-zadaca\samostan.sql

drop database if exists samostan;
create database samostan;
use samostan;

create table svecenik (
    sifra int not null primary key auto_increment,
    ime varchar(50),
    prezime varchar(50),
    zaduzenje int, 
    nadredeni int

);

create table nadredeni (
    sifra int not null primary key auto_increment,
    ime varchar(50),
    prezime varchar(50)

);

create table zaduzenje (
    sifra int not null primary key auto_increment,
    svecenik int, 
    posao int, 
    termin datetime
    
);

create table posao (
    sifra int not null primary key auto_increment,
    opis_posla varchar(50)
);

alter table svecenik add foreign key (nadredeni) references nadredeni(sifra);
alter table zaduzenje add foreign key (svecenik) references svecenik(sifra);
alter table zaduzenje add foreign key (posao) references posao(sifra);