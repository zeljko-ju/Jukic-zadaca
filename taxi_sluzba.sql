drop database if exists taxi_sluzba;
create database taxi_sluzba;
use taxi_sluzba;

create table vozac (
    sifra int not null primary key auto_increment,
    ime varchar(50),
    prezime varchar(50),
    marka_vozila varchar(50),
    registarska_oznaka varchar(50),
    broj_vozila decimal(3),
    recenzija decimal(2)
);



create table voznja (
    sifra int not null primary key auto_increment,
    vozac int, 
    vrijeme datetime
);

create table putnik (
    sifra int not null primary key auto_increment,
    ime varchar(50),
    prezime varchar(50),
    loyaty_klub boolean,
    voznja int
);

alter table voznja add foreign key (vozac) references vozac(sifra);
alter table putnik add foreign key (voznja) references voznja(sifra);


#test funkcionalnosti i ubacivanje vrijednosti
#vozači
insert into vozac (sifra, ime, prezime, marka_vozila, registarska_oznaka, broj_vozila, recenzija)
	values (null, 'Marko', 'Kovač', 'Opel', 'ZG 6117-HH', 1, 10);
	
#putnici
insert into putnik (sifra, ime, prezime, voznja, loyaty_klub)
	values (null, 'Mario', 'Jović', 1, true),
	(null, 'Petar', 'Dujić',1, false),
	(null, 'Stanko', 'Majić',2, false);
#voznje
insert into voznja (sifra, vozac,vrijeme)
	values(null, 1,'2022-05-22 10:40:00'),
	(null, 1, '2022-05-22 07:45:00');

select * from putnik;