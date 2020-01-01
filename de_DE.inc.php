<?php
$arrLang = array();

$arrLang['alert_admin_email_wrong'] = "Admin-Email hat falsches Format! Bitte erneut eingeben.";
$arrLang['alert_min_version_db'] = "Dieses Programm benötigt mindestens die Version _DB_VERSION_ von _DB_ installiert (aktuelle Version ist _DB_CURR_VERSION_). Sie können die Installation nicht fortsetzen.";
$arrLang['alert_min_version_php'] = "Dieses Programm benötigt mindestens die Version _PHP_VERSION_ von PHP installiert (die aktuelle Version ist _PHP_CURR_VERSION_). Sie können die Installation nicht fortsetzen.";
$arrLang['alert_directory_not_writable'] = "Das Verzeichnis <b>_FILE_DIRECTORY_</b> ist nicht beschreibbar! <br />Sie müssen 'write' Berechtigungen erteilen (Zugriffsrechte 0755 oder 777, abhängig von Ihren Systemeinstellungen) auf dieses Verzeichnis, das in EI_CONFIG_FILE_DIRECTORY definiert ist, bevor Sie die Installation starten!";
$arrLang['alert_extension_not_installed'] = "Die benötigte Erweiterung pdo_mysql ist nicht auf Ihrem Server installiert! Sie können die Installation nicht fortsetzen.";
$arrLang['alert_unable_to_install'] = "Diese Anwendung kann nicht installiert werden, da eine Anwendung mit der gleichen Identität bereits installiert ist. <br>Sie können nur <b>Update</b> oder <b>Deinstallieren</b> . Stellen Sie sicher, dass Sie vor dem Fortfahren eine Sicherung Ihrer Datenbank haben.";
$arrLang['alert_required_fields'] = "Elemente, die mit einem Stern markiert sind, sind Pflichtelemente";
$arrLang['alert_db_host_empty'] = "Datenbank-Host darf nicht leer sein! Bitte erneut eingeben.";
$arrLang['alert_db_name_empty'] = "Datenbank-Name darf nicht leer sein! Bitte erneut eingeben.";
$arrLang['alert_db_username_empty'] = "Datenbank-Benutzername darf nicht leer sein! Bitte erneut eingeben.";
$arrLang['alert_db_password_empty'] = "Datenbank-Benutzerpasswort darf nicht leer sein! Bitte erneut eingeben.";
$arrLang['alert_admin_name_empty'] = "Admin-Benutzername darf nicht leer sein! Bitte erneut eingeben.";
$arrLang['alert_admin_identifier_empty'] = "Identifikator darf nicht leer sein! Bitte erneut eingeben.";
$arrLang['alert_admin_password_empty'] = "Admin-Passwort darf nicht leer sein! Bitte erneut eingeben.";
$arrLang['alert_wrong_testing_parameters'] = "Test-Parameter sind falsch! Bitte geben Sie gültige Parameter ein.";
$arrLang['alert_remove_files'] = "Aus Sicherheitsgründen entfernen Sie bitte den Ordner <b>oc-install/</b> von Ihrem Server!";
$arrLang['alert_wrong_parameter_passed'] = "Falscher Parameter wurde übergeben! Bitte zurück zum vorherigen Schritt und versuchen Sie es erneut.";

$arrLang['error_asp_tags'] = "Diese Installation erfordert <b>ASP-Tags</b> Einstellungen eingeschaltet.";
$arrLang['error_can_not_open_config_file'] = "Datenbank wurde erfolgreich erstellt! Kann die Konfigurationsdatei _CONFIG_FILE_PATH_ nicht öffnen, um Informationen zu speichern.";
$arrLang['error_can_not_read_file'] = "Datei <b>_SQL_DUMP_FILE_</b> konnte nicht gelesen werden! Bitte überprüfen Sie, ob diese Datei existiert.";
$arrLang['error_check_db_exists'] = "Datenbank-Verbindungsfehler! Bitte überprüfen Sie, ob Ihre Datenbank existiert und ob der Benutzer <b>_DATABASE_USERNAME_</b> Zugriff auf diese hat. _ERROR_<br />";
$arrLang['error_check_db_connection'] = "Datenbank-Verbindungsfehler! Bitte überprüfen Sie Ihre Verbindungsparameter._ERROR_<br />";
$arrLang['error_pdo_support'] = "Diese Installation erfordert dass die <b>PDO-Erweiterung</b> installiert ist.";
$arrLang['error_sql_executing'] = "SQL-Ausführungsfehler! Bitte schalten Sie den Debug-Modus ein und überprüfen Sie sorgfältig ob ein Syntax Fehler in Ihrer SQL-Dump-Datei ist.";
$arrLang['error_server_requirements'] = "Diese Installation erfordert dass die _SETTINGS_NAME_ Einstellungen eingeschaltet/installiert ist.";
$arrLang['error_vd_support'] = "Diese Installation erfordert dass die Unterstützung von Virtual Directory eingeschaltet ist.";

$arrLang['admin_access_data'] = "Administrator Konto";
$arrLang['admin_access_data_descr'] = "(Sie benötigen dies, um den geschützten Admin-Bereich zu betreten)";
$arrLang['admin_email'] = "E-mail";
$arrLang['admin_email_info'] = "Die Administrator-E-Mail, die zum Login in diesem Konto verwendet wird.

Weitere Administratoren-Konten können später im Administrator-Konsolen-Benutzermanagement bereitgestellt werden";
$arrLang['admin_name'] = "Name";
$arrLang['admin_login_info'] = "Ihr Name wie je nach Richtlinien und Verfahren Ihrer Gemeinschaften. Dies kann später angepasst werden, wenn nötig.";
$arrLang['admin_identifier'] = "Identifikator";
$arrLang['admin_identifier_info'] = "Ihre Kennung. IE: 1D-01 Hinweis. Kommt auf deine Community an";
$arrLang['admin_password'] = "Passwort";
$arrLang['admin_password_info'] = "Wir empfehlen, dass Ihr Passwort kein Wort ist, das Sie im Wörterbuch finden können, sowohl Groß- als auch Kleinbuchstaben enthält und mindestens ein Sonderzeichen enthält (1-9, !, *, _, etc.).";
$arrLang['administrator_account'] = "Administrator-Konto";
$arrLang['options_page'] = "Systemeinstellungen";
$arrLang['administrator_account_skipping'] = "Überspringen (Admin-Konto nicht erforderlich)";
$arrLang['asp_tags'] = "ASP-Tags";
$arrLang['back'] = "Zurück";
$arrLang['build_date'] = "Erstellungsdatum";
$arrLang['cancel_installation'] = "Installation abbrechen";
$arrLang['click_start_button'] = "Klicken Sie auf Start, um fortzufahren";
$arrLang['click_to_start_installation'] = "Klicken, um die Installation zu starten";
$arrLang['checked'] = "Überprüft";
$arrLang['complete'] = "Fertig";
$arrLang['complete_installation'] = "Installation Abschließen";
$arrLang['completed'] = "Abgeschlossen";
$arrLang['continue'] = "Weiter";
$arrLang['continue_installation'] = "Installation fortsetzen";
$arrLang['database_extension'] = "Datenbank-Erweiterung";
$arrLang['database_host'] = "Datenbank-Host";
$arrLang['database_host_info'] = "Hostname oder IP-Adresse des Datenbankservers. Der Datenbankserver kann in Form eines Hostnamens (und / oder einer Portadresse) wie db1.myserver.com oder localhost: 5432 oder als IP-Adresse wie 192.168.0.1 vorliegen";
$arrLang['database_import'] = "Datenbank-Import";
$arrLang['database_import_error'] = "Datenbank-Import (Fehler)";
$arrLang['database_name'] = "Datenbank-Name";
$arrLang['database_name_info'] = "Datenbank-Name. Die Datenbank, die zur Speicherung der Daten verwendet wird. Ein Beispiel für den Datenbank-Namen ist 'testdb'.";
$arrLang['database_username'] = "Datenbank-Benutzername";
$arrLang['database_username_info'] = "Datenbank-Benutzername. Der Benutzername für die Verbindung zum Datenbankserver. Ein Beispiel dafür ist 'test_123'.";
$arrLang['database_password'] = "Datenbank-Passwort";
$arrLang['database_password_info'] = "Datenbank-Passwort. Das Passwort wird zusammen mit dem Benutzernamen verwendet, was zusammen das Datenbank-Benutzerkonto bildet.";
$arrLang['database_prefix'] = "Datenbank-Präfix";
$arrLang['database_prefix_info'] = "Datenbank-Präfix. Dieser wird verwendet um die Datenbanktabellen eindeutig zu halten, um zu verhindern das auf Daten anderer Applikationen zugegriffen wird. Ein Beispiel für Datenbank-Präfix ist 'abc_'.";
$arrLang['database_settings'] = "Datenbank-Einstellungen";
$arrLang['directories_and_files'] = "Verzeichnisse und Dateien";
$arrLang['disabled'] = "Deaktiviert";
$arrLang['enabled'] = "Aktiviert";
$arrLang['error'] = "Fehler";
$arrLang['extensions'] = "Erweiterungen";
$arrLang['getting_system_info'] = "Systeminformationen abrufen";
$arrLang['file_successfully_rewritten'] = "Die _CONFIG_FILE_-Datei wurde erfolgreich neu geschrieben und die Datenbank aktualisiert.";
$arrLang['file_successfully_deleted'] = "Die _CONFIG_FILE_-Datei wurde erfolgreich gelöscht und die Datenbank entfernt.";
$arrLang['file_successfully_created'] = "Die _CONFIG_FILE_-Datei wurde erfolgreich erstellt.";
$arrLang['failed'] = "fehlgeschlagen";
$arrLang['folder_paths'] = "Ordner-Pfade";
$arrLang['follow_the_wizard'] = "Folge dem <b>Assistenten</b> , um dein Programm zu installieren";
$arrLang['installed'] = "installiert";
$arrLang['installation_complete'] = "Installation abgeschlossen!";
$arrLang['installation_guide'] = "Installationsanleitung";
$arrLang['installation_type'] = "Installationstyp";
$arrLang['language'] = "Sprache";
$arrLang['license'] = "Lizenz";
$arrLang['loading'] = "laden";
$arrLang['mbstring_support'] = "Multibyte-String-Unterstützung";
$arrLang['magic_quotes_gpc'] = "Magische Anführungszeichen für GPC (Get/Post/Cookie)";
$arrLang['magic_quotes_runtime'] = "Magische Anführungszeichen Laufzeit";
$arrLang['magic_quotes_sybase'] = "Magische Anführungszeichen sind im Sybase-Stil";
$arrLang['mode'] = "Modus";
$arrLang['modes'] = "Modi";
$arrLang['new_installation_of'] = "Neue Installation von";
$arrLang['new'] = "Neu";
$arrLang['no'] = "Nein";
$arrLang['no_writable'] = "nicht Beschreibbar";
$arrLang['not_installed'] = "nicht installiert";
$arrLang['off'] = "Aus";
$arrLang['ok'] = "OK";
$arrLang['on'] = "Ein";
$arrLang['passed'] = "Bestanden";
$arrLang['password_encryption'] = "Passwort-Verschlüsselung";
$arrLang['perform_manual_installation'] = "Führe eine <b>manuelle</b> Installation durch";
$arrLang['pdo_support'] = "PDO-Unterstützung";
$arrLang['php_version'] = "PHP-Version";
$arrLang['proceed_to_login_page'] = "Weiter zur Login-Seite";
$arrLang['ready_to_install'] = "Bereit zur Installation";
$arrLang['remove_configuration_button'] = "Konfiguration entfernen und neu starten";
$arrLang['required_php_settings'] = "Benötigte PHP-Einstellungen";
$arrLang['safe_mode'] = "Sicherer Modus";
$arrLang['select_installation_language'] = "Wählen Sie die Installationssprache";
$arrLang['select_installation_type'] = "Installationstyp auswählen";
$arrLang['sendmail_from'] = "Sendmail von";
$arrLang['sendmail_path'] = "Sendmail-Pfad";
$arrLang['server_api'] = "Server-API";
$arrLang['server_requirements'] = "Server-Voraussetzungen";
$arrLang['session_support'] = "Sitzungsunterstützung";
$arrLang['short_open_tag'] = "Kurzes Öffnungs-Etikett";
$arrLang['smtp'] = "SMTP";
$arrLang['smtp_port'] = "SMTP-Port";
$arrLang['start'] = "Start";
$arrLang['start_all_over'] = "Ganz neu anfangen";
$arrLang['start_all_over_text'] = "Wenn Sie diese Installation aus irgendeinem Grund löschen möchten, können Sie den Installer zwingen, die aktuelle Konfiguration zu löschen und wieder zu starten. <br><b>WARNUNG</b>: Sie müssen die Datenbankinstallation manuell rückgängig machen, um alle vorgenommenen Änderungen zu entfernen.";
$arrLang['step_1_of'] = "Schritt 1 von 11";
$arrLang['step_2_of'] = "Schritt 2 von 11";
$arrLang['step_3_of'] = "Schritt 3 von 11";
$arrLang['step_4_of'] = "Schritt 4 von 11";
$arrLang['step_5_of'] = "Schritt 5 von 11";
$arrLang['step_6_of'] = "Schritt 6 von 11";
$arrLang['step_7_of'] = "Schritt 7 von 11";
$arrLang['step_8_of'] = "Schritt 8 von 11";
$arrLang['step_9_of'] = "Schritt 9 von 11";
$arrLang['step_10_of'] = "Schritt 10 von 11";
$arrLang['step_11_of'] = "Schritt 11 von 11";
$arrLang['sub_title_message'] = "Dieser Assistent führt Sie durch den gesamten Installationsprozess";
$arrLang['system'] = "System";
$arrLang['system_architecture'] = "Systemarchitektur";
$arrLang['test_connection'] = "Verbindung testen";
$arrLang['test_database_connection'] = "Datenbankverbindung testen";
$arrLang['unknown'] = "Unbekannt";
$arrLang['uninstall'] = "Deinstallieren";
$arrLang['uninstallation_completed'] = "Deinstallation abgeschlossen!";
$arrLang['update'] = "Aktualisieren";
$arrLang['updating_completed'] = "Aktualisierung abgeschlossen!";
$arrLang['virtual_directory_support'] = "Virtuelle Verzeichnisunterstützung";
$arrLang['we_are_ready_to_installation'] = "Wir sind bereit, mit der Installation fortzufahren";
$arrLang['we_are_ready_to_installation_text'] = "";
$arrLang['writable'] = "Beschreibbar";

$arrLang['core_configuration'] = "Basiskonfiguration";
$arrLang['department_configuration'] = 'Abteilungs-Konfiguration';
$arrLang['civilian_configuration'] = 'Zivile Konfiguration'; 
$arrLang['administrative_configuration'] = 'Administrative Konfigurationen';
$arrLang['extra_settings'] = 'Zusätzliche Einstellungen';

//** Begin Core Configuration Strings **//
$arrLang['COMMUNITY_NAME'] = "Community-Name";
$arrLang['COMMUNITY_NAME_notes'] = "Lege den Namen deiner Community fest";
$arrLang['COMMUNITY_NAME_alert'] = "Community-Name darf nicht leer sein! Bitte erneut eingeben.";

$arrLang['BASE_URL'] = "Anwendungs-URL";
$arrLang['BASE_URL_notes'] = "Die URL der OpenCAD Installation inklusive, falls verwendet, die Subdirektory
            Valide Beispiele:
            example.com - Domäne, Keine Subdirektory
            subdomain.example.com - Subdomäne, Keine Subdirektory
            subdomain.example.com/subdir - Subdomäne, Subdirektory
            example.com/subdir - Domäne, Subdirektory
            Das OpenCAD Team empfiehlt nicht die Verwendung einers Nachfolgenden / in den Obrigen-beispielen.
            Ein Nachfolgendes / wird OpenCAD nicht beinflussen, dennoch ist es unnötig und unschön.";
$arrLang['BASE_URL_alert'] = "BASE_URL darf nicht leer sein! Bitte erneut eingeben.";

$arrLang['CAD_FROM_EMAIL'] = 'CAD von E-Mail';
$arrLang['CAD_FROM_EMAIL_notes'] = 'Die E-Mail, von der aus Sie CAD benachrichtigt werden sollen, sollte kommen.

Beispiel: cad@community.com
';

$arrLang['CAD_TO_EMAIL'] = 'CAD zu E-Mail';
$arrLang['CAD_TO_EMAIL_notes'] = 'Die E-Mail, von der aus Sie CAD benachrichtigt werden sollen, sollte kommen.

Beispiel: cad@community.com
';

$arrLang['AUTH_KEY'] = 'Authentifizierungsschlüssel';
$arrLang['AUTH_SALT'] = 'Authentifizierungssalz';
$arrLang['SECURE_AUTH_KEY'] = 'Sicherer Authentifizierungsschlüssel';
$arrLang['SECURE_AUTH_SALT'] = 'Sicheres Authentifizierungssalz';
$arrLang['LOGGED_IN_KEY'] = 'Eingelogener Schlüssel';
$arrLang['LOGGED_IN_SALT'] = 'Eingeloggte Salz';
$arrLang['NONCE_KEY'] = 'Nicht-Schlüssel';
$arrLang['NONCE_SALT'] = 'Nonce Salz';
$arrLang['SESSION_KEY'] = 'Sitzungsschlüssel';

//** End Core Configuration Strings **//

//** Begin Police Strings **//
$arrLang['POLICE_NCIC'] = "";
$arrLang['POLICE_NCIC_notes'] = "Zeigt / versteckt die NCIC-Funktionalität auf der MDT-Konsole. Wenn 'true' ist, kann LEO NCIC-Funktionen ohne Dispatcher verwenden. Andernfalls, wenn 'flase', dann wird LEO die Anwesenheit eines Dispatchers erfordern, um die NCIC-Funktionalität zu verwenden.";
//** End Police Strings **//

//**  Begin Fire Strings **//
$arrLang['FIRE_PANIC'] = "Feuerpanik";
$arrLang['FIRE_PANIC_notes'] = "Zeigt/Versteckt Panik-Funktionalität auf der MDT-Konsole für Feuer. Wenn 'true' ist, kann das Feuerpersonal die Panik-Taste verwenden, sonst kann das Feuerpersonal die Panik-Taste nicht verwenden.";

$arrLang['FIRE_BOLO'] = "Feuer-BOLO";
$arrLang['FIRE_BOLO_notes'] = "Zeigt/versteckt Panik-Funktionalität auf der MDT-Konsole für Feuer. Wenn 'true' ist, kann das BOLO-Board von Feuerwehrleuten angezeigt werden, wenn 'false' ist, kann das BOLO-Board nicht angezeigt werden";

$arrLang['FIRE_NCIC_NAME'] = "Fire NCIC Name";
$arrLang['FIRE_NCIC_NAME_notes'] = "Zeigt/Versteckt Panik-Funktionalität auf der MDT-Konsole für Feuer. Wenn 'true' ist, kann das Feuerwerk die Namenssuche für NCIC verwenden, falls 'false' wird das Feuerwehr nicht in der Lage sein NCIC-Namenssuche zu verwenden";

$arrLang['FIRE_NCIC_PLATE'] = "NCIC-Platte feuern";
$arrLang['FIRE_NCIC_PLATE_notes'] = "Zeigt/Versteckt Panik-Funktionalität auf der MDT-Konsole für Feuer. Wenn 'true' ist, kann das Feuerwerk die NCIC-Plattensuchfunktion verwenden, sonst kann das Feuerwehr-Personal die NICI-Plattensuche nicht benutzen.";
//**  End Fire Strings **//

//** Begin EMS Strings **//
$arrLang['EMS_PANIC'] = "EMS-Panik";
$arrLang['EMS_PANIC_notes'] = "Zeigt/Versteckt Panik-Funktionalität auf der MDT-Konsole für EMS. Wenn 'true' ist, kann das Feuerwehr-Personal die Panik-Taste benutzen, sonst kann das EMS-Personal die Panik-Taste nicht benutzen.";

$arrLang['EMS_BOLO'] = "EMS-BOLO";
$arrLang['EMS_BOLO_notes'] = "Zeigt / versteckt die Panikfunktionalität auf der MDT-Konsole für EMS. Wenn \"wahr\", kann das Feuerpersonal das BOLO-Board sehen. Andernfalls kann das EMS-Personal das BOLO-Board nicht sehen, wenn es \"falsch\" ist";

$arrLang['EMS_NCIC_NAME'] = "EMS NCIC Name";
$arrLang['EMS_NCIC_NAME_notes'] = "Zeigt / versteckt die Panikfunktionalität auf der MDT-Konsole für EMS. Wenn \"wahr\", kann das Feuerpersonal die Suche nach dem Namen des NCIC-Namens verwenden. Andernfalls können die Mitarbeiter des EMS nicht die Suche nach dem NCIC-Namen verwenden";

$arrLang['EMS_NCIC_PLATE'] = "EMS NCIC-Platte";
$arrLang['EMS_NCIC_PLATE_notes'] = "Zeigt / versteckt die Panikfunktionalität auf der MDT-Konsole für EMS. Wenn \"wahr\", kann das Feuerpersonal die NCIC-Platten-Nachschlagfunktion verwenden. Andernfalls kann das EMS-Personal die \"NCIC-Platten-Nachschlagfunktion\" nicht verwenden, wenn es \"falsch\" ist.";
//** End EMS Strings **//

//** Begin Roadside Assistance Strings **//
$arrLang['ROADSIDE_PANIC'] = "Straßenpanik";
$arrLang['ROADSIDE_PANIC_notes'] = "Zeigt/Versteckt Panik-Funktionalität auf MDT-Konsole für Roadside-Unterstützung. Wenn 'true' ist, kann RAO den Panic-Knopf verwenden, sonst kann RAO den Panic-Knopf nicht verwenden, wenn 'false' ist.";

$arrLang['ROADSIDE_BOLO'] = "Straßenlaterne";
$arrLang['ROADSIDE_BOLO_notes'] = "Zeigt/Versteckt BOLO-Funktionalität auf MDT-Konsole für Roadside-Unterstützung. Wenn 'true' wird RAO in der Lage sein, den Panic-Knopf zu verwenden, sonst kann RAO, wenn 'false' ist, den Panic-Knopf nicht verwenden.";

$arrLang['ROADSIDE_NCIC_NAME'] = "Straßenname";
$arrLang['ROADSIDE_NCIC_NAME_notes'] = "Zeigt/Versteckt NCIC-Funktionalität auf MDT-Konsole für Roadside-Unterstützung. Wenn 'true' dann RAO in der Lage sein wird, NCIC-Plattenabfrage zu verwenden, ohne dass ein Dispatcher benötigt wird, sonst benötigt RAO 'false' die Anwesenheit des Dispatchers, um NCIC-Plattenabfrage zu verwenden.";

$arrLang['ROADSIDE_NCIC_PLATE'] = "Straßenbauplatte";
$arrLang['ROADSIDE_NCIC_PLATE_notes'] = "Zeigt/Versteckt NCIC-Funktionalität auf MDT-Konsole für Roadside-Unterstützung. Wenn 'true' dann RAO in der Lage sein wird, NCIC-Plattenabfrage zu verwenden, ohne dass ein Dispatcher benötigt wird, sonst benötigt RAO 'false' die Anwesenheit des Dispatchers, um NCIC-Plattenabfrage zu verwenden.";

$arrLang['ROADSIDE_CALL_SELFASSIGN'] = "Straßenruf Selbstzuweisung";
$arrLang['ROADSIDE_CALL_SELFASSIGN_notes'] = "Wenn \"true\", kann RAO die NCIC-Plattenabfrage ohne Dispatcher verwenden. Andernfalls, wenn \"false\" erforderlich ist, muss der Disponent die NCIC-Plattenabfrage verwenden.";
//** End Roadside Assistance Strings **//

//** Begin Civilian Strings **//
$arrLang['CIV_WARRANT'] = "Zivil-Krieger-Erstellung";
$arrLang['CIV_WARRANT_notes'] = "Erlaube / verbiete Zivilisten, ihre Haftbefehle zu verwalten. Wenn \"true\" festgelegt ist, können Civs Warrants aus ihrem Profil löschen. Andernfalls kann \"Civs\" keine Warrants entfernen.";

$arrLang['CIV_REG'] = "Sofortige zivile Registrierung";
$arrLang['CIV_REG_notes'] = "Herr Präsident!";

$arrLang['CIV_LIMIT_MAX_IDENTITIES'] = "Maximale zivile Identitäten";
$arrLang['CIV_LIMIT_MAX_IDENTITIES_notes'] = "Wenn CIV_LIMIT_MAX '0' ist, können Zivilisten unbegrenzte Identitäten erstellen. Andernfalls, wenn CIV_LIMIT_MAX ein anderer Wert als '0' ist, wird die maximale Anzahl möglicher Identitäten auf diesen Wert begrenzt.";

$arrLang['CIV_LIMIT_MAX_VEHICLES'] = "Zivile Höchstfahrzeuge";
$arrLang['CIV_LIMIT_MAX_VEHICLES_notes'] = "Wenn CIV_LIMIT_MAX_VEHICLES '0' ist, kann der Zivilist unbegrenzt Fahrzeuge erstellen. Andernfalls, wenn CIV_LIMIT_MAX_VEHICLES ein anderer Wert als '0' ist, wird die maximale Anzahl möglicher Fahrzeuge auf diesen Wert begrenzt";

$arrLang['CIV_LIMIT_MAX_WEAPONS'] = "Maximale zivile Waffen";
$arrLang['CIV_LIMIT_MAX_WEAPONS_notes'] = "Wenn CIV_LIMIT_MAX_WEAPONS '0' ist, kann der Zivilist unbegrenzt Waffen erstellen. Andernfalls, wenn CIV_LIMIT_MAX_WEAPONS ein anderer Wert als '0' ist, wird die maximale Anzahl möglicher Waffen auf diesen Wert begrenzt";
//** End Civilian Strings **//

//** Begin Administrative Strings**//
$arrLang['MODERATOR_APPROVE_USER'] = "Moderator genehmigen Benutzer";
$arrLang['MODERATOR_APPROVE_USER_notes'] = "Wenn \"true\", können Moderatoren neue Benutzeranforderungen genehmigen. Andernfalls können Moderatoren keine neuen Benutzeranforderungen genehmigen, wenn sie \"false\" sind.";

$arrLang['MODERATOR_EDIT_USER'] = "Moderator Benutzer bearbeiten";
$arrLang['MODERATOR_EDIT_USER_notes'] = "Wenn 'true' ist, können Moderatoren das Benutzerprofil bearbeiten. Wenn 'false' ist, können die Moderatoren das Benutzerprofil nicht bearbeiten. Dazu gehören Name, E-Mail-Adresse, ID und Rollen. Moderatoren können Benutzergruppen hinzufügen, deren Entfernung jedoch durch die Einstellung MODERATOR_REMOVE_GROUPS geregelt wird.";

$arrLang['MODERATOR_DELETE_USER'] = "Moderator Benutzer löschen";
$arrLang['MODERATOR_DELETE_USER_notes'] = "Wenn 'true', können Moderatoren Benutzer löschen, andernfalls, wenn 'false'. Moderatoren können Benutzer nicht löschen.";

$arrLang['MODERATOR_SUSPEND_WITHOUT_REASON'] = "Moderator ohne Grund aussetzen";
$arrLang['MODERATOR_SUSPEND_WITHOUT_REASON_notes'] = "Wenn 'true' ist, können Moderatoren Benutzer ohne Grund aussetzen, andernfalls, wenn 'false'. Moderatoren können Benutzer nicht ohne Grund suspendieren.";

$arrLang['MODERATOR_SUSPEND_WITH_REASON'] = "Moderator Suspend mit Grund";
$arrLang['MODERATOR_SUSPEND_WITH_REASON_notes'] = "Wenn \"true\", können Moderatoren Benutzer mit einem Grund aussetzen, wenn \"false\" Moderatoren Benutzer mit einem Grund nicht suspendieren können.";

$arrLang['MODERATOR_REACTIVATE_USER'] = "Moderator reaktivieren Benutzer";
$arrLang['MODERATOR_REACTIVATE_USER_notes'] = "Wenn 'true', können Moderatoren andere Benutzer bearbeiten, wenn 'false' nicht möglich ist.";

$arrLang['MODERATOR_REMOVE_GROUP'] = "Moderator Gruppe entfernen";
$arrLang['MODERATOR_REMOVE_GROUP_notes'] = "Wenn 'true' ist, können Moderatoren die Benutzergruppen entfernen, andernfalls, wenn 'false'. Moderatoren können Benutzergruppen nicht entfernen.";

$arrLang['MODERATOR_NCIC_EDITOR'] = "Moderator NCIC Editor";
$arrLang['MODERATOR_NCIC_EDITOR_notes'] = "Bei 'true' können die Moderatoren auf den NCIC-Editor zugreifen, andernfalls können sie bei 'false' nicht auf den NCCIC-Editor zugreifen.";

$arrLang['MODERATOR_DATA_MANAGER'] = "Moderator-Datenmanager";
$arrLang['MODERATOR_DATA_MANAGER_notes'] = "Wenn \"true\", können Moderatoren auf den Spieldaten-Manager zugreifen. Andernfalls, wenn \"false\", können die Moderatoren nicht auf den Gam Data Manager zugreifen.";

$arrLang['MODERATOR_DATAMAN_CITATIONTYPES'] = "Moderator Citation Types Editor";
$arrLang['MODERATOR_DATAMAN_CITATIONTYPES_notes'] = "Wenn \"true\", haben Moderatoren Zugriff auf das Modul \"Citation Types Manager\" des Game Data Managers. Andernfalls wird \"Moderator\" den Zugriff verweigert.";

$arrLang['MODERATOR_DATAMAN_DEPARTMENTS'] = "Moderator Abteilungen Editor";
$arrLang['MODERATOR_DATAMAN_DEPARTMENTS_notes'] = "Wenn \"true\", haben Moderatoren Zugriff auf das Abteilungsmanager-Modul des Game Data Manager. Andernfalls wird \"Moderator\" den Zugriff verweigert.";

$arrLang['MODERATOR_DATAMAN_INCIDENTTYPES'] = "Editor für Moderatorvorfallsarten";
$arrLang['MODERATOR_DATAMAN_INCIDENTTYPES_notes'] = "Wenn der Wert \"true\" ist, haben Moderatoren Zugriff auf das Incident Types Manager-Modul des Game Data Manager. Andernfalls wird den Moderatoren der Zugriff verweigert, wenn sie auf \"false\" gesetzt sind.";

$arrLang['MODERATOR_DATAMAN_RADIOCODES'] = "Moderator Radio Codes Editor";
$arrLang['MODERATOR_DATAMAN_RADIOCODES_notes'] = "Wenn \"true\", haben Moderatoren Zugriff auf das Modul \"Radio Codes Manager\" des Game Data Manager. Andernfalls wird \"Moderator\" den Zugriff verweigert.";

$arrLang['MODERATOR_DATAMAN_STREETS'] = "Moderator Streets Editor";
$arrLang['MODERATOR_DATAMAN_STREETS_notes'] = "Bei 'true' haben die Moderatoren Zugriff auf das Streets Manager-Modul des Game Data Manager. Andernfalls wird bei 'false' den Moderatoren der Zugriff verweigert.";

$arrLang['MODERATOR_DATAMAN_VECHILES'] = "";
$arrLang['MODERATOR_DATAMAN_VEHICLES_notes'] = "Wenn \"true\", haben Moderatoren Zugriff auf das Vehicles Manager-Modul des Game Data Managers. Andernfalls wird \"Moderator\" den Zugriff verweigert.";

$arrLang['MODERATOR_DATAMAN_WARNINGTYPES'] = "Moderator-Warnungstyp-Editor";
$arrLang['MODERATOR_DATAMAN_WARNINGTYPES_notes'] = "Bei 'true' haben die Moderatoren Zugriff auf das Warnungsarten-Manager-Modul des Game Data Manager. Andernfalls wird bei 'false' den Moderatoren der Zugriff verweigert.";

$arrLang['MODERATOR_DATAMAN_WARRANTTYPES'] = "Editor für Moderator-Warrant-Typen";
$arrLang['MODERATOR_DATAMAN_WARRANTTYPES_notes'] = "Wenn \"wahr\", haben Moderatoren Zugriff auf das Modul \"Warrant Types Manager\" des Game Data Managers. Andernfalls wird \"Moderator\" den Zugriff verweigert.";

$arrLang['MODERATOR_DATAMAN_WEAPONS'] = "Moderator Waffen Editor";
$arrLang['MODERATOR_DATAMAN_WEAPONS_notes'] = "Wenn \"true\", haben Moderatoren Zugriff auf das Weapons Manager-Modul des Game Data Managers. Andernfalls wird \"Moderator\" den Zugriff verweigert.";

$arrLang['MODERATOR_DATAMAN_IMPEXPRESET'] = "Moderator Import / Export / Reset";
$arrLang['MODERATOR_DATAMAN_IMPEXPRESET_notes'] = "Wenn \"wahr\", haben die Moderatoren Zugriff auf das Import / Export / Reset-Modul des Game Data Managers. Andernfalls wird den Moderatoren der Zugriff verweigert, wenn sie \"falsch\" sind.";
//** End Administrative Strings**//

//** Begin Extra Settings Strings **//
$arrLang['DEMO_MODE'] = "Demo-Modus";
$arrLang['DEMO_MODE_notes'] = "Wenn diese Option \"true\" ist, werden verschiedene Benutzerverwaltungsfunktionen von OpenCAD gesperrt. Andernfalls steht \"full\" zur Verfügung.";

$arrLang['USE_GRAVATAR'] = "Gravatar";
$arrLang['USE_GRAVATAR_notes'] = "OpenCAD wird Ihren Avatar dynamisch von {@link Gravatar http://de.gravatar.com/} abrufen, wenn Sie ein Konto haben. Andernfalls wird es das Standard-Bild verwenden, das mit OpenCAD enthalten ist.";
//** End Extra Settings Strings **//

//** Begin Common Global Strings **/
$arrLang['WELCOME'] = "Begrüßung";
$arrLang["GENERAL"] = "Allgemein";
$arrLang["CAD_SYSTEM"] = "CAD-System";
$arrLang["EDIT"] = "Bearbeiten";
$arrLang["DELETE"] = "Löschen";
$arrLang["NAME"] = "Name";
$arrLang["EMAIL"] = "E-Mail";
$arrLang["ROLE"] = "Rolle";
$arrLang["IDENTIFIER"] = "Identifikator";
$arrLang["GROUPS"] = "Gruppen";
$arrLang["ACTIONS"] = "Aktionen";
$arrLang["NEXT"] = "Weiter";
$arrLang["PREVIOUS"] = "Vorherige";
$arrLang["SEARCH"] =  "Suche";
$arrLang["DASHBOARD"] =  "Übersicht";
$arrLang["LOGOUT"] =  "Abmelden";
$arrLang["NEED_HELP"] =  "Brauchen Sie Hilfe?";
$arrLang["FULLSCREEN"] =  "Vollbild";
$arrLang["DOB"] = "DOB";
$arrLang["ADDRESS"] = "Adresse";
$arrLang["GENDER"] = "Geschlecht";
$arrLang["RACE"] = "Rennen";
$arrLang["DL_STATUS"] = "DL-Status";
$arrLang["HAIR_COLOR"] = "Haarfarbe";
$arrLang["BUILD"] = "Baue";
$arrLang["WEAPON_STATUS"] = "Waffenstatus";
$arrLang["WEAPON_NAME"] = "Waffenname";
$arrLang["WEAPON_TYPE"] ="Waffentyp";
$arrLang["WEAPON_NOTES"] ="Waffennotizen";
$arrLang["DECEASED"] = "Verstorben";
$arrLang["REG_PLATE"] = "Reg. Platte";
$arrLang["VEHICLE_NOTES"] = "Fahrzeughinweise";
$arrLang["NOT_YOU"] = "Nicht Sie?";
$arrLang["ACTIVE_CALLS"] = "Aktive Anrufe";
$arrLang["ACTIVE_BOLOS"] = "Aktive BOLOs";
$arrLang["NCIC_NAME_LOOKUP"] = "NCIC-Namenssuche";
$arrLang["NCIC_PLATE_LOOKUP"] = "NCIC Plattensuche";
$arrLang["NCIC_WEAPON_LOOKUP"] = "NCIC Waffensuche";
$arrLang["SEND"] = "Senden";
$arrLang["MY_PROFILE"] = "Mein Profil";
//** End Common Global Strings */

//** Begin Administrator/Moderator Console Strings  **/
$arrLang["CAD_ADMINISTRATION"] = "CAD-Administration";
$arrLang["STATISTICS_AT_A_GLANCE"] = "Statistiken auf einen Blick";
$arrLang["TOTAL_USERS"] = "Benutzer insgesamt";
$arrLang["ACEESS_REQUESTS"] = "Zugriffsanfragen";
$arrLang["THERE_ARE_CURRENTLY_NO_ACCESS_REQUESTS"] = "Derzeit gibt es keine Zugangsanfragen.";
$arrLang["CAD_USER_MANAGEMENT"] = "CAD Benutzerverwaltung";
$arrLang["ACCOUNT_MANAGEMENT"] = "Kontoverwaltung";
$arrLang["SUSPEND_WITH_REASON"] = "Aussetzen mit Grund";
$arrLang["SUSPEND_WITHOUT_REASON"] = "Suspend ohne Grund";
$arrLang["NCIC_EDITOR"] = "NCIC-Editor";
$arrLang["NCIC_NAMES_DB"] = "";
$arrLang["NCIC_NAMES_DB_none"] = "";
$arrLang["NCIC_VEHICLES_DB"] = "NCIC-Fahrzeugdatenbank";
$arrLang["NCIC_VEHICLES_DB_none"] = "Keine Ergebnisse in der NCIC Vehicles-Datenbank gefunden.";
$arrLang["NCIC_WEAPONS_DB"] = "NCIC Waffen Datenbank";
$arrLang["NCIC_WEAPONS_DB_none"] = "Keine Ergebnisse in der NCIC Weapons-Datenbank gefunden.";
$arrLang["NCIC_WARNINGS_DB"] = "NCIC Warnungen Datenbank";
$arrLang["NCIC_WARNINGS_DB_none"] = "Keine Ergebnisse in der NCIC Weapons-Datenbank gefunden.";
$arrLang["NCIC_CITATIONS_DB"] = "NCIC Citations Datenbank.";
$arrLang["NCIC_CITATIONS_DB_none"] = "Keine Ergebnisse in der NCIC Citations-Datenbank gefunden.";
$arrLang["NCIC_ARRESTS_DB"] = "NCIC Arrests Datenbank";
$arrLang["NCIC_ARRESTS_DB_none"] = "Keine Ergebnisse in der NCIC Arrests Datenbank gefunden.";
$arrLang["NCIC_WARRANTS_DB"] = "NCIC Warrants Datenbank";
$arrLang["NCIC_WARRANTS_DB_none"] = "Keine Ergebnisse in der NCIC Warrants Datenbank gefunden";
//** End Administrator/Moderator Console Strings  **/

//** Begin Civillian Console Strings **/
$arrLang["CIVILLIAN_CONSOLE"] = "Bürgerliche Konsole";
$arrLang["MY_IDENTITIES"] = "Meine Identitäten";
$arrLang["MY_IDENTITIES_none"] = "Keine Ergebnisse in der Datenbank der Identitäten gefunden.";
$arrLang["MY_VEHICLES"] = "Meine Fahrzeuge";
$arrLang["MY_VEHICLES_none"] = "Keine Ergebnisse in der Fahrzeugdatenbank gefunden.";
$arrLang["MY_WEAPONS"] = "Meine Waffen";
$arrLang["MY_WEAPONS_none"] = "Keine Ergebnisse in der Waffendatenbank gefunden.";
$arrLang["MY_WARRANTS"] = "Meine Warrants";
$arrLang["MY_WARRANTS_none"] = "Keine Ergebnisse in der Optionsdatenbank gefunden.";
$arrLang["CREATE_A_CALL"] = "Anruf erstellen";
$arrLang["ADD_NEW_IDENTITY"] = "Neue Identität hinzufügen";
$arrLang["Add_ADD_NEW_PLATE"] = "";
$arrLang["ADD_NEW_WEAPON"] = "Neue Waffe hinzufügen";
$arrLang["CIVILLIAN_DASHBOARD"] = "Bürgerliches Dashboard";
$arrLang["VIEW_WARRANTS"] = "";
$arrLang["CREATE_WARRANT"] = "Warrant erstellen";
$arrLang["UPDATE"] = "Update";
//** End Civillian Console Strings **/

//** Begin CAD Console Strings **/
$arrLang["CAD_CONSOLE"] = "CAD-Konsole";
$arrLang["ACTIVE_DISPATCHERS"] = "Aktive Dispatcher";
$arrLang["ACTIVE_DISPATCHERS_none"] = "Derzeit sind keine Dispatcher verfügbar.";
$arrLang["AVAILABLE_UNITS"] = "Verfügbare Einheiten";
$arrLang["UNAVAILABLE_UNITS"] = "Nicht verfügbare Einheiten";
$arrLang["NEW_PERSONS_BOLO"] = "Neue Personen BOLO";
$arrLang["NEW_VEHICLE_BOLO"] = "Neues Fahrzeug-BOLO";
$arrLang["NEW_CALL"] = "Neuer Anruf";
$arrLang["PANIC_BUTTON"] = "Panik-Taste";
$arrLang["PRIORITY_TONE"] = "PRIORITY_TONE";
$arrLang["STOP_BORADCASTING_BUTTON"] = "10-3 Ton";
$arrLang["STOPWATCH"] = "Stoppuhr";
$arrLang["WARNINGS"] = "Warnungen";
$arrLang["CITATIONS"] = "Zitate";
$arrLang["ARREST_REPORT"] = "REPORT Arrest";
$arrLang["WARRANTS"] = "Krieger";
//** End CAD Console Strings *//

//** Begin MDT Console Strings **/
$arrLang["MDT_CONSOLE"] = "MDT-Konsole";
$arrLang["MY_STATUS"] = "Mein Status";
$arrLang["MY_CALL"] ="Mein Anruf";
$arrLang["VIEW_PERSONS_BOLOS"] = "Personen-BOLOs anzeigen";
$arrLang["VIEW_VEHICLE_BOLOS"] = "Fahrzeuglager anzeigen";
//** End MDT Console Strings *//

//** Begin Profile Console Strings **/
$arrLang["PASSWORD"] = "Passwort";
$arrLang["CHANGE_PASSWORD"] = "Passwort ändern";
$arrLang["MY_PRFILE"] ="Mein Profil";
//** End Profile Console Strings *//
?>
