#C:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8  < C:\Users\php\Documents\GitHub\Jukic-zadaca\zadatak4_mini_break.sql
drop database if exists dz4_mini_break;
create database dz4_mini_break;
use dz4_mini_break;
#1

create table punac (
    sifra int not null primary key auto_increment,
    treciputa datetime, 
    majica varchar (46),
    jmbag char (11) not null,
    novcica decimal(18,7) not null,
    maraka decimal(12,6) not null,
    ostavljen int not null

);

create table ostavljen (
    sifra int not null primary key auto_increment,
    modelnaocala varchar(43),
    introvertno bit,
    kuna decimal(14,10)

);

create table snasa (
    sifra int not null primary key auto_increment,
    introvertno bit,
    treciputa datetime, 
    haljina varchar(44) not null,
    zena int not null
);

create table becar (
    sifra int not null primary key auto_increment,
    novcica decimal(14,8),
    kratkamajica varchar(48) not null,
    bojaociju varchar(36) not null,
    snasa int not null
);

create table prijatelj (
    sifra int not null primary key auto_increment,
    eura decimal(16,9),
    prstena int not null, 
    gustoca decimal(16,5),
    jmbag char(11) not null,
    suknja varchar(47) not null,
    becar int not null
);

 create table zena (
    sifra int not null primary key auto_increment,
    suknja varchar(39) not null,
    lipa decimal (18,7),
    prstena int not null
 );

 create table zena_mladic (
    sifra int not null primary key auto_increment,
    zena int not null, 
    mladic int not null
 );

create table mladic (
    sifra int not null primary key auto_increment,
    kuna decimal(15,9),
    lipa decimal(18,5),
    nausnica int,
    stilfrizura varchar(49),
    vesta varchar (34) not null
);

alter table punac add foreign key (ostavljen) references ostavljen(sifra);
alter table becar add foreign key (snasa) references snasa(sifra);
alter table prijatelj add foreign key (becar) references becar(sifra);
alter table snasa add foreign key (zena) references zena(sifra);
alter table zena_mladic add foreign key (zena) references zena(sifra);
alter table zena_mladic add foreign key (mladic) references mladic(sifra);

#2
insert into zena (sifra, suknja, prstena)
    values (null, 'kratka', 11);

    insert into mladic (sifra, vesta)
    values (null, 'kratka');

insert into snasa (sifra, introvertno, treciputa, haljina, zena)
    values(null, 1, '2001-06-06', 'plava duga', 1),
        (null, 1, '2021-06-09', 'duga', 1),
        (null, 1, '2011-03-06', 'ružičasta', 1);

insert into becar (sifra, novcica, kratkamajica, bojaociju, snasa)
    values(null, 155.55,'crna bez rukava', 'plava', 1),
    (null, 16,'bez rukava', 'plava', 1),
    (null, 1.5,'crna', 'bež', 1);

insert into mladic (sifra, vesta)
    values (null, 'kratka');

insert into zena_mladic (zena, mladic)
    values(1,1),
    (1,1),
    (1,1);