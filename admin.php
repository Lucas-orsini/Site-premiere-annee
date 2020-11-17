    <?php 

    $bdd = new PDO ('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
    
    
    if(isset($_POST['Inscri'])){
        
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mail = htmlspecialchars($_POST['mail']);
        $mdp = sha1($_POST['mdp']);
        
    if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mdp'])) {
        

        
        $pseudolenght = strlen($pseudo);
        if($pseudolenght <= 18){
        
            
   $insertmbr = $bdd->prepare("INSERT INTO membres(pseudo, mail, mdp) VALUES(?,?,?)");
    $insertmbr->execute(array($pseudo, $mail, $mdp));
        $erreur = "Votre compte a bien été crée <a href=\"connexion.php\">Me connecter/</a>";
        }
           else {
            $erreur = "Votre pseudo dépasse les 18 caractères maximum autorisé.";
        }
            
      
        }
        
         
        else {
            $erreur = " Tous les champs doivent être complétés !";
        }
    
        
   
    }
       
    
    ?>


    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <title>inscription</title>
        <link rel="stylesheet" href="css/style5.css">
        <link rel="icon" href="images/monkey-d-luffy.jpg" />
    </head>

    <body>
        <div id="banniere">
            <h2>Inscritpion</h2>
            <br> <br> <br> <br>

            <form method="POST" action="">
                <table>
                    <tr>
                        <td>
                            <label for="pseudo"> Pseudo : </label>
                        </td>
                        <td>
                            <input type="text" placeholder="votre pseudo" name="pseudo" id="pseudo">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="mail"> Mail : </label>
                        </td>
                        <td>
                            <input type="email" placeholder="votre mail" name="mail" id="mail">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="mdp"> Mot de passe : </label>
                        </td>
                        <td>
                            <input type="password" placeholder="votre mot de passe" name="mdp" id="mdp">
                        </td>
                    </tr>
                    <tr>
                        <td>

                        </td>
                        <td>
                            <input type="submit" value="je m'inscrit" name="Inscri">
                        </td>
                    </tr>

                </table>


            </form>
            <br>
            <p> <?php 
    if(isset($erreur)){
        echo $erreur;
    }
    ?></p>
        </div>




    </body>


    </html>
