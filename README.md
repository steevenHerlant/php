# Tuto Symfony
## Télécharger Symfony 
* https://symfony.com/installer

## Déplacer symfony.phar dans le répertoire web

## Créer un nouveau Projet
```bash
php symfony.phar new Symfony 3.3.2
```
* Vérifier l'installation sur http://localhost/symfony/Symfony/web/app_dev.php

## Architecture des fichiers
* /app
Contient tout ce qui concerne le site sauf le code (fichiers de configuration)

* /bin
Contient les executables 

* /src
Contient le code source

* /tests
Contients les tests de l'application

* /var
Contient les logs, le cache... Géré par symfony

* /vendor
contient les bibliothèques externes à l'application

/web
Contient les fichiers pour les visiteurs (JS, CSS, images) + contrôleur frontal

## Le contrôleur frontal
Fichier par lequel passe toutes les pages
* app.php => Contrôleur frontal pour production
* app_dev.php => Contrôleur frontal pour dev

## Créer un bundle
php bin/console generate:bundle