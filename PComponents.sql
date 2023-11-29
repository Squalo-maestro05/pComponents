create schema PComponents;
use PComponents;
  create table tbl_components
  (
     processore varchar(20),
     scheda_video varchar(20),
     scheda_madre varchar(20)
  );
  create table tbl_utente
  (
    Cognome varchar(20),
    Nome varchar(20),
    Indirizzo varchar(20),
    Email varchar(40)
  );