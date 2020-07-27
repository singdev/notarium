<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>Notarium</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="description" content="Notre site web Notarium, aide les notaires qui veulent accroitre leur valeur ajoutée en atteignant un large public et en modernisant leurs services à offrir aux entreprises et aux particuliers des services en ligne.">
    <meta name="author" content="Daddy 2lb, Gabriella, Sady, Sabrina et l'equipe Notarium">



    <!-- Site Icons -->
    <link rel="icon" type="images/png" href="images/logo Notarium Modifier 2.png" />
    <link rel="apple-touch-icon" href="#" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
            <img src="images/loader.gif" alt="lecture" />
        </div>
    </div>
    <!-- end loader -->
    <!-- END LOADER -->

       <!-- Start header -->
    <header class="top-header">
        <div class="header_top">
            
            <div class="container">
                <div class="row">
                    <div class="logo_section">
                        <a class="navbar-brand" href="index.html"><img width="60%" height="110%" src="images/logo.png" alt="image"></a>
                    </div>
                    <div class="site_information">
                        <ul>
                            <li><a href="mailto:exchang@gmail.com"><img src="images/mail_icon.png" alt="#" />notarium.gag@gmail.com</a></li>
                            <li><a href="tel:exchang@gmail.com"><img src="images/phone_icon.png" alt="#" />+241 62 93 15 44</a></li>
                            <li><a class="join_bt" href="#">Rejoingnez-nous</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        
        </div>
        <div class="header_bottom">
          <div class="container">
            <div class="col-sm-12">
                <div class="menu_orange_section" style="background: #042b4a;">
                   <nav class="navbar header-nav navbar-expand-lg"> 
                     <div class="menu_section">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link" href="index.php">Accueil</a></li>
                        <li><a class="nav-link" href="notaires_du_réseau.php">Les notaires du réseau</a></li>
                        <li><a class="nav-link" href="#">Les partenaires</a></li>
                        <li><a class="nav-link active" href="login.php">Connexion</a></li>
                                        
                    </ul>
                </div>
                     </div>
                 </nav>
                 
                </div>
            </div>
          </div>
        </div>
        
    </header>
    <!-- End header -->

    <!-- Start Banner -->
    <div class="section inner_page_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title">
                        <h3>Créer un compte</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->
    
    <!-- section -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 layout_padding">
                    <div class="full text_align_right_img">
                        <div class="heading_main text_align_left">
                           <h2>Vous avez déjà un compte ? <a href="login.php"><span class="theme_color">Connectez-vous</span></a></h2>    
                        </div>
                    </div>
                    <div class="full paddding_left_15">
                       
                    <?php
                    require('includes/config.php');
                    if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password'])){
                        // récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
                        $username = stripslashes($_REQUEST['username']);
                        $username = mysqli_real_escape_string($conn, $username); 
                        // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
                        $email = stripslashes($_REQUEST['email']);
                        $email = mysqli_real_escape_string($conn, $email);
                        // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
                        $password = stripslashes($_REQUEST['password']);
                        $password = mysqli_real_escape_string($conn, $password);
                        //requéte SQL + mot de passe crypté
                        $query = "INSERT into `users` (username, email, password)
                                  VALUES ('$username', '$email', '".hash('sha256', $password)."')";
                        // Exécute la requête sur la base de données
                        $res = mysqli_query($conn, $query);
                        if($res){
                           echo "<div class='sucess'>
                                 <h3>Vous êtes inscrit avec succès.</h3>
                                 <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
                                 </div>";
                        }
                    }else{
                    ?>
                    <form class="" action="registration/index.php" method="post">
                        <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur" required />
                        <input type="text" class="box-input" name="email" placeholder="Email" required />
                        <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />
                        <input type="password" class="box-input" name="repeatpassword" placeholder="Confirmez votre mot de passe" required />
                        <input type="submit" name="submit" value="S'inscrire" class="box-button" />
                        <p class="box-register">Déjà inscrit? <a href="login.php">Connectez-vous ici</a></p>
                    </form>
                      
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="full paddding_left_15">
                        <img src="images/contact_bg.png" alt="#" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
   
  <!-- Start Footer -->
    <footer class="footer-box">
        <div class="container">
            <div class="row">
               <div class="col-md-12 white_fonts">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="full">
                                <img class="img-responsive" src="images/footer_logo.png" alt="#" />
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="full">
                                <h3>Publications</h3>
                            </div>
                            <div class="full">
                                <ul class="menu_footer">
                                    <li><a href="home.html">> Accueil</a></li>
                                    <li><a href="about.html">> Procédure</a></li>
                                    <li><a href="exchange.html">> Notaires du réseau</a></li>
                                    <li><a href="services.html">> Partenaires</a></li>
                                    <li><a href="new.html">> Domaines d'intervation des notaires</a></li>
                                    <li><a href="contact.html">> Connexion</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="full">
                                <div class="footer_blog full white_fonts">
                             <h3>Newsletter</h3>
                             <p>Lettre d'information envoyée périodiquement par mail.</p>
                             <div class="newsletter_form">
                                <form action="index.html">
                                   <input type="email" placeholder="Votre mail" name="#" required="">
                                   <button>Soumettre</button>
                                </form>
                             </div>
                         </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="full">
                                <div class="footer_blog full white_fonts">
                             <h3>Nous contacter </h3>
                             <ul class="full">
                               <li><img src="images/i5.png"><span>Libreville / SING<br>Centre ville</span></li>
                               <li><img src="images/i6.png"><a href="#">notarium.ga@gmail.com</a></li>
                               <li><img src="images/i7.png"><span>+241 62 93 15 44</span></li>
                             </ul>
                         </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </div>
    </footer>
    <!-- End Footer -->

  <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="crp">© Copyrights 2019 Notarium</p>
                </div>
            </div>
        </div>
    </div>

    <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script>
    <script src="js/slider-index.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/custom.js"></script>
<?php } ?>	
</body>
</html>