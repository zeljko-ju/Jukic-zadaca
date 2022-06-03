#C:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8  < C:\Users\php\Documents\GitHub\Jukic-zadaca\zadatak5\zadatak5_mini_break.sql
drop database if exists dz5_mini_break;
create database dz5_mini_break;
use dz5_mini_break;


create table mladic (
    sifra int not null primary key auto_increment,
    kratkamajica varchar(48) not null,
    haljina varchar(30) not null,
    asocijalno boolean, 
    zarucnik int

);

create table zarucnik (
    sifra int not null primary key auto_increment,
    jmbag char(11),
    lipa decimal(12,8),
    indiferentno boolean not null
);

create table punac (
    sifra int not null primary key auto_increment,
    dukserica varchar(33),
    prviputa datetime not null, 
    majica varchar(36),
    svekar int not null
);

create table punica (
    sifra int not null primary key auto_increment,
    hlace varchar(43) not null,
    nausnica int not null,
    ogrlica int,
    vesta varchar(49),
    modelnaocala varchar(31) not null,
    treciputa datetime not null,
    punac int not null
);

create table ostavljena (
    sifra int not null primary key auto_increment,
    majica varchar(33),
    ogrlica int not null,
    carape varchar(44), 
    stilfrizura varchar(42),
    punica int not null
);

create table svekar (
    sifra int not null primary key auto_increment,
    bojakose varchar(33),
    majica varchar(31),
    carape varchar(31) not null,
    haljina varchar(43),
    narukvica int,
    eura decimal (14,5) not null
);

create table svekar_cura (
    sifra int not null primary key auto_increment,
    svekar int not null,
    cura int not null
);

create table cura (
    sifra int not null primary key auto_increment,
    carape varchar(41) not null,
    marka decimal(17,10) not null,
    asocijalno boolean, 
    vesta varchar(47)
);


alter table mladic add foreign key (zarucnik) references zarucnik(sifra);
alter table punac add foreign key (svekar) references svekar(sifra);
alter table punica add foreign key (punac) references punac(sifra);
alter table ostavljena add foreign key (punica) references punica(sifra);
alter table svekar_cura add foreign key (svekar) references svekar(sifra);
alter table svekar_cura add foreign key (cura) references cura(sifra);


#2 punica, punac i svekar_cura x3
insert into svekar(sifra, carape, eura)
    values (null, 'sportske', '5523.55'),
    (null, 'vunene', '23.55');

insert into cura (sifra, carape, marka, vesta)
    values (null, 'bijele', 115, 'dolcevita'),
        (null, 'debele', 1, 'vesta sa izrezom'),
        (null, 'stopalice', 5, 'dolcevita');

insert into svekar_cura (sifra, svekar, cura)
    values (null, 2, 3),
    (null, 2, 1),
    (null, 1, 3);

insert into punac(sifra, majica, svekar)
    values (null, 'crvena', 2),
    (null, 'plava', 1),
    (null, 'žuta', 2);

insert into punica (sifra, hlace, nausnica, vesta, modelnaocala, treciputa, punac)
    values (null, 'levis', 11, 'bijela', 'Ray Ban', '2004-04-16', 1),
    (null, 'Tommy Hillfinger', 1, 'bijela', 'Police', '2014-04-22', 2),
    (null, 'levis', 151, 'plava', 'Ray Ban', '2022-01-01', 3);

    #unesi mladića i provjerti točnost
insert into mladic (sifra, kratkamajica, haljina)
	values (null, 'crna', 'svečana');
select* from mladic;
update mladic set haljina='Osijek';
#unesi ostavljena sa vrijednosti veća, manja i jednaka 17
insert into ostavljena (sifra, ogrlica,punica)
	values (null, 17, 1),
	(null, 17,2),
	(null, 23,1);
select * from ostavljena;
delete from ostavljena where ogrlica =17;


select majica from punac where prviputa is false;

#Prikažite asocijalno iz tablice cura, stilfrizura iz tablice ostavljena te 
#tablice punac poznate te da su vrijednosti kolone majica iz tablice 
#svekar sadrže niz znakova ba.
#Podatke posložite po nausnica iz tablice 
#punica silazno. (10)

select a.asocijalno, f.stilfrizura, e.nausnica 
from 
cura a right join svekar_cura b 
on a.sifra =b.cura
inner join svekar c
on b.svekar =c.sifra 
inner join punac d
on c.sifra=d.svekar 
left join punica e
on d.sifra =e.punac
left join ostavljena f
on e.sifra=f.punica
where d.prviputa is true and c.majica like '%ba%'
order by e.nausnica;

select a.majica, a.carape 
from 
svekar a right join svekar_cura b
on a.sifra =b.svekar;