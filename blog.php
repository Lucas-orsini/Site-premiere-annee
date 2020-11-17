<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width initiale-scale=1.0">
    <title>Article</title>
    
    <link rel="icon" href="images/monkey-d-luffy.jpg" />
     <!--include libraries(jQuery, bootstrap) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <link rel="stylesheet" href="css/style5.css">
</head>

<body>
    <section>

        <div id="banniere">
            <h2> Crée ton article </h2>
            <table>
                <form action="blog.php?action=test" method="POST" enctype="multipart/form-data">
                    <tr>
                        <td>
                            <label for="titre">Mon titre :</label>
                        </td>
                        <br>
                        <td>
                            <input type="text" name="titre" placeholder="Ton titre" required="required">
                        </td>
                    </tr>
                    <br>
                    <br>
                    <tr>
                        <td>
                            <label for="texte">Mon texte :</label>
                            <br>
                        </td>
                        <td>
                            <textarea id="summernote" type="text" name="texte" placeholder="Ton message" required="required"></textarea>
                            <br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="img">Mettre une image :</label>
                            <br>
                        </td>
                        <td>
                            <input type="file" name="img">
                            <br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                        </td>
                        <td>
                            <button type="submit">Envoyer !</button>
                        </td>
                    </tr>
                </form>
            </table>
                    
    
            <?php
            if(isset($_GET["action"])) {
                if($_GET["action"] == "test") {
                $bdd = new PDO("mysql:host=localhost;dbname=projet;charset=utf8", "root", "");
                $requete = $bdd->prepare("INSERT INTO blog(titre, texte, img)
                VALUES(?,?,?);");

                
                $image = $_FILES['img']['name'];     
                $allowed = array('jpg', 'jpeg', 'png', 'pdf');
                $fileSize = $_FILES['img']['size'];
                $fileError = $_FILES['img']['error'];
                $fileType = $_FILES['img']['type'];
                $fileTmpName = $_FILES['img']['tmp_name'];
                $file = $_FILES['img'];
                $fileName = $_FILES['img']['name'];
                $fileExt = explode('.', $fileName);
                $fileActualExt = strtolower(end($fileExt));
                $allowed = array('jpg', 'jpeg', 'png');

                if(in_array($fileActualExt, $allowed))   {
                    if($fileError === 0)    {
                        if($fileSize < 1000000){
                            $fileDestination = 'articleimg/'.$fileName;
                            move_uploaded_file($fileTmpName, $fileDestination);
                            
                           }
                        else{
                            echo "fichier trop volumineux";
                            }
                    }else{
                        echo "there was an error uploading your file";
                    }
                }else{
                    echo "You cannot upload files of this type";
                }

                $requete->execute(array($_POST["titre"], $_POST["texte"], $fileName));
                    
                
                

                }

            }
        ?>
         
        
        </div>




    </section>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });

    </script>
</body>

</html>
