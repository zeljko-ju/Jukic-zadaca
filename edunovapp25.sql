
# C:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8  < C:\Users\php\Documents\GitHub\Jukic-zadaca\edunovapp25.sql

drop database if exists edunovapp25;
create database edunovapp25 default charset utf8mb4;
use edunovapp25;
create table smjer(
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null,
    cijena decimal(18,2), # kada ne piše not null podrazumjeva se null
    trajanje int,
    upisnina decimal(18,2),
    certificiran boolean
);

create table grupa(
    sifra int not null primary key auto_increment,
    naziv varchar(20) not null,
    datumpocetka datetime,
    maksimalnopolaznika int,
    smjer int not null, 
    predavac int 
);

create table clan(
    sifra int not null primary key auto_increment,
    grupa int not null, 
    polaznik int not null 
);

create table polaznik(
    sifra int not null primary key auto_increment,
    osoba int not null, 
    brojugovora varchar(10)
);

create table predavac(
    sifra int not null primary key auto_increment,
    osoba int not null, 
    iban varchar(50)
);

create table osoba(
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null,
    email varchar(100),
    oib char(11)
);

# definiranje vanjskih ključeva
alter table grupa add foreign key (smjer) references smjer(sifra);
alter table grupa add foreign key (predavac) references predavac(sifra);

alter table clan add foreign key (grupa) references grupa(sifra);
alter table clan add foreign key (polaznik) references polaznik(sifra);

alter table polaznik add foreign key (osoba) references osoba(sifra);
alter table predavac add foreign key (osoba) references osoba(sifra);

select * from smjer;
insert into smjer values(null, 'PHP programiranje',6999.99,null, null,true);

#dobar nacin
insert into smjer (sifra, naziv, cijena)
values (null, 'Java programiranje', 6999.99);

insert into smjer(sifra, naziv, cijena, trajanje, upisnina, certificiran)
values (null, 'Računovodstvo', 4000, null, null, false);
select * from grupa;
insert into grupa (sifra, naziv, datumpocetka, maksimalnopolaznika, smjer, predavac)
values (null,'pp25', '2022-04-23', 30, 1,null);

#dodaj osobu pa predavača
select * from osoba;
insert into osoba (sifra, ime, prezime, email, oib)
values (null, 'Tomislav', 'Jakopec', 'tjakopec@gmail.com', null);
 
insert into osoba (sifra, ime, prezime, email, oib)
values (null, 'Shaquile', 'O Neal', 'šakacenbiej@gmail.com', null);

insert into predavac (sifra, osoba, iban)
values (null, 1, null);

select * from predavac;


insert into osoba (sifra, ime, prezime, email, oib)
values (null, 'Kobe', 'Bryant', 'kobac@gmail.com', null), 
(null, 'Marko', 'Petrić', 'marac@gmail.com', null ), 
(null,'Todorović','Filip','filip.tod95@gmail.com',null),
(null,'Majer','Antonio','majer.antonio@gmail.com',null),
(null,'Filipović','Srđan','srdjanfilipovic991@gmail.com',null),
(null,'Krnjaković','Filip','f.krnja@gmail.com',null),
(null,'Jukić','Željko','zeljac00@icloud',null),
(null,'Pavlinušić','Ante','ante.pavlinusic@gmail.com',null),
(null,'Bikić','Ante','bikic.tm@gmail.com',null),
(null,'Rukavina','Antun','antunrukavina@hotmail',null),
(null,'Poljak','Dino','dinopoljak99@gmail.com',null),
(null,'Rous','Leonard','leonardrous123@gmail.com',null),
(null,'Šakić','Marija','sakicmarija35@gmail.com',null),
(null,'Bukovec','Boris','botaosijek@gmail.com',null),
(null,'Kovač','Filip','chilim.dj@gmail.com',null),
(null,'Vuletić','Antonio','avuletic2212@gmail.com',null),
(null,'Andrija','Kruhoberec','akruhoberec1@outlook.com',null);
select * from polaznik;
insert into polaznik (sifra, osoba, brojugovora)
values (null, 3, null),
(null, 4, null),
(null, 5, null),
(null, 6, null),
(null, 7, null),
(null, 8, null),
(null, 9, null),
(null, 10, null),
(null, 11, null),
(null, 12, null),
(null, 13, null),
(null, 14, null),
(null, 15, null),
(null, 16, null),
(null, 17, null),
(null, 18, null),
(null, 19, null);
#Tehnicar za mrezu

insert into smjer(sifra, naziv, cijena, trajanje, upisnina, certificiran)
values (null, 'Tehničar za Mrežu', '7999.99', null, '180', true);

insert into osoba (sifra, ime, prezime, email, oib)
values (null, 'Niko', 'Jukić', 'nikoslav@gmail.com', null),
		(null, 'Nora', 'Jukić', 'norica@gmail.com', null ),
		(null, 'Ivona', 'Milaković', 'iwoona@gmail.com', null),
		(null, 'Ivan', 'Jukić', 'ivoo@gmail.com', null),
		(null, 'Momirka', 'Jukić', 'moma@gmail.com,', null);
	
select * from polaznik;

insert into polaznik (sifra, osoba, brojugovora)
values(null, 20, null),
(null, 21, null), 
(null, 22, null),
(null, 23, null), 
(null, 24, null);
