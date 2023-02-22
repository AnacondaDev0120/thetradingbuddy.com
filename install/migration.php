<?php

/**
 * @package		XG Project
 * @copyright	Copyright (c) 2008 - 2015
 * @license		http://opensource.org/licenses/gpl-3.0.html	GPL-3.0
 * @since		Version 3.0.0
 */

function migrate_to_xml ()
{
	$query = $db->query ( "SELECT * FROM " . DB_PREFIX . "config");

	$search		=	array	(
								'?',
								'?',
								'?',
								'?',
								'"',
								'#',
								'$',
								'%',
								'(',
								')',
								'?',
								'?',
								'|',
								'~'
							);
	$replace	=	array	(
								'&#161;',
								'&#191;',
								'&#176;',
								'&#170;',
								'&#34;',
								'&#35;',
								'&#36;',
								'&#37;',
								'&#40;',
								'&#41;',
								'&#172;',
								'&#8364;',
								'&#124;',
								'&#126;'
							);

	while ( $row = $db->fetch_array ( $query ) )
	{
		if ( $row['config_name'] != 'BuildLabWhileRun' )
		{
			Functions_Lib::update_config ( strtolower ( $row['config_name'] ) , str_replace ( $search , $replace , $row['config_value'] )  );
		}
	}
}
/* end of migration.php */
