#C:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8 < C:\Users\php\Documents\GitHub\Jukic-zadaca\predavanje_vjezba_zupanija.sql

drop database if exists regionalna_samouprava;
create database regionalna_samouprava default charset utf8mb4;
use regionalna_samouprava;

create table zupanija (
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null,
    zupan int
);

create table zupan (
    sifra int not null primary key auto_increment,
    ime varchar(50),
    prezime varchar(50)
    
    
    
);

create table opcina (
    sifra int not null primary key auto_increment,
    zupanija int,
    naziv varchar(50)
);

create table mjesto (
    sifra int not null primary key auto_increment,
    opcina int not null,
    naziv varchar(50)

);



alter table zupanija add foreign key (zupan) references zupan(sifra);

alter table mjesto add foreign key (opcina) references opcina(sifra);

alter table opcina add foreign key (zupanija) references zupanija(sifra);


insert into zupan (ime, prezime)
values ('Ivan', 'Anušić');

insert into zupan (ime, prezime)
values ('Krešimir', 'Topalović');

insert into zupan (ime, prezime)
values ('Pero', 'Perić');

insert into zupanija (naziv, zupan)
values ('Osječko-baranjska županija', 1);

insert into zupanija (naziv, zupan)
values ('Brodsko-posavska županija', 2);

insert into zupanija (naziv, zupan)
values ('Međimurska', 3);


insert into opcina (zupanija, naziv)
values (1, 'Semeljci');


insert into opcina (zupanija, naziv)
values (1, 'Antunovac');

insert into opcina (zupanija, naziv)
values (2, 'Davor');

insert into opcina (zupanija, naziv)
values (2, 'Nova Kapela');


insert into mjesto (opcina, naziv)
values (2, 'Ernestinovo');

insert into mjesto (opcina, naziv)
values (3, 'Savski Bok');


