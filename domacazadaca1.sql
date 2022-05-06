
# C:\xampp\mysql\bin\mysql -uroot < C:\Users\php\Documents\GitHub\Jukic-zadaca\domacazadaca1.sql


drop database if exists domacazadaca1;
create database domacazadaca1;
use domacazadaca1;


#frizerski #salon za uljepsavanje #udruga za zastitu zivotinja
show tables;

create table djelatnici (
    ime varchar(50),
    prezime varchar(50),
    smjena varchar(50),
    usluga varchar(50)
   
);

create table korisnici (
    ime varchar(50),
    prezime varchar(50),
    termin varchar(50)
);

#udruga za zastitu zivotinja
create table sticenici (
    ime varchar(50),
    vrsta_zivotinje varchar(50),
    pasmina varchar(50)
);