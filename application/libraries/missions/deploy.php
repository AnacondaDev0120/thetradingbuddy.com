<?php

/**
 * @package		XG Project
 * @copyright	Copyright (c) 2008 - 2015
 * @license		http://opensource.org/licenses/gpl-3.0.html	GPL-3.0
 * @since		Version 3.0.0
 */

if ( ! defined ( 'INSIDE' ) ) die ( header ( 'location:../../' ) );

class Deploy extends Missions
{
	/**
	 * __construct()
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * method deploy_mission
	 * param $fleet_row
	 * return the deploy result
	*/
	public function deploy_mission ( $fleet_row )
	{
		if ( $fleet_row['fleet_mess'] == 0 )
		{
			if ( $fleet_row['fleet_start_time'] <= time() )
			{
				$target_coords         	= sprintf ( $this->_lang['sys_adress_planet'] , $fleet_row['fleet_end_galaxy'] , $fleet_row['fleet_end_system'] , $fleet_row['fleet_end_planet'] );
				$target_resources     	= sprintf ( $this->_lang['sys_stay_mess_goods'] , $this->_lang['Metal'] , Format_Lib::pretty_number ( $fleet_row['fleet_resource_metal'] ) , $this->_lang['Crystal'] , Format_Lib::pretty_number ( $fleet_row['fleet_resource_crystal'] ) , $this->_lang['Deuterium'] , Format_Lib::pretty_number ( $fleet_row['fleet_resource_deuterium'] ) );
				$target_message        	= $this->_lang['sys_stay_mess_start'] ."<a href=\"game.php?page=galaxy&mode=3&galaxy=". $fleet_row['fleet_end_galaxy'] ."&system=". $fleet_row['fleet_end_system'] ."\">";
				$target_message        .= $target_coords . "</a>" . $this->_lang['sys_stay_mess_end'] . "<br />" . $target_resources;

				Functions_Lib::send_message ( $fleet_row['fleet_target_owner'] , '' , $fleet_row['fleet_start_time'] , 5 , $this->_lang['sys_mess_qg'] , $this->_lang['sys_stay_mess_stay'] , $target_message );

				parent::restore_fleet ( $fleet_row , FALSE );
				parent::remove_fleet ( $fleet_row['fleet_id'] );
			}
		}
		else
		{
			if ($fleet_row['fleet_end_time'] <= time())
			{
				$target_coords         	= sprintf ( $this->_lang['sys_adress_planet'] , $fleet_row['fleet_start_galaxy'] , $fleet_row['fleet_start_system'] , $fleet_row['fleet_start_planet'] );
				$target_resources     	= sprintf ( $this->_lang['sys_stay_mess_goods'] , $this->_lang['Metal'] , Format_Lib::pretty_number ( $fleet_row['fleet_resource_metal'] ) , $this->_lang['Crystal'] , Format_Lib::pretty_number ( $fleet_row['fleet_resource_crystal'] ) , $this->_lang['Deuterium'] , Format_Lib::pretty_number ( $fleet_row['fleet_resource_deuterium'] ) );
				$target_message        	= $this->_lang['sys_stay_mess_back'] . "<a href=\"game.php?page=galaxy&mode=3&galaxy=" . $fleet_row['fleet_start_galaxy'] . "&system=" . $fleet_row['fleet_start_system'] . "\">";
				$target_message        .= $target_coords . "</a>" . $this->_lang['sys_stay_mess_bend'] . "<br />" . $target_resources;

				Functions_Lib::send_message ( $fleet_row['fleet_owner'], '', $fleet_row['fleet_end_time'], 5, $this->_lang['sys_mess_qg'], $this->_lang['sys_mess_fleetback'], $target_message);

				parent::restore_fleet ( $fleet_row , TRUE );
				parent::remove_fleet ( $fleet_row['fleet_id'] );
			}
		}
	}
}
/* end of deploy.php */
