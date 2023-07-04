<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/backoffice/sass/plat.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/backoffice/fontawesome-5/css/all.css">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/backoffice/img/logo.png" type="image/x-icon">
    <title>Kalivan</title>
</head>
<body>
    <header class="navbar">
        <div class="navbar__logo">
            <img src="<?php echo base_url() ?>assets/backoffice/img/logo_vert.png" alt="" srcset="">
        </div>
        <div class="navbar__list">
            <a href="<?php echo base_url() ?>BackOffice/index" class="navbar__list--links">Acceuil</a>
            <a href="<?php echo base_url() ?>BackOffice/board" class="navbar__list--links">Commande</a>
        </div>
    </header>

    <div class="page">
        <div class="page__formulaire">
            <div class="select-dropdown">
                <form action="" method="get">
                    <p><input type="file" name="image" id="" ></p>
                    <p><input type="text" name="nom" id="" placeholder="Nom"></p>
                    <p><input type="text" name="nom" id="" placeholder="Description"></p>
                    <p><input type="number" name="prix" id="" placeholder="Prix"></p>
                    <p>Catégorie: <select name="category" id="" value="">
                        <option value="">Vegan</option>
                        <option value="">Local</option>
                        <option value="">Boisson</option>
                    </select></p>
                    <button class="changer" type="submit">Modifier</button>
                </form>
            </div>
        </div>
    </div>



    <footer class="footer">
        <div class="footer__info">
            <img src="<?php echo base_url() ?>assets/backoffice/img/logo.png" alt="" class="footer__info__imaga">
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