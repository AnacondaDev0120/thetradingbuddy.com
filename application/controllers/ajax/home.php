<?php

/**
 * @package		XG Project
 * @copyright	Copyright (c) 2008 - 2015
 * @license		http://opensource.org/licenses/gpl-3.0.html	GPL-3.0
 * @since		Version 3.0.0
 */

if ( ! defined ( 'INSIDE' ) ) { die ( header ( 'location:../../' ) ) ; }

class Home extends XGPCore
{
	private $_lang;

	/**
	 * __construct()
	 */
	function __construct()
	{
		parent::__construct();

		$this->_lang = parent::$lang;

		$this->build_page();
	}

	/**
	 * method __destruct
	 * param
	 * return close db connection
	 */
	function __destruct()
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
		parent::$page->display ( parent::$page->parse_template ( parent::$page->get_template ( 'ajax/home_view' ) , $this->_lang ) , FALSE , '' , FALSE );
	}
}
/* end of home.php */
