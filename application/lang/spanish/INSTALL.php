<?php

// SOME MESSAGES
$lang['404_error']					= 'La página solicitada no existe';
$lang['ins_no_server_requirements']	= 'Tu servidor/hosting no cumple con los requisitos mínimos que requiere XG Project para funcionar.<br /><br />Requisitos: <br />- PHP 5.2.0<br />- MySQL 5.0.19';
$lang['ins_already_installed']		= 'XG Project ya se encuentra instalado. Selecciona una opción: <br /><br /> - <a href="index.php?page=update">Actualizar</a> <br /> - <a href="index.php?page=migrate">Migrar</a> <br /> - <a href="../">Volver al juego</a> <br /><br />En el caso de que no desees realizar ninguna acción, por seguridad, te recomendamos <span style="color:red;text-decoration:underline;">BORRAR</span> el directorio install.';
$lang['ins_missing_xml_file']		= 'No se puede encontrar el archivo config.xml ni el archivo config.xml.cfg, debes tener alguno de estos para poder continuar con la instalación. Revisa tu directorio application/config y los permisos del mismo deben estar en chmod 0777';

// SOME ERROR HEADERS
$lang['ins_error_title']			= '¡Alerta!';
$lang['ins_warning_title']			= '¡Advertencia!';
$lang['ins_ok_title']				= '¡Ok!';

// TOP MENU
$lang['ins_overview']				= 'Vista general';
$lang['ins_license']				= 'Licencia';
$lang['ins_install']				= 'Instalar';
$lang['ins_update']					= 'Actualizar';
$lang['ins_migrate']				= 'Migrar';
$lang['ins_language_select']		= 'Seleccionar idioma';


// OVERVIEW PAGE
$lang['ins_title']					= 'Introducción';
$lang['ins_welcome']				= '¡Bienvenido a XG Project!';
$lang['ins_welcome_first_line']		= 'XG Project es uno de los mejores clones de OGame existentes hasta el momento. XG Project 3 es el último y más estable paquete nunca antes desarrollado. Tal cual como las otras versiones, XG Project recibe soporte del equipo antes conocido como Xtreme-gameZ, asegurándonos siempre de lograr la mejor calidad en atención y la estabilidad de la versión. XG Project 3 día a día busca; crecimiento, estabilidad, flexibilidad, dinamismo, calidad y la confianza del usuario en que es su mejor opción y elección. Siempre esperamos que XG Project sea mejor que sus expectativas.';
$lang['ins_welcome_second_line']	= 'El sistema de instalación te guiará a través de la instalación del mismo, o la actualización de una versión anterior a la más reciente. Cualquier duda, problema o consulta no dudes en consulta nuestra <a href="https://xgproject.org/"><em>comunidad de desarrollo y soporte</em></a>.';
$lang['ins_welcome_third_line']		= 'XG Project es un proyecto OpenSource (código abierto), para ver las especificaciones de la licencia haz click en licencia en la barra superior. Para comenzar la instalación haz click en el botón instalar o para actualizar a la versión más nueva haz click en el botón actualizar.';
$lang['ins_install_license']		= 'Licencia';

// INSTALL PAGE
// GENERAL
$lang['ins_steps']					= 'Pasos';
$lang['ins_step1']					= 'Datos de conexión';
$lang['ins_step2']					= 'Archivo de configuración';
$lang['ins_step3']					= 'Verificar conexión';
$lang['ins_step4']					= 'Inserción de datos';
$lang['ins_step5']					= 'Crear Administrador';
$lang['ins_continue']				= 'Continuar';

// STEP1
$lang['ins_install_title']			= 'Instalación';
$lang['ins_connection_data_title']	= 'Datos para la conexión con la Base de Datos';
$lang['ins_chmod_notice']			= 'Antes de instalar cambie los permisos de los archivos application/config/config.php y application/config/config.xml a "CHMOD 0777"';
$lang['ins_server_title']			= 'Servidor SQL:';
$lang['ins_db_title']				= 'Base de datos:';
$lang['ins_user_title']				= 'Usuario:';
$lang['ins_password_title']			= 'Contraseña:';
$lang['ins_prefix_title']			= 'Prefijo de las tablas:';
$lang['ins_ex_tag']					= 'Ej:';
$lang['ins_install_go']				= 'Instalar';

// ERRORS
$lang['ins_not_connected_error']	= 'No fue posible conectarse a la base de datos con los datos ingresados.';
$lang['ins_empty_fields_error']		= 'Todos los campos son obligatorios';
$lang['ins_write_config_error']		= 'Error al escribir el archivo config.php, asegúrese de que sea CHMOD 0777 (permisos de escritura) o que exista el archivo config.php';
$lang['ins_insert_tables_error']	= 'Error al insertar datos en la base de datos, verifique los datos o que el servidor este activo.';

// STEP2
$lang['ins_done_config']			= 'Archivo config.php configurado con éxito.';
$lang['ins_done_connected']			= 'Conexión establecida con éxito.';
$lang['ins_done_insert']			= 'Base de datos configurada con éxito.';

// STEP3
$lang['ins_admin_create_title']		= 'Establecer cuenta de administración';
$lang['ins_admin_create_user']		= 'Usuario:';
$lang['ins_admin_create_pass']		= 'Contraseña:';
$lang['ins_admin_create_email']		= 'Correo electrónico:';
$lang['ins_admin_create_create']	= 'Crear';

// ERRORS
$lang['ins_adm_empty_fields_eror']	= 'Todos los campos son obligatorios';

// STEP 4
$lang['ins_completed']				= '¡INSTALACIÓN FINALIZADA!';
$lang['ins_admin_account_created']	= 'El Administrador ha sido creado correctamente.';
$lang['ins_delete_install']			= '¡Ahora debes borrar la carpeta <i>install</i> asi evitaras problemas graves de seguridad!';
$lang['ins_end']					= 'Finalizar';

// UPDATE PAGE
// Administator login
$lang['ins_update_title']			= 'Actualizar';
$lang['ins_update_admin_data']		= 'Datos del administrador';
$lang['ins_update_admin_email']		= 'Correo electrónico';
$lang['ins_update_admin_password']	= 'Contraseña';
$lang['ins_update_start']			= 'Ingresar y Actualizar a la versión';

// MIGRATION PAGE
// Administator login
$lang['ins_migrate_title']			= 'Migrar';
$lang['ins_migrate_admin_data']		= 'Datos del administrador';
$lang['ins_migrate_admin_email']	= 'Correo electrónico';
$lang['ins_migrate_admin_password']	= 'Contraseña';
$lang['ins_migrate_start']			= 'Ingresar';
/* end of INSTALL.php */
