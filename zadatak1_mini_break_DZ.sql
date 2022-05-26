#C:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8  < C:\Users\php\Documents\GitHub\Jukic-zadaca\zadatak1_mini_break_DZ.sql
#vrijeme start1 17:38  stop1 17:49 start2 18:50 end2 19:28 start 3 22:00 end3 22:37

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
create table punac(
    sifra int not null primary key auto_increment,
    ogrlica int, 
    gustoca decimal (14,9),
    hlace varchar(41)
);
create table cura (
    sifra int not null primary key auto_increment,
    novcica decimal(16,5),
    gustoca decimal (18,6),
    lipa decimal(13,10),
    ogrlica int,
    bojakose varchar(38), 
    suknja varchar(38),
    punac int

);

alter table zena add foreign key (sestra) references sestra(sifra);
alter table sestra_svekar add foreign key (sestra) references sestra(sifra);
alter table muskarac add foreign key (zena) references zena(sifra);
alter table mladic add foreign key (muskarac) references muskarac(sifra);
alter table sestra_svekar add foreign key (svekar) references svekar(sifra);
alter table cura add foreign key(punac) references punac(sifra);



insert into muskarac (sifra, bojaociju, hlace, marka, modelnaocala,zena)	
	values (null, 'crna', 'levis', 15.78,'ray ban', 1),
	(null, 'smeđa', 'tiger of sweeden', 16.13,'police', 1 ),
	(null, 'plava', 'levis', 15.15, 'Hugo Boss',3) ;
	

insert into zena (sifra, hlace, kratkamajica)
	values (null, 'levis','puma'), 
	(null, 'tiger of sweeden', 'addidas'),
	(null, 'nemam pojma', 'elviton');

select * from muskarac;

#U tablici cura postavite svim zapisima kolonu gustoca na vrijednost 
#15,77. (4)
#3. U tablici mladic obrišite sve zapise čija je vrijednost kolone kuna 
#veće od 15,78. (4


select * from cura;
insert into sestra (sifra, introvertno, haljina, marka)
	values(null, true, 'duga, svečana', '205.6');

insert into svekar (sifra, bojaociju, prstena, dukserica, lipa)
	values (null, 'smeđa', 27, 'plava', 6006.55);
insert into sestra_svekar (sifra, sestra, svekar)
	values (null, 1, 1),
	(null, 1, 1), 
	(null, 1,1);
select * from sestra_svekar;

select * from cura;
#select naziv as smjer, 'Edunova' as skola from smjer;


select 15.77 as gustoca from cura;