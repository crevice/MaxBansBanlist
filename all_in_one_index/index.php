<style>
*{font-family: Tahoma; font-size: 13px;} 
td{padding: 3px; border: 1px #CACACA solid; background: #FAFAFA;} 
h1{font-size: 23px; color: #224466;}
</style>
<? include("./inc/db_config.php");?>
<h1>MaxBans Bans:</h1>
<hr>
	<? include("./inc/bans.php");?>
<h1>MaxBans IPBans:</h1>
<hr>
	<? include("./inc/ip-bans.php");?>
<h1>MaxBans Warnings:</h1>
<hr>
	<? include("./inc/warnings.php");?>
<hr>
Powered by <a href="http://forums.bukkit.org/members/46163/">XtenD</a> for MaxBans