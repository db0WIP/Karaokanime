<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
  <title>Zéro ~fansub~ :: Le Site Officiel v3.1</title>
  <link rel="icon" type="image/gif" href="fav.gif">
<link rel="shortcut icon" href="fav.ico">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-Language" content="fr" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta name="DC.Language" scheme="RFC3066" content="fr" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen" title="Normal" />  
<script type="text/javascript" language="Javascript">
function show(nom_champ)
{
if(document.getElementById)
{
tabler = document.getElementById(nom_champ);
if(tabler.style.display=="none")
{
tabler.style.display="";
}
else
{
tabler.style.display="none";
}
}
}
</script>
<SCRIPT LANGUAGE="JavaScript">
var nbimage= 150;
var width;
var height;
var url;
var alte;
function banniere()
{
numimage= Math.round(Math.random()*(nbimage-1)+1);
if (numimage <= 10)
{
gotosite = "";
url = "images/hautmenu/konata.png";
alte = "Konata";
}
if (numimage > 10 && numimage <= 20)
{
gotosite = "index.php?page=series/kimikiss";
url = "images/hautmenu/futami.png";
alte = "Futami";
}
if (numimage > 20 && numimage <= 30)
{
gotosite = "index.php?page=series/hitohira";
url = "images/hautmenu/mugi.png";
alte = "Mugi";
}
if (numimage > 30 && numimage <= 40)
{
gotosite = "http://www.kojikan.fr/";
url = "images/hautmenu/rin.png";
alte = "Rin";
}
if (numimage > 40 && numimage <= 50)
{
gotosite = "index.php?page=series/toradora";
url = "images/hautmenu/taiga.png";
alte = "Taiga";
}
if (numimage > 50 && numimage <= 60)
{
gotosite = "index.php?page=series/genshiken";
url = "images/hautmenu/ohno.png";
alte = "Ohno";
}
if (numimage > 60 && numimage <= 70)
{
gotosite = "index.php?page=series/sketchbook";
url = "images/hautmenu/sora.png";
alte = "Sora";
}
if (numimage > 70 && numimage <= 80)
{
gotosite = "index.php?page=series/kujibiki";
url = "images/hautmenu/kujian.png";
alte = "Tokino-présidente";
}
if (numimage > 80 && numimage <= 90)
{
gotosite = "index.php?page=series/mermaid";
url = "images/hautmenu/lucia.png";
alte = "Lucia";
}
if (numimage > 90 && numimage <= 100)
{
gotosite = "index.php?page=series/kodomoo";
url = "images/hautmenu/rin2.png";
alte = "Rin";
}
if (numimage > 100 && numimage <= 110)
{
gotosite = "index.php?page=series/kissxsis";
url = "images/hautmenu/ako.png";
alte = "Kiss X Sis";
}
if (numimage > 110 && numimage <= 120)
{
gotosite = "http://www.kojikan.fr/";
url = "images/hautmenu/rin.png";
alte = "Rin";
}
if (numimage > 120 && numimage <= 130)
{
gotosite = "http://www.kojikan.fr/";
url = "images/hautmenu/rin.png";
alte = "Rin";
}
if (numimage > 130 && numimage <= 140)
{
gotosite = "";
url = "images/hautmenu/pika.png";
alte = "Pikachu";
}
if (numimage > 140 )
{
gotosite = "index.php?page=series/mariaholic";
url = "images/hautmenu/mariya.png";
alte = "Maria Holic";
}
if(gotosite != "")
	{
	document.write ('<A HREF="' + gotosite + '">');	
	}
document.write('<IMG SRC="' + url + '" ALT="' + alte + '" BORDER=0>')
if(gotosite != "")
	{
	document.write('</A>')
	}
}
</SCRIPT>

</head>


<body>
<div id="main">
<div id="header">
<div id="pageright">
	<div id="partenaires">
	<div class="partenaires">
	<ul>
	<li>Dakkô</li>
	<li><a href="http://www.kanaii.com" target="_blank"><img src="images/partenaires/kanaii.png" border="0" alt="Kanaii" /></a></li>
	<li><a href="http://kyoutsu-subs.over-blog.com/" target="_blank"><img src="images/partenaires/kyoutsu.png" border="0" alt="Kyoutsu" /></a></li>
	<li><a href="http://www.sky-fansub.com/" target="_blank"><img src="images/partenaires/sky.png" border="0" alt="Sky-fansub" /></a></li>
</ul>
	
	</div>
		<div class="partenaires">
	<ul>
	<li>Tomodachi</li>
	<li><a href="http://www.stream-anime.org/" target="_blank"><img src="images/partenaires/stream.png" border="0" alt="Stream-Anime" /></a></li>
	<li><a href="http://www.maboroshinofansub.fr/" target="_blank"><img src="images/partenaires/mnf.png" border="0" alt="Maboroshinofansub" /></a></li>
</ul>
	
	</div>
		<div class="partenaires">
	<ul>
	<li>Partenaires</li>
	<li><a href="http://www.anime-ultime.net/part/Site-93" target="_blank"><img src="images/partenaires/anime-ultime.jpg" border="0" alt="Anime-ultime" /></a></li>
	<li><a href="http://www.ecchi-scan.com/" target="_blank"><img src="images/partenaires/ecchi.png" border="0" alt="Ecchi Scantrad" /></a></li>
	<li><a href="http://animekami.com/" target="_blank"><img src="images/partenaires/animekami.jpg" border="0" alt="Animekami" /></a></li>
	<li><a href="http://kirei-no-tsubasa.com/" target="_blank"><img src="images/partenaires/kirei.jpg" border="0" alt="Kirei-no-Tsubasa" /></a></li>
</ul>
	
	</div>
		<div class="partenaires">
	<ul>
	<li>Liens</li>
	<li><a href="http://animeka.com/fansub/teams/zero.html" target="_blank"><img src="images/partenaires/animeka.jpg" border="0" alt="Animeka" /></a></li>
	<li><a href="http://anime-no-seirei.com/fansub-detail.php?id_fansub=16&PHPSESSID=7d54275e8c4866ecdb328d361b9f6a04" target="_blank"><img src="images/partenaires/anime-no-seirei.jpg" border="0" alt="Anime-no-seirei" /></a></li>
	<li><a href="http://mangazaki.over-blog.com/" target="_blank"><img src="images/partenaires/mangazaki.jpg" border="0" alt="Mangazaki" /></a></li>
</ul>
	
	</div>
		<div class="partenaires">
	<ul>
	<li><a href="index.php?page=partenariat">Devenir partenaires</a></li>
</ul>
	
	</div>
	</div>
	
</div>
<div id="pageleft">

<div id="menu">
<div id="menutop"><SCRIPT language="JavaScript">banniere();</SCRIPT></div>
		<div class="menu">
	<ul>
		<li><a href="index.php">Accueil</a></li>
		<li><a href="irc://irc.Fansub-IRC.eu/zero" target="_blank">IRC</a></li>	
		<li><a href="http://zero.xooit.fr" target="_blank">Forum</a></li>
		<li><a href="http://zerofansub.feedxs.com/zero.rss" target="_blank">RSS</a></li>
		<li><a href="#" onclick="window.open('radio','radio','toolbar=0, location=0, directories=0, status=0, scrollbars=0, resizable=0, copyhistory=0, menuBar=0, width=280, height=380, left=200, top=200');return(false)">Radio</a></li>
		<li><a href="index.php?page=contact">Contact</a></li>
		<li><a href="index.php?page=dons">Dons</a></li>
		<li><a href="index.php?page=about">À propos...</a></li>
</ul>
	</div>
		<div class="menu">
	<ul>
		<li><a href="index.php?page=team">La team</a></li>
		<li><a href="index.php?page=recrutement">Recrutement</a></li>
		<li><a href="index.php?page=avancement">Avancement</a></li>
		<li><a href="index.php?page=series" style="font-size: 1.5em;">Projets</a></li>
		<li><a href="index.php?page=dl">Télécharger</a></li>
		<li><a href="http://bt.fansub-irc.eu/tracker_team/index.php?id_tracker=26" target="_blank">Torrent</a></li>
		<li><a href="index.php?page=xdcc">XDCC</a></li>
		<li><a href="index.php?page=kanaiiddl">Kanaii DDL</a></li>
</ul>
	</div>
		<div class="menu">
	<ul>
		<li><a href="galerie/index.php?spgmGal=Zero_fansub/Images" target="_blank">Images</a></li>
		<li><a href="galerie/index.php?spgmGal=Zero_fansub/Wallpaper" target="_blank">Wallpaper</a></li>
		<li><a href="index.php?page=series">OST</a></li>
		<li><a href="index.php?page=avert">Hentaï</a></li>
</ul>
	</div>
<script type="text/javascript"><!--
google_ad_client = "pub-1841682561759438";
/* zero menu bis */
google_ad_slot = "2907189565";
google_ad_width = 125;
google_ad_height = 125;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>	
	
	
</div>
	<div id="page">
	<div id="sortie"><?php if (isset($_GET['sorties']))
{
$page = $_GET['sorties'];
}
else
{
$page = "sortie";
}
if (file_exists("sorties/$sortie.php")) {
require("sorties/$sortie.php");
}
else {
require("sorties/sortie.php");
}
?></div>
	<div id="contenu">
	<div class="p"><script type="text/javascript"><!--
google_ad_client = "pub-1841682561759438";
/* zero up */
google_ad_slot = "2056545747";
google_ad_width = 468;
google_ad_height = 60;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
<?php if (isset($_GET['page']))
{
$page = $_GET['page'];
}
else
{
$page = "home";
}
if (file_exists("pages/$page.php")) {
require("pages/$page.php");
}
else {
require("pages/home.php");
}
?>
	</div>
	</div>


</div><div class="p">
<script type="text/javascript"><!--
google_ad_client = "pub-1841682561759438";
/* 728x90, date de création 31/07/08 */
google_ad_slot = "2046291153";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
</div>
<div id="footer"></div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>


<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-4691079-6");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>