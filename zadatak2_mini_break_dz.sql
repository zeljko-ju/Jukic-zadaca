#C:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8  < C:\Users\php\Documents\GitHub\Jukic-zadaca\zadatak2_mini_break_dz.sql

drop database if exists dz2_minibreak;
create database dz2_minibreak;
use dz2_minibreak;


create table decko (
    sifra int not null primary key auto_increment,
    indiferentno boolean,
    vesta varchar(34),
    asocijalno boolean not null

);

create table cura(
    sifra int not null primary key auto_increment,
    haljina varchar(33) not null,
    drugiputa datetime not null,
    suknja varchar(38),
    narukvica int,
    introvertno boolean,
    majica varchar(40) not null,
    decko int
);

create table neprijatelj(
        sifra int not null primary key auto_increment,
        majica varchar(32),
        haljina varchar(43) not null,
        lipa decimal(16,8),
        modelnaocala varchar(49) not null,
        kuna decimal(12,6) not null,
        jmbag char(11), 
        cura int
);
create table brat (
    sifra int not null primary key auto_increment,
    suknja varchar(47),
    ogrlica int not null,
    asocijalno boolean not null,
    neprijatelj int not null
);

create table decko_zarucnica (
    sifra int not null primary key auto_increment,
    decko int not null, 
    zarucnica int not null
);

create table zarucnica (
    sifra int not null primary key auto_increment,
    narukvica int,
    bojakose varchar(37) not null,
    novcica decimal(15,9),
    lipa decimal(15,8) not null,
    indiferentno boolean not null
);


create table prijatelj (
    sifra int not null primary key auto_increment,
    modelnaocala varchar(37),
    treciputa datetime not null,
    ekstroventno boolean not null,
    prviputa datetime, 
    svekar int not null
);

create table svekar (
    sifra int not null primary key auto_increment,
    stilfrizura varchar(48), 
    ogrlica int not null, 
    asocijalno boolean not null
);


alter table cura add foreign key (decko) references decko(sifra);
alter table neprijatelj add foreign key (cura) references cura(sifra);
alter table brat add foreign key (neprijatelj) references neprijatelj(sifra);
alter table decko_zarucnica add foreign key (decko) references decko(sifra);
alter table decko_zarucnica add foreign key (zarucnica) references zarucnica(sifra);

alter table prijatelj add foreign key (svekar) references svekar(sifra);


insert into decko(sifra, indiferentno, vesta, asocijalno)
	values (null, true, 'crna', false),
		(null, true, 'šarena', false),
		(null, true, 'bijela', true);
		
insert into zarucnica (sifra, bojakose, lipa,novcica, indiferentno)
	values (null, 'crna', 167.55,200.57, true),
	(null, 'crna', 111.55,155.155, true),
	(null, 'plava', 197.55,304.5567, true);

insert into decko_zarucnica (sifra, decko, zarucnica)
	values (null, 1, 2),
		(null, 3, 2),
		(null, 1, 3);
	
select * from decko;	
insert into cura (sifra, haljina, drugiputa, majica, decko)
	values(null, 'svečana duga', '2022-03-03','crna',1),
	(null, 'šarena', '2022-03-03','tamno plava',2),
	(null, 'kratka bijeka', '2022-03-03','indigo',3);
	
insert into neprijatelj (sifra, haljina, modelnaocala, kuna, cura)
	values (null, 'svijetla', 'sportske', 199.99, 1),
	(null, 'čipkasta', 'Ray Ban', 999.99, 3),
	(null, 'svijetla', 'moderne', 399.99, 2);
insert into svekar (sifra, ogrlica, asocijalno)
	values (null, 24, false);
select* from prijatelj;
insert into prijatelj (sifra, treciputa, ekstroventno, svekar)
	values (null, '2022-01-01', false, 1);

insert into brat (sifra, ogrlica, asocijalno, neprijatelj)
    values (null, 111, true, 1);

	update prijatelj set treciputa= '2022-04.30';
	

delete from brat where ogrlica != 14;

select suknja from cura;

select a.vesta, a.asocijalno 
from
decko a right join decko_zarucnica b 
on a.sifra = b.decko;

insert into brat (sifra,ogrlica, asocijalno, neprijatelj)
	values (null, 144,true, 1);
	


select a.novcica, f.neprijatelj,
'ba' as vesta
from 
zarucnica a right join decko_zarucnica b
on a.sifra = b.zarucnica 
inner join decko c
on b.decko =c.sifra 
inner join cura d
on c.sifra = d.decko 
inner join neprijatelj e 
on d.sifra = e.cura
left join brat f 
on e.sifra = f.neprijatelj
;