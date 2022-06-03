#C:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8 < C:\Users\php\Documents\GitHub\Jukic-zadaca\udruga_za_zastitu_zivotinja.sql



drop database if exists udruga_za_zastitu_zivotinja;
create database udruga_za_zastitu_zivotinja;
use udruga_za_zastitu_zivotinja;

create table djelatnik (
    sifra int not null primary key auto_increment,
    ime varchar(50),
    prezime varchar(50)
    
    
);

create table sticenik (
    sifra int not null primary key auto_increment,
    ime varchar(50),
    vrsta_zivotinje varchar(50),
    pasmina varchar(50),
    prostor int,
    djelatnik int
);


create table prostor (
    sifra int not null primary key auto_increment,
    broj_prostora varchar(50)

);

alter table sticenik add foreign key(djelatnik) references djelatnik(sifra);
alter table sticenik add foreign key(prostor) references prostor(sifra);

#unos podataka i test funkcionalnosti

#sticenik
insert into sticenik (ime, vrsta_zivotinje, pasmina)
values ('Bobi', 'pas', 'mješanac');

insert into sticenik (ime, vrsta_zivotinje, pasmina)
values ('Ares', 'pas', 'staford');

insert into sticenik (ime, vrsta_zivotinje, pasmina)
values ('Kitty', 'mačka', 'mjesanac');
#djelatnik
insert into djelatnik (sifra, ime, prezime)
	values (null, 'Marko', 'Kesić');
insert into sticenik (sifra, ime, vrsta_zivotinje, pasmina, djelatnik, prostor)
	values (null, 'boby', 'pas', 'ovčar', 1, 1),
	(null, 'miki', 'pas', 'jazavčar', 1, 1);
#prostor
insert into prostor (sifra, broj_prostora)
	values (null,'PR001');








