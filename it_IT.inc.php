<?php
$arrLang = array();

$arrLang['alert_admin_email_wrong'] = "L'email di Admin ha un formato sbagliato! Si prega di inserire nuovamente.";
$arrLang['alert_min_version_db'] = "Questo programma richiede almeno la versione _DB_VERSION_ di _DB_ installata (la versione corrente è _DB_CURR_VERSION_). Non puoi procedere con l'installazione.";
$arrLang['alert_min_version_php'] = "Questo programma richiede almeno la versione _PHP_VERSION_ di PHP installato (la versione attuale è _PHP_CURR_VERSION_). Non puoi procedere con l'installazione.";
$arrLang['alert_directory_not_writable'] = "La directory <b>_FILE_DIRECTORY_</b> non è scrivibile! <br />Devi concedere i permessi di scrittura (diritti di accesso 0755 o 777, a seconda delle impostazioni di sistema) a questa directory definita in EI_CONFIG_FILE_DIRECTORY prima di avviare l'installazione!";
$arrLang['alert_extension_not_installed'] = "L'estensione richiesta pdo_mysql non è installata sul server! Non puoi procedere con l'installazione.";
$arrLang['alert_unable_to_install'] = "Impossibile installare questa applicazione perché un'applicazione con la stessa identità è già installata. <br>Puoi solo aggiornare <b>o</b> <b>Disinstallarla</b> . Assicurati di avere un backup del database prima di procedere.";
$arrLang['alert_required_fields'] = "Gli elementi contrassegnati con un asterisco sono obbligatori";
$arrLang['alert_db_host_empty'] = "L'host del database non può essere vuoto! Si prega di inserire nuovamente.";
$arrLang['alert_db_name_empty'] = "Il nome del database non può essere vuoto! Si prega di inserire nuovamente.";
$arrLang['alert_db_username_empty'] = "Il nome utente del database non può essere vuoto! Si prega di inserire nuovamente.";
$arrLang['alert_db_password_empty'] = "La password del database non può essere vuota! Si prega di inserire nuovamente.";
$arrLang['alert_admin_name_empty'] = "Il nome utente admin non può essere vuoto! Si prega di inserire nuovamente.";
$arrLang['alert_admin_identifier_empty'] = "L'identificatore non può essere vuoto! Si prega di inserire nuovamente.";
$arrLang['alert_admin_password_empty'] = "La password di Admin non può essere vuota! Si prega di inserire nuovamente.";
$arrLang['alert_wrong_testing_parameters'] = "I parametri di prova sono errati! Inserisci parametri validi.";
$arrLang['alert_remove_files'] = "Per motivi di sicurezza, rimuovi la cartella <b>oc-install/</b> dal tuo server!";
$arrLang['alert_wrong_parameter_passed'] = "Parametro errato superato! Torna al passo precedente e riprova.";

$arrLang['error_asp_tags'] = "Questa installazione richiede <b>tag ASP</b> impostazioni attivate.";
$arrLang['error_can_not_open_config_file'] = "Database creato con successo! Impossibile aprire il file di configurazione _CONFIG_FILE_PATH_ per salvare le informazioni.";
$arrLang['error_can_not_read_file'] = "Impossibile leggere il file <b>_SQL_DUMP_FILE_</b>! Si prega di controllare se un file esiste.";
$arrLang['error_check_db_exists'] = "Errore di connessione al database! Si prega di controllare se il database esiste e l'accesso consentito per l'utente <b>_DATABASE_USERNAME_</b>._ERROR_<br />";
$arrLang['error_check_db_connection'] = "Errore di connessione al database! Si prega di controllare i parametri di connessione._ERROR_<br />";
$arrLang['error_pdo_support'] = "Questa installazione richiede <b>estensione PDO</b> installata.";
$arrLang['error_sql_executing'] = "Errore di esecuzione SQL! Si prega di attivare la modalità debug e controllare attentamente una sintassi del file di dump SQL.";
$arrLang['error_server_requirements'] = "Questa installazione richiede le impostazioni _SETTINGS_NAME_ attivate/installate.";
$arrLang['error_vd_support'] = "Questa installazione richiede il supporto della cartella virtuale attivato.";

$arrLang['admin_access_data'] = "Informazioni sull'account dell'amministratore";
$arrLang['admin_access_data_descr'] = "(hai bisogno di questo per entrare nell'area di amministrazione protetta)";
$arrLang['admin_email'] = "E-mail";
$arrLang['admin_email_info'] = "L'email dell'amministratore che verrà utilizzata per accedere a questo account.

Altri account amministratore possono essere predisposti successivamente nella Gestione utenti della Console amministratore";
$arrLang['admin_name'] = "Nome";
$arrLang['admin_login_info'] = "Il tuo nome secondo le politiche e le procedure della tua comunità. Questo può essere regolato in seguito, se necessario.";
$arrLang['admin_identifier'] = "Identificatore";
$arrLang['admin_identifier_info'] = "Il tuo identificatore IE: 1D-01 Note. Dipende dalla tua comunità";
$arrLang['admin_password'] = "Parola d'ordine";
$arrLang['admin_password_info'] = "Raccomandiamo che la tua password non sia una parola che puoi trovare nel dizionario, include sia lettere maiuscole che minuscole, e contiene almeno un carattere speciale (1-9, !, *, _, ecc.).";
$arrLang['administrator_account'] = "Account amministratore";
$arrLang['options_page'] = "Impostazioni di sistema";
$arrLang['administrator_account_skipping'] = "Salta (Account Admin non richiesto)";
$arrLang['asp_tags'] = "Tag Asp";
$arrLang['back'] = "Indietro";
$arrLang['build_date'] = "Data build";
$arrLang['cancel_installation'] = "Annulla installazione";
$arrLang['click_start_button'] = "Clicca sul pulsante Start per continuare";
$arrLang['click_to_start_installation'] = "Clicca per avviare l'installazione";
$arrLang['checked'] = "Selezionato";
$arrLang['complete'] = "Completato";
$arrLang['complete_installation'] = "Installazione completa";
$arrLang['completed'] = "Completato";
$arrLang['continue'] = "Continua";
$arrLang['continue_installation'] = "Continua l'installazione";
$arrLang['database_extension'] = "Estensione Database";
$arrLang['database_host'] = "Host Database";
$arrLang['database_host_info'] = "Nome host o indirizzo IP del server database. Il server di database può avere la forma di un nome host (e / o indirizzo di porta), ad esempio db1.myserver.com o localhost: 5432 o un indirizzo IP, ad esempio 192.168.0.1";
$arrLang['database_import'] = "Importa Database";
$arrLang['database_import_error'] = "Importazione database (errore)";
$arrLang['database_name'] = "Nome Database";
$arrLang['database_name_info'] = "Nome del database. Il database utilizzato per contenere i dati. Un esempio del nome del database è 'testdb'.";
$arrLang['database_username'] = "Username Database";
$arrLang['database_username_info'] = "Nome utente del database. Il nome utente utilizzato per connettersi al server del database. Un esempio di nome utente è 'test_123'.";
$arrLang['database_password'] = "Password Database";
$arrLang['database_password_info'] = "Password del database. La password è utilizzata insieme al nome utente, che forma l'account utente del database.";
$arrLang['database_prefix'] = "Prefisso database";
$arrLang['database_prefix_info'] = "Prefisso del database. Usato per impostare il prefisso univoco per le tabelle del database e impedire che un tipo di dati interferisca con un altro. Un esempio di prefisso del database è 'abc_'.";
$arrLang['database_settings'] = "Impostazioni Database";
$arrLang['directories_and_files'] = "Cartelle e file";
$arrLang['disabled'] = "Disabilitato";
$arrLang['enabled'] = "Abilitato";
$arrLang['error'] = "Errore";
$arrLang['extensions'] = "Estensioni";
$arrLang['getting_system_info'] = "Ottieni Info Sistema";
$arrLang['file_successfully_rewritten'] = "Il file _CONFIG_FILE_ è stato ri-scritto e aggiornato con successo.";
$arrLang['file_successfully_deleted'] = "Il file _CONFIG_FILE_ è stato eliminato con successo e il database è stato rimosso.";
$arrLang['file_successfully_created'] = "Il file _CONFIG_FILE_ è stato creato con successo.";
$arrLang['failed'] = "fallito";
$arrLang['folder_paths'] = "Percorso cartella";
$arrLang['follow_the_wizard'] = "Segui la procedura guidata <b></b> per installare il programma";
$arrLang['installed'] = "installato";
$arrLang['installation_complete'] = "Installazione completata!";
$arrLang['installation_guide'] = "Guida all'installazione";
$arrLang['installation_type'] = "Tipo di installazione";
$arrLang['language'] = "Lingua";
$arrLang['license'] = "Licenza";
$arrLang['loading'] = "caricamento";
$arrLang['mbstring_support'] = "Supporto multi byte String";
$arrLang['magic_quotes_gpc'] = "Magic Quotes per GPC (Get/Post/Cookie)";
$arrLang['magic_quotes_runtime'] = "Runtime Magic Quotes";
$arrLang['magic_quotes_sybase'] = "Magic Quotes sono in stile Sybase";
$arrLang['mode'] = "Modo";
$arrLang['modes'] = "Modelli";
$arrLang['new_installation_of'] = "Nuova installazione di";
$arrLang['new'] = "Nuovo";
$arrLang['no'] = "No";
$arrLang['no_writable'] = "non scrivibile";
$arrLang['not_installed'] = "non installato";
$arrLang['off'] = "Fuori";
$arrLang['ok'] = "OK";
$arrLang['on'] = "Il";
$arrLang['passed'] = "Passato";
$arrLang['password_encryption'] = "Crittografia Password";
$arrLang['perform_manual_installation'] = "Esegui un <b>Manuale</b> Installazione";
$arrLang['pdo_support'] = "Supporto PDO";
$arrLang['php_version'] = "Versione PHP";
$arrLang['proceed_to_login_page'] = "Vai alla pagina di login";
$arrLang['ready_to_install'] = "Pronto a installare";
$arrLang['remove_configuration_button'] = "Rimuovi configurazione e ricomincia";
$arrLang['required_php_settings'] = "Impostazioni PHP richieste";
$arrLang['safe_mode'] = "Modalità Sicura";
$arrLang['select_installation_language'] = "Seleziona Lingua di Installazione";
$arrLang['select_installation_type'] = "Seleziona tipo di installazione";
$arrLang['sendmail_from'] = "Invia mail da";
$arrLang['sendmail_path'] = "Percorso Sendmail";
$arrLang['server_api'] = "API Server";
$arrLang['server_requirements'] = "Requisiti del server";
$arrLang['session_support'] = "Supporto Sessione";
$arrLang['short_open_tag'] = "Tag breve aperto";
$arrLang['smtp'] = "SMTP";
$arrLang['smtp_port'] = "Porta SMTP";
$arrLang['start'] = "Inizia";
$arrLang['start_all_over'] = "Ricomincia tutto";
$arrLang['start_all_over_text'] = "Se vuoi rimuovere questa installazione per qualche motivo, puoi forzare l'installatore a rimuovere la configurazione corrente e ricominciare tutto. <br><b>ATTENZIONE</b>: devi annullare l'installazione del database manualmente per rimuovere tutte le modifiche che sono state fatte.";
$arrLang['step_1_of'] = "Fase 1 dell'11";
$arrLang['step_2_of'] = "Fase 2 dell'11";
$arrLang['step_3_of'] = "Fase 3 dell'11";
$arrLang['step_4_of'] = "Fase 4 dell'11";
$arrLang['step_5_of'] = "Fase 5 dell'11";
$arrLang['step_6_of'] = "Fase 6 dell'11";
$arrLang['step_7_of'] = "Fase 7 dell'11";
$arrLang['step_8_of'] = "Fase 8 dell'11";
$arrLang['step_9_of'] = "Fase 9 dell'11";
$arrLang['step_10_of'] = "Fase 10 dell'11";
$arrLang['step_11_of'] = "Fase 11 dell'11";
$arrLang['sub_title_message'] = "Questo wizard ti guiderà attraverso l'intero processo di installazione";
$arrLang['system'] = "Sistema";
$arrLang['system_architecture'] = "Architettura di sistema";
$arrLang['test_connection'] = "Verifica connessione";
$arrLang['test_database_connection'] = "Prova la connessione al database";
$arrLang['unknown'] = "Sconosciuto";
$arrLang['uninstall'] = "Disinstalla";
$arrLang['uninstallation_completed'] = "Disinstallazione completata!";
$arrLang['update'] = "Aggiorna";
$arrLang['updating_completed'] = "Aggiornamento completato!";
$arrLang['virtual_directory_support'] = "Supporto directory virtuale";
$arrLang['we_are_ready_to_installation'] = "Siamo pronti per procedere con l'installazione";
$arrLang['we_are_ready_to_installation_text'] = "";
$arrLang['writable'] = "Scrivibile";

$arrLang['core_configuration'] = "Configurazione di base";
$arrLang['department_configuration'] = 'Configurazione del reparto';
$arrLang['civilian_configuration'] = 'Configurazione civile'; 
$arrLang['administrative_configuration'] = 'Configurazione Amministrativa';
$arrLang['extra_settings'] = 'Impostazioni extra';

//** Begin Core Configuration Strings **//
$arrLang['COMMUNITY_NAME'] = "Nome della comunità";
$arrLang['COMMUNITY_NAME_notes'] = "Imposta il nome della tua comunità";
$arrLang['COMMUNITY_NAME_alert'] = "Il nome della comunità non può essere vuoto! Si prega di inserire nuovamente.";

$arrLang['BASE_URL'] = "URL dell'applicazione";
$arrLang['BASE_URL_notes'] = "L'URL per l'installazione di OpenCAD inlcuding, se utilizzata, è la sottodirectory
            Esempi validi includono:
            esempio.com - Dominio radice, nessuna sottodirectory
            sottodominio.esempio.com - sottodominio, nessuna sottodirectory
            sottodominio.esempio.com/sottodir - sottodominio con sottodirectory
            example.com/subdir - dominio root con sottodirectory
            I team di OpenCAD non raccomandano di includere il trailing / su uno degli esempi precedenti.
            Non romperà necessariamente nulla ma semplicemente fa sembrare strano il riferimento avendo due tagli quando non è necessario.";
$arrLang['BASE_URL_alert'] = "BASE_URL non può essere vuoto! Si prega di inserire nuovamente.";

$arrLang['CAD_FROM_EMAIL'] = 'CAD da Email';
$arrLang['CAD_FROM_EMAIL_notes'] = 'L\'email da cui ricevere le notifiche dal CAD dovrebbe apparire.

Esempio: cad@community.com
';

$arrLang['CAD_TO_EMAIL'] = 'CAD a Email';
$arrLang['CAD_TO_EMAIL_notes'] = 'L\'email da cui ricevere le notifiche dal CAD dovrebbe apparire.

Esempio: cad@community.com
';

$arrLang['AUTH_KEY'] = 'Chiave di autenticazione';
$arrLang['AUTH_SALT'] = 'Salt di autenticazione';
$arrLang['SECURE_AUTH_KEY'] = 'Chiave di autenticazione sicura';
$arrLang['SECURE_AUTH_SALT'] = 'Salt di autenticazione sicura';
$arrLang['LOGGED_IN_KEY'] = 'Chiave di accesso';
$arrLang['LOGGED_IN_SALT'] = 'Sale di accesso';
$arrLang['NONCE_KEY'] = 'Nonce Key';
$arrLang['NONCE_SALT'] = 'Sale di Nonce';
$arrLang['SESSION_KEY'] = 'Chiave sessione';

//** End Core Configuration Strings **//

//** Begin Police Strings **//
$arrLang['POLICE_NCIC'] = "";
$arrLang['POLICE_NCIC_notes'] = "Mostra / nasconde la funzionalità NCIC sulla console MDT. Se 'true' allora LEO sarà in grado di utilizzare le funzioni NCIC senza la necessità di un dispatcher, altrimenti se 'flase' allora LEO richiederà la presenza di dispatcher per utilizzare la funzionalità di NCIC.";
//** End Police Strings **//

//**  Begin Fire Strings **//
$arrLang['FIRE_PANIC'] = "Panica di fuoco";
$arrLang['FIRE_PANIC_notes'] = "Funzionalità Shows/Hides Panic nella console MDT per Fire. Se 'true' allora il personale di Fuoco sarà in grado di utilizzare il pulsante Panico, altrimenti se 'falso' il personale di Fuoco non sarà in grado di utilizzare il pulsante Panico.";

$arrLang['FIRE_BOLO'] = "Fuoco BOLO";
$arrLang['FIRE_BOLO_notes'] = "Funzionalità Shows/Hides Panic nella console MDT per Fire. Se 'true' allora il personale di Fuoco sarà in grado di visualizzare la scheda BOLO, altrimenti se 'false' il personale di Fuoco non sarà in grado di visualizzare la scheda BOLO";

$arrLang['FIRE_NCIC_NAME'] = "Nome NCIC di Fire";
$arrLang['FIRE_NCIC_NAME_notes'] = "Funzionalità Panica Show/Hides nella console MDT per Fire. Se 'true' allora il personale di Fuoco sarà in grado di utilizzare il lookup del nome NCIC, altrimenti se 'false' il personale di Fuoco non sarà in grado di utilizzare il lookup del nome NCIC";

$arrLang['FIRE_NCIC_PLATE'] = "Piastra NCIC di fuoco";
$arrLang['FIRE_NCIC_PLATE_notes'] = "Funzionalità Panica Show/Hides sulla console MDT per Fire. Se 'true' allora il personale di fuoco sarà in grado di utilizzare la funzione di lookup di piastre NCIC, altrimenti se 'falso' il personale di fuoco non sarà in grado di utilizzare la funzione di lookup di piastre NICI.";
//**  End Fire Strings **//

//** Begin EMS Strings **//
$arrLang['EMS_PANIC'] = "Pannello EMS";
$arrLang['EMS_PANIC_notes'] = "Funzionalità Shows/Hides Panic nella console MDT per EMS. Se 'vero' allora il personale di Fuoco sarà in grado di utilizzare il pulsante Panico, altrimenti se 'falso' il personale EMS non sarà in grado di utilizzare il pulsante Panico.";

$arrLang['EMS_BOLO'] = "EMS BOLO";
$arrLang['EMS_BOLO_notes'] = "Mostra / nasconde la funzionalità di panico sulla console MDT per EMS. Se \"vero\", il personale del Fuoco sarà in grado di visualizzare la scheda BOLO, altrimenti se \"falso\" il personale EMS non sarà in grado di visualizzare la scheda BOLO";

$arrLang['EMS_NCIC_NAME'] = "Nome NCIC EMS";
$arrLang['EMS_NCIC_NAME_notes'] = "Mostra / nasconde la funzionalità di panico sulla console MDT per EMS. Se 'true', il personale del Fire sarà in grado di utilizzare la ricerca del nome di nome NCIC, altrimenti se 'false' il personale EMS non sarà in grado di utilizzare la ricerca del nome NCIC";

$arrLang['EMS_NCIC_PLATE'] = "Piastra NCIC EMS";
$arrLang['EMS_NCIC_PLATE_notes'] = "Mostra / nasconde la funzionalità di panico sulla console MDT per EMS. Se 'vero' il personale del Fuoco sarà in grado di utilizzare la funzione di ricerca della piastra NCIC, altrimenti se 'falso' il personale EMS non sarà in grado di utilizzare la funzione di ricerca della piastra NCIC.";
//** End EMS Strings **//

//** Begin Roadside Assistance Strings **//
$arrLang['ROADSIDE_PANIC'] = "Panica di Roadside";
$arrLang['ROADSIDE_PANIC_notes'] = "Funzionalità Shows/Hides Panic nella console MDT per assistenza Roadside. Se 'true' allora RAO sarà in grado di utilizzare il pulsante Panico, altrimenti se 'false' allora RAO non sarà in grado di utilizzare il pulsante Panico.";

$arrLang['ROADSIDE_BOLO'] = "BOLO di Roadside";
$arrLang['ROADSIDE_BOLO_notes'] = "Le funzionalità Shows/Hides BOLO nella console MDT per l'assistenza al Roadside. Se 'true' allora RAO sarà in grado di utilizzare il pulsante Panico, altrimenti se 'false' allora RAO non sarà in grado di utilizzare il pulsante Panico.";

$arrLang['ROADSIDE_NCIC_NAME'] = "Nome NCIC Roadside";
$arrLang['ROADSIDE_NCIC_NAME_notes'] = "Le funzionalità Shows/Hides NCIC nella console MDT per l'assistenza Roadside. Se 'true' allora RAO sarà in grado di utilizzare la query di piastre NCIC senza bisogno di un dispatcher, altrimenti se 'false' allora RAO richiederà la presenza di dispatcher per utilizzare la funzionalità di query NCIC.";

$arrLang['ROADSIDE_NCIC_PLATE'] = "Piastra NCIC";
$arrLang['ROADSIDE_NCIC_PLATE_notes'] = "Le funzionalità Shows/Hides NCIC nella console MDT per l'assistenza Roadside. Se 'true' allora RAO sarà in grado di utilizzare la query di piastre NCIC senza bisogno di un dispatcher, altrimenti se 'false' allora RAO richiederà la presenza di dispatcher per utilizzare la funzionalità di query NCIC.";

$arrLang['ROADSIDE_CALL_SELFASSIGN'] = "Assegnazione automatica chiamata";
$arrLang['ROADSIDE_CALL_SELFASSIGN_notes'] = "Se 'true' allora RAO potrà utilizzare la query di piastre NCIC senza bisogno di un dispatcher, altrimenti se 'false' allora RAO richiederà la presenza del dispatcher per utilizzare la funtificità della query NCIC.";
//** End Roadside Assistance Strings **//

//** Begin Civilian Strings **//
$arrLang['CIV_WARRANT'] = "Creazione guerriero civile";
$arrLang['CIV_WARRANT_notes'] = "Consenti / Non consentire ai Civili di gestire i loro mandati. Se impostato su \"true\", Civ sarà in grado di cancellare i warrant dal loro profilo, altrimenti se impostato su \"false\", allora Civ non avrà la possibilità di rimuovere i warrant.";

$arrLang['CIV_REG'] = "Registrazione civile istantanea";
$arrLang['CIV_REG_notes'] = "Consenti / Non consentire la registrazione diretta per Civillians. Se impostato su \"true\", i civiles non richiedono l'approvazione dell'amministratore, se impostato su \"false\", quindi la registrazione Civillian richiede l'approvazione dell'amministratore. Consentire / Disabilitare la registrazione immediata per i civili. Se \"vero\", la registrazione civile richiederà l'approvazione dell'amministratore, altrimenti se \"falso\", le registrazioni civili NON richiedono l'approvazione dell'amministratore.";

$arrLang['CIV_LIMIT_MAX_IDENTITIES'] = "Identità Massime Civili";
$arrLang['CIV_LIMIT_MAX_IDENTITIES_notes'] = "Se CIV_LIMIT_MAX è '0' allora i civili potranno creare identità illimitate. Altrimenti, se CIV_LIMIT_MAX è un valore diverso da '0' allora il numero massimo di possibili identità sarà massimo.";

$arrLang['CIV_LIMIT_MAX_VEHICLES'] = "Veicoli massimi civili";
$arrLang['CIV_LIMIT_MAX_VEHICLES_notes'] = "Se CIV_LIMIT_MAX_VEHICLES è '0' allora il civile sarà in grado di creare veicoli illimitati. Altrimenti, se CIV_LIMIT_MAX_VEHICLES è un valore diverso da '0' allora il numero massimo di veicoli possibili a quel valore sarà massimo";

$arrLang['CIV_LIMIT_MAX_WEAPONS'] = "Armi Massimi civiltà";
$arrLang['CIV_LIMIT_MAX_WEAPONS_notes'] = "Se CIV_LIMIT_MAX_WEAPONS è '0' allora il civile sarà in grado di creare armi illimitate. Altrimenti, se CIV_LIMIT_MAX_WEAPONS è un valore diverso da '0' allora il numero massimo di armi possibili a quel valore sarà massimo";
//** End Civilian Strings **//

//** Begin Administrative Strings**//
$arrLang['MODERATOR_APPROVE_USER'] = "Approva Utente Moderatore";
$arrLang['MODERATOR_APPROVE_USER_notes'] = "Se 'true' allora i moderatori potranno approvare nuove richieste utente, altrimenti, se 'false' allora i moderatori non saranno in grado di approvare nuove richieste utente.";

$arrLang['MODERATOR_EDIT_USER'] = "Modifica utente moderatore";
$arrLang['MODERATOR_EDIT_USER_notes'] = "Se 'true' allora i moderatori saranno in grado di modificare il profilo degli utenti, se 'falso' allora i moderatori non saranno in grado di modificare il profilo degli utenti. Questo include nome, email, identificatore e ruoli. I moderatori saranno in grado di aggiungere gruppi di utenti ma la loro rimozione è regolata dall'impostazione MODERATOR_REMOVE_GROUPS.";

$arrLang['MODERATOR_DELETE_USER'] = "Elimina utente da moderatore";
$arrLang['MODERATOR_DELETE_USER_notes'] = "Se 'true' allora i moderatori saranno in grado di eliminare gli utenti, altrimenti se i moderatori 'false' non saranno in grado di eliminare gli utenti.";

$arrLang['MODERATOR_SUSPEND_WITHOUT_REASON'] = "Sospendere Moderatore senza motivo";
$arrLang['MODERATOR_SUSPEND_WITHOUT_REASON_notes'] = "Se 'true' allora i moderatori potranno sospendere gli utenti senza motivo, altrimenti se i moderatori 'false' non saranno in grado di sospendere gli utenti senza motivo.";

$arrLang['MODERATOR_SUSPEND_WITH_REASON'] = "Sospendere Moderatore con motivo";
$arrLang['MODERATOR_SUSPEND_WITH_REASON_notes'] = "Se 'true' allora i moderatori potranno sospendere gli utenti con un motivo, se i moderatori 'false' non saranno in grado di sospendere gli utenti con un motivo.";

$arrLang['MODERATOR_REACTIVATE_USER'] = "Riattiva utente moderatore";
$arrLang['MODERATOR_REACTIVATE_USER_notes'] = "Se 'true' allora i moderatori saranno in grado di togliere altri utenti, se i moderatori 'false' non saranno in grado di riattivare gli utenti.";

$arrLang['MODERATOR_REMOVE_GROUP'] = "Gruppo di rimozione moderatori";
$arrLang['MODERATOR_REMOVE_GROUP_notes'] = "Se 'true' allora i moderatori saranno in grado di rimuovere i gruppi di utenti, altrimenti se i moderatori 'false' non saranno in grado di rimuovere i gruppi dell'utente.";

$arrLang['MODERATOR_NCIC_EDITOR'] = "Editor NCIC Moderatore";
$arrLang['MODERATOR_NCIC_EDITOR_notes'] = "Se 'true' allora i moderatori potranno accedere all'editor NCIC, altrimenti se i moderatori 'false' non saranno in grado di accedere all'editor NCCIC.";

$arrLang['MODERATOR_DATA_MANAGER'] = "Gestore dati moderatore";
$arrLang['MODERATOR_DATA_MANAGER_notes'] = "Se 'true' allora i moderatori potranno accedere al Gestore Dati di gioco, altrimenti se 'falso' allora i moderatori non potranno accedere al gestore dei dati Gam.";

$arrLang['MODERATOR_DATAMAN_CITATIONTYPES'] = "Editor di tipi di citazione Moderatore";
$arrLang['MODERATOR_DATAMAN_CITATIONTYPES_notes'] = "Se 'true' allora i moderatori avranno accesso al modulo Citazione Types Manager del Game Data Manager, altrimenti se 'false' allora ai moderatori verrà negato l'accesso.";

$arrLang['MODERATOR_DATAMAN_DEPARTMENTS'] = "Editor dei reparti Moderatore";
$arrLang['MODERATOR_DATAMAN_DEPARTMENTS_notes'] = "Se 'true' allora i moderatori avranno accesso al modulo Gestione dei Dipartimenti del Gestore dei Dati di gioco, altrimenti se 'falso' allora ai moderatori verrà negato l'accesso.";

$arrLang['MODERATOR_DATAMAN_INCIDENTTYPES'] = "Editor di Tipi di Segnalazione Moderatore";
$arrLang['MODERATOR_DATAMAN_INCIDENTTYPES_notes'] = "Se 'true' allora i moderatori avranno accesso al modulo di gestione Segnalazioni del Gestore dei Dati di gioco, altrimenti se 'falso' allora ai moderatori verrà negato l'accesso.";

$arrLang['MODERATOR_DATAMAN_RADIOCODES'] = "Editor di codici radio moderatori";
$arrLang['MODERATOR_DATAMAN_RADIOCODES_notes'] = "Se 'true' allora i moderatori avranno accesso al modulo Radio Codes Manager del Gestore dei Dati di gioco, altrimenti se 'falso' allora ai moderatori verrà negato l'accesso.";

$arrLang['MODERATOR_DATAMAN_STREETS'] = "Editor di Street Moderator";
$arrLang['MODERATOR_DATAMAN_STREETS_notes'] = "Se 'true' allora i moderatori avranno accesso al modulo Streets Manager del Game Data Manager, altrimenti se 'false' allora ai moderatori verrà negato l'accesso.";

$arrLang['MODERATOR_DATAMAN_VECHILES'] = "";
$arrLang['MODERATOR_DATAMAN_VEHICLES_notes'] = "Se 'true' allora i moderatori avranno accesso al modulo Vehicles Manager del Game Data Manager, altrimenti se 'false' allora ai moderatori verrà negato l'accesso.";

$arrLang['MODERATOR_DATAMAN_WARNINGTYPES'] = "Editor Tipi di avviso Moderatore";
$arrLang['MODERATOR_DATAMAN_WARNINGTYPES_notes'] = "Se 'true' allora i moderatori avranno accesso al modulo di gestione dei tipi di avviso del Gestore dei Dati di gioco, altrimenti se 'falso' allora ai moderatori verrà negato l'accesso.";

$arrLang['MODERATOR_DATAMAN_WARRANTTYPES'] = "Editor dei tipi di mandato moderatori";
$arrLang['MODERATOR_DATAMAN_WARRANTTYPES_notes'] = "Se 'true' allora i moderatori avranno accesso al modulo Gestore dei tipi di mandato del Gestore dei Dati di gioco, altrimenti se 'falso' allora ai moderatori verrà negato l'accesso.";

$arrLang['MODERATOR_DATAMAN_WEAPONS'] = "Editor di armi moderatori";
$arrLang['MODERATOR_DATAMAN_WEAPONS_notes'] = "Se 'true' allora i moderatori avranno accesso al modulo di gestione delle armi del Gestore dei Dati di gioco, altrimenti se 'falso' allora ai moderatori verrà negato l'accesso.";

$arrLang['MODERATOR_DATAMAN_IMPEXPRESET'] = "Importa/Esporta/Reimposta moderatori";
$arrLang['MODERATOR_DATAMAN_IMPEXPRESET_notes'] = "Se 'true' allora i moderatori avranno accesso al modulo Importa/Esporta/Reset del Gestore Dati di gioco, altrimenti se 'falso' allora i moderatori saranno negati l'accesso.";
//** End Administrative Strings**//

//** Begin Extra Settings Strings **//
$arrLang['DEMO_MODE'] = "Modalità Demo";
$arrLang['DEMO_MODE_notes'] = "'true' quindi varie funzionalità di gestione degli utenti di OpenCAD verranno bloccate, altrimenti se 'false' sarà disponibile la piena funzionalità di OpenCAD *.";

$arrLang['USE_GRAVATAR'] = "Gravatar";
$arrLang['USE_GRAVATAR_notes'] = "OpenCAD recupererà dinamicamente il tuo avatar da {@link Gravatar http://en.gravatar.com/} se hai un account. Altrimenti userà l'immagine generica predefinita inclusa in OpenCAD.";
//** End Extra Settings Strings **//

//** Begin Common Global Strings **/
$arrLang['WELCOME'] = "Benvenuto";
$arrLang["GENERAL"] = "Generale";
$arrLang["CAD_SYSTEM"] = "Sistema CAD";
$arrLang["EDIT"] = "Modifica";
$arrLang["DELETE"] = "Elimina";
$arrLang["NAME"] = "Nome";
$arrLang["EMAIL"] = "E-mail";
$arrLang["ROLE"] = "Ruolo";
$arrLang["IDENTIFIER"] = "Identificatore";
$arrLang["GROUPS"] = "Gruppi";
$arrLang["ACTIONS"] = "Azioni";
$arrLang["NEXT"] = "Avanti";
$arrLang["PREVIOUS"] = "Precedente";
$arrLang["SEARCH"] =  "Cerca";
$arrLang["DASHBOARD"] =  "Cruscotto";
$arrLang["LOGOUT"] =  "Esci";
$arrLang["NEED_HELP"] =  "Hai bisogno di aiuto?";
$arrLang["FULLSCREEN"] =  "Schermo intero";
$arrLang["DOB"] = "DOB";
$arrLang["ADDRESS"] = "Indirizzo";
$arrLang["GENDER"] = "Sesso";
$arrLang["RACE"] = "Corsa";
$arrLang["DL_STATUS"] = "Stato DL";
$arrLang["HAIR_COLOR"] = "Colore capelli";
$arrLang["BUILD"] = "Costruisci";
$arrLang["WEAPON_STATUS"] = "Stato Arma";
$arrLang["WEAPON_NAME"] = "Nome Arma";
$arrLang["WEAPON_TYPE"] ="Tipo di arma";
$arrLang["WEAPON_NOTES"] ="Note arma";
$arrLang["DECEASED"] = "Decenni";
$arrLang["REG_PLATE"] = "Piastra Reg";
$arrLang["VEHICLE_NOTES"] = "Note del veicolo";
$arrLang["NOT_YOU"] = "Non sei tu?";
$arrLang["ACTIVE_CALLS"] = "Chiamate attive";
$arrLang["ACTIVE_BOLOS"] = "BOLO attivi";
$arrLang["NCIC_NAME_LOOKUP"] = "Lookup nome NCIC";
$arrLang["NCIC_PLATE_LOOKUP"] = "Lookup di piastre NCIC";
$arrLang["NCIC_WEAPON_LOOKUP"] = "Ricerca armi NCIC";
$arrLang["SEND"] = "Invia";
$arrLang["MY_PROFILE"] = "Il mio profilo";
//** End Common Global Strings */

//** Begin Administrator/Moderator Console Strings  **/
$arrLang["CAD_ADMINISTRATION"] = "Gestione CAD";
$arrLang["STATISTICS_AT_A_GLANCE"] = "Statistiche a uno sguardo";
$arrLang["TOTAL_USERS"] = "Utenti totali";
$arrLang["ACEESS_REQUESTS"] = "Richieste di accesso";
$arrLang["THERE_ARE_CURRENTLY_NO_ACCESS_REQUESTS"] = "Al momento non ci sono richieste di accesso.";
$arrLang["CAD_USER_MANAGEMENT"] = "Gestione utenti CAD";
$arrLang["ACCOUNT_MANAGEMENT"] = "Gestione Account";
$arrLang["SUSPEND_WITH_REASON"] = "Sospendi con motivo";
$arrLang["SUSPEND_WITHOUT_REASON"] = "Sospendi senza motivo";
$arrLang["NCIC_EDITOR"] = "Editor NCIC";
$arrLang["NCIC_NAMES_DB"] = "";
$arrLang["NCIC_NAMES_DB_none"] = "";
$arrLang["NCIC_VEHICLES_DB"] = "Database di veicoli NCIC";
$arrLang["NCIC_VEHICLES_DB_none"] = "Nessun risultato trovato nel database dei veicoli NCIC.";
$arrLang["NCIC_WEAPONS_DB"] = "Database delle armi NCIC";
$arrLang["NCIC_WEAPONS_DB_none"] = "Nessun risultato trovato nel database delle armi NCIC.";
$arrLang["NCIC_WARNINGS_DB"] = "Database avvisi NCIC";
$arrLang["NCIC_WARNINGS_DB_none"] = "Nessun risultato trovato nel database delle armi NCIC.";
$arrLang["NCIC_CITATIONS_DB"] = "Database delle citazioni NCIC.";
$arrLang["NCIC_CITATIONS_DB_none"] = "Nessun risultato trovato nel database delle citazioni NCIC.";
$arrLang["NCIC_ARRESTS_DB"] = "Database di arresto NCIC";
$arrLang["NCIC_ARRESTS_DB_none"] = "Nessun risultato trovato nel database degli arresti NCIC.";
$arrLang["NCIC_WARRANTS_DB"] = "Database dei guerriglieri NCIC";
$arrLang["NCIC_WARRANTS_DB_none"] = "Nessun risultato trovato nel database dei Warrants NCIC";
//** End Administrator/Moderator Console Strings  **/

//** Begin Civillian Console Strings **/
$arrLang["CIVILLIAN_CONSOLE"] = "Console civile";
$arrLang["MY_IDENTITIES"] = "Le mie identità";
$arrLang["MY_IDENTITIES_none"] = "Nessun risultato trovato nel database delle identità.";
$arrLang["MY_VEHICLES"] = "I miei veicoli";
$arrLang["MY_VEHICLES_none"] = "Nessun risultato trovato nel database dei veicoli.";
$arrLang["MY_WEAPONS"] = "Le mie armi";
$arrLang["MY_WEAPONS_none"] = "Nessun risultato trovato nel database delle armi.";
$arrLang["MY_WARRANTS"] = "I miei guerrieri";
$arrLang["MY_WARRANTS_none"] = "Nessun risultato trovato nel database dei mandati.";
$arrLang["CREATE_A_CALL"] = "Crea una chiamata";
$arrLang["ADD_NEW_IDENTITY"] = "Aggiungi nuova identità";
$arrLang["Add_ADD_NEW_PLATE"] = "";
$arrLang["ADD_NEW_WEAPON"] = "Aggiungi nuova arma";
$arrLang["CIVILLIAN_DASHBOARD"] = "Cruscotto civile";
$arrLang["VIEW_WARRANTS"] = "";
$arrLang["CREATE_WARRANT"] = "Crea guerriero";
$arrLang["UPDATE"] = "Aggiorna";
//** End Civillian Console Strings **/

//** Begin CAD Console Strings **/
$arrLang["CAD_CONSOLE"] = "Console CAD";
$arrLang["ACTIVE_DISPATCHERS"] = "Invio attivo";
$arrLang["ACTIVE_DISPATCHERS_none"] = "Nessun dispatcher attualmente disponibile.";
$arrLang["AVAILABLE_UNITS"] = "Unità disponibili";
$arrLang["UNAVAILABLE_UNITS"] = "Unità non disponibili";
$arrLang["NEW_PERSONS_BOLO"] = "Nuove persone BOLO";
$arrLang["NEW_VEHICLE_BOLO"] = "Nuovo veicolo BOLO";
$arrLang["NEW_CALL"] = "Nuova chiamata";
$arrLang["PANIC_BUTTON"] = "Pulsante antipanico";
$arrLang["PRIORITY_TONE"] = "PRIORITÀ";
$arrLang["STOP_BORADCASTING_BUTTON"] = "10-3 Toni";
$arrLang["STOPWATCH"] = "Cronometro";
$arrLang["WARNINGS"] = "Avvertimenti";
$arrLang["CITATIONS"] = "Citazioni";
$arrLang["ARREST_REPORT"] = "Arresta REPORT";
$arrLang["WARRANTS"] = "Guerrieri";
//** End CAD Console Strings *//

//** Begin MDT Console Strings **/
$arrLang["MDT_CONSOLE"] = "Console MDT";
$arrLang["MY_STATUS"] = "Mio Stato";
$arrLang["MY_CALL"] ="La mia chiamata";
$arrLang["VIEW_PERSONS_BOLOS"] = "Visualizza persone BOLOs";
$arrLang["VIEW_VEHICLE_BOLOS"] = "Vedi Veicoli BOLO";
//** End MDT Console Strings *//

//** Begin Profile Console Strings **/
$arrLang["PASSWORD"] = "Password";
$arrLang["CHANGE_PASSWORD"] = "Cambia password";
$arrLang["MY_PRFILE"] ="Il mio profilo";
//** End Profile Console Strings *//
?>
