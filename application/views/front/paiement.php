<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/frontoffice/sass/paiement.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/frontoffice/fontawesome-5/css/all.css">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/frontoffice/img/Vert.svg" type="image/x-icon">
    <title>Kalivan</title>
</head>
<body>
    <header class="navbar">
        <div class="navbar__logo">
        <img src="<?php echo base_url() ?>assets/frontoffice/img/vert.svg" alt="" srcset="">
        </div>
        <div class="navbar__list">
            <a href="<?php echo base_url()?>Kalivan/client" class="navbar__list--links">Accueil</a>
            <a href="<?php echo base_url()?>Kalivan/commandeClient" class="navbar__list--links">Commande</a>
            <a href="<?php echo base_url()?>Kalivan/panier" class="navbar__list--links">Panier</a>
            <a href="<?php echo base_url()?>Kalivan/contact" class="navbar__list--links">Contact</a>
            <a href="<?php echo base_url()?>Kalivan/contact" class="navbar__list--links">Se déconnecter</a>
        </div>
    </header>

    <div class="page">
        <div class="page__paiement">
            <div class="page__paiement__image">
                <img src="<?php echo base_url()?>assets/frontoffice/img/form.jpg" alt="" srcset="">
            </div>
            <div class="page__paiement__formulaire">
                <!-- <h2>Paiement</h2> -->
                <!-- <p>Nom <i class="far fa-user"></i> :<input type="text" name="nom" id=""></p>
                <p>Prenom <i class="far fa-user"></i> : <input type="text" name="prenom" id=""></p>
                <p>Contact <i class="fas fa-phone"></i> : <input type="text" name="contact" id=""> </p> -->
                <form action="<?php echo base_url()?>Kalivan/validerCommande" method="post">
                    <p>Lieu de récupération <i class="fas fa-map-marker-alt"></i> : <label for="">Anosy</label> </p>
                    <input type="hidden" name="place" value="Andraharo">
                    <p>Heure de récupération <i class="fas fa-clock"></i> : <input type="time" name="heure" id=""></p>
                    <p>* Numéro Carte <i class="fab fa-cc-visa"></i> : <input type="text" name="carte" id=""></p>
                    <p>* Numéro Mobile Money <i class="fas fa-money-check"></i> : <input type="text" name="numero" id=""></p>
                    <p><button class="retour"><a href="<?php echo base_url('Kalivan/client');?>">Continuer achat</a></button>
                        <button type="submit">Payer</button></p>

                    <div class="icons">
                        <img src="<?php echo base_url()?>assets/frontoffice/img/icon/mvola.png" alt="" srcset="">
                        <img src="<?php echo base_url()?>assets/frontoffice/img/icon/orange.png" alt="" srcset="">
                        <img src="<?php echo base_url()?>assets/frontoffice/img/icon/airtel.png" alt="" srcset="">
                        <img src="<?php echo base_url()?>assets/frontoffice/img/icon/mc.png" alt="" srcset="">
                        <img src="<?php echo base_url()?>assets/frontoffice/img/icon/visa.jpg" alt="" srcset="">
                    </div>
                </form>
                
            </div>
        </div>

    </div>

    <footer class="footer">
        <div class="footer__info">
            <img src="<?php echo base_url() ?>assets/frontoffice/img/vert.svg" alt="" class="footer__info__imaga">
            <p>Kalivan est une start-up qui à terme peut devenir une
                    enseigne de food-truck. Kalivan a pour spécificité de
                    proposer des plats locaux et vegans. Sachant que
                    c’est un food-truck, Kalivan propose des plats à emporter dans les quartiers d’affaires de la capitale.
                    ©Kalivan 2023</p>
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