<?php

$config = parse_ini_file('config.ini');
$connection = mysqli_connect($config['mysql_hostname'], $config['mysql_username'], $config['mysql_password'], $config['mysql_table']);