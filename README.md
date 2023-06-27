# Projet site web pour QSA Conseil

## Description

Ce projet a pour but de créer une application web pour simplifier ainsi que regrouper la façon de reception des analyses

### L'équipe 

- Killian PORTIER

## Les technologies utilisées

### Pour le front-end

- HTML/CSS
- Twig
- Javascript
- Bootstrap

### Pour le back-end

- PHP
- Symfony 6

## Lancer le projet

### Prérequis

1. Vérifier si ``composer`` est installé sur votre machine
2. Vérifier si ``yarn`` et ``node`` sont installés sur votre machine

### Installer le projet

1. Cloner le répertoire
2. Lancer la commande `composer install`
3. Lancer la commande `yarn install`
4. Lancer la commande `yarn encore dev` pour construire le style
5. Créer un fichier ``.env.local``
6. Copier le contenu du ``.env`` vers ``.env.local``
7. Configurer la variable DATABASE_URL
8. Configurer la variable MAILER_DSN
9. Créer votre base de données avec php : `bin/console doctrine:database:create`
10. Lancer les migrations pour obtenir les champs de la base de données : `bin/console doctrine:migrations:migrate`
11. Lancer les "fixtures" pour avoir un jeu de données : `bin/console doctrine:fixtures:load`


### Manipuler

1. Lancer la commande ``symfony server:start`` pour lancer votre server php en local
2. Lancer la commande ``yarn run dev --watch`` pour lancer webpack encore
3. Connectez-vous, grâce aux jeux de données faits par les " fixtures " vous pouvez piocher un utilisateur de votre base de données