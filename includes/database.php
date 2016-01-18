<?php
/*
 ex: set tabstop=4 shiftwidth=4 autoindent:
 +-------------------------------------------------------------------------+
 | Copyright (C) 2012 The Cacti Group                                      |
 |                                                                         |
 | This program is free software; you can redistribute it and/or           |
 | modify it under the terms of the GNU General Public License             |
 | as published by the Free Software Foundation; either version 2          |
 | of the License, or (at your option) any later version.                  |
 |                                                                         |
 | This program is distributed in the hope that it will be useful,         |
 | but WITHOUT ANY WARRANTY; without even the implied warranty of          |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the           |
 | GNU General Public License for more details.                            |
 +-------------------------------------------------------------------------+
 | Cacti: The Complete RRDTool-based Graphing Solution                     |
 +-------------------------------------------------------------------------+
 | This code is designed, written, and maintained by the Cacti Group. See  |
 | about.php and/or the AUTHORS file for specific developer information.   |
 +-------------------------------------------------------------------------+
 | http://www.cacti.net/                                                   |
 +-------------------------------------------------------------------------+
*/

function mirage_setup_database () {
    // initial code for database mirror kept
	$data = array();
	$data['columns'][] = array('name' => 'id', 'type' => 'int(11)', 'NULL' => false, 'auto_increment' => true);
	$data['columns'][] = array('name' => 'output', 'type' => 'text', 'NULL' => false);
	$data['columns'][] = array('name' => 'unix_time', 'type' => 'datetime', 'NULL' => false, 'default' => '0000-00-00 00:00:00');
	$data['columns'][] = array('name' => 'local_data_id', 'type' => 'mediumint(8)', 'NULL' => false, 'default' => '0');
	$data['columns'][] = array('name' => 'rrd_path', 'type' => 'varchar(255)', 'NULL' => false, 'default' => '');
	$data['columns'][] = array('name' => 'rrd_name', 'type' => 'varchar(19)', 'NULL' => false, 'default' => '');
	$data['columns'][] = array('name' => 'rrd_num', 'type' => 'tinyint(2)', 'NULL' => false, 'default' => '0');
	$data['primary'] = 'id';
	$data['keys'][] = array('name' => 'id', 'columns' => 'id');
	$data['keys'][] = array('name' => 'output', 'columns' => 'output');
	$data['keys'][] = array('name' => 'unix_time', 'columns' => 'unix_time');
	$data['keys'][] = array('name' => 'local_data_id', 'columns' => 'local_data_id');
	$data['keys'][] = array('name' => 'rrd_path', 'columns' => 'rrd_path');
	$data['keys'][] = array('name' => 'rrd_name', 'columns' => 'rrd_name');
	$data['keys'][] = array('name' => 'rrd_num', 'columns' => 'rrd_num');

	$data['type'] = 'MyISAM';
	$data['comment'] = 'Mirage data';
	api_plugin_db_table_create('mirage', 'mirage_data', $data);

}

?>
