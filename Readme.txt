Requis pour Laravel :
-Composer PHP

Télécharger Laravel :
Commandes :
-composer global require "laravel/installer"
-laravel --version (pour vérifier si Laravel y est bien installé)
-laravel new [nom_du_projet] (Créer un projet)

Dans php.ini, décommenter :
;extension=fileinfo (avant de faire la commande "composer install" pour installer tous les composants pour le projet Laravel)
;extension=pdo_pgsql
;extension=pgsql
(Les 2 derniers permettent de débloquer la création des tables de la base de données)

Pour créer ces tables : php artisan migrate

-php artsan serve (Pour lancer le serveur)


Relation (Java/Spring -> PHP/Laravel) :
-@ManyToMany = belongsToMany(Class::class)
-@OneToMany = hasMany(Class::class)
-@OneToOne = hasOne(Class::class)
-@ManyToOne = belongsTo(Class::class)

