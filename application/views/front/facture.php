<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/frontoffice/sass/facture.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/frontoffice/fontawesome-5/css/all.css">
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/frontoffice/img/logo.png" type="image/x-icon">
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

    <secion id="section">

    <div class="page">
        <div class="page__facture">
            <div class="page__facture__header">
                <div class="page__facture__header__logo">
                    <img src="<?php echo base_url() ?>assets/frontoffice/img/vert.svg" alt="" srcset="">
                </div>
                <div class="page__facture__header__entete">
                    <h2>FACTURE</h2>
                    <p class="reference"><b>REFERENCE FACTURE: #050</b></p>
                    <p>Nom: Miary</p>
                    <p>Contact: 0348564752</p>
                </div>
            </div>
            <div class="page__facture__content">
                <table class="facture">
                    <tr class="entete">
                        <td class="numero">Numéro</td>
                        <td class="produit">Produit</td>
                        <td class="prix">Prix</td>
                        <td class="quantite">Quantite</td>
                        <td class="total">Total</td>
                    </tr>
                
                    <?php  
                    if($facture == null){
                        echo 'tsitsy';
                    }
                    foreach ($facture as $row) { ?>
                        <tr class="corps">
                            <td class="numero"><?php echo $row['IDCOMMANDE'];?></td>
                            <td class="produit"><?php echo $row['NOM'];?></td>
                            <td class="prix"><?php echo $row['PRIX'];?> Ar</td>
                            <td class="quantite"><?php echo $row['QUANTITE'];?></td>
                            <td class="total"><?php 
                                echo $row['PRIX'] * $row['QUANTITE'];
                                echo $i;
                            ?></td>
                        </tr>
                    <?php } ?>

                    <tr class="subtotal">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="subtotal">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="nom"><b>Prix HT</b></td>
                        <td class="prix"><b>24 000 Ar</b></td>
                    </tr>
                    <tr class="subtotal">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="nom"><b>Taxes</b></td>
                        <td class="prix"><b>6 000 Ar</b></td>
                    </tr>
                    <tr class="subtotal">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="nom"><b>Prix TTC</b></td>
                        <td class="prix"><b>30 000 Ar</b></td>
                    </tr>
                </table>
            </div>
            <div class="page__facture__footer">
                <div class="left">
                    <p><i class="fas fa-phone"></i> +261 381234578</p>
                    <p><i class="far fa-envelope"> kalivan.info@gmail.com</i></p>
                </div>
                
                <div class="right">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                </div>
            </div>
        </div>
    </secion>

        <button class="pdf" onclick="downloadPDF()"><i class="far fa-file-pdf"></i> Télécharger PDF </button>
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


    <script>
        function downloadPDF(){
            const options = {
                margin: 0.3,
                filename: 'facture.pdf',
                image: { 
                    type: 'jpeg', 
                    quality: 0.98 
                },
                html2canvas: { 
                    scale: 2 
                },
                jsPDF: { 
                    unit: 'in', 
                    format: 'a4', 
                    orientation: 'portrait' 
                }    
            }

            var objstr = document.getElementById('section').innerHTML;
            var strr = '<html><head><title>Resultat</title>';
                strr += '</head><body>';
                strr += '<div>'+objstr+'</div>';
                strr += '</body></html>';
            html2pdf().from(strr).set(options).save();
            
        }
    </script>

    <script src="<?php echo base_url()?>assets/frontoffice/js/html2pdf.bundle.min.js"></script>
    <script src="<?php echo base_url()?>assets/frontoffice/js/jquery.min.js"></script>
</body>
</html>