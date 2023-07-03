<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/backoffice/sass/home.css">
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
        <div class="page__platjour">
            <h2 class="title">Plat du jour !!</h2>
            <div class="page__platjour__content">
                <!-- Plat Jour -->
                <form action="" method="get" class="page__platjour__content__card">
                    <div>
                        <img src="<?php echo base_url()?>assets/backoffice/img/commande/food.jpg" alt="" srcset="">
                        <h2>Spaghetti aux fromages</h2>
                        <p>Dolor quis accusam. Nisl lorem commodo stet lobortis diam sit nonumy rebum ut tation lorem sed.</p>
                        <div class="page__platjour__content__card__info">
                            <span class="prix"> 5 000 Ar</span>
                            <span class="out">
                                <button class="vide"><i class="fas fa-tag"></i> OUT</button>
                            </span>
                        </div>
                        <input type="hidden" name="idplat" value="PLAT1">
                        <button type="submit" class="changer"><i class="far fa-edit"></i></button>
                    </div>
                </form>

                <form action="" method="get" class="page__platjour__content__card">
                    <div>
                        <img src="<?php echo base_url()?>assets/backoffice/img/commande/food.jpg" alt="" srcset="">
                        <h2>Spaghetti aux fromages</h2>
                        <p>Dolor quis accusam. Nisl lorem commodo stet lobortis diam sit nonumy rebum ut tation lorem sed.</p>
                        <div class="page__platjour__content__card__info">
                            <span class="prix"> 5 000 Ar</span>
                            <span class="out">
                                <button class="vide"><i class="fas fa-tag"></i> OUT</button>
                            </span>
                        </div>
                        <input type="hidden" name="idplat" value="PLAT1">
                        <button type="submit" class="changer"><i class="far fa-edit"></i></button>
                    </div>
                </form>

                <form action="" method="get" class="page__platjour__content__card">
                    <div>
                        <img src="<?php echo base_url()?>assets/backoffice/img/commande/food.jpg" alt="" srcset="">
                        <h2>Spaghetti aux fromages</h2>
                        <p>Dolor quis accusam. Nisl lorem commodo stet lobortis diam sit nonumy rebum ut tation lorem sed.</p>
                        <div class="page__platjour__content__card__info">
                            <span class="prix"> 5 000 Ar</span>
                            <span class="out">
                                <button class="vide"><i class="fas fa-tag"></i> OUT</button>
                            </span>
                        </div>
                        <input type="hidden" name="idplat" value="PLAT1">
                        <button type="submit" class="changer"><i class="far fa-edit"></i></button>
                    </div>
                </form>
                
            </div>
        </div>



            <!-- Manomboka eto ny menu lesy Miary anh  -->
        <div class="page__menu">

            <div class="page__menu__header">
                <button class="ajouter"><a href="plat.html"><i class="fas fa-plus"></i> Ajouter plat</a></button>
                <h4>MENU</h4>
                    <div class="filter-container">
                        <a href="#" class="filter-link active" data-filter="all">All</a>
                        <a href="#" class="filter-link" data-filter="vegan">Vegan</a>
                        <a href="#" class="filter-link" data-filter="local">Local</a>
                        <a href="#" class="filter-link" data-filter="drinks">Drink</a>
                    </div>
            </div>
            <!-- Menu -->
            <section class="page__menu__content">

                <form action="" method="get" class="page__menu__content__card" data-category="vegan">
                    <div>
                        <img src="<?php echo base_url()?>assets/backoffice/img/commande/food.jpg" alt="" srcset="">
                        <h2>Spaghetti aux fromages</h2>
                        <p>Dolor quis accusam. Nisl lorem commodo stet lobortis diam sit nonumy rebum ut tation lorem sed.</p>
                        <div class="page__menu__content__card__info">
                            <span class="prix"> 5 000 Ar</span>
                            <span class="quantity">
                                <span class="out">
                                    <button class="vide"><i class="fas fa-tag"></i> OUT</button>
                                </span>
                            </span>
                        </div>
                        <input type="hidden" name="idplat" value="PLAT1">
                        <button type="submit" class="valider"><a href="#"><i class="far fa-edit"></i></a></button>
                    </div>
                </form>

                <form action="" method="get" class="page__menu__content__card" data-category="local">
                    <div>
                        <img src="<?php echo base_url()?>assets/backoffice/img/commande/local.jpg" alt="" srcset="">
                        <h2>Kaly local</h2>
                        <p>Dolor quis accusam. Nisl lorem commodo stet lobortis diam sit nonumy rebum ut tation lorem sed.</p>
                        <div class="page__menu__content__card__info">
                            <span class="prix"> 5 000 Ar</span>
                            <span class="quantity">
                                <span class="out">
                                    <button class="vide"><i class="fas fa-tag"></i> OUT</button>
                                </span>
                            </span>
                        </div>
                        <input type="hidden" name="idplat" value="PLAT1">
                        <button type="submit" class="valider"><a href="#"><i class="far fa-edit"></i></a></button>
                    </div>
                </form>

                <form action="" method="get" class="page__menu__content__card" data-category="drinks">
                    <div>
                        <img src="<?php echo base_url()?>assets/backoffice/img/commande/drink.jpg" alt="" srcset="">
                        <h2>Coca</h2>
                        <p>Dolor quis accusam. Nisl lorem commodo stet lobortis diam sit nonumy rebum ut tation lorem sed.</p>
                        <div class="page__menu__content__card__info">
                            <span class="prix"> 5 000 Ar</span>
                            <span class="quantity">
                                <span class="out">
                                    <button class="vide"><i class="fas fa-tag"></i> OUT</button>
                                </span>
                            </span>
                        </div>
                        <input type="hidden" name="idplat" value="PLAT1">
                        <button type="submit" class="valider"><a href="#"><i class="far fa-edit"></i></a></button>
                    </div>
                </form>

                <form action="" method="get" class="page__menu__content__card" data-category="vegan">
                    <div>
                        <img src="<?php echo base_url()?>assets/backoffice/img/commande/food.jpg" alt="" srcset="">
                        <h2>Spaghetti aux fromages</h2>
                        <p>Dolor quis accusam. Nisl lorem commodo stet lobortis diam sit nonumy rebum ut tation lorem sed.</p>
                        <div class="page__menu__content__card__info">
                            <span class="prix"> 5 000 Ar</span>
                            <span class="quantity">
                                <span class="out">
                                    <button class="vide"><i class="fas fa-tag"></i> OUT</button>
                                </span>
                            </span>
                        </div>
                        <input type="hidden" name="idplat" value="PLAT1">
                        <button type="submit" class="valider"><a href="#"><i class="far fa-edit"></i></a></button>
                    </div>
                </form>

                <form action="" method="get" class="page__menu__content__card" data-category="local">
                    <div>
                        <img src="<?php echo base_url()?>assets/backoffice/img/commande/local.jpg" alt="" srcset="">
                        <h2>Kaly local</h2>
                        <p>Dolor quis accusam. Nisl lorem commodo stet lobortis diam sit nonumy rebum ut tation lorem sed.</p>
                        <div class="page__menu__content__card__info">
                            <span class="prix"> 5 000 Ar</span>
                            <span class="quantity">
                                <span class="out">
                                    <button class="vide"><i class="fas fa-tag"></i> OUT</button>
                                </span>
                            </span>
                        </div>
                        <input type="hidden" name="idplat" value="PLAT1">
                        <button type="submit" class="valider"><a href="#"><i class="far fa-edit"></i></a></button>
                    </div>
                </form>

                <form action="" method="get" class="page__menu__content__card" data-category="drinks">
                    <div>
                        <img src="<?php echo base_url()?>assets/backoffice/img/commande/drink.jpg" alt="" srcset="">
                        <h2>Coca</h2>
                        <p>Dolor quis accusam. Nisl lorem commodo stet lobortis diam sit nonumy rebum ut tation lorem sed.</p>
                        <div class="page__menu__content__card__info">
                            <span class="prix"> 5 000 Ar</span>
                            <span class="quantity">
                                <span class="out">
                                    <button class="vide"><i class="fas fa-tag"></i> OUT</button>
                                </span>
                          </span>
                        </div>
                        <input type="hidden" name="idplat" value="PLAT1">
                        <button type="submit" class="valider"><a href="#"><i class="far fa-edit"></i></a></button>
                    </div>
                </form>
                
            </section>
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

            // Appliquer la classe active sur le lien cliqué
            filterLinks.forEach((filterLink) => {
            filterLink.classList.remove('active');
            });
            link.classList.add('active');

            // Récupérer la valeur du filtre
            const filterValue = link.getAttribute('data-filter');

            // Filtrer les éléments en fonction du filtre
            const allElements = document.querySelectorAll('.page__menu__content__card');
            allElements.forEach((element) => {
            if (filterValue === 'all' || element.getAttribute('data-category') === filterValue) {
                element.style.display = 'block';
            } else {
                element.style.display = 'none';
            }
            });

            // Faire défiler jusqu'à la section filtrée
            const filteredSection = document.getElementById('filtered-section');
            filteredSection.scrollIntoView({ behavior: 'smooth' });
        });
        });
    </script>
</body>
</html>