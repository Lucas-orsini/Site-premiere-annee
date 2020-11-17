    <?php 
session_start();
    $bdd = new PDO ('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');

if(isset($_POST['formconnexion']))
{
    $mailconnect = htmlspecialchars($_POST['mailconnect']);
    $mdpconnect = sha1($_POST['mdpconnect']);
    if(!empty($mailconnect) AND !empty($mdpconnect))
    {
        $requser = $bdd->prepare("SELECT * FROM membres WHERE mail =? AND mdp = ?");
        $requser->execute(array($mailconnect, $mdpconnect));
        $userexist = $requser->rowCount();
        if($userexist == 1 ) 
        {
            $userinfo = $requser->fetch();
            $_SESSION['id'] = $userinfo['id'];
            $_SESSION['pseudo'] = $userinfo['pseudo'];
            $_SESSION['mail'] = $userinfo['mail'];
            header("Location: profil.php?id=".$_SESSION['id']);
            
            
        }
        else {
            $erreur ="Mauvais mail ou mot de passe";
        }
    }
    else {
        $erreur ='tous les champs doivent etre complété';
    }
}
    ?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <title>Connexion</title>
        <link rel="stylesheet" href="css/style5.css">
        <link rel="icon" href="images/monkey-d-luffy.jpg" />
    </head>

    <body>
        <div id="banniere">
            <h2>Connexion</h2>
            <br> <br>

            <form method="POST" action="">
                <table>
                    <tr>
                        <input type="email" name="mailconnect" placeholder="Mail">
                    </tr>
                    <tr>
                        <input type="password" name="mdpconnect" placeholder="Mot de passe">
                    </tr>
                    <tr>
                        <input type="submit" name="formconnexion" value="Se connecter">
                    </tr>
                </table>
            </form>
            <br>
            <a href="admin.php">Pas de compte s'inscire ici !</a>
            <br>
            <p><?php 
    if(isset($erreur)){
        echo $erreur;
    }
    ?>
            </p>
        </div>




    </body>


    </html>
