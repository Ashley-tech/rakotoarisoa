Requis pour Laravel :
-Composer PHP

Télécharger Laravel :
Commandes :
-composer global require "laravel/installer"
-laravel --version (pour vérifier si Laravel y est bien installé)
-laravel new [nom_du_projet] (Créer un projet)

Modèles :
-@ManyToMany = belongsToMany(Class::class)
-@OneToMany = hasMany(Class::class)
-@OneToOne = hasOne(Class::class)
-@ManyToOne = belongsTo(Class::class)