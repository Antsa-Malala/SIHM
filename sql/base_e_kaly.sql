create database e_kaly;
use e_kaly;
create table utilisateur(
    id_utilisateur int auto_increment primary key,
    nom varchar(30),
    prenom varchar(30),
    date_naissance date,
    genre int,
    mail varchar(30),
    mdp varchar(30)
);

create table poids(
    id_utilisateur int,
    poids double,
    date_debut date,
    date_fin date,
    foreign key(id_utilisateur) references utilisateur(id_utilisateur)
);

create table admin(
    id_admin int auto_increment primary key,
    email varchar(30),
    mdp varchar(30)
);

create table taille(
    id_utilisateur int,
    taille double,
    date_debut date,
    date_fin date,
    foreign key(id_utilisateur) references utilisateur(id_utilisateur)
);

create table objectif(
    id_utilisateur int,
    objectif int,
    date_debut date,
    date_fin date,
    valeur int,
    foreign key(id_utilisateur) references utilisateur(id_utilisateur)
);



create table regime(
    id_regime int auto_increment primary key,
    poids double,
    azo_perdu int
);
create table plat 
(
    id_plat int auto_increment primary key,
    nom_plat varchar(20),
    disponibilite int,
    prix double
);
create table code(
    id_code int auto_increment primary key,
    etat int,
    code varchar(10),
    somme double
);

create table activite(
    id_activite int auto_increment primary key,
    description_activite varchar(30)
);

create table rechargement(
    id_utilisateur int,
    id_code int,
    date_rechargement date,
    foreign key(id_utilisateur) references utilisateur(id_utilisateur),
    foreign key(id_code) references code(id_code)
);

create table regime_plat(
    id_regime int,
    id_plat int,
    id_activite int,
    foreign key(id_regime) references regime(id_regime),
    foreign key(id_plat) references plat(id_plat),
    foreign key(id_activite) references activite(id_activite)
);

create table regime_achete(
id_utilisateur int,
id_regime int,
date_achat date,
foreign key(id_utilisateur) references utilisateur(id_utilisateur),
foreign key(id_utilisateur) references utilisateur(id_utilisateur)
);
