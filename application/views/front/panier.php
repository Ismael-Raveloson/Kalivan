<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/frontoffice/sass/panier.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/frontoffice/fontawesome-5/css/all.css">
    <link rel="shortcut icon" href="<?php echo base_url();?>/assets/frontoffice/img/logo.png" type="image/x-icon">
    <title>Kalivan</title>
</head>
<body>
    <header class="navbar">
        <div class="navbar__logo">
            <img src="<?php echo base_url();?>/assets/frontoffice/img/logo_vert.png" alt="" srcset="">
        </div>
        <div class="navbar__list">
            <a href="<?php echo base_url()?>Kalivan/index" class="navbar__list--links">Accueil</a>
            <a href="<?php echo base_url()?>Kalivan/commande" class="navbar__list--links">Commande</a>
            <a href="<?php echo base_url()?>Kalivan/panier" class="navbar__list--links">Panier</a>
            <a href="<?php echo base_url()?>Kalivan/contact" class="navbar__list--links">Contact</a>
            <a href="<?php echo base_url()?>Kalivan/sign" class="navbar__list--links">Se connecter</a>
        </div>
    </header>

    <div class="page">
        <div class="page__facture">
            <!-- <h2>Your cart !! </h2> -->
            <table class="page__facture__detail">
                <tr class="page__facture__detail__entete">
                    <td class="image">Product</td>
                    <td class="nom"></td>
                    <td class="prix">Price</td>
                    <td class="quantity">Quantity</td>
                    <td class="total">Total</td>
                </tr>
                <tr class="page__facture__detail__corps">
                    <td class="image"><img src="<?php echo base_url();?>/assets/frontoffice/img/commande/food.jpg" alt="" srcset=""></td>
                    <td class="nom"> Spaghetti aux fromages</td>
                    <td class="prix">5 000 Ar</td>
                    <td class="quantity">
                        <span class="quantity">
                            <span class="quantity__button increase"><i class="fas fa-plus"></i></span>
                                <input type="number" name="quantite" value="1" class="quantity-input" min="1">
                            <span class="quantity__button decrease"><i class="fas fa-minus"></i></span>
                        </span>
                    </td>
                    <td class="total">5 000 Ar</td>
                </tr>

                <tr class="page__facture__detail__corps">
                    <td class="image"><img src="<?php echo base_url();?>/assets/frontoffice/img/commande/drink.jpg" alt="" srcset=""></td>
                    <td class="nom">Coca Cola</td>
                    <td class="prix">5 000 Ar</td>
                    <td class="quantity">
                        <span class="quantity">
                            <span class="quantity__button increase"><i class="fas fa-plus"></i></span>
                                <input type="number" name="quantite" value="1" class="quantity-input" min="1">
                            <span class="quantity__button decrease"><i class="fas fa-minus"></i></span>
                        </span>
                    </td>
                    <td class="total">5 000 Ar</td>
                </tr>

                <tr class="page__facture__detail__corps">
                    <td class="image"><img src="<?php echo base_url();?>/assets/frontoffice/img/commande/local.jpg" alt="" srcset=""></td>
                    <td class="nom">Local</td>
                    <td class="prix">5 000 Ar</td>
                    <td class="quantity">
                        <span class="quantity">
                            <span class="quantity__button increase"><i class="fas fa-plus"></i></span>
                                <input type="number" name="quantite" value="1" class="quantity-input" min="1">
                            <span class="quantity__button decrease"><i class="fas fa-minus"></i></span>
                        </span>
                    </td>
                    <td class="total">5 000 Ar</td>
                </tr>
                <tr class="page__facture__detail__pied">
                    <td class="image"></td>
                    <td class="nom"></td>
                    <td class="prix"></td>
                    <td class="panier"><button class="valider">Valider Panier <i class="fas fa-cart-arrow-down"></i></button></td>
                </tr>
            </table>
        </div>
    </div>



    <footer class="footer">
        <div class="footer__info">
            <img src="<?php echo base_url(); ?>/assets/frontoffice/img/logo.png" alt="" class="footer__info__imaga">
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