#C:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8  < C:\Users\php\Documents\GitHub\Jukic-zadaca\SQL\zadatak16\zadatak16_mini_break.sql


drop database if exists dz16_mini_break;
create database dz16_mini_break;
use dz16_mini_break;

create table punac (
    sifra int not null primary key auto_increment,
    kratkamajica varchar(45),
    bojakose varchar(41),
    novcica decimal(16,8),
    treciputa datetime not null
);

create table brat (
    sifra int not null primary key auto_increment,
    vesta varchar(44),
    dukserica varchar(34),
    prstena int,
    majica varchar(36) not null,
    punac int not null
);

create table mladic (
    sifra int not null primary key auto_increment,
    haljina varchar(30),
    lipa decimal(12,8),
    kratkamajica varchar(33),
    kuna decimal (12,10),
    treciputa datetime not null,
    brat int not null
);

create table svekrva (
    sifra int not null primary key auto_increment,
    jmbag char (11), 
    ogrlica int,
    bojakose varchar(40),
    drugiputa datetime not null,
    mladic int not null
);

create table punac_zarucnik (
    sifra int not null primary key auto_increment,
    punac int not null,
    zarucnik int not null
);

create table zarucnik (
    sifra int not null primary key auto_increment,
    novcica decimal (13,9) not null,
    bojakose varchar(41) not null,
    kuna decimal(16,8) not null,
    prstena int not null, 
    kratkamajica varchar(44) not null, 
    nausnica int not null

);

create table zena (
    sifra int not null primary key auto_increment,
    gustoca decimal (12,8),
    lipa decimal (16,6),
    ogrlica int,
    carape varchar(32),
    nausnica int not null,
    modelnaocala varchar(46) not null,
    prijatelj int not null
);
create table prijatelj (
    sifra int not null primary key auto_increment,
    treciputa datetime,
    majica varchar(49),
    asocijalno boolean not null,
    hlace varchar(42)

);

alter table punac_zarucnik add foreign key (zarucnik) references zarucnik(sifra);
alter table punac_zarucnik add foreign key (punac) references punac(sifra);
alter table brat add foreign key (punac) references punac(sifra);
alter table mladic add foreign key (brat) references brat(sifra);
alter table svekrva add foreign key (mladic) references mladic(sifra);
alter table zena add foreign key (prijatelj) references prijatelj(sifra);


#U tablice mladic,
# brat i punac_zarucnik unesite po 3 retka. (7)


INSERT INTO mladic
(haljina, lipa, kratkamajica, kuna, treciputa, brat)
VALUES(NULL, NULL, NULL, NULL, '2022-05-04', 1),
(NULL, NULL, NULL, NULL, '2022-03-03', 2),
(NULL, NULL, NULL, NULL, '2022-01-01', 3);

INSERT INTO dz16_mini_break.punac
(kratkamajica, bojakose, novcica, treciputa)
VALUES(NULL, NULL, NULL, '2014-04-04');


INSERT INTO brat(vesta, dukserica, prstena, majica, punac)
VALUES(NULL, NULL, NULL, 'crna', 1),
(NULL, NULL, NULL, 'zuta', 1),
(NULL, NULL, NULL, 'bijela', 1);


INSERT INTO dz16_mini_break.zarucnik
(novcica, bojakose, kuna, prstena, kratkamajica, nausnica)
VALUES(15, 'crna', 1000, 10, 'bijela', 10),
(13, 'crna', 156, 1, 'bez rukava', 1);

INSERT INTO dz16_mini_break.punac_zarucnik
(punac, zarucnik)
VALUES(1, 1),
(1,3),
(1,2);

update zena set lipa=13.77;

delete from svekrva where ogrlica !=18;

select prstena from brat where dukserica like '%ana%';

select a.kuna, f.drugiputa, e.lipa 
from 
zarucnik a inner join punac_zarucnik b
on a.sifra =b.zarucnik 
inner join punac c
on b.punac = c.sifra 
inner join brat d
on c.sifra =d.punac 
inner join mladic e 
on d.sifra = e.brat 
inner join svekrva f  
on e.sifra = f.mladic 
where d.dukserica like 'a%' and c.bojakose like '%ba%'
order by e.lipa;

select a.bojakose, a.novcica 
from punac a right join punac_zarucnik b
on a.sifra =b.punac ;

#21:57 bez provjere