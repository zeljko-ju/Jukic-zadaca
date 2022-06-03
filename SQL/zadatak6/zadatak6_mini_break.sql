#C:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8  < C:\Users\php\Documents\GitHub\Jukic-zadaca\SQL\zadatak6\zadatak6_mini_break.sql

drop database if exists dz6_mini_break;
create database dz6_mini_break;
use dz6_mini_break;

create table brat (
    sifra int not null primary key auto_increment,
    nausnica int not null,
    treciputa datetime not null,
    narukvica int not null,
    hlace varchar(31),
    prijatelj int
);

create table zena (
    sifra int not null primary key auto_increment,
    novcica int not null, 
    narukvica int not null,
    dukserica varchar(31) not null,
    haljina varchar(30),
    hlace varchar(32),
    brat int not null
);

create table decko (
    sifra int not null primary key auto_increment,
    prviputa datetime,
    modelnaocala varchar(41),
    nausnica int,
    zena int not null
);

create table prijatelj(
    sifra int not null primary key auto_increment,
    haljina varchar(35),
    prstena int not null, 
    introvertno boolean,
    stilfrizura varchar(36) not null
);

create table prijatelj_ostavljena(
    sifra int not null primary key auto_increment,
    prijatelj int not null,
    ostavljena int not null
);

create table ostavljena (
    sifra int not null primary key auto_increment,
    prviputa datetime not null,
    kratkamajica varchar(39) not null, 
    drugiputa datetime,
    maraka decimal(14,10)
);

create table svekrva(
    sifra int not null primary key auto_increment,
    hlace varchar(48) not null,
    suknja varchar(42) not null,
    ogrljica int not null,
    treciputa datetime not null, 
    dukserica varchar(32) not null,
    punac int not null

);

create table punac (
    sifra int not null primary key auto_increment,
    ekstroventno boolean not null, 
    suknja varchar(30) not null,
    majica varchar(44) not null,
    prviputa datetime not null
);


alter table zena add foreign key (brat) references brat(sifra);
alter table decko add foreign key (zena) references zena(sifra);
alter table brat add foreign key (prijatelj) references prijatelj(sifra);
alter table prijatelj_ostavljena add foreign key (prijatelj) references prijatelj(sifra);
alter table prijatelj_ostavljena add foreign key (ostavljena) references ostavljena(sifra);
alter table svekrva add foreign key (punac) references punac(sifra);





#zena, brat, prilatej x3291

