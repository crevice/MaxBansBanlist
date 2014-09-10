<!DOCTYPE html>
<html dir="ltr" lang="ru">
	<head>
		<title>MaxBans Banlist: Example</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<style>body{font-family: 'Helvetica';} #container{width: 960px; margin: 0 auto;}</style>
	</head>
	<body>
		<div id="container">
			<h2>MAXBANS BANLIST</h2>
			<!--Bans table loading script, use it if you want to load bans.php on your webpages-->
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
				xmlhttp.open("GET","bans.php",true);
				xmlhttp.send();
			}
			loadMaxBansBanlist();
			</script>
			<div id="banlist-frame">
				<!--Banlist will be displayed in this place-->
			</div>
		</div>
	</body>
</html>