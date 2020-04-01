<?php
$arrLang = array();

$arrLang['alert_admin_email_wrong'] = "O e-mail do administrador tem um formato errado! Por favor, insira novamente.";
$arrLang['alert_min_version_db'] = "Este programa requer pelo menos a versão _DB_VERSION_ do _DB_ instalado (a versão atual é _DB_CURR_VERSION_). Não podes prosseguir a instalação.";
$arrLang['alert_min_version_php'] = "Este programa requer pelo menos a versão _PHP_VERSION_ do PHP instalado (a versão atual é _PHP_CURR_VERSION_). Não podes prosseguir a instalação.";
$arrLang['alert_directory_not_writable'] = "O diretório <b>_FILE_DIRECTORY_</b> não é gravável! <br />Deve conceder permissões de escrita (direitos de acesso 0755 ou 777, dependendo das configurações do seu sistema) para este diretório definido em EI_CONFIG_FILE_RECDITORY antes de iniciar a instalação!";
$arrLang['alert_extension_not_installed'] = "Extensão necessária pdo_mysql não está instalada no seu servidor! Não pode prosseguir a instalação.";
$arrLang['alert_unable_to_install'] = "Não foi possível instalar este aplicativo porque um aplicativo com a mesma identidade já está instalado. <br>Só pode <b>Atualizar</b> ou <b>Desinstalar</b>. Certifique-se de que tem um backup do seu banco de dados antes de prosseguir.";
$arrLang['alert_required_fields'] = "Itens marcados com asterisco são obrigatórios";
$arrLang['alert_db_host_empty'] = "O host do banco de dados não pode estar vazio! Por favor, reinsira.";
$arrLang['alert_db_name_empty'] = "Nome do banco de dados não pode estar vazio! Por favor, reinsira.";
$arrLang['alert_db_username_empty'] = "Nome de usuário do banco de dados não pode estar vazio! Por favor, digite novamente.";
$arrLang['alert_db_password_empty'] = "A senha do banco de dados não pode estar vazia! Por favor, insira novamente.";
$arrLang['alert_admin_name_empty'] = "Nome do administrador não pode estar vazio! Por favor, insira novamente.";
$arrLang['alert_admin_identifier_empty'] = "Identificador não pode estar vazio! Por favor, reinsira.";
$arrLang['alert_admin_password_empty'] = "A senha de administrador não pode estar vazia! Por favor, digite novamente.";
$arrLang['alert_wrong_testing_parameters'] = "Parâmetros de teste estão errados! Por favor, insira parâmetros válidos.";
$arrLang['alert_remove_files'] = "Por razões de segurança, por favor, remova a <b>oc-install/</b> pasta do seu servidor!";
$arrLang['alert_wrong_parameter_passed'] = "Parâmetro errado passado! Volte para a etapa anterior e tente novamente.";

$arrLang['error_asp_tags'] = "Esta instalação requer <b>ASP tags</b> configurações ativadas.";
$arrLang['error_can_not_open_config_file'] = "O banco de dados foi criado com sucesso! Não é possível abrir o arquivo de configuração _CONFIG_FILE_PATH_ para salvar informações.";
$arrLang['error_can_not_read_file'] = "Não foi possível ler o arquivo <b>_SQL_DUMP_FILE_</b>! Por favor, verifique se existe um arquivo.";
$arrLang['error_check_db_exists'] = "Erro de conexão ao banco de dados! Por favor, verifique se o seu banco de dados existe e o acesso permitido para o usuário <b>_DATABASE_USERNAME_</b>._ERROR_<br />";
$arrLang['error_check_db_connection'] = "Erro de conexão ao banco de dados! Por favor, verifique seus parâmetros de conexão._ERROR_<br />";
$arrLang['error_pdo_support'] = "Esta instalação requer a extensão <b>PDO</b> instalada.";
$arrLang['error_sql_executing'] = "Erro de execução do SQL! Ative o modo de depuração e verifique cuidadosamente uma sintaxe do seu arquivo de dump SQL.";
$arrLang['error_server_requirements'] = "Esta instalação requer _SETTINGS_NAME_ configurações ativadas/instaladas.";
$arrLang['error_vd_support'] = "Esta instalação requer suporte ao Virtual Directory ativado.";

$arrLang['admin_access_data'] = "Informações da conta de administrador";
$arrLang['admin_access_data_descr'] = "(você precisa disto para entrar na área de administração protegida)";
$arrLang['admin_email'] = "O email";
$arrLang['admin_email_info'] = "O email do administrador que será usado para acessar esta conta.

Mais contas de administrador podem ser provisionadas posteriormente no Gerenciamento de usuários do Console do administrador";
$arrLang['admin_name'] = "Nome";
$arrLang['admin_login_info'] = "Seu nome de acordo com as políticas e procedimentos de suas comunidades. Isso pode ser ajustado mais tarde, se necessário.";
$arrLang['admin_identifier'] = "Identificador";
$arrLang['admin_identifier_info'] = "Seu identificador. IE: 1D-01 Nota. Depende da sua comunidade";
$arrLang['admin_password'] = "Senha";
$arrLang['admin_password_info'] = "Recomendamos que sua senha não seja uma palavra que você possa encontrar no dicionário, incluindo letras maiúsculas e minúsculas, e contém pelo menos um caractere especial (1-9, !, *, _, etc.).";
$arrLang['administrator_account'] = "Conta de Administrador";
$arrLang['options_page'] = "Configurações do Sistema";
$arrLang['administrator_account_skipping'] = "Ignorar (conta de administrador não necessária)";
$arrLang['asp_tags'] = "Asp Tags";
$arrLang['back'] = "Voltar";
$arrLang['build_date'] = "Data de construção";
$arrLang['cancel_installation'] = "Cancelar instalação";
$arrLang['click_start_button'] = "Clique no botão Iniciar para continuar";
$arrLang['click_to_start_installation'] = "Clique para iniciar a instalação";
$arrLang['checked'] = "Verificado";
$arrLang['complete'] = "Completo";
$arrLang['complete_installation'] = "Instalação completa";
$arrLang['completed'] = "Concluída";
$arrLang['continue'] = "Continuar";
$arrLang['continue_installation'] = "Continuar a Instalação";
$arrLang['database_extension'] = "Extensão do banco de dados";
$arrLang['database_host'] = "Servidor do banco de dados";
$arrLang['database_host_info'] = "Nome do host ou endereço IP do servidor de banco de dados. O servidor de banco de dados pode estar na forma de um nome de host (e / ou endereço de porta), como db1.myserver.com ou localhost: 5432, ou como um endereço IP, como 192.168.0.1";
$arrLang['database_import'] = "Importar Banco de Dados";
$arrLang['database_import_error'] = "Importar banco de dados (erro)";
$arrLang['database_name'] = "Nome da Base de Dados";
$arrLang['database_name_info'] = "Nome do banco de dados. O banco de dados usado para manter os dados. Um exemplo do nome do banco de dados é 'testdb'.";
$arrLang['database_username'] = "Usuário do banco de dados";
$arrLang['database_username_info'] = "Nome do banco de dados. O nome de usuário usado para conectar ao servidor de banco de dados. Um exemplo de nome de usuário é 'test_123'.";
$arrLang['database_password'] = "Senha do banco de dados";
$arrLang['database_password_info'] = "Senha do banco de dados. A senha é usada juntamente com o nome de usuário, que forma a conta de usuário do banco de dados.";
$arrLang['database_prefix'] = "Prefixo do banco de dados";
$arrLang['database_prefix_info'] = "Prefixo do banco de dados. Usado para definir o prefixo exclusivo para tabelas do banco de dados e evitar que um tipo de dados interfira com outro. Um exemplo do prefixo do banco de dados é 'abc_'.";
$arrLang['database_settings'] = "Configurações do Banco de Dados";
$arrLang['directories_and_files'] = "Diretórios e Arquivos";
$arrLang['disabled'] = "Desativado";
$arrLang['enabled'] = "Ativado";
$arrLang['error'] = "Erro";
$arrLang['extensions'] = "Extensões";
$arrLang['getting_system_info'] = "Obtendo Informações do Sistema";
$arrLang['file_successfully_rewritten'] = "O arquivo _CONFIG_FILE_ foi reescrito com sucesso e o banco de dados atualizado.";
$arrLang['file_successfully_deleted'] = "O arquivo _CONFIG_FILE_ foi excluído com sucesso e o banco de dados removido.";
$arrLang['file_successfully_created'] = "O arquivo _CONFIG_FILE_ foi criado com sucesso.";
$arrLang['failed'] = "falhou";
$arrLang['folder_paths'] = "Caminhos de pasta";
$arrLang['follow_the_wizard'] = "Siga o <b>Assistente</b> para instalar seu programa";
$arrLang['installed'] = "instalado";
$arrLang['installation_complete'] = "Instalação concluída!";
$arrLang['installation_guide'] = "Guia de Instalação";
$arrLang['installation_type'] = "Tipo de Instalação";
$arrLang['language'] = "Idioma";
$arrLang['license'] = "Licença";
$arrLang['Import'] = "";
$arrLang['Export'] = "";
$arrLang['loading'] = "carregando";
$arrLang['mbstring_support'] = "Suporte a Multibyte String";
$arrLang['magic_quotes_gpc'] = "Cotações mágicas para GPC (Obter/Publicar/Cookie)";
$arrLang['magic_quotes_runtime'] = "Execução de Cotações Mágicas";
$arrLang['magic_quotes_sybase'] = "Cotações mágicas estão no estilo Sybase";
$arrLang['mode'] = "Modo";
$arrLang['modes'] = "Modos";
$arrLang['new_installation_of'] = "Nova Instalação de";
$arrLang['new'] = "Novo";
$arrLang['no'] = "Não";
$arrLang['no_writable'] = "não gravável";
$arrLang['not_installed'] = "não instalado";
$arrLang['off'] = "Desligado";
$arrLang['ok'] = "OK";
$arrLang['on'] = "Em";
$arrLang['passed'] = "Aprovado";
$arrLang['password_encryption'] = "Criptografia de senha";
$arrLang['perform_manual_installation'] = "Realize <b>Manual</b> Instalação";
$arrLang['pdo_support'] = "Suporte PDO";
$arrLang['php_version'] = "Versão do PHP";
$arrLang['proceed_to_login_page'] = "Prosseguir para a página de login";
$arrLang['ready_to_install'] = "Pronto para instalar";
$arrLang['remove_configuration_button'] = "Remover configuração e começar";
$arrLang['required_php_settings'] = "Configurações PHP Requeridas";
$arrLang['safe_mode'] = "Modo seguro";
$arrLang['select_installation_language'] = "Selecione o idioma de instalação";
$arrLang['select_installation_type'] = "Selecione o tipo de instalação";
$arrLang['sendmail_from'] = "Remetente de";
$arrLang['sendmail_path'] = "Caminho do Sendmail";
$arrLang['server_api'] = "API do servidor";
$arrLang['server_requirements'] = "Requisitos do servidor";
$arrLang['session_support'] = "Suporte à Sessão";
$arrLang['short_open_tag'] = "Tag Aberta Curta";
$arrLang['smtp'] = "SMTP";
$arrLang['smtp_port'] = "Porta SMTP";
$arrLang['start'] = "Início";
$arrLang['start_all_over'] = "Começar tudo";
$arrLang['start_all_over_text'] = "Se você deseja remover esta instalação por algum motivo, você pode forçar o instalador a remover a configuração atual e começar tudo novamente. <br><b>AVISO</b>: Você tem que desfazer a instalação do banco de dados manualmente para remover todas as alterações que foram feitas.";
$arrLang['step_1_of'] = "Passo 1 de 11";
$arrLang['step_2_of'] = "Passo 2 de 11";
$arrLang['step_3_of'] = "Etapa 3 de 11";
$arrLang['step_4_of'] = "Etapa 4 de 11";
$arrLang['step_5_of'] = "Passo 5 de 11";
$arrLang['step_6_of'] = "Passo 6 de 11";
$arrLang['step_7_of'] = "Passo 7 de 11";
$arrLang['step_8_of'] = "Passo 8 de 11";
$arrLang['step_9_of'] = "Passo 9 de 11";
$arrLang['step_10_of'] = "Passo 10 de 11";
$arrLang['step_11_of'] = "Etapa 11 de 11";
$arrLang['sub_title_message'] = "Este assistente irá guiá-lo através de todo o processo de instalação";
$arrLang['system'] = "Sistema";
$arrLang['system_architecture'] = "Arquitetura do sistema";
$arrLang['test_connection'] = "Testar Conexão";
$arrLang['test_database_connection'] = "Testar conexão de banco de dados";
$arrLang['unknown'] = "Desconhecido";
$arrLang['uninstall'] = "Desinstalar";
$arrLang['uninstallation_completed'] = "Desinstalação concluída!";
$arrLang['update'] = "Atualizar";
$arrLang['updating_completed'] = "Atualização concluída!";
$arrLang['virtual_directory_support'] = "Suporte ao Diretório Virtual";
$arrLang['we_are_ready_to_installation'] = "Estamos prontos para prosseguir com a instalação";
$arrLang['we_are_ready_to_installation_text'] = "";
$arrLang['writable'] = "Gravável";

$arrLang['core_configuration'] = "Configuração do núcleo";
$arrLang['department_configuration'] = 'Configuração do Departamento';
$arrLang['civilian_configuration'] = 'Configuração Civil'; 
$arrLang['administrative_configuration'] = '';
$arrLang['extra_settings'] = 'Configurações extras';

//** Begin Core Configuration Strings **//
$arrLang['COMMUNITY_NAME'] = "Nome da Comunidade";
$arrLang['COMMUNITY_NAME_notes'] = "Defina o nome da sua comunidade";
$arrLang['COMMUNITY_NAME_alert'] = "Nome da Comunidade não pode estar vazio! Por favor, reinsira.";

$arrLang['BASE_URL'] = "URL da aplicação";
$arrLang['BASE_URL_notes'] = "O URL para sua instalação do OpenCAD incluindo, se utilizado, é o subdiretório
            Os exemplos válidos incluem:
            example.com - Domínio raiz, nenhum subdiretório
            subdomínio.exemplo.com - subdomínio, nenhum subdiretório
            subdomínio.exemplo.com/subdir - subdomínio com subdiretório
            example.com/subdir - domínio raiz com subdiretório
            As equipes do OpenCAD não recomendam incluir o trailing / em nenhum dos exemplos acima.
            Não vai necessariamente quebrar nada, mas faz com que a referência pareça estranha, tendo dois cortados quando não é necessário.";
$arrLang['BASE_URL_alert'] = "BASE_URL não pode estar vazio! Por favor, digite novamente.";

$arrLang['CAD_FROM_EMAIL'] = 'CAD do E-mail';
$arrLang['CAD_FROM_EMAIL_notes'] = 'O e-mail de onde as noções de você CAD devem aparecer.

Exemplo: cad@community.com
';

$arrLang['CAD_TO_EMAIL'] = 'CAD Para E-mail';
$arrLang['CAD_TO_EMAIL_notes'] = 'O e-mail de onde as noções de você CAD devem aparecer.

Exemplo: cad@community.com
';

$arrLang['AUTH_KEY'] = 'Chave de autenticação';
$arrLang['AUTH_SALT'] = 'Sal de autenticação';
$arrLang['SECURE_AUTH_KEY'] = 'Chave de autenticação segura';
$arrLang['SECURE_AUTH_SALT'] = 'Sal de autenticação segura';
$arrLang['LOGGED_IN_KEY'] = 'Chave Logada';
$arrLang['LOGGED_IN_SALT'] = 'Sal de login';
$arrLang['NONCE_KEY'] = 'Chave de Nonce';
$arrLang['NONCE_SALT'] = 'Sal de Nonce';
$arrLang['SESSION_KEY'] = 'Chave de Sessão';
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
$arrLang['POLICE_NCIC_notes'] = "Mostra / Oculta a funcionalidade NCIC no console do MDT. Se 'verdadeiro' então o LEO será capaz de usar funções NCIC sem a necessidade de um dispatcher, senão se 'flase' então o LEO irá requerer a presença do dispatcher para usar a funcionalidade do NCIC.";

$arrLang['POLICE_CALL_SELFASSIGN'] = "";
$arrLang['POLICE_CALL_SELFASSIGN_notes'] = "";
//** End LEO Strings **//

//**  Begin Fire Strings **//
$arrLang['FIRE_PANIC'] = "Pânico de Fogo";
$arrLang['FIRE_PANIC_notes'] = "Mostra/oculta funcionalidade Panic no console MDT para Fogo. Se 'verdadeiro' então o pessoal de fogo será capaz de usar o botão Panic, senão se 'falso' então o pessoal de fogo não será capaz de usar o botão Panic.";

$arrLang['FIRE_BOLO'] = "BOLO de Fogo";
$arrLang['FIRE_BOLO_notes'] = "Mostra/oculta funcionalidade Panic no console MDT para fogo. Se 'true' então o pessoal de fogo será capaz de ver o tabuleiro BOLO, senão se 'falso' então o pessoal de fogo não será capaz de ver a placa BOLO";

$arrLang['FIRE_NCIC_NAME'] = "Nome do Fire NCIC";
$arrLang['FIRE_NCIC_NAME_notes'] = "Mostra/oculta funcionalidade Panic no console MDT para fogo. Se 'verdadeiro' então o pessoal de fogo será capaz de usar a pesquisa de nome NCIC, senão se 'falso' então o pessoal de fogo não será capaz de usar a pesquisa de nome NCIC";

$arrLang['FIRE_NCIC_PLATE'] = "Chapa de Fogo NCIC";
$arrLang['FIRE_NCIC_PLATE_notes'] = "Mostra/oculta funcionalidade Panic no console MDT para Fogo. Se 'verdadeiro' então o pessoal de fogo será capaz de usar a função de pesquisa de placas NCIC, senão se 'falso' então o pessoal de fogo não será capaz de usar a função de pesquisa de placas NICI.";

$arrLang['FIRE_CALL_SELFASSIGN'] = "";
$arrLang['FIRE_CALL_SELFASSIGN_notes'] = "";
//**  End Fire Strings **//

//** Begin EMS Strings **//
$arrLang['EMS_PANIC'] = "Pânico EMS";
$arrLang['EMS_PANIC_notes'] = "Mostra/oculta funcionalidade Panic no console MDT para EMS. Se 'true' então o pessoal de fogo será capaz de usar o botão Panic, senão se 'falso' então o pessoal EMS não será capaz de usar o botão Panic.";

$arrLang['EMS_BOLO'] = "BOLO DE EMS";
$arrLang['EMS_BOLO_notes'] = "Mostra / Oculta a funcionalidade Panic no console MDT para EMS. Se for \"verdadeiro\", então o pessoal de Incêndio será capaz de ver a placa da BOLO, senão, se \"falso\", o pessoal da EMS não será capaz de ver a placa da BOLO";

$arrLang['EMS_NCIC_NAME'] = "Nome NCIC EMS";
$arrLang['EMS_NCIC_NAME_notes'] = "Mostra / Oculta a funcionalidade Panic no console MDT para EMS. Se \"verdadeiro\", então o pessoal do Corpo de Bombeiros poderá usar a pesquisa do nome do NCIC, senão, se \"falso\", o pessoal do EMS não poderá usar a pesquisa do nome do NCIC.";

$arrLang['EMS_NCIC_PLATE'] = "Placa NCIC EMS";
$arrLang['EMS_NCIC_PLATE_notes'] = "Mostra / Oculta a funcionalidade Panic no console MDT para EMS. Se \"verdadeiro\", o pessoal de Incêndio será capaz de usar a função de busca da placa NCIC, senão, se \"falso\", o pessoal do EMS não poderá usar a função de busca da placa NCIC.";
//** End EMS Strings **//

//** Begin Roadside Assistance Strings **//
$arrLang['ROADSIDE_PANIC'] = "Panic Rugido";
$arrLang['ROADSIDE_PANIC_notes'] = "Mostra/oculta funcionalidade Panic no console MDT para assistência de roaming. Se 'verdadeiro' então o RAO será capaz de usar o botão Panic, senão se 'falso' então o RAO não será capaz de usar o botão Panic.";

$arrLang['ROADSIDE_BOLO'] = "BOLO Rugido";
$arrLang['ROADSIDE_BOLO_notes'] = "Mostra/oculta a funcionalidade BOLO no console MDT para assistência de roaming. Se 'verdadeiro' então o RAO será capaz de usar o botão Panic, senão se 'falso' então o RAO não será capaz de usar o botão Panic.";

$arrLang['ROADSIDE_NCIC_NAME'] = "Nome NCIC do Roadside";
$arrLang['ROADSIDE_NCIC_NAME_notes'] = "Mostra/oculta funcionalidade NCIC no console MDT para assistência de acesso. Se 'verdadeiro' então o RAO será capaz de usar a consulta de placas NCIC sem a necessidade de um despachante, senão se 'falso' então o RAO irá exigir a presença do despachante para usar a rotação de placas NCIC.";

$arrLang['ROADSIDE_NCIC_PLATE'] = "Placa NCIC itinerante";
$arrLang['ROADSIDE_NCIC_PLATE_notes'] = "Mostra/oculta funcionalidade NCIC no console MDT para assistência de acesso. Se 'verdadeiro' então o RAO será capaz de usar a consulta de placas NCIC sem a necessidade de um despachante, senão se 'falso' então o RAO irá exigir a presença do despachante para usar a rotação de placas NCIC.";

$arrLang['ROADSIDE_CALL_SELFASSIGN'] = "Auto Atribuir Chamada Estrada";
$arrLang['ROADSIDE_CALL_SELFASSIGN_notes'] = "Se 'verdadeiro' então o RAO poderá usar a consulta de placa NCIC sem a necessidade de um despatcher, caso contrário, se 'falso' o RAO exigirá a presença de um funcionário para usar a função da consulta NCIC de placa.";
//** End Roadside Assistance Strings **//

//** Begin Civilian Strings **//
$arrLang['CIV_WARRANT'] = "Criação de Guerreiro Civil";
$arrLang['CIV_WARRANT_notes'] = "Permitir / proibir os civis de administrar seus mandados. Se definido como 'true', o Civs poderá excluir warrants do seu perfil, senão se for definido como 'false', o Civs não poderá remover os mandados.";

$arrLang['CIV_REG'] = "Registro Civil Instantâneo";
$arrLang['CIV_REG_notes'] = "Permitir / proibir o registro direto para os civis. Se for definido como 'true', os civis não precisarão da aprovação do administrador, se a configuração for 'false', a versão do Civillian exigirá a aprovação do administrador. Permitir / proibir a regulamentação imediata para civis. Se for \"verdadeiro\", então a inscrição civil requererá a aprovação do Administrador, se \"falso\", os registros civis NÃO exigirão a aprovação do Administrador.";

$arrLang['CIV_LIMIT_MAX_IDENTITIES'] = "Limite Máximo Identidades Civis";
$arrLang['CIV_LIMIT_MAX_IDENTITIES_notes'] = "Se CIV_LIMIT_MAX é '0' então os civis serão capazes de criar identidades ilimitadas. Caso contrário, se CIV_LIMIT_MAX for um valor diferente de '0' então, irá limitar o número máximo de identidades possíveis para esse valor.";

$arrLang['CIV_LIMIT_MAX_VEHICLES'] = "Limite Máximo Veículos Civis";
$arrLang['CIV_LIMIT_MAX_VEHICLES_notes'] = "Se CIV_LIMIT_MAX_VEHICLES é '0' então os civis serão capazes de criar veículos ilimitados. Caso contrário, se CIV_LIMIT_MAX_VEHICLES é um valor diferente de '0' então, irá limitar o número máximo de veículos possíveis a esse valor";

$arrLang['CIV_LIMIT_MAX_WEAPONS'] = "Limite Máximo Armas Civis";
$arrLang['CIV_LIMIT_MAX_WEAPONS_notes'] = "Se CIV_LIMIT_MAX_WEAPONS é '0' então civis serão capazes de criar armas ilimitadas. Caso contrário, se CIV_LIMIT_MAX_WEAPONS é um valor diferente de '0' então, ele irá limitar o número máximo de armas a esse valor";
//** End Civilian Strings **//

//** Begin Administrative Strings**//
$arrLang['MODERATOR_USER_MANAGER'] = "";
$arrLang['MODERATOR_USER_MANAGER_notes'] = "";

$arrLang['MODERATOR_APPROVE_USER'] = "Usuário Aprovado pelo Moderador";
$arrLang['MODERATOR_APPROVE_USER_notes'] = "Se 'true' então os moderadores serão capazes de aprovar novos pedidos de utilizador, caso contrário, se 'falso' então os moderadores não poderão aprovar novos pedidos de utilizador.";

$arrLang['MODERATOR_EDIT_USER'] = "Editar Usuário do Moderador";
$arrLang['MODERATOR_EDIT_USER_notes'] = "Se 'true' então os moderadores serão capazes de editar o perfil dos utilizadores, se 'false' então os moderadores não serão capazes de editar o perfil dos utilizadores. Isto inclui nome, e-mail, identificador e cargos. Os moderadores serão capazes de adicionar grupos de utilizador, mas a remoção deles é regida pela configuração MODERATOR_REMOVE_GROUPS.";

$arrLang['MODERATOR_DELETE_USER'] = "Moderador Excluir Usuário";
$arrLang['MODERATOR_DELETE_USER_notes'] = "Se 'true' então os moderadores serão capazes de excluir utilizadores, caso 'false' moderadores não serão capazes de excluir utilizadores.";

$arrLang['MODERATOR_SUSPEND_WITHOUT_REASON'] = "Moderador suspender sem razão";
$arrLang['MODERATOR_SUSPEND_WITHOUT_REASON_notes'] = "Se 'true' então os moderadores poderão suspender utilizadores sem uma razão, caso contrário, os moderadores 'false' não poderão suspender utilizadores sem uma razão.";

$arrLang['MODERATOR_SUSPEND_WITH_REASON'] = "Moderador suspender com razão";
$arrLang['MODERATOR_SUSPEND_WITH_REASON_notes'] = "Se 'true' então os moderadores poderão suspender utilizadores com uma razão, se 'false' moderadores não poderão suspender os utilizadores sem uma razão.";

$arrLang['MODERATOR_REACTIVATE_USER'] = "Usuário Reactivado pelo Moderador";
$arrLang['MODERATOR_REACTIVATE_USER_notes'] = "Se 'true' então os moderadores serão capazes de reactivar outros utilizadores, se 'false' moderadores não serão capazes de reactivar utilizadores.";

$arrLang['MODERATOR_REMOVE_GROUP'] = "Remover Grupo de Moderadores";
$arrLang['MODERATOR_REMOVE_GROUP_notes'] = "Se 'true' então os moderadores serão capazes de remover os grupos do utilizadores, caso contrário, os moderadores 'false' não serão capazes de remover os grupos do utilizadores.";

$arrLang['MODERATOR_NCIC_EDITOR'] = "Editor NCIC do Moderador";
$arrLang['MODERATOR_NCIC_EDITOR_notes'] = "";

$arrLang['MODERATOR_DATA_MANAGER'] = "Moderador de gestão de dados";
$arrLang['MODERATOR_DATA_MANAGER_notes'] = "Se 'verdadeiro' então os moderadores serão capazes de acessar a Gestão de Dados do Jogo, caso 'falso' então os moderadores não poderão acessar a Gestão de Dados do Jogo.";

$arrLang['MODERATOR_DATAMAN_CITATIONTYPES'] = "Editor de tipos de citação de Moderadores";
$arrLang['MODERATOR_DATAMAN_CITATIONTYPES_notes'] = "Se 'true' então os moderadores terão acesso ao módulo de Gestão de Tipos de Referência do Gestor de Dados do Jogo, senão se 'falso' então os moderadores serão negados o acesso.";

$arrLang['MODERATOR_DATAMAN_DEPARTMENTS'] = "Editor de Departamentos Moderadores";
$arrLang['MODERATOR_DATAMAN_DEPARTMENTS_notes'] = "Se 'true' então os moderadores terão acesso ao módulo Gestão de Departamentos do Gestor de Dados de Jogo, senão se 'falso' então os moderadores serão negados o acesso.";

$arrLang['MODERATOR_DATAMAN_INCIDENTTYPES'] = "Editor de Tipos de Incidentes Moderadores";
$arrLang['MODERATOR_DATAMAN_INCIDENTTYPES_notes'] = "Se 'true' então os moderadores terão acesso ao módulo Gestão de Tipos de Incidentes do Gestor de Dados de Jogo, senão se 'falso' então os moderadores serão negados o acesso.";

$arrLang['MODERATOR_DATAMAN_RADIOCODES'] = "Editor de códigos de rádio do moderador";
$arrLang['MODERATOR_DATAMAN_RADIOCODES_notes'] = "Se 'true' então os moderadores terão acesso ao módulo Gestão de Dados de Rádio do Gestor de Dados do Jogo, senão se 'falso' então os moderadores serão negados o acesso.";

$arrLang['MODERATOR_DATAMAN_STREETS'] = "Editor de Ruas do Moderador";
$arrLang['MODERATOR_DATAMAN_STREETS_notes'] = "Se 'true' então os moderadores terão acesso ao módulo Gestão de Ruas do Gestor de Dados do Jogo, senão se 'falso' então os moderadores serão negados o acesso.";

$arrLang['MODERATOR_DATAMAN_VEHICLES'] = "";
$arrLang['MODERATOR_DATAMAN_VEHICLES_notes'] = "Se 'true' então os moderadores terão acesso ao módulo Gestão de Veículos do Gestor de Dados do Jogo, senão se 'falso' então os moderadores serão negados o acesso.";

$arrLang['MODERATOR_DATAMAN_WARNINGTYPES'] = "Editor de Tipos de Alerta do Moderador";
$arrLang['MODERATOR_DATAMAN_WARNINGTYPES_notes'] = "Se 'true' então os moderadores terão acesso ao módulo Gestão de Tipos de Alerta do Gestor de Dados do Jogo, senão se 'falso' então os moderadores serão negados o acesso.";

$arrLang['MODERATOR_DATAMAN_WARRANTTYPES'] = "Editor de Tipos de Moderadores";
$arrLang['MODERATOR_DATAMAN_WARRANTTYPES_notes'] = "Se 'true' então os moderadores terão acesso ao módulo Gestão de Tipos de Mandados do Gestor de Dados do Jogo, senão se 'falso' então os moderadores serão negados o acesso.";

$arrLang['MODERATOR_DATAMAN_WEAPONS'] = "Editor de Armas do Moderador";
$arrLang['MODERATOR_DATAMAN_WEAPONS_notes'] = "Se 'true' então os moderadores terão acesso ao módulo Gestão de Armas do Gestor de Dados de Jogo, senão se 'falso' então os moderadores serão negados o acesso.";

$arrLang['MODERATOR_DATAMAN_IMPEXPRESET'] = "Importar/Exportar/Resetar Moderadores";
$arrLang['MODERATOR_DATAMAN_IMPEXPRESET_notes'] = "Se 'true' então os moderadores terão acesso ao módulo Importar/Exportar/Reiniciar do Gestor de Dados do Jogo, senão se 'falso' então os moderadores serão negados o acesso.";
//** End Administrative Strings**//

//** Begin Extra Settings Strings **//
$arrLang['DEMO_MODE'] = "Modo Demo";
$arrLang['DEMO_MODE_notes'] = "'true' então vários recursos de gerenciamento de usuários do OpenCAD serão bloqueados, senão se 'false' então a funcionalidade completa do OpenCAD * estará disponível para uso.";

$arrLang['USE_GRAVATAR'] = "Gravatar";
$arrLang['USE_GRAVATAR_notes'] = "O OpenCAD recuperará dinamicamente seu avatar de {@link Gravatar http://en.gravatar.com/} se você tiver uma conta. Caso contrário, usará a imagem genérica padrão de avatar incluída com OpenCAD.";
//** End Extra Settings Strings **//

//** Begin Common Global Strings **/
$arrLang['WELCOME'] = "Boas-vindas";
$arrLang["GENERAL"] = "Geral";
$arrLang["CAD_SYSTEM"] = "Sistema CAD";
$arrLang["EDIT"] = "Editar";
$arrLang["DELETE"] = "Apagar";
$arrLang["NAME"] = "Nome";
$arrLang["EMAIL"] = "E-mail";
$arrLang["ROLE"] = "Papel";
$arrLang["IDENTIFIER"] = "Identificador";
$arrLang["GROUPS"] = "Grupos";
$arrLang["ACTIONS"] = "Ações";
$arrLang["NEXT"] = "Próximo";
$arrLang["PREVIOUS"] = "Anterior";
$arrLang["SEARCH"] =  "Pesquisar";
$arrLang["DASHBOARD"] =  "Painel";
$arrLang["LOGOUT"] =  "Sair";
$arrLang["NEED_HELP"] =  "Precisa de ajuda?";
$arrLang["FULLSCREEN"] =  "Tela Cheia";
$arrLang["DOB"] = "BAIXO";
$arrLang["ADDRESS"] = "Endereço";
$arrLang["GENDER"] = "Gênero";
$arrLang["RACE"] = "Corrida";
$arrLang["DL_STATUS"] = "Status DL";
$arrLang["HAIR_COLOR"] = "Cor do cabelo";
$arrLang["BUILD"] = "Construir";
$arrLang["WEAPON_STATUS"] = "Status da Arma";
$arrLang["WEAPON_NAME"] = "Nome da Arma";
$arrLang["WEAPON_TYPE"] ="Tipo de Arma";
$arrLang["WEAPON_NOTES"] ="Notas de Arma";
$arrLang["DECEASED"] = "Morto";
$arrLang["REG_PLATE"] = "Placa de Reg";
$arrLang["VEHICLE_NOTES"] = "Notas do Veículo";
$arrLang["NOT_YOU"] = "Não é você?";
$arrLang["ACTIVE_CALLS"] = "Chamadas Ativas";
$arrLang["ACTIVE_BOLOS"] = "BOLOs Ativas";
$arrLang["NCIC_NAME_LOOKUP"] = "Pesquisa de nome NCIC";
$arrLang["NCIC_PLATE_LOOKUP"] = "Pesquisa de placa NCIC";
$arrLang["NCIC_WEAPON_LOOKUP"] = "Pesquisa de Armas NCIC";
$arrLang["SEND"] = "Enviar";
$arrLang["MY_PROFILE"] = "Meu Perfil";
$arrLang["APPLICATIONS"] = "";
$arrLang["SETTINGS"] = "";
$arrLang["REQUEST"] = "";
$arrLang["CLOSE"] = "";
$arrLang["RESET"] = "";
//** End Common Global Strings */

//** Begin Administrator/Moderator Console Strings  **/
$arrLang["CAD_ADMINISTRATION"] = "Administração CAD";
$arrLang["STATISTICS_AT_A_GLANCE"] = "Estatísticas à vista";
$arrLang["TOTAL_USERS"] = "Total de Usuários";
$arrLang["ACEESS_REQUESTS"] = "Solicitações de acesso";
$arrLang["THERE_ARE_CURRENTLY_NO_ACCESS_REQUESTS"] = "Atualmente, não há solicitações de acesso.";
$arrLang["CAD_USER_MANAGEMENT"] = "Gerenciamento de Usuário CAD";
$arrLang["ACCOUNT_MANAGEMENT"] = "Gerenciamento de contas";
$arrLang["SUSPEND_WITH_REASON"] = "Suspender com o motivo";
$arrLang["SUSPEND_WITHOUT_REASON"] = "Suspender sem razão";
$arrLang["NCIC_NAMES_DB"] = ""; 
$arrLang["NCIC_NAMES_DB_none"] = "";
$arrLang["NCIC_VEHICLES_DB"] = "Banco de Dados de Veículos NCIC";
$arrLang["NCIC_VEHICLES_DB_none"] = "Nenhum resultado encontrado no banco de dados de veículos NCIC.";
$arrLang["NCIC_WEAPONS_DB"] = "Banco de Dados de Armas NCIC";
$arrLang["NCIC_WEAPONS_DB_none"] = "Nenhum resultado encontrado no banco de dados de armas NCIC.";
$arrLang["NCIC_WARNINGS_DB"] = "Banco de Dados de Avisos NCIC";
$arrLang["NCIC_WARNINGS_DB_none"] = "Nenhum resultado encontrado no banco de dados de armas NCIC.";
$arrLang["NCIC_CITATIONS_DB"] = "Banco de Dados de Referências NCIC.";
$arrLang["NCIC_CITATIONS_DB_none"] = "Nenhum resultado encontrado no banco de dados de Citações NCIC.";
$arrLang["NCIC_ARRESTS_DB"] = "Banco de Dados de Detenções NCIC";
$arrLang["NCIC_ARRESTS_DB_none"] = "Nenhum resultado encontrado no banco de dados de Detenções NCIC.";
$arrLang["NCIC_WARRANTS_DB"] = "Banco de Dados de Guerreiros NCIC";
$arrLang["NCIC_WARRANTS_DB_none"] = "Nenhum resultado encontrado na base de dados de Guerres NCIC";
$arrLang["USER_MANAGER"] = "";
$arrLang["NCIC_EDITOR"] = "Editor NCIC";
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
$arrLang["CIVILLIAN_CONSOLE"] = "Console Civis";
$arrLang["MY_IDENTITIES"] = "Minhas identidades";
$arrLang["MY_IDENTITIES_none"] = "Nenhum resultado encontrado no banco de dados de identidades.";
$arrLang["MY_VEHICLES"] = "Meus Veículos";
$arrLang["MY_VEHICLES_none"] = "Nenhum resultado encontrado no banco de dados de veículos.";
$arrLang["MY_WEAPONS"] = "Minhas Armas";
$arrLang["MY_WEAPONS_none"] = "Nenhum resultado encontrado no banco de dados de armas.";
$arrLang["MY_WARRANTS"] = "Meus Guerreiros";
$arrLang["MY_WARRANTS_none"] = "Nenhum resultado encontrado no banco de dados de garantias.";
$arrLang["CREATE_A_CALL"] = "Criar uma chamada";
$arrLang["ADD_NEW_IDENTITY"] = "Adicionar nova identidade";
$arrLang["ADD_NEW_VEHICLE"] = "";
$arrLang["ADD_NEW_WEAPON"] = "Adicionar nova arma";
$arrLang["CIVILLIAN_DASHBOARD"] = "Painel Civis";
$arrLang["VIEW_WARRANTS"] = "";
$arrLang["CREATE_WARRANT"] = "Criar Guerreiro";
$arrLang["UPDATE"] = "Atualizar";
//** End Civillian Console Strings **/

//** Begin CAD Console Strings **/
$arrLang["CAD_CONSOLE"] = "Console CAD";
$arrLang["ACTIVE_DISPATCHERS"] = "Dispatchers ativos";
$arrLang["ACTIVE_DISPATCHERS_none"] = "Nenhuma expedição disponível no momento.";
$arrLang["AVAILABLE_UNITS"] = "Unidades disponíveis";
$arrLang["UNAVAILABLE_UNITS"] = "Unidades Indisponíveis";
$arrLang["NEW_PERSONS_BOLO"] = "BOLO de Novas Pessoas";
$arrLang["NEW_VEHICLE_BOLO"] = "Novo BOLO do Veículo";
$arrLang["NEW_CALL"] = "Nova chamada";
$arrLang["PANIC_BUTTON"] = "Botão Pânico";
$arrLang["PRIORITY_TONE"] = "PRIORIDADE_TONE";
$arrLang["STOP_BORADCASTING_BUTTON"] = "10-3 Tom";
$arrLang["STOPWATCH"] = "Cronômetro";
$arrLang["WARNINGS"] = "Avisos";
$arrLang["CITATIONS"] = "Referências";
$arrLang["ARREST_REPORT"] = "Detenção REPORT";
$arrLang["WARRANTS"] = "Guerreiros";
$arrLang["SET_AREA_OF_PATROL"] = "";
//** End CAD Console Strings *//

//** Begin MDT Console Strings **/
$arrLang["MDT_CONSOLE"] = "Console MDT";
$arrLang["MY_STATUS"] = "Meu status";
$arrLang["MY_CALL"] ="Minha Chamada";
$arrLang["VIEW_PERSONS_BOLOS"] = "Ver BOLOs de Pessoas";
$arrLang["VIEW_VEHICLE_BOLOS"] = "Ver BOLOs do Veículo";
//** End MDT Console Strings *//

//** Begin Profile Console Strings **/
$arrLang["PASSWORD"] = "Senha";
$arrLang["CHANGE_PASSWORD"] = "Alterar senha";
$arrLang["MY_PRFILE"] ="Meu Perfil";
$arrLang["PROFILE_SUCCESS"] = "";
$arrLang["PASSWORD_SUCCESS"] = "Successfully updated your password."
//** End Profile Console Strings *//
?>