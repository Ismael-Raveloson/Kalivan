create database Kalivan;
use Kalivan;

create table Categorie(
	idCategorie int AUTO_INCREMENT primary key,
	nom varchar(30)
);

insert into Categorie values (null,'vegan');
insert into Categorie values (null,'local');
insert into Categorie values (null,'drinks');

create table EtatPlat(
	idEtatPlat int AUTO_INCREMENT primary key,
	nom varchar(30)
);

insert into EtatPlat values (null,'Disponible');
insert into EtatPlat values (null,'Sold-Out');

create table Plat(
	idPlat int AUTO_INCREMENT primary key,
	nom varchar(120),
	description varchar(460),
	prix double,
	idCategorie int,
	disponibilité int,
	foreign key (idCategorie) references Categorie(idCategorie),
	foreign key (disponibilité) references EtatPlat(idEtatPlat)
);


insert into Plat values("Kabaro avec poulet", "plat locaux", 5000, "assests/frontoffice/img/photo/photo-plat-locaux/1.jpg,2,0");
insert into Plat values("haricot et viande ", "plat locaux", 5000, "assests/frontoffice/img/photo/photo-plat-locaux/2.jpg,2,0");
insert into Plat values("boulette de viande et riz", "plat locaux", 5000, "assests/frontoffice/img/photo/photo-plat-locaux/3.jpg,2,0");
insert into Plat values("sosisse legume", "plat locaux", 5000, "assests/frontoffice/img/photo/photo-plat-locaux/4.jpg,2,0");
insert into Plat values("boulette de viande et haricot rouge", "plat locaux", 5000, "assests/frontoffice/img/photo/photo-plat-locaux/5.jpg,2,0");
insert into Plat values("cresson et viande", "plat locaux", 5000, "assests/frontoffice/img/photo/photo-plat-locaux/6.jpg,2,0");
insert into Plat values("soupe mélange de viande", "plat locaux", 5000, "assests/frontoffice/img/photo/photo-plat-locaux/7.jpg,2,0");
insert into Plat values("poivron farcie", "plat locaux", 5000, "assests/frontoffice/img/photo/photo-plat-locaux/31.jpg,2,0");
insert into Plat values("casoulet sosisiy", "plat locaux", 5000, "assests/frontoffice/img/photo/photo-plat-locaux/32.jpg,2,0");
insert into Plat values("riz contonais", "plat locaux", 5000, "assests/frontoffice/img/photo/photo-plat-locaux/33.jpg,2,0");

insert into Plat values("lassary mélange", "plat végan", 5000, "assets/frontoffice/img/photo/photo-plat-vegan/8.jpg,1,0");
insert into Plat values("salade de pâte avec sauce", "plat végan", 5000, "assets/frontoffice/img/photo/photo-plat-vegan/9.jpg,1,0");
insert into Plat values("soupe legume", "plat végan", 5000, "assets/frontoffice/img/photo/photo-plat-vegan/10.jpg,1,0");
insert into Plat values("salade de céréales", "plat végan", 5000, "assets/frontoffice/img/photo/photo-plat-vegan/11.jpg,1,0");
insert into Plat values("choux fleur garni", "plat végan", 5000, "assets/frontoffice/img/photo/photo-plat-vegan/12.jpg,1,0");
insert into Plat values("salade de legume avec pâte", "plat végan", 5000, "assets/frontoffice/img/photo/photo-plat-vegan/13.jpg,1,0");
insert into Plat values("salade de legume", "plat végan", 5000, "assets/frontoffice/img/photo/photo-plat-vegan/14.jpg,1,0");
insert into Plat values("sauce legume", "plat végan", 5000, "assets/frontoffice/img/photo/photo-plat-vegan/15.jpg,1,0");
insert into Plat values("sauce legume et riz", "plat végan", 5000, "assets/frontoffice/img/photo/photo-plat-vegan/16.jpg,1,0");
insert into Plat values("lassar et legume", "plat végan", 5000, "assets/frontoffice/img/photo/photo-plat-vegan/17.jpg,1,0");


create table Utilisateur(
	idUtilisateur int AUTO_INCREMENT primary key,
	nom varchar(80) not null,
	prenom varchar(120) not null,
	contact varchar(10) not null,
	email varchar(70) not null,
	motDePasse varchar(40) not null,
	isAdmin INT
);

insert into Utilisateur values (null,'admin','admin','adminCon','admin@admin.com','admin',0);

create table Panier(
	idUtilisateur int,
	idPlat int,
	quantite int,
	foreign key (idUtilisateur) references Utilisateur(idUtilisateur),
	foreign key (idPlat) references Plat(idPlat)
);

create or replace view PanierDetails as (select idUtilisateur,Plat.nom,prix,quantite
	from Panier
	join Plat on Panier.idPlat = Plat.idPlat
);

create or replace view PanierSomme as (select idUtilisateur,sum(prix*quantite)
	from PanierDetails
	group by idUtilisateur
);

CREATE TABLE COMMANDE(
    IDCOMMANDE INT AUTO_INCREMENT PRIMARY KEY,
    IDUTILISATEUR INT,
    LIEURECUPERATION VARCHAR(40),
    HEURERECUPERATION TIME,
    NUMEROCARTE VARCHAR(40),
    NUMEROMOBILEMONEY VARCHAR(40),
    MONTANT INT
);


create table Etat(
	idEtat int AUTO_INCREMENT primary key,
	nom varchar(40)
);

insert into Etat values (null,"Validé");
insert into Etat values (null,"En cuisine");
insert into Etat values (null,"En attente");
insert into Etat values (null,"Reçu");

CREATE TABLE DETAILCOMMANDE(
    IDDETAIL INT AUTO_INCREMENT PRIMARY KEY,
    IDCOMMANDE INT,
    IDPLAT INT,
    QUANTITE INT,
    ETAT INT,
    FOREIGN KEY (IDCOMMANDE) REFERENCES COMMANDE (IDCOMMANDE),
    FOREIGN KEY (IDPLAT) REFERENCES PLAT (IDPLAT),
    FOREIGN KEY (ETAT) REFERENCES ETAT (IDETAT)
);


