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
	information varchar(460),
	prix int,
	photo varchar(200),
	idCategorie int,
	dispo int,
	foreign key (idCategorie) references Categorie(idCategorie),
	foreign key (dispo) references EtatPlat(idEtatPlat)
);


insert into Plat(nom,information,prix,photo,idCategorie,dispo) values("Kabaro avec poulet", "Un delicieux plat traditionnel compose de morceaux de poulet tendres et savoureux, accompagnes d'une sauce epicee. ", 5000, "assets/frontoffice/img/photo/photo-plat-locaux/1.jpg", 2, 1);
insert into Plat(nom,information,prix,photo,idCategorie,dispo) values("Haricot et viande", "Un plat copieux et reconfortant prepare avec des haricots mijotes et de tendres morceaux de viande", 5000, "assets/frontoffice/img/photo/photo-plat-locaux/2.jpg", 2, 1);
insert into Plat(nom,information,prix,photo,idCategorie,dispo) values("Boulette de viande et riz", "Des boulettes de viande assaisonnees avec soin et cuites a la perfection, servies avec du riz moelleux.", 5000, "assets/frontoffice/img/photo/photo-plat-locaux/3.jpg", 2, 1);
insert into Plat(nom,information,prix,photo,idCategorie,dispo) values("Saucisse legume", "Des saucisses de qualite superieure accompagnees d'un assortiment de legumes frais et croquants.", 5000, "assets/frontoffice/img/photo/photo-plat-locaux/4.jpg", 2, 1);
insert into Plat(nom,information,prix,photo,idCategorie,dispo) values("Boulette de viande et haricot rouge", "De delicieuses boulettes de viande preparees avec des epices aromatiques, servies avec des haricots rouges mijotes.", 5000, "assets/frontoffice/img/photo/photo-plat-locaux/5.jpg", 2, 1);
insert into Plat(nom,information,prix,photo,idCategorie,dispo) values("Cresson et viande", "Un melange savoureux de cresson frais et de viande tendre, releve par des epices et des herbes aromatiques.", 5000, "assets/frontoffice/img/photo/photo-plat-locaux/6.jpg", 2, 1);
insert into Plat(nom,information,prix,photo,idCategorie,dispo) values("Soupe melange de viande", "Une soupe genereuse et reconfortante preparee avec un melange savoureux de viandes tendres et de legumes frais.", 5000, "assets/frontoffice/img/photo/photo-plat-locaux/7.jpg", 2, 1);
insert into Plat(nom,information,prix,photo,idCategorie,dispo) values("Poivron farci", "Des poivrons colores et juteux, soigneusement farcis avec un melange savoureux de viande hachee, de riz et d'epices.", 5000, "assets/frontoffice/img/photo/photo-plat-locaux/31.jpg", 2, 1);
insert into Plat(nom,information,prix,photo,idCategorie,dispo) values("Casoulet saucisse", "Plat local a diversite de saveur", 5000, "assets/frontoffice/img/photo/photo-plat-locaux/33.jpeg", 2, 1);
insert into Plat(nom,information,prix,photo,idCategorie,dispo) values("Riz cantonais", "Le riz jaune local au goût de la nature", 5000, "assets/frontoffice/img/photo/photo-plat-locaux/32.jpg", 2, 1);

insert into Plat(nom,information,prix,photo,idCategorie,dispo) values("Lassary melange", "Un plat vegetarien savoureux compose d'un melange varie de legumes frais, de legumineuses et d'epices.", 5000, "assets/frontoffice/img/photo/photo-plat-vegan/8.jpg", 1, 1);
insert into Plat(nom,information,prix,photo,idCategorie,dispo) values("Salade de pate avec sauce", "Une salade fraiche et savoureuse preparee avec des pates cuites al dente et une sauce delicieusement assaisonnee.", 5000, "assets/frontoffice/img/photo/photo-plat-vegan/9.jpg", 1, 1);
insert into Plat(nom,information,prix,photo,idCategorie,dispo) values("Soupe legume", "Une soupe legere et reconfortante preparee avec un melange colore de legumes de saison.", 5000, "assets/frontoffice/img/photo/photo-plat-vegan/10.jpg", 1, 1);
insert into Plat(nom,information,prix,photo,idCategorie,dispo) values("Salade de cereales", "Une salade nourrissante et riche en fibres, composee d'un melange de cereales variees, de legumes croquants et d'une vinaigrette legere.", 5000, "assets/frontoffice/img/photo/photo-plat-vegan/11.jpg", 1, 1);
insert into Plat(nom,information,prix,photo,idCategorie,dispo) values("Chou-fleur garni", "Un plat vegetarien creatif mettant en vedette le chou-fleur comme ingredient principal.", 5000, "assets/frontoffice/img/photo/photo-plat-vegan/12.jpg", 1, 1);
insert into Plat(nom,information,prix,photo,idCategorie,dispo) values("Salade de legume avec pate", "Une salade fraiche et croquante garnie de legumes colores et de pâtes legeres.", 5000, "assets/frontoffice/img/photo/photo-plat-vegan/13.jpg", 1, 1);
insert into Plat(nom,information,prix,photo,idCategorie,dispo) values("Salade de legume", "Une salade rafraichissante preparee avec une variete de legumes frais et croquants. ", 5000, "assets/frontoffice/img/photo/photo-plat-vegan/14.jpg", 1, 1);
insert into Plat(nom,information,prix,photo,idCategorie,dispo) values("Sauce legume", "Une sauce legere et savoureuse preparee avec des legumes frais et des epices aromatiques.", 5000, "assets/frontoffice/img/photo/photo-plat-vegan/15.jpg", 1, 1);
insert into Plat(nom,information,prix,photo,idCategorie,dispo) values("Sauce legume et riz", "Une combinaison delicieuse de sauce legume maison et de riz moelleux", 5000, "assets/frontoffice/img/photo/photo-plat-vegan/16.jpg", 1, 1);
insert into Plat(nom,information,prix,photo,idCategorie,dispo) values("Lassar et legume", "Un plat vegetarien equilibre et savoureux compose de legumes frais et de lassar, une preparation culinaire traditionnelle", 5000, "assets/frontoffice/img/photo/photo-plat-vegan/17.jpg", 1, 1);


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
insert into Utilisateur values (null,'Rudy','Lee','rudyCon','lee_rudy@gmail.com','lee',1);
insert into Utilisateur values (null,'Miary','Andria','MiiCon','miary@gmail.com','miary',1);


create table Panier(
	idUtilisateur int,
	idPlat int,
	quantite int,
	foreign key (idUtilisateur) references Utilisateur(idUtilisateur),
	foreign key (idPlat) references Plat(idPlat)
);

create or replace view PanierDetails as (select idUtilisateur,Plat.idPlat,Plat.nom,Plat.photo,prix,quantite
	from Panier
	join Plat on Panier.idPlat = Plat.idPlat
);

create or replace view PanierSomme as (select idUtilisateur,sum(prix*quantite) AS somme
	from PanierDetails
	group by idUtilisateur
);
	
CREATE TABLE COMMANDE(
	IDCOMMANDE INT AUTO_INCREMENT PRIMARY KEY,
	IDUTILISATEUR INT,
    HEURERECUPERATION TIME,
    NUMEROCARTE VARCHAR(40),
    NUMEROMOBILEMONEY VARCHAR(40),
    MONTANT INT,
	FOREIGN KEY (IDUTILISATEUR) REFERENCES Utilisateur(idUtilisateur)
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

CREATE TABLE PLAT_DU_JOUR(
	IDPDJ INT AUTO_INCREMENT PRIMARY KEY,
	IDPLAT INT,
	JOUR DATE
);

INSERT INTO PLAT_DU_JOUR (IDPLAT,JOUR) VALUES (2,NOW());
INSERT INTO PLAT_DU_JOUR (IDPLAT,JOUR) VALUES (4,NOW());
INSERT INTO PLAT_DU_JOUR (IDPLAT,JOUR) VALUES (10,NOW());

CREATE OR REPLACE VIEW v_pdj AS (SELECT p.IDPLAT,p.NOM,p.INFORMATION,p.PRIX,p.PHOTO,p.IDCATEGORIE,p.DISPO FROM PLAT_DU_JOUR pdj JOIN Plat p ON p.IDPLAT = pdj.IDPLAT);


CREATE OR REPLACE VIEW v_facture AS(
	SELECT c.IDUTILISATEUR,dc.IDCOMMANDE,p.IDPLAT,p.NOM,p.PRIX,dc.QUANTITE
	FROM DETAILCOMMANDE dc 
	JOIN PLAT p
	ON dc.IDPLAT = p.IDPLAT
	JOIN COMMANDE c 
	ON c.IDCOMMANDE = dc.IDCOMMANDE 
	GROUP BY c.IDUTILISATEUR 
);

CREATE OR REPLACE VIEW v_facture AS( 
	SELECT c.IDUTILISATEUR, dc.IDCOMMANDE, p.IDPLAT, p.NOM, p.PRIX, dc.QUANTITE
	FROM DETAILCOMMANDE dc
	JOIN PLAT p ON dc.IDPLAT = p.IDPLAT
	JOIN COMMANDE c ON c.IDCOMMANDE = dc.IDCOMMANDE
	WHERE dc.IDCOMMANDE IN (
		SELECT  MAX(IDCOMMANDE)
		FROM DETAILCOMMANDE
		GROUP BY IDUTILISATEUR
	)
);


CREATE OR REPLACE VIEW v_sommeFacture AS( 
	SELECT c.IDUTILISATEUR, SUM(p.PRIX * dc.QUANTITE) AS Somme
	FROM DETAILCOMMANDE dc
	JOIN PLAT p ON dc.IDPLAT = p.IDPLAT
	JOIN COMMANDE c ON c.IDCOMMANDE = dc.IDCOMMANDE
	WHERE dc.IDCOMMANDE IN (
		SELECT MAX(IDCOMMANDE)
		FROM DETAILCOMMANDE
		GROUP BY IDUTILISATEUR
	)
	GROUP BY c.IDUTILISATEUR
);

CREATE OR REPLACE VIEW v_CommandeValider AS(
	SELECT dc.IDDETAIL,dc.IDCOMMANDE,p.NOM,dc.QUANTITE,c.HEURERECUPERATION , dc.ETAT
	FROM DETAILCOMMANDE dc
	JOIN PLAT p ON dc.IDPLAT = p.IDPLAT  
	JOIN COMMANDE c ON dc.IDCOMMANDE = c.IDCOMMANDE WHERE dc.ETAT = 1
);

CREATE OR REPLACE VIEW v_CommandeCuisine AS(
	SELECT dc.IDDETAIL,dc.IDCOMMANDE,p.NOM,dc.QUANTITE,c.HEURERECUPERATION , dc.ETAT
	FROM DETAILCOMMANDE dc
	JOIN PLAT p ON dc.IDPLAT = p.IDPLAT  
	JOIN COMMANDE c ON dc.IDCOMMANDE = c.IDCOMMANDE WHERE dc.ETAT = 2
);

CREATE OR REPLACE VIEW v_CommandeAttente AS(
	SELECT dc.IDDETAIL,dc.IDCOMMANDE,p.NOM,dc.QUANTITE,c.HEURERECUPERATION , dc.ETAT
	FROM DETAILCOMMANDE dc
	JOIN PLAT p ON dc.IDPLAT = p.IDPLAT  
	JOIN COMMANDE c ON dc.IDCOMMANDE = c.IDCOMMANDE WHERE dc.ETAT = 3
);

CREATE OR REPLACE VIEW v_CommandeRecu AS(
	SELECT dc.IDDETAIL, dc.IDCOMMANDE,p.NOM,dc.QUANTITE,c.HEURERECUPERATION , dc.ETAT
	FROM DETAILCOMMANDE dc
	JOIN PLAT p ON dc.IDPLAT = p.IDPLAT  
	JOIN COMMANDE c ON dc.IDCOMMANDE = c.IDCOMMANDE WHERE dc.ETAT = 4
);
