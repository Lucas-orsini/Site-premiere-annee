<?php 



try {
    $database = new PDO(
    'mysql:host=localhost;dbname=projet',
    'root',
    ''
    );
}


catch(PDOException $e) {
    echo 'base de données indisponible' . $e;
    die;
}




?>