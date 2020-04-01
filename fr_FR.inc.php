<?php
$arrLang = array();

$arrLang['alert_admin_email_wrong'] = "L'e-mail admin a un format incorrect ! Veuillez le re-saisir.";
$arrLang['alert_min_version_db'] = "Ce programme nécessite au moins la version _DB_VERSION_ de _DB_ installée (la version actuelle est _DB_CURR_VERSION_). Vous ne pouvez pas procéder à l'installation.";
$arrLang['alert_min_version_php'] = "Ce programme nécessite au moins la version _PHP_VERSION_ de PHP installée (la version actuelle est _PHP_CURR_VERSION_). Vous ne pouvez pas procéder à l'installation.";
$arrLang['alert_directory_not_writable'] = "Le répertoire <b>_FILE_DIRECTORY_</b> n'est pas accessible en écriture ! <br />Vous devez accorder les permissions d'écriture (droits d'accès 0755 ou 777, selon les paramètres de votre système) à ce répertoire défini dans EI_CONFIG_FILE_DIRECTORY avant de commencer l'installation !";
$arrLang['alert_extension_not_installed'] = "L'extension pdo_mysql requise n'est pas installée sur votre serveur ! Vous ne pouvez pas continuer l'installation.";
$arrLang['alert_unable_to_install'] = "Impossible d'installer cette application car une application ayant la même identité est déjà installée. <br>Vous pouvez seulement <b>jour</b> ou <b>désinstaller</b> il. Assurez-vous d'avoir une copie de sauvegarde de votre base de données avant de continuer.";
$arrLang['alert_required_fields'] = "Les articles marqués d'un astérisque sont obligatoires";
$arrLang['alert_db_host_empty'] = "L'hôte de la base de données ne peut pas être vide ! Veuillez entrer à nouveau.";
$arrLang['alert_db_name_empty'] = "Le nom de la base de données ne peut pas être vide ! Veuillez réessayer.";
$arrLang['alert_db_username_empty'] = "Le nom d'utilisateur de la base de données ne peut pas être vide ! Veuillez réessayer.";
$arrLang['alert_db_password_empty'] = "Le mot de passe de la base de données ne peut pas être vide ! Veuillez réessayer.";
$arrLang['alert_admin_name_empty'] = "Le nom d'utilisateur admin ne peut pas être vide ! Veuillez le saisir à nouveau.";
$arrLang['alert_admin_identifier_empty'] = "L'identifiant ne peut pas être vide ! Veuillez entrer à nouveau.";
$arrLang['alert_admin_password_empty'] = "Le mot de passe admin ne peut pas être vide ! Veuillez le re-saisir.";
$arrLang['alert_wrong_testing_parameters'] = "Les paramètres de test sont erronés ! Veuillez entrer des paramètres valides.";
$arrLang['alert_remove_files'] = "Pour des raisons de sécurité, veuillez supprimer le dossier <b>oc-install/</b> de votre serveur !";
$arrLang['alert_wrong_parameter_passed'] = "Paramètre invalide ! Veuillez revenir à l'étape précédente et réessayer.";

$arrLang['error_asp_tags'] = "Cette installation nécessite <b>balises ASP</b> paramètres activés.";
$arrLang['error_can_not_open_config_file'] = "La base de données a été créée avec succès ! Impossible d'ouvrir le fichier de configuration _CONFIG_FILE_PATH_ pour enregistrer des informations.";
$arrLang['error_can_not_read_file'] = "Impossible de lire le fichier <b>_SQL_DUMP_FILE_</b>! Veuillez vérifier s'il existe un fichier.";
$arrLang['error_check_db_exists'] = "Erreur de connexion à la base de données ! Veuillez vérifier si votre base de données existe et l'accès autorisé pour l'utilisateur <b>_DATABASE_USERNAME_</b>._ERROR_<br />";
$arrLang['error_check_db_connection'] = "Erreur de connexion à la base de données! Veuillez vérifier vos paramètres de connexion._ERROR_<br />";
$arrLang['error_pdo_support'] = "Cette installation nécessite <b>extension PDO</b> installée.";
$arrLang['error_sql_executing'] = "Erreur d'exécution SQL ! Veuillez activer le mode debug et vérifier soigneusement une syntaxe de votre fichier dump SQL.";
$arrLang['error_server_requirements'] = "Cette installation nécessite _SETTINGS_NAME_ paramètres activés/installés.";
$arrLang['error_vd_support'] = "Cette installation nécessite le support du répertoire virtuel activé.";

$arrLang['admin_access_data'] = "Informations du compte administrateur";
$arrLang['admin_access_data_descr'] = "(vous en avez besoin pour entrer dans la zone d'administration protégée)";
$arrLang['admin_email'] = "Email";
$arrLang['admin_email_info'] = "L'adresse email de l'administrateur qui sera utilisée pour se connecter à ce compte.

D'autres comptes d'administrateur peuvent être provisionnés ultérieurement dans la console d'administration Gestion des utilisateurs";
$arrLang['admin_name'] = "prénom";
$arrLang['admin_login_info'] = "Votre nom selon les politiques et procédures de votre communauté. Cela peut être ajusté plus tard si nécessaire.";
$arrLang['admin_identifier'] = "Identifiant";
$arrLang['admin_identifier_info'] = "Votre identifiant. IE: 1D-01 Note. Cela dépend de votre communauté";
$arrLang['admin_password'] = "Mot de passe";
$arrLang['admin_password_info'] = "Nous recommandons que votre mot de passe ne soit pas un mot que vous pouvez trouver dans le dictionnaire, inclut à la fois des majuscules et des minuscules, et contient au moins un caractère spécial (1-9, !, *, _, etc.).";
$arrLang['administrator_account'] = "Compte administrateur";
$arrLang['options_page'] = "Paramètres système";
$arrLang['administrator_account_skipping'] = "Saut (compte admin non requis)";
$arrLang['asp_tags'] = "Demander des Tags";
$arrLang['back'] = "Retour";
$arrLang['build_date'] = "Date de compilation";
$arrLang['cancel_installation'] = "Annuler l'installation";
$arrLang['click_start_button'] = "Cliquez sur le bouton Démarrer pour continuer";
$arrLang['click_to_start_installation'] = "Cliquez pour démarrer l'installation";
$arrLang['checked'] = "Vérifié";
$arrLang['complete'] = "Terminé";
$arrLang['complete_installation'] = "Installation complète";
$arrLang['completed'] = "Terminé";
$arrLang['continue'] = "Continuer";
$arrLang['continue_installation'] = "Continuer l'installation";
$arrLang['database_extension'] = "Extension de base de données";
$arrLang['database_host'] = "Hôte de base de données";
$arrLang['database_host_info'] = "Nom d'hôte ou adresse IP du serveur de base de données. Le serveur de base de données peut se présenter sous la forme d'un nom d'hôte (et / ou d'une adresse de port), tel que db1.myserver.com ou localhost: 5432, ou d'une adresse IP telle que 192.168.0.1";
$arrLang['database_import'] = "Import base de données";
$arrLang['database_import_error'] = "Import de base de données (erreur)";
$arrLang['database_name'] = "Nom de la base";
$arrLang['database_name_info'] = "Nom de la base de données. La base de données utilisée pour stocker les données. Un exemple de nom de base de données est 'testdb'.";
$arrLang['database_username'] = "Nom d'utilisateur";
$arrLang['database_username_info'] = "Nom d'utilisateur de la base de données. Le nom d'utilisateur est 'test_123'.";
$arrLang['database_password'] = "Mot de passe de base";
$arrLang['database_password_info'] = "Mot de passe de la base de données. Le mot de passe est utilisé avec le nom d'utilisateur, qui forme le compte utilisateur de la base de données.";
$arrLang['database_prefix'] = "Préfixe de base de données";
$arrLang['database_prefix_info'] = "Préfixe de base de données. Utilisé pour définir le préfixe unique pour les tables de base de données et empêcher un type de données d'interférer avec un autre. Un exemple de préfixe de base de données est 'abc_'.";
$arrLang['database_settings'] = "Paramètres de base de données";
$arrLang['directories_and_files'] = "Répertoires et fichiers";
$arrLang['disabled'] = "Désactivé";
$arrLang['enabled'] = "Activé";
$arrLang['error'] = "Erreur";
$arrLang['extensions'] = "Extensions";
$arrLang['getting_system_info'] = "Obtenir les informations du système";
$arrLang['file_successfully_rewritten'] = "Le fichier _CONFIG_FILE_ a bien été réécrit et la base de données mise à jour.";
$arrLang['file_successfully_deleted'] = "Le fichier _CONFIG_FILE_ a bien été supprimé et la base de données supprimée.";
$arrLang['file_successfully_created'] = "Le fichier _CONFIG_FILE_ a été créé avec succès.";
$arrLang['failed'] = "échec";
$arrLang['folder_paths'] = "Chemins de dossier";
$arrLang['follow_the_wizard'] = "Suivez l'Assistant <b></b> pour installer votre programme";
$arrLang['installed'] = "installé";
$arrLang['installation_complete'] = "Installation terminée !";
$arrLang['installation_guide'] = "Guide d'installation";
$arrLang['installation_type'] = "Type d'installation";
$arrLang['language'] = "Langue";
$arrLang['license'] = "Licence";
$arrLang['Import'] = "";
$arrLang['Export'] = "";
$arrLang['loading'] = "chargement";
$arrLang['mbstring_support'] = "Support des chaînes multi-octets";
$arrLang['magic_quotes_gpc'] = "Devis magiques pour GPC (Get/Post/Cookie)";
$arrLang['magic_quotes_runtime'] = "Durée des devis magiques";
$arrLang['magic_quotes_sybase'] = "Les quotas magiques sont en style Sybase";
$arrLang['mode'] = "Mode";
$arrLang['modes'] = "Modes";
$arrLang['new_installation_of'] = "Nouvelle installation de";
$arrLang['new'] = "Nouveau";
$arrLang['no'] = "Non";
$arrLang['no_writable'] = "pas d'écriture";
$arrLang['not_installed'] = "non installé";
$arrLang['off'] = "Non";
$arrLang['ok'] = "OK";
$arrLang['on'] = "Sur";
$arrLang['passed'] = "Passé";
$arrLang['password_encryption'] = "Cryptage du mot de passe";
$arrLang['perform_manual_installation'] = "Exécuter un manuel <b></b> d'installation";
$arrLang['pdo_support'] = "Support PDO";
$arrLang['php_version'] = "Version PHP";
$arrLang['proceed_to_login_page'] = "Passer à la page de connexion";
$arrLang['ready_to_install'] = "Prêt à installer";
$arrLang['remove_configuration_button'] = "Supprimer la configuration et démarrer";
$arrLang['required_php_settings'] = "Paramètres PHP requis";
$arrLang['safe_mode'] = "Mode sans échec";
$arrLang['select_installation_language'] = "Choisir la langue d'installation";
$arrLang['select_installation_type'] = "Sélectionner le type d'installation";
$arrLang['sendmail_from'] = "Envoyer depuis";
$arrLang['sendmail_path'] = "Chemin d'envoi";
$arrLang['server_api'] = "API du serveur";
$arrLang['server_requirements'] = "Exigences du serveur";
$arrLang['session_support'] = "Support de session";
$arrLang['short_open_tag'] = "Tag court ouvert";
$arrLang['smtp'] = "SMTP";
$arrLang['smtp_port'] = "Port SMTP";
$arrLang['start'] = "Début";
$arrLang['start_all_over'] = "Tout démarrer";
$arrLang['start_all_over_text'] = "Si vous voulez supprimer cette installation pour quelque raison que ce soit, vous pouvez forcer l'installateur à supprimer la configuration actuelle et à recommencer. <br><b>ATTENTION</b>: Vous devez annuler manuellement l'installation de la base de données pour supprimer toutes les modifications qui ont été faites.";
$arrLang['step_1_of'] = "Etape 1 sur 11";
$arrLang['step_2_of'] = "Etape 2 sur 11";
$arrLang['step_3_of'] = "Etape 3 sur 11";
$arrLang['step_4_of'] = "Étape 4 sur 11";
$arrLang['step_5_of'] = "Etape 5 de 11";
$arrLang['step_6_of'] = "Étape 6 de 11";
$arrLang['step_7_of'] = "Étape 7 de 11";
$arrLang['step_8_of'] = "Étape 8 de 11";
$arrLang['step_9_of'] = "Etape 9 de 11";
$arrLang['step_10_of'] = "Étape 10 de 11";
$arrLang['step_11_of'] = "Étape 11 de 11";
$arrLang['sub_title_message'] = "Cet assistant vous guidera tout au long du processus d'installation";
$arrLang['system'] = "Système";
$arrLang['system_architecture'] = "Architecture système";
$arrLang['test_connection'] = "Tester la connexion";
$arrLang['test_database_connection'] = "Tester la connexion à la base de données";
$arrLang['unknown'] = "Inconnu";
$arrLang['uninstall'] = "Désinstaller";
$arrLang['uninstallation_completed'] = "Désinstallation terminée !";
$arrLang['update'] = "Mise à jour";
$arrLang['updating_completed'] = "Mise à jour terminée !";
$arrLang['virtual_directory_support'] = "Support du répertoire virtuel";
$arrLang['we_are_ready_to_installation'] = "Nous sommes maintenant prêts à procéder à l'installation";
$arrLang['we_are_ready_to_installation_text'] = "";
$arrLang['writable'] = "Écritable";

$arrLang['core_configuration'] = "Configuration du noyau";
$arrLang['department_configuration'] = 'Configuration du service';
$arrLang['civilian_configuration'] = 'Configuration civile'; 
$arrLang['administrative_configuration'] = '';
$arrLang['extra_settings'] = 'Paramètres supplémentaires';

//** Begin Core Configuration Strings **//
$arrLang['COMMUNITY_NAME'] = "Nom de la communauté";
$arrLang['COMMUNITY_NAME_notes'] = "Définissez le nom de votre communauté";
$arrLang['COMMUNITY_NAME_alert'] = "Le nom de la communauté ne peut pas être vide ! Veuillez entrer à nouveau.";

$arrLang['BASE_URL'] = "URL de l'application";
$arrLang['BASE_URL_notes'] = "L’URL de votre installation d’OpenCAD comprend, s’il est utilisé, son sous-répertoire
            Exemples valides:
            exemple.com - Domaine racine, pas de sous-répertoire
            sous-domaine.exemple.com - sous-domaine, pas de sous-répertoire
            sous-domaine.exemple.com/subdir - sous-domaine avec le sous-répertoire
            exemple.com/subdir - domaine racine avec le sous-répertoire
            Les équipes OpenCAD ne recommandent pas l'inclusion de fin / sur l'un des exemples ci-dessus.
            Cela ne casse pas forcément quoi que ce soit, mais donne simplement l’air étrange à la référence d’avoir deux barres obliques coupées lorsque cela n’est pas nécessaire.";
$arrLang['BASE_URL_alert'] = "BASE_URL ne peut pas être vide ! Veuillez entrer à nouveau.";

$arrLang['CAD_FROM_EMAIL'] = 'CAD depuis email';
$arrLang['CAD_FROM_EMAIL_notes'] = 'L\'e-mail dont les notes de votre CAO devraient apparaître provenir.

Exemple : cad@community.com
';

$arrLang['CAD_TO_EMAIL'] = 'CAO A E-mail';
$arrLang['CAD_TO_EMAIL_notes'] = 'L\'e-mail dont les notes de votre CAO devraient apparaître provenir.

Exemple : cad@community.com
';

$arrLang['AUTH_KEY'] = 'Clé d\'authentification';
$arrLang['AUTH_SALT'] = 'Salt d\'authentification';
$arrLang['SECURE_AUTH_KEY'] = 'Clé d\'authentification sécurisée';
$arrLang['SECURE_AUTH_SALT'] = 'Sel d\'authentification sécurisé';
$arrLang['LOGGED_IN_KEY'] = 'Clé connectée';
$arrLang['LOGGED_IN_SALT'] = 'Sel connecté';
$arrLang['NONCE_KEY'] = 'Clé de nonce';
$arrLang['NONCE_SALT'] = 'Sel de nonce';
$arrLang['SESSION_KEY'] = 'Clé de session';
//** End Core Configuration Strings **//

//** Begin Login Strings **//
$arrLang['LAW_ENFORCEMENT_OFFICER'] = "";
$arrLang['FIRST_RESPONDER'] = "";
$arrLang['CIVILIAN'] = "";
$arrLang['SIGN_IN_TO_YOUR_ACCOUNT'] = "";
$arrLang['LOGIN'] = "";
$arrLang['REQUEST_ACCESS'] = "";
//** End Login Strings **//


//** Begin Registration Modal Strings **//
$arrLang['FIRST_RESPONDER_ACCESS_REQUEST'] = "";
$arrLang['CIVILIAN_ACCESS_REQUEST'] = "";
$arrLang['DIVISION_SELECT_ALL'] = "";
$arrLang['IDENTIFIER_PLCAEHOLDER'] = "";
//** End Registration Modal Strings  **//


//** Begin Registration Modal Strings **//
$arrLang['CONFIRM_PASSWORD'] = "";
//** End Registration Modal Strings **//

//** Begin Dashboard Strings **//
$arrLang['CIVILIAN_SERVICES'] = "";
$arrLang['LAW_ENFORCEMENT_SERVICES'] = "";
$arrLang['FIRST_RESPONDER_SERVICES'] = "";
//** End Dashboard Strings **//


//** Begin LEO Strings **//
$arrLang['POLICE_NCIC'] = "";
$arrLang['POLICE_NCIC_notes'] = "Affiche / masque la fonctionnalité NCIC sur la console MDT. Si 'true', LEO pourra utiliser les fonctions NCIC sans avoir besoin d'un répartiteur, sinon si 'flase', il devra demander à ce dernier d'utiliser la fonctionnalité NCIC.";

$arrLang['POLICE_CALL_SELFASSIGN'] = "";
$arrLang['POLICE_CALL_SELFASSIGN_notes'] = "";
//** End LEO Strings **//

//**  Begin Fire Strings **//
$arrLang['FIRE_PANIC'] = "Feu Panique";
$arrLang['FIRE_PANIC_notes'] = "Affiche/Masque la fonctionnalité Panique sur la console MDT pour Feu. Si 'true' alors le personnel de Feu pourra utiliser le bouton Panic, sinon si 'false' alors le personnel de Feu ne pourra pas utiliser le bouton Panic.";

$arrLang['FIRE_BOLO'] = "Lancer BOLO";
$arrLang['FIRE_BOLO_notes'] = "Affiche/Masque la fonctionnalité Panique sur la console MDT pour le Feu. Si 'true' alors le personnel de Feu pourra voir la carte BOLO, sinon si 'false' alors le personnel de Feu ne pourra pas voir la carte BOLO";

$arrLang['FIRE_NCIC_NAME'] = "Nom NCIC Feu";
$arrLang['FIRE_NCIC_NAME_notes'] = "Affiche/Masque la fonctionnalité Panique sur la console MDT pour Feu. Si 'true' alors le personnel de Feu pourra utiliser la recherche de nom NCIC, sinon si 'false' alors le personnel de Feu ne pourra pas utiliser la recherche de nom NCIC";

$arrLang['FIRE_NCIC_PLATE'] = "Plaque NCIC Feu";
$arrLang['FIRE_NCIC_PLATE_notes'] = "Affiche/Masque la fonctionnalité Panique sur la console MDT pour le Feu. Si 'true' alors le personnel de Feu sera en mesure d'utiliser la fonction de recherche de plaques NCIC, sinon si 'false' alors le personnel de Feu ne sera pas en mesure d'utiliser la fonction de recherche de plaque NICI.";

$arrLang['FIRE_CALL_SELFASSIGN'] = "";
$arrLang['FIRE_CALL_SELFASSIGN_notes'] = "";
//**  End Fire Strings **//

//** Begin EMS Strings **//
$arrLang['EMS_PANIC'] = "EMS Panique";
$arrLang['EMS_PANIC_notes'] = "Afficher/masquer les fonctionnalités Panic sur la console MDT pour EMS. Si 'true' alors le personnel de Feu sera en mesure d'utiliser le bouton Panic, sinon si 'false' alors le personnel EMS ne pourra pas utiliser le bouton Panic.";

$arrLang['EMS_BOLO'] = "EMS BOLO";
$arrLang['EMS_BOLO_notes'] = "Affiche / masque la fonctionnalité Panic sur la console MDT pour EMS. Si 'true', le personnel du service incendie pourra voir le tableau BOLO, sinon s'il est 'faux', le personnel EMS ne pourra pas visualiser le tableau BOLO";

$arrLang['EMS_NCIC_NAME'] = "Nom NCIC EMS";
$arrLang['EMS_NCIC_NAME_notes'] = "Affiche / masque la fonctionnalité Panic sur la console MDT pour EMS. Si «true», le personnel incendie pourra utiliser la recherche de nom de nom NCIC, sinon, si «false» le personnel EMS ne pourra pas utiliser la recherche de nom NCIC.";

$arrLang['EMS_NCIC_PLATE'] = "Plate NCIC EMS";
$arrLang['EMS_NCIC_PLATE_notes'] = "Affiche / masque la fonctionnalité Panic sur la console MDT pour EMS. Si 'true', le personnel incendie pourra utiliser la fonction de consultation de plaque NCIC, sinon, si 'false' le personnel EMS ne pourra pas utiliser la fonction de consultation de plaque NCIC";
//** End EMS Strings **//

//** Begin Roadside Assistance Strings **//
$arrLang['ROADSIDE_PANIC'] = "Voile Panique";
$arrLang['ROADSIDE_PANIC_notes'] = "Affiche/Masque les fonctionnalités Panic sur la console MDT pour l'assistance routière. Si 'true' alors RAO pourra utiliser le bouton Panic, sinon si 'false' alors RAO ne pourra pas utiliser le bouton Panic.";

$arrLang['ROADSIDE_BOLO'] = "BOLO d'itinérance";
$arrLang['ROADSIDE_BOLO_notes'] = "Affiche/Masque les fonctionnalités BOLO sur la console MDT pour l'assistance routière. Si 'true' alors RAO pourra utiliser le bouton Panic, sinon si 'false' alors RAO ne pourra pas utiliser le bouton Panic.";

$arrLang['ROADSIDE_NCIC_NAME'] = "Nom NCIC de la route";
$arrLang['ROADSIDE_NCIC_NAME_notes'] = "Affiche/Masque les fonctionnalités NCIC sur la console MDT pour l'assistance routière. Si 'true' alors RAO sera en mesure d'utiliser la requête NCIC plate sans avoir besoin d'un répartiteur, sinon si 'false' alors RAO demandera la présence du répartiteur pour utiliser la funcationalité des requêtes NCIC plaque.";

$arrLang['ROADSIDE_NCIC_PLATE'] = "Plaque NCIC d'itinérance";
$arrLang['ROADSIDE_NCIC_PLATE_notes'] = "Affiche/Masque les fonctionnalités NCIC sur la console MDT pour l'assistance routière. Si 'true' alors RAO sera en mesure d'utiliser la requête NCIC plate sans avoir besoin d'un répartiteur, sinon si 'false' alors RAO demandera la présence du répartiteur pour utiliser la funcationalité des requêtes NCIC plaque.";

$arrLang['ROADSIDE_CALL_SELFASSIGN'] = "Appel d'itinérance auto-assigné";
$arrLang['ROADSIDE_CALL_SELFASSIGN_notes'] = "Si 'vrai' alors RAO sera en mesure d'utiliser la requête NCIC plate sans avoir besoin d'un expéditeur, sinon si 'faux' alors RAO exigera la présence de l'expéditeur pour utiliser la fonctionnalité de la requête NCIC plate.";
//** End Roadside Assistance Strings **//

//** Begin Civilian Strings **//
$arrLang['CIV_WARRANT'] = "Création de guerrier civil";
$arrLang['CIV_WARRANT_notes'] = "Autoriser / interdire aux civils de gérer leurs mandats. Si ce paramètre est défini sur \"true\", les civs pourront supprimer les mandats de leur profil. Sinon, s'ils sont définis sur \"false\", les civs ne pourront pas supprimer les mandats.";

$arrLang['CIV_REG'] = "Inscription civile instantanée";
$arrLang['CIV_REG_notes'] = "Je pense qu'il s'agit là d'un point important.";

$arrLang['CIV_LIMIT_MAX_IDENTITIES'] = "Identités maximales civiques";
$arrLang['CIV_LIMIT_MAX_IDENTITIES_notes'] = "Si CIV_LIMIT_MAX est '0' alors les civils pourront créer des identités illimitées. Sinon, si CIV_LIMIT_MAX est une valeur autre que '0' alors il limitera le nombre maximum d'identités possibles à cette valeur.";

$arrLang['CIV_LIMIT_MAX_VEHICLES'] = "Véhicules Maximum Civilier";
$arrLang['CIV_LIMIT_MAX_VEHICLES_notes'] = "Si CIV_LIMIT_MAX_VEHICLES est '0' alors les civils pourront créer des véhicules illimités. Sinon, si CIV_LIMIT_MAX_VEHICLES est une valeur autre que '0' alors il couvrira le nombre maximum de véhicules possibles à cette valeur";

$arrLang['CIV_LIMIT_MAX_WEAPONS'] = "Armes Maximum Civiliennes";
$arrLang['CIV_LIMIT_MAX_WEAPONS_notes'] = "Si CIV_LIMIT_MAX_WEAPONS est '0' alors les civils pourront créer des armes illimitées. Sinon, si CIV_LIMIT_MAX_WEAPONS est une valeur autre que '0' alors il limitera le nombre maximum d'armes possibles à cette valeur";
//** End Civilian Strings **//

//** Begin Administrative Strings**//
$arrLang['MODERATOR_USER_MANAGER'] = "";
$arrLang['MODERATOR_USER_MANAGER_notes'] = "";

$arrLang['MODERATOR_APPROVE_USER'] = "Modérateur Approuver l'utilisateur";
$arrLang['MODERATOR_APPROVE_USER_notes'] = "Si 'vrai' alors les modérateurs pourront approuver de nouvelles demandes d'utilisateur, sinon, si 'faux' alors les modérateurs ne pourront pas approuver de nouvelles demandes d'utilisateur.";

$arrLang['MODERATOR_EDIT_USER'] = "Modifier l'utilisateur";
$arrLang['MODERATOR_EDIT_USER_notes'] = "Si 'true' alors les modérateurs seront en mesure d'éditer le profil des utilisateurs, si 'faux' alors les modérateurs ne pourront pas modifier le profil des utilisateurs. Cela inclut le nom, l'email, l'identifiant et les rôles. Les modérateurs pourront ajouter des groupes d'utilisateurs mais leur suppression est régie par le paramètre MODERATOR_REMOVE_GROUPS.";

$arrLang['MODERATOR_DELETE_USER'] = "Modérateur suppression utilisateur";
$arrLang['MODERATOR_DELETE_USER_notes'] = "Si 'true' alors les modérateurs seront en mesure de supprimer les utilisateurs, sinon si les modérateurs 'faux' ne seront pas en mesure de supprimer les utilisateurs.";

$arrLang['MODERATOR_SUSPEND_WITHOUT_REASON'] = "Suspendre le modérateur sans raison";
$arrLang['MODERATOR_SUSPEND_WITHOUT_REASON_notes'] = "Si 'vrai' alors les modérateurs pourront suspendre les utilisateurs sans raison, sinon si les modérateurs 'faux' ne pourront pas suspendre les utilisateurs sans raison.";

$arrLang['MODERATOR_SUSPEND_WITH_REASON'] = "Suspendre modérateur avec raison";
$arrLang['MODERATOR_SUSPEND_WITH_REASON_notes'] = "Si 'vrai' alors les modérateurs pourront suspendre les utilisateurs avec une raison, si les modérateurs 'faux' ne pourront pas suspendre les utilisateurs avec une raison.";

$arrLang['MODERATOR_REACTIVATE_USER'] = "Modérateur Réactiver l'utilisateur";
$arrLang['MODERATOR_REACTIVATE_USER_notes'] = "Si 'vrai' alors les modérateurs pourront enlever les utilisateurs d'autres, si les modérateurs 'faux' ne seront pas en mesure de réactiver les utilisateurs.";

$arrLang['MODERATOR_REMOVE_GROUP'] = "Modérateur Supprimer le groupe";
$arrLang['MODERATOR_REMOVE_GROUP_notes'] = "Si 'true' alors les modérateurs seront en mesure de supprimer les groupes de l'utilisateur, sinon si les modérateurs 'faux' ne pourront pas supprimer les groupes de l'utilisateur.";

$arrLang['MODERATOR_NCIC_EDITOR'] = "Éditeur NCIC du modérateur";
$arrLang['MODERATOR_NCIC_EDITOR_notes'] = "";

$arrLang['MODERATOR_DATA_MANAGER'] = "Gestionnaire de données Modérateur";
$arrLang['MODERATOR_DATA_MANAGER_notes'] = "Si 'vrai' alors les modérateurs pourront accéder au gestionnaire de données de jeu, sinon si 'faux' alors les modérateurs ne pourront pas accéder au gestionnaire de données de jeux.";

$arrLang['MODERATOR_DATAMAN_CITATIONTYPES'] = "Éditeur de types de Citation Modératrice";
$arrLang['MODERATOR_DATAMAN_CITATIONTYPES_notes'] = "Si 'true' alors les modérateurs auront accès au module de gestion des types de Citation du gestionnaire de données de jeu, sinon si 'faux' alors les modérateurs seront privés d'accès.";

$arrLang['MODERATOR_DATAMAN_DEPARTMENTS'] = "Editeur de départements de modérateur";
$arrLang['MODERATOR_DATAMAN_DEPARTMENTS_notes'] = "Si 'true' alors les modérateurs auront accès au module Departments Manager du Game Data Manager, sinon si 'faux' alors les modérateurs seront privés d'accès.";

$arrLang['MODERATOR_DATAMAN_INCIDENTTYPES'] = "Éditeur de types d'incident modérateur";
$arrLang['MODERATOR_DATAMAN_INCIDENTTYPES_notes'] = "Si 'true' alors les modérateurs auront accès au module Gestionnaire de Types d'Incident du Game Data Manager, sinon si 'faux' alors les modérateurs seront privés d'accès.";

$arrLang['MODERATOR_DATAMAN_RADIOCODES'] = "Éditeur de codes radio modérateur";
$arrLang['MODERATOR_DATAMAN_RADIOCODES_notes'] = "Si 'true' alors les modérateurs auront accès au module Gestionnaire de Codes de Radio du Game Data Manager, sinon si 'faux' alors les modérateurs seront privés d'accès.";

$arrLang['MODERATOR_DATAMAN_STREETS'] = "Éditeur de Streets Modérateur";
$arrLang['MODERATOR_DATAMAN_STREETS_notes'] = "Si 'true' alors les modérateurs auront accès au module Gestionnaire de Streets du Gestionnaire de Données de Jeu, sinon si 'faux' alors les modérateurs seront privés d'accès.";

$arrLang['MODERATOR_DATAMAN_VEHICLES'] = "";
$arrLang['MODERATOR_DATAMAN_VEHICLES_notes'] = "Si 'vrai' alors les modérateurs auront accès au module Gestionnaire des Véhicules du Game Data Manager, sinon si 'faux' alors les modérateurs seront privés d'accès.";

$arrLang['MODERATOR_DATAMAN_WARNINGTYPES'] = "Éditeur de types d'avertissement modérateur";
$arrLang['MODERATOR_DATAMAN_WARNINGTYPES_notes'] = "Si 'true' alors les modérateurs auront accès au module Gestionnaire de Types d'Avertissement du Gestionnaire de Données de Jeu, sinon si 'faux' alors les modérateurs seront privés d'accès.";

$arrLang['MODERATOR_DATAMAN_WARRANTTYPES'] = "Éditeur de types de mandats modérateurs";
$arrLang['MODERATOR_DATAMAN_WARRANTTYPES_notes'] = "Si 'true' alors les modérateurs auront accès au module de gestionnaire de types de mandats du gestionnaire de données de jeu, sinon si 'faux' alors les modérateurs seront privés d'accès.";

$arrLang['MODERATOR_DATAMAN_WEAPONS'] = "Editeur d'armes de modérateur";
$arrLang['MODERATOR_DATAMAN_WEAPONS_notes'] = "Si 'true' alors les modérateurs auront accès au module Weapons Manager du Game Data Manager, sinon si 'faux' alors les modérateurs seront privés d'accès.";

$arrLang['MODERATOR_DATAMAN_IMPEXPRESET'] = "Import/Export/Réinitialisation du modérateur";
$arrLang['MODERATOR_DATAMAN_IMPEXPRESET_notes'] = "Si 'true' alors les modérateurs auront accès au module Importer/Exporter/Réinitialiser du gestionnaire de données du jeu, sinon si 'faux' alors les modérateurs seront privés d'accès.";
//** End Administrative Strings**//

//** Begin Extra Settings Strings **//
$arrLang['DEMO_MODE'] = "Mode démo";
$arrLang['DEMO_MODE_notes'] = "\"true\" puis diverses fonctionnalités de gestion des utilisateurs d'OpenCAD seront verrouillées, sinon, si \"false\", toutes les fonctionnalités d'OpenCAD * seront disponibles.";

$arrLang['USE_GRAVATAR'] = "Gravataire";
$arrLang['USE_GRAVATAR_notes'] = "OpenCAD récupérera dynamiquement votre avatar de {@link Gravatar http://fr.gravatar.com/} si vous avez un compte. Sinon, il utilisera l'image d'avatar générique par défaut incluse avec OpenCAD .";
//** End Extra Settings Strings **//

//** Begin Common Global Strings **/
$arrLang['WELCOME'] = "Souhaits de bienvenue";
$arrLang["GENERAL"] = "Général";
$arrLang["CAD_SYSTEM"] = "Système CAD";
$arrLang["EDIT"] = "Editer";
$arrLang["DELETE"] = "Supprimer";
$arrLang["NAME"] = "Nom";
$arrLang["EMAIL"] = "E-mail";
$arrLang["ROLE"] = "Rôle";
$arrLang["IDENTIFIER"] = "Identifiant";
$arrLang["GROUPS"] = "Groupes";
$arrLang["ACTIONS"] = "Actions";
$arrLang["NEXT"] = "Suivant";
$arrLang["PREVIOUS"] = "Précédent";
$arrLang["SEARCH"] =  "Recherche";
$arrLang["DASHBOARD"] =  "Tableau de bord";
$arrLang["LOGOUT"] =  "Déconnexion";
$arrLang["NEED_HELP"] =  "Besoin d'aide ?";
$arrLang["FULLSCREEN"] =  "Plein écran";
$arrLang["DOB"] = "DOB";
$arrLang["ADDRESS"] = "Adresse";
$arrLang["GENDER"] = "Sexe";
$arrLang["RACE"] = "Course";
$arrLang["DL_STATUS"] = "Statut DL";
$arrLang["HAIR_COLOR"] = "Couleur de cheveux";
$arrLang["BUILD"] = "Construire";
$arrLang["WEAPON_STATUS"] = "Statut de l'arme";
$arrLang["WEAPON_NAME"] = "Nom de l'arme";
$arrLang["WEAPON_TYPE"] ="Type d'arme";
$arrLang["WEAPON_NOTES"] ="Notes d'arme";
$arrLang["DECEASED"] = "Déclenché";
$arrLang["REG_PLATE"] = "Plaque Reg.";
$arrLang["VEHICLE_NOTES"] = "Notes du véhicule";
$arrLang["NOT_YOU"] = "Pas vous ?";
$arrLang["ACTIVE_CALLS"] = "Appels actifs";
$arrLang["ACTIVE_BOLOS"] = "BOLOs actifs";
$arrLang["NCIC_NAME_LOOKUP"] = "Recherche de nom NCIC";
$arrLang["NCIC_PLATE_LOOKUP"] = "Recherche de plaques NCIC";
$arrLang["NCIC_WEAPON_LOOKUP"] = "Recherche d'arme NCIC";
$arrLang["SEND"] = "Envoyer";
$arrLang["MY_PROFILE"] = "Mon profil";
$arrLang["APPLICATIONS"] = "";
$arrLang["SETTINGS"] = "";
$arrLang["REQUEST"] = "";
$arrLang["CLOSE"] = "";
$arrLang["RESET"] = "";
//** End Common Global Strings */

//** Begin Administrator/Moderator Console Strings  **/
$arrLang["CAD_ADMINISTRATION"] = "Administration CAO";
$arrLang["STATISTICS_AT_A_GLANCE"] = "Statistiques en un coup d'œil";
$arrLang["TOTAL_USERS"] = "Nombre total d'utilisateurs";
$arrLang["ACEESS_REQUESTS"] = "Demandes d'accès";
$arrLang["THERE_ARE_CURRENTLY_NO_ACCESS_REQUESTS"] = "Il n'y a actuellement aucune demande d'accès.";
$arrLang["CAD_USER_MANAGEMENT"] = "Gestion utilisateur CAO";
$arrLang["ACCOUNT_MANAGEMENT"] = "Gestion du compte";
$arrLang["SUSPEND_WITH_REASON"] = "Suspendre avec raison";
$arrLang["SUSPEND_WITHOUT_REASON"] = "Suspendre sans raison";
$arrLang["NCIC_NAMES_DB"] = ""; 
$arrLang["NCIC_NAMES_DB_none"] = "";
$arrLang["NCIC_VEHICLES_DB"] = "Base de données des véhicules NCIC";
$arrLang["NCIC_VEHICLES_DB_none"] = "Aucun résultat trouvé dans la base de données des Véhicules NCIC.";
$arrLang["NCIC_WEAPONS_DB"] = "Base de données des armes NCIC";
$arrLang["NCIC_WEAPONS_DB_none"] = "Aucun résultat trouvé dans la base de données NCIC Weapons.";
$arrLang["NCIC_WARNINGS_DB"] = "Base de données des alertes NCIC";
$arrLang["NCIC_WARNINGS_DB_none"] = "Aucun résultat trouvé dans la base de données NCIC Weapons.";
$arrLang["NCIC_CITATIONS_DB"] = "Base de données des citations NCIC.";
$arrLang["NCIC_CITATIONS_DB_none"] = "Aucun résultat trouvé dans la base de données des citations NCIC.";
$arrLang["NCIC_ARRESTS_DB"] = "Base de données NCIC Arrests";
$arrLang["NCIC_ARRESTS_DB_none"] = "Aucun résultat trouvé dans la base de données NCIC Arrests.";
$arrLang["NCIC_WARRANTS_DB"] = "Base de données NCIC Warrants";
$arrLang["NCIC_WARRANTS_DB_none"] = "Aucun résultat trouvé dans la base de données NCIC Warrants";
$arrLang["USER_MANAGER"] = "";
$arrLang["NCIC_EDITOR"] = "Editeur NCIC";
$arrLang["DATA_MANAGER"] = "";
$arrLang["ABOUT_ENVIRONMENT"] = "";
$arrLang["PHP_VERSION"] = "";
$arrLang["PHP_VERSION_notes"] = "";
$arrLang["DATABASE_ENGINE"] = "";
$arrLang["DATABASE_ENGINE_notes"] = "";
$arrLang["LOADED_PHP_MODULES"] = "";
$arrLang["LOADED_PHP_MODULES_notes"] = "";
$arrLang["ABOUT_YOUR_APPLICATION"] = "";
$arrLang["APPLICATION_VERSION"] = "";
$arrLang["APPLICATION_VERSION_notes"] = "";
$arrLang["DATABASE_VERSION"] = "";
$arrLang["DATABASE_VERSION_notes"] = "";
$arrLang["CITATIONTYPE_MANAGER"] = "";
$arrLang["CITATIONTYPE_MANAGER_none"] = "";
$arrLang["DEPARTMENT_MANAGER"] = "";
$arrLang["DEPARTMENT_MANAGER_none"] = "";
$arrLang["INCIDENTTYPE_MANAGER"] = "";
$arrLang["INCIDENTTYPE_MANAGER_none"] = "";
$arrLang["CITATIONTYPE_MANAGER"] = "";
$arrLang["CITATIONTYPE_MANAGER_none"] = "";
$arrLang["RADIOCODE_MANAGER"] = "";
$arrLang["RADIOCODE_MANAGER_none"] = "";
$arrLang["STREET_MANAGER"] = "";
$arrLang["STREET_MANAGER_none"] = "";
$arrLang["VEHICLE_MANAGER"] = "";
$arrLang["VEHICLE_MANAGER_none"] = "";
$arrLang["WARNINGTYPE_MANAGER"] = "";
$arrLang["WARNINGTYPE_MANAGER_none"] = "";
$arrLang["WARRANTTYPE_MANAGER"] = "";
$arrLang["WARRANTTYPE_MANAGER_none"] = "";
$arrLang["WEAPON_MANAGER"] = "";
$arrLang["WEAPON_MANAGER_none"] = "";
$arrLang["ABOUT_OPENCAD"] = "";
$arrLang["RESET_DATA"] = "";
$arrLang["ENVIRONMENTAL_DATA_OPTGRP"] = "";
$arrLang["STREETS"] = "";
$arrLang["VEHICLES"] = "";
$arrLang["WEAPONS"] = "";
$arrLang["CIVILIAN_DATA_OPTGRP"] = "";
$arrLang["IDENTITIES"] = "";
$arrLang["REGISTERED_PLATES"] = "";
$arrLang["REGISTERED_WEAPONS"] = "";
$arrLang["WARRANT_HISTORY"] = "";
$arrLang["WARNING_HISTORY"] = "";
$arrLang["LEO_SUPPORT_DATA_OPTGRP"] = "";
$arrLang["CITATION_TYPES"] = "";
$arrLang["INCIDENT_TYPES"] = "";
$arrLang["RADIO_CODES"] = "";
$arrLang["WARRANT_TYPES"] = "";
$arrLang["WARNING_TYPES"] = "";
$arrLang["RESET_ALL_DATA_OPTGRP"] = "";
$arrLang["RESET_ALL_DATA"] = "";
//** End Administrator/Moderator Console Strings  **/

//** Begin Civillian Console Strings **/
$arrLang["CIVILLIAN_CONSOLE"] = "Console Civile";
$arrLang["MY_IDENTITIES"] = "Mes Identités";
$arrLang["MY_IDENTITIES_none"] = "Aucun résultat trouvé dans la base de données identitaires.";
$arrLang["MY_VEHICLES"] = "Mes véhicules";
$arrLang["MY_VEHICLES_none"] = "Aucun résultat trouvé dans la base de données des véhicules.";
$arrLang["MY_WEAPONS"] = "Mes Armes";
$arrLang["MY_WEAPONS_none"] = "Aucun résultat trouvé dans la base de données des armes.";
$arrLang["MY_WARRANTS"] = "Mes Warrants";
$arrLang["MY_WARRANTS_none"] = "Aucun résultat trouvé dans la base de données des garanties.";
$arrLang["CREATE_A_CALL"] = "Créer un appel";
$arrLang["ADD_NEW_IDENTITY"] = "Ajouter une identité";
$arrLang["ADD_NEW_VEHICLE"] = "";
$arrLang["ADD_NEW_WEAPON"] = "Ajouter une arme";
$arrLang["CIVILLIAN_DASHBOARD"] = "Tableau de bord Civillian";
$arrLang["VIEW_WARRANTS"] = "";
$arrLang["CREATE_WARRANT"] = "Créer un mandat";
$arrLang["UPDATE"] = "Mise à jour";
//** End Civillian Console Strings **/

//** Begin CAD Console Strings **/
$arrLang["CAD_CONSOLE"] = "Console CAD";
$arrLang["ACTIVE_DISPATCHERS"] = "Distributeurs actifs";
$arrLang["ACTIVE_DISPATCHERS_none"] = "Aucun répartiteur actuellement disponible.";
$arrLang["AVAILABLE_UNITS"] = "Unités disponibles";
$arrLang["UNAVAILABLE_UNITS"] = "Unités non disponibles";
$arrLang["NEW_PERSONS_BOLO"] = "Nouvelles personnes BOLO";
$arrLang["NEW_VEHICLE_BOLO"] = "BOLO nouveau véhicule";
$arrLang["NEW_CALL"] = "Nouvel appel";
$arrLang["PANIC_BUTTON"] = "Bouton Panique";
$arrLang["PRIORITY_TONE"] = "Défaut";
$arrLang["STOP_BORADCASTING_BUTTON"] = "Tone 10-3";
$arrLang["STOPWATCH"] = "Stopwatch";
$arrLang["WARNINGS"] = "Avertissements";
$arrLang["CITATIONS"] = "Citations";
$arrLang["ARREST_REPORT"] = "Arrêter le RAPPORT";
$arrLang["WARRANTS"] = "Guerriers";
$arrLang["SET_AREA_OF_PATROL"] = "";
//** End CAD Console Strings *//

//** Begin MDT Console Strings **/
$arrLang["MDT_CONSOLE"] = "Console MDT";
$arrLang["MY_STATUS"] = "Mon statut";
$arrLang["MY_CALL"] ="Mon appel";
$arrLang["VIEW_PERSONS_BOLOS"] = "Voir les personnes";
$arrLang["VIEW_VEHICLE_BOLOS"] = "Voir les BOLOs du véhicule";
//** End MDT Console Strings *//

//** Begin Profile Console Strings **/
$arrLang["PASSWORD"] = "Mot de passe";
$arrLang["CHANGE_PASSWORD"] = "Changer le mot de passe";
$arrLang["MY_PRFILE"] ="Mon profil";
$arrLang["PROFILE_SUCCESS"] = "";
$arrLang["PASSWORD_SUCCESS"] = "Successfully updated your password."
//** End Profile Console Strings *//
?>