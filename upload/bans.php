<!DOCTYPE html>
<html dir="ltr" lang="ru">
	<head>
		<title>MaxBans Banlist</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<link href="./css/style.css" rel="stylesheet"/>
	</head>
	<body>
		<div class="maxbans-banlist">
			<table>
				<tr><th>Login/IP/Range</th><th>Reason</th><th>Ban Type</th><th>Banned By</th><th>Time</th><th>Expires</th></tr>
<?php
include('./includes/config.php');
if($config['db']['sqlite']==false){
	$db = new PDO('mysql:host='.$config['db']['dbhost'].';port='.$config['db']['dbport'].';dbname='.$config['db']['dbname'], $config['db']['dbuser'], $config['db']['dbpass']);
}else{
	$db = new PDO('sqlite:'.$config['db']['sqlite_path']);
}
$db->query("SET sql_mode=PIPES_AS_CONCAT;");
$stmt = $db->prepare("
	SELECT 'Ban',name,reason,banner,time,expires FROM `bans`
	UNION
	SELECT 'IP Ban',ip,reason,banner,time,expires FROM `ipbans`
	UNION
	SELECT 'Range Ban',start||' - '||end,reason,banner,created,expires FROM `rangebans`
	ORDER BY time DESC;
");
$stmt->execute();
$bans = $stmt->fetchAll();

for($i = 0; sizeof($bans) > $i; $i++){
	$bans[$i][4] = date($config['dateformat'],$bans[$i][4]/1000);
	if($bans[$i][5]==0){
		$bans[$i][5] = "Never";
	}else{
		$bans[$i][5] = date($config['dateformat'],$bans[$i][5]/1000);
	}
	echo "					<tr><td>".$bans[$i][1]."</td><td>".$bans[$i][2]."</td><td>".$bans[$i][0]."</td><td>".$bans[$i][3]."</td><td>".$bans[$i][4]."</td><td>".$bans[$i][5]."</td></tr>\n";
}
?>
			</table>
			<div class="gitcopy"><a href="https://github.com/ext4/MaxBansBanlist" target="_blank">-=MaxBans banlist by ext4=-</a></div>
		</div>
	</body>
</html>