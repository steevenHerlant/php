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

$req = $bdd->prepare('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES(:nom, :possesseur, :console, :prix, :nbre_joueurs_max, :commentaires)');

$req->execute(array(

    'nom' => $nom,

    'possesseur' => $possesseur,

    'console' => $console,

    'prix' => $prix,

    'nbre_joueurs_max' => $nbre_joueurs_max,

    'commentaires' => $commentaires

    ));


echo 'Le jeu a bien été ajouté !';
?>
```

* Modifier des données
```php
<?php
$bdd->exec('UPDATE jeux_video SET prix = 10, nbre_joueurs_max = 32 WHERE nom = \'Battlefield 1942\'');

$req = $bdd->prepare('UPDATE jeux_video SET prix = :nvprix, nbre_joueurs_max = :nv_nb_joueurs WHERE nom = :nom_jeu');
$req->execute(array(
    'nvprix' => $nvprix,
    'nv_nb_joueurs' => $nv_nb_joueurs,
    'nom_jeu' => $nom_jeu
?>
```

* Supprimer des données
Même chose que pour le reste avec DELETE

* Les erreurs en SQL
```php
<?php
$reponse = $bdd->query('SELECT nom FROM jeux_video') or die(print_r($bdd->errorInfo()));
?>
```

### Fonctions SQL
* Fonctions scalaires
** UPPER() => Mettre en majuscules
** LOWER() => Mettre en minuscules
** LENGTH() => Longueur d'une chaîne
** ROUND() => arrondir un nombre décimal

* Fonctions d'agrégat
AVG() => Donne la moyenne des champs passés en paramètre
SUM() => Donne la somme
MAX() => Retourne la valeur maximale
MIN() => Retourne la valeur minimale
COUNT() => Compte le nombre d'entrées

* GROUP BY
Permet de regrouper les données
```sql
SELECT AVG(prix) AS prix_moyen, console FROM jeux_video GROUP BY console
```

* HAVING
Permet de faire du WHERE une fois les données regroupées
```sql
SELECT AVG(prix) AS prix_moyen, console FROM jeux_video GROUP BY console HAVING prix_moyen <= 10
```

### Les Dates en SQL
* Les différents types de dates
** DATE : stocke une date au format AAAA-MM-JJ (Année-Mois-Jour) ;
** TIME : stocke un moment au format HH:MM:SS (Heures:Minutes:Secondes) ;
** DATETIME : stocke la combinaison d'une date et d'un moment de la journée au format AAAA-MM-JJ HH:MM:SS. Ce type de champ est donc plus précis ;
** TIMESTAMP : stocke le nombre de secondes passées depuis le 1er janvier 1970 à 00 h 00 min 00 s ;
** YEAR : stocke une année, soit au format AA, soit au format AAAA.

* Exemle avec DATE
```sql
SELECT pseudo, message, date FROM minichat WHERE date = '2010-04-02'
```

* Exemple avec DATETIME
```sql
SELECT pseudo, message, date FROM minichat WHERE date = '2010-04-02 15:28:22'
SELECT pseudo, message, date FROM minichat WHERE date >= '2010-04-02 15:28:22'
SELECT pseudo, message, date FROM minichat WHERE date >= '2010-04-02 00:00:00' AND date <= '2010-04-18 00:00:00'
SELECT pseudo, message, date FROM minichat WHERE date BETWEEN '2010-04-02 00:00:00' AND '2010-04-18 00:00:00'
```

* Fonctions de gestion de dates
** NOW() => Obtenir la date et l'heure actuelle (AAAA-MM-JJ HH:MM:SS)
** CURDATE() => (AAAA-MM-JJ) 
** CURTIME() => (HH:MM:SS)
** HOUR() => Récupère les heures
** MINUTE() => Récupère les minutes
** SECOND() => Récupère les secondes

## Programmation objet en php
### créer une classe
```php
<?php
class Personnage
{
	private $_force = 50; // Valeur par défaut
	private $_localisation;
	private $_experience;
	private $_degats;

	public function deplacer()
	{

	}

	public function frapper(Personnage $persoAFrapper)
	{
		$persoAFrapper->_degats += $this->_force;
	}
	public function afficherExperience()
	{
		echo $this->_experience;
	}
	public function gagnerExperience()
	{
		$this->_experience = $this->experience + 1;
	}
}
?>
```

### Créer et manipuler un objet
```php
<?php
$perso = new Personnage;
$perso->parler();
$perso2 = new Personnage;
$perso2->frapper($perso);
?>
```

### Accesseurs et mutateurs
```php
<?php
// accesseurs
public function degats()
	{
    	return $this->_degats;
  	}

// mutateurs
public function setForce($force)
  {
    if (!is_int($force)) // S'il ne s'agit pas d'un nombre entier.
    {
      trigger_error('La force d\'un personnage doit être un nombre entier', E_USER_WARNING);
      return;
    }
    if ($force > 100) // On vérifie bien qu'on ne souhaite pas assigner une valeur supérieure à 100.
    {
      trigger_error('La force d\'un personnage ne peut dépasser 100', E_USER_WARNING);
      return;
    }
    $this->_force = $force;
  }
?>
```

### Constructeurs
```php
<?php
public function __construct($force, $degats) // Constructeur demandant 2 paramètres
{
	echo 'Voici le constructeur !'; // Message s'affichant une fois que tout objet est créé.
    $this->setForce($force); // Initialisation de la force.
    $this->setDegats($degats); // Initialisation des dégâts.
    $this->_experience = 1; // Initialisation de l'expérience à 1.
}
?>
```

### Constantes de classe
```php
<?php
class Personnage
{
	const FORCE_PETITE = 20

	public function __construct($forceInitiale)
	{
		$this->setForce($forceInitiale);
	}
}

$perso = new Personnage(Personnage::FORCE_MOYENNE);
?>
```

### Méthodes Statiques
```php
<?php
class Personnage
{
	public static function parler()
  	{
    	echo 'Je vais tous vous tuer !';
  	}
}

Personnage::parler();
?>
```

### Attributs statiques
```php
<?php
class Personnage
{
	private static $_textADire = "Je vais vous tuer !";

	public static function parler()
	{
		echo self::$_textADire;
	}

}

?>
```

###Manipulation de données stockées
```php
<?php

class Personnage

{
  private $_id;
  private $_nom;
  private $_forcePerso;
  private $_degats;
  private $_niveau;
  private $_experience;
  // Liste des getters
  public function id()
  {
    return $this->_id;
  }
  public function nom()
  {
    return $this->_nom;
  }
  public function forcePerso()
  {
    return $this->_forcePerso;
  }
  public function degats()
  {
    return $this->_degats;
  }
  public function niveau()
  {
    return $this->_niveau;
  }
  public function experience()
  {
    return $this->_experience;
  }
  // Liste des setters
  public function setId($id)
  {
    // On convertit l'argument en nombre entier.
    // Si c'en était déjà un, rien ne changera.
    // Sinon, la conversion donnera le nombre 0 (à quelques exceptions près, mais rien d'important ici).
    $id = (int) $id;
    // On vérifie ensuite si ce nombre est bien strictement positif.
    if ($id > 0)
    {
      // Si c'est le cas, c'est tout bon, on assigne la valeur à l'attribut correspondant.
      $this->_id = $id;
    }
  }
  public function setNom($nom)
  {
    // On vérifie qu'il s'agit bien d'une chaîne de caractères.
    if (is_string($nom))
    {
      $this->_nom = $nom;
    }
  }
  public function setForcePerso($forcePerso)
  {
    $forcePerso = (int) $forcePerso;
    if ($forcePerso >= 1 && $forcePerso <= 100)
    {
      $this->_forcePerso = $forcePerso;
    }
  }
  public function setDegats($degats)
  {
    $degats = (int) $degats;
    if ($degats >= 0 && $degats <= 100)
    {
      $this->_degats = $degats;
    }
  }
  public function setNiveau($niveau)
  {
    $niveau = (int) $niveau;
    if ($niveau >= 1 && $niveau <= 100)
    {
      $this->_niveau = $niveau;
    }
  }
  public function setExperience($experience)
  {
    $experience = (int) $experience;
    if ($experience >= 1 && $experience <= 100)
    {
      $this->_experience = $experience;
    }
  }
}
$request = $db->query('SELECT id, nom, forcePerso, degats, niveau, experience FROM personnages');
while ($donnees = $request->fetch(PDO::FETCH_ASSOC)) // Chaque entrée sera récupérée et placée dans un array.
{
  // On passe les données (stockées dans un tableau) concernant le personnage au constructeur de la classe.
  // On admet que le constructeur de la classe appelle chaque setter pour assigner les valeurs qu'on lui a données aux attributs correspondants.
  $perso = new Personnage($donnees);
  echo $perso->nom(), ' a ', $perso->forcePerso(), ' de force, ', $perso->degats(), ' de dégâts, ', $perso->experience(), ' d\'expérience et est au niveau ', $perso->niveau();
}
?>
```