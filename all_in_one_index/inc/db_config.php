<?php
define('db_host','localhost:3306');
define('db_user','root');
define('db_passwd','');
define('db_name','maxbans_database');
//Database Connection//
@mysql_connect(db_host,db_user,db_passwd) or die("<b>ERROR:</b> ".mysql_error());
@mysql_select_db(db_name);
?>