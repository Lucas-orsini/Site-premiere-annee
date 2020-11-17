<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Articles</title>
    <link rel="stylesheet" href="css/style7.css">
</head>
<body>
            <?php 
        
        $request = $database->prepare(
        "SELECT * FROM blog ORDER BY date DESC"
        );
        
        $request ->execute();
        
        $blog = $request->fetchAll(PDO::FETCH_ASSOC);
;
        ?>
        
        <?php 
    foreach($blog as $valeur){ ?>
            <div class="single">
                <h1><?php echo $valeur['titre']; ?></h1>
                <p><?php echo $valeur['texte']; ?></p>
                <img src="articleimg/<?= $valeur["img"] ?>">
                <br>
                <hr>
            </div>
        <?php } ?>

</body>
</html>