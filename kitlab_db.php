<?php
$database = 'ete52e_1_i';
$username = 'ete52e_1_i';
$password = '8skpFZVX';

if (!($cnn = mysql_connect('localhost', $username, $password)))
	die('Unable to connect to the database server.');
if (!mysql_select_db($database, $cnn))
	die('Unable to open database.');

echo 'Connection to database was successful.';
