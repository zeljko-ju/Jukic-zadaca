drop database if exists muzej;
create database muzej;
use muzej;

create table izlozba(
    sifra int not null primary key auto_increment,
    ime_izlozbe varchar(50),
    djelo int,
    kustos int,
    sponzor int,
    datum_odrzavanja datetime
);

create table sponzor (
    sifra int not null primary key auto_increment,
    ime varchar(50)
    
);

create table djelo (
    sifra int not null primary key auto_increment,
    ime_djela varchar(50),
    ime_autora varchar(50),
    tehnika varchar(50),
    cijena decimal(18,2)
);

create table kustos (
    sifra int not null primary key auto_increment,
    ime varchar(50),
    prezime varchar(50), 
    izlozba int

    
);

alter table izlozba add foreign key (kustos) references kustos(sifra);
alter table izlozba add foreign key (sponzor) references sponzor(sifra);
alter table izlozba add foreign key (djelo) references djelo(sifra);



#unos vrijednosti i provjera funkcionalnosti
insert into kustos(sifra, ime)
	values (null, 'Stjepan');

#
insert into izlozba (sifra, ime_izlozbe, djelo, datum_odrzavanja, kustos, sponzor)
#	values (null, 'Culture day2022', 1,'2022-03-03',1, 1);
	
insert into djelo (sifra, ime_djela, ime_autora)
	values (null, 'Avangarda', 'Josić');
insert into sponzor (sifra, ime)
	values (null, 'Diners Club');

