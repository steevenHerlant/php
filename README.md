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

## tuto php openclassroom

### Ecriture de texte en php
```php
<?php echo "Ceci est du texte"; ?>
```

### Mettre des commentaires en php
```php
<?php 
//Ceci est un commentaire sur une ligne
/*Ceci est un
commentaire
sur plusieurs lignes */ 
?>
```

### Affichage des erreurs en php
* Pour connaitre l'ensemble des infos relatives à php
```php
<?php phpinfo(); ?>
```

* Retrouver la ligne Loaded Configuration File pour connaître le fichier conf 
utilisé

* Editer ce fichier et modifier les lignes error_reporting et display_errors

error_reporting=E_ALL & ~E_DEPRECATED & ~E_STRICT
display_errors=On

### Les variables en php
* Bases
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
* Calculs
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

### Les Conditions en php
* Structure If
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

* Structure switch
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

* Structure Ternaire
```php
<?php
$age = 24;
$majeur = ($age >= 18) ? true : false;
?>
```

### Les Boucles en php
* Structure while
```php
<?php
while ($continuer_boucle == true)
{
    // instructions à exécuter dans la boucle
}
?>
```
* Structure for
```php
<?php
for ($nombre_de_lignes = 1; $nombre_de_lignes <= 100; $nombre_de_lignes++)
{
    echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />';
}
?>
```

### Les tableaux en php
* Les tableaux numérotés
```php
<?php
//Affectation
$prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');
//Affichage
echo $prenoms[1];
?>
```

* Les tableaux associatifs
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

* Parcourir un tableau
** Par boucle for
```php
<?php
$prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');
for ($numero = 0; $numero < 5; $numero++)
{
    echo $prenoms[$numero] . '<br />'; // affichera $prenoms[0], $prenoms[1] etc.
}
?>
```

** Par boucle foreach
```php
<?php
$prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');
foreach($prenoms as $element)
{
    echo $element . '<br />'; // affichera $prenoms[0], $prenoms[1] etc.
}
?>
```