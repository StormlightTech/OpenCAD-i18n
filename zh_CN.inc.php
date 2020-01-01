<?php
$arrLang = array();

$arrLang['alert_admin_email_wrong'] = "管理员电子邮件格式错误！请重新输入。";
$arrLang['alert_min_version_db'] = "此程序至少需要安装 _DB_VERSION_ 的版本 (当前版本是 _DB_CURR_VERSION_)。您不能继续安装。";
$arrLang['alert_min_version_php'] = "这个程序需要至少版本的 PHP_VERSION_ 安装的 PHP (当前版本是 _PHP_CURR_VERSION__)。您不能继续安装。";
$arrLang['alert_directory_not_writable'] = "目录 <b>_FILE_DIRECTORY_</b> 不可写! <br />您必须授予 '写入' 权限 (访问权限 0755 或 777，取决于您的系统设置) 给EI_CONFFIG_FILE_DIRECY 定义的目录, 然后才能开始安装!";
$arrLang['alert_extension_not_installed'] = "服务器未安装所需的扩展 pdo_mysql！无法继续安装。";
$arrLang['alert_unable_to_install'] = "无法安装此应用程序，因为已安装具有相同标识的应用程序。 <br>你可以仅 <b>更新</b> 或 <b>卸载</b> 它。在继续之前，请确保备份数据库。";
$arrLang['alert_required_fields'] = "用星号标出的项目是必需的";
$arrLang['alert_db_host_empty'] = "数据库主机不能为空！请重新输入。";
$arrLang['alert_db_name_empty'] = "数据库名称不能为空！请重新输入。";
$arrLang['alert_db_username_empty'] = "数据库用户名不能为空！请重新输入。";
$arrLang['alert_db_password_empty'] = "数据库密码不能为空！请重新输入。";
$arrLang['alert_admin_name_empty'] = "管理员用户名不能为空！请重新输入。";
$arrLang['alert_admin_identifier_empty'] = "标识符不能为空！请重新输入。";
$arrLang['alert_admin_password_empty'] = "管理员密码不能为空！请重新输入。";
$arrLang['alert_wrong_testing_parameters'] = "测试参数错误！请输入有效的参数。";
$arrLang['alert_remove_files'] = "出于安全原因，请从您的服务器移除 <b>oc-install/</b> 文件夹！";
$arrLang['alert_wrong_parameter_passed'] = "参数传递错误！请返回上一步，然后重试。";

$arrLang['error_asp_tags'] = "此安装需要 <b>ASP 标签</b> 设置已打开。";
$arrLang['error_can_not_open_config_file'] = "数据库已成功创建！无法打开配置文件 _CONFIG_FILE_PATH_以保存信息。";
$arrLang['error_can_not_read_file'] = "无法读取文件 <b>_SQL_DUMP_FILE_</b>! 请检查文件是否存在。";
$arrLang['error_check_db_exists'] = "数据库连接错误！请检查您的数据库是否存在，允许用户访问 <b>_DATABASE_USERNAME_</b>._ERROR_<br />";
$arrLang['error_check_db_connection'] = "数据库连接错误！请检查您的连接参数。_错误_<br />";
$arrLang['error_pdo_support'] = "此安装需要 <b>PDO 扩展</b> 安装。";
$arrLang['error_sql_executing'] = "SQL 执行错误！请打开调试模式，并仔细检查您的 SQL 转储文件的语法。";
$arrLang['error_server_requirements'] = "此安装需要打开/安装 _SETTINGS_NAME_设置。";
$arrLang['error_vd_support'] = "此安装需要启用虚拟目录支持。";

$arrLang['admin_access_data'] = "管理员帐户信息";
$arrLang['admin_access_data_descr'] = "(请输入受保护的管理区)";
$arrLang['admin_email'] = "电子邮件";
$arrLang['admin_email_info'] = "用于登录此帐户的管理员电子邮件。

以后可以在管理员控制台用户管理中配置更多管理员帐户";
$arrLang['admin_name'] = "名称";
$arrLang['admin_login_info'] = "根据您所在社区的政策和程序，您的姓名。如果需要，可以稍后调整。";
$arrLang['admin_identifier'] = "标识符";
$arrLang['admin_identifier_info'] = "你的标识符。 IE：1D-01注意。取决于您的社区";
$arrLang['admin_password'] = "密码";
$arrLang['admin_password_info'] = "我们建议，你的密码不是你可以在字典中找到的一个词，包括资本和小写字母，并且包含至少一个特殊字符 (1-9, !*, _ 等)。";
$arrLang['administrator_account'] = "管理员帐户";
$arrLang['options_page'] = "系统设置";
$arrLang['administrator_account_skipping'] = "跳过 (不需要管理员帐户)";
$arrLang['asp_tags'] = "纵横标签";
$arrLang['back'] = "后退";
$arrLang['build_date'] = "创建日期";
$arrLang['cancel_installation'] = "取消安装";
$arrLang['click_start_button'] = "点击开始按钮继续";
$arrLang['click_to_start_installation'] = "点击开始安装";
$arrLang['checked'] = "已检查";
$arrLang['complete'] = "完成";
$arrLang['complete_installation'] = "完成安装";
$arrLang['completed'] = "已完成";
$arrLang['continue'] = "继续";
$arrLang['continue_installation'] = "继续安装";
$arrLang['database_extension'] = "数据库扩展";
$arrLang['database_host'] = "数据库主机";
$arrLang['database_host_info'] = "数据库服务器的主机名或IP地址。数据库服务器可以是主机名（和/或端口地址）的形式，例如db1.myserver.com或localhost：5432，也可以是IP地址，例如192.168.0.1";
$arrLang['database_import'] = "数据库导入";
$arrLang['database_import_error'] = "数据库导入(错误)";
$arrLang['database_name'] = "数据库名称";
$arrLang['database_name_info'] = "数据库名称。用于保存数据的数据库。数据库名称的例子是 'testdb'。";
$arrLang['database_username'] = "数据库用户名";
$arrLang['database_username_info'] = "数据库用户名。用于连接到数据库服务器的用户名。用户名示例是 'test_123'。";
$arrLang['database_password'] = "数据库密码";
$arrLang['database_password_info'] = "数据库密码。密码与用户名一起使用，用户名构成数据库用户账户。";
$arrLang['database_prefix'] = "数据库前缀";
$arrLang['database_prefix_info'] = "数据库前缀。用于设置数据库表的唯一前缀，并防止一个类型的数据干扰另一个数据。数据库前缀是 'abc_'。";
$arrLang['database_settings'] = "数据库设置";
$arrLang['directories_and_files'] = "目录和文件";
$arrLang['disabled'] = "已禁用";
$arrLang['enabled'] = "启用";
$arrLang['error'] = "错误";
$arrLang['extensions'] = "扩展";
$arrLang['getting_system_info'] = "获取系统信息";
$arrLang['file_successfully_rewritten'] = "_CONFFIG_FILE_文件已成功重写和更新数据库。";
$arrLang['file_successfully_deleted'] = "成功删除 _CONFIG_FILE_ 文件并删除数据库。";
$arrLang['file_successfully_created'] = "成功创建了 _CONFIG_FILE_ 文件。";
$arrLang['failed'] = "失败";
$arrLang['folder_paths'] = "文件夹路径";
$arrLang['follow_the_wizard'] = "跟随 <b>向导</b> 安装您的程序";
$arrLang['installed'] = "已安装";
$arrLang['installation_complete'] = "安装完成！";
$arrLang['installation_guide'] = "安装指南";
$arrLang['installation_type'] = "安装类型";
$arrLang['language'] = "语言";
$arrLang['license'] = "授权";
$arrLang['loading'] = "加载中";
$arrLang['mbstring_support'] = "多字节字符串支持";
$arrLang['magic_quotes_gpc'] = "GPC (Get/Post/Cookie) Magic 引用";
$arrLang['magic_quotes_runtime'] = "魔术引用运行时间";
$arrLang['magic_quotes_sybase'] = "魔法引文是系统样式";
$arrLang['mode'] = "模式";
$arrLang['modes'] = "模式";
$arrLang['new_installation_of'] = "新建安装";
$arrLang['new'] = "新建";
$arrLang['no'] = "否";
$arrLang['no_writable'] = "不可写";
$arrLang['not_installed'] = "未安装";
$arrLang['off'] = "关闭";
$arrLang['ok'] = "好的";
$arrLang['on'] = "开启";
$arrLang['passed'] = "通过";
$arrLang['password_encryption'] = "密码加密";
$arrLang['perform_manual_installation'] = "执行 <b>手动</b> 安装";
$arrLang['pdo_support'] = "PDO 支持";
$arrLang['php_version'] = "PHP 版本";
$arrLang['proceed_to_login_page'] = "继续登录页面";
$arrLang['ready_to_install'] = "准备安装";
$arrLang['remove_configuration_button'] = "删除配置并启动";
$arrLang['required_php_settings'] = "必需的 PHP 设置";
$arrLang['safe_mode'] = "安全模式";
$arrLang['select_installation_language'] = "选择安装语言";
$arrLang['select_installation_type'] = "选择安装类型";
$arrLang['sendmail_from'] = "发件人";
$arrLang['sendmail_path'] = "发件人路径";
$arrLang['server_api'] = "服务器 API";
$arrLang['server_requirements'] = "服务器要求";
$arrLang['session_support'] = "会话支持";
$arrLang['short_open_tag'] = "短打开标签";
$arrLang['smtp'] = "SMTP";
$arrLang['smtp_port'] = "SMTP 端口";
$arrLang['start'] = "开始";
$arrLang['start_all_over'] = "全部开始";
$arrLang['start_all_over_text'] = "如果你出于某种原因想要删除此安装，你可以迫使安装程序删除当前配置并重新开始所有。 <br><b>警告</b>: 您必须手动撤销数据库安装，以移除所有已完成的更改。";
$arrLang['step_1_of'] = "步骤1/11";
$arrLang['step_2_of'] = "步骤2/11";
$arrLang['step_3_of'] = "步骤3/11";
$arrLang['step_4_of'] = "步骤4/11";
$arrLang['step_5_of'] = "步骤5/11";
$arrLang['step_6_of'] = "步骤6/11";
$arrLang['step_7_of'] = "步骤7/11";
$arrLang['step_8_of'] = "步骤8/11";
$arrLang['step_9_of'] = "步骤9/11";
$arrLang['step_10_of'] = "步骤10/11";
$arrLang['step_11_of'] = "步骤11";
$arrLang['sub_title_message'] = "这个向导将指导整个安装过程";
$arrLang['system'] = "系统";
$arrLang['system_architecture'] = "系统结构";
$arrLang['test_connection'] = "测试连接";
$arrLang['test_database_connection'] = "测试数据库连接";
$arrLang['unknown'] = "未知";
$arrLang['uninstall'] = "卸载";
$arrLang['uninstallation_completed'] = "卸载完成！";
$arrLang['update'] = "更新";
$arrLang['updating_completed'] = "更新完成！";
$arrLang['virtual_directory_support'] = "虚拟目录支持";
$arrLang['we_are_ready_to_installation'] = "我们现在已准备好开始安装";
$arrLang['we_are_ready_to_installation_text'] = "";
$arrLang['writable'] = "可写入";

$arrLang['core_configuration'] = "核心配置";
$arrLang['department_configuration'] = '部门配置';
$arrLang['civilian_configuration'] = '文职人员配置'; 
$arrLang['administrative_configuration'] = '管理配置';
$arrLang['extra_settings'] = '额外设置';

//** Begin Core Configuration Strings **//
$arrLang['COMMUNITY_NAME'] = "社区名称";
$arrLang['COMMUNITY_NAME_notes'] = "设置您的社区名称";
$arrLang['COMMUNITY_NAME_alert'] = "社区名称不能为空！请重新输入。";

$arrLang['BASE_URL'] = "应用 URL";
$arrLang['BASE_URL_notes'] = "OpenCAD inlcuding的安装URL，如果使用，它的子目录
            有效示例包括：
            example.com  - 根域，无子目录
            subdomain.example.com  - 子域，无子目录
            subdomain.example.com/subdir  - 子域with子目录
            example.com/subdir  - 带有子目录的根域
            OpenCAD团队不会推荐，包括上述任何示例的尾随/上述内容。
            它不一定会破坏任何东西，但只是让参考看起来很奇怪，当不需要时会有两个被削减。";
$arrLang['BASE_URL_alert'] = "BASE_URL 不能为空！请重新输入。";

$arrLang['CAD_FROM_EMAIL'] = '从邮箱 CAD';
$arrLang['CAD_FROM_EMAIL_notes'] = '来自 CAD 的注释邮件似乎来自。

示例：cad@community.com
';

$arrLang['CAD_TO_EMAIL'] = 'CAD 到 Email';
$arrLang['CAD_TO_EMAIL_notes'] = '来自 CAD 的注释邮件似乎来自。

示例：cad@community.com
';

$arrLang['AUTH_KEY'] = '认证密钥';
$arrLang['AUTH_SALT'] = '认证盐类';
$arrLang['SECURE_AUTH_KEY'] = '安全认证密钥';
$arrLang['SECURE_AUTH_SALT'] = '安全认证盐类';
$arrLang['LOGGED_IN_KEY'] = '登录密钥';
$arrLang['LOGGED_IN_SALT'] = '登录Salt';
$arrLang['NONCE_KEY'] = 'Nonce 密钥';
$arrLang['NONCE_SALT'] = 'Nonce Salt';
$arrLang['SESSION_KEY'] = '会话密钥';

//** End Core Configuration Strings **//

//** Begin Police Strings **//
$arrLang['POLICE_NCIC'] = "";
$arrLang['POLICE_NCIC_notes'] = "在MDT控制台上显示/隐藏NCIC功能。如果'是'那么LEO将能够使用NCIC功能而无需调度员，否则如果'flase'则LEO将要求调度员使用NCIC功能。";
//** End Police Strings **//

//**  Begin Fire Strings **//
$arrLang['FIRE_PANIC'] = "火警裤";
$arrLang['FIRE_PANIC_notes'] = "在 MDT 控制台显示/隐藏 Panic 功能，用于火焰。如果“true”，消防人员将能够使用Panic 按钮，否则“false”，消防人员将无法使用Panic 按钮。";

$arrLang['FIRE_BOLO'] = "消防BOLO";
$arrLang['FIRE_BOLO_notes'] = "在 MDT 控制台显示/隐藏 Panic 功能。如果“true”，消防人员可以查看BOLO Board，否则“false”，消防人员将无法查看BOLO Board";

$arrLang['FIRE_NCIC_NAME'] = "消防 NCC 名称";
$arrLang['FIRE_NCIC_NAME_notes'] = "在 MDT 控制台显示/隐藏 Panic 功能。如果“true”，消防人员将能够使用 NCC 名称查询，否则“false”，消防人员将无法使用 NCC 名称查找";

$arrLang['FIRE_NCIC_PLATE'] = "消防原板";
$arrLang['FIRE_NCIC_PLATE_notes'] = "在 MDT 控制台显示/隐藏 Panic 功能用于消防。如果“真”，消防人员将能够使用 NCC 盘查询功能，否则“false”，消防人员将无法使用 NICI 板块查找函数。";
//**  End Fire Strings **//

//** Begin EMS Strings **//
$arrLang['EMS_PANIC'] = "EMS 恐慌";
$arrLang['EMS_PANIC_notes'] = "在 EMS 的 MDT 控制台显示/隐藏 Panic 功能。如果 'true' 可以使用 Panic 按钮，否则 'false' 则EMS 人员将无法使用Panic 按钮。";

$arrLang['EMS_BOLO'] = "EMS BOLO";
$arrLang['EMS_BOLO_notes'] = "在EMS的MDT控制台上显示/隐藏恐慌功能。如果'true'，那么消防人员将能够查看BOLO板，否则如果'false'则EMS人员将无法查看BOLO板";

$arrLang['EMS_NCIC_NAME'] = "EMS NCC 名称";
$arrLang['EMS_NCIC_NAME_notes'] = "在EMS的MDT控制台上显示/隐藏恐慌功能。如果'true'，那么Fire人员将能够使用NCIC名称查找，否则如果'false'则EMS人员将无法使用NCIC名称查找";

$arrLang['EMS_NCIC_PLATE'] = "EMS NCC 板";
$arrLang['EMS_NCIC_PLATE_notes'] = "在EMS的MDT控制台上显示/隐藏恐慌功能。如果'true'，那么Fire人员将能够使用NCIC板查找功能，否则如果'false'则EMS人员将无法使用NCIC板查找功能。";
//** End EMS Strings **//

//** Begin Roadside Assistance Strings **//
$arrLang['ROADSIDE_PANIC'] = "路边恐慌";
$arrLang['ROADSIDE_PANIC_notes'] = "在 MDT 控制台显示/隐藏 Panic 功能，用于 Road Assistance。如果“true”，RAO 可以使用Panic 按钮，否则“false”，RAO 将无法使用Panic 按钮。";

$arrLang['ROADSIDE_BOLO'] = "路边BOLO";
$arrLang['ROADSIDE_BOLO_notes'] = "在 MDT 控制台显示/隐藏 BOLO 功能，用于 Road Assistance。如果“true”，RAO 将能够使用Panic 按钮，否则“false”，RAO 将无法使用Panic 按钮。";

$arrLang['ROADSIDE_NCIC_NAME'] = "路径方 NCC 名称";
$arrLang['ROADSIDE_NCIC_NAME_notes'] = "在 MDT 控制台显示/隐藏 NCC 功能，用于 Road Assistance。如果“true”，RAO 可以使用 NCC 板块查询而不需要调度器，否则“false”，RAO 将需要调度器的存在才能使用 NCC板块查询功能。";

$arrLang['ROADSIDE_NCIC_PLATE'] = "路边NCCC板";
$arrLang['ROADSIDE_NCIC_PLATE_notes'] = "在 MDT 控制台显示/隐藏 NCC 功能，用于 Road Assistance。如果“true”，RAO 可以使用 NCC 板块查询而不需要调度器，否则“false”，RAO 将需要调度器的存在才能使用 NCC板块查询功能。";

$arrLang['ROADSIDE_CALL_SELFASSIGN'] = "路边自拨";
$arrLang['ROADSIDE_CALL_SELFASSIGN_notes'] = "如果“true”那么，RAO 将能够使用NCIC牌盘查询而不需要一个调度器，否则“false”那么，RAO 需要有调度员使用NCIC牌盘查询替代性。";
//** End Roadside Assistance Strings **//

//** Begin Civilian Strings **//
$arrLang['CIV_WARRANT'] = "民事担保的创建";
$arrLang['CIV_WARRANT_notes'] = "允许/禁止Civiliians管理其认股权证。如果设置为“true”，则Civs将能够从其个人资料中删除权证，否则如果设置为“false”，则Civs将无法删除权证。";

$arrLang['CIV_REG'] = "即时民事注册";
$arrLang['CIV_REG_notes'] = "1. 通过议程";

$arrLang['CIV_LIMIT_MAX_IDENTITIES'] = "文职人员最大标识";
$arrLang['CIV_LIMIT_MAX_IDENTITIES_notes'] = "如果CIV_LIMIT_MAX 是 '0' 那么平民就可以创建无限偶像。否则，如果CIV_LIMIT_MAX 不是 '0' 的值，那么，它将上限可能的意外数量。";

$arrLang['CIV_LIMIT_MAX_VEHICLES'] = "文职车辆的最大车辆";
$arrLang['CIV_LIMIT_MAX_VEHICLES_notes'] = "如果CIV_LIMIT_MAX_VEHICLES'为'0'那么，平民将能够创建无限车辆。否则，如果CIV_LIMIT_MAX_VEHICLES 是一个值以外的值，那么它将上限可能的车辆数量上限，使之达到该值";

$arrLang['CIV_LIMIT_MAX_WEAPONS'] = "1. 最大武器";
$arrLang['CIV_LIMIT_MAX_WEAPONS_notes'] = "如果CIV_LIMIT_MAX_WEAPONS'0' 则平民将能够创建无限的武器。否则，如果CIV_LIMIT_MAX_WEAPONS是一个值，那么，它将最大限度地限制可能的武器数量，使之达到该值";
//** End Civilian Strings **//

//** Begin Administrative Strings**//
$arrLang['MODERATOR_APPROVE_USER'] = "版主审核用户";
$arrLang['MODERATOR_APPROVE_USER_notes'] = "如果“true”那么管理员将能够批准新用户请求，否则，如果“false”那么管理器将无法批准新用户请求。";

$arrLang['MODERATOR_EDIT_USER'] = "版主编辑用户";
$arrLang['MODERATOR_EDIT_USER_notes'] = "如果“true”那么管理员将能够编辑用户配置文件，如果“false”那么管理器将无法编辑用户配置文件。这包括名称、电子邮件、标识符和作用。管理员将能够添加用户组，但删除这些用户组受MODERATOR_REMOVOTE_GROUPS设置的管辖。";

$arrLang['MODERATOR_DELETE_USER'] = "版主删除用户";
$arrLang['MODERATOR_DELETE_USER_notes'] = "如果“true”那么管理员将能够删除用户，否则“false”管理器将无法删除用户。";

$arrLang['MODERATOR_SUSPEND_WITHOUT_REASON'] = "版主无理由暂停";
$arrLang['MODERATOR_SUSPEND_WITHOUT_REASON_notes'] = "如果“true”那么管理员将可以在没有理由暂停用户，否则“false”管理器将无法无理由中止用户。";

$arrLang['MODERATOR_SUSPEND_WITH_REASON'] = "主持人暂停原因";
$arrLang['MODERATOR_SUSPEND_WITH_REASON_notes'] = "如果“true”那么管理员将能够以理由暂停用户，如果“false”管理器无法以理由中止用户。";

$arrLang['MODERATOR_REACTIVATE_USER'] = "版主重新激活用户";
$arrLang['MODERATOR_REACTIVATE_USER_notes'] = "如果“true”那么管理员将能够吸引其他用户，如果“false”管理器无法重新激活用户。";

$arrLang['MODERATOR_REMOVE_GROUP'] = "版主移除群组";
$arrLang['MODERATOR_REMOVE_GROUP_notes'] = "如果“true”那么管理员将能够删除用户组，否则“false”管理器将无法删除用户组。";

$arrLang['MODERATOR_NCIC_EDITOR'] = "主持人 NCC 编辑器";
$arrLang['MODERATOR_NCIC_EDITOR_notes'] = "如果“true”那么管理员将能够访问NCIC编辑器，否则“false”管理器将无法访问NCIC编辑器。";

$arrLang['MODERATOR_DATA_MANAGER'] = "主持人数据管理器";
$arrLang['MODERATOR_DATA_MANAGER_notes'] = "如果“true”那么管理员将能够访问游戏数据管理器，否则“false”管理器将无法访问Gam数据管理器。";

$arrLang['MODERATOR_DATAMAN_CITATIONTYPES'] = "主持人引用类型编辑器";
$arrLang['MODERATOR_DATAMAN_CITATIONTYPES_notes'] = "如果“true”那么管理员将可以访问游戏数据管理器的引文类型管理器模块，否则“false”则管理员将被拒绝访问。";

$arrLang['MODERATOR_DATAMAN_DEPARTMENTS'] = "主持人部门编辑器";
$arrLang['MODERATOR_DATAMAN_DEPARTMENTS_notes'] = "如果“true”那么管理员将可以访问游戏数据管理器的部门管理员模块，否则“false”管理员将被拒绝访问权限。";

$arrLang['MODERATOR_DATAMAN_INCIDENTTYPES'] = "主持人事件类型编辑器";
$arrLang['MODERATOR_DATAMAN_INCIDENTTYPES_notes'] = "如果“true”那么管理员将可以访问游戏数据管理器的事件类型管理器模块，否则“false”则管理员将被拒绝访问。";

$arrLang['MODERATOR_DATAMAN_RADIOCODES'] = "主持人无线电代码编辑器";
$arrLang['MODERATOR_DATAMAN_RADIOCODES_notes'] = "如果“true”那么管理员将可以访问游戏数据管理器的无线电代码管理器模块，否则“false”则管理员将被拒绝访问。";

$arrLang['MODERATOR_DATAMAN_STREETS'] = "版主Streets 编辑器";
$arrLang['MODERATOR_DATAMAN_STREETS_notes'] = "如果“true”那么管理员将可以访问游戏数据管理器的Streets管理器模块，否则“false”则管理员将被拒绝访问。";

$arrLang['MODERATOR_DATAMAN_VECHILES'] = "";
$arrLang['MODERATOR_DATAMAN_VEHICLES_notes'] = "如果“true”那么管理员将可以访问游戏数据管理器的车辆管理器模块，否则“false”管理员将被拒绝访问。";

$arrLang['MODERATOR_DATAMAN_WARNINGTYPES'] = "版主警告类型编辑器";
$arrLang['MODERATOR_DATAMAN_WARNINGTYPES_notes'] = "如果“true”那么管理员将可以访问游戏数据管理器的警告类型管理器模块，否则“false”则管理器将被拒绝访问。";

$arrLang['MODERATOR_DATAMAN_WARRANTTYPES'] = "主持人勇士类型编辑器";
$arrLang['MODERATOR_DATAMAN_WARRANTTYPES_notes'] = "如果“true”那么管理员将可以访问游戏数据管理器的 Warrant 类型管理器模块，否则“false”则管理员将被拒绝访问。";

$arrLang['MODERATOR_DATAMAN_WEAPONS'] = "主持人武器编辑器";
$arrLang['MODERATOR_DATAMAN_WEAPONS_notes'] = "如果“true”那么管理员将可以访问游戏数据管理器的武器管理器模块，否则“false”管理器将被拒绝访问。";

$arrLang['MODERATOR_DATAMAN_IMPEXPRESET'] = "主持人导入/导出/重置";
$arrLang['MODERATOR_DATAMAN_IMPEXPRESET_notes'] = "如果“true”那么管理员将可以访问游戏数据管理器的导入/导出/重置模块，否则“false”则管理器将被拒绝访问。";
//** End Administrative Strings**//

//** Begin Extra Settings Strings **//
$arrLang['DEMO_MODE'] = "演示模式";
$arrLang['DEMO_MODE_notes'] = "'true'然后将锁定OpenCAD的各种用户管理功能，否则如果'false'则可以使用OpenCAD的全部功能*。";

$arrLang['USE_GRAVATAR'] = "Gravatar";
$arrLang['USE_GRAVATAR_notes'] = "OpenCAD 将会动态地从 {@link Gravatar http://en.gravatar.com/} 获取您的头像。否则它将使用 OpenCAD 包含的默认头像。";
//** End Extra Settings Strings **//

//** Begin Common Global Strings **/
$arrLang['WELCOME'] = "欢迎";
$arrLang["GENERAL"] = "A. 概况";
$arrLang["CAD_SYSTEM"] = "CAD 系统";
$arrLang["EDIT"] = "编辑";
$arrLang["DELETE"] = "删除";
$arrLang["NAME"] = "名称";
$arrLang["EMAIL"] = "电子邮件";
$arrLang["ROLE"] = "角色";
$arrLang["IDENTIFIER"] = "标识符";
$arrLang["GROUPS"] = "群组";
$arrLang["ACTIONS"] = "行动";
$arrLang["NEXT"] = "下一步";
$arrLang["PREVIOUS"] = "上一个";
$arrLang["SEARCH"] =  "搜索";
$arrLang["DASHBOARD"] =  "仪表盘";
$arrLang["LOGOUT"] =  "注销";
$arrLang["NEED_HELP"] =  "需要帮助吗？";
$arrLang["FULLSCREEN"] =  "全屏";
$arrLang["DOB"] = "DOB";
$arrLang["ADDRESS"] = "地址";
$arrLang["GENDER"] = "性别";
$arrLang["RACE"] = "比赛";
$arrLang["DL_STATUS"] = "DL 状态";
$arrLang["HAIR_COLOR"] = "发色";
$arrLang["BUILD"] = "构建";
$arrLang["WEAPON_STATUS"] = "武器状态";
$arrLang["WEAPON_NAME"] = "武器名称";
$arrLang["WEAPON_TYPE"] ="武器类型";
$arrLang["WEAPON_NOTES"] ="武器说明";
$arrLang["DECEASED"] = "减速";
$arrLang["REG_PLATE"] = "正则表达式";
$arrLang["VEHICLE_NOTES"] = "车辆备注";
$arrLang["NOT_YOU"] = "不是你？";
$arrLang["ACTIVE_CALLS"] = "活动电话";
$arrLang["ACTIVE_BOLOS"] = "活动";
$arrLang["NCIC_NAME_LOOKUP"] = "NCC 名称查询";
$arrLang["NCIC_PLATE_LOOKUP"] = "NCC 高原查询";
$arrLang["NCIC_WEAPON_LOOKUP"] = "NCC 武器查询";
$arrLang["SEND"] = "发送";
$arrLang["MY_PROFILE"] = "我的个人资料";
//** End Common Global Strings */

//** Begin Administrator/Moderator Console Strings  **/
$arrLang["CAD_ADMINISTRATION"] = "CAD 管理";
$arrLang["STATISTICS_AT_A_GLANCE"] = "统计概览";
$arrLang["TOTAL_USERS"] = "用户总数";
$arrLang["ACEESS_REQUESTS"] = "访问请求";
$arrLang["THERE_ARE_CURRENTLY_NO_ACCESS_REQUESTS"] = "目前没有访问请求。";
$arrLang["CAD_USER_MANAGEMENT"] = "CAD 用户管理";
$arrLang["ACCOUNT_MANAGEMENT"] = "账户管理";
$arrLang["SUSPEND_WITH_REASON"] = "中止原因";
$arrLang["SUSPEND_WITHOUT_REASON"] = "无原因暂停";
$arrLang["NCIC_EDITOR"] = "NCC 编辑器";
$arrLang["NCIC_NAMES_DB"] = "";
$arrLang["NCIC_NAMES_DB_none"] = "";
$arrLang["NCIC_VEHICLES_DB"] = "NCC 车辆数据库";
$arrLang["NCIC_VEHICLES_DB_none"] = "荷兰国家中心车辆数据库中没有找到任何结果。";
$arrLang["NCIC_WEAPONS_DB"] = "NCC武器数据库";
$arrLang["NCIC_WEAPONS_DB_none"] = "在 NCCC 武器数据库中没有找到任何结果。";
$arrLang["NCIC_WARNINGS_DB"] = "NCC 警告数据库";
$arrLang["NCIC_WARNINGS_DB_none"] = "在 NCCC 武器数据库中没有找到任何结果。";
$arrLang["NCIC_CITATIONS_DB"] = "NCC 引证数据库。";
$arrLang["NCIC_CITATIONS_DB_none"] = "在 NCCC 引用数据库中找不到结果。";
$arrLang["NCIC_ARRESTS_DB"] = "NCC 逮捕数据库";
$arrLang["NCIC_ARRESTS_DB_none"] = "在 NCCC Arrests 数据库中没有找到任何结果。";
$arrLang["NCIC_WARRANTS_DB"] = "NCC 验证数据库";
$arrLang["NCIC_WARRANTS_DB_none"] = "在 NCCC 支持数据库中没有找到任何结果";
//** End Administrator/Moderator Console Strings  **/

//** Begin Civillian Console Strings **/
$arrLang["CIVILLIAN_CONSOLE"] = "Civillian 控制台";
$arrLang["MY_IDENTITIES"] = "我的标识";
$arrLang["MY_IDENTITIES_none"] = "在身份数据库中找不到结果。";
$arrLang["MY_VEHICLES"] = "我的车辆";
$arrLang["MY_VEHICLES_none"] = "车辆数据库中没有找到任何结果。";
$arrLang["MY_WEAPONS"] = "我的武器";
$arrLang["MY_WEAPONS_none"] = "武器数据库中没有找到任何结果。";
$arrLang["MY_WARRANTS"] = "我的许可证";
$arrLang["MY_WARRANTS_none"] = "在逮捕证数据库中找不到结果。";
$arrLang["CREATE_A_CALL"] = "创建通话";
$arrLang["ADD_NEW_IDENTITY"] = "添加新身份";
$arrLang["Add_ADD_NEW_PLATE"] = "";
$arrLang["ADD_NEW_WEAPON"] = "添加新的武器";
$arrLang["CIVILLIAN_DASHBOARD"] = "Civillian 仪表板";
$arrLang["VIEW_WARRANTS"] = "";
$arrLang["CREATE_WARRANT"] = "创建担保";
$arrLang["UPDATE"] = "更新";
//** End Civillian Console Strings **/

//** Begin CAD Console Strings **/
$arrLang["CAD_CONSOLE"] = "CAD 控制台";
$arrLang["ACTIVE_DISPATCHERS"] = "活动调度器";
$arrLang["ACTIVE_DISPATCHERS_none"] = "目前没有调度员。";
$arrLang["AVAILABLE_UNITS"] = "可用单位";
$arrLang["UNAVAILABLE_UNITS"] = "不可用的单位";
$arrLang["NEW_PERSONS_BOLO"] = "新人 BOLO";
$arrLang["NEW_VEHICLE_BOLO"] = "新建车辆BOLO";
$arrLang["NEW_CALL"] = "新通话";
$arrLang["PANIC_BUTTON"] = "恐慌按钮";
$arrLang["PRIORITY_TONE"] = "TONE";
$arrLang["STOP_BORADCASTING_BUTTON"] = "10-3 吨数";
$arrLang["STOPWATCH"] = "秒表";
$arrLang["WARNINGS"] = "警告";
$arrLang["CITATIONS"] = "引用";
$arrLang["ARREST_REPORT"] = "逮捕报告";
$arrLang["WARRANTS"] = "批准书";
//** End CAD Console Strings *//

//** Begin MDT Console Strings **/
$arrLang["MDT_CONSOLE"] = "MDT 控制台";
$arrLang["MY_STATUS"] = "我的状态";
$arrLang["MY_CALL"] ="我的通话";
$arrLang["VIEW_PERSONS_BOLOS"] = "查看个人";
$arrLang["VIEW_VEHICLE_BOLOS"] = "查看车辆";
//** End MDT Console Strings *//

//** Begin Profile Console Strings **/
$arrLang["PASSWORD"] = "密码";
$arrLang["CHANGE_PASSWORD"] = "更改密码";
$arrLang["MY_PRFILE"] ="我的个人资料";
//** End Profile Console Strings *//
?>
