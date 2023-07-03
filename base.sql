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

create table Utilisateur(
	idUtilisateur int AUTO_INCREMENT primary key,
	nom varchar(80) not null,
	prenom varchar(120) not null,
	contact varchar(10) not null,
	email varchar(70) not null,
	motDePasse varchar(40) not null
);

insert into Utilisateur values (null,'admin','admin','adminCon','admin@admin.com','admin');

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

create table Commande(
	idCommande int AUTO_INCREMENT primary key,
	idUtilisateur int,
	lieuRecuperation varchar(80),
	heureRecuperation time,
	numeroCarte varchar(40),
	numeroMobileMoney varchar(40),
	montantPanier double,
	foreign key (idUtilisateur) references Utilisateur(idUtilisateur)
);

create table Etat(
	idEtat int AUTO_INCREMENT primary key,
	nom varchar(40)
);

insert into Etat values (null,"Validé");
insert into Etat values (null,"En cuisine");
insert into Etat values (null,"En attente");
insert into Etat values (null,"Reçu");

create table CommandeEtat(
	idCommande int,
	idEtat int,
	foreign key (idCommande) references Commande(idCommande),
	foreign key (idEtat) references Etat(idEtat)
);

create or replace view CommandeDetails(select Commande.idCommande,Utilisateur.nom,Utilisateur.contact,lieuRecuperation,heureRecuperation,numeroCarte,numeroMobileMoney,montantPanier,Etat.idEtat
	from Commande 
	join CommandeEtat on CommandeEtat.idCommande = Commande.idCommande
	join Utilisateur on Commande.idUtilisateur = Utilisateur.idUtilisateur
	join Etat on CommandeEtat.idEtat = Etat.idEtat
	where Commande.idCommande = CommandeEtat.idCommande
);

