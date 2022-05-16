#C:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8 < C:\Users\php\Documents\GitHub\Jukic-zadaca\udruga_za_zastitu_zivotinja.sql



drop database if exists udruga_za_zastitu_zivotinja;
create database udruga_za_zastitu_zivotinja;
use udruga_za_zastitu_zivotinja;

create table djelatnik (
    sifra int not null primary key auto_increment,
    ime varchar(50),
    prezime varchar(50),
    sticenik int,
    broj_sticenika varchar(50)
);

create table sticenik (
    sifra int not null primary key auto_increment,
    sticenik varchar(50),
    djelatnik int,
    vrsta_zivotinje varchar(50),
    pasmina varchar(50)
);


create table prostor (
    sifra int not null primary key auto_increment,
    sticenik int not null,
    broj_prostora varchar(50)

);

alter table sticenik add foreign key(djelatnik) references djelatnik(sifra);
alter table prostor  add foreign key(sticenik) references sticenik(sifra);


insert into sticenik (sticenik, vrsta_zivotinje, pasmina)
values ('Bobi', 'pas', 'mješanac');

insert into sticenik (sticenik, vrsta_zivotinje, pasmina)
values ('Ares', 'pas', 'staford');

insert into sticenik (sticenik, vrsta_zivotinje, pasmina)
values ('Kitty', 'mačka', 'mjesanac');

insert into djelatnik (ime, prezime, sticenik, broj_sticenika)
values ('Marko', 'Marković', 1, '5');



