drop database if exists muzej;
create database muzej;
use muzej;

create table izlozbe(
    ime_izlozbe varchar(50),
    ime_autora varchar(50),
    kustos varchar(50),
    tip_izlozbe varchar(50),
    datum_odrzavanja datetime
);
