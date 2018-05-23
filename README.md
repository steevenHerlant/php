# php
Learn about PHP

## Install xampp

## Run xampp
```bash
/opt/lampp/lampp start
```

## Stop xampp
```bash
/opt/lampp/lampp stop
```
## Install sublime text

# tuto php openclassroom

## Ecriture de texte en php
```php
<?php echo "Ceci est du texte"; ?>
```

## Mettre des commentaires en php
```php
<?php 
//Ceci est un commentaire sur une ligne
/*Ceci est un
commentaire
sur plusieurs lignes */ 
?>
```

## Affichage des erreurs en php
### Pour connaitre l'ensemble des infos relatives à php
```php
<?php phpinfo(); ?>
```
### Retrouver la ligne Loaded Configuration File pour connaître le fichier conf 
utilisé
### Editer ce fichier et modifier les lignes error_reporting et display_errors

error_reporting=E_ALL & ~E_DEPRECATED & ~E_STRICT
display_errors=On

## Les variables en php
### Bases
```php
<?php
//initialisation
$age_du_visiteur = 17;
//affichage
echo $age_du_visiteur;
//concaténation
echo 'le visiteur a ' . $age_du_visiteur . ' ans.';
?>
```
### Calculs
```php
$nombre = 2 + 4; // $nombre prend la valeur 6
$nombre = 5 - 1; // $nombre prend la valeur 4
$nombre = 3 * 5; // $nombre prend la valeur 15
$nombre = 10 / 2; // $nombre prend la valeur 5
$nombre = 3 * 5 + 1; // $nombre prend la valeur 16
$nombre = (1 + 2) * 2; // $nombre prend la valeur 6
$nombre = 10 % 5; // $nombre prend la valeur 0 car la division tombe juste
$nombre = 10 % 3; // $nombre prend la valeur 1 car il reste 1
?>
```

## Les Conditions en php
### Structure If
```php
<?php
$autorisation_entrer = "Oui";
if ($autorisation_entrer == "Oui") // SI on a l'autorisation d'entrer
{
    // instructions à exécuter quand on est autorisé à entrer
}
elseif ($autorisation_entrer == "Non") // SINON SI on n'a pas l'autorisation d'entrer
{
    // instructions à exécuter quand on n'est pas autorisé à entrer
}
else // SINON (la variable ne contient ni Oui ni Non, on ne peut pas agir)
{
    echo "Euh, je ne connais pas ton âge, tu peux me le rappeler s'il te plaît ?";
}
?>
```
### Structure switch
```php
<?php
$note = 10;
switch ($note) // on indique sur quelle variable on travaille
{ 
    case 0: // dans le cas où $note vaut 0
        echo "Tu es vraiment un gros nul !!!";
    break;
    case 5: // dans le cas où $note vaut 5
        echo "Tu es très mauvais";
    break;
    case 7: // dans le cas où $note vaut 7
        echo "Tu es mauvais";
    break;
    case 10: // etc. etc.
        echo "Tu as pile poil la moyenne, c'est un peu juste…";
    break;
    case 12:
        echo "Tu es assez bon";
    break;
    case 16:
        echo "Tu te débrouilles très bien !";
    break;
    case 20:
        echo "Excellent travail, c'est parfait !";
    break;
    default:
        echo "Désolé, je n'ai pas de message à afficher pour cette note";
}
?>
```
### Structure Ternaire
```php
<?php
$age = 24;
$majeur = ($age >= 18) ? true : false;
?>
```

## Les Boucles en php
### Structure while
```php
<?php
while ($continuer_boucle == true)
{
    // instructions à exécuter dans la boucle
}
?>
```
### Structure for
```php
<?php
for ($nombre_de_lignes = 1; $nombre_de_lignes <= 100; $nombre_de_lignes++)
{
    echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />';
}
?>
```

## Les tableaux en php
### Les tableaux numérotés
```php
<?php
//Affectation
$prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');
//Affichage
echo $prenoms[1];
?>
```
### Les tableaux associatifs
```php
<?php
//Affectation
$coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');
//Affichage
echo $coordonnees['ville'];
?>
```
### Parcourir un tableau
* Par boucle for
```php
<?php
$prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');
for ($numero = 0; $numero < 5; $numero++)
{
    echo $prenoms[$numero] . '<br />'; // affichera $prenoms[0], $prenoms[1] etc.
}
?>
```
* Par boucle foreach
```php
<?php
$prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');
foreach($prenoms as $element)
{
    echo $element . '<br />'; // affichera $prenoms[0], $prenoms[1] etc.
}

$coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');
foreach($coordonnees as $cle => $element)
{
    echo '[' . $cle . '] vaut ' . $element . '<br />';
}
?>
```

### Afficher un tableau avec sa structure
```php
<?php

$coordonnees = array (

    'prenom' => 'François',

    'nom' => 'Dupont',

    'adresse' => '3 Rue du Paradis',

    'ville' => 'Marseille');


echo '<pre>';

print_r($coordonnees);

echo '</pre>';

?>
```
### Rerchercher dans un tableau
* Verifier si une clé existe
```php
<?php array_key_exists('cle', $array); ?>
```
* Verifier si une valeur existe
```php
<?php
$fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');
if (in_array('Myrtille', $fruits))
{
    echo 'La valeur "Myrtille" se trouve dans les fruits !';
}
if (in_array('Cerise', $fruits))
{
    echo 'La valeur "Cerise" se trouve dans les fruits !';
}
?>
```
* Récupérer la clé d'une valeur dans l'array
```php
<?php
$fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');
$position = array_search('Fraise', $fruits);
echo '"Fraise" se trouve en position ' . $position . '<br />';
$position = array_search('Banane', $fruits);
echo '"Banane" se trouve en position ' . $position;
?>
```

## Les fonctions en php
### Appeler une fonction
```php
<?php
calculCube(param1,param2);
?>
```
### Récupérer la valeur d'une fonction
```php
<?php
$volume = calculCube(4);
?>
```
### Quelques fonctions prêtes à l'emploi
* strlen => longueur d'une chaîne
```php
<?php
$phrase = 'Bonjour tout le monde ! Je suis une phrase !';
$longueur = strlen($phrase);

echo 'La phrase ci-dessous comporte ' . $longueur . ' caractères :<br />' . $phrase;
?>
```
* str_replace => rechercher et remplacer
```php
<?php
$ma_variable = str_replace('b', 'p', 'bim bam boum');
echo $ma_variable; // "pim pam poum"
?>
```
* str_shuffle => mélanger les lettres
```php
<?php
$chaine = 'Cette chaîne va être mélangée !';
$chaine = str_shuffle($chaine);

echo $chaine;
?>
```
* strtolower => écrire en minuscules (strtoupper existe aussi)
```php
<?php
$chaine = 'COMMENT CA JE CRIE TROP FORT ???';
$chaine = strtolower($chaine);

echo $chaine;
?>
```
* date => Récupérer la date

| Paramètre | Description |
| :-------: | :---------: |
| H         | Heure       |
| i         | Minute      |
| d         | Jour        |
| m         | Mois        |
| Y         | Année       |

```php
<?php

$jour = date('d');
$mois = date('m');
$annee = date('Y');
$heure = date('H');
$minute = date('i');

echo 'Bonjour ! Nous sommes le ' . $jour . '/' . $mois . '/' . $annee . 'et il est ' . $heure. ' h ' . $minute;
?>
```

### Créer ses propres fonctions
```php
<?php
//sans retour
function DireBonjour($nom)
{
    echo 'Bonjour ' . $nom . ' !<br />';
}

DireBonjour('Marie');

//avec retour
function VolumeCone($rayon, $hauteur)
{
   $volume = $rayon * $rayon * 3.14 * $hauteur * (1/3); // calcul du volume
   return $volume; // indique la valeur à renvoyer, ici le volume
}

$volume = VolumeCone(3, 1);
echo 'Le volume d\'un cône de rayon 3 et de hauteur 1 est de ' . $volume;
?>
```

## Erreurs les plus courantes en php
### parse error
* Problème de point virgule
* Problème de concaténation
* Problème d'accolade

### undefined function
* Fonction n'existe pas
* extenstion php contenant la fonction n'est pas activée

### wrong parameter count
* oublie de paramètre dans la fonction

## Erreurs plus rares en php
### headers already sent by ...
* la fonction utilisée doit être tout en haut de la page

### maximum execution time exceeded
* boucle infinie

## Inclusions en php
```php
<?php
include("menus.php");
?>
```

## Recuperer des paramètres en php
sur une url du type https://www.toto.com?nom=pascal&prenom=anthony
```php
<?php
$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
?>
```
### Il faut penser à tester les paramètres !!!
```php
<?php
if (isset($_GET['prenom']) AND isset($_GET['nom']))
{
    echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' !';
}
else
{
    echo 'Il faut renseigner un nom et un prénom !';
}
?>
```


## Variables superglobales en php
### Quelques exemples (utiliser print_r pour voir ce qu'elles contiennent)
* $_SERVER
* $_ENV
* $_SESSION
* $_COOKIE
* $_GET
* $_POST
* $_FILES

## Session cookies en php
### Les sessions
* session_start() pour démarrer une session (à faire sur chaque page pour la conserver)
* session_destroy() pour la killer. Par défaut un timeout le fait automatiquement
* stocker ce que l'on veut dans $_SESSION[]

### Les cookies
* A la différence des sessions (qui sont stockées côté serveur), les cookies sont stockés dans un fichier sur le PC client
* Création d'un cookie
```php
<?php setcookie('pseudo', 'M@teo21', time() + 365*24*3600); ?>
```
* Le cookie doit être appelé avant tout code html
* Afficher un cookie
```php
<?php echo $_COOKIE['pseudo']; ?>
```
* Pour modifier un cookie, il faut refaire appel a setcookie

## Lire et écrire dans un fichier en php
### Pour pouvoir lire/écrire dans un fichier, il faut avoir les droits correspondants
### Ouverture du fichier (Penser à le refermer après)
```php
$monfichier = fopen('compteur.txt', 'r+');
fclose($monfichier);
```

### Les différents modes de fopen

| Mode | Explication                             |
| :--: | :-------------------------------------: |
| r    | lecture seule                           |
| r+   | lecture + ecriture                      |
| a    | ecriture seule + création si besoin     |
| a+   | lecture + ecriture + création si besoin |


### Lire dans un fichier
* fgetc => caractère par caractère
* fgets => ligne par ligne

```php
<?php
// 1 : on ouvre le fichier
$monfichier = fopen('compteur.txt', 'r+');
 // 2 : on lit la première ligne du fichier
$ligne = fgets($monfichier);
 // 3 : quand on a fini de l'utiliser, on ferme le fichier
fclose($monfichier);
?>
```

### Ecrire dans un fichier
* fputs => ecrire à partir de la position du curseur
* fseek => replacer le curseur

```php
<?php
$monfichier = fopen('compteur.txt', 'r+');
$pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
fseek($monfichier, 0); // On remet le curseur au début du fichier
fputs($monfichier, $pages_vues); // On écrit le nouveau nombre de pages vues
fclose($monfichier);
echo '<p>Cette page a été vue ' . $pages_vues . ' fois !</p>';
?>
```

## SGBD et php
### Connexion à la base
* Penser à activer pdo
```php
<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
```

### Récupérer les données
```php
$reponse = $bdd->query('SELECT * FROM table');

while ($donnees = $reponse->fetch())
{
?>
    <p>
    <strong>Jeu</strong> : <?php echo $donnees['champs1']; ?><br />
    Le possesseur de ce jeu est : <?php echo $donnees['champs2']; ?>, et il le vend à <?php echo $donnees['champ2']; ?> euros !<br />
    Ce jeu fonctionne sur <?php echo $donnees['champs3']; ?> et on peut y jouer à <?php echo $donnees['champs4']; ?> au maximum<br />
    <?php echo $donnees['champs5']; ?> a laissé ces commentaires sur <?php echo $donnees['champs2']; ?> : <em><?php echo $donnees['champs4']; ?></em>
   </p>
<?php
}
$reponse->closeCursor();
```

### Construction de requêtes en fonction de variables
```php
<?php
$req = $bdd->prepare('SELECT nom FROM jeux_video WHERE possesseur = ? AND prix <= ?');
$req->execute(array($_GET['possesseur'], $_GET['prix_max']));

//avec des marqueurs associatifs
$req = $bdd->prepare('SELECT nom, prix FROM jeux_video WHERE possesseur = :possesseur AND prix <= :prixmax');
$req->execute(array('possesseur' => $_GET['possesseur'], 'prixmax' => $_GET['prix_max']));
```

### Avoir les erreurs pdo plus clairement
```php
<?php
$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
?>
```

### Ecrire des données
* Ajouter des données
```php
<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
// On ajoute une entrée dans la table jeux_video
$bdd->exec('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES(\'Battlefield 1942\', \'Patrick\', \'PC\', 45, 50, \'2nde guerre mondiale\')');
echo 'Le jeu a bien été ajouté !';
?>
```