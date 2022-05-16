#C:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8 < C:\Users\php\Documents\GitHub\Jukic-zadaca\salon_za_uljepsavanje.sql



drop database if exists salon_za_uljepsavanje;
create database salon_za_uljepsavanje;
use salon_za_uljepsavanje;

create table djelatnica (
    sifra int not null primary key auto_increment,
    osoba int not null
      
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
values ('Marza', 'Ivić');

insert into osoba (ime, prezime)
values ('Petra', 'Perić');

insert into osoba (ime, prezime)
values ('Svjetlana', 'Perić');

insert into osoba (ime, prezime)
values ('Zvonko', 'Marić');

insert into osoba (ime, prezime)
values ('Pero', 'Zdravkić');

insert into usluga (usluga, cijena)
values ('opuštajuća masaža', '150');

insert into usluga (usluga, cijena)
values ('depilacija', '100');

insert into djelatnica (osoba)
values (2);

insert into korisnik (osoba, djelatnica, usluga, termin)
values (4, 1, 1, '2022-05-16 17:00:00');

insert into korisnik (osoba, djelatnica, usluga, termin)
values (3, 1, 2, '2022-05-16 14:30:00');

insert into korisnik (osoba, djelatnica, usluga, termin)
values (2, 1, 1, '2022-05-16 14:30:00');


