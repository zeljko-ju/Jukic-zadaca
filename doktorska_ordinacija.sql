drop database if exists doktorska_ordinacija;
create database doktorska_ordinacija;
use doktorska_ordinacija;

create table doktor (
    sifra int not null primary key auto_increment,
    ime varchar(50),
    prezime varchar(50),
    specijalizacija varchar(50), 
    sestra int
    
);

create table termin (
    sifra int not null primary key auto_increment,
    datum_vrijeme datetime,
    doktor int
);

create table pacijent (
    sifra int not null primary key auto_increment,
    ime varchar(50),
    prezime varchar(50),
    broj_knjizice char(13),
    termin int
);

create table sestra(
    sifra int not null primary key auto_increment,
    ime varchar(50),
    prezime varchar(50),
    zaduzenje varchar(50)
);

alter table termin add foreign key (doktor) references doktor(sifra);
alter table pacijent add foreign key (termin) references termin(sifra);

alter table doktor add foreign key (sestra) references sestra(sifra);

#unošenje vrijednosti/test funkcionalnosti
#doktor
insert into doktor (sifra, ime, prezime, specijalizacija, sestra)
	values (null, 'Janko', 'Maričević', 'kirurg', 1),
	(null, 'Stjepan', 'Janjić', 'ortoped', 2);
select * from doktor;
#sestre
insert into sestra (sifra, ime, prezime)
	values (null, 'Marija', 'Jasnić'),
	(null, 'Maja', 'Huljić');

#termin
insert into termin (sifra, datum_vrijeme, doktor)
	values (null, '2022-05-23 07:00:00', 1),
	(null, '2022-05-23 09:00:00', 2), 
	(null, '2022-05-23 11:00:00', 1);
#pacijenti
insert into pacijent (sifra, ime, prezime, termin)
	values(null, 'Ante', 'Perić',1),
	(null, 'Mate', 'Jamić', 2), 
	(null, 'Ante', 'Posavec', 3);
	
select * from pacijent;
select * from termin;
