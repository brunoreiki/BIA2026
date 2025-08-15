# BIA CAEA

Projet thèse BIA 2026

## Droits sur les dossiers

chown -R root:www-data /var/www/html/bia2026/bia-caea
chown -R root:www-data /var/www/html/bia2026/moodledata

### Dans le dossier de Moodle (le code)

find /var/www/html/bia2026/bia-caea -type f -exec chmod 644 {} \;
find /var/www/html/bia2026/bia-caea -type d -exec chmod 755 {} \;

### Dans le dossier de Moodledata (le code)

find /var/www/html/bia2026/moodledata-type f -exec chmod 664 {} \;
find /var/www/html/bia2026/moodledata -type d -exec chmod 775 {} \;

php /var/www/html/bia2026/bia-caea/admin/cli/purge_caches.php



# GIT BIA SSH 

ssh flashcul@ssh.cluster013.hosting.ovh.net
emriHy22o

## Nouvelle BDD sur ovh

mysql -h flashculbia2026.mysql.db -u flashculbia2026 -p flashculbia2026 < flashculture_2025-08-14_13h26m57s.sql 


flashculbia2026
flashculbia2026
flashculbia2026.mysql.db
emriHy22o

## Installation de la base de données

mysql -u admin -p flashculture < /var/www/html/moodlesql/flashculture.sql

## Thème

Stream, move, adaptable, almond

## A faire 

Mettre activités dans tous les cours
https
Statistiques de la plateforme
Contacter Boost Magnific
Contacter Astor
Comité scientitifique de la recherche
Courrier au rectorat
Faire un document de présentation pour le rectorat pour les proviseurs

Montpellier
Adresse : Rectorat de l’Académie de Montpellier, 31 rue de l’Université, CS 39004, 34064 Montpellier Cedex 2
Téléphone : 04 67 91 47 00

Objet : Contact pour webmaster des vidéos YouTube de l’Académie de Montpellier
Bonjour,

Je cherche à entrer en contact avec la personne en charge de la chaîne YouTube "Académie de Montpellier Vidéos". Pouvez-vous m’indiquer le service ou l’adresse email appropriés ?

Merci par avance pour votre aide,
Cordialement,
[Votre nom / fonction]

## Configuration du cron

php /var/www/html/bia2026/bia-caea/admin/cli/cron.php

crontab -e

*/5 * * * * /usr/bin/php /var/www/html/bia2026/bia-caea/admin/cli/cron.php >/dev/null 2>&1


## Installation de la base de données

mysql -u admin -p flashculture < /var/www/html/moodlesql/flashculture.sql

## configuration unistra/ovh et local 

## Thème 

### Boost magnifique

#1a2a6c
#004488
#83a4d4

### Steam bon 

Couleur primaire 

Défaut : #daaa00

Couleur secondaire

Défaut : #298976


#1a2a6c
#004488
#83a4d4
