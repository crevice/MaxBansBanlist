Description
----
This is PHP bans list for bukkit plugin called MaxBans:  
http://dev.bukkit.org/server-mods/maxbans/

Features:
----
* Displays sorted list of bans. Regular bans are combined with IP Bans and Range Bans.
* Ready for deployment, require only specify the parameters of the connection to the database in the configuration file.
* Simple code, you can customize your banlist as you wish.

File Definition:
----
1. index.php - Web Page example for using with bans.php
2. bans.php - Banlist table, displays /ban, /tempban, /rangeban, /ipban bans.
3. includes/config.php - Database connection configuration file.  
4. css/style.css - Stylesheet file

Minimum Requirements 
----
* PHP 5.2 or higher, with PDO & SQLite support
* MySQL

Installation:
----
1. Put all files to your www folder   
2. Edit includes/config.php file and define your MySQL connection settings.  
3. ...
4. PROFIT!

How-to: Using banlist at your webpage
----
Load bans.php page with JavaScript:
```
<script>
function loadMaxBansBanlistPage(banlist_file_path,banlist_element_id){
	if (window.XMLHttpRequest){
		xmlhttp=new XMLHttpRequest();
	}else{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			document.getElementById(banlist_element_id).innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET",banlist_file_path,true);
	xmlhttp.send();
}
loadMaxBansBanlistPage("bans.php","banlist-frame");
</script>
```
And then put that container to the desired location on your webpage
```
<div id="banlist-frame"></div>
```
----
Author: crevice

Mail me if you got any problems with it: ivnow1337@gmail.com
