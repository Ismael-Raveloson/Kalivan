<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/frontoffice/sass/paiement.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/frontoffice/fontawesome-5/css/all.css">
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/frontoffice/img/logo.png" type="image/x-icon">
    <title>Kalivan</title>
</head>
<body>
    <header class="navbar">
        <div class="navbar__logo">
            <img src="<?php echo base_url()?>assets/frontoffice/img/logo_vert.png" alt="" srcset="">
        </div>
        <div class="navbar__list">
            <a href="index.html" class="navbar__list--links">Acceuil</a>
            <a href="commande.html" class="navbar__list--links">Commande</a>
            <a href="panier.html" class="navbar__list--links">Panier</a>
            <a href="contact.html" class="navbar__list--links">Contact</a>
        </div>
    </header>

    <div class="page">
        <div class="page__paiement">
            <div class="page__paiement__image">
                <img src="<?php echo base_url()?>assets/frontoffice/img/form.jpg" alt="" srcset="">
            </div>
            <div class="page__paiement__formulaire">
                <!-- <h2>Paiement</h2> -->
                <p>Nom <i class="far fa-user"></i> :<input type="text" name="nom" id=""></p>
                <p>Prenom <i class="far fa-user"></i> : <input type="text" name="prenom" id=""></p>
                <p>Contact <i class="fas fa-phone"></i> : <input type="text" name="contact" id=""> </p>
                <p>Lieu de récupération <i class="fas fa-map-marker-alt"></i> : <label for="">Andraharo</label> </p>
                <input type="hidden" name="place" value="Andraharo">
                <p>Heure de récupération <i class="fas fa-clock"></i> : <input type="time" name="heure" id=""></p>
                <p>* Numéro Carte <i class="fab fa-cc-visa"></i> : <input type="text" name="carte" id=""></p>
                <p>* Numéro Mobile Money <i class="fas fa-money-check"></i> : <input type="text" name="numero" id=""></p>
                <p><button class="retour"><a href="index.html">Continuer achat</a></button>
                    <button><a href="facture.html">Payer</a></button></p>

                <div class="icons">
                    <img src="<?php echo base_url()?>assets/frontoffice/img/icon/mvola.png" alt="" srcset="">
                    <img src="<?php echo base_url()?>assets/frontoffice/img/icon/orange.png" alt="" srcset="">
                    <img src="<?php echo base_url()?>assets/frontoffice/img/icon/airtel.png" alt="" srcset="">
                    <img src="<?php echo base_url()?>assets/frontoffice/img/icon/mc.png" alt="" srcset="">
                    <img src="<?php echo base_url()?>assets/frontoffice/img/icon/visa.jpg" alt="" srcset="">
                </div>
            </div>
        </div>

    </div>

    <footer class="footer">
        <div class="footer__info">
            <img src="<?php echo base_url()?>assets/frontoffice/img/logo.png" alt="" class="footer__info__imaga">
            <p>Sanctus dolor nam justo illum diam. Ea magna sadipscing sadipscing tempor facilisi et at. Ipsum lorem est diam ipsum et aliquyam facilisis sea minim. Elitr rebum tempor rebum consetetur diam duo rebum at dolor tation et est accusam dolor magna feugait sit duo.©Kalivan 2023</p>
            <div class="footer__info__media">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
            </div>
        </div>
        <div class="footer__newsletter">
            <h2>Stay tuned !!</h2>
            <p>Send us your email for more news</p>
            <p><input type="email" name="" id=""> <button>Envoyer</button></p>
        </div>
    </footer>


</body>
</html>