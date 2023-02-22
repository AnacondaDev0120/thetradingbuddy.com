<?php

/**
 * @package		XG Project
 * @copyright	Copyright (c) 2008 - 2015
 * @license		http://opensource.org/licenses/gpl-3.0.html	GPL-3.0
 * @since		Version 3.0.0
 */

define ( 'INSIDE'		, TRUE );
define ( 'IN_INSTALL'	, TRUE );
define ( 'XGP_ROOT'		, './../' );

require ( XGP_ROOT . 'application/core/common.php' );

switch ( ( isset ( $_GET['page'] ) ? $_GET['page'] : '' ) )
{
	case 'update':

		include_once ( XGP_ROOT . INSTALL_PATH . 'update.php' );
		new Update();

	break;

	case 'migrate':

		include_once ( XGP_ROOT . INSTALL_PATH . 'migration.php' );
		new Migration();

	break;

	case '':
	case 'install':
	default:

		include_once ( XGP_ROOT . INSTALL_PATH . 'installation.php' );
		new Installation();

	break;
}
/* end of index.php */
