<?php include "connect.php" ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="Keywords" content="motclé1 motclé2">
    <meta name="description" content="Ma description">
    <meta name="author" content="Orsini Lucas">
    <link rel="stylesheet" href="css/style3.css">
    <script src="https://kit.fontawesome.com/9e43f81354.js" crossorigin="anonymous"></script>
    <title> Mon formulaire </title>
</head>

<body>
    <div id="formulaire">

        <h2 id="formu"> CONTACTEZ MOI </h2>
        <hr>
        <form action="index3.php" method="POST">
            <label for="nom" class="verifNom"> Nom</label>
            <input type="text" name="nom" id="nom" placeholder="Michel" required="required">

            <br><br>

            <label for="tel" class="verifTel"> Téléphone </label>
            <input type="tel" name="Tel" id="tel" placeholder="06XXXXXXXX" required="required">

            <br><br>

            <label for="email" class="verifEmail"> Email </label>
            <input type="email" name="Email" id="email" placeholder="michel.du@gmail.fr"required="required" >

            <br><br>

            <label for="msg"> Message </label>
            <input type="text" name="msg" id="msg" placeholder="Ecrivez-moi">
            
            <br><br>
            <button id="button" type="submit" class="sub" onclick="test()">Envoyer</button>
        </form>
        <?php 
        
        
        if(isset($_POST['nom'])) {
            
            $donnees =[
                'nom' => $_POST['nom'],
                'Tel' => $_POST['Tel'],
                'Email' => $_POST['Email'],
                'msg' => $_POST['msg']
            
            ];
            
            $request = $database -> prepare(
            "INSERT INTO name (nom , Tel , Email , msg) VALUES (:nom , :Tel , :Email , :msg)"
            );
           
            $ajout = $request->execute($donnees);

        
        }
        ?>
    </div>
    <footer id="copyright">
        <!-- mon footer -->

        <?php include 'répétitionDecode/footer.php'; ?>

    </footer>
    <!-- lier les fichiers jquery, tween et monscript ici -->
    <?php include 'répétitionDecode/script.php'?>
</body>
</html>