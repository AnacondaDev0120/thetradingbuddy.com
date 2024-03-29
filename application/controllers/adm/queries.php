<?php

/**
 * @package		XG Project
 * @copyright	Copyright (c) 2008 - 2015
 * @license		http://opensource.org/licenses/gpl-3.0.html	GPL-3.0
 * @since		Version 3.0.0
 */

if ( ! defined ( 'INSIDE' ) ) { die ( header ( 'location:../../' ) ) ; }

class Queries extends XGPCore
{
	private $_lang;
	private $_current_user;

	/**
	 * __construct()
	 */
	public function __construct()
	{
		parent::__construct();

		// check if session is active
		parent::$users->check_session();

		$this->_lang			= parent::$lang;
		$this->_current_user	= parent::$users->get_user_data();

		// Check if the user is allowed to access
		if ( Administration_Lib::have_access ( $this->_current_user['user_authlevel'] ) && $this->_current_user['user_authlevel'] == 3 )
		{
			$this->build_page();
		}
		else
		{
			die ( Functions_Lib::message ( $this->_lang['ge_no_permissions'] ) );
		}
	}

	/**
	 * method __destruct
	 * param
	 * return close db connection
	 */
	public function __destruct ()
	{
		parent::$db->close_connection();
	}

	/**
	 * method build_page
	 * param
	 * return main method, loads everything
	 */
	private function build_page()
	{
		$parse	=	$this->_lang;
		$query	=	isset ( $_POST['querie'] ) ? $_POST['querie'] : NULL;

		if ( $_POST )
		{
			$query	= str_replace ( "\'" , "'" , str_replace ( '\"' , '"' , $query ) );

			if ( ! mysql_query ( $query ) )
			{
				$parse['alert']		= Administration_Lib::save_message ( 'error' , mysql_error() );
			}
			else
			{
				$parse['alert']		= Administration_Lib::save_message ( 'ok' , $this->_lang['qe_succes'] );
			}
		}

		parent::$page->display ( parent::$page->parse_template ( parent::$page->get_template ( 'adm/queries_view' ) , $parse ) );
	}
}
/* end of queries.php */
