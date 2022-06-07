#C:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8  < C:\Users\php\Documents\GitHub\Jukic-zadaca\zadatak11\dz11_mini_break.sql
drop database if exists dz11_mini_break;
create database dz11_mini_break;
use dz11_mini_break;

create table djevojka (
    sifra int not null primary key auto_increment,
    kratkamajica varchar(45) not null,
    prstena int,
    ekstroventno boolean not null,
    majica varchar(42),
    introvertno boolean not null,
    svekrva int
);

create table punica (
        sifra int not null primary key auto_increment,
        carape varchar(33) not null,
        drugiputa datetime,
        majica varchar(40) not null,
        haljina varchar(30) not null,
        djevojka int not null

);

create table svekrva (
        sifra int not null primary key auto_increment,
        narukvica int not null, 
        carape varchar(39) not null,
        haljina varchar(31) not null,
        punac int not null
);

create table punac (
        sifra int not null primary key auto_increment,
        jmbag char (11),
        kuna decimal(16,5) not null,
        vesta varchar(45) not null
);

create table punac_mladic (
        sifra int not null primary key auto_increment,
        punac int not null,
        mladic int not null
);

create table mladic (
        sifra int not null primary key auto_increment,
        ogrlica int not null,
        stilfrizura varchar(35),
        drugiputa datetime not null,
        hlace varchar(41) not null      

);

create table muskarac (
        sifra int not null primary key auto_increment,
        maraka decimal(16,5),
        novcica decimal(13,10),
        nausnica int,
        narukvica int not null, 
        gustoca decimal(12,6),
        neprijatelj int not null

);

create table neprijatelj (
        sifra int not null primary key auto_increment,
        narukvica int not null,
        novcica decimal (12,8) not null,
        bojakose varchar(39) not null,
        gustoca decimal(14,10),
        introvertno boolean not null,
        asocijalno boolean not null
);


alter table punica add foreign key (djevojka) references djevojka(sifra);
alter table djevojka add foreign key (svekrva) references svekrva(sifra);
alter table svekrva add foreign key (punac) references punac(sifra);
alter table punac_mladic add foreign key (punac) references punac(sifra);
alter table punac_mladic add foreign key (mladic) references mladic(sifra);
alter table muskarac add foreign key (neprijatelj) references neprijatelj(sifra);

#djevojka, svekrva punac_mladic x3
insert into punac (sifra, kuna, vesta)
	values(null, 105.55,'dolcevita'),
(null, 1.55,'dolcevita'),
(null, 5.95,'dolcevita');


INSERT INTO svekrva
(narukvica, carape, haljina, punac)
VALUES(1, 'poderane', 'duga', 1),
(1, 'zimske', 'kratka', 2),
(1, 'šarene', 'duga',3);

INSERT INTO djevojka
(kratkamajica, prstena, ekstroventno, majica, introvertno, svekrva)
VALUES('bez rukava', 1, false, 'crna',true, 1),
('sa rukavima', 5, true, 'bijela',true, 2),
('poderana', 2, false, 'šarena',true, 3);

insert into mladic (sifra, ogrlica, drugiputa, hlace)
	values (null, 4, '2004-04-04', 'kratke'),
	(null, 42, '2014-04-04', 'prljave'),
	(null, 2, '2002-01-06', 'duge');

insert into punac_mladic (sifra, punac, mladic)
	values(null, 1, 1),
	(null, 2, 1),
	(null, 1, 3);

update muskarac  set novcica =15.70;

delete from punica where drugiputa = '2019-04-08';

select haljina from svekrva 
where carape like '%ana%';

#Prikažite drugiputa iz tablice mladic, haljina iz tablice punica te
#prstena iz tablice djevojka uz uvjet da su vrijednosti kolone carape iz 
#tablice svekrva počinju slovom a te da su vrijednosti kolone kuna iz 
#tablice punac različite od 21. Podatke posložite po prstena iz tablice 
#djevojka silazno. (10)


	
select a.drugiputa, f.haljina 
from 
mladic a inner join punac_mladic b
on a.sifra =b.mladic
inner join punac c
on b.punac =c.sifra
inner join svekrva d
on c.sifra =d.punac
inner join djevojka e
on d.sifra =e.svekrva 
inner join punica f
on e.sifra =f.djevojka
where d.carape like 'a%' and c.kuna !=21;

select a.kuna, a.vesta 
from 
punac a right join punac_mladic b 
on a.sifra =b.punac;


#vrijeme: 26:59