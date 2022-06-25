
#C:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8  < C:\Users\php\Documents\GitHub\Jukic-zadaca\SQL\zadatak7\zadatak7_mini_break.sql
drop database if exists dz_7_mini_break;
create database dz_7_mini_break;
use dz_7_mini_break;

create table mladic (
    sifra int not null primary key auto_increment,
    prstena int,
    lipa decimal(15,6) not null,
    narukvica int not null,
    drugiputa datetime not null
    
);

create table zarucnik_mladic(
     sifra int not null primary key auto_increment,
     zarucnik int not null,
     mladic int not null
);

create table zarucnik (
     sifra int not null primary key auto_increment,
     vesta varchar (34), 
     asocijalno boolean not null,
     modelnaocala varchar(43),
     narukvica int not null, 
     novcica decimal(15,6) not null
);

create table ostavljen (
     sifra int not null primary key auto_increment,
     lipa decimal(14,6),
     introvertno boolean not null,
     kratkamajica varchar(38) not null,
     prstena int not null,
     zarucnik int
);

create table prijateljica (
     sifra int not null primary key auto_increment,
     haljina varchar(45),
     gustoca decimal(15,10) not null, 
     ogrilica int,
     novcica decimal(12,5),
     ostavljen int 
);

create table sestra (
     sifra int not null primary key auto_increment,
     bojakose varchar(34) not null,
     hlace varchar(36) not null,
     lipa decimal (15,6),
     stilfrizura varchar(40) not null,
     maraka decimal(12,8) not null,
     prijateljica int
);

create table punica (
     sifra int not null primary key auto_increment,
    majica varchar(40),
    eura decimal(12,6) not null,
    prstena int,
    cura int not null
);

create table cura(
     sifra int not null primary key auto_increment,
     lipa decimal (12,9) not null,
     introvertno boolean, 
     modelnaocala varchar(40),
     treciputa datetime,
     kuna decimal(14,9)
);

alter table zarucnik_mladic add foreign key (mladic) references mladic(sifra);
alter table zarucnik_mladic add foreign key (zarucnik) references zarucnik(sifra);
alter table ostavljen add foreign key (zarucnik) references zarucnik(sifra);
alter table prijateljica add foreign key (ostavljen) references ostavljen(sifra);
alter table sestra add foreign key (prijateljica) references prijateljica(sifra);
alter table punica add foreign key (cura) references cura(sifra);


INSERT INTO prijateljica
(haljina, gustoca, ogrilica, novcica, ostavljen)
VALUES(NULL, 10, NULL, NULL, NULL);
INSERT INTO prijateljica
(haljina, gustoca, ogrilica, novcica, ostavljen)
VALUES(NULL, 100, NULL, NULL, NULL);
INSERT INTO prijateljica
(haljina, gustoca, ogrilica, novcica, ostavljen)
VALUES(NULL, 1000, NULL, NULL, NULL);
 
INSERT INTO zarucnik
(vesta, asocijalno, modelnaocala, narukvica, novcica)
VALUES(NULL, 1, NULL, 1, 10);


INSERT INTO ostavljen
(lipa, introvertno, kratkamajica, prstena, zarucnik)
VALUES(NULL, 10, 'bijela', 4, 1),
(NULL, 75, 'sjajna', 2, 1),
(NULL, 9, 'crnabijela', 4, 1);

insert into mladic (sifra, lipa, narukvica, drugiputa)
values (null, 10,10,'2022-01-01');

INSERT INTO dz_7_mini_break.zarucnik_mladic
(zarucnik, mladic)
VALUES(1,1),
(1,1),
(1,1);


update punica set eura=15.77;

delete from s where hlace =17;

select kratkamajica from ostavljen where introvertno = null;

select f.narukvica, a.stilfrizura, b.gustoca 
from 
sestra a inner join prijateljica b
on a.prijateljica = b.sifra 
inner join ostavljen c
on b.ostavljen =c.sifra 
inner join zarucnik d 
on c.zarucnik = d.sifra 
inner join zarucnik_mladic e 
on d.sifra =e.zarucnik 
inner join mladic f
on e.mladic =f.sifra
where c.introvertno is true and d.asocijalno is true order by b.gustoca ;