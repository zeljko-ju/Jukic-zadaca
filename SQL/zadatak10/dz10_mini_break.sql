#C:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8  < C:\Users\php\Documents\GitHub\Jukic-zadaca\SQL\zadatak10\dz10_mini_break.sql

drop database if exists dz10_mini_break;
create database dz10_mini_break;
use dz10_mini_break;


create table djevojka (
    sifra int not null primary key auto_increment,
    kratkamajica varchar(45),
    prstena int, 
    ekstroventno boolean not null,
    majica varchar(42) not null,
    introvertno boolean not null,
    svekrva int 
);

create table punica (
    sifra int not null primary key auto_increment,
    carape varchar(33) not null,
    drugiputa datetime,
    majica varchar(40) not null,
    haljina varchar(30) not null,
    bojakose varchar(37) not null,
    djevojka int not null
);

create table svekrva (
    sifra int not null primary key auto_increment,
    narukvica int not null,
    carape varchar(39) not null, 
    haljina varchar(31), 
    punac int not null
);

create table punac (
    sifra int not null primary key auto_increment,
    jmbag char (11),
    kuna decimal (16,5) not null,
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
    gustoca decimal (12,6),
    neprijatelj int not null
);

create table neprijatelj (
    sifra int not null primary key auto_increment,
    narukvica int not null,
    novcica decimal(12,8) not null, 
    bojakose varchar(39) not null,
    gustoca decimal(14,10), 
    introvertno boolean not null, 
    asocijalno boolean
);

alter table punica add foreign key (djevojka) references djevojka(sifra);
alter table djevojka add foreign key (svekrva) references svekrva(sifra);
alter table svekrva add foreign key (punac) references punac(sifra);
alter table punac_mladic add foreign key (punac) references punac(sifra);
alter table punac_mladic add foreign key (mladic) references mladic(sifra);
alter table muskarac add foreign key (neprijatelj) references neprijatelj(sifra);


INSERT INTO djevojka
(kratkamajica, prstena, ekstroventno, majica, introvertno, svekrva)
VALUES('bijela', NULL, 1, 'šarena', 0, 1),
('žuta', NULL, 1, 'bijela', 0, 3),
('ružičasta', NULL, 1, 'lila', 0, 2);

insert into svekrva (sifra, narukvica, carape, punac)
	values (null, 12, 'poderane', 1),
	(null, 120, 'visoke', 1),
	(null, 1, 'niske', 1);

insert into punac (sifra, jmbag, kuna, vesta)
	values(null, 12345432123, 133.55, 'dolcevita'),
	(null, 12345098123, 3.5, 'duboka');

insert into mladic (sifra, ogrlica, drugiputa, hlace)
	values(null, 6, '2022-05-15', 'levis'),
	(null, 65, '2022-05-25', 'tom tailor');

insert into punac_mladic (sifra, punac, mladic)
	values(null, 1, 1),
	(null, 1, 2),
	(null, 2, 1);

update muskarac set novcica =15.7;

delete from punica where drugiputa = '2019-04-08';

select haljina from svekrva where carape like '%ana';

select f.drugiputa, a.haljina, b.prstena 
from 
punica a inner join djevojka b 
on a.djevojka =b.sifra 
inner join svekrva c 
on b.svekrva = c.sifra 
inner join punac d
on c.punac = d.sifra 
inner join punac_mladic e
on d.sifra =e.punac 
inner join mladic f
on e.mladic =f.sifra 
where c.carape like 'a%' and d.kuna !=21
order by b.prstena;

select a.kuna, a.vesta 
from 
punac a right join punac_mladic b
on a.sifra = b.punac ;

#33:29 btw ipak je 11. zadatak



