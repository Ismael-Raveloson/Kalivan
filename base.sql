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


insert into Plat(nom,information,prix,photo,idCategorie,dispo) values("Kabaro avec poulet", "Un délicieux plat traditionnel composé de morceaux de poulet tendres et savoureux, accompagnés d'une sauce épicée. ", 5000, "assets/frontoffice/img/photo/photo-plat-locaux/1.jpg", 2, 1);
insert into Plat(nom,information,prix,photo,idCategorie,dispo) values("Haricot et viande", "Un plat copieux et réconfortant préparé avec des haricots mijotés et de tendres morceaux de viande", 5000, "assets/frontoffice/img/photo/photo-plat-locaux/2.jpg", 2, 1);
insert into Plat(nom,information,prix,photo,idCategorie,dispo) values("Boulette de viande et riz", "Des boulettes de viande assaisonnées avec soin et cuites à la perfection, servies avec du riz moelleux.", 5000, "assets/frontoffice/img/photo/photo-plat-locaux/3.jpg", 2, 1);
insert into Plat(nom,information,prix,photo,idCategorie,dispo) values("Saucisse légume", "Des saucisses de qualité supérieure accompagnées d'un assortiment de légumes frais et croquants.", 5000, "assets/frontoffice/img/photo/photo-plat-locaux/4.jpg", 2, 1);
insert into Plat(nom,information,prix,photo,idCategorie,dispo) values("Boulette de viande et haricot rouge", "De délicieuses boulettes de viande préparées avec des épices aromatiques, servies avec des haricots rouges mijotés.", 5000, "assets/frontoffice/img/photo/photo-plat-locaux/5.jpg", 2, 1);
insert into Plat(nom,information,prix,photo,idCategorie,dispo) values("Cresson et viande", "Un mélange savoureux de cresson frais et de viande tendre, relevé par des épices et des herbes aromatiques.", 5000, "assets/frontoffice/img/photo/photo-plat-locaux/6.jpg", 2, 1);
insert into Plat(nom,information,prix,photo,idCategorie,dispo) values("Soupe mélange de viande", "Une soupe généreuse et réconfortante préparée avec un mélange savoureux de viandes tendres et de légumes frais.", 5000, "assets/frontoffice/img/photo/photo-plat-locaux/7.jpg", 2, 1);
insert into Plat(nom,information,prix,photo,idCategorie,dispo) values("Poivron farci", "Des poivrons colorés et juteux, soigneusement farcis avec un mélange savoureux de viande hachée, de riz et d'épices.", 5000, "assets/frontoffice/img/photo/photo-plat-locaux/31.jpg", 2, 1);
insert into Plat(nom,information,prix,photo,idCategorie,dispo) values("Casoulet saucisse", "Plat local à diversité de saveur", 5000, "assets/frontoffice/img/photo/photo-plat-locaux/33.jpeg", 2, 1);
insert into Plat(nom,information,prix,photo,idCategorie,dispo) values("Riz cantonais", "Le riz jaune local au goût de la nature", 5000, "assets/frontoffice/img/photo/photo-plat-locaux/32.jpg", 2, 1);

insert into Plat(nom,information,prix,photo,idCategorie,dispo) values("Lassary mélange", "Un plat végétarien savoureux composé d'un mélange varié de légumes frais, de légumineuses et d'épices.", 5000, "assets/frontoffice/img/photo/photo-plat-vegan/8.jpg", 1, 1);
insert into Plat(nom,information,prix,photo,idCategorie,dispo) values("Salade de pâte avec sauce", "Une salade fraîche et savoureuse préparée avec des pâtes cuites al dente et une sauce délicieusement assaisonnée.", 5000, "assets/frontoffice/img/photo/photo-plat-vegan/9.jpg", 1, 1);
insert into Plat(nom,information,prix,photo,idCategorie,dispo) values("Soupe légume", "Une soupe légère et réconfortante préparée avec un mélange coloré de légumes de saison.", 5000, "assets/frontoffice/img/photo/photo-plat-vegan/10.jpg", 1, 1);
insert into Plat(nom,information,prix,photo,idCategorie,dispo) values("Salade de céréales", "Une salade nourrissante et riche en fibres, composée d'un mélange de céréales variées, de légumes croquants et d'une vinaigrette légère.", 5000, "assets/frontoffice/img/photo/photo-plat-vegan/11.jpg", 1, 1);
insert into Plat(nom,information,prix,photo,idCategorie,dispo) values("Chou-fleur garni", "Un plat végétarien créatif mettant en vedette le chou-fleur comme ingrédient principal.", 5000, "assets/frontoffice/img/photo/photo-plat-vegan/12.jpg", 1, 1);
insert into Plat(nom,information,prix,photo,idCategorie,dispo) values("Salade de légume avec pâte", "Une salade fraîche et croquante garnie de légumes colorés et de pâtes légères.", 5000, "assets/frontoffice/img/photo/photo-plat-vegan/13.jpg", 1, 1);
insert into Plat(nom,information,prix,photo,idCategorie,dispo) values("Salade de légume", "Une salade rafraîchissante préparée avec une variété de légumes frais et croquants. ", 5000, "assets/frontoffice/img/photo/photo-plat-vegan/14.jpg", 1, 1);
insert into Plat(nom,information,prix,photo,idCategorie,dispo) values("Sauce légume", "Une sauce légère et savoureuse préparée avec des légumes frais et des épices aromatiques.", 5000, "assets/frontoffice/img/photo/photo-plat-vegan/15.jpg", 1, 1);
insert into Plat(nom,information,prix,photo,idCategorie,dispo) values("Sauce légume et riz", "Une combinaison délicieuse de sauce légume maison et de riz moelleux", 5000, "assets/frontoffice/img/photo/photo-plat-vegan/16.jpg", 1, 1);
insert into Plat(nom,information,prix,photo,idCategorie,dispo) values("Lassar et légume", "Un plat végétarien équilibré et savoureux composé de légumes frais et de lassar, une préparation culinaire traditionnelle", 5000, "assets/frontoffice/img/photo/photo-plat-vegan/17.jpg", 1, 1);


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
	JOUR DATE,
	FOREIGN KEY (IDPLAT) REFERENCES PLAT (IDPLAT)
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
