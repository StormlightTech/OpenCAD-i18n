<?php
$arrLang = array();

$arrLang['alert_admin_email_wrong'] = "Admin email má špatný formát!";
$arrLang['alert_min_version_db'] = "Tento program vyžaduje alespoň verzi _DB_VERSION_ of closing DB_ installed (aktuální verze je _DB_CURR_VERSION_).";
$arrLang['alert_min_version_php'] = "Tento program vyžaduje alespoň verzi ztvárňující PHP_VERSION_ nainstalované PHP (aktuální verze je _PHP_CURR_VERSION_).";
$arrLang['alert_directory_not_writable'] = "Adresář <b>_FILE_DIRECTORY_</b> není zapisovatelný! <br />Předtím, než spustíte instalaci, musíte udělit oprávnění pro zápis (přístupová práva 0755 nebo 777, v závislosti na nastavení systému) do tohoto adresáře definovaného v EI_CONFIG_FILE_DIRECTORY!";
$arrLang['alert_extension_not_installed'] = "Požadované rozšíření pdo_mysql není na Vašem serveru nainstalováno, nemůžete pokračovat v instalaci.";
$arrLang['alert_unable_to_install'] = "Tuto aplikaci nelze nainstalovat, protože aplikace se stejnou identitou je již nainstalována. <br>Můžete pouze <b>aktualizovat</b> nebo <b>odinstalovat</b> . Před pokračováním se ujistěte, že máte zálohu databáze.";
$arrLang['alert_required_fields'] = "Požadujeme, aby byly položky označené hvězdičkou.";
$arrLang['alert_db_host_empty'] = "Nahrávejte prosím znovu.";
$arrLang['alert_db_name_empty'] = "Název z databáze nemůže být prázdný!";
$arrLang['alert_db_username_empty'] = "Database uživatelské jméno nemůže být prázdné!";
$arrLang['alert_db_password_empty'] = "Databáze heslo nemůže být prázdné!";
$arrLang['alert_admin_name_empty'] = "Uživatelské jméno nemůže být prázdné!";
$arrLang['alert_admin_identifier_empty'] = "Nápad nemůže být prázdný!";
$arrLang['alert_admin_password_empty'] = "Správce hesla nemůže být prázdná!";
$arrLang['alert_wrong_testing_parameters'] = "Testovací parametry jsou chybné, zadajte prosím platné parametry.";
$arrLang['alert_remove_files'] = "Z bezpečnostních důvodů odeberte složku <b>oc-install /</b> ze svého serveru!";
$arrLang['alert_wrong_parameter_passed'] = "Nesalo se správně, prosím, zpět do předchozího kroku a zkuste to znovu.";

$arrLang['error_asp_tags'] = "Tato instalace vyžaduje, aby bylo zapnuto <b>nastavení ASP tagů</b>.";
$arrLang['error_can_not_open_config_file'] = "Database byl úspěšně vytvořen!Cannot open configuration file _CONFIG_FILE_PATH_ to save info.";
$arrLang['error_can_not_read_file'] = "Soubor <b>_SQL_DUMP_FILE_</b>nelze přečíst! Zkontrolujte prosím, zda soubor existuje.";
$arrLang['error_check_db_exists'] = "Chyba připojení databáze! Zkontrolujte, zda vaše databáze existuje a zda je povolen přístup pro uživatele <b>_DATABASE_USERNAME_</b>._ERROR_<br />";
$arrLang['error_check_db_connection'] = "Chyba připojení databáze! Zkontrolujte prosím parametry připojení._ERROR_<br />";
$arrLang['error_pdo_support'] = "Tato instalace vyžaduje nainstalované <b>rozšíření PDO</b>.";
$arrLang['error_sql_executing'] = "Chyba chyb v zadání služby SQL! Prosím, Turn debug mód On a Pozorně zkontrolujte syntaxi souboru SQL dump.";
$arrLang['error_server_requirements'] = "Tato instalace vyžaduje, aby se zapnulo nastavení SETTINGS_NAME_.";
$arrLang['error_vd_support'] = "Tato instalace vyžaduje Virtual Directory podporu turned ON.";

$arrLang['admin_access_data'] = "Informace o účtu správce";
$arrLang['admin_access_data_descr'] = "(Potřebujete, abyste se dostali do chráněné administrace)";
$arrLang['admin_email'] = "E-mailem";
$arrLang['admin_email_info'] = "E-mail správce, který bude použit pro přihlášení k tomuto účtu.

Další účty správce může být dotován později v konzole pro správu Správa uživatelů";
$arrLang['admin_name'] = "název";
$arrLang['admin_login_info'] = "Vaše jméno podle vašich komunitních zásad a postupů. To lze později upravit v případě potřeby.";
$arrLang['admin_identifier'] = "Identifier";
$arrLang['admin_identifier_info'] = "Váš identifikátor. IE: 1D-01 Poznámka. Záleží na vaší komunitě";
$arrLang['admin_password'] = "Heslo";
$arrLang['admin_password_info'] = "Doporučujeme, aby vaše heslo nebylo slovo, které můžete najít ve slovníku, zahrnuje jak kapitál, tak nižší case dopisy, a obsahuje alespoň jeden zvláštní znak (1-9, !, *, _, atd.).";
$arrLang['administrator_account'] = "Účetní správce";
$arrLang['options_page'] = "Nastavení systému";
$arrLang['administrator_account_skipping'] = "Skipping (Admin Account not required)";
$arrLang['asp_tags'] = "Asp Tags";
$arrLang['back'] = "Návrat";
$arrLang['build_date'] = "Sestavení dat";
$arrLang['cancel_installation'] = "Montáž rakoviny";
$arrLang['click_start_button'] = "Klepněte na tlačítko Start pokračovat";
$arrLang['click_to_start_installation'] = "Klikněte na start instalace";
$arrLang['checked'] = "Kontrola";
$arrLang['complete'] = "Dokončení";
$arrLang['complete_installation'] = "Úplná instalace";
$arrLang['completed'] = "Dokončené";
$arrLang['continue'] = "Pokračujte";
$arrLang['continue_installation'] = "Pokračujte v instalaci";
$arrLang['database_extension'] = "Rozšiřování dat";
$arrLang['database_host'] = "Database Host";
$arrLang['database_host_info'] = "Název hostitele nebo IP adresa databázového serveru. Databázový server může být ve formě názvu hostitele (a / nebo adresy portu), například db1.myserver.com nebo localhost: 5432, nebo jako adresy IP, například 192.168.0.1.";
$arrLang['database_import'] = "Dovoz dat";
$arrLang['database_import_error'] = "Dovoz dat (chyba)";
$arrLang['database_name'] = "Jméno databse";
$arrLang['database_name_info'] = "Database Name: The database used to hold the data.";
$arrLang['database_username'] = "Obyčejné uživatelské prostředí";
$arrLang['database_username_info'] = "Database uživatelské jméno, které používá pro připojení k databázovému serveru.";
$arrLang['database_password'] = "Database Password";
$arrLang['database_password_info'] = "Database heslo, používá se spolu s uživatelským názvem, které tvoří uživatelský účet v databázi.";
$arrLang['database_prefix'] = "Prefix dat";
$arrLang['database_prefix_info'] = "Database prefix.Used to set the unique prefix for database tables and prevent one type of data from interfering with another.";
$arrLang['database_settings'] = "Nastavení datů";
$arrLang['directories_and_files'] = "Adresa a soubory";
$arrLang['disabled'] = "tělesně postižené";
$arrLang['enabled'] = "Umožnit";
$arrLang['error'] = "Chyba";
$arrLang['extensions'] = "Rozšiřování";
$arrLang['getting_system_info'] = "Jak zavést regulaci systému";
$arrLang['file_successfully_rewritten'] = "Uzavíráte CONFIG_FILE_ soubor byl úspěšně přepsán a aktualizován.";
$arrLang['file_successfully_deleted'] = "Uzavřený soubor CONFIG_FILE_ byl úspěšně smazán a databáze odstraněna.";
$arrLang['file_successfully_created'] = "Uzavřený soubor CONFIG_FILE_.";
$arrLang['failed'] = "selhal";
$arrLang['folder_paths'] = "Krokové cesty";
$arrLang['follow_the_wizard'] = "Postupujte podle <b>průvodce</b> a nainstalujte program";
$arrLang['installed'] = "nainstalován";
$arrLang['installation_complete'] = "Dokončené instalace!";
$arrLang['installation_guide'] = "Průvodce instalací";
$arrLang['installation_type'] = "Typ instalace";
$arrLang['language'] = "Jazyk";
$arrLang['license'] = "Licence";
$arrLang['loading'] = "Nařikování";
$arrLang['mbstring_support'] = "Podpora pro multibyte";
$arrLang['magic_quotes_gpc'] = "Magic Quotes for GPC (Get/Post/Cookie)";
$arrLang['magic_quotes_runtime'] = "Magic Quotes Runtime";
$arrLang['magic_quotes_sybase'] = "Magické seznamy jsou v Sybase-stylu";
$arrLang['mode'] = "Mode";
$arrLang['modes'] = "Modely";
$arrLang['new_installation_of'] = "Nová instalace";
$arrLang['new'] = "Nový";
$arrLang['no'] = "Ne";
$arrLang['no_writable'] = "žádný psací stůl";
$arrLang['not_installed'] = "není nainstalován";
$arrLang['off'] = "Off";
$arrLang['ok'] = "Dobře";
$arrLang['on'] = "Na";
$arrLang['passed'] = "Past";
$arrLang['password_encryption'] = "Prosazování hesla";
$arrLang['perform_manual_installation'] = "Proveďte <b>Manuál</b> Instalace";
$arrLang['pdo_support'] = "Podpora soukromého sektoru";
$arrLang['php_version'] = "Verze PHP";
$arrLang['proceed_to_login_page'] = "Procházet přihlášením";
$arrLang['ready_to_install'] = "Přečtěte si instalaci";
$arrLang['remove_configuration_button'] = "Odstranit konfiguraci a začít";
$arrLang['required_php_settings'] = "Požadované nastavení PHP";
$arrLang['safe_mode'] = "Bezpečný model";
$arrLang['select_installation_language'] = "Vyberte instalační jazyk";
$arrLang['select_installation_type'] = "Vyberte typy instalace";
$arrLang['sendmail_from'] = "Odesílání";
$arrLang['sendmail_path'] = "Pošlete cestu";
$arrLang['server_api'] = "Server API";
$arrLang['server_requirements'] = "Požadavky na servery";
$arrLang['session_support'] = "Podpora září";
$arrLang['short_open_tag'] = "Krátký otevřený Tag";
$arrLang['smtp'] = "SMTP";
$arrLang['smtp_port'] = "SMTP Port";
$arrLang['start'] = "Začněme";
$arrLang['start_all_over'] = "Začněme všichni";
$arrLang['start_all_over_text'] = "Chcete-li tuto instalaci z nějakého důvodu odstranit, můžete donutit instalační program odebrat aktuální konfiguraci a začít znovu. <br><b>VAROVÁNÍ</b>: Chcete-li odstranit všechny provedené změny, musíte ručně zrušit instalaci databáze.";
$arrLang['step_1_of'] = "1 z 11:";
$arrLang['step_2_of'] = "2 z 11:";
$arrLang['step_3_of'] = "3 z 11:";
$arrLang['step_4_of'] = "Čtvrtý z 11:";
$arrLang['step_5_of'] = "5 z 11:";
$arrLang['step_6_of'] = "6 z 11:";
$arrLang['step_7_of'] = "7 z 11:";
$arrLang['step_8_of'] = "Krok 11:";
$arrLang['step_9_of'] = "Krok 11:";
$arrLang['step_10_of'] = "Krok 10 z 11:";
$arrLang['step_11_of'] = "Jedenáctý krok";
$arrLang['sub_title_message'] = "Tímto průvodcem Vás provede celý proces instalace.";
$arrLang['system'] = "Systém";
$arrLang['system_architecture'] = "Architektura systému";
$arrLang['test_connection'] = "Testové spojení";
$arrLang['test_database_connection'] = "Test database connection";
$arrLang['unknown'] = "Neznáme";
$arrLang['uninstall'] = "Odinstalujte";
$arrLang['uninstallation_completed'] = "Odinstalování kompletně!";
$arrLang['update'] = "Aktualizace";
$arrLang['updating_completed'] = "Aktualizace dokončena!";
$arrLang['virtual_directory_support'] = "Podpora virtuálního ředitelství";
$arrLang['we_are_ready_to_installation'] = "Nyní jsme připraveni pokračovat v instalaci";
$arrLang['we_are_ready_to_installation_text'] = "";
$arrLang['writable'] = "Omyl";

$arrLang['core_configuration'] = "Korunní konfigurace";
$arrLang['department_configuration'] = 'Oddělení konfigurace';
$arrLang['civilian_configuration'] = 'Civilní konfigurace'; 
$arrLang['administrative_configuration'] = 'Správní konfigurace';
$arrLang['extra_settings'] = 'Přistoupení';

//** Begin Core Configuration Strings **//
$arrLang['COMMUNITY_NAME'] = "Jméno Společenství";
$arrLang['COMMUNITY_NAME_notes'] = "Nastavte jméno komunity";
$arrLang['COMMUNITY_NAME_alert'] = "Jméno Společenství nemůže být prázdné, prosím, najděte znovu.";

$arrLang['BASE_URL'] = "Application URL";
$arrLang['BASE_URL_notes'] = "Adresa URL vaší instalace OpenCADu, pokud je použita, je to podadresář
            Platné Příklady zahrnují:
            example.com - Kořenová doména, žádný podadresář
            subdomena.example.com - subdoména, žádný podadresář
            subdoména.example.com/subdir - subdoména 3 s podadresářem
            example.com/subdir - kořenová doména s podadresářem
            Týmy OpenCADu nedoporučují zahrnout koncovku / na některý z výše uvedených příkladů.
            To nebude nutně rozbít nic, ale jen dělá odkaz vypadat podivně s dvěma sekl, když to není potřeba.";
$arrLang['BASE_URL_alert'] = "BASE_URL nemůže být prázdný!";

$arrLang['CAD_FROM_EMAIL'] = 'CAD od e-mailu';
$arrLang['CAD_FROM_EMAIL_notes'] = 'E-mail, ze kterého by se vám měly zobrazovat informace od CAD, pochází.

Příklad: cad@community.com
';

$arrLang['CAD_TO_EMAIL'] = 'CAD na e-mail';
$arrLang['CAD_TO_EMAIL_notes'] = 'E-mail, ze kterého by se vám měly zobrazovat informace od CAD, pochází.

Příklad: cad@community.com
';

$arrLang['AUTH_KEY'] = 'Klíč k ověřování';
$arrLang['AUTH_SALT'] = 'Kontrolní prodej';
$arrLang['SECURE_AUTH_KEY'] = 'Bezpečný klíč k ověřování';
$arrLang['SECURE_AUTH_SALT'] = 'Bezpečný licenční prodej';
$arrLang['LOGGED_IN_KEY'] = 'Klíč ztracený v aktivech';
$arrLang['LOGGED_IN_SALT'] = 'Vložený-In Salt';
$arrLang['NONCE_KEY'] = 'Nonce Key';
$arrLang['NONCE_SALT'] = 'Nonce Salt';
$arrLang['SESSION_KEY'] = 'Klíč k ústupu';

//** End Core Configuration Strings **//

//** Begin Police Strings **//
$arrLang['POLICE_NCIC'] = "";
$arrLang['POLICE_NCIC_notes'] = "Zobrazí / skryje funkce NCIC na konzole MDT. Pokud je „true“, pak bude LEO schopen používat funkce NCIC bez potřeby dispečera, jinak pokud bude „flase“, pak LEO bude vyžadovat přítomnost dispečerů pro využití funkce NCIC.";
//** End Police Strings **//

//**  Begin Fire Strings **//
$arrLang['FIRE_PANIC'] = "Chřipková panika";
$arrLang['FIRE_PANIC_notes'] = "If 'true' you will be able to use the Panic button, else if 'false' then Fire personnel will not be able to use the Panic button.";

$arrLang['FIRE_BOLO'] = "Fire BOLO";
$arrLang['FIRE_BOLO_notes'] = "If 'true' then Fire personnel will be able to view the BOLO board.";

$arrLang['FIRE_NCIC_NAME'] = "Název Fire NCIC";
$arrLang['FIRE_NCIC_NAME_notes'] = "If 'true' then Fire personnel will be able to use the NCIC name lookup.";

$arrLang['FIRE_NCIC_PLATE'] = "Fire NCIC Plate";
$arrLang['FIRE_NCIC_PLATE_notes'] = "If 'true' then Fire personnel will be able to use the NCIC plate lookup function, if 'false' then Fire personnel will not be able to use the NICI plate function.";
//**  End Fire Strings **//

//** Begin EMS Strings **//
$arrLang['EMS_PANIC'] = "Panika EMS";
$arrLang['EMS_PANIC_notes'] = "If 'true' then Fire personnel will be able to use the Panic button, else if 'false' then the EMS personnel will not be able to use the Panic button.";

$arrLang['EMS_BOLO'] = "EMS BOLO";
$arrLang['EMS_BOLO_notes'] = "Zobrazí / skryje funkce Panic na konzole MDT pro EMS. Pokud je „pravdivý“, personál Fireu si bude moci prohlédnout desku BOLO, jinak je-li „false“, personál EMS nebude schopen zobrazit tabulku BOLO";

$arrLang['EMS_NCIC_NAME'] = "Název EMS NCIC";
$arrLang['EMS_NCIC_NAME_notes'] = "Zobrazí / skryje funkce Panic na konzole MDT pro EMS. Pokud je „true“, personál Fire bude schopen použít vyhledávání názvů NCIC, jinak pokud „false“ nebude personál EMS schopen používat vyhledávání názvů NCIC";

$arrLang['EMS_NCIC_PLATE'] = "EMS NCIC Plate";
$arrLang['EMS_NCIC_PLATE_notes'] = "Zobrazí / skryje funkce Panic na konzole MDT pro EMS. Pokud je „true“, pak bude personál Fire schopen použít funkci vyhledávání NCIC desek, jinak pokud „false“ nebude personál EMS schopen používat funkci vyhledávání NCIC desek.";
//** End EMS Strings **//

//** Begin Roadside Assistance Strings **//
$arrLang['ROADSIDE_PANIC'] = "Panika na okraji";
$arrLang['ROADSIDE_PANIC_notes'] = "Zobrazí/Skrývá funkce na konzoli MDT pro Roadside Assistance.";

$arrLang['ROADSIDE_BOLO'] = "Roadside BOLO";
$arrLang['ROADSIDE_BOLO_notes'] = "Zobrazí/Skrývá funkce na konzoli MDT pro Roadside Assistance.";

$arrLang['ROADSIDE_NCIC_NAME'] = "Roadside NCIC Name";
$arrLang['ROADSIDE_NCIC_NAME_notes'] = "Pokud \"pravda\", potom RAO bude moci použít dotaz NCIC bez nutnosti odeslání, pokud \"falešná\" RAO bude vyžadovat přítomnost odesílatele k použití NCIC query.";

$arrLang['ROADSIDE_NCIC_PLATE'] = "Roadside NCIC Plate";
$arrLang['ROADSIDE_NCIC_PLATE_notes'] = "Pokud \"pravda\", potom RAO bude moci použít dotaz NCIC bez nutnosti odeslání, pokud \"falešná\" RAO bude vyžadovat přítomnost odesílatele k použití NCIC query.";

$arrLang['ROADSIDE_CALL_SELFASSIGN'] = "Roadside Call Self Assign";
$arrLang['ROADSIDE_CALL_SELFASSIGN_notes'] = "Pokud 'pravda' pak RAO bude moci použít NCIC desku bez potřeby odesílatele, jinak pokud 'false' pak RAO bude vyžadovat přítomnost vysílače pro použití NCIC plate dotaz.";
//** End Roadside Assistance Strings **//

//** Begin Civilian Strings **//
$arrLang['CIV_WARRANT'] = "Civilní příkaz";
$arrLang['CIV_WARRANT_notes'] = "Povolit / Zakázat Civiliianům spravovat své záruky. Pokud je nastaveno na „true“, budou moci Civs smazat warranty ze svého profilu, jinak pokud budou nastaveny na „false“, Civs nebude mít možnost odebrat záruky.";

$arrLang['CIV_REG'] = "Instant civilního režimu";
$arrLang['CIV_REG_notes'] = "8 jednacího řádu.)";

$arrLang['CIV_LIMIT_MAX_IDENTITIES'] = "Civilistické Maximální identity";
$arrLang['CIV_LIMIT_MAX_IDENTITIES_notes'] = "Pokud je CIV_LIMIT_MAX '0' pak budou civilisté schopni vytvořit neomezené identity, jinak, pokud CIV_LIMIT_MAX je hodnota jiná než '0', pak bude limitovat maximální počet možných identit na tuto hodnotu.";

$arrLang['CIV_LIMIT_MAX_VEHICLES'] = "Civilistické maximální zbraně";
$arrLang['CIV_LIMIT_MAX_VEHICLES_notes'] = "Pokud je CIV_LIMIT_MAX_VEHICLES '0' bude civilní moci vytvořit neomezená vozidla, jinak pokud CIV_LIMIT_MAX_VEHICLES je hodnota jiná než '0', pak maximální počet možných vozidel na tuto hodnotu limituje maximální počet vozidel.";

$arrLang['CIV_LIMIT_MAX_WEAPONS'] = "Civilní maximální zbraně";
$arrLang['CIV_LIMIT_MAX_WEAPONS_notes'] = "Pokud je CIV_LIMIT_MAX_WEAPONS '0' bude civilní schopen vytvořit neomezené zbraně, jinak je CIV_LIMIT_MAX_WEAPONS hodnotou jiným než '0' pak maximální počet možných zbraní pro tuto hodnotu limituje maximální počet zbraní.";
//** End Civilian Strings **//

//** Begin Administrative Strings**//
$arrLang['MODERATOR_APPROVE_USER'] = "Moderator Approve User";
$arrLang['MODERATOR_APPROVE_USER_notes'] = "Pokud \"pravda\" pak budou Moderatoři moci schválit nové uživatelské požadavky, jinak, pokud \"falešné\" budou moci model schválit nové uživatelské požadavky.";

$arrLang['MODERATOR_EDIT_USER'] = "Moderator editor uživatele";
$arrLang['MODERATOR_EDIT_USER_notes'] = "Pokud \"pravda\" pak budou moci editovat profily uživatelů, pokud \"falešné\" pak Moderatory nebudou moci upravovat profil uživatelů, včetně jména, elektronické, identifikační a úlohy.";

$arrLang['MODERATOR_DELETE_USER'] = "Moderator vymazat uživatele";
$arrLang['MODERATOR_DELETE_USER_notes'] = "Pokud \"pravda\" pak budou moci zmást uživatele, jinak pokud \"falešné\" model nebude schopen smazat uživatele.";

$arrLang['MODERATOR_SUSPEND_WITHOUT_REASON'] = "Moderator Suspend bez rozumu";
$arrLang['MODERATOR_SUSPEND_WITHOUT_REASON_notes'] = "Pokud \"pravda\" pak budou moci komunisté bez důvodu pozastavit uživatele, jinak pokud \"falešní\" model nebude moci uživatele bez důvodu pozastavit.";

$arrLang['MODERATOR_SUSPEND_WITH_REASON'] = "Moderator Suspend s rozumem";
$arrLang['MODERATOR_SUSPEND_WITH_REASON_notes'] = "Pokud \"pravda\" pak budou moci komunisté své uživatele z důvodu pozastavit, pokud \"falešní\" model nebude moci uživatele z důvodu pozastavit.";

$arrLang['MODERATOR_REACTIVATE_USER'] = "Moderator reaktivuje uživatele";
$arrLang['MODERATOR_REACTIVATE_USER_notes'] = "Pokud \"pravda\" pak budou moci umírněnci ostatní uživatele zlehčovat, pokud \"falešné\" model nebude schopen aktivovat uživatele.";

$arrLang['MODERATOR_REMOVE_GROUP'] = "Skupinu umírněnců Odstraňte";
$arrLang['MODERATOR_REMOVE_GROUP_notes'] = "Pokud \"pravda\" pak budou moci Moderatoři odstranit skupiny uživatelů, jinak nebudou moci \"falešné\" vzorce odstranit skupiny uživatelů.";

$arrLang['MODERATOR_NCIC_EDITOR'] = "Moderator NCIC Editor";
$arrLang['MODERATOR_NCIC_EDITOR_notes'] = "Pokud \"pravda\" pak budou mít Moderatory přístup k editoru NCIC, jinak se \"falešné\" Moderatory nebudou moci dostat k editoru NCCIC.";

$arrLang['MODERATOR_DATA_MANAGER'] = "Moderator Data manažer";
$arrLang['MODERATOR_DATA_MANAGER_notes'] = "Pokud \"pravda\" pak budou mít Moderatoři přístup k datovému správci Game, jinak pokud \"falešné\" budou mít Moderatoři přístup k správci her.";

$arrLang['MODERATOR_DATAMAN_CITATIONTYPES'] = "Editor model Citation";
$arrLang['MODERATOR_DATAMAN_CITATIONTYPES_notes'] = "Pokud \"pravda\" pak budou mít Moderatoři přístup k modulu Citation Types Manager z Game Data Manager, jinak, pokud \"falešné\" budou mít přístup k modelům.";

$arrLang['MODERATOR_DATAMAN_DEPARTMENTS'] = "Editor modulů pro blokování";
$arrLang['MODERATOR_DATAMAN_DEPARTMENTS_notes'] = "Pokud \"pravda\" pak budou mít Moderatoři přístup k modulu pro Departments Manager pro data Game Manager, jinak, pokud \"falešné\" budou mít přístup k modelům.";

$arrLang['MODERATOR_DATAMAN_INCIDENTTYPES'] = "Editor typu Moderator";
$arrLang['MODERATOR_DATAMAN_INCIDENTTYPES_notes'] = "Pokud 'pravda' pak budou mít Moderatory přístup k řídícímu modulu typu Incident z správce her, jinak, pokud 'false' bude model odepřen.";

$arrLang['MODERATOR_DATAMAN_RADIOCODES'] = "Moderator Radio Codes Editor";
$arrLang['MODERATOR_DATAMAN_RADIOCODES_notes'] = "Pokud 'pravda' pak budou mít Moderatory přístup k modulu Radio Codes Manager z Game Data Manager, jinak, pokud 'false' pak bude model bude odepřen přístup.";

$arrLang['MODERATOR_DATAMAN_STREETS'] = "Moderator utlačuje Editor";
$arrLang['MODERATOR_DATAMAN_STREETS_notes'] = "Pokud \"pravda\" pak budou mít Moderatoři přístup k modulu Streets Manager z Game Data Manager, jinak, pokud \"falešné\" budou mít přístup k modelům.";

$arrLang['MODERATOR_DATAMAN_VECHILES'] = "";
$arrLang['MODERATOR_DATAMAN_VEHICLES_notes'] = "Pokud \"pravda\" pak budou mít Moderatoři přístup k modulu pro vozíky Game Data Manager, jinak, pokud \"falešné\" budou mít přístup k modelům.";

$arrLang['MODERATOR_DATAMAN_WARNINGTYPES'] = "Editor typu Moderator varování";
$arrLang['MODERATOR_DATAMAN_WARNINGTYPES_notes'] = "Pokud \"pravda\" pak budou mít Moderatory přístup k modulu Správce dat Game, jinak pokud \"falešné\" budou mít přístup k modelům.";

$arrLang['MODERATOR_DATAMAN_WARRANTTYPES'] = "Editor typu Moderator";
$arrLang['MODERATOR_DATAMAN_WARRANTTYPES_notes'] = "Pokud \"pravda\" pak budou mít Moderatoři přístup k Warrantovi řídícímu modulu her, jinak pokud \"falešné\" budou mít přístup k \"systémům\".";

$arrLang['MODERATOR_DATAMAN_WEAPONS'] = "Editor model zbraní";
$arrLang['MODERATOR_DATAMAN_WEAPONS_notes'] = "Pokud \"pravda\" pak budou mít Moderatoři přístup k modulu Weapons Manager z Game Data Manager, jinak, pokud \"falešné\" budou mít přístup k modelům.";

$arrLang['MODERATOR_DATAMAN_IMPEXPRESET'] = "Vývoj/export";
$arrLang['MODERATOR_DATAMAN_IMPEXPRESET_notes'] = "Pokud 'pravda' pak budou mít Moderatory přístup k modulu Import/Export/Reset z správce her, jinak, pokud \"falešné\" budou Moderatoři odepřeni přístup.";
//** End Administrative Strings**//

//** Begin Extra Settings Strings **//
$arrLang['DEMO_MODE'] = "Demo model";
$arrLang['DEMO_MODE_notes'] = "„true“ pak budou uzamčeny různé funkce správy uživatelů OpenCADu, jinak bude k dispozici plná funkčnost OpenCADu.";

$arrLang['USE_GRAVATAR'] = "Gravatar";
$arrLang['USE_GRAVATAR_notes'] = "OpenCAD dynamicky retrieve your avatar from {@link Gravatar http://en.gravatar.com/} if you have an account.";
//** End Extra Settings Strings **//

//** Begin Common Global Strings **/
$arrLang['WELCOME'] = "Přivítání";
$arrLang["GENERAL"] = "Generál";
$arrLang["CAD_SYSTEM"] = "Systém CAD";
$arrLang["EDIT"] = "Upravit";
$arrLang["DELETE"] = "Odstranit";
$arrLang["NAME"] = "Jméno";
$arrLang["EMAIL"] = "E-Mail";
$arrLang["ROLE"] = "Role";
$arrLang["IDENTIFIER"] = "Identifier";
$arrLang["GROUPS"] = "Skupiny";
$arrLang["ACTIONS"] = "Akce";
$arrLang["NEXT"] = "Příště";
$arrLang["PREVIOUS"] = "Předchozí";
$arrLang["SEARCH"] =  "Hledat";
$arrLang["DASHBOARD"] =  "Přehled";
$arrLang["LOGOUT"] =  "Logout";
$arrLang["NEED_HELP"] =  "Potřebujte pomoc?";
$arrLang["FULLSCREEN"] =  "Úplná obrazovka";
$arrLang["DOB"] = "DOB";
$arrLang["ADDRESS"] = "Adresa";
$arrLang["GENDER"] = "Rod";
$arrLang["RACE"] = "Rasa";
$arrLang["DL_STATUS"] = "DL postavení";
$arrLang["HAIR_COLOR"] = "Barva vlasů";
$arrLang["BUILD"] = "Sestavení";
$arrLang["WEAPON_STATUS"] = "Stav zbraní";
$arrLang["WEAPON_NAME"] = "Weapon Name";
$arrLang["WEAPON_TYPE"] ="Typ zbraní";
$arrLang["WEAPON_NOTES"] ="Vzpomínky na Weapon";
$arrLang["DECEASED"] = "Ustanoveno";
$arrLang["REG_PLATE"] = "Reg. Plate";
$arrLang["VEHICLE_NOTES"] = "Konkrétní poznámky";
$arrLang["NOT_YOU"] = "Vy ne?";
$arrLang["ACTIVE_CALLS"] = "Aktivní výzvy";
$arrLang["ACTIVE_BOLOS"] = "Aktivní BOLO";
$arrLang["NCIC_NAME_LOOKUP"] = "Pohled na název NCIC";
$arrLang["NCIC_PLATE_LOOKUP"] = "Hledání NCIC Plate";
$arrLang["NCIC_WEAPON_LOOKUP"] = "NCIC Weapon";
$arrLang["SEND"] = "Pošlete";
$arrLang["MY_PROFILE"] = "Můj profil";
//** End Common Global Strings */

//** Begin Administrator/Moderator Console Strings  **/
$arrLang["CAD_ADMINISTRATION"] = "Vláda CAD";
$arrLang["STATISTICS_AT_A_GLANCE"] = "Statistika na pohled";
$arrLang["TOTAL_USERS"] = "Celní uživatelé";
$arrLang["ACEESS_REQUESTS"] = "Přístup k požadavkům";
$arrLang["THERE_ARE_CURRENTLY_NO_ACCESS_REQUESTS"] = "V současnosti neexistují žádné žádosti o přístup.";
$arrLang["CAD_USER_MANAGEMENT"] = "CAD User Management";
$arrLang["ACCOUNT_MANAGEMENT"] = "Správa účtu";
$arrLang["SUSPEND_WITH_REASON"] = "Průběh s rozumem";
$arrLang["SUSPEND_WITHOUT_REASON"] = "Průzkum bez rozumu";
$arrLang["NCIC_EDITOR"] = "NCIC Editor";
$arrLang["NCIC_NAMES_DB"] = "";
$arrLang["NCIC_NAMES_DB_none"] = "";
$arrLang["NCIC_VEHICLES_DB"] = "NCIC Vehicles Database";
$arrLang["NCIC_VEHICLES_DB_none"] = "V databázi NCIC Vehicles nenajdete žádné výsledky.";
$arrLang["NCIC_WEAPONS_DB"] = "NCIC Weapons Database";
$arrLang["NCIC_WEAPONS_DB_none"] = "Žádné výsledky nalezeny v databázi NCIC Weapons.";
$arrLang["NCIC_WARNINGS_DB"] = "NCIC Warnings Database";
$arrLang["NCIC_WARNINGS_DB_none"] = "Žádné výsledky nalezeny v databázi NCIC Weapons.";
$arrLang["NCIC_CITATIONS_DB"] = "NCIC Citations Database.";
$arrLang["NCIC_CITATIONS_DB_none"] = "Žádné výsledky nenalezly v databázi NCIC Citations.";
$arrLang["NCIC_ARRESTS_DB"] = "NCIC Arrests Database";
$arrLang["NCIC_ARRESTS_DB_none"] = "Žádné výsledky nalezeny v databázi NCIC Arrests.";
$arrLang["NCIC_WARRANTS_DB"] = "Datababáze NCIC Warrants";
$arrLang["NCIC_WARRANTS_DB_none"] = "Žádné výsledky nalezeny v databázi NCIC Warrants";
//** End Administrator/Moderator Console Strings  **/

//** Begin Civillian Console Strings **/
$arrLang["CIVILLIAN_CONSOLE"] = "Civillská konzole";
$arrLang["MY_IDENTITIES"] = "Mé identity";
$arrLang["MY_IDENTITIES_none"] = "Žádné výsledky nalezeny v databázi identit.";
$arrLang["MY_VEHICLES"] = "Moje vozidla";
$arrLang["MY_VEHICLES_none"] = "Žádné výsledky nenalezly v databázi vozidel.";
$arrLang["MY_WEAPONS"] = "Moje zbraň";
$arrLang["MY_WEAPONS_none"] = "V databázi zbraní nenalezly žádné výsledky.";
$arrLang["MY_WARRANTS"] = "Můj zatýkací rozkaz";
$arrLang["MY_WARRANTS_none"] = "Žádné výsledky nalezeny v databázi záruk.";
$arrLang["CREATE_A_CALL"] = "Vytvořit výzvu";
$arrLang["ADD_NEW_IDENTITY"] = "Přidat novou identitu";
$arrLang["Add_ADD_NEW_PLATE"] = "";
$arrLang["ADD_NEW_WEAPON"] = "Přidat nový zbraň";
$arrLang["CIVILLIAN_DASHBOARD"] = "Civillský Dashboard";
$arrLang["VIEW_WARRANTS"] = "";
$arrLang["CREATE_WARRANT"] = "Vytvořit zatýkací rozkaz";
$arrLang["UPDATE"] = "Aktualizace";
//** End Civillian Console Strings **/

//** Begin CAD Console Strings **/
$arrLang["CAD_CONSOLE"] = "Konole CAD";
$arrLang["ACTIVE_DISPATCHERS"] = "Aktivní úlevy";
$arrLang["ACTIVE_DISPATCHERS_none"] = "V současnosti nejsou k dispozici odesílatelé.";
$arrLang["AVAILABLE_UNITS"] = "Dostupné jednotky";
$arrLang["UNAVAILABLE_UNITS"] = "Neomezené bloky";
$arrLang["NEW_PERSONS_BOLO"] = "Nové osobnosti BOLO";
$arrLang["NEW_VEHICLE_BOLO"] = "Nový automobilový BOLO";
$arrLang["NEW_CALL"] = "Nový Call";
$arrLang["PANIC_BUTTON"] = "Panická zeď";
$arrLang["PRIORITY_TONE"] = "PRIORITY_TONE";
$arrLang["STOP_BORADCASTING_BUTTON"] = "10-3 hračka";
$arrLang["STOPWATCH"] = "Stopwatch";
$arrLang["WARNINGS"] = "Varování";
$arrLang["CITATIONS"] = "Citace";
$arrLang["ARREST_REPORT"] = "Zarezervujte REPORT";
$arrLang["WARRANTS"] = "zatýkací rozkazy";
//** End CAD Console Strings *//

//** Begin MDT Console Strings **/
$arrLang["MDT_CONSOLE"] = "MDT konzole";
$arrLang["MY_STATUS"] = "Můj status";
$arrLang["MY_CALL"] ="Moje výzva";
$arrLang["VIEW_PERSONS_BOLOS"] = "Zobrazit osobnosti BOLOs";
$arrLang["VIEW_VEHICLE_BOLOS"] = "Zobrazit automobilové BOLOs";
//** End MDT Console Strings *//

//** Begin Profile Console Strings **/
$arrLang["PASSWORD"] = "Heslo";
$arrLang["CHANGE_PASSWORD"] = "Změnit heslo";
$arrLang["MY_PRFILE"] ="Můj profil";
//** End Profile Console Strings *//
?>
