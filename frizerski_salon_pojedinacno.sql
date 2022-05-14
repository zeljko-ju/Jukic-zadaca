#C:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8 < C:\Users\php\Documents\GitHub\Jukic-zadaca\frizerski_salon_pojedinacno.sql

drop database if exists frizerski_salon;
create database frizerski_salon;
use frizerski_salon;


create table djelatnica (
    sifra int not null primary key auto_increment,
    osoba int not null,
    korisnik int  
  

    
    
);

create table korisnik (
    sifra int not null primary key auto_increment,
    osoba int not null,
    djelatnica int,
    usluga int,
    termin datetime
);

create table usluga (
    sifra int not null primary key auto_increment,
    usluga varchar(50),
    djelatnica int,
    cijena decimal(18,2)
  
);

create table osoba (
    sifra int not null primary key auto_increment,
    ime varchar(50),
    prezime varchar(50)

);

alter table djelatnica add foreign key(osoba) references osoba(sifra);
alter table korisnik add foreign key(osoba) references osoba(sifra);


alter table korisnik add foreign key(usluga) references usluga(sifra);
alter table korisnik add foreign key(djelatnica) references djelatnica(sifra);


insert into osoba (ime, prezime)
values ('Petra', 'Petrić');

insert into osoba (ime, prezime)
values ('Frizerkica', 'Frizkić');

insert into osoba (ime, prezime)
values ('Manda', 'Perić');

insert into osoba (ime, prezime)
values ('Kresimir', 'Marić');

insert into osoba (ime, prezime)
values ('Zdravko', 'Perić');

insert into usluga (usluga, cijena)
values ('musko šišanje', '45');

insert into djelatnica (osoba)
values (2);

insert into korisnik (osoba, djelatnica, usluga, termin)
values (4, 1, 1, '2022-05-16 13:00:00');


