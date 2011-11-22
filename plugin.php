<?php
/*
Plugin Name: Plugin Template
Plugin URI: http://mildfuzz.com
Description: A template to start plugins
Version: 0.1
Author: John Farrow
Author URI: http://mildfuzz.com
License: GPL2
*/


/*  Copyright 2011  John Farrow  (email : john@mildfuzz.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
//load core classes
include 'core_classes.php';

global $table;
$pluginTables = array(
		'tables' => array(
					"contacts" => array(
							'email' => 'text NOT NULL',
							'label' => 'text NOT NULL' 
						)
					)
				);
				
$table = new PluginTables($pluginTables);
		
register_activation_hook(__FILE__,'mf_activate_plugin');
register_deactivation_hook(__FILE__,'mf_deactivate_plugin');
	
function mf_activate_plugin(){
	global $table;
	$table->activate();
}
function mf_deactivate_plugin(){
	global $table;
	
	$table->deactivate();
}




//after install
include 'pages.php';


?>