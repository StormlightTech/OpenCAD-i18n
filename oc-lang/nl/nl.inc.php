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
$arrLang['magic_quotes_gpc'] = "";
$arrLang['magic_quotes_runtime'] = "";
$arrLang['magic_quotes_sybase'] = "";
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
$arrLang['SESSION_KEY'] = '';

//** End Core Configuration Strings **//

//** Begin Police Strings **//
$arrLang['POLICE_NCIC'] = "Politie NCIC";
$arrLang['POLICE_NCIC_notes'] = "";
//** End Police Strings **//

//**  Begin Fire Strings **//
$arrLang['FIRE_PANIC'] = "";
$arrLang['FIRE_PANIC_notes'] = "";

$arrLang['FIRE_BOLO'] = "";
$arrLang['FIRE_BOLO_notes'] = "";

$arrLang['FIRE_NCIC_NAME'] = "";
$arrLang['FIRE_NCIC_NAME_notes'] = "";

$arrLang['FIRE_NCIC_PLATE'] = "";
$arrLang['FIRE_NCIC_PLATE_notes'] = "";
//**  End Fire Strings **//

//** Begin EMS Strings **//
$arrLang['EMS_PANIC'] = "";
$arrLang['EMS_PANIC_notes'] = "";

$arrLang['EMS_BOLO'] = "";
$arrLang['EMS_BOLO_notes'] = "";

$arrLang['EMS_NCIC_NAME'] = "";
$arrLang['EMS_NCIC_NAME_notes'] = "";

$arrLang['EMS_NCIC_PLATE'] = "";
$arrLang['EMS_NCIC_PLATE_notes'] = "";
//** End EMS Strings **//

//** Begin Roadside Assistance Strings **//
$arrLang['ROADSIDE_PANIC'] = "";
$arrLang['ROADSIDE_PANIC_notes'] = "";

$arrLang['ROADSIDE_BOLO'] = "";
$arrLang['ROADSIDE_BOLO_notes'] = "";

$arrLang['ROADSIDE_NCIC_NAME'] = "";
$arrLang['ROADSIDE_NCIC_NAME_notes'] = "";

$arrLang['ROADSIDE_NCIC_PLATE'] = "";
$arrLang['ROADSIDE_NCIC_PLATE_notes'] = "Toont/Verbergt NCIC functionaliteit op MDT console voor bijstandsverlening langs de weg. Als 'true' dan kan de wegenhulp kentekeninformatie opvragen uit de NCIC database zonder dat er een dispatcher nodig is. Anders zal de wegenhulp de aanwezigheid van een dispatcher nodig hebben om kentekeninformatie op te kunnen vragen.";

$arrLang['ROADSIDE_CALL_SELFASSIGN'] = "Wegenhulp call zelf toewijzen";
$arrLang['ROADSIDE_CALL_SELFASSIGN_notes'] = "";
//** End Roadside Assistance Strings **//

//** Begin Civilian Strings **//
$arrLang['CIV_WARRANT'] = "";
$arrLang['CIV_WARRANT_notes'] = "";

$arrLang['CIV_REG'] = "";
$arrLang['CIV_REG_notes'] = "";

$arrLang['CIV_LIMIT_MAX_IDENTITIES'] = "";
$arrLang['CIV_LIMIT_MAX_IDENTITIES_notes'] = "";

$arrLang['CIV_LIMIT_MAX_VEHICLES'] = "";
$arrLang['CIV_LIMIT_MAX_VEHICLES_notes'] = "";

$arrLang['CIV_LIMIT_MAX_WEAPONS'] = "";
$arrLang['CIV_LIMIT_MAX_WEAPONS_notes'] = "";
//** End Civilian Strings **//

//** Begin Administrative Strings**//
$arrLang['MODERATOR_APPROVE_USER'] = "";
$arrLang['MODERATOR_APPROVE_USER_notes'] = "";

$arrLang['MODERATOR_EDIT_USER'] = "";
$arrLang['MODERATOR_EDIT_USER_notes'] = "";

$arrLang['MODERATOR_DELETE_USER'] = "";
$arrLang['MODERATOR_DELETE_USER_notes'] = "";

$arrLang['MODERATOR_SUSPEND_WITHOUT_REASON'] = "";
$arrLang['MODERATOR_SUSPEND_WITHOUT_REASON_notes'] = "";

$arrLang['MODERATOR_SUSPEND_WITH_REASON'] = "";
$arrLang['MODERATOR_SUSPEND_WITH_REASON_notes'] = "";

$arrLang['MODERATOR_REACTIVATE_USER'] = "";
$arrLang['MODERATOR_REACTIVATE_USER_notes'] = "";

$arrLang['MODERATOR_REMOVE_GROUP'] = "";
$arrLang['MODERATOR_REMOVE_GROUP_notes'] = "";

$arrLang['MODERATOR_NCIC_EDITOR'] = "";
$arrLang['MODERATOR_NCIC_EDITOR_notes'] = "";

$arrLang['MODERATOR_DATA_MANAGER'] = "";
$arrLang['MODERATOR_DATA_MANAGER_notes'] = "";

$arrLang['MODERATOR_DATAMAN_CITATIONTYPES'] = "";
$arrLang['MODERATOR_DATAMAN_CITATIONTYPES_notes'] = "";

$arrLang['MODERATOR_DATAMAN_DEPARTMENTS'] = "";
$arrLang['MODERATOR_DATAMAN_DEPARTMENTS_notes'] = "";

$arrLang['MODERATOR_DATAMAN_INCIDENTTYPES'] = "";
$arrLang['MODERATOR_DATAMAN_INCIDENTTYPES_notes'] = "";

$arrLang['MODERATOR_DATAMAN_RADIOCODES'] = "";
$arrLang['MODERATOR_DATAMAN_RADIOCODES_notes'] = "";

$arrLang['MODERATOR_DATAMAN_STREETS'] = "";
$arrLang['MODERATOR_DATAMAN_STREETS_notes'] = "";

$arrLang['MODERATOR_DATAMAN_VECHILES'] = "";
$arrLang['MODERATOR_DATAMAN_VEHICLES_notes'] = "";

$arrLang['MODERATOR_DATAMAN_WARNINGTYPES'] = "";
$arrLang['MODERATOR_DATAMAN_WARNINGTYPES_notes'] = "";

$arrLang['MODERATOR_DATAMAN_WARRANTTYPES'] = "";
$arrLang['MODERATOR_DATAMAN_WARRANTTYPES_notes'] = "";

$arrLang['MODERATOR_DATAMAN_WEAPONS'] = "";
$arrLang['MODERATOR_DATAMAN_WEAPONS_notes'] = "";

$arrLang['MODERATOR_DATAMAN_IMPEXPRESET'] = "";
$arrLang['MODERATOR_DATAMAN_IMPEXPRESET_notes'] = "";
//** End Administrative Strings**//

//** Begin Extra Settings Strings **//
$arrLang['DEMO_MODE'] = "";
$arrLang['DEMO_MODE_notes'] = "";

$arrLang['USE_GRAVATAR'] = "";
$arrLang['USE_GRAVATAR_notes'] = "";
//** End Extra Settings Strings **//

//** Begin Common Global Strings **/
$arrLang['WELCOME'] = "";
$arrLang["GENERAL"] = "";
$arrLang["CAD_SYSTEM"] = "";
$arrLang["EDIT"] = "";
$arrLang["DELETE"] = "";
$arrLang["NAME"] = "";
$arrLang["EMAIL"] = "";
$arrLang["ROLE"] = "";
$arrLang["IDENTIFIER"] = "";
$arrLang["GROUPS"] = "";
$arrLang["ACTIONS"] = "";
$arrLang["NEXT"] = "";
$arrLang["PREVIOUS"] = "";
$arrLang["SEARCH"] =  "";
$arrLang["DASHBOARD"] =  "";
$arrLang["LOGOUT"] =  "";
$arrLang["NEED_HELP"] =  "";
$arrLang["FULLSCREEN"] =  "";
$arrLang["DOB"] = "";
$arrLang["ADDRESS"] = "";
$arrLang["GENDER"] = "";
$arrLang["RACE"] = "";
$arrLang["DL_STATUS"] = "";
$arrLang["HAIR_COLOR"] = "";
$arrLang["BUILD"] = "";
$arrLang["WEAPON_STATUS"] = "";
$arrLang["WEAPON_NAME"] = "";
$arrLang["WEAPON_TYPE"] ="";
$arrLang["WEAPON_NOTES"] ="";
$arrLang["DECEASED"] = "";
$arrLang["REG_PLATE"] = "";
$arrLang["VEHICLE_NOTES"] = "";
$arrLang["NOT_YOU"] = "";
$arrLang["ACTIVE_CALLS"] = "";
$arrLang["ACTIVE_BOLOS"] = "";
$arrLang["NCIC_NAME_LOOKUP"] = "";
$arrLang["NCIC_PLATE_LOOKUP"] = "";
$arrLang["NCIC_WEAPON_LOOKUP"] = "";
$arrLang["SEND"] = "";
$arrLang["MY_PROFILE"] = "";
//** End Common Global Strings */

//** Begin Administrator/Moderator Console Strings  **/
$arrLang["CAD_ADMINISTRATION"] = "";
$arrLang["STATISTICS_AT_A_GLANCE"] = "";
$arrLang["TOTAL_USERS"] = "";
$arrLang["ACEESS_REQUESTS"] = "";
$arrLang["THERE_ARE_CURRENTLY_NO_ACCESS_REQUESTS"] = "";
$arrLang["CAD_USER_MANAGEMENT"] = "";
$arrLang["ACCOUNT_MANAGEMENT"] = "";
$arrLang["SUSPEND_WITH_REASON"] = "";
$arrLang["SUSPEND_WITHOUT_REASON"] = "";
$arrLang["NCIC_EDITOR"] = "";
$arrLang["NCIC_NAMES_DB"] = "";
$arrLang["NCIC_NAMES_DB_none"] = "";
$arrLang["NCIC_VEHICLES_DB"] = "";
$arrLang["NCIC_VEHICLES_DB_none"] = "";
$arrLang["NCIC_WEAPONS_DB"] = "";
$arrLang["NCIC_WEAPONS_DB_none"] = "";
$arrLang["NCIC_WARNINGS_DB"] = "";
$arrLang["NCIC_WARNINGS_DB_none"] = "";
$arrLang["NCIC_CITATIONS_DB"] = "";
$arrLang["NCIC_CITATIONS_DB_none"] = "";
$arrLang["NCIC_ARRESTS_DB"] = "";
$arrLang["NCIC_ARRESTS_DB_none"] = "";
$arrLang["NCIC_WARRANTS_DB"] = "";
$arrLang["NCIC_WARRANTS_DB_none"] = "";
//** End Administrator/Moderator Console Strings  **/

//** Begin Civillian Console Strings **/
$arrLang["CIVILLIAN_CONSOLE"] = "";
$arrLang["MY_IDENTITIES"] = "";
$arrLang["MY_IDENTITIES_none"] = "";
$arrLang["MY_VEHICLES"] = "";
$arrLang["MY_VEHICLES_none"] = "";
$arrLang["MY_WEAPONS"] = "";
$arrLang["MY_WEAPONS_none"] = "";
$arrLang["MY_WARRANTS"] = "";
$arrLang["MY_WARRANTS_none"] = "";
$arrLang["CREATE_A_CALL"] = "";
$arrLang["ADD_NEW_IDENTITY"] = "";
$arrLang["Add_ADD_NEW_PLATE"] = "";
$arrLang["ADD_NEW_WEAPON"] = "";
$arrLang["CIVILLIAN_DASHBOARD"] = "";
$arrLang["VIEW_WARRANTS"] = "";
$arrLang["CREATE_WARRANT"] = "";
$arrLang["UPDATE"] = "";
//** End Civillian Console Strings **/

//** Begin CAD Console Strings **/
$arrLang["CAD_CONSOLE"] = "";
$arrLang["ACTIVE_DISPATCHERS"] = "";
$arrLang["ACTIVE_DISPATCHERS_none"] = "";
$arrLang["AVAILABLE_UNITS"] = "";
$arrLang["UNAVAILABLE_UNITS"] = "";
$arrLang["NEW_PERSONS_BOLO"] = "";
$arrLang["NEW_VEHICLE_BOLO"] = "";
$arrLang["NEW_CALL"] = "";
$arrLang["PANIC_BUTTON"] = "";
$arrLang["PRIORITY_TONE"] = "";
$arrLang["STOP_BORADCASTING_BUTTON"] = "";
$arrLang["STOPWATCH"] = "";
$arrLang["WARNINGS"] = "";
$arrLang["CITATIONS"] = "";
$arrLang["ARREST_REPORT"] = "";
$arrLang["WARRANTS"] = "";
//** End CAD Console Strings *//

//** Begin MDT Console Strings **/
$arrLang["MDT_CONSOLE"] = "";
$arrLang["MY_STATUS"] = "";
$arrLang["MY_CALL"] ="";
$arrLang["VIEW_PERSONS_BOLOS"] = "";
$arrLang["VIEW_VEHICLE_BOLOS"] = "";
//** End MDT Console Strings *//

//** Begin Profile Console Strings **/
$arrLang["PASSWORD"] = "";
$arrLang["CHANGE_PASSWORD"] = "";
$arrLang["MY_PRFILE"] ="";
//** End Profile Console Strings *//
?>  