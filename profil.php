    <?php 
session_start();
    $bdd = new PDO ('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
if(isset($_GET['id']) AND $_GET['id'] > 0){
    $getid = intval($_GET['id']);
    $requser =$bdd->prepare("SELECT * FROM membres WHERE id = ?");
    $requser->execute(array($getid));
    $userinfo =$requser->fetch();
    


    ?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <title>Profil</title>
        <link rel="stylesheet" href="css/style6.css">
        <link rel="icon" href="images/monkey-d-luffy.jpg" />
    </head>

    <body>
        <div id="banniere">
            <h2>Profil de <?php echo $userinfo['pseudo']; ?></h2>
            <br> <br>
            <p class="profil">Pseudo = <?php echo $userinfo['pseudo']; ?></p>
            <br>
            <p class="profil">Mail = <?php echo $userinfo['mail']; ?></p>
            <br>
            <br>

            <a href="edition.php">Editer mon profil</a>
            <a href="blog.php"> Blog</a>
            <a href="galerie.php"> Galerie d'image</a>
            <a href="deconnexion.php"> déconnecter</a>
        </div>


        <?php 
    if(isset($erreur)){
        echo $erreur;
    }
    ?>

    </body>


    </html>
    <?php 

}
else {
    
}
?>
