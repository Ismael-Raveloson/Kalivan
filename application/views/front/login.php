<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backoffice/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backoffice/css/bootstrap/index.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backoffice/fontawesome-5/css/all.css">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/frontoffice/img/Vert.svg" type="image/x-icon">
    <title>Kalivan</title>
</head>
<body>


    <div class="page">

        <div class="body">


            <div class="container">
                
                <div class="row">

                        <div class="col-md-7">
                            <div id="backimg">
                                <img src="<?php echo base_url(); ?>assets/frontoffice/img/login.png" class="img-responsive" alt="Responsive image">
                            </div>
                        </div>
    
                        <div class="col-md-5 ">
                            <div class="formulaire">
                                <div id="name"><h3>Sign In</h3></div>
                                    <form action="<?php echo base_url();?>Kalivan/verifLogin" method="post">
                                        <div class="inpout">

                                        
                                            <div class="input-group input-group" id="divmail">
                                                <span class="input-group-addon" id="sizing-addon3"><i class="far fa-user-circle"></i></span>        
                                                <input type="email" class="form-control" name="email" required="required" placeholder="Email" aria-describedby="sizing-addon1" id="username">
                                            </div>

                                            <div class="input-group input-group" id="divpass">
                                                <span class="input-group-addon" id="sizing-addon3"><i class="far fa-eye-slash"></i></span>        
                                                <input type="password" class="form-control" name="mdp" required="required" placeholder="Mot de passe" aria-describedby="sizing-addon1" id="password">
                                            </div>
                                        </div>

                                        <div class="btn-group btn-group" role="group" aria-label="...">
                                            <button type="button,submit" class="btn btn-default" id="btn_connect">Se connecter</button>
                                        </div>
                                    </form>    
                                        
                                


                                    <div id="error">
                                        <?php  if(isset($_GET['error'])){ ?>
                                             <p><?php echo $_GET['error']; ?></p>   
                                        <?php } ?>
                                    </div>
                                    <div id="suggestion">Or sign in with</div>

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
                                        
                                
                                    </div>

                                    <div id="sign_up">Don't have an account yet ? <a href="<?php echo base_url()?>Kalivan/inscription">Sign up now</a></div>
                            </div>
                        </div>
                </div>
            </div>




        </div>
 




    </div>

    <script src="../<?php echo base_url(); ?>assets/backoffice/js/bootstrap/vendor/jquery-2.2.4.min.js"></script>
    <script src="../<?php echo base_url(); ?>assets/backoffice/js/bootstrap/vendor/bootstrap.min.js"></script>
</body>
</html>