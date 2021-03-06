<?php
/**
* MaxBans BanList configuration file.
* Sets the details for connecting to the database
* https://github.com/ext4/MaxBansBanlist
*/
$config['db']['dbhost']="127.0.0.1";
$config['db']['dbport']="3306";
$config['db']['dbuser']="user";
$config['db']['dbpass']="user_password";
$config['db']['dbname']="maxbans_database";

//Change only if you use SQLite database
$config['db']['sqlite']=false;
$config['db']['sqlite_path']="/path/to/bans.db";

//Date format to display in the columns "time" and "expires"
$config['dateformat']="d.m.Y / H:i";
?>