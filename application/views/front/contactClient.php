<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/frontoffice/sass/contact.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/frontoffice/fontawesome-5/css/all.css">
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/frontoffice/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/frontoffice/css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-xxx" crossorigin="anonymous" />
<!-- Importation CDN animate.min.css -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/frontoffice/sass/index.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/frontoffice/fontawesome-5/css/all.css">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/frontoffice/img/Vert.svg" type="image/x-icon">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.css" />
    <link href="https://cdn.jsdelivr.net/npm/font-awesome-animation@1.1.1/css/font-awesome-animation.min.css" rel="stylesheet">

    <!-- lien pour defiler les images -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!-- fin lien pour defiler les images -->

    <!-- icones equipes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!--fin icones equipes -->
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
            <a href="<?php echo base_url()?>#" class="navbar__list--links">Se déconnecter</a>
        </div>
    </header>


    <div class="page">
    <tbody>
        <div id="doc" class="yui-t7">
            <div id="bd">
            <div id="yui-main">
                <div class="yui-b">
                <div class="yui-gc">
                    <div class="yui-u first">

                        <!-- section1 : nous contacter -->
                    <div class="content">
                        <form class="main_form">
                            <div class="row">
                            <div class="titre"><p>Nous Contacter</p></div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Votre Nom" type="text" name="Name">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Email" type="text" name="Email">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <textarea class="textarea textarea-responsive" placeholder="Message" type="text" name="Message"></textarea>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <button class="send">Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                        <!-- fin section1 : nous contacter -->


                        <!-- fin section2 : INFO -->
                    </div>
                    <div class="yui-u">
                    <div class="content" style="background: #ffe18e;">
                        <div class="info"><p>INFO</p></div>
                        <div class="mail">
                            <a href="mailto:adresse-email@example.com">
                            <i class="far fa-envelope"></i>
                            kalivan.info@gmail.com
                            </a>
                        </div></br>
                        </br>
                        
                        <div class="numero">
                            <a href="tel:+123456789">
                            <i class="fas fa-phone"></i>
                            +261 381234578
                            </a>
                        </div></br>

                        
                        <div class="horaire-ouverture">
                            <div class="ouverture">
                                <p>Horaires d'ouverture :</p>
                                <div id="ourmaps"></div>
                            </div></br>
                            <p>Lundi - Vendredi : 9h00 - 20h00</p>
                            <p>Samedi : 10h00 - 19h00</p>
                            <p>Dimanche : Fermé</p>
                        </br>
                        </div>
                            
                            <div class="reseaux-sociaux">
                            <a href="#" class="social-icon"><i class="fab fa-facebook-f faa-bounce animated"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-twitter faa-bounce faa-reverse animated"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-instagram faa-bounce animated"></i></a>
                            </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>

                        <!-- fin section2 : INFO -->
                        <!-- section3 : Localisation -->

            <div class="yui-b" style="position :sticky;">
                <div class="localisation">
                    <p>Où nous trouver ?</p>
                </div>
                <div id="secondary">
                    <div id="map" ></div>
                </div>
                <!-- section31 bouton localiser -->
                <div class="page__location" style="margin-left: -12%;">
                    <div class="page__location__card">
                    <h4 class="page__location__card__title">Lundi - Mardi</h4>
                    <p>Ipsum diam tempor tempor sit sanctus veniam et lorem blandit amet accusam ea elitr at tempor amet ipsum odio.</p>
                    <button id="btn-ankorondrano" data-latitude="-18.882008" data-longitude="47.529483" style="cursor: pointer;"><i class="fas fa-map-pin"></i> Ankorondrano</button>
                    </div>
                    <div class="page__location__card">
                    <h4 class="page__location__card__title">Mercredi - Jeudi</h4>
                    <p>Ipsum diam tempor tempor sit sanctus veniam et lorem blandit amet accusam ea elitr at tempor amet ipsum odio.</p>
                    <button id="btn-anosy" data-latitude="-18.917626" data-longitude="47.520375" style="cursor: pointer;"><i class="fas fa-map-pin"></i> Anosy</button>
                    </div>
                    <div class="page__location__card">
                    <h4 class="page__location__card__title">Vendredi - Samedi</h4>
                    <p>Ipsum diam tempor tempor sit sanctus veniam et lorem blandit amet accusam ea elitr at tempor amet ipsum odio.</p>
                    <button id="btn-andraharo" data-latitude="-18.893313" data-longitude="47.514741" style="cursor: pointer;"><i class="fas fa-map-pin"></i> Andraharo</button>
                    </div>
                </div>
                <!-- fin bouton localiser -->
            </div>
            </div>


            <!-- <div id="ft">
            <div id="footer">Footer</div>
            </div> -->
        </div>
        </tbody>
        <!-- fin section3 : Localisation -->
        <!-- section4 : equipe -->

        <div class="equipe">
            <p>Notre Equipes</p>
        </div>
        <div class="container">
            <div class="box animate__animated animate__slideInDown">
                <h4><i class="fas fa-palette"></i> Nos designers</h4><br>
                <p>Onja-Nofy</p><br>
                <p>Ceux qui ont pris soin des formes, des logos, des couleurs et des typographies.</p>
            </div>
            <div class="box animate__animated animate__slideInUp">
                <h4><i class="fas fa-laptop-code"></i> Nos développeurs</h4><br>
                <p>Miary-Ismaël-Nambinina-Rudy</p><br>
                <p>Ceux qui ont le savoir-faire pour mettre en route les machines.</p>
            </div>
            <div class="box animate__animated animate__slideInDown">
                <h4><i class="fas fa-bullhorn"></i> Nos responsables communication</h4><br>
                <p>Mino-Teddy-Mamy-Fabrice</p><br>
                <p>Ceux qui ont la tâche de faire connaître l'avancement du projet.</p>
            </div>
    </div>
    <!-- <div id="bd">
        <div id="yui-main">
          <div class="yui-b">
            <div class="yui-g">
              <div class="yui-u first">
                <div class="content">Content Here</div>
              </div>
              <div class="yui-u">
                <div class="content">Content Here</div>
              </div>
            </div>
          </div>
        </div>
        <div class="yui-b">
          <div id="secondary">Secondary Column</div>
        </div>
      </div> -->




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