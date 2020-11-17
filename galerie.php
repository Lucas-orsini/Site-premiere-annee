<?php 
  $bdd = new PDO ('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');

if(!empty($_FILES)){
    $img = $_FILES['img'];
    $ext = strtolower(substr($img['name'],-3));
    $allow_ext = array('png','jpg','gif');

    if(in_array($ext,$allow_ext)){
        move_uploaded_file($img['tmp_name'],"galerieimg/".$img['name']);
    }
   
    else {
        $erreur = "Votre fichier n'est pas une image";
    }
    
  
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Galerie d'image</title>
    <link rel="stylesheet" href="css/style4.css">
    <link rel="icon" href="images/monkey-d-luffy.jpg" />
</head>

<body>
   
    <form method="POST" action="galerie.php" enctype="multipart/form-data">
        <input type="file" name="img">
        <input type="submit" value="Envoyer">
    </form>

    <?php 
    if(isset($erreur)){
        echo $erreur;
    }
    
    
    ?>

    <?php 
    
    $dos = "galerieimg";
    $dir = opendir($dos);
    while($file = readdir($dir))
    { 
        
    $allow_ext = array('png','jpg','gif');
    $ext = strtolower(substr($file,-3));
            if(in_array($ext,$allow_ext)){
        
    

            ?>
    
            <img class="test" src="galerieimg/<?php echo $file; ?>">
            <?php
    $reqimg = $bdd->prepare("SELECT * FROM gal WHERE img =?");
    $reqimg->execute(array($file));
    $imgexist = $reqimg->rowCount();
    if($imgexist === 0)
    {
        if(isset($img)) {
            
        $insertgal = $bdd->prepare("INSERT INTO gal(img) VALUES(?)");
        $insertgal->execute(array($file));
    
    }
    }


    }
            else {
        $erreur = "image déjà posté";
    }
    }
    ?>

    
    
</body>

</html>