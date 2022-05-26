#C:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8  < C:\Users\php\Documents\GitHub\Jukic-zadaca\zadatak1_mini_break_DZ.sql
#vrijeme start1 17:38  stop 17:49

drop database if exists dz_vjezba1;
create database dz_vjezba1;
use dz_vjezba1;

create table sestra (
    sifra int not null primary key auto_increment,
    introvertno boolean,
    haljina varchar(31),
    marka decimal(16,6),
    hlace varchar(46),
    narukvica int
);

create table zena (
    sifra int not null primary key auto_increment,
    treciputa datetime,
    hlace varchar(46),
    kratkamajica varchar(31),
    jmbag char(11),
    bojaociju varchar(39),
    haljina varchar(44),
    sestra int
);
create table muskarac (
    sifra int not null primary key auto_increment,
    bojaociju varchar(50),
    hlace varchar(50),
    modelnaocala varchar(43),
    marka decimal(14,5),
    zena int
);
create table mladic (
    sifra int not null primary key auto_increment,
    suknja varchar(50),
    kuna decimal(16,8),
    drugiputa datetime, 
    asocijalno boolean,
    ekstroventno boolean, 
    dukserica varchar(48),
    muskarac int

);
create table sestra_svekar (
    sifra int not null primary key auto_increment,
    sestra int, 
    svekar int
);
create table svekar (
    sifra int not null primary key auto_increment,
    bojaociju varchar(40),
    prstena int,
    dukserica varchar(41),
    lipa decimal (13,8),
    eura decimal (12, 7),
    majica varchar(35)
);

alter table zena add foreign key (sestra) references sestra(sifra);


