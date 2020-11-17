
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta name="Keywords" content="Luffy One-piece">
    <meta name="description" content="Site sur monkey D Luffy">
    <meta name="author" content="Orsini Lucas">
    <meta charset="utf-8">
    <title>Monkey D Luffy</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,600,700,900" rel="stylesheet">

    <link rel="icon" href="images/monkey-d-luffy.jpg" />
</head>

<body>

    <header>

        <!-- début menu -->
        <nav>
            <ul class="navMenu">
                <li><a href="#banniere">Accueil</a></li>
                <li><a href="#espace">Slideshow</a></li>
                <li><a href="#troisiemeDiv">Equipage</a></li>
                <li><a href="#copyright">Copyright</a></li>
                <li><a href="index2.php">Attaques</a></li>
                <li><a href="index3.php" target="_BLANK">Contact</a></li>
                <li><a href="index4.php" target="_BLANK">Articles</a></li>
                <li><a href="connexion.php" target="_BLANK">Connexion</a></li>

            </ul>

            <p class="fermeBouton"> X </p>

        </nav>

        <div class="burgerIcone">
            <div class="burgerLigne"></div>
            <div class="burgerLigne"></div>
            <div class="burgerLigne"></div>
        </div>
        <!-- fin menu -->
    </header>
    <!-- fin bouton -->


    <section id="banniere">
        <!-- premiere partie -->
        <img class="logo" src="images/onepieceLogo.png" alt="logo one piece">
        <h2> Monkey D Luffy </h2>
        <a href="#" class="enSavoirPlus">En savoir plus</a>


        <div id="description">
            <p>Luffy est facilement reconnaissable à son chapeau de paille, un chapeau qui lui a été donné par un pirate nommé Shanks « le roux », son idole depuis son enfance. Ce dernier s'est fait arracher le bras gauche en sauvant Luffy. Il est aussi reconnaissable par la cicatrice sous l'œil gauche, qui fait penser à son grand-père Garp, et qu'il s'est lui-même infligé pour prouver sa bravoure à Shanks et son équipage. Luffy cherche à devenir le roi des pirates en affrontant de multiples adversaires durant son aventure tout en créant son propre équipage. </p>

            <!--fin  premiere partie -->
        </div>



    </section>
    <!-- slideshow partie -->
    <div id="espace">
        <h2> Slide show </h2>
        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <img src="images/Luffy-wano.jpg">
                <div class="text">Luffy Wano</div>
            </div>

            <div class="mySlides fade taille">
                <img src="images/luffyvsdoffy.jpg">
                <div class="text">LuffyvsDoffy</div>
            </div>

            <div class="mySlides fade">
                <img src="images/Monkey_D._Luffy's_Current_Wanted_Poster.png">
              
            </div>


        </div>
        <br>

        <br>
        <!--fin  slideshow -->
    </div>



    <div id="troisiemeDiv">
        <!-- troiseme partie -->
        <h2> Equipage </h2>
        <img src="images/equipage.png" class="responsive" alt="equipage">
    </div>
    <!--fin  troisieme partie -->


    <footer id="copyright">
        <!-- mon footer -->
        <?php include 'répétitionDecode/footer.php'; ?>

    </footer>
    <!-- fin mon footer -->

    <!-- lier les fichiers jquery, tween et monscript ici -->
 <?php include 'répétitionDecode/script.php'; ?>

</body>

</html>
