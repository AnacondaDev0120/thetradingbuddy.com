<?php

/**
 * @package		XG Project
 * @copyright	Copyright (c) 2008 - 2015
 * @license		http://opensource.org/licenses/gpl-3.0.html	GPL-3.0
 * @since		Version 3.0.0
 */

if ( ! defined ( 'INSIDE' ) ) { die ( header ( 'location:../../' ) ) ; }
/**
 * MODES
 * before_loads
 * before_page
 * new_page
 */
// INSERT HOOKS AFTER THIS LINE
$hook['before_page'] = array(
                                'class'    => 'MyClass',
                                'function' => 'MyMethod',
                                'filename' => 'MyClass.php',
                                'filepath' => 'hooks',
                                'params'   => array('beer', 'wine', 'snacks')
                                );


// INSERT HOOKS BEFORE THIS LINE
/* end of hooks.php */
