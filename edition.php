    <?php 
session_start();
    $bdd = new PDO ('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
if(isset($_SESSION['id'])){
 
    $requser = $bdd->prepare("SELECT * FROM membres WHERE id=?");
    $requser->execute(array($_SESSION['id']));
    $user = $requser->fetch();
    
    if(isset($_POST['newpseudo']) AND !empty ($_POST['newpseudo']) AND $_POST['newpseudo'] != $user['pseudo'])
    {
        $newpseudo = htmlspecialchars($_POST['newpseudo']);
        $insertpseudo = $bdd->prepare("UPDATE membres SET pseudo = ? WHERE id= ?");
        $insertpseudo->execute(array($newpseudo, $_SESSION['id']));
        header('Location: profil.php?id='.$_SESSION['id']);
    }
    
        if(isset($_POST['newmail']) AND !empty ($_POST['newmail']) AND $_POST['newmail'] != $user['mail'])
    {
        $newmail = htmlspecialchars($_POST['newmail']);
        $insertmail = $bdd->prepare("UPDATE membres SET mail = ? WHERE id= ?");
        $insertmail->execute(array($newmail, $_SESSION['id']));
        header('Location: profil.php?id='.$_SESSION['id']);
    }
        if(isset($_POST['newmdp']) AND !empty ($_POST['newmdp']))
    {
        $newmdp = sha1($_POST['newmdp']);
        $insertmdp = $bdd->prepare("UPDATE membres SET mdp = ? WHERE id= ?");
        $insertmdp->execute(array($newmdp, $_SESSION['id']));
        header('Location: profil.php?id='.$_SESSION['id']);
    }




    ?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <title> Edition de mon profil </title>
        <link rel="stylesheet" href="css/style5.css">
        <link rel="icon" href="images/monkey-d-luffy.jpg" />
    </head>

    <body>
        <div id="banniere">
            <h2>Edition de mon profil</h2>
            <table>
                <form method="POST" action="">
                    <tr>
                        <td>
                            <label>Pseudo :</label>
                        </td>
                        <td>
                            <input type="text" name="newpseudo" placeholder="nouveau pseudo" value="<?php echo $user['pseudo']; ?>">
                        </td>
                    </tr>
                    <br> <br>
                    <tr>
                        <td>
                            <label>Mail :</label>
                        </td>
                        <td>
                            <input type="email" name="newmail" placeholder="nouveau mail" value="<?php echo $user['mail']; ?>">
                           
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Mot de passe :</label>
                        </td>
                        <td>
                            <input type="password" name="newmdp" placeholder="nouveau mot de passe">
                        </td>
                    </tr>
                    <br> <br>
                    <tr>
                        <td>
                        </td>
                        <td>
                            <input type="submit" value="Valider la modification">
                            <br> <br>
                        </td>
                    </tr>
                </form>
            </table>
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
    header("location : connexion.php");
}
?>
