Description
----
This is PHP bans list for bukkit plugin called MaxBans:  
http://dev.bukkit.org/server-mods/maxbans/
File Definition:
----
1. index.php - Web Page example for using with bans.php
2. bans.php - Banlist table, displays /ban, /tempban, /rangeban, /ipban bans.
3. includes/config.php - Database connection configuration file.  
4. css/style.css - Stylesheet file

Minimum Requirements 
----
1. PHP 5.2 or higher, with PDO & SQLite support
2. MySQL

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
function loadMaxBansBanlist(){
	if (window.XMLHttpRequest){
		xmlhttp=new XMLHttpRequest();
	}else{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			document.getElementById("banlist-frame").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","path/to/bans.php",true);
	xmlhttp.send();
}
loadMaxBansBanlist();
</script>
```
And then put that container to the desired location on your webpage
```
<div id="banlist-frame"></div>
```
----
Author: crevice

Mail me if you got any problems with it: ivnow1337@gmail.com
