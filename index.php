<?php

/**
 * @package		XG Project
 * @copyright	Copyright (c) 2008 - 2015
 * @license		http://opensource.org/licenses/gpl-3.0.html	GPL-3.0
 * @since		Version 3.0.0
 */

define ( 'INSIDE'  	, TRUE );
define ( 'IN_LOGIN'	, TRUE );
define ( 'XGP_ROOT'	, './' );

$InLogin	= TRUE;

include ( XGP_ROOT . 'application/core/common.php' );

switch ( ( isset ( $_GET['page'] ) ? $_GET['page'] : '' ) )
{
	// REGISTER PAGE
	case 'reg':

		include ( XGP_ROOT . HOME_PATH . 'register.php' );
		new Register();

	break;

	// RECOVER PASSWORD PAGE
	case 'recoverpassword':

		include ( XGP_ROOT . HOME_PATH . 'recoverpassword.php' );
		new Recoverpassword();

	break;

	// HOME - INDEX - DEFAULT - START PAGE
	case '':
	default:

		include ( XGP_ROOT . HOME_PATH . 'home.php' );
		new Home();

	break;
}
/* end of index.php */
