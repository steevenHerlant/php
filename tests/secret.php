<!DOCTYPE html>
<html>
    <head>
        <title>Ceci est une page de test avec des balises PHP</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h2>Page Secrète</h2>   
        <?php
        if(isset($_POST['mot_de_passe']) && $_POST['mot_de_passe'] == "kangourou")
        {
            echo "<p>Voici les mots de passe !</p>";
        }
        else
        {
            echo "<p>Mot de passe inexistant ou incorrect ! <a href=\"formulaire.php\">Retour</a></p>";
        }
        ?>
    </body>
</html>