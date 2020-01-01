<?php
$arrLang = array();

$arrLang['alert_admin_email_wrong'] = "Email администратора имеет неправильный формат! Пожалуйста, введите заново.";
$arrLang['alert_min_version_db'] = "Эта программа требует по крайней мере версии _DB_VERSION_ установки _DB_  (текущая версия _DB_CURR_VERSION_). Вы не можете продолжить установку.";
$arrLang['alert_min_version_php'] = "Эта программа требует по крайней мере версии _PHP_VERSION_ установленного PHP (текущая версия _PHP_CURR_VERSION_). Вы не можете продолжить установку.";
$arrLang['alert_directory_not_writable'] = "Каталог <b>_FILE_DIRECTORY_</b> не доступен для записи! <br />Вы должны предоставить права на запись (права доступа 0755 или 777, в зависимости от настроек системы) в этот каталог, определенный в EI_CONFIG_FILE_DIRECTORY перед началом установки!";
$arrLang['alert_extension_not_installed'] = "Необходимое расширение pdo_mysql не установлено на вашем сервере! Вы не можете продолжить установку.";
$arrLang['alert_unable_to_install'] = "Невозможно установить это приложение, потому что приложение с такой же личностью уже установлено. <br>Вы можете только <b>Обновить</b> или <b>Удалить</b> его. Убедитесь, что у вас есть резервная копия вашей базы данных перед продолжением.";
$arrLang['alert_required_fields'] = "Элементы, помеченные звездочкой (*), являются обязательными";
$arrLang['alert_db_host_empty'] = "Хост базы данных не может быть пустым! Пожалуйста, введите повторно.";
$arrLang['alert_db_name_empty'] = "Имя базы данных не может быть пустым! Пожалуйста, введите повторно.";
$arrLang['alert_db_username_empty'] = "Имя пользователя базы данных не может быть пустым! Пожалуйста, введите повторно.";
$arrLang['alert_db_password_empty'] = "Пароль базы данных не может быть пустым! Пожалуйста, введите еще раз.";
$arrLang['alert_admin_name_empty'] = "Имя администратора не может быть пустым! Пожалуйста, введите повторно.";
$arrLang['alert_admin_identifier_empty'] = "Идентификатор не может быть пустым! Пожалуйста, введите еще раз.";
$arrLang['alert_admin_password_empty'] = "Пароль администратора не может быть пустым! Пожалуйста, введите еще раз.";
$arrLang['alert_wrong_testing_parameters'] = "Неправильные параметры тестирования! Пожалуйста, введите правильные параметры.";
$arrLang['alert_remove_files'] = "По соображениям безопасности, пожалуйста, удалите папку <b>oc-install/</b> с вашего сервера!";
$arrLang['alert_wrong_parameter_passed'] = "Передан неверный параметр! Вернитесь к предыдущему шагу и повторите попытку.";

$arrLang['error_asp_tags'] = "Эта установка требует включенных настроек <b>тегов ASP</b>.";
$arrLang['error_can_not_open_config_file'] = "База данных успешно создана! Невозможно открыть файл конфигурации _CONFIG_FILE_PATH_ для сохранения информации.";
$arrLang['error_can_not_read_file'] = "Не удалось прочитать файл <b>_SQL_DUMP_FILE_</b>! Пожалуйста, проверьте, существует ли файл.";
$arrLang['error_check_db_exists'] = "Ошибка подключения к базе данных! Пожалуйста, проверьте, существует ли ваша база данных и разрешен ли доступ для пользователя <b>_DATABASE_USERNAME_</b>._ERROR_<br />";
$arrLang['error_check_db_connection'] = "Ошибка подключения к базе данных! Пожалуйста, проверьте параметры подключения._ERROR_<br />";
$arrLang['error_pdo_support'] = "Для установки требуется <b>расширение PDO</b>.";
$arrLang['error_sql_executing'] = "Ошибка выполнения SQL! Пожалуйста, включите режим отладки и тщательно проверьте синтаксис вашего файла дампа SQL.";
$arrLang['error_server_requirements'] = "Эта установка требует включенной либо установленной настройки _SETTINGS_NAME_.";
$arrLang['error_vd_support'] = "Эта установка требует включенной поддержки Virtual Directory.";

$arrLang['admin_access_data'] = "Информация об учетной записи администратора";
$arrLang['admin_access_data_descr'] = "(вам нужно это для входа в защищенную панель администратора)";
$arrLang['admin_email'] = "Эл. адрес";
$arrLang['admin_email_info'] = "Электронная почта администратора, которая будет использоваться для входа в эту учетную запись.

Дополнительные учетные записи администраторов можно настроить позже в консоли управления пользователями";
$arrLang['admin_name'] = "Имя";
$arrLang['admin_login_info'] = "Ваше имя в соответствии с правилами и процедурами вашего сообщества. Может быть изменено позже.";
$arrLang['admin_identifier'] = "Идентификатор";
$arrLang['admin_identifier_info'] = "Ваш идентификатор, например: 1D-01. Формат зависит от правил вашего сообщества";
$arrLang['admin_password'] = "Пароль";
$arrLang['admin_password_info'] = "Мы рекомендуем, чтобы ваш пароль не был словом, которое вы можете найти в словаре, включал как заглавные, так и строчные буквы, и содержал хотя бы один специальный символ (1-9, !, *, _, и т.д.).";
$arrLang['administrator_account'] = "Учетная запись администратора";
$arrLang['options_page'] = "Системные настройки";
$arrLang['administrator_account_skipping'] = "Пропуск (Учетная запись администратора не требуется)";
$arrLang['asp_tags'] = "Теги Asp";
$arrLang['back'] = "Назад";
$arrLang['build_date'] = "Дата сборки";
$arrLang['cancel_installation'] = "Отменить установку";
$arrLang['click_start_button'] = "Нажмите на кнопку Пуск, чтобы продолжить";
$arrLang['click_to_start_installation'] = "Нажмите, чтобы начать установку";
$arrLang['checked'] = "Проверено";
$arrLang['complete'] = "Завершено";
$arrLang['complete_installation'] = "Завершить установку";
$arrLang['completed'] = "Завершено";
$arrLang['continue'] = "Продолжить";
$arrLang['continue_installation'] = "Продолжить установку";
$arrLang['database_extension'] = "Расширение базы данных";
$arrLang['database_host'] = "Хост базы данных";
$arrLang['database_host_info'] = "Имя хоста или IP-адрес сервера базы данных. Сервер базы данных может быть в форме имени хоста (и / или адреса порта), такого как db1.myserver.com, или localhost: 5432, или в виде IP-адреса, такого как 192.168.0.1";
$arrLang['database_import'] = "Импорт базы данных";
$arrLang['database_import_error'] = "Импорт базы данных (ошибка)";
$arrLang['database_name'] = "Имя базы данных";
$arrLang['database_name_info'] = "Имя базы данных. База данных, используемая для хранения данных. Пример имени базы данных - 'testdb'.";
$arrLang['database_username'] = "Имя пользователя базы данных";
$arrLang['database_username_info'] = "Имя пользователя базы данных. Имя пользователя, используемое для подключения к серверу базы данных. Пример имени пользователя 'test_123'.";
$arrLang['database_password'] = "Пароль базы данных";
$arrLang['database_password_info'] = "Пароль базы данных. Пароль используется вместе с именем пользователя, который формирует учетную запись пользователя базы данных.";
$arrLang['database_prefix'] = "Префикс базы данных";
$arrLang['database_prefix_info'] = "Префикс базы данных. Используется для задания уникального префикса таблиц базы данных и предотвращения вмешательства одного типа данных в другой. Примером префикса базы данных является 'abc_'.";
$arrLang['database_settings'] = "Настройки базы данных";
$arrLang['directories_and_files'] = "Каталоги и файлы";
$arrLang['disabled'] = "Отключено";
$arrLang['enabled'] = "Включено";
$arrLang['error'] = "Ошибка";
$arrLang['extensions'] = "Расширения";
$arrLang['getting_system_info'] = "Получение информации о системе";
$arrLang['file_successfully_rewritten'] = "Файл _CONFIG_FILE_ был успешно перезаписан и обновлен.";
$arrLang['file_successfully_deleted'] = "Файл _CONFIG_FILE_ был успешно удален и база данных удалена.";
$arrLang['file_successfully_created'] = "Файл _CONFIG_FILE_ успешно создан.";
$arrLang['failed'] = "не удалось";
$arrLang['folder_paths'] = "Пути к папке";
$arrLang['follow_the_wizard'] = "Для установки программы следуйте <b>Мастеру</b>";
$arrLang['installed'] = "установлено";
$arrLang['installation_complete'] = "Установка завершена!";
$arrLang['installation_guide'] = "Руководство по установке";
$arrLang['installation_type'] = "Тип установки";
$arrLang['language'] = "Язык";
$arrLang['license'] = "Лицензия";
$arrLang['loading'] = "загрузка";
$arrLang['mbstring_support'] = "Поддержка мультибайтовых строк";
$arrLang['magic_quotes_gpc'] = "Волшебные кавычки для GPC (Get/Post/Cookie)";
$arrLang['magic_quotes_runtime'] = "Запуск Magic Quotes";
$arrLang['magic_quotes_sybase'] = "Магические кавычки в стиле Sybase";
$arrLang['mode'] = "Режим";
$arrLang['modes'] = "Режимы";
$arrLang['new_installation_of'] = "Новая установка";
$arrLang['new'] = "Новый";
$arrLang['no'] = "Нет";
$arrLang['no_writable'] = "нет прав на запись";
$arrLang['not_installed'] = "не установлен";
$arrLang['off'] = "Выкл";
$arrLang['ok'] = "ОК";
$arrLang['on'] = "На";
$arrLang['passed'] = "Пройдено";
$arrLang['password_encryption'] = "Шифрование пароля";
$arrLang['perform_manual_installation'] = "Выполнить <b>вручную</b> Установка";
$arrLang['pdo_support'] = "Поддержка PDO";
$arrLang['php_version'] = "Версия PHP";
$arrLang['proceed_to_login_page'] = "Перейти к странице входа";
$arrLang['ready_to_install'] = "Готов к установке";
$arrLang['remove_configuration_button'] = "Удалить конфигурацию и начать заново";
$arrLang['required_php_settings'] = "Требуемые настройки PHP";
$arrLang['safe_mode'] = "Безопасный режим";
$arrLang['select_installation_language'] = "Выберите язык установки";
$arrLang['select_installation_type'] = "Выберите тип установки";
$arrLang['sendmail_from'] = "Sendmail From";
$arrLang['sendmail_path'] = "Путь к Sendmail";
$arrLang['server_api'] = "API сервера";
$arrLang['server_requirements'] = "Требования сервера";
$arrLang['session_support'] = "Поддержка сессий";
$arrLang['short_open_tag'] = "Короткий открытый тег";
$arrLang['smtp'] = "SMTP";
$arrLang['smtp_port'] = "SMTP порт";
$arrLang['start'] = "Начало";
$arrLang['start_all_over'] = "Начать все заново";
$arrLang['start_all_over_text'] = "Если вы хотите удалить эту установку по какой-то причине, вы можете заставить установщик удалить текущую конфигурацию и начать все заново. <br><b>ПРЕДУПРЕЖДЕНИЕ</b>: Вы должны отменить установку базы данных вручную, чтобы удалить все выполненные изменения.";
$arrLang['step_1_of'] = "Шаг 1 из 11";
$arrLang['step_2_of'] = "Шаг 2 из 11";
$arrLang['step_3_of'] = "Шаг 3 из 11";
$arrLang['step_4_of'] = "Шаг 4 из 11";
$arrLang['step_5_of'] = "Шаг 5 из 11";
$arrLang['step_6_of'] = "Шаг 6 из 11";
$arrLang['step_7_of'] = "Шаг 7 из 11";
$arrLang['step_8_of'] = "Шаг 8 из 11";
$arrLang['step_9_of'] = "Шаг 9 из 11";
$arrLang['step_10_of'] = "Шаг 10 из 11";
$arrLang['step_11_of'] = "Шаг 11 из 11";
$arrLang['sub_title_message'] = "Этот мастер проведет вас через весь процесс установки";
$arrLang['system'] = "Система";
$arrLang['system_architecture'] = "Архитектура системы";
$arrLang['test_connection'] = "Проверить соединение";
$arrLang['test_database_connection'] = "Проверка подключения к базе данных";
$arrLang['unknown'] = "Неизвестно";
$arrLang['uninstall'] = "Удалить";
$arrLang['uninstallation_completed'] = "Удаление завершено!";
$arrLang['update'] = "Обновить";
$arrLang['updating_completed'] = "Обновление завершено!";
$arrLang['virtual_directory_support'] = "Поддержка виртуальной директории";
$arrLang['we_are_ready_to_installation'] = "Сейчас мы готовы к установке";
$arrLang['we_are_ready_to_installation_text'] = "На этом этапе мастер настройки попытается создать все необходимые таблицы базы данных и заполнять их данными. <br>Если что-то пойдёт не так, вернитесь к шагу настроек базы данных и убедитесь в правильности введенной информации.";
$arrLang['writable'] = "Записываемый";

$arrLang['core_configuration'] = "Основная конфигурация";
$arrLang['department_configuration'] = 'Конфигурация отдела';
$arrLang['civilian_configuration'] = 'Конфигурация цивилизации'; 
$arrLang['administrative_configuration'] = 'Настройка администратора';
$arrLang['extra_settings'] = 'Дополнительные настройки';

//** Begin Core Configuration Strings **//
$arrLang['COMMUNITY_NAME'] = "Имя сообщества";
$arrLang['COMMUNITY_NAME_notes'] = "Введите имя вашего сообщества";
$arrLang['COMMUNITY_NAME_alert'] = "Имя сообщества не может быть пустым! Пожалуйста, введите повторно.";

$arrLang['BASE_URL'] = "URL приложения";
$arrLang['BASE_URL_notes'] = "URL-адрес вашей установки OpenCAD, если он используется, его подкаталог
            Допустимые примеры:
            example.com - корневой домен, без подкаталога
            subdomain.example.com - поддомен, без подкаталога
            subdomain.example.com/subdir - поддомен с подкаталогом
            example.com/subdir - корневой домен с подкаталогом
            Команды OpenCAD не рекомендуют включать в себя ни один из приведенных выше примеров.
            Это не обязательно что-то сломает, но просто делает ссылку странной, если две надрезы не нужны.";
$arrLang['BASE_URL_alert'] = "BASE_URL не может быть пустым! Пожалуйста, введите еще раз.";

$arrLang['CAD_FROM_EMAIL'] = 'CAD из Email';
$arrLang['CAD_FROM_EMAIL_notes'] = 'Почта, с которой вы можете связаться.

Пример: cad@community.com
';

$arrLang['CAD_TO_EMAIL'] = 'Отправить письмо';
$arrLang['CAD_TO_EMAIL_notes'] = 'Почта, с которой вы можете связаться.

Пример: cad@community.com
';

$arrLang['AUTH_KEY'] = 'Ключ аутентификации';
$arrLang['AUTH_SALT'] = 'Аутентификация Salt';
$arrLang['SECURE_AUTH_KEY'] = 'Секретный ключ аутентификации';
$arrLang['SECURE_AUTH_SALT'] = 'Секретная аутентификация';
$arrLang['LOGGED_IN_KEY'] = 'Ключ входа';
$arrLang['LOGGED_IN_SALT'] = 'Соль';
$arrLang['NONCE_KEY'] = 'Ключ отсутствия';
$arrLang['NONCE_SALT'] = 'Нонсовая соль';
$arrLang['SESSION_KEY'] = 'Ключ сессии';

//** End Core Configuration Strings **//

//** Begin Police Strings **//
$arrLang['POLICE_NCIC'] = "Полицицейская база данных";
$arrLang['POLICE_NCIC_notes'] = "Показывает / скрывает функциональность NCIC на консоли MDT. Если «true», то LEO сможет использовать функции NCIC без необходимости в диспетчере, иначе, если «flase», то LEO потребует наличия диспетчера для использования функциональности NCIC.";
//** End Police Strings **//

//**  Begin Fire Strings **//
$arrLang['FIRE_PANIC'] = "Огненная Паника";
$arrLang['FIRE_PANIC_notes'] = "Показывает/Скрывает панель на консоли MDT для Fire. Если 'true', то пожарный персонал сможет использовать кнопку Panic, иначе если 'false', то пожарный персонал не сможет использовать кнопку Panic.";

$arrLang['FIRE_BOLO'] = "Огненный БОЛО";
$arrLang['FIRE_BOLO_notes'] = "Показывает/Скрывает функциональность панели в консоли MDT для Fire. Если 'true', то пожарный персонал сможет просматривать доску BOLO, иначе если 'false', то пожарный персонал не сможет просматривать доску BOLO";

$arrLang['FIRE_NCIC_NAME'] = "Имя Огненного NCIC";
$arrLang['FIRE_NCIC_NAME_notes'] = "Показывает/Скрывает функциональность панели в консоли MDT для Fire. Если 'true', то пожарный персонал сможет использовать поиск имени NCIC, иначе если 'false', то пожарный персонал не сможет использовать NCIC поиск имени";

$arrLang['FIRE_NCIC_PLATE'] = "Огненная плита NCIC";
$arrLang['FIRE_NCIC_PLATE_notes'] = "Показывает/Hides Panic функциональность на консоли MDT для Fire. Если 'true', то пожарный персонал сможет использовать функцию поиска табличек NCIC, иначе если 'false', то пожарный персонал не сможет использовать функцию поиска табличек NICI.";
//**  End Fire Strings **//

//** Begin EMS Strings **//
$arrLang['EMS_PANIC'] = "Паника EMS";
$arrLang['EMS_PANIC_notes'] = "Показывает/Скрывает функциональность панели на консоли MDT для EMS. Если 'true', то пожарный персонал сможет использовать кнопку Panic, иначе если 'false', то персонал EMS не сможет использовать кнопку Panic.";

$arrLang['EMS_BOLO'] = "EMS BOLO";
$arrLang['EMS_BOLO_notes'] = "Показывает / скрывает функциональность Panic на консоли MDT для EMS. Если «истина», то сотрудники пожарной службы смогут просматривать доску BOLO, в противном случае, если «ложь», то персонал EMS не сможет просматривать доску BOLO.";

$arrLang['EMS_NCIC_NAME'] = "Имя EMS NCIC";
$arrLang['EMS_NCIC_NAME_notes'] = "Показывает / скрывает функциональность Panic на консоли MDT для EMS. Если «true», то персонал Fire сможет использовать поиск имени NCIC, иначе, если «false», персонал EMS не сможет использовать поиск имени NCIC.";

$arrLang['EMS_NCIC_PLATE'] = "NCIC плита EMS";
$arrLang['EMS_NCIC_PLATE_notes'] = "Показывает / скрывает функциональность Panic на консоли MDT для EMS. Если установлено значение «истина», персонал пожарной службы сможет использовать функцию поиска таблички NCIC, в противном случае персонал «EMS» не сможет использовать функцию поиска таблички NCIC.";
//** End EMS Strings **//

//** Begin Roadside Assistance Strings **//
$arrLang['ROADSIDE_PANIC'] = "Паника на крыше";
$arrLang['ROADSIDE_PANIC_notes'] = "Показывает/Скрывает функционал панели на консоли MDT для помощи Roadside. Если 'true', то RAO сможет использовать кнопку Panic, иначе если 'false', RAO не сможет использовать кнопку Panic.";

$arrLang['ROADSIDE_BOLO'] = "Роадбок БОЛО";
$arrLang['ROADSIDE_BOLO_notes'] = "Показывает/Скрывает функциональность BOLO на консоли MDT для помощи Roadside. Если 'true', то RAO сможет использовать кнопку Panic, иначе если 'false', то RAO не сможет использовать кнопку Panic.";

$arrLang['ROADSIDE_NCIC_NAME'] = "Название Roadside NCIC";
$arrLang['ROADSIDE_NCIC_NAME_notes'] = "Показывает/Hides NCIC функциональность на консоли MDT для помощи Roadside. Если 'true', то RAO будет иметь возможность использовать NCIC запрос без необходимости для диспетчера, иначе если 'false', то RAO потребует наличия диспетчера для использования функциональности NCIC запросов.";

$arrLang['ROADSIDE_NCIC_PLATE'] = "Роадбокая плита NCIC";
$arrLang['ROADSIDE_NCIC_PLATE_notes'] = "Показывает/Hides NCIC функциональность на консоли MDT для помощи Roadside. Если 'true', то RAO будет иметь возможность использовать NCIC запрос без необходимости для диспетчера, иначе если 'false', то RAO потребует наличия диспетчера для использования функциональности NCIC запросов.";

$arrLang['ROADSIDE_CALL_SELFASSIGN'] = "Самостоятельное назначение";
$arrLang['ROADSIDE_CALL_SELFASSIGN_notes'] = "Если «true», то RAO сможет использовать запрос номера NCIC без необходимости в диспетчере, иначе, если «false», тогда RAO будет требовать наличия диспетчера для использования функциональности запроса номера NCIC.";
//** End Roadside Assistance Strings **//

//** Begin Civilian Strings **//
$arrLang['CIV_WARRANT'] = "Создание гражданского Гаранта";
$arrLang['CIV_WARRANT_notes'] = "Разрешить / запретить гражданским лицам управлять своими ордерами. Если установлено значение «истина», то цивилизации смогут удалять ордера из своего профиля, иначе, если установлено значение «ложь», то у цивилизаций не будет возможности удалять ордера.";

$arrLang['CIV_REG'] = "Быстрая регистрация гражданского населения";
$arrLang['CIV_REG_notes'] = "В то же время, как и в случае с другими странами-членами ЕС, они не могут позволить себе, что они не будут иметь никакого отношения к другим странам.";

$arrLang['CIV_LIMIT_MAX_IDENTITIES'] = "Максимальное количество гражданских";
$arrLang['CIV_LIMIT_MAX_IDENTITIES_notes'] = "Если CIV_LIMIT_MAX равен 0, тогда гражданские лица смогут создавать неограниченное количество идентификаторов. В противном случае, если CIV_LIMIT_MAX является значением, отличным от '0', тогда оно ограничит максимальное количество возможных идентификаторов этим значением.";

$arrLang['CIV_LIMIT_MAX_VEHICLES'] = "Максимальное количество транспортных средств";
$arrLang['CIV_LIMIT_MAX_VEHICLES_notes'] = "Если CIV_LIMIT_MAX_VEHICLES '0', то гражданский сможет создавать неограниченные транспортные средства. В противном случае, если CIV_LIMIT_MAX_VEHICLES является значением, отличным от '0', то он будет иметь максимальное количество возможных транспортных средств к этому значению";

$arrLang['CIV_LIMIT_MAX_WEAPONS'] = "Максимальное количество оружия";
$arrLang['CIV_LIMIT_MAX_WEAPONS_notes'] = "Если CIV_LIMIT_MAX_WEAPONS '0', то гражданский сможет создавать неограниченное оружие. В противном случае, если CIV_LIMIT_MAX_WEAPONS является значением, отличным от '0', то оно будет ограничено максимальное количество возможных вооружений для этого значения";
//** End Civilian Strings **//

//** Begin Administrative Strings**//
$arrLang['MODERATOR_APPROVE_USER'] = "Модератор утвердил пользователя";
$arrLang['MODERATOR_APPROVE_USER_notes'] = "Если 'true', то модераторы смогут утвердить новые запросы пользователей, иначе, если 'false', то модераторы не смогут утвердить новые запросы пользователя.";

$arrLang['MODERATOR_EDIT_USER'] = "Редактирование модератора";
$arrLang['MODERATOR_EDIT_USER_notes'] = "Если 'true', то модераторы смогут редактировать профиль пользователей, если 'false', то модераторы не смогут редактировать профиль пользователей. Это включает имя, email, идентификатор и роли. Модераторы смогут добавить группы пользователей, но удаление их регулируется настройками MODERATOR_REMOVE_GROUPS.";

$arrLang['MODERATOR_DELETE_USER'] = "Модератор Удалить пользователя";
$arrLang['MODERATOR_DELETE_USER_notes'] = "Если 'true', то модераторы смогут удалить пользователей, иначе, если 'false' модераторы не смогут удалить пользователей.";

$arrLang['MODERATOR_SUSPEND_WITHOUT_REASON'] = "Модератор приостановить без причины";
$arrLang['MODERATOR_SUSPEND_WITHOUT_REASON_notes'] = "Если 'true', то модераторы смогут приостановить пользователей без причины, иначе, если 'false' модераторы не смогут приостановить пользователей без причины.";

$arrLang['MODERATOR_SUSPEND_WITH_REASON'] = "Модератор приостановил с основанием";
$arrLang['MODERATOR_SUSPEND_WITH_REASON_notes'] = "Если 'true', то модераторы смогут приостановить пользователей по причине, если 'false' модераторы не смогут приостановить пользователей по причине.";

$arrLang['MODERATOR_REACTIVATE_USER'] = "Модератор перезапустить пользователя";
$arrLang['MODERATOR_REACTIVATE_USER_notes'] = "Если 'true', то модераторы смогут вычитать пользователей еще, если 'false' модераторы не смогут активировать пользователей.";

$arrLang['MODERATOR_REMOVE_GROUP'] = "Модератор Удалить группу";
$arrLang['MODERATOR_REMOVE_GROUP_notes'] = "Если 'true', то модераторы смогут удалить группы пользователей, иначе, если 'false' модераторы не смогут удалить группы пользователей.";

$arrLang['MODERATOR_NCIC_EDITOR'] = "Редактор модератора NCIC";
$arrLang['MODERATOR_NCIC_EDITOR_notes'] = "Если 'true', то модераторы смогут получить доступ к редактору NCIC, иначе, если 'false' модераторы не смогут получить доступ к редактору NCCIC.";

$arrLang['MODERATOR_DATA_MANAGER'] = "Менеджер данных модератора";
$arrLang['MODERATOR_DATA_MANAGER_notes'] = "Если 'true', то модераторы смогут получить доступ к менеджеру данных игры, иначе, если 'false', то модераторы не смогут получить доступ к менеджеру данных Gam.";

$arrLang['MODERATOR_DATAMAN_CITATIONTYPES'] = "Редактор типов ссылок модератора";
$arrLang['MODERATOR_DATAMAN_CITATIONTYPES_notes'] = "Если 'true', то модераторы будут иметь доступ к модулю управления типами Citation Manager, а не к \"false\", то модераторы будут лишены доступа.";

$arrLang['MODERATOR_DATAMAN_DEPARTMENTS'] = "Редактор департаментов модератора";
$arrLang['MODERATOR_DATAMAN_DEPARTMENTS_notes'] = "Если 'true', то модераторы будут иметь доступ к модулю менеджера департаментов в Руководстве Игровых Данных, иначе, если 'false', то модераторы будут лишены доступа.";

$arrLang['MODERATOR_DATAMAN_INCIDENTTYPES'] = "Редактор типов инцидентов модератора";
$arrLang['MODERATOR_DATAMAN_INCIDENTTYPES_notes'] = "Если 'true', то модераторы будут иметь доступ к модулю менеджера типов инцидентов в Руководстве данными игры, иначе, если 'false', то модераторы будут лишены доступа.";

$arrLang['MODERATOR_DATAMAN_RADIOCODES'] = "Редактор радиокодов модератора";
$arrLang['MODERATOR_DATAMAN_RADIOCODES_notes'] = "Если «true», то модераторы будут иметь доступ к модулю Менеджера Радио коды в Программе Данных, а не к «false», то модераторы будут лишены доступа.";

$arrLang['MODERATOR_DATAMAN_STREETS'] = "Редактор Потоков Модератора";
$arrLang['MODERATOR_DATAMAN_STREETS_notes'] = "Если 'true', то модераторы будут иметь доступ к модулю менеджера Потоков в Руководстве Игровых Данных, а не к 'false', то модераторы будут лишены доступа.";

$arrLang['MODERATOR_DATAMAN_VECHILES'] = "Настройка автомобилей";
$arrLang['MODERATOR_DATAMAN_VEHICLES_notes'] = "Если «true» то модераторы будут иметь доступ к модулю Менеджера транспортных средств в Руководстве Игровых Данных, а не к «false», то модераторы будут лишены доступа.";

$arrLang['MODERATOR_DATAMAN_WARNINGTYPES'] = "Редактор типов предупреждений модератора";
$arrLang['MODERATOR_DATAMAN_WARNINGTYPES_notes'] = "Если 'true', то модераторы будут иметь доступ к модулю Менеджера Предупреждений в Руководстве Игровых Данных, иначе, если 'false', то модераторы будут лишены доступа.";

$arrLang['MODERATOR_DATAMAN_WARRANTTYPES'] = "Редактор типов гарантов модератора";
$arrLang['MODERATOR_DATAMAN_WARRANTTYPES_notes'] = "Если 'true', то модераторы будут иметь доступ к модулю Менеджера Игровых Данных, иначе, если 'false', то модераторы будут лишены доступа.";

$arrLang['MODERATOR_DATAMAN_WEAPONS'] = "Редактор оружия модератора";
$arrLang['MODERATOR_DATAMAN_WEAPONS_notes'] = "Если «true», то модераторы будут иметь доступ к модулю управления оружием в менеджере данных игры, иначе, если «false», то модераторы будут лишены доступа.";

$arrLang['MODERATOR_DATAMAN_IMPEXPRESET'] = "Модератор импорта/экспорта/сброса";
$arrLang['MODERATOR_DATAMAN_IMPEXPRESET_notes'] = "Если 'true', то модераторы будут иметь доступ к модулю импорта/экспорта/сброса данных в Руководстве Игровых Данных, иначе, если 'false', то модераторы будут лишены доступа.";
//** End Administrative Strings**//

//** Begin Extra Settings Strings **//
$arrLang['DEMO_MODE'] = "Демо-режим";
$arrLang['DEMO_MODE_notes'] = "Если «истина», то различные функции управления пользователями в OpenCAD будут заблокированы, в противном случае, если «ложь», тогда будет доступна полная функциональность * OpenCAD *";

$arrLang['USE_GRAVATAR'] = "Граватар";
$arrLang['USE_GRAVATAR_notes'] = "OpenCAD динамически извлечет ваш аватар из {@link Gravatar http://en.gravatar.com/} если у вас есть аккаунт. Иначе он будет использовать стандартный образ аватара, включенный в OpenCAD .";
//** End Extra Settings Strings **//

//** Begin Common Global Strings **/
$arrLang['WELCOME'] = "Добро пожаловать";
$arrLang["GENERAL"] = "Общие положения";
$arrLang["CAD_SYSTEM"] = "Система CAD";
$arrLang["EDIT"] = "Правка";
$arrLang["DELETE"] = "Удалить";
$arrLang["NAME"] = "Имя";
$arrLang["EMAIL"] = "E-Mail";
$arrLang["ROLE"] = "Роль";
$arrLang["IDENTIFIER"] = "Идентификатор";
$arrLang["GROUPS"] = "Группы";
$arrLang["ACTIONS"] = "Действия";
$arrLang["NEXT"] = "Далее";
$arrLang["PREVIOUS"] = "Предыдущий";
$arrLang["SEARCH"] =  "Поиск";
$arrLang["DASHBOARD"] =  "Панель";
$arrLang["LOGOUT"] =  "Выйти";
$arrLang["NEED_HELP"] =  "Нужна помощь?";
$arrLang["FULLSCREEN"] =  "На весь экран";
$arrLang["DOB"] = "DOB";
$arrLang["ADDRESS"] = "Адрес";
$arrLang["GENDER"] = "Гендерные вопросы";
$arrLang["RACE"] = "Гонка";
$arrLang["DL_STATUS"] = "Статус DL";
$arrLang["HAIR_COLOR"] = "Цвет волос";
$arrLang["BUILD"] = "Сборка";
$arrLang["WEAPON_STATUS"] = "Статус оружия";
$arrLang["WEAPON_NAME"] = "Название оружия";
$arrLang["WEAPON_TYPE"] ="Тип оружия";
$arrLang["WEAPON_NOTES"] ="Заметки об оружии";
$arrLang["DECEASED"] = "Снижено";
$arrLang["REG_PLATE"] = "Рег. плита";
$arrLang["VEHICLE_NOTES"] = "Примечания к транспортным средствам";
$arrLang["NOT_YOU"] = "Не вы?";
$arrLang["ACTIVE_CALLS"] = "Активные звонки";
$arrLang["ACTIVE_BOLOS"] = "Активные БОЛО";
$arrLang["NCIC_NAME_LOOKUP"] = "Поиск имени NCIC";
$arrLang["NCIC_PLATE_LOOKUP"] = "Поиск плит NCIC";
$arrLang["NCIC_WEAPON_LOOKUP"] = "Поиск оружия NCIC";
$arrLang["SEND"] = "Отправить";
$arrLang["MY_PROFILE"] = "Мой профиль";
//** End Common Global Strings */

//** Begin Administrator/Moderator Console Strings  **/
$arrLang["CAD_ADMINISTRATION"] = "Управление CAD";
$arrLang["STATISTICS_AT_A_GLANCE"] = "Статистика на глазах";
$arrLang["TOTAL_USERS"] = "Всего пользователей";
$arrLang["ACEESS_REQUESTS"] = "Запросы доступа";
$arrLang["THERE_ARE_CURRENTLY_NO_ACCESS_REQUESTS"] = "В настоящее время нет запросов на доступ.";
$arrLang["CAD_USER_MANAGEMENT"] = "Управление пользователями CAD";
$arrLang["ACCOUNT_MANAGEMENT"] = "Управление аккаунтом";
$arrLang["SUSPEND_WITH_REASON"] = "Приостановка с основанием";
$arrLang["SUSPEND_WITHOUT_REASON"] = "Приостановка без причины";
$arrLang["NCIC_EDITOR"] = "Редактор NCIC";
$arrLang["NCIC_NAMES_DB"] = "Нет результатов в базе данных NCIC.";
$arrLang["NCIC_NAMES_DB_none"] = "База данных имён";
$arrLang["NCIC_VEHICLES_DB"] = "База данных национальных транспортных средств";
$arrLang["NCIC_VEHICLES_DB_none"] = "В базе данных национальных транспортных средств не найдено результатов.";
$arrLang["NCIC_WEAPONS_DB"] = "База данных NCIC Weapons";
$arrLang["NCIC_WEAPONS_DB_none"] = "В базе данных по НБОР ничего не найдено.";
$arrLang["NCIC_WARNINGS_DB"] = "База данных предупреждений NCIC";
$arrLang["NCIC_WARNINGS_DB_none"] = "В базе данных по НБОР ничего не найдено.";
$arrLang["NCIC_CITATIONS_DB"] = "NCIC Citations Database.";
$arrLang["NCIC_CITATIONS_DB_none"] = "В базе данных NCIC Citations нет результатов.";
$arrLang["NCIC_ARRESTS_DB"] = "База данных NCIC Arrests";
$arrLang["NCIC_ARRESTS_DB_none"] = "Не найдено результатов в базе данных NCIC Arrests.";
$arrLang["NCIC_WARRANTS_DB"] = "База данных гарантий NCIC";
$arrLang["NCIC_WARRANTS_DB_none"] = "Не найдено результатов в базе данных NCIC Warrants";
//** End Administrator/Moderator Console Strings  **/

//** Begin Civillian Console Strings **/
$arrLang["CIVILLIAN_CONSOLE"] = "Консоль Civillian";
$arrLang["MY_IDENTITIES"] = "Мои идентификаторы";
$arrLang["MY_IDENTITIES_none"] = "Не найдено результатов в базе данных идентификаторов.";
$arrLang["MY_VEHICLES"] = "Мои автомобили";
$arrLang["MY_VEHICLES_none"] = "В базе данных транспортных средств не найдено результатов.";
$arrLang["MY_WEAPONS"] = "Мое оружие";
$arrLang["MY_WEAPONS_none"] = "Нет результатов в базе данных оружия.";
$arrLang["MY_WARRANTS"] = "Мои Гарантии";
$arrLang["MY_WARRANTS_none"] = "В базе данных ордеров нет результатов.";
$arrLang["CREATE_A_CALL"] = "Создать вызов";
$arrLang["ADD_NEW_IDENTITY"] = "Добавить новую личность";
$arrLang["Add_ADD_NEW_PLATE"] = "Добавить новый номер";
$arrLang["ADD_NEW_WEAPON"] = "Добавить новое оружие";
$arrLang["CIVILLIAN_DASHBOARD"] = "Панель Civillian";
$arrLang["VIEW_WARRANTS"] = "Просмотр ордеров";
$arrLang["CREATE_WARRANT"] = "Создать гарантию";
$arrLang["UPDATE"] = "Обновить";
//** End Civillian Console Strings **/

//** Begin CAD Console Strings **/
$arrLang["CAD_CONSOLE"] = "Консоль CAD";
$arrLang["ACTIVE_DISPATCHERS"] = "Активные Диспетчеры";
$arrLang["ACTIVE_DISPATCHERS_none"] = "Нет доступных диспетчеров.";
$arrLang["AVAILABLE_UNITS"] = "Доступные единицы";
$arrLang["UNAVAILABLE_UNITS"] = "Недоступные единицы";
$arrLang["NEW_PERSONS_BOLO"] = "Новые лица BOLO";
$arrLang["NEW_VEHICLE_BOLO"] = "Новый автомобиль BOLO";
$arrLang["NEW_CALL"] = "Новый вызов";
$arrLang["PANIC_BUTTON"] = "Кнопка паники";
$arrLang["PRIORITY_TONE"] = "PRIORITY_TONE";
$arrLang["STOP_BORADCASTING_BUTTON"] = "10-3 Тон";
$arrLang["STOPWATCH"] = "Секундомер";
$arrLang["WARNINGS"] = "Предупреждения";
$arrLang["CITATIONS"] = "Цитаты";
$arrLang["ARREST_REPORT"] = "Арест ОТЧЕТ";
$arrLang["WARRANTS"] = "Гарантии";
//** End CAD Console Strings *//

//** Begin MDT Console Strings **/
$arrLang["MDT_CONSOLE"] = "Консоль MDT";
$arrLang["MY_STATUS"] = "Мой статус";
$arrLang["MY_CALL"] ="Мой звонок";
$arrLang["VIEW_PERSONS_BOLOS"] = "Просмотреть список людей";
$arrLang["VIEW_VEHICLE_BOLOS"] = "Просмотр лотков";
//** End MDT Console Strings *//

//** Begin Profile Console Strings **/
$arrLang["PASSWORD"] = "Пароль";
$arrLang["CHANGE_PASSWORD"] = "Изменить пароль";
$arrLang["MY_PRFILE"] ="Мой профиль";
//** End Profile Console Strings *//
?>
