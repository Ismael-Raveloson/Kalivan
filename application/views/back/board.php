<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/backoffice/sass/commande.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/backoffice/fontawesome-5/css/all.css">
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/backoffice/img/logo.png" type="image/x-icon">
    <title>Kalivan</title>
</head>
<body>
    <header class="navbar">
        <div class="navbar__logo">
            <img src="<?php echo base_url()?>assets/backoffice/img/logo_vert.png" alt="" srcset="">
        </div>
        <div class="navbar__list">
            <a href="<?php echo base_url() ?>BackOffice/index" class="navbar__list--links">Acceuil</a>
            <a href="<?php echo base_url() ?>BackOffice/board" class="navbar__list--links">Commande</a>
            <a href="#" class="navbar__list--links">Statistique</a>
        </div>
    </header>


    <div class="page">
        <div class="page__commande">
            <div class="page__commande__header">
                <h4>Commande</h4>
                    <div class="filter-container">
                        <a href="#" class="filter-link active" data-filter="valid">Valider</a>
                        <a href="#" class="filter-link" data-filter="now">En cuisine</a>
                        <a href="#" class="filter-link" data-filter="wait">En attente</a>
                        <a href="#" class="filter-link" data-filter="done">Reçu</a>
                    </div>
            </div>

            <div class="page__commande__valider" data-category="valid">
                <div class="page__commande__valider__content" id="section">
                    <!-- Commande validée -->
                    <table class="tableau">
                        <tr class="entete">
                            <td class="numero">Numéro Facture</td>
                            <td class="produit">Produit</td>
                            <td class="quantite">Quantite</td>
                            <td class="total">Heure de récupération</td>
                            
                        </tr>

                        <tr class="corps">
                            <td class="numero">01</td>
                            <td class="produit">Spaghetti</td>
                            <td class="quantite">2</td>
                            <td class="total">08:54</td>
                            <td class="annuler"><button><a href="">Annuler</a></button></td>
                            <td class="cuisine"><button><a href="">Envoyer en cuisine</a></button></td>
                        </tr>

                        <tr class="corps">
                            <td class="numero">02</td>
                            <td class="produit">Spaghetti</td>
                            <td class="quantite">2</td>
                            <td class="total">08:54</td>
                            <td class="annuler"><button><a href="">Annuler</a></button></td>
                            <td class="cuisine"><button><a href="">Envoyer en cuisine</a></button></td>
                        </tr>

                        <tr class="corps">
                            <td class="numero">03</td>
                            <td class="produit">Spaghetti</td>
                            <td class="quantite">2</td>
                            <td class="total">08:54</td>
                            <td class="annuler"><button><a href="">Annuler</a></button></td>
                            <td class="cuisine"><button><a href="">Envoyer en cuisine</a></button></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="page__commande__actuel" data-category="now">
                <!-- Commande en cuisine -->
                <div class="page__commande__actuel__content" id="section">
                    <table class="tableau">
                        <tr class="entete">
                            <td class="numero">Numéro Facture</td>
                            <td class="produit">Produit</td>
                            <td class="quantite">Quantite</td>
                            <td class="total">Heure de récupération</td>
                            
                        </tr>

                        <tr class="corps">
                            <td class="numero">01</td>
                            <td class="produit">Spaghetti</td>
                            <td class="quantite">2</td>
                            <td class="total">08:54</td>
                            <td class="cuisine"><button><a href="">Envoyer en attente</a></button></td>
                        </tr>

                        <tr class="corps">
                            <td class="numero">02</td>
                            <td class="produit">Spaghetti</td>
                            <td class="quantite">2</td>
                            <td class="total">08:54</td>
                            <td class="cuisine"><button><a href="">Envoyer en attente</a></button></td>
                        </tr>

                        <tr class="corps">
                            <td class="numero">03</td>
                            <td class="produit">Spaghetti</td>
                            <td class="quantite">2</td>
                            <td class="total">08:54</td>
                            <td class="cuisine"><button><a href="">Envoyer en attente</a></button></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="page__commande__attente" data-category="wait">
                <!-- Commande en attente -->
                <div class="page__commande__actuel__content" id="section">
                    <table class="tableau">
                        <tr class="entete">
                            <td class="numero">Numéro Facture</td>
                            <td class="produit">Produit</td>
                            <td class="quantite">Quantite</td>
                            <td class="total">Heure de récupération</td>
                            
                        </tr>

                        <tr class="corps">
                            <td class="numero">01</td>
                            <td class="produit">Spaghetti</td>
                            <td class="quantite">2</td>
                            <td class="total">08:54</td>
                            <td class="cuisine"><button><a href="">Reçu</a></button></td>
                        </tr>

                        <tr class="corps">
                            <td class="numero">02</td>
                            <td class="produit">Spaghetti</td>
                            <td class="quantite">2</td>
                            <td class="total">08:54</td>
                            <td class="cuisine"><button><a href="">Reçu</a></button></td>
                        </tr>

                        <tr class="corps">
                            <td class="numero">03</td>
                            <td class="produit">Spaghetti</td>
                            <td class="quantite">2</td>
                            <td class="total">08:54</td>
                            <td class="cuisine"><button><a href="">Reçu</a></button></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="page__commande__fini" data-category="done">
                <!-- Commande récupérer -->
                <div class="page__commande__actuel__content" id="section">
                    <table class="tableau">
                        <tr class="entete">
                            <td class="numero">Numéro Facture</td>
                            <td class="produit">Produit</td>
                            <td class="quantite">Quantite</td>
                            <td class="total">Heure de récupération</td>
                            
                        </tr>

                        <tr class="corps">
                            <td class="numero">01</td>
                            <td class="produit">Spaghetti</td>
                            <td class="quantite">2</td>
                            <td class="total">08:54</td>
                        </tr>

                        <tr class="corps">
                            <td class="numero">02</td>
                            <td class="produit">Spaghetti</td>
                            <td class="quantite">2</td>
                            <td class="total">08:54</td>
                        </tr>

                        <tr class="corps">
                            <td class="numero">03</td>
                            <td class="produit">Spaghetti</td>
                            <td class="quantite">2</td>
                            <td class="total">08:54</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        
    </div>



    <footer class="footer">
        <div class="footer__info">
            <img src="<?php echo base_url()?>assets/backoffice/img/logo.png" alt="" class="footer__info__imaga">
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

    <script>
        const filterLinks = document.querySelectorAll('.filter-link');
        
        filterLinks.forEach((link) => {
          link.addEventListener('click', (event) => {
            event.preventDefault();
      
            // Appliquer la classe active sur le lien cliqué
            filterLinks.forEach((filterLink) => {
              filterLink.classList.remove('active');
            });
            link.classList.add('active');
      
            // Récupérer la valeur du filtre
            const filterValue = link.getAttribute('data-filter');
      
            // Filtrer les éléments en fonction du filtre
            const allElements = document.querySelectorAll('.tableau');
            allElements.forEach((element) => {
              if (filterValue === 'all' || element.getAttribute('data-category') === filterValue) {
                element.style.display = 'block';
              } else {
                element.style.display = 'none';
              }
            });
          });
        });
      </script>
      
    
</body>
</html>
