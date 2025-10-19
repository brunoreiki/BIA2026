
<h3>Les avions en temps réel</h3>
<p></p>
<div id="map"></div>
<p></p>


# MathJax

https://bia-facile.fr/local/MathJax/tex-mml-chtml.js

Moodle 5.0.2
https://cdn.jsdelivr.net/npm/mathjax@3.2.2/es5/tex-mml-chtml.js

{
  "loader": { "load": ["[tex]/ams", "[tex]/physics", "[tex]/color"] },
  "tex": {
    "inlineMath": [["\\(", "\\)"]],
    "displayMath": [["\\[", "\\]"], ["$$", "$$"]],
    "packages": { "[+]": ["ams", "physics", "color"] },
    "macros": {
      "R": "\\mathbb{R}",
      "N": "\\mathbb{N}",
      "vect": ["\\overrightarrow{#1}", 1],
      "dd": "\\,\\mathrm{d}"
    }
  },
  "options": {
    "skipHtmlTags": ["script", "noscript", "style", "textarea", "pre", "code"]
  },
  "chtml": { "scale": 1 }
}


Moodle 4.5.1
https://cdn.jsdelivr.net/npm/mathjax@2.7.9/MathJax.js

MathJax.Hub.Config({
    config: ["Accessible.js", "Safe.js"],
    errorSettings: { message: ["!"] },
    skipStartupTypeset: true,
    messageStyle: "none"
});


# BIA CAEA

Projet thèse BIA 2026

## A faire 

Mettre activités dans tous les cours
https en local
x Statistiques de la plateforme
Contacter Boost Magnific
x Contacter Astor
Voir les deux plug ins de l'étudiant différé et immédiat
x Comité scientitifique de la recherche
x Courrier au rectorat (Moodle 5, implication dans le cours (temps passé par l'élève visible par lui),  cours CAEA vidéo intégrées, tests de positionnement, annales, cours officiel, examene blanc, test des réponses et question de la session 2025 par une IA et vérifié par un pilote et controleur aérien)
Faire un document de présentation pour le rectorat pour les proviseurs
Refaire le découpage en séquence pour que la progression se voit 
x Refaire les questions BIA / CAEA et leur catégories
x Refaire la page d'accueil pour mettre un texte sur le rectorat
x Faire les annales du CAEA
x Intégrer les vidéos
Mettre les liens dans toutes les actualités de la bare progression pas seulement les tests

<p><strong>Règlementation aéronautique : organisations, survol, règles de priorité, emport de carburant</strong></p>

<p>
<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/AkC1y3ezMJ0?si=TWlREW292nKxfiVP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</p>

Montpellier
Adresse : Rectorat de l’Académie de Montpellier, 31 rue de l’Université, CS 39004, 34064 Montpellier Cedex 2
Téléphone : 04 67 91 47 00

Objet : Contact pour webmaster des vidéos YouTube de l’Académie de Montpellier
Bonjour,

Je cherche à entrer en contact avec la personne en charge de la chaîne YouTube "Académie de Montpellier Vidéos". Pouvez-vous m’indiquer le service ou l’adresse email appropriés ?

Merci par avance pour votre aide,
Cordialement,
[Votre nom / fonction]

## Nouvelle base de données

bb106669-001.eu.clouddb.ovh.net:35903
bb106669-001.eu.clouddb.ovh.net
flashculbia2026
emriHy22o

## Droits sur les dossiers

chown -R root:www-data /var/www/html/bia2026/bia-caea
chown -R root:www-data /var/www/html/bia2026/moodledata

### Dans le dossier de Moodle (le code)

find /var/www/html/bia2026/bia-caea -type f -exec chmod 644 {} \;
find /var/www/html/bia2026/bia-caea -type d -exec chmod 755 {} \;

### Dans le dossier de Moodledata (le code)

find /var/www/html/bia2026/moodledata -type f -exec chmod 664 {} \;
find /var/www/html/bia2026/moodledata -type d -exec chmod 775 {} \;

php /var/www/html/bia2026/bia-caea/admin/cli/purge_caches.php

## Cron

OVH

php /homez.291/flashcul/bb/BIA2026/bia-caea/admin/cli/cron.php


/homez.291/flashcul/bb/BIA2026/bia-caea/admin/cli/cron.php

Local
*/5 * * * * /usr/bin/php /var/www/html/bia2026/bia-caea/admin/cli/cron.php >/dev/null 2>&1

# GIT BIA SSH 

ssh flashcul@ssh.cluster013.hosting.ovh.net
emriHy22o

config.php chez ovh 
/homez.291/flashcul/bb/BIA2026

Git garde une référence automatique appelée **`ORIG_HEAD`** qui pointe sur la position avant le dernier `reset --hard`.\
Donc pour revenir à ton état juste avant :

git reset --hard ORIG_HEAD


## Nouvelle BDD sur ovh

Nouvelle

mysql -h bb106669-001.eu.clouddb.ovh.net -u flashculbia2026 -p flashculbia2026 < flashculture.sql 

Ancienne 

mysql -h flashculbia2026.mysql.db -u flashculbia2026 -p flashculbia2026 < flashculture_2025-08-14_13h26m57s.sql 


flashculbia2026
flashculbia2026
flashculbia2026.mysql.db
emriHy22o

Nom d'hôte

    bb106669-001.eu.clouddb.ovh.net 

Port
    35903 



## Installation de la base de données

mysql -u admin -p flashculture < /var/www/html/moodlesql/flashculture.sql

## Thème

Stream, moove, adaptable, almond


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
