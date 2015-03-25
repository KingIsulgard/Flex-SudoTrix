<?php
	// Copyright 2007 Facebook Corp. All Rights Reserved. 

	require_once "facebook-platform/php/facebook.php";
	$appapikey = "7fa1c3dd29d3ea578b3e7c425b8ccbe9";
	$appsecret = "f87a2926d232f56bfa33185e84d0e1f2";
	$facebook = new Facebook($appapikey, $appsecret);
	$user_id = $facebook->require_login();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">

	<!-- 
	Smart developers always View Source. 
	
	This application was built using Adobe Flex, an open source framework
	for building rich Internet applications that get delivered via the
	Flash Player or to desktops via Adobe AIR. 
	
	SudoTrix has been developed by Gilles Lesire
	// -->

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
		<link rel="stylesheet" type="text/css" href="history/history.css" />
	
		<title>SudoTrix Game</title>
		<style>
			body { margin: 0px; overflow:hidden }
		</style>
	</head>

	<body>
		<div style="border: 1px solid #DDDDDD; width: 701px; background-image: url(bar.png); padding: 6px; margin-bottom: 10px; overflow: auto;">
			<div style="float: left; text-align: left; width: 50%">
				<img src="logo.png" alt="SudoTrix Logo" style="width: 108px; height: 40px;" />
			</div>
			<div style="float: left; text-align: right; color: #CCCCCC; width: 50%; padding-top: 5px; font-size: 20px; font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold;">
				Classic innovation
			</div>
		</div>
		<div style="clear: both; overflow: auto;">
			<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
					id="SudoTrix" width="709px" height="567px" style="border: 1px solid #DDDDDD;"
					codebase="http://fpdownload.macromedia.com/get/flashplayer/current/swflash.cab">
					<param name="movie" value="SudoTrix.swf" />
					<param name="quality" value="high" />
					<param name="bgcolor" value="#869ca7" />
					<param name="allowScriptAccess" value="sameDomain" />
					<embed src="SudoTrix.swf" quality="high" bgcolor="#869ca7"
						width="709px" height="567px" name="SudoTrix" 
						play="true"
						style="border 1px solid #DDDDDD"
						loop="false"
						quality="high"
						allowScriptAccess="sameDomain"
						type="application/x-shockwave-flash"
						pluginspage="http://www.adobe.com/go/getflashplayer">
					</embed>
					<a href="http://www.adobe.com" title="Install player" target="_blank">
						<img src="./noflash.jpg" width="350px" height="150px" alt="No flash players installed">
					</a>
			</object>
		</div>
		<div style="clear: both; text-align: center; font-size: 8px;">
			Coded and designed by Gilles Lesire
		</div>
	</body>
</html>