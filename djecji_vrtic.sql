
drop database if exists djecji_vrtic;
create database djecji_vrtic;
use djecji_vrtic



create table odgajateljica (
    sifra int not null primary key auto_increment,
    ime varchar(50),
    prezime varchar(50),
    strucna_sprema varchar(50)
);
create table djete (
    sifra int not null primary key auto_increment,
    ime varchar(50),
    prezime varchar(50),
    skupina int
);
create table skupina (
    sifra int not null primary key auto_increment,
    uzrast varchar(50),
    odgajateljica int
);

alter table djete add foreign key (skupina) references skupina(sifra);
alter table skupina add foreign key (odgajateljica) references odgajateljica(sifra);


#insert vrijednosti i provjera funkcionalnosti
insert into odgajateljica (sifra, ime, prezime, strucna_sprema)
	values(null, 'Ranka', 'Mihaljević', 'Odgajateljica');
insert into skupina (sifra, uzrast, odgajateljica)
	values (null, 'predskolski', 1);
insert into djete (sifra, ime, prezime, skupina)
	values (null, 'Petar', 'Brajković', 1 );
select * from djete;