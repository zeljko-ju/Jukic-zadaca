
# C:\xampp\mysql\bin\mysql -uroot < C:\Users\php\Documents\GitHub\Jukic-zadaca\domacazadaca1.sql


drop database if exists domacazadaca1;
create database domacazadaca1;
use domacazadaca1;


#frizerski salon | salon za uljepsavanje | udruga za zastitu zivotinja | postolarska radnja | urar |


create table djelatnici (
    ime varchar(50),
    prezime varchar(50),
    smjena time,
    usluga varchar(50),
    #udruga za zastitu
    br_sticenika varchar(50)
   
);

create table korisnici (
    ime varchar(50),
    prezime varchar(50),
    termin time
);

#udruga za zastitu zivotinja
create table sticenici (
    ime varchar(50),
    vrsta_zivotinje varchar(50),
    pasmina varchar(50)
);
#djecji vrtic
create table odgajateljice (
    ime varchar(50),
    prezime varchar(50),
    odgojna_skupina varchar(50)
);
create table djeca (
    ime varchar(50),
    prezime varchar(50),
    odgojna_skupina varchar(50),
    uzrast varchar(50)
);
#muzej
create table izlozbe (
    ime_izlozbe varchar(50),
    ime_autora varchar(50),
    trajanje_izlozbe time,
    br_djela varchar(50),
    kustos varchar(50)
);
#samostan
create table svecenici(
    ime varchar(50),
    prezime varchar(50),
    titula varchar(50)
);
create table casne_sestre(
    ime varchar(50),
    prezime varchar(50),
    red varchar(50)
);
#taxi sluzba
create table vozac(
    ime varchar(50),
    prezime varchar(50),
    vozilo_br varchar(50),
    recenzija varchar(50),
    smjena time

);
#postolarska radnja
create table postolar(
    ime varchar(50),
    prezime varchar(50),
    kontakt varchar(50),
    adresa varchar(50)
);
#urar
create table urar(
    ime varchar(50),
    prezime varchar(50),
    usluga varchar(50),
    kontakt varchar(50)

);
#doktorska ordinacija
create table doktor (
    ime varchar(50),
    prezime varchar(50),
    specijalizacija varchar(50),
    dezurstvo time
);
create table sestre (
    ime varchar(50),
    prezime varchar(50),
    odjel varchar(50),
    smjena time

)