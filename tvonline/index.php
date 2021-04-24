<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TELE LUZ Canal 21 -  Video Streaming</title>
<style type="text/css">
<!--
.Estilo1 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<p align="center" class="Estilo1">TeleLuz Canal 21</p>
<table id="reproductortv" width="570" height="431" border="0" cellpadding="0" cellspacing="0" align="center">
<tr>
<td colspan="3">
<img src="images/reproductor_01.jpg" width="570" height="35">
</td>
</tr>
<tr>
<td>
<img src="images/reproductor_02.jpg" width="35" height="375">
</td>
<td>
<!-- copie desde aqui para insertar reproductor en su sitio web -->
<script src="swfobject.js" type="text/javascript"></script>
<?
include("settings.php");
$stream=$_GET['n'];
?><object id="player" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" name="player" width="501" height="375">
<param name="movie" value="player.swf" />
<param name="allowfullscreen" value="true" />
<param name="allowscriptaccess" value="always" />
<param name="flashvars" value="file=teleluz.flv&streamer=<?=urlencode($rtmp_server)?>&autostart=true" />
<object type="application/x-shockwave-flash" data="player.swf" width="501" height="375">
<param name="movie" value="player.swf" />
<param name="allowfullscreen" value="true" />
<param name="allowscriptaccess" value="always" />
<param name="flashvars" value="file=teleluz.flv&streamer=<?=urlencode($rtmp_server)?>&autostart=true&controlbar=over" />
</object></object>
<!-- copie hasta aqui para insertar reproductor en su sitio web -->
</td>
<td>
<img src="images/reproductor_04.jpg" width="34" height="375"></td>
</tr>
<tr>
<td colspan="3">
<img src="images/reproductor_05.jpg" width="570" height="115" alt="Powered by grservicesonline.com"></td>
</tr>
</table>
</body>
</html>
