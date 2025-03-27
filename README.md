

# Portfolio de Gaël Quéméré

Ce projet est un portfolio personnel développé avec WordPress et Roots/Bedrock. Il présente mes réalisations en tant qu'étudiant en BUT2 informatique à l'IUT de Laval.

## Prérequis

- PHP 7.4 ou supérieur
- MySQL 5.7 ou supérieur
- Composer (pour installer les dépendances de Bedrock)
- Un serveur local `php -S`

## Installation

1. **Cloner le dépôt et installer les composants :**
   ```bash
   git clone https://github.com/Koaden/wp-portfolio
   cd mon-portfolio

   composer install

   cp .env.example .env

   ```
2. **Changer le .env : **

   ouvrir le .env et mettre ceci : 

   DB_NAME='mon_portfolio_db'
    DB_USER='wp_user'
    DB_PASSWORD='mot_de_passe_secure'
    DB_HOST='127.0.0.1'

    WP_ENV='development'
    WP_HOME='http://localhost:8000'
    WP_SITEURL="${WP_HOME}/wp"

    AUTH_KEY='|RF]g6:*pOSy!iDvF3+/BxI$Qpdxx2,:!3_W^BEFcoa>Cc-$&df@De)>mIV)U)KJ'
    SECURE_AUTH_KEY='gy]%hL`,RB5ebHDzx1m.sNjtqlb[fMCuEFVZ.+G{F%S*:9rH5o/_N#N#X(%__w(Y'
    LOGGED_IN_KEY='E2E410E2),uZ3T(m2.mcm)g^+]X/tl;KQr|fmYDYjS91z}1uj@=|V|qfU_;T7K@V'
    NONCE_KEY='oy_.D2LkeN^}<J/LqTD+!P}r`qptN_/.#,h&%^|5^NKt0#9XQ;qw+7x0I]JZEX(H'
    AUTH_SALT='a#/C<F?tQ[bcO@&<9$]yEIfVAH62;%N5fLS)}ybRV%bg:x[P|}}HGA;Z31H.)D%3'
    SECURE_AUTH_SALT='C)_EX4Umwy#F`b=d<@jF?Ve(y7#`<5z)UmA]w?6ygf?M9FCF4J;1675;3icngfV:'
    LOGGED_IN_SALT='7>$c8d{%?JE2fCIF{M?Z#-iysW${9x5?1zt^h%ong}*%2-ivLuGoOFgs?t/LHIbE'
    NONCE_SALT='P,s[|:f?08o+74l4+;G)?Nwk,O?t|6dSBMvbS*{y,eDEbBSmzPk6$C3+pawuOh0['

3. **Base de données : **

    ```bash

    mysql -u root -p mon_portfolio_db < BDD.sql

    mysql -u root -p

    CREATE USER 'wp_user'@'localhost' IDENTIFIED BY 'mot_de_passe_secure';

    GRANT ALL PRIVILEGES ON mon_portfolio_db.* TO 'wp_user'@'localhost';

    ```
4. **Lancer le serveur php : **

    ```bash

    php -S localhost:8000 -t web

    ```

5. **Ouvrir le site : **

    ouvrir un navigateur et mettre l'url suivante : 

    http://localhost:8000



## ID et passwords

utilisateur wordpress = gael_quemere
mdp = 123soleil

utilisateur bdd = wp_user
mdp = mot_de_passe_secure

## Une explication des étapes réalisées

Création du projet avec composer
Installation des dépendances avec composer
Création de la BDD
Configuration du .env
ajout du thème astra
création d'un theme enfant
création du cpt-portfolion
création d'un groupe acf de champs
mise en place des diférentes pages + personnalisation
ajout de projet exemple pour mettre du contenu dans le site

exportation de la BDD + rédaction du README.md
exportation sur git


## Les difficultés rencontrées

Routage des pages : j'ai eu des difficulté avec les permaliens
