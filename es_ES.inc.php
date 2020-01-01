<?php
$arrLang = array();

$arrLang['alert_admin_email_wrong'] = "¡El correo electrónico de administración tiene un formato incorrecto! Por favor, vuelva a introducir.";
$arrLang['alert_min_version_db'] = "Este programa requiere al menos la versión _DB_VERSION_ de _DB_ instalada (la versión actual es _DB_CURR_VERSION_). No se puede proceder a la instalación.";
$arrLang['alert_min_version_php'] = "Este programa requiere al menos la versión _PHP_VERSION_ de PHP instalada (la versión actual es _PHP_CURR_VERSION_). No puede continuar la instalación.";
$arrLang['alert_directory_not_writable'] = "¡El directorio <b>_FILE_DIRECTORY_</b> no tiene permisos de escritura! <br />Debes conceder permisos de escritura (permisos de acceso 0755 o 777, dependiendo de la configuración del sistema) a este directorio definido en EI_CONFIG_FILE_DIRECTORY antes de iniciar la instalación!";
$arrLang['alert_extension_not_installed'] = "La extensión necesaria pdo_mysql no está instalada en su servidor! No puede continuar la instalación.";
$arrLang['alert_unable_to_install'] = "No se puede instalar esta aplicación porque una aplicación con la misma identidad ya está instalada. <br>Sólo puede <b>actualizar</b> o <b>Desinstalar</b> la aplicación. Asegúrese de que tiene una copia de seguridad de su base de datos antes de proceder.";
$arrLang['alert_required_fields'] = "Los elementos marcados con un asterisco son obligatorios";
$arrLang['alert_db_host_empty'] = "El host de base de datos no puede estar vacío! Por favor, vuelva a introducir.";
$arrLang['alert_db_name_empty'] = "El nombre de la base de datos no puede estar vacío! Por favor, vuelva a introducir.";
$arrLang['alert_db_username_empty'] = "El nombre de usuario de la base de datos no puede estar vacío! Por favor, vuelva a introducir.";
$arrLang['alert_db_password_empty'] = "La contraseña de la base de datos no puede estar vacía! Por favor, vuelva a introducir.";
$arrLang['alert_admin_name_empty'] = "¡El nombre de usuario Admin no puede estar vacío! Por favor, vuelva a introducir.";
$arrLang['alert_admin_identifier_empty'] = "¡El identificador no puede estar vacío! Por favor, vuelva a entrar.";
$arrLang['alert_admin_password_empty'] = "¡La contraseña del administrador no puede estar vacía! Por favor, vuelva a introducir.";
$arrLang['alert_wrong_testing_parameters'] = "¡Los parámetros de prueba son incorrectos! Por favor, introduzca parámetros válidos.";
$arrLang['alert_remove_files'] = "Por razones de seguridad, por favor elimina la carpeta <b>oc-install/</b> de tu servidor!";
$arrLang['alert_wrong_parameter_passed'] = "Parámetro incorrecto pasado! Por favor, vuelva al paso anterior e inténtelo de nuevo.";

$arrLang['error_asp_tags'] = "Esta instalación requiere <b>etiquetas ASP</b> ajustes habilitados.";
$arrLang['error_can_not_open_config_file'] = "¡La base de datos se ha creado correctamente! No se puede abrir el archivo de configuración _CONFIG_FILE_PATH_ para guardar información.";
$arrLang['error_can_not_read_file'] = "No se pudo leer el archivo <b>_SQL_DUMP_FILE_</b>! Por favor, compruebe si existe un archivo.";
$arrLang['error_check_db_exists'] = "¡Error de conexión a la base de datos! Por favor, compruebe si su base de datos existe y el acceso permitido para el usuario <b>_DATABASE_USERNAME_</b>._ERROR_<br />";
$arrLang['error_check_db_connection'] = "¡Error al conectar la base de datos! Por favor, compruebe sus parámetros de conexión._ERROR_<br />";
$arrLang['error_pdo_support'] = "Esta instalación requiere <b>extensión PDO</b> instalada.";
$arrLang['error_sql_executing'] = "¡Error de ejecución SQL! Por favor, active el modo debug y compruebe cuidadosamente una sintaxis de su archivo de volcado SQL.";
$arrLang['error_server_requirements'] = "Esta instalación requiere la configuración _SETTINGS_NAME_ activada/instalada.";
$arrLang['error_vd_support'] = "Esta instalación requiere soporte de Directorio Virtual activado.";

$arrLang['admin_access_data'] = "Información de la cuenta del administrador";
$arrLang['admin_access_data_descr'] = "(necesitas esto para entrar en el área de administración protegida)";
$arrLang['admin_email'] = "Email";
$arrLang['admin_email_info'] = "El correo electrónico del administrador que se utilizará para iniciar sesión en esta cuenta.

Más cuentas de administrador se pueden aprovisionar más adelante en la Administración de usuarios de la Consola del administrador";
$arrLang['admin_name'] = "Nombre";
$arrLang['admin_login_info'] = "Su nombre según las políticas y procedimientos de su comunidad. Esto se puede ajustar más tarde si es necesario.";
$arrLang['admin_identifier'] = "Identificador";
$arrLang['admin_identifier_info'] = "Tu identificador. IE: 1D-01 Nota. Depende de tu comunidad.";
$arrLang['admin_password'] = "Contraseña";
$arrLang['admin_password_info'] = "Le recomendamos que su contraseña no sea una palabra que pueda encontrar en el diccionario, incluye letras mayúsculas y minúsculas, y contiene al menos un carácter especial (1-9, !, *, _, etc.).";
$arrLang['administrator_account'] = "Cuenta de administrador";
$arrLang['options_page'] = "Ajustes del sistema";
$arrLang['administrator_account_skipping'] = "Omitiendo (Cuenta de Admin no requerida)";
$arrLang['asp_tags'] = "Etiquetas de Asp";
$arrLang['back'] = "Atrás";
$arrLang['build_date'] = "Fecha de construcción";
$arrLang['cancel_installation'] = "Cancelar instalación";
$arrLang['click_start_button'] = "Haga clic en el botón Inicio para continuar";
$arrLang['click_to_start_installation'] = "Haga clic para iniciar la instalación";
$arrLang['checked'] = "Comprobado";
$arrLang['complete'] = "Completado";
$arrLang['complete_installation'] = "Completar Instalación";
$arrLang['completed'] = "Completado";
$arrLang['continue'] = "Continuar";
$arrLang['continue_installation'] = "Continuar Instalación";
$arrLang['database_extension'] = "Extensión de base de datos";
$arrLang['database_host'] = "Host de base de datos";
$arrLang['database_host_info'] = "Nombre de host o dirección IP del servidor de la base de datos. El servidor de la base de datos puede tener la forma de un nombre de host (y / o dirección de puerto), como db1.myserver.com, o localhost: 5432, o como una dirección IP, como 192.168.0.1";
$arrLang['database_import'] = "Importar base de datos";
$arrLang['database_import_error'] = "Importar base de datos (error)";
$arrLang['database_name'] = "Nombre de base de datos";
$arrLang['database_name_info'] = "Nombre de base de datos. La base de datos utilizada para almacenar los datos. Un ejemplo de nombre de base de datos es 'testdb'.";
$arrLang['database_username'] = "Usuario de base de datos";
$arrLang['database_username_info'] = "Usuario de base de datos. El nombre de usuario utilizado para conectarse al servidor de base de datos. Un ejemplo de nombre de usuario es 'test_123'.";
$arrLang['database_password'] = "Contraseña de base de datos";
$arrLang['database_password_info'] = "Contraseña de la base de datos. La contraseña se utiliza junto con el nombre de usuario, que forma la cuenta de usuario de la base de datos.";
$arrLang['database_prefix'] = "Prefijo de base de datos";
$arrLang['database_prefix_info'] = "Prefijo de base de datos. Se utiliza para establecer el prefijo único para tablas de base de datos y evitar que un tipo de datos interfiera con otro. Un ejemplo del prefijo de base de datos es 'abc_'.";
$arrLang['database_settings'] = "Configuración de base de datos";
$arrLang['directories_and_files'] = "Directorios y archivos";
$arrLang['disabled'] = "Desactivado";
$arrLang['enabled'] = "Activado";
$arrLang['error'] = "Error";
$arrLang['extensions'] = "Extensiones";
$arrLang['getting_system_info'] = "Obteniendo información del sistema";
$arrLang['file_successfully_rewritten'] = "El archivo _CONFIG_FILE_ fue reescrito con éxito y se actualizó la base de datos.";
$arrLang['file_successfully_deleted'] = "El archivo _CONFIG_FILE_ se ha eliminado correctamente y se ha eliminado la base de datos.";
$arrLang['file_successfully_created'] = "El archivo _CONFIG_FILE_ se ha creado correctamente.";
$arrLang['failed'] = "fallo";
$arrLang['folder_paths'] = "Rutas de carpeta";
$arrLang['follow_the_wizard'] = "Siga el asistente <b></b> para instalar su programa";
$arrLang['installed'] = "instalado";
$arrLang['installation_complete'] = "Instalación completada!";
$arrLang['installation_guide'] = "Guía de instalación";
$arrLang['installation_type'] = "Tipo de instalación";
$arrLang['language'] = "Idioma";
$arrLang['license'] = "Licencia";
$arrLang['loading'] = "cargando";
$arrLang['mbstring_support'] = "Soporte de cadenas multibyte";
$arrLang['magic_quotes_gpc'] = "Comillas mágicas para GPC (Get/Post/Cookie)";
$arrLang['magic_quotes_runtime'] = "Duración de Presupuesto Mágico";
$arrLang['magic_quotes_sybase'] = "Las comillas mágicas están en estilo Sybase";
$arrLang['mode'] = "Modo";
$arrLang['modes'] = "Modos";
$arrLang['new_installation_of'] = "Nueva instalación de";
$arrLang['new'] = "Nuevo";
$arrLang['no'] = "No";
$arrLang['no_writable'] = "sin permisos de escritura";
$arrLang['not_installed'] = "no instalado";
$arrLang['off'] = "Apagar";
$arrLang['ok'] = "OK";
$arrLang['on'] = "En";
$arrLang['passed'] = "Pasado";
$arrLang['password_encryption'] = "Cifrado de contraseña";
$arrLang['perform_manual_installation'] = "Realizar una instalación <b>Manual</b>";
$arrLang['pdo_support'] = "Soporte PDO";
$arrLang['php_version'] = "Versión PHP";
$arrLang['proceed_to_login_page'] = "Proceder a la página de inicio de sesión";
$arrLang['ready_to_install'] = "Listo para instalar";
$arrLang['remove_configuration_button'] = "Eliminar configuración y comenzar";
$arrLang['required_php_settings'] = "Configuración PHP requerida";
$arrLang['safe_mode'] = "Modo seguro";
$arrLang['select_installation_language'] = "Seleccionar idioma de instalación";
$arrLang['select_installation_type'] = "Seleccionar tipo de instalación";
$arrLang['sendmail_from'] = "Enviar correo desde";
$arrLang['sendmail_path'] = "Ruta Sendmail";
$arrLang['server_api'] = "API del servidor";
$arrLang['server_requirements'] = "Requisitos del servidor";
$arrLang['session_support'] = "Soporte de sesión";
$arrLang['short_open_tag'] = "Abrir etiqueta corta";
$arrLang['smtp'] = "SMTP";
$arrLang['smtp_port'] = "Puerto SMTP";
$arrLang['start'] = "Inicio";
$arrLang['start_all_over'] = "Empezar todo";
$arrLang['start_all_over_text'] = "Si desea eliminar esta instalación por alguna razón, puede forzar al instalador a eliminar la configuración actual e iniciar de nuevo. <br><b>ADVERTENCIA</b>: Debe deshacer la instalación de la base de datos manualmente para eliminar todos los cambios realizados.";
$arrLang['step_1_of'] = "Etapa 1 de 11";
$arrLang['step_2_of'] = "Etapa 2 de 11";
$arrLang['step_3_of'] = "Etapa 3 de 11";
$arrLang['step_4_of'] = "Etapa 4 de 11";
$arrLang['step_5_of'] = "Etapa 5 de 11";
$arrLang['step_6_of'] = "Etapa 6 de 11";
$arrLang['step_7_of'] = "Etapa 7 de 11";
$arrLang['step_8_of'] = "Etapa 8 de 11";
$arrLang['step_9_of'] = "Etapa 9 de 11";
$arrLang['step_10_of'] = "Etapa 10 de 11";
$arrLang['step_11_of'] = "Etapa 11 de 11";
$arrLang['sub_title_message'] = "Este asistente le guiará a través de todo el proceso de instalación";
$arrLang['system'] = "Sistema";
$arrLang['system_architecture'] = "Arquitectura del sistema";
$arrLang['test_connection'] = "Probar conexión";
$arrLang['test_database_connection'] = "Probar conexión de base de datos";
$arrLang['unknown'] = "Desconocido";
$arrLang['uninstall'] = "Desinstalar";
$arrLang['uninstallation_completed'] = "Desinstalación completada!";
$arrLang['update'] = "Actualizar";
$arrLang['updating_completed'] = "Actualización completada!";
$arrLang['virtual_directory_support'] = "Soporte de Directorio Virtual";
$arrLang['we_are_ready_to_installation'] = "Estamos listos para proceder con la instalación";
$arrLang['we_are_ready_to_installation_text'] = "";
$arrLang['writable'] = "Escribible";

$arrLang['core_configuration'] = "Configuración del núcleo";
$arrLang['department_configuration'] = 'Configuración del departamento';
$arrLang['civilian_configuration'] = 'Configuración civil'; 
$arrLang['administrative_configuration'] = 'Configuracion Administrativa';
$arrLang['extra_settings'] = 'Ajustes adicionales';

//** Begin Core Configuration Strings **//
$arrLang['COMMUNITY_NAME'] = "Nombre de la comunidad";
$arrLang['COMMUNITY_NAME_notes'] = "Establece el nombre de tu comunidad";
$arrLang['COMMUNITY_NAME_alert'] = "¡El nombre de la comunidad no puede estar vacío! Por favor, vuelva a introducir.";

$arrLang['BASE_URL'] = "URL de la aplicación";
$arrLang['BASE_URL_notes'] = "La URL a su instalación de OpenCAD incluye, si se utiliza, su subdirectorio.
            ejemplos válidos incluyen:
            example.com - Dominio raíz, no subdirectorio
            subdominio.ejemplo.com - subdominio, no subdirectorio
            subdominio.ejemplo.com/subdir - subdominio con el subdirectorio
            example.com/subdir - dominio raíz con el subdirectorio
            Los equipos de OpenCAD no recomiendan incluir el final / en ninguno de los ejemplos anteriores.
            No necesariamente romperá nada, solo hace que la referencia parezca extraña al tener dos recortes cuando no se necesita.";
$arrLang['BASE_URL_alert'] = "BASE_URL no puede estar vacío! Por favor, vuelva a introducir.";

$arrLang['CAD_FROM_EMAIL'] = 'CAD desde Email';
$arrLang['CAD_FROM_EMAIL_notes'] = 'El correo electrónico del que las nociones de tu CAD deben aparecer.

Ejemplo: cad@community.com
';

$arrLang['CAD_TO_EMAIL'] = 'CAD a Email';
$arrLang['CAD_TO_EMAIL_notes'] = 'El correo electrónico del que las nociones de tu CAD deben aparecer.

Ejemplo: cad@community.com
';

$arrLang['AUTH_KEY'] = 'Clave de autenticación';
$arrLang['AUTH_SALT'] = 'Autenticación Salt';
$arrLang['SECURE_AUTH_KEY'] = 'Clave de autenticación segura';
$arrLang['SECURE_AUTH_SALT'] = 'Autenticación segura Salt';
$arrLang['LOGGED_IN_KEY'] = 'Clave de inicio de sesión';
$arrLang['LOGGED_IN_SALT'] = 'Salida de inicio de sesión';
$arrLang['NONCE_KEY'] = 'Clave Nonce';
$arrLang['NONCE_SALT'] = 'Sal Nonce';
$arrLang['SESSION_KEY'] = 'Clave de sesión';

//** End Core Configuration Strings **//

//** Begin Police Strings **//
$arrLang['POLICE_NCIC'] = "";
$arrLang['POLICE_NCIC_notes'] = "Muestra / oculta la funcionalidad NCIC en la consola MDT. Si es 'verdadero', entonces LEO podrá usar las funciones de NCIC sin la necesidad de un despachador; de lo contrario, si 'flase' entonces LEO requerirá la presencia del despachador para usar la funcionalidad de NCIC.";
//** End Police Strings **//

//**  Begin Fire Strings **//
$arrLang['FIRE_PANIC'] = "Panic de Fuego";
$arrLang['FIRE_PANIC_notes'] = "Muestra/Oculta la funcionalidad de pánico en la consola MDT para Fuego. Si 'verdadero' entonces el personal de Fuego podrá usar el botón de pánico, de lo contrario si 'falso' entonces el personal de Fuego no podrá utilizar el botón de Panic.";

$arrLang['FIRE_BOLO'] = "Fuego BOLO";
$arrLang['FIRE_BOLO_notes'] = "Muestra/Oculta la funcionalidad de pánico en la consola MDT para Fuego. Si 'verdadero' entonces el personal de Fuego podrá ver el tablero de BOLO, si no 'falso' entonces el personal de Fuego no podrá ver el tablero de BOLO";

$arrLang['FIRE_NCIC_NAME'] = "Nombre NCIC de Fuego";
$arrLang['FIRE_NCIC_NAME_notes'] = "Muestra/Oculta la funcionalidad de pánico en la consola MDT para Fuego. Si 'verdadero' entonces el personal de Fuego podrá usar la búsqueda de nombre NCIC, de lo contrario si 'falso' entonces el personal de Fuego no podrá usar la búsqueda de nombres de NCIC";

$arrLang['FIRE_NCIC_PLATE'] = "Placa de Fire NCIC";
$arrLang['FIRE_NCIC_PLATE_notes'] = "Muestra/Oculta la funcionalidad de pánico en la consola MDT para Fuego. Si 'verdadero' entonces el personal de Fuego podrá utilizar la función de búsqueda de placas NCIC, de lo contrario si 'falso' entonces el personal de Fuego no podrá utilizar la función de búsqueda de placas NICI.";
//**  End Fire Strings **//

//** Begin EMS Strings **//
$arrLang['EMS_PANIC'] = "Panic EMS";
$arrLang['EMS_PANIC_notes'] = "Muestra/Oculta la funcionalidad de pánico en la consola MDT para EMS. Si 'verdadero' entonces el personal de fuego será capaz de usar el botón de pánico, si no 'falso' entonces el personal de EMS no podrá utilizar el botón de pánico.";

$arrLang['EMS_BOLO'] = "BOLO EMS";
$arrLang['EMS_BOLO_notes'] = "Muestra / oculta la funcionalidad de Panic en la consola MDT para EMS. Si es 'verdadero', entonces el personal de Bomberos podrá ver la placa BOLO; de lo contrario, si es 'falso', el personal de EMS no podrá ver la placa BOLO";

$arrLang['EMS_NCIC_NAME'] = "Nombre EMS NCIC";
$arrLang['EMS_NCIC_NAME_notes'] = "Muestra / oculta la funcionalidad de Panic en la consola MDT para EMS. Si es 'verdadero', entonces el personal de Bomberos podrá usar la búsqueda de nombres de nombres NCIC, de lo contrario, si es 'falso', el personal de EMS no podrá usar la búsqueda de nombres de NCIC";

$arrLang['EMS_NCIC_PLATE'] = "Placa EMS NCIC";
$arrLang['EMS_NCIC_PLATE_notes'] = "Muestra / oculta la funcionalidad de Panic en la consola MDT para EMS. Si es \"verdadero\", entonces el personal de Bomberos podrá usar la función de búsqueda de placa NCIC, de lo contrario, si es \"falso\", el personal de EMS no podrá usar la función de búsqueda de placa NCIC.";
//** End EMS Strings **//

//** Begin Roadside Assistance Strings **//
$arrLang['ROADSIDE_PANIC'] = "Pánico de costado";
$arrLang['ROADSIDE_PANIC_notes'] = "Muestra/Oculta la funcionalidad de pánico en la consola MDT para Asistencia de Roadside. Si 'true' entonces RAO podrá usar el botón de pánico, si no 'false' entonces RAO no podrá usar el botón de pánico.";

$arrLang['ROADSIDE_BOLO'] = "BOLO DEL costado";
$arrLang['ROADSIDE_BOLO_notes'] = "Muestra/oculta la funcionalidad de BOLO en la consola MDT para Asistencia de Roadside. Si 'true' entonces RAO podrá usar el botón de Panic, si no 'false' entonces RAO no podrá usar el botón de Panic.";

$arrLang['ROADSIDE_NCIC_NAME'] = "Nombre NCIC del borde";
$arrLang['ROADSIDE_NCIC_NAME_notes'] = "Si 'true' entonces RAO podrá usar la consulta de la placa NCIC sin necesidad de un despachador, si 'false' entonces RAO requerirá la presencia de un despachador para utilizar la función de consulta de la placa NCIC.";

$arrLang['ROADSIDE_NCIC_PLATE'] = "Placa NCIC de borde";
$arrLang['ROADSIDE_NCIC_PLATE_notes'] = "Si 'true' entonces RAO podrá usar la consulta de la placa NCIC sin necesidad de un despachador, si 'false' entonces RAO requerirá la presencia de un despachador para utilizar la función de consulta de la placa NCIC.";

$arrLang['ROADSIDE_CALL_SELFASSIGN'] = "Autoasignar llamada a la puerta";
$arrLang['ROADSIDE_CALL_SELFASSIGN_notes'] = "Si 'verdadero' entonces RAO podrá usar la consulta de placa NCIC sin necesidad de un despachador, si 'false' entonces RAO requerirá la presencia de un despachador para usar la funcacidad de consulta de placa NCIC.";
//** End Roadside Assistance Strings **//

//** Begin Civilian Strings **//
$arrLang['CIV_WARRANT'] = "Creación de Guerrero Civil";
$arrLang['CIV_WARRANT_notes'] = "Permitir / No permitir que los civiles manejen sus órdenes. Si se establece en 'verdadero', Civs podrá eliminar las garantías de su perfil; de lo contrario, si se establece en 'falso', Civs no tendrá la capacidad de eliminarlas.";

$arrLang['CIV_REG'] = "Registro civil instantáneo";
$arrLang['CIV_REG_notes'] = ".";

$arrLang['CIV_LIMIT_MAX_IDENTITIES'] = "Limite de identidades de civiles";
$arrLang['CIV_LIMIT_MAX_IDENTITIES_notes'] = "Si CIV_LIMIT_MAX es '0' entonces los civiles podrán crear identidades ilimitadas. De lo contrario, si CIV_LIMIT_MAX es un valor distinto de '0' entonces limitará el número máximo de identidades posibles a ese valor.";

$arrLang['CIV_LIMIT_MAX_VEHICLES'] = "Vehículos máximos civiles";
$arrLang['CIV_LIMIT_MAX_VEHICLES_notes'] = "Si CIV_LIMIT_MAX_VEHICLES es '0' entonces el civil podrá crear vehículos ilimitados, por el contrario, si CIV_LIMIT_MAX_VEHICLES es un valor distinto de '0', dicho número sera el máximo de vehículos a añadir por el civil";

$arrLang['CIV_LIMIT_MAX_WEAPONS'] = "Máximo de armas por civil";
$arrLang['CIV_LIMIT_MAX_WEAPONS_notes'] = "Si CIV_LIMIT_MAX_WEAPONS es '0' entonces el civil podrá añadir un numero ilimitado de armas, por el contrario, si CIV_LIMIT_MAX_WEAPONS es un valor distinto de '0', dicho numero sera el máximo numero de armas a añadir";
//** End Civilian Strings **//

//** Begin Administrative Strings**//
$arrLang['MODERATOR_APPROVE_USER'] = "Moderador Aprobar Usuario";
$arrLang['MODERATOR_APPROVE_USER_notes'] = "Si 'true' entonces los moderadores serán capaces de aprobar nuevas solicitudes de usuario, si la opción es 'false' entonces los moderadores no podrán aprobar nuevos usuarios.";

$arrLang['MODERATOR_EDIT_USER'] = "Editar usuario";
$arrLang['MODERATOR_EDIT_USER_notes'] = "Si 'verdadero' entonces los moderadores podrán editar el perfil de los usuarios, si 'false' entonces los moderadores no podrán editar el perfil de los usuarios. Esto incluye nombre, correo electrónico, identificador y roles. Los moderadores podrán añadir grupos de usuarios pero la eliminación de ellos está regida por la configuración MODERATOR_REMOVE_GROUPS.";

$arrLang['MODERATOR_DELETE_USER'] = "Moderador Eliminar Usuario";
$arrLang['MODERATOR_DELETE_USER_notes'] = "Si 'verdadero' entonces los moderadores podrán eliminar usuarios, si los moderadores 'falsos' no podrán eliminar usuarios.";

$arrLang['MODERATOR_SUSPEND_WITHOUT_REASON'] = "Moderador Suspender sin razón";
$arrLang['MODERATOR_SUSPEND_WITHOUT_REASON_notes'] = "Si 'verdadero' entonces los moderadores podrán suspender a los usuarios sin una razón, si los moderadores 'falsos' no podrán suspender a los usuarios sin una razón.";

$arrLang['MODERATOR_SUSPEND_WITH_REASON'] = "Moderador Suspender con razón";
$arrLang['MODERATOR_SUSPEND_WITH_REASON_notes'] = "Si 'verdadero' entonces los moderadores podrán suspender a los usuarios con una razón, si los moderadores 'falsos' no podrán suspender a los usuarios con una razón.";

$arrLang['MODERATOR_REACTIVATE_USER'] = "Moderador Reactivar Usuario";
$arrLang['MODERATOR_REACTIVATE_USER_notes'] = "Si 'verdadero' entonces los moderadores podrán restablecer a los usuarios, si los moderadores 'falsos' no podrán reactivar a los usuarios.";

$arrLang['MODERATOR_REMOVE_GROUP'] = "Eliminar Grupo del Moderador";
$arrLang['MODERATOR_REMOVE_GROUP_notes'] = "Si 'verdadero' entonces los moderadores podrán eliminar los grupos de usuarios, si los moderadores 'falsos' no podrán eliminar los grupos del usuario.";

$arrLang['MODERATOR_NCIC_EDITOR'] = "Editor de NCIC del moderador";
$arrLang['MODERATOR_NCIC_EDITOR_notes'] = "Si 'verdadero' entonces los moderadores podrán acceder al editor NCIC, si los moderadores 'falsos' no podrán acceder al editor NCCIC.";

$arrLang['MODERATOR_DATA_MANAGER'] = "Gestor de datos de moderador";
$arrLang['MODERATOR_DATA_MANAGER_notes'] = "Si 'verdadero' entonces los moderadores podrán acceder al gestor de datos de juegos, si es 'falso' entonces los moderadores no podrán acceder al Gerente de Datos de Gam.";

$arrLang['MODERATOR_DATAMAN_CITATIONTYPES'] = "Editor de tipos de cita del moderador";
$arrLang['MODERATOR_DATAMAN_CITATIONTYPES_notes'] = "Si 'verdadero' entonces los moderadores tendrán acceso al módulo Administrador de Tipos de Citación del Administrador de Datos de Juego, si 'falso' entonces los Moderadores serán denegados el acceso.";

$arrLang['MODERATOR_DATAMAN_DEPARTMENTS'] = "Editor de departamentos de moderadores";
$arrLang['MODERATOR_DATAMAN_DEPARTMENTS_notes'] = "Si 'verdadero' entonces los moderadores tendrán acceso al módulo Administrador de Departments del Administrador de Datos de Juego, si 'falso' entonces los Moderadores serán denegados el acceso.";

$arrLang['MODERATOR_DATAMAN_INCIDENTTYPES'] = "Editor de tipos de incidentes moderadores";
$arrLang['MODERATOR_DATAMAN_INCIDENTTYPES_notes'] = "Si 'verdadero' entonces los moderadores tendrán acceso al módulo de Gestor de Tipos de Incidentes del Administrador de Datos de Juego, si 'falso' entonces los Moderadores serán denegados el acceso.";

$arrLang['MODERATOR_DATAMAN_RADIOCODES'] = "Editor de códigos de radio moderador";
$arrLang['MODERATOR_DATAMAN_RADIOCODES_notes'] = "Si 'verdadero' entonces los moderadores tendrán acceso al módulo de Gerente de Códigos de Radio del Administrador de Datos de Juego, si 'falsos' entonces los Moderadores serán denegados el acceso.";

$arrLang['MODERATOR_DATAMAN_STREETS'] = "Editor de calles de moderador";
$arrLang['MODERATOR_DATAMAN_STREETS_notes'] = "Si 'verdadero' entonces los moderadores tendrán acceso al módulo de Gestor de Streets del Administrador de Datos de Juego, si 'falso' entonces los Moderadores serán denegados el acceso.";

$arrLang['MODERATOR_DATAMAN_VECHILES'] = "";
$arrLang['MODERATOR_DATAMAN_VEHICLES_notes'] = "Si 'verdadero' entonces los moderadores tendrán acceso al módulo de Administrador de Vehículos del Administrador de Datos de Juego, si 'falso' entonces los Moderadores serán denegados el acceso.";

$arrLang['MODERATOR_DATAMAN_WARNINGTYPES'] = "Editor de tipos de advertencia de moderador";
$arrLang['MODERATOR_DATAMAN_WARNINGTYPES_notes'] = "Si 'verdadero' entonces los moderadores tendrán acceso al módulo de Gestor de Tipos de Advertencia del Administrador de Datos de Juego, si 'falso' entonces los Moderadores serán denegados el acceso.";

$arrLang['MODERATOR_DATAMAN_WARRANTTYPES'] = "Editor de tipos de orden de moderador";
$arrLang['MODERATOR_DATAMAN_WARRANTTYPES_notes'] = "Si 'verdadero' entonces los moderadores tendrán acceso al módulo de Gestor de Tipos de orden del Administrador de Datos de Juego, si 'falso' entonces los Moderadores serán denegados el acceso.";

$arrLang['MODERATOR_DATAMAN_WEAPONS'] = "Editor de armas de moderador";
$arrLang['MODERATOR_DATAMAN_WEAPONS_notes'] = "Si 'verdadero' entonces los moderadores tendrán acceso al módulo Administrador de Armas del Administrador de Datos de Juego, si 'falso' entonces los Moderadores serán denegados el acceso.";

$arrLang['MODERATOR_DATAMAN_IMPEXPRESET'] = "Importar/Exportar/Restablecer moderador";
$arrLang['MODERATOR_DATAMAN_IMPEXPRESET_notes'] = "Si 'verdadero' entonces los moderadores tendrán acceso al módulo Importar/Exportar/Restablecer del Administrador de Datos de Juego, si 'falso' entonces los Moderadores serán denegados el acceso.";
//** End Administrative Strings**//

//** Begin Extra Settings Strings **//
$arrLang['DEMO_MODE'] = "Modo Demo";
$arrLang['DEMO_MODE_notes'] = "'true' luego varias funciones de administración de usuarios de OpenCAD serán bloqueadas, de lo contrario, si 'false' entonces la funcionalidad completa de OpenCAD * estará disponible para su uso.";

$arrLang['USE_GRAVATAR'] = "Gravatar";
$arrLang['USE_GRAVATAR_notes'] = "OpenCAD recuperará dinámicamente su avatar de {@link Gravatar http://es.gravatar.com/} si tiene una cuenta. De lo contrario usará la imagen de avatar genérico por defecto incluida con OpenCAD .";
//** End Extra Settings Strings **//

//** Begin Common Global Strings **/
$arrLang['WELCOME'] = "Bienvenida";
$arrLang["GENERAL"] = "General";
$arrLang["CAD_SYSTEM"] = "Sistema CAD";
$arrLang["EDIT"] = "Editar";
$arrLang["DELETE"] = "Borrar";
$arrLang["NAME"] = "Nombre";
$arrLang["EMAIL"] = "E-Mail";
$arrLang["ROLE"] = "Rol";
$arrLang["IDENTIFIER"] = "Identificador";
$arrLang["GROUPS"] = "Grupos";
$arrLang["ACTIONS"] = "Acciones";
$arrLang["NEXT"] = "Siguiente";
$arrLang["PREVIOUS"] = "Anterior";
$arrLang["SEARCH"] =  "Buscar";
$arrLang["DASHBOARD"] =  "Tablero";
$arrLang["LOGOUT"] =  "Salir";
$arrLang["NEED_HELP"] =  "¿Necesita ayuda?";
$arrLang["FULLSCREEN"] =  "Pantalla completa";
$arrLang["DOB"] = "DOB";
$arrLang["ADDRESS"] = "Dirección";
$arrLang["GENDER"] = "Género";
$arrLang["RACE"] = "Raza";
$arrLang["DL_STATUS"] = "Estado de DL";
$arrLang["HAIR_COLOR"] = "Color de pelo";
$arrLang["BUILD"] = "Compilar";
$arrLang["WEAPON_STATUS"] = "Estado del Arma";
$arrLang["WEAPON_NAME"] = "Nombre de arma";
$arrLang["WEAPON_TYPE"] ="Tipo de arma";
$arrLang["WEAPON_NOTES"] ="Notas de Armas";
$arrLang["DECEASED"] = "Rechazado";
$arrLang["REG_PLATE"] = "Placa";
$arrLang["VEHICLE_NOTES"] = "Notas del vehículo";
$arrLang["NOT_YOU"] = "¿No eres tú?";
$arrLang["ACTIVE_CALLS"] = "Llamadas activas";
$arrLang["ACTIVE_BOLOS"] = "BOLOs activos";
$arrLang["NCIC_NAME_LOOKUP"] = "Búsqueda de nombres NCIC";
$arrLang["NCIC_PLATE_LOOKUP"] = "Búsqueda de placas NCIC";
$arrLang["NCIC_WEAPON_LOOKUP"] = "Búsqueda de arma NCIC";
$arrLang["SEND"] = "Enviar";
$arrLang["MY_PROFILE"] = "Mi perfil";
//** End Common Global Strings */

//** Begin Administrator/Moderator Console Strings  **/
$arrLang["CAD_ADMINISTRATION"] = "Administración de CAD";
$arrLang["STATISTICS_AT_A_GLANCE"] = "Estadísticas a un vistazo";
$arrLang["TOTAL_USERS"] = "Total de usuarios";
$arrLang["ACEESS_REQUESTS"] = "Solicitudes de acceso";
$arrLang["THERE_ARE_CURRENTLY_NO_ACCESS_REQUESTS"] = "Actualmente no hay solicitudes de acceso.";
$arrLang["CAD_USER_MANAGEMENT"] = "Gestión de usuario CAD";
$arrLang["ACCOUNT_MANAGEMENT"] = "Gestión de cuentas";
$arrLang["SUSPEND_WITH_REASON"] = "Suspender con razón";
$arrLang["SUSPEND_WITHOUT_REASON"] = "Suspender sin razón";
$arrLang["NCIC_EDITOR"] = "Editor NCIC";
$arrLang["NCIC_NAMES_DB"] = "";
$arrLang["NCIC_NAMES_DB_none"] = "";
$arrLang["NCIC_VEHICLES_DB"] = "Base de datos de NCIC Vehicles";
$arrLang["NCIC_VEHICLES_DB_none"] = "No se encontraron resultados en la base de datos de NCIC Vehicles.";
$arrLang["NCIC_WEAPONS_DB"] = "Base de datos de armas NCIC";
$arrLang["NCIC_WEAPONS_DB_none"] = "No se encontraron resultados en la base de datos de armas NCIC.";
$arrLang["NCIC_WARNINGS_DB"] = "Base de datos de avisos NCIC";
$arrLang["NCIC_WARNINGS_DB_none"] = "No se encontraron resultados en la base de datos de armas NCIC.";
$arrLang["NCIC_CITATIONS_DB"] = "Base de datos de citas NCIC.";
$arrLang["NCIC_CITATIONS_DB_none"] = "No se encontraron resultados en la base de datos de citas NCIC.";
$arrLang["NCIC_ARRESTS_DB"] = "Base de datos de detención NCIC";
$arrLang["NCIC_ARRESTS_DB_none"] = "No se encontraron resultados en la base de datos de Arrests de NCIC.";
$arrLang["NCIC_WARRANTS_DB"] = "Base de datos de NCIC Warrants";
$arrLang["NCIC_WARRANTS_DB_none"] = "No se encontraron resultados en la base de datos de NCIC Warrants";
//** End Administrator/Moderator Console Strings  **/

//** Begin Civillian Console Strings **/
$arrLang["CIVILLIAN_CONSOLE"] = "Consola Civilliana";
$arrLang["MY_IDENTITIES"] = "Mis identidades";
$arrLang["MY_IDENTITIES_none"] = "No se encontraron resultados en la base de datos de identidades.";
$arrLang["MY_VEHICLES"] = "Mis vehículos";
$arrLang["MY_VEHICLES_none"] = "No se encontraron resultados en la base de datos de vehículos.";
$arrLang["MY_WEAPONS"] = "Mis Armas";
$arrLang["MY_WEAPONS_none"] = "No se encontraron resultados en la base de datos de armas.";
$arrLang["MY_WARRANTS"] = "Mis Warrants";
$arrLang["MY_WARRANTS_none"] = "No se encontraron resultados en la base de datos de garantías.";
$arrLang["CREATE_A_CALL"] = "Crear una llamada";
$arrLang["ADD_NEW_IDENTITY"] = "Añadir nueva identidad";
$arrLang["Add_ADD_NEW_PLATE"] = "";
$arrLang["ADD_NEW_WEAPON"] = "Añadir nuevo arma";
$arrLang["CIVILLIAN_DASHBOARD"] = "Tablero Civillano";
$arrLang["VIEW_WARRANTS"] = "";
$arrLang["CREATE_WARRANT"] = "Crear orden";
$arrLang["UPDATE"] = "Actualizar";
//** End Civillian Console Strings **/

//** Begin CAD Console Strings **/
$arrLang["CAD_CONSOLE"] = "Consola CAD";
$arrLang["ACTIVE_DISPATCHERS"] = "Dispatchers activos";
$arrLang["ACTIVE_DISPATCHERS_none"] = "No hay despachadores disponibles actualmente.";
$arrLang["AVAILABLE_UNITS"] = "Unidades disponibles";
$arrLang["UNAVAILABLE_UNITS"] = "Unidades no disponibles";
$arrLang["NEW_PERSONS_BOLO"] = "BOLO de Personas Nuevas";
$arrLang["NEW_VEHICLE_BOLO"] = "Nuevo Vehículo BOLO";
$arrLang["NEW_CALL"] = "Nueva llamada";
$arrLang["PANIC_BUTTON"] = "Botón de pánico";
$arrLang["PRIORITY_TONE"] = "Propiedad";
$arrLang["STOP_BORADCASTING_BUTTON"] = "Tono 10-3";
$arrLang["STOPWATCH"] = "Cronómetro";
$arrLang["WARNINGS"] = "Advertencias";
$arrLang["CITATIONS"] = "Citas";
$arrLang["ARREST_REPORT"] = "Recuperar detención";
$arrLang["WARRANTS"] = "Pedidos";
//** End CAD Console Strings *//

//** Begin MDT Console Strings **/
$arrLang["MDT_CONSOLE"] = "Consola MDT";
$arrLang["MY_STATUS"] = "Mi estado";
$arrLang["MY_CALL"] ="Mi llamada";
$arrLang["VIEW_PERSONS_BOLOS"] = "Ver BOLOs de Personas";
$arrLang["VIEW_VEHICLE_BOLOS"] = "Ver bóvedas de vehículos";
//** End MDT Console Strings *//

//** Begin Profile Console Strings **/
$arrLang["PASSWORD"] = "Contraseña";
$arrLang["CHANGE_PASSWORD"] = "Cambiar contraseña";
$arrLang["MY_PRFILE"] ="Mi perfil";
//** End Profile Console Strings *//
?>
