<?php
$arrLang = array();

$arrLang['alert_admin_email_wrong'] = "Admin e-mail heeft een verkeerd formaat! Voer alstublieft opnieuw in.";
$arrLang['alert_min_version_db'] = "Dit programma vereist ten minste versie _DB_VERSION_ van _DB_ geïnstalleerd (huidige versie is _DB_CURR_VERSION_). U kunt de installatie niet voortzetten.";
$arrLang['alert_min_version_php'] = "Dit programma vereist ten minste versie _PHP_VERSION_ van PHP geïnstalleerd (huidige versie is _PHP_CURR_VERSION_). U kunt de installatie niet voortzetten.";
$arrLang['alert_directory_not_writable'] = "De directory <b>_FILE_DIRECTORY_</b> is niet schrijfbaar! <br />U moet 'schrijfrechten' toekennen (toegangsrechten 0755 of 0777, afhankelijk van uw systeeminstellingen) aan deze directory gedefinieerd in EI_CONFIG_FILE_DIRECTORY voordat u de installatie start!";
$arrLang['alert_extension_not_installed'] = "Vereiste extensie pdo_mysql is niet geïnstalleerd op uw server! U kunt de installatie niet voortzetten.";
$arrLang['alert_unable_to_install'] = "Kan deze applicatie niet installeren omdat een applicatie met dezelfde identiteit al geïnstalleerd is. <br>U kunt alleen <b>bijwerken</b> of <b>verwijderen</b>. Zorg ervoor dat u een backup van uw database heeft voordat u verder gaat.";
$arrLang['alert_required_fields'] = "Items gemarkeerd met een asterisk zijn vereist";
$arrLang['alert_db_host_empty'] = "Database host kan niet leeg zijn! Voer opnieuw in.";
$arrLang['alert_db_name_empty'] = "Database naam mag niet leeg zijn! Voer opnieuw in.";
$arrLang['alert_db_username_empty'] = "Database gebruikersnaam mag niet leeg zijn! Voer opnieuw in.";
$arrLang['alert_db_password_empty'] = "Database wachtwoord mag niet leeg zijn! Voer opnieuw in.";
$arrLang['alert_admin_name_empty'] = "Admin gebruikersnaam mag niet leeg zijn! Voer opnieuw in.";
$arrLang['alert_admin_identifier_empty'] = "Identifier mag niet leeg zijn! Voer opnieuw in.";
$arrLang['alert_admin_password_empty'] = "Admin wachtwoord mag niet leeg zijn! Voer opnieuw in.";
$arrLang['alert_wrong_testing_parameters'] = "Testparameters zijn fout! Voer geldige parameters in.";
$arrLang['alert_remove_files'] = "Om veiligheidsredenen, adviseren wij u ten sterkste de map <b>oc-install/</b> van uw server te verwijderen!";
$arrLang['alert_wrong_parameter_passed'] = "Verkeerde parameter doorgegeven! Terug naar de vorige stap en probeer het opnieuw.";

$arrLang['error_asp_tags'] = "Deze installatie vereist dat <b>ASP tags</b> instellingen zijn AAN gezet.";
$arrLang['error_can_not_open_config_file'] = "Database is succesvol aangemaakt! Kan het configuratiebestand _CONFIG_FILE_PATH_ niet openen om info op te slaan.";
$arrLang['error_can_not_read_file'] = "Kon bestand <b>_SQL_DUMP_FILE_</b> niet lezen! Controleer of er een bestand bestaat.";
$arrLang['error_check_db_exists'] = "Database verbindingsfout! Controleer of uw database bestaat en of de volgende gebruiker voldoende toegang heeft: <b>_DATABASE_USERNAME_</b>. _ERROR_<br />";
$arrLang['error_check_db_connection'] = "Database verbindingsfout! Controleer uw verbindingsparameters. _ERROR_<br />";
$arrLang['error_pdo_support'] = "Deze installatie vereist dat de <b>PDO</b> PHP-extensie geinstalleerd is.";
$arrLang['error_sql_executing'] = "SQL uitvoeringsfout! Schakel debug modus in en controleer zorgvuldig de syntax van uw SQL dump bestand.";
$arrLang['error_server_requirements'] = "Deze installatie vereist _SETTINGS_NAME_ instellingen ingeschakeld/geïnstalleerd.";
$arrLang['error_vd_support'] = "Deze installatie vereist dat Virtual Directory ondersteuning ingeschakeld is.";

$arrLang['admin_access_data'] = "Beheerdersaccount info";
$arrLang['admin_access_data_descr'] = "(je hebt dit nodig om bij de beschermde beheeromgeving te komen)";
$arrLang['admin_email'] = "Email";
$arrLang['admin_email_info'] = "De Beheerders-email welke zal worden gebruikt om in te loggen op dit account.

Meer Administrator accounts kunnen later in de Beheerders Console 'Gebruikersbeheer' worden toegevoegd";
$arrLang['admin_name'] = "Naam";
$arrLang['admin_login_info'] = "Uw naam volgens uw community's beleid en procedures. Dit kan later worden aangepast indien nodig.";
$arrLang['admin_identifier'] = "Identifier";
$arrLang['admin_identifier_info'] = "Uw identificatienummer. Voorbeeld: 1D-01. Dit is afhankelijk van uw community";
$arrLang['admin_password'] = "Wachtwoord";
$arrLang['admin_password_info'] = "Wij raden aan dat uw wachtwoord geen woord is dat u in het woordenboek kunt vinden, en zowel hoofdletters als kleine letters en ten minste één speciaal teken (1-9, !, *, _, etc.) bevat.";
$arrLang['administrator_account'] = "Beheerdersaccount";
$arrLang['options_page'] = "Systeeminstellingen";
$arrLang['administrator_account_skipping'] = "Overslaan (Beheerdersaccount niet vereist)";
$arrLang['asp_tags'] = "Asp tags";
$arrLang['back'] = "Terug";
$arrLang['build_date'] = "Bouwdatum";
$arrLang['cancel_installation'] = "Installatie annuleren";
$arrLang['click_start_button'] = "Klik op de Start knop om door te gaan";
$arrLang['click_to_start_installation'] = "Klik om de installatie te starten";
$arrLang['checked'] = "Gecontroleerd";
$arrLang['complete'] = "Voltooi";
$arrLang['complete_installation'] = "Installatie voltooien";
$arrLang['completed'] = "Voltooid";
$arrLang['continue'] = "Doorgaan";
$arrLang['continue_installation'] = "Ga verder met installatie";
$arrLang['database_extension'] = "Database extensie";
$arrLang['database_host'] = "Database host";
$arrLang['database_host_info'] = "Hostnaam of IP-adres van de databaseserver. De databaseserver kan de vorm hebben van een hostnaam (en/of poortadres), zoals 'db1.myserver.com' of 'localhost:5432', of als een IP-adres, zoals 192.168.0.1";
$arrLang['database_import'] = "Database import";
$arrLang['database_import_error'] = "Database import (fout)";
$arrLang['database_name'] = "Database naam";
$arrLang['database_name_info'] = "Database naam. De database gebruikt om de gegevens te bewaren. Een voorbeeld van de databasenaam is 'testdb'.";
$arrLang['database_username'] = "Database gebruikersnaam";
$arrLang['database_username_info'] = "Database gebruikersnaam. De gebruikersnaam die wordt gebruikt om verbinding te maken met de database server. Een voorbeeld van een gebruikersnaam is 'test_123'.";
$arrLang['database_password'] = "Database wachtwoord";
$arrLang['database_password_info'] = "Database wachtwoord. Het wachtwoord horend bij de database gebruikersnaam, welke samen het database gebruikersaccount vormt.";
$arrLang['database_prefix'] = "Database voorvoegsel";
$arrLang['database_prefix_info'] = "Database voorvoegsel. Wordt gebruikt om het unieke voorvoegsel voor databasetabellen in te stellen en te voorkomen dat het ene type gegevens een ander type in de weg zit. Een voorbeeld van database voorvoegsel is 'abc_'.";
$arrLang['database_settings'] = "Database instellingen";
$arrLang['directories_and_files'] = "Mappen en bestanden";
$arrLang['disabled'] = "Uitgeschakeld";
$arrLang['enabled'] = "Ingeschakeld";
$arrLang['error'] = "Fout";
$arrLang['extensions'] = "Extensies";
$arrLang['getting_system_info'] = "Systeeminformatie ophalen";
$arrLang['file_successfully_rewritten'] = "Het _CONFIG_FILE_ bestand is succesvol herschreven en de database is bijgewerkt.";
$arrLang['file_successfully_deleted'] = "Het bestand _CONFIG_FILE_ is succesvol verwijderd en de database is verwijderd.";
$arrLang['file_successfully_created'] = "Het _CONFIG_FILE_ bestand is succesvol aangemaakt.";
$arrLang['failed'] = "mislukt";
$arrLang['folder_paths'] = "Map paden";
$arrLang['follow_the_wizard'] = "Volg de <b>Wizard</b> om uw programma te installeren";
$arrLang['installed'] = "geïnstalleerd";
$arrLang['installation_complete'] = "Installatie voltooid!";
$arrLang['installation_guide'] = "Installatiehandleiding";
$arrLang['installation_type'] = "Installatietype";
$arrLang['language'] = "Taal";
$arrLang['license'] = "Licentie";
$arrLang['loading'] = "laden";
$arrLang['mbstring_support'] = "Multibyte String Ondersteuning";
$arrLang['magic_quotes_gpc'] = "Magische offertes voor GPC (Get/Post/Cookie)";
$arrLang['magic_quotes_runtime'] = "Magische Offertes Runtime";
$arrLang['magic_quotes_sybase'] = "Magische Offertes zijn in Sybase-stijl";
$arrLang['mode'] = "Modus";
$arrLang['modes'] = "Modes";
$arrLang['new_installation_of'] = "Nieuwe installatie van";
$arrLang['new'] = "Nieuw";
$arrLang['no'] = "Nee";
$arrLang['no_writable'] = "geen schrijfbaar";
$arrLang['not_installed'] = "niet geïnstalleerd";
$arrLang['off'] = "Uit";
$arrLang['ok'] = "Oké";
$arrLang['on'] = "Aan";
$arrLang['passed'] = "Geslaagd";
$arrLang['password_encryption'] = "Wachtwoord versleuteling";
$arrLang['perform_manual_installation'] = "Voer een <b>Handmatige</b> installatie uit";
$arrLang['pdo_support'] = "PDO ondersteuning";
$arrLang['php_version'] = "PHP versie";
$arrLang['proceed_to_login_page'] = "Ga door naar login pagina";
$arrLang['ready_to_install'] = "Klaar om te installeren";
$arrLang['remove_configuration_button'] = "Configuratie verwijderen en opnieuw beginnen";
$arrLang['required_php_settings'] = "Vereiste PHP-instellingen";
$arrLang['safe_mode'] = "Veilige modus";
$arrLang['select_installation_language'] = "Selecteer installatietaal";
$arrLang['select_installation_type'] = "Selecteer installatietype";
$arrLang['sendmail_from'] = "Sendmail van";
$arrLang['sendmail_path'] = "Sendmail pad";
$arrLang['server_api'] = "Server API";
$arrLang['server_requirements'] = "Server Vereisten";
$arrLang['session_support'] = "Sessieondersteuning";
$arrLang['short_open_tag'] = "Korte Open Tag";
$arrLang['smtp'] = "SMTP";
$arrLang['smtp_port'] = "SMTP-poort";
$arrLang['start'] = "Start";
$arrLang['start_all_over'] = "Start helemaal opnieuw";
$arrLang['start_all_over_text'] = "Als u deze installatie om een of andere reden wilt verwijderen, kunt u de Installer dwingen de huidige configuratie te verwijderen en geheel opnieuw te starten. <br><b>WAARSCHUWING</b>: U moet de database installatie handmatig ongedaan maken om alle veranderingen die gedaan zijn te verwijderen.";
$arrLang['step_1_of'] = "Stap 1 van 11";
$arrLang['step_2_of'] = "Stap 2 van 11";
$arrLang['step_3_of'] = "Stap 3 van 11";
$arrLang['step_4_of'] = "Stap 4 van 11";
$arrLang['step_5_of'] = "Stap 5 van 11";
$arrLang['step_6_of'] = "Stap 6 van 11";
$arrLang['step_7_of'] = "Stap 7 van 11";
$arrLang['step_8_of'] = "Stap 8 van 11";
$arrLang['step_9_of'] = "Stap 9 van 11";
$arrLang['step_10_of'] = "Stap 10 van 11";
$arrLang['step_11_of'] = "Stap 11 van 11";
$arrLang['sub_title_message'] = "Deze wizard zal u begeleiden door het hele installatieproces";
$arrLang['system'] = "Systeem";
$arrLang['system_architecture'] = "Systeem architectuur";
$arrLang['test_connection'] = "Test verbinding";
$arrLang['test_database_connection'] = "Test database verbinding";
$arrLang['unknown'] = "Onbekend";
$arrLang['uninstall'] = "Deïnstalleren";
$arrLang['uninstallation_completed'] = "Deïnstallatie voltooid!";
$arrLang['update'] = "Bijwerken";
$arrLang['updating_completed'] = "Bijwerken voltooid!";
$arrLang['virtual_directory_support'] = "Virtual Directory ondersteuning";
$arrLang['we_are_ready_to_installation'] = "We zijn nu klaar om verder te gaan met de installatie";
$arrLang['we_are_ready_to_installation_text'] = "Bij deze stap zal de installatiewizard proberen alle vereiste databasetabellen te maken en te vullen met gegevens. <br>Als er iets fout gaat, ga terug naar de database instellingen stap en controleer dat alle informatie die u hebt ingevoerd juist is.";
$arrLang['writable'] = "Schrijfbaar";

$arrLang['core_configuration'] = "Kernconfiguratie";
$arrLang['department_configuration'] = 'Afdelingsspecifieke configuratie';
$arrLang['civilian_configuration'] = 'Civiele configuratie'; 
$arrLang['administrative_configuration'] = 'Administratieve configuratie';
$arrLang['extra_settings'] = 'Extra instellingen';

//** Begin Core Configuration Strings **//
$arrLang['COMMUNITY_NAME'] = "Community naam";
$arrLang['COMMUNITY_NAME_notes'] = "Stel de naam van uw community in";
$arrLang['COMMUNITY_NAME_alert'] = "De community naam mag niet leeg zijn! Voer opnieuw in.";

$arrLang['BASE_URL'] = "Applicatie URL";
$arrLang['BASE_URL_notes'] = "De URL naar uw installatie van OpenCAD inclusief, indien gebruikt, de submap
            geldig voorbeelden zijn:
            voorbeeld.com - hoofddomein, geen submap
            subdomein.example.com - subdomein, geen submap
            subdomain.example.com/subdir - subdomein met submap
            example.com/subdir - hoofddomein met submap
            het OpenCAD team raadt niet aan om een afsluitende '/' in de URL te gebruiken.
            Een afsluitende / hoeft geen functionaliteit te breken, maar zorgt voor een dubbele slash in de URL.";
$arrLang['BASE_URL_alert'] = "BASE_URL mag niet leeg zijn! Voer opnieuw in.";

$arrLang['CAD_FROM_EMAIL'] = 'CAD van E-mail';
$arrLang['CAD_FROM_EMAIL_notes'] = 'Het e-mail adres die als afzender voor je CAD notificaties gebruikt wordt.

Voorbeeld: cad@community.com
';

$arrLang['CAD_TO_EMAIL'] = 'CAD antwoord e-mail adres';
$arrLang['CAD_TO_EMAIL_notes'] = 'Het e-mail adres die als afzender voor je CAD notificaties gebruikt wordt.

Voorbeeld: cad@community.com
';

$arrLang['AUTH_KEY'] = 'Authenticatie-sleutel';
$arrLang['AUTH_SALT'] = 'Authenticatie Salt';
$arrLang['SECURE_AUTH_KEY'] = 'Veilige verificatiesleutel';
$arrLang['SECURE_AUTH_SALT'] = 'Veilige verificatie Salt';
$arrLang['LOGGED_IN_KEY'] = 'Ingelogde sleutel';
$arrLang['LOGGED_IN_SALT'] = 'Ingelogde Salt';
$arrLang['NONCE_KEY'] = 'Nonce Sleutel';
$arrLang['NONCE_SALT'] = 'Nonce Salt';
$arrLang['SESSION_KEY'] = 'Sessie sleutel';

//** End Core Configuration Strings **//

//** Begin Police Strings **//
$arrLang['POLICE_NCIC'] = "Politie NCIC";
$arrLang['POLICE_NCIC_notes'] = "Toont / verbergt de NCIC-functionaliteit op de MDT-console. Als het 'waar' is, dan zal LEO NCIC-functies kunnen gebruiken zonder een dispatcher, anders is 'flase' dan vereist LEO de aanwezigheid van de coördinator om NCIC funcationality te gebruiken.";
//** End Police Strings **//

//**  Begin Fire Strings **//
$arrLang['FIRE_PANIC'] = "Vuurpan";
$arrLang['FIRE_PANIC_notes'] = "Toont/Hides Panic functionaliteit op de MDT-console voor Fire. Als 'waar' dan zal Fire personeel de Panic knop kunnen gebruiken, anders zal 'onwaar' Vuurpersoneel de Panic knop niet kunnen gebruiken.";

$arrLang['FIRE_BOLO'] = "Vuur BOLO";
$arrLang['FIRE_BOLO_notes'] = "Toont/Hides Panic functionaliteit op de MDT-console voor Fire. Als 'waar' dan zal Fire personeel in staat zijn om het BOLO-bord te bekijken, anders als 'onwaar' dan zal Vuurpersoneel niet in staat zijn het BOLO-bord te bekijken";

$arrLang['FIRE_NCIC_NAME'] = "Naam Fire NCIC";
$arrLang['FIRE_NCIC_NAME_notes'] = "Toont/Hides Panic functionaliteit op de MDT-console voor Fire. Als 'waar' dan zal Fire personeel in staat zijn om de NCIC naam zoeken te gebruiken, anders als 'onwaar' dan zal Fire-personeel niet in staat zijn NCIC naam lookup te gebruiken";

$arrLang['FIRE_NCIC_PLATE'] = "Vuur NCIC Plaat";
$arrLang['FIRE_NCIC_PLATE_notes'] = "Toont/Hides Panic functionaliteit op MDT console voor Fire. Als 'waar' dan zal Fire personeel in staat zijn om de NCIC plate lookup functie te gebruiken, anders als 'onwaar' dan zal Fire personeel de NICI plate lookup functie niet kunnen gebruiken.";
//**  End Fire Strings **//

//** Begin EMS Strings **//
$arrLang['EMS_PANIC'] = "EMS Paniek";
$arrLang['EMS_PANIC_notes'] = "Toont/Hides Panic functionaliteit op de MDT-console voor EMS. Als 'waar' dan zal Fire personeel de Panic knop kunnen gebruiken, anders zal het EMS-personeel de Panic knop niet kunnen gebruiken.";

$arrLang['EMS_BOLO'] = "EMS BOLO";
$arrLang['EMS_BOLO_notes'] = "Toont / verbergt paniekfunctionaliteit op MDT-console voor EMS. Als dit 'waar' is, kan het brandweerpersoneel het BOLO-bord bekijken, anders als 'false' en kunnen het EMS-personeel het BOLO-bord niet bekijken";

$arrLang['EMS_NCIC_NAME'] = "Naam EMS NCIC";
$arrLang['EMS_NCIC_NAME_notes'] = "Toont / verbergt paniekfunctionaliteit op MDT-console voor EMS. Als dit 'waar' is, kan het personeel van het vuur de naam van de NCIC-naam gebruiken, anders als 'false', dan kan het EMS-personeel de NCIC-naam opzoeken niet gebruiken";

$arrLang['EMS_NCIC_PLATE'] = "EMS NCIC plaat";
$arrLang['EMS_NCIC_PLATE_notes'] = "Toont / verbergt paniekfunctionaliteit op MDT-console voor EMS. Als dit 'waar' is, kan de brandweerman de NCIC-plaatopzoekfunctie gebruiken, anders als 'onwaar', dan kan het EMS-personeel de NCIC-plaatopzoekfunctie niet gebruiken.";
//** End EMS Strings **//

//** Begin Roadside Assistance Strings **//
$arrLang['ROADSIDE_PANIC'] = "Roadside Paniek";
$arrLang['ROADSIDE_PANIC_notes'] = "Toont/Hides Panic functionaliteit op MDT console voor Roadside Assistance. Als 'waar' dan kan RAO de Panic knop gebruiken, anders zal RAO de Panic knop niet kunnen gebruiken als 'onwaar' dan kan RAO de Panic knop niet gebruiken.";

$arrLang['ROADSIDE_BOLO'] = "Bruin BOLO";
$arrLang['ROADSIDE_BOLO_notes'] = "Toont/Hides BOLO functionaliteit op de MDT-console voor Roadside bijstandsverlening. Als 'waar' dan kan RAO de Panic-knop gebruiken, anders zal RAO de Panic knop niet kunnen gebruiken.";

$arrLang['ROADSIDE_NCIC_NAME'] = "Roadside NCI naam";
$arrLang['ROADSIDE_NCIC_NAME_notes'] = "Toont/Hides NCIC functionaliteit op MDT console voor Roadside bijstandsverlening. Als 'waar' dan kan RAO NCIC plate query gebruiken zonder dat er een taxicentrale nodig is, anders zal RAO de aanwezigheid van dispatcher nodig hebben om NCIC query funcationaliteit te gebruiken.";

$arrLang['ROADSIDE_NCIC_PLATE'] = "Roadside NCIJ plaat";
$arrLang['ROADSIDE_NCIC_PLATE_notes'] = "Toont/Verbergt NCIC functionaliteit op MDT console voor bijstandsverlening langs de weg. Als 'true' dan kan de wegenhulp kentekeninformatie opvragen uit de NCIC database zonder dat er een dispatcher nodig is. Anders zal de wegenhulp de aanwezigheid van een dispatcher nodig hebben om kentekeninformatie op te kunnen vragen.";

$arrLang['ROADSIDE_CALL_SELFASSIGN'] = "Wegenhulp call zelf toewijzen";
$arrLang['ROADSIDE_CALL_SELFASSIGN_notes'] = "Als 'waar' dan kan RAO de NCIC-plaat query gebruiken zonder dat er een taxicentrale nodig is, anders zal RAO de aanwezigheid van de verzender nodig hebben om de NCIC-plaat query-functie te gebruiken.";
//** End Roadside Assistance Strings **//

//** Begin Civilian Strings **//
$arrLang['CIV_WARRANT'] = "Beschavingsgarantie creatie";
$arrLang['CIV_WARRANT_notes'] = "Burgers toestaan / weigeren hun warrants te beheren. Indien ingesteld op 'true', dan zal Civs in staat zijn om warrants uit hun profiel te verwijderen, anders indien ingesteld op 'false' zal Civs niet in staat zijn om warrants te verwijderen.";

$arrLang['CIV_REG'] = "Instant Civilian Registratie";
$arrLang['CIV_REG_notes'] = "Toestaan/Disallow directe registratie voor Civilliaten. Indien ingesteld op 'true' zullen burgergenoten geen admin-goedkeuring nodig hebben, in plaats van 'false' in te stellen, zal Civillian registratie toestemming nodig hebben voor Admin. Toestaan/Disallow-directe regitratie voor burgers. Als 'waar' nodig is, zal civiele registratie anders toestemming nodig hebben als 'onwaar' dan zullen burgerregistraties niet worden goedgekeurd.";

$arrLang['CIV_LIMIT_MAX_IDENTITIES'] = "Maximaal aantal Burger Identiteiten";
$arrLang['CIV_LIMIT_MAX_IDENTITIES_notes'] = "Als CIV_LIMIT_MAX '0' is, kunnen burgers onbeperkt identites maken. Anders, als CIV_LIMIT_MAX een andere waarde is dan '0' zal het maximaal aantal mogelijke identites naar die waarde beperken.";

$arrLang['CIV_LIMIT_MAX_VEHICLES'] = "Maximaal aantal Burger Voertuigen";
$arrLang['CIV_LIMIT_MAX_VEHICLES_notes'] = "Als CIV_LIMIT_MAX_VEHICLES '0' is, dan kan de burger onbeperkt voertuigen maken. Anders, als CIV_LIMIT_MAX_VEHICLES een andere waarde is dan '0' zal het maximaal aantal mogelijke voertuigen naar die waarde beperken";

$arrLang['CIV_LIMIT_MAX_WEAPONS'] = "Maximaal aantal Burger wapens";
$arrLang['CIV_LIMIT_MAX_WEAPONS_notes'] = "Als CIV_LIMIT_MAX_WEAPONS '0' is, dan kan de burger onbeperkt wapens maken. Anders, als CIV_LIMIT_MAX_WEAPONS een andere waarde is dan '0' zal het maximaal aantal mogelijke wapens naar die waarde beperken";
//** End Civilian Strings **//

//** Begin Administrative Strings**//
$arrLang['MODERATOR_APPROVE_USER'] = "Moderator goedkeuren gebruiker";
$arrLang['MODERATOR_APPROVE_USER_notes'] = "Als 'waar' dan kunnen moderators nieuwe gebruikersverzoeken goedkeuren, anders, als 'false' dan kunnen moderators geen nieuwe gebruikersverzoeken goedkeuren.";

$arrLang['MODERATOR_EDIT_USER'] = "Moderator bewerker gebruiker";
$arrLang['MODERATOR_EDIT_USER_notes'] = "Als 'true' zullen moderators het gebruikersprofiel kunnen bewerken, als 'false' dan zullen moderators het gebruikersprofiel niet kunnen bewerken. Dit omvat naam, e-mail, identificator en rollen. Moderators kunnen gebruikersgroepen toevoegen maar de verwijdering ervan wordt bepaald door de MODERATOR_REMOVE_GROUPS instelling.";

$arrLang['MODERATOR_DELETE_USER'] = "Moderator verwijderen gebruiker";
$arrLang['MODERATOR_DELETE_USER_notes'] = "Als 'waar' dan kunnen moderators gebruikers verwijderen, anders kunnen 'false' Moderators gebruikers niet verwijderen.";

$arrLang['MODERATOR_SUSPEND_WITHOUT_REASON'] = "Moderator Opschorten zonder reden";
$arrLang['MODERATOR_SUSPEND_WITHOUT_REASON_notes'] = "Als 'waar' dan kunnen moderators gebruikers zonder reden opschorten, anders kunnen 'valse' Moderators gebruikers niet zonder reden opschorten.";

$arrLang['MODERATOR_SUSPEND_WITH_REASON'] = "Moderator Opschorten met reden";
$arrLang['MODERATOR_SUSPEND_WITH_REASON_notes'] = "Als 'waar' dan kunnen moderators gebruikers met een reden opschorten, als 'valse' Moderators gebruikers niet met een reden kunnen opschorten.";

$arrLang['MODERATOR_REACTIVATE_USER'] = "Moderator Reactie gebruiker";
$arrLang['MODERATOR_REACTIVATE_USER_notes'] = "Als 'waar' dan kunnen moderators andere gebruikers verwijderen, als 'false' Moderators gebruikers niet opnieuw kunnen activeren.";

$arrLang['MODERATOR_REMOVE_GROUP'] = "Groep Moderator verwijderen";
$arrLang['MODERATOR_REMOVE_GROUP_notes'] = "Als 'waar' dan kunnen moderators gebruikersgroepen verwijderen, anders kunnen 'false' Moderators de gebruikersgroepen niet verwijderen.";

$arrLang['MODERATOR_NCIC_EDITOR'] = "Moderator NCIC Editor";
$arrLang['MODERATOR_NCIC_EDITOR_notes'] = "Als 'waar' dan kunnen moderators toegang krijgen tot de NCIC-editor, anders zullen 'false' Moderators geen toegang hebben tot de NCCIC-editor.";

$arrLang['MODERATOR_DATA_MANAGER'] = "Moderator Data Manager";
$arrLang['MODERATOR_DATA_MANAGER_notes'] = "Als 'waar' dan kunnen moderators toegang krijgen tot de Game Data Manager, anders als 'false' dan kunnen moderators geen toegang krijgen tot de Gam Data Manager.";

$arrLang['MODERATOR_DATAMAN_CITATIONTYPES'] = "Moderator Citatie types editor";
$arrLang['MODERATOR_DATAMAN_CITATIONTYPES_notes'] = "Als 'true' zullen moderators toegang hebben tot de Citation Types Manager module van de Game Data Manager, anders als 'false' dan zullen moderators geen toegang krijgen.";

$arrLang['MODERATOR_DATAMAN_DEPARTMENTS'] = "Moderator Afdelingseditor";
$arrLang['MODERATOR_DATAMAN_DEPARTMENTS_notes'] = "Als 'true' zullen moderators toegang hebben tot de Departments Manager module van de Game Data Manager, anders als 'false' dan zullen moderators geen toegang krijgen.";

$arrLang['MODERATOR_DATAMAN_INCIDENTTYPES'] = "Moderator Incident Types Editor";
$arrLang['MODERATOR_DATAMAN_INCIDENTTYPES_notes'] = "Als 'true' zullen moderators toegang hebben tot de Incident Types Manager module van de Game Data Manager, anders als 'false' dan zullen moderators geen toegang krijgen.";

$arrLang['MODERATOR_DATAMAN_RADIOCODES'] = "Moderator Radio Codes editor";
$arrLang['MODERATOR_DATAMAN_RADIOCODES_notes'] = "Als 'true' zullen moderators toegang hebben tot de Radio Codes Manager module van de Game Data Manager, anders als 'false' dan zullen moderators geen toegang krijgen.";

$arrLang['MODERATOR_DATAMAN_STREETS'] = "Moderator Streets editor";
$arrLang['MODERATOR_DATAMAN_STREETS_notes'] = "Als 'true' zullen moderators toegang hebben tot de Streets Manager module van de Game Data Manager, anders als 'false' dan zullen moderators geen toegang krijgen.";

$arrLang['MODERATOR_DATAMAN_VECHILES'] = "";
$arrLang['MODERATOR_DATAMAN_VEHICLES_notes'] = "Als 'true' zullen moderators toegang hebben tot de Vehiërles Manager module van de Game Data Manager, anders als 'false' dan zullen moderators geen toegang krijgen.";

$arrLang['MODERATOR_DATAMAN_WARNINGTYPES'] = "Moderator waarschuwing types editor";
$arrLang['MODERATOR_DATAMAN_WARNINGTYPES_notes'] = "Als 'true' zullen moderators toegang hebben tot de Waarschuwing typen Manager module van de Game Data Manager, anders als 'false' dan zullen moderators geen toegang krijgen.";

$arrLang['MODERATOR_DATAMAN_WARRANTTYPES'] = "Moderator Garantie types editor";
$arrLang['MODERATOR_DATAMAN_WARRANTTYPES_notes'] = "Als 'true' zullen moderators toegang hebben tot de Garan Types Manager module van de Game Data Manager, anders als 'false' dan zullen moderators geen toegang krijgen.";

$arrLang['MODERATOR_DATAMAN_WEAPONS'] = "Moderator Wapens Editor";
$arrLang['MODERATOR_DATAMAN_WEAPONS_notes'] = "Als 'true' zullen moderators toegang hebben tot de Wapons Manager module van de Game Data Manager, anders als 'false' dan zullen moderators geen toegang krijgen.";

$arrLang['MODERATOR_DATAMAN_IMPEXPRESET'] = "Moderator importeren/Exporteren/resetten";
$arrLang['MODERATOR_DATAMAN_IMPEXPRESET_notes'] = "Als 'true' dan zullen moderators toegang hebben tot de Import/Export/Reset module van de Game Data Manager, anders als 'false' dan zullen moderators geen toegang krijgen.";
//** End Administrative Strings**//

//** Begin Extra Settings Strings **//
$arrLang['DEMO_MODE'] = "Demomodus";
$arrLang['DEMO_MODE_notes'] = "'waar', dan worden verschillende gebruikersbeheerfuncties van OpenCAD geblokkeerd, anders als 'false' en dan is de volledige functionaliteit * van OpenCAD beschikbaar voor gebruik.";

$arrLang['USE_GRAVATAR'] = "Gravatar";
$arrLang['USE_GRAVATAR_notes'] = "OpenCAD zal je avatar dynamisch ophalen van {@link Gravatar http://en.gravatar.com/} als je een account hebt. Anders zal het de standaard generieke avatar gebruiken inclusief OpenCAD .";
//** End Extra Settings Strings **//

//** Begin Common Global Strings **/
$arrLang['WELCOME'] = "Verwelkoming";
$arrLang["GENERAL"] = "Algemeen";
$arrLang["CAD_SYSTEM"] = "CAD-systeem";
$arrLang["EDIT"] = "Bewerken";
$arrLang["DELETE"] = "Verwijderen";
$arrLang["NAME"] = "Naam";
$arrLang["EMAIL"] = "E-mail";
$arrLang["ROLE"] = "Rol";
$arrLang["IDENTIFIER"] = "Id";
$arrLang["GROUPS"] = "Groepen";
$arrLang["ACTIONS"] = "Acties";
$arrLang["NEXT"] = "Volgende";
$arrLang["PREVIOUS"] = "Vorige";
$arrLang["SEARCH"] =  "Zoeken";
$arrLang["DASHBOARD"] =  "Dashboard";
$arrLang["LOGOUT"] =  "Uitloggen";
$arrLang["NEED_HELP"] =  "Hulp nodig?";
$arrLang["FULLSCREEN"] =  "Volledig scherm";
$arrLang["DOB"] = "DOB";
$arrLang["ADDRESS"] = "Adres";
$arrLang["GENDER"] = "Geslacht";
$arrLang["RACE"] = "Race";
$arrLang["DL_STATUS"] = "DL-status";
$arrLang["HAIR_COLOR"] = "Haarkleur";
$arrLang["BUILD"] = "Bouw";
$arrLang["WEAPON_STATUS"] = "Wapenstatus";
$arrLang["WEAPON_NAME"] = "Wapennaam";
$arrLang["WEAPON_TYPE"] ="Wapentype";
$arrLang["WEAPON_NOTES"] ="Wapen notities";
$arrLang["DECEASED"] = "Opgegeven";
$arrLang["REG_PLATE"] = "Reg. Plaat";
$arrLang["VEHICLE_NOTES"] = "Voertuig notities";
$arrLang["NOT_YOU"] = "Niet jij?";
$arrLang["ACTIVE_CALLS"] = "Actieve oproepen";
$arrLang["ACTIVE_BOLOS"] = "Actieve BOLOs";
$arrLang["NCIC_NAME_LOOKUP"] = "NCIC naam opzoeken";
$arrLang["NCIC_PLATE_LOOKUP"] = "NCIC Plaat Lookup";
$arrLang["NCIC_WEAPON_LOOKUP"] = "NCIC Wapen Opzoeken";
$arrLang["SEND"] = "Verstuur";
$arrLang["MY_PROFILE"] = "Mijn profiel";
//** End Common Global Strings */

//** Begin Administrator/Moderator Console Strings  **/
$arrLang["CAD_ADMINISTRATION"] = "CAD-administratie";
$arrLang["STATISTICS_AT_A_GLANCE"] = "Statistieken in een oogopslag";
$arrLang["TOTAL_USERS"] = "Totaal gebruikers";
$arrLang["ACEESS_REQUESTS"] = "Toegangsverzoeken";
$arrLang["THERE_ARE_CURRENTLY_NO_ACCESS_REQUESTS"] = "Er zijn momenteel geen toegangsverzoeken.";
$arrLang["CAD_USER_MANAGEMENT"] = "CAD gebruikersbeheer";
$arrLang["ACCOUNT_MANAGEMENT"] = "Accountbeheer";
$arrLang["SUSPEND_WITH_REASON"] = "Opschorten met reden";
$arrLang["SUSPEND_WITHOUT_REASON"] = "Schorsen zonder reden";
$arrLang["NCIC_EDITOR"] = "NCIC-editor";
$arrLang["NCIC_NAMES_DB"] = "";
$arrLang["NCIC_NAMES_DB_none"] = "";
$arrLang["NCIC_VEHICLES_DB"] = "NCIC-voertuigen database";
$arrLang["NCIC_VEHICLES_DB_none"] = "Geen resultaten gevonden in de NCIC Vehicles database.";
$arrLang["NCIC_WEAPONS_DB"] = "NCIC wapens database";
$arrLang["NCIC_WEAPONS_DB_none"] = "Geen resultaten gevonden in de NCIC Wapens database.";
$arrLang["NCIC_WARNINGS_DB"] = "NCIC Waarschuwingen Database";
$arrLang["NCIC_WARNINGS_DB_none"] = "Geen resultaten gevonden in de NCIC Wapens database.";
$arrLang["NCIC_CITATIONS_DB"] = "NCIC Citations Database.";
$arrLang["NCIC_CITATIONS_DB_none"] = "Geen resultaten gevonden in de NCIC Citations database.";
$arrLang["NCIC_ARRESTS_DB"] = "NCIC arresteert database";
$arrLang["NCIC_ARRESTS_DB_none"] = "Geen resultaten gevonden in de NCIC-databank.";
$arrLang["NCIC_WARRANTS_DB"] = "NCIC Garantie database";
$arrLang["NCIC_WARRANTS_DB_none"] = "Geen resultaten gevonden in de NCIC Garantie database";
//** End Administrator/Moderator Console Strings  **/

//** Begin Civillian Console Strings **/
$arrLang["CIVILLIAN_CONSOLE"] = "Civilliaanse Console";
$arrLang["MY_IDENTITIES"] = "Mijn identiteit";
$arrLang["MY_IDENTITIES_none"] = "Geen resultaten gevonden in de identiteitsdatabase.";
$arrLang["MY_VEHICLES"] = "Mijn voertuigen";
$arrLang["MY_VEHICLES_none"] = "Geen resultaten gevonden in de database van voertuigen.";
$arrLang["MY_WEAPONS"] = "Mijn wapens";
$arrLang["MY_WEAPONS_none"] = "Geen resultaten gevonden in de wapendatabase.";
$arrLang["MY_WARRANTS"] = "Mijn garanties";
$arrLang["MY_WARRANTS_none"] = "Geen resultaten gevonden in de garantiedatabase.";
$arrLang["CREATE_A_CALL"] = "Een oproep maken";
$arrLang["ADD_NEW_IDENTITY"] = "Voeg nieuwe identiteit toe";
$arrLang["Add_ADD_NEW_PLATE"] = "";
$arrLang["ADD_NEW_WEAPON"] = "Voeg nieuw wapen toe";
$arrLang["CIVILLIAN_DASHBOARD"] = "Civilliaans Dashboard";
$arrLang["VIEW_WARRANTS"] = "";
$arrLang["CREATE_WARRANT"] = "Garantie maken";
$arrLang["UPDATE"] = "Bijwerken";
//** End Civillian Console Strings **/

//** Begin CAD Console Strings **/
$arrLang["CAD_CONSOLE"] = "CAD-console";
$arrLang["ACTIVE_DISPATCHERS"] = "Actieve Taxicentrales";
$arrLang["ACTIVE_DISPATCHERS_none"] = "Er zijn momenteel geen taxicentrales beschikbaar.";
$arrLang["AVAILABLE_UNITS"] = "Beschikbare eenheden";
$arrLang["UNAVAILABLE_UNITS"] = "Onbeschikbare eenheden";
$arrLang["NEW_PERSONS_BOLO"] = "Nieuwe personen BOLO";
$arrLang["NEW_VEHICLE_BOLO"] = "Nieuwe voertuigBOLO";
$arrLang["NEW_CALL"] = "Nieuwe oproep";
$arrLang["PANIC_BUTTON"] = "Paniek Knop";
$arrLang["PRIORITY_TONE"] = "PRIORITEIT_TONE";
$arrLang["STOP_BORADCASTING_BUTTON"] = "10-3 tong";
$arrLang["STOPWATCH"] = "Stopwatch";
$arrLang["WARNINGS"] = "Waarschuwingen";
$arrLang["CITATIONS"] = "Referenties";
$arrLang["ARREST_REPORT"] = "REPORT arresteren";
$arrLang["WARRANTS"] = "Garanties";
//** End CAD Console Strings *//

//** Begin MDT Console Strings **/
$arrLang["MDT_CONSOLE"] = "MDT-console";
$arrLang["MY_STATUS"] = "Mijn status";
$arrLang["MY_CALL"] ="Mijn oproep";
$arrLang["VIEW_PERSONS_BOLOS"] = "Bekijk Personen BOLO's";
$arrLang["VIEW_VEHICLE_BOLOS"] = "Bekijk voertuigBOLOs";
//** End MDT Console Strings *//

//** Begin Profile Console Strings **/
$arrLang["PASSWORD"] = "Wachtwoord";
$arrLang["CHANGE_PASSWORD"] = "Wachtwoord wijzigen";
$arrLang["MY_PRFILE"] ="Mijn profiel";
//** End Profile Console Strings *//
?>
