#C:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8 < C:\Users\php\Documents\GitHub\Jukic-zadaca\predavanje_vjezba_zupanija.sql

drop database if exists regionalna_samouprava;
create database regionalna_samouprava default charset utf8mb4;
use regionalna_samouprava;

create table zupanija (
    sifra int not null primary key auto_increment,
    naziv varchar(50),
    zupan varchar(50)
);

create table opcina (
    sifra int not null primary key auto_increment,
    zupanija int not null,
    naziv varchar(50)
);

alter table opcina add foreign key (zupanija) references zupanija(sifra);

insert into zupanija (naziv)
values ('Osječko-baranjska županija');

insert into zupanija (naziv)
values ('Brodsko posavska županija');

insert into zupanija (naziv)
values ('Koprivničko-križevačka županija');

insert into opcina (zupanija, naziv)
values (1, 'Čepin');