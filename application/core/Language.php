<?php

/**
 * @package		XG Project
 * @copyright	Copyright (c) 2008 - 2015
 * @license		http://opensource.org/licenses/gpl-3.0.html	GPL-3.0
 * @since		Version 3.0.0
 */

if ( ! defined ( 'INSIDE' ) ) { die ( header ( 'location:../../' ) ) ; }

class Language
{
	private $_lang;
	private $_lang_extension = 'php';

	/**
	 * __construct()
	 */
	public function __construct()
	{
		$languages_loaded	= $this->get_file_name();

		foreach ( $languages_loaded as $load )
		{
			$route	= XGP_ROOT . LANG_PATH . DEFAULT_LANG . '/' . $load . '.' . $this->_lang_extension;

			if ( file_exists ( $route ) ) // WE GOT SOMETHING
			{
				// GET THE LANGUAGE PACK
				include ( $route );
			}
		}

		if ( ! empty ( $lang ) ) // WE GOT SOMETHING
		{
			// SET DATA
			$this->_lang	= $lang;
		}
		else
		{
			// THROW EXCEPTION
			die ( 'Language file not found or empty: <strong>' . $load . '</strong><br />Location: <strong>' . $route . '</strong>' );
		}
	}

	/**
	 * method lang
	 * param
	 * return the language data
	 */
	public function lang()
	{
		return $this->_lang;
	}

	/**
	 * method get_file_name
	 * param
	 * return language pack file
	 */
	private function get_file_name()
	{
		if ( defined ( 'IN_ADMIN' ) )
		{
			$required[] = 'ADMIN';
		}

		if ( defined ( 'IN_CHANGELOG' ) )
		{
			$required[] = 'CHANGELOG';
		}

		if ( defined ( 'IN_GAME' ) )
		{
			$required[] = 'INGAME';
		}

		if ( defined ( 'IN_INSTALL' ) )
		{
			$required[] = 'INSTALL';
		}

		if ( defined ( 'IN_LOGIN' ) )
		{
			$required[] = 'HOME';
		}

		return $required;
	}
}

/* end of Language.php */
