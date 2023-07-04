<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontoffice/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontoffice/css/bootstrap/inscription.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontoffice/fontawesome-5/css/all.css">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/frontoffice/img/logo.png" type="image/x-icon">
</head>
<body>
    

    <div class="page">

        <div class="body">

            <div class="container">

                <div class="row">

                    <div class="col-md-5">
                            <div class="formulaire">
                                <div id="name"><h3>Sign Up</h3></div>
                                                <form action="<?php echo base_url(); ?>Kalivan/inscriptionUtil" method="post">
                                                    <div class="inpout">
                            
                                                        <div class="input-group input-group" id="divmail">
                                                            <span class="input-group-addon" id="sizing-addon3"><i class="fab fa-google"></i></span>
                                                            <input type="email" class="form-control" name="email" required="required" placeholder="Email" aria-describedby="sizing-addon" id="email">
                                                        </div>


                                                        <div class="input-group input-group" id="divname">
                                                            <span class="input-group-addon" id="sizing-addon3"><i class="far fa-user-circle"></i></span>
                                                            <input type="text" class="form-control" name="nom" required="required" placeholder="Nom" aria-describedby="sizing-addon" id="username">
                                                        </div>

                                                        <div class="input-group input-group" id="divname">
                                                            <span class="input-group-addon" id="sizing-addon3"><i class="far fa-user-circle"></i></span>
                                                            <input type="text" class="form-control" name="prenom" required="required" placeholder="Prenom" aria-describedby="sizing-addon" id="username">
                                                        </div>

                                                        <div class="input-group input-group" id="divdaty">
                                                            <span class="input-group-addon" id="sizing-addon3"><i class="fas fa-phone"></i></span>
                                                            <input type="text" class="form-control" name="num" required="required" placeholder="Numero de telephone" aria-describedby="sizing-addon" id="daty">
                                                        </div>

                                                        <div class="input-group input-group" id="divmdp">
                                                            <span class="input-group-addon" id="sizing-addon3"><i class="far fa-eye-slash"></i></span>
                                                            <input type="password" class="form-control" name="mdp" required="required" placeholder="Mot de passe" aria-describedby="sizing-addon" id="motdepasse">
                                                        </div>

                                                    </div>
                                                    <div class="btn-group btn-group" role="group" aria-label="...">
                                                        <button type="button,submit" class="btn btn-default" id="btn_connect">S'inscrire</button>
                                                    </div>
                                                </form>

                                                <div id="suggestion">Or sign up with</div>

                                                <div id="many_btn">

                                                    <div class="btn-group btn-group">
                                                        <div class="btn-group btn-group" role="group" aria-label="...">
                                                            <button type="button" class="btn btn-default" id="btn_instagram"><i class="fab fa-instagram"></i><span class="icon_logo">Instagram</span></button>
                                                        </div>
                                                    </div>

                                                    <div class="btn-group btn-group">
                                                        <div class="btn-group btn-group" role="group" aria-label="...">
                                                            <button type="button" class="btn btn-default" id="btn_facebook"><i class="fab fa-facebook-f"></i><span class="icon_logo">Facebook</span></button>
                                                        </div>
                                                    </div>

                                                    <div class="btn-group btn-group">
                                                        <div class="btn-group btn-group" role="group" aria-label="...">
                                                            <button type="button" class="btn btn-default" id="btn_twitter"><i class="fab fa-twitter"></i><span class="icon_logo">Twitter</span></button>
                                                        </div>
                                                    </div>


                                                    <div id="sign_up">Alreday have an account ? <a href="<?php echo base_url()?>Kalivan/sign">Sign in now</a></div>
                                                </div>
                            </div>
                    </div>


                    <div class="col-md-7">
                            <div id="backimg">
                                <img src="<?php echo base_url(); ?>assets/frontoffice/img/login.png" class="img-responsive" alt="Responsive image">
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.css"></script>
</body>
</html>