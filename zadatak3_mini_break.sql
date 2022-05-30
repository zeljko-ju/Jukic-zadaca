#C:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8  < C:\Users\php\Documents\GitHub\Jukic-zadaca\zadatak3_mini_break.sql
#pokusaj 3. zadatak: sve osim 5. zadatka napraviti u komadu vrijeme:


drop database if exists dz3_mini_break;
create database dz3_mini_break;
use dz3_mini_break;

create table svekar (
    sifra int not null primary key auto_increment,
    novcica decimal(16,8) not null,
    suknja varchar(48) not null,
    bojakose varchar(36),
    prstena int,
    narukvica int,
    cura int
);

create table cura (
    sifra int not null primary key auto_increment,
    dukserica varchar (49),
    marka decimal(13,7),
    drugiputa datetime,
    majica varchar(49),
    novcica decimal(15,8),
    ogrlica int not null
);

create table ostavljena (
    sifra int not null primary key auto_increment,
    kuna decimal(17,5),
    lipa decimal(15,6),
    majica varchar(36),
    modelnaocala varchar(31) not null,
    prijatelj int
);

create table prijatelj (
    sifra int not null primary key auto_increment,
    kuna decimal(16,10),
    haljina varchar(37),
    lipa decimal(13,10),
    dukserica varchar(31),
    indiferentno bit not null
);

create table snasa (
    sifra int not null primary key auto_increment,
    introvertno bit,
    kuna decimal(15,6)not null,
    eura decimal(12,9)not null,
    treciputa datetime, 
    ostavljena int not null
);

create table punica (
    sifra int not null primary key auto_increment,
    asocijalno bit, 
    kratkamajica varchar(44),
    kuna decimal(13,8)not null,
    vesta varchar(32) not null,
    snasa int
);

create table prijatelj_brat(
    sifra int not null primary key auto_increment,
    prijatelj int not null, 
    brat int not null
);

create table brat (
    sifra int not null primary key auto_increment,
    jmbag char(11),
    ogrlica int not null, 
    ekstroventno bit not null
);

alter table svekar add foreign key (cura) references cura(sifra);
alter table punica add foreign key (snasa) references snasa(sifra);
alter table snasa add foreign key (ostavljena) references ostavljena(sifra);
alter table ostavljena add foreign key (prijatelj) references prijatelj(sifra);
alter table prijatelj_brat add foreign key (prijatelj) references prijatelj(sifra);
alter table prijatelj_brat add foreign key (brat) references brat(sifra);


#. U tablice snasa, ostavljena i prijatelj_brat unesite po 3 retka. (7)

insert into brat (sifra, jmbag, ogrlica, ekstroventno)
    values (null, 11223344556, 1, 0),
    (null, 18863344556, 6, 0),
    (null, 11223349956, 3, 1);
insert into prijatelj (sifra, kuna, haljina, lipa, dukserica, indiferentno)
	values(null, 344.778,'crna',13.33,'bijela',0),
	(null, 344.168,'crna',3.33,'šarena',1),
	(null, 316.778,'crna',93.33,'bijela',0);
	
insert into prijatelj_brat(sifra, prijatelj, brat)
	values (null, 1, 1),
	(null, 2,2),
	(null, 3,3);

insert into ostavljena (sifra, kuna, lipa, majica, modelnaocala, prijatelj)
	values(null, 5004.55, 15.5, 'dolcevita', 'ray ban', 1),
(null, 22995.5, 7785.5, 'duga majica', 'police', 1),
(null, 5.25, 19.5, 'kratka majica', 'armani', 3);

insert into snasa (sifra, introvertno, kuna, eura, treciputa, ostavljena)
	values (null, 0, 98885.45, 1.5, '2022-03-03', 1),
(null, 0, 85.45, 105.5, '2022-01-01', 3);
select * from snasa;
select * from prijatelj_brat;

	values (null, 155.2, 'bijela');
#3. zadatak'
select 'osijek' as suknja from svekar;
#ili 
update svekar set suknja= 'osijek';
#4. zadatak
delete from punica where kratkamajica='AB';
#6. zadatak Prikažite kolone haljina i lipa iz tablice prijatelj čiji se primarni ključ 
#ne nalaze u tablici prijatelj_brat. (5
select b.haljina, b.lipa, a.brat
from 
prijatelj_brat a right join prijatelj b 
on a.prijatelj =b.sifra;


select a.ekstroventno, f.vesta, e.kuna 
from
brat a right join prijatelj_brat b
 on a.sifra = b.brat 
 inner join prijatelj c
 on b.prijatelj = c.sifra 
 inner join ostavljena d 
 on c.sifra = d.prijatelj 
 left join snasa e
 on d.sifra = e.ostavljena 
 left join punica f
 on e.sifra = f.snasa