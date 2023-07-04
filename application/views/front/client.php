<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontoffice/sass/index.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontoffice/fontawesome-5/css/all.css">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/frontoffice/img/logo.png" type="image/x-icon">
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
            <a href="<?php echo base_url()?>Kalivan/contactClient" class="navbar__list--links">Contact</a>
            <a href="<?php echo base_url()?>Kalivan/deconnecter" class="navbar__list--links">Se déconnecter</a>
        </div>
    </header>

    <div class="page">
        <div class="page__caroussel">
            <div class="page__caroussel__info">
                <h1>Who are we ?</h1>
                
                <p>Consectetuer dolore vero ea gubergren justo amet wisi et enim 
                justo eos. Ut molestie lorem stet ut erat lorem est iusto esse
                feugiat dolor eirmod et tempor kasd sed labore et ad gubergren dolor est eos. Mazim vel vero ipsum diam magna sea veniam 
                esse diam amet amet invidunt sea eirmod. Rebum diam ea amet duo vulputate lorem nulla justo gubergren diam te dolores ex magna invidunt.</p>
            </div>

            <div class="page__caroussel__image">
                <img src="<?php echo base_url() ?>assets/frontoffice/img/home/4.jpg" alt="">
            </div>  

        </div>
        
        <h1 class="page__info__title">How it works ?</h1>  
        <div class="page__info">
            
            <div class="page__info__card">
                <i class="fas fa-map"></i>
                <p>Commandez ce que vous voulez</p>
            </div>
            <div class="page__info__card">
                <i class="fas fa-cart-arrow-down"></i>
                <p>Validez vos commandes dans le panier</p>
            </div>
            <div class="page__info__card">
                <i class="fas fa-clipboard-list"></i>
                <p>Payez vos commandes</p>
            </div>
            <div class="page__info__card">
                <i class="far fa-file-pdf"></i>
                <p>Téléchargez le PDF de votre facture</p>
            </div>
            <div class="page__info__card">
                <i class="fas fa-map-pin"></i>
                <p>Récupérer votre commande dans nos points de vente</p>
            </div>
            <div class="page__info__card">
                <i class="fas fa-check"></i>
                <p>Appréciez nos délicieux plats</p>
            </div>
        </div>

        <h1 class="page__location__title">Where are we ?</h1>
        <div class="page__location">
            <div class="page__location__card">
                <h4 class="page__location__card__title">Lundi - Mardi</h4>
                <p>Ipsum diam tempor tempor sit sanctus veniam et lorem blandit amet accusam ea elitr at tempor amet ipsum odio.</p>
                <button><a href=""><i class="fas fa-map-pin"></i> Ankorondrano</a></button>
            </div>
            <div class="page__location__card">
                <h4 class="page__location__card__title">Mercredi - Jeudi</h4>
                <p>Ipsum diam tempor tempor sit sanctus veniam et lorem blandit amet accusam ea elitr at tempor amet ipsum odio.</p>
                <button><a href=""><i class="fas fa-map-pin"></i> Tanjombato</a></button>
            </div>
            <div class="page__location__card">
                <h4 class="page__location__card__title">Vendredi - Samedi</h4>
                <p>Ipsum diam tempor tempor sit sanctus veniam et lorem blandit amet accusam ea elitr at tempor amet ipsum odio.</p>
                <button><a href=""><i class="fas fa-map-pin"></i> Andraharo</a></button>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="footer__info">
            <img src="<?php echo base_url() ?>assets/frontoffice/img/logo.png" alt="" class="footer__info__imaga">
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