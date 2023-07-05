<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/frontoffice/sass/commande.css">
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
            <a href="<?php echo base_url()?>Kalivan/index" class="navbar__list--links">Accueil</a>
            <a href="<?php echo base_url()?>Kalivan/commande" class="navbar__list--links">Commande</a>
            <a href="<?php echo base_url()?>Kalivan/contact" class="navbar__list--links">Contact</a>
            <a href="<?php echo base_url()?>Kalivan/contact" class="navbar__list--links">Se connecter</a>
        </div>
    </header>

    <div class="page">
        <div class="page__platjour">
            <h2 class="title">Plat du jour !!</h2>
            <div class="page__platjour__content">
                <!-- Plat Jour -->
                <?php 
                    foreach ($jour as $row) { ?>
                        <form action="<?php echo base_url()?>Kalivan/sign" method="post" class="page__platjour__content__card">
                            <div>
                                <img src="<?php echo base_url()?><?php echo $row['PHOTO']; ?>" alt="" srcset="">
                                <h2><?php echo $row['NOM']; ?></h2>
                                <p><?php echo $row['INFORMATION']; ?></p>
                                <div class="page__platjour__content__card__info">
                                    <span class="prix"> <?php echo $row['PRIX']; ?> Ar</span>
                                    <span class="quantity">
                                        <span class="quantity__button increase"><i class="fas fa-plus"></i></span>
                                            <input type="number" name="quantite" value="1" class="quantity-input" min="1">
                                        <span class="quantity__button decrease"><i class="fas fa-minus"></i></span>
                                    </span>
                                </div>
                                <input type="hidden" name="idplat" value="PLAT1">
                                <button type="submit" class="valider"><a href="#"><i class="fas fa-cart-arrow-down"></i></a></button>
                            </div>
                        </form>        
                <?php } ?>
                

                <!-- <form action="<?php echo base_url()?>Kalivan/sign" method="get" class="page__platjour__content__card">
                    <div>
                        <img src="<?php echo base_url()?>assets/frontoffice/img/commande/food.jpg" alt="" srcset="">
                        <h2>Spaghetti aux fromages</h2>
                        <p>Dolor quis accusam. Nisl lorem commodo stet lobortis diam sit nonumy rebum ut tation lorem sed.</p>
                        <div class="page__platjour__content__card__info">
                            <span class="prix"> 5 000 Ar</span>
                            <span class="quantity">
                                <span class="quantity__button increase"><i class="fas fa-plus"></i></span>
                                    <input type="number" name="quantite" value="1" class="quantity-input" min="1">
                                <span class="quantity__button decrease"><i class="fas fa-minus"></i></span>
                            </span>
                        </div>
                        <input type="hidden" name="idplat" value="PLAT1">
                        <button type="submit" class="valider"><a href="#"><i class="fas fa-cart-arrow-down"></i></a></button>
                    </div>
                </form>

                <form action="<?php echo base_url()?>Kalivan/sign" method="get" class="page__platjour__content__card">
                    <div>
                        <img src="<?php echo base_url()?>assets/frontoffice/img/commande/food.jpg" alt="" srcset="">
                        <h2>Spaghetti aux fromages</h2>
                        <p>Dolor quis accusam. Nisl lorem commodo stet lobortis diam sit nonumy rebum ut tation lorem sed.</p>
                        <div class="page__platjour__content__card__info">
                            <span class="prix"> 5 000 Ar</span>
                            <span class="quantity">
                                <span class="quantity__button increase"><i class="fas fa-plus"></i></span>
                                    <input type="number" name="quantite" value="1" class="quantity-input" min="1">
                                <span class="quantity__button decrease"><i class="fas fa-minus"></i></span>
                            </span>
                        </div>
                        <input type="hidden" name="idplat" value="PLAT1">
                        <button type="submit" class="valider"><a href="#"><i class="fas fa-cart-arrow-down"></i></a></button>
                    </div>
                </form> -->
                
            </div>
        </div>

            <!-- Manomboka eto ny menu lesy Miary anh  -->
        <div class="page__menu">
            <div class="page__menu__header">
                <h4>MENU</h4>
                    <div class="filter-container">
                        <a href="#" class="filter-link active" data-filter="all">All</a>
                        <a href="#" class="filter-link" data-filter="1">Vegan</a>
                        <a href="#" class="filter-link" data-filter="2">Local</a>
                        <a href="#" class="filter-link" data-filter="3">Drink</a>
                    </div>
            </div>
            <!-- Menu -->
            <section class="page__menu__content">

            <?php 
                foreach($produit as $row){ ?>
                    <form action="<?php echo base_url()?>Kalivan/sign" method="get" class="page__menu__content__card" data-category="<?php echo $row['idCategorie'];?>">
                    <div>
                        <img src="<?php echo base_url()?><?php echo $row['photo']; ?>" alt="" srcset="">
                        <h2><?php echo $nom = iconv('UTF-8', 'ASCII//TRANSLIT',$row['nom']); ?></h2>
                        <?php  ?>
                        <p><?php echo $row['information']; ?></p>
                        <div class="page__menu__content__card__info">
                            <span class="prix"> <?php echo $row['prix']; ?></span>
                            <span class="quantity">
                                <span class="quantity__button increase"><i class="fas fa-plus"></i></span>
                                    <input type="number" name="quantite" value="1" class="quantity-input" min="1">
                                <span class="quantity__button decrease"><i class="fas fa-minus"></i></span>
                            </span>
                        </div>
                        <input type="hidden" name="idplat" value="<?php echo $row['idPlat']; ?>">
                        <button type="submit" class="valider"><a href="#"><i class="fas fa-cart-arrow-down"></i></a></button>
                    </div>
                </form>
            <?php  }  ?>

<!--                 
                <form action="" method="get" class="page__menu__content__card" data-category="local">
                    <div>
                        <img src="<?php ?>assets/frontoffice/img/commande/local.jpg" alt="" srcset="">
                        <h2>Kaly local</h2>
                        <p>Dolor quis accusam. Nisl lorem commodo stet lobortis diam sit nonumy rebum ut tation lorem sed.</p>
                        <div class="page__menu__content__card__info">
                            <span class="prix"> 5 000 Ar</span>
                            <span class="quantity">
                                <span class="quantity__button increase"><i class="fas fa-plus"></i></span>
                                    <input type="number" name="quantite" value="1" class="quantity-input" min="1">
                                <span class="quantity__button decrease"><i class="fas fa-minus"></i></span>
                            </span>
                        </div>
                        <input type="hidden" name="idplat" value="PLAT1">
                        <button type="submit" class="valider"><a href="#"><i class="fas fa-cart-arrow-down"></i></a></button>
                    </div>
                </form>

                <form action="" method="get" class="page__menu__content__card" data-category="drinks">
                    <div>
                        <img src="<?php ?>assets/frontoffice/img/commande/drink.jpg" alt="" srcset="">
                        <h2>Coca</h2>
                        <p>Dolor quis accusam. Nisl lorem commodo stet lobortis diam sit nonumy rebum ut tation lorem sed.</p>
                        <div class="page__menu__content__card__info">
                            <span class="prix"> 5 000 Ar</span>
                            <span class="quantity">
                                <span class="quantity__button increase"><i class="fas fa-plus"></i></span>
                                    <input type="number" name="quantite" value="1" class="quantity-input" min="1">
                                <span class="quantity__button decrease"><i class="fas fa-minus"></i></span>
                            </span>
                        </div>
                        <input type="hidden" name="idplat" value="PLAT1">
                        <button type="submit" class="valider"><a href="#"><i class="fas fa-cart-arrow-down"></i></a></button>
                    </div>
                </form> -->
<!-- 
                <form action="" method="get" class="page__menu__content__card" data-category="vegan">
                    <div>
                        <img src="<?php ?>assets/frontoffice/img/commande/food.jpg" alt="" srcset="">
                        <h2>Spaghetti aux fromages</h2>
                        <p>Dolor quis accusam. Nisl lorem commodo stet lobortis diam sit nonumy rebum ut tation lorem sed.</p>
                        <div class="page__menu__content__card__info">
                            <span class="prix"> 5 000 Ar</span>
                            <span class="quantity">
                                <span class="quantity__button increase"><i class="fas fa-plus"></i></span>
                                    <input type="number" name="quantite" value="1" class="quantity-input" min="1">
                                <span class="quantity__button decrease"><i class="fas fa-minus"></i></span>
                            </span>
                        </div>
                        <input type="hidden" name="idplat" value="PLAT1">
                        <button type="submit" class="valider"><a href="#"><i class="fas fa-cart-arrow-down"></i></a></button>
                    </div>
                </form>

                <form action="" method="get" class="page__menu__content__card" data-category="local">
                    <div>
                        <img src="<?php ?>assets/frontoffice/img/commande/local.jpg" alt="" srcset="">
                        <h2>Kaly local</h2>
                        <p>Dolor quis accusam. Nisl lorem commodo stet lobortis diam sit nonumy rebum ut tation lorem sed.</p>
                        <div class="page__menu__content__card__info">
                            <span class="prix"> 5 000 Ar</span>
                            <span class="quantity">
                                <span class="quantity__button increase"><i class="fas fa-plus"></i></span>
                                    <input type="number" name="quantite" value="1" class="quantity-input" min="1">
                                <span class="quantity__button decrease"><i class="fas fa-minus"></i></span>
                            </span>
                        </div>
                        <input type="hidden" name="idplat" value="PLAT1">
                        <button type="submit" class="valider"><a href="#"><i class="fas fa-cart-arrow-down"></i></a></button>
                    </div>
                </form>

                <form action="" method="get" class="page__menu__content__card" data-category="drinks">
                    <div>
                        <img src="<?php ?>assets/frontoffice/img/commande/drink.jpg" alt="" srcset="">
                        <h2>Coca</h2>
                        <p>Dolor quis accusam. Nisl lorem commodo stet lobortis diam sit nonumy rebum ut tation lorem sed.</p>
                        <div class="page__menu__content__card__info">
                            <span class="prix"> 5 000 Ar</span>
                            <span class="quantity">
                                <span class="quantity__button increase"><i class="fas fa-plus"></i></span>
                                    <input type="number" name="quantite" value="1" class="quantity-input" min="1">
                                <span class="quantity__button decrease"><i class="fas fa-minus"></i></span>
                            </span>
                        </div>
                        <input type="hidden" name="idplat" value="PLAT1">
                        <button type="submit" class="valider"><a href="#"><i class="fas fa-cart-arrow-down"></i></a></button>
                    </div>
                </form> -->
                
            </section>
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

    <!-- Plus and minus  on html -->
    <script>
        const increaseButtons = document.querySelectorAll('.quantity__button.increase');
        const decreaseButtons = document.querySelectorAll('.quantity__button.decrease');
        const quantityInputs = document.querySelectorAll('.quantity-input');

        increaseButtons.forEach((button, index) => {
        button.addEventListener('click', () => {
            if (quantityInputs[index]) {
            quantityInputs[index].stepUp();
            }else{
            console.error('Quantity input not found for increase button at index:', index);
            }
            });
        });

        decreaseButtons.forEach((button, index) => {
        button.addEventListener('click', () => {
            if (quantityInputs[index]) {
            quantityInputs[index].stepDown();
            } else {
            console.error('Quantity input not found for decrease button at index:', index);
            }
        });
        });
    </script>

    <!-- category -->

    <script>
        const filterLinks = document.querySelectorAll('.filter-link');

        filterLinks.forEach((link) => {
        link.addEventListener('click', (event) => {
            event.preventDefault();

            filterLinks.forEach((filterLink) => {
            filterLink.classList.remove('active');
            });
            link.classList.add('active');

            const filterValue = link.getAttribute('data-filter');

            const allElements = document.querySelectorAll('.page__menu__content__card');
            allElements.forEach((element) => {
            if (filterValue === 'all' || element.getAttribute('data-category') === filterValue) {
                element.style.display = 'block';
            } else {
                element.style.display = 'none';
            }
            });

            const filteredSection = document.getElementById('filtered-section');
            filteredSection.scrollIntoView({ behavior: 'smooth' });
        });
        });

    </script>

</body>
</html>