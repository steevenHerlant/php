<!DOCTYPE html>
<html>
    <head>
        <title>Ceci est une page de test avec des balises PHP</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h2>Page de Formulaire</h2>   
        <form method="post" action="minichat.php">
            <label>Pseudo : </label><input type="text" name="pseudo">
            <label>Message : </label><input type="text" name="commentaire">
            <input type="submit" name="valider">
        </form>


        <?php
            //Enregistrement du message s'il existe
            if(isset($_POST['pseudo']) && isset($_POST['commentaire']))
            {
                try
                {
                    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
                }
                catch(Exception $e)
                {
                        die('Erreur : '.$e->getMessage());
                }
                // On ajoute l'entrée
                $req = $bdd->prepare('INSERT INTO miniChat(pseudo, commentaire) VALUES(:pseudo,:commentaire)');

                $req->execute(array(
                    'pseudo' => $_POST['pseudo'],
                    'commentaire' => $_POST['commentaire'],
                    ));
                echo '<p>Nouveau Message enregistré !</p>';
            }
            elseif (isset($_POST['pseuo']) || isset($_POST['commentaire'])) 
            {
                echo "<p>Il faut le pseudo ET le message !!!</p>";
            }

            //Affichage du chat
            $reponse = $bdd->query('SELECT * FROM miniChat');

            while ($donnees = $reponse->fetch())
            {
            ?>
                <p><strong><?php echo $donnees['pseudo']; ?> : </strong> <?php echo $donnees['commentaire']; ?></p>
            <?php
            }
            $reponse->closeCursor();
        ?>
    </body>
</html>