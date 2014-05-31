<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
  <title>Karaokanime ! :: Les karaokés des génériques de vos animes préférés</title>
  <link rel="icon" type="image/gif" href="fav.gif">
<link rel="shortcut icon" href="fav.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="fr" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta name="DC.Language" scheme="RFC3066" content="fr" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen" title="Normal" />  
</head>
<body>
<div id="H-F"></div>
<div id="main">
<div id="last-animes">
<marquee scrollamount="2" behavior="alternate" scrolldelay="1">
	<a href="?karaoke=anime/genshiken2"><img src="images/animes/genshiken2.jpg"></a>
	<a href="?karaoke=anime/hitohira"><img src="images/animes/hitohira.jpg"></a>
	<a href="?karaoke=anime/kimikiss"><img src="images/animes/kimikiss-pure-rouge.jpg"></a>
	<a href="?karaoke=anime/kissxsis"><img src="images/animes/kissxsis.jpg"></a>
	<a href="?karaoke=anime/kodomo-no-jikan"><img src="images/animes/kodomo-no-jikan.jpg"></a>
	<a href="?karaoke=anime/kodomo-no-jikan-ni-gakki"><img src="images/animes/kodomo-no-jikan-ni-gakki.jpg"></a>
	<a href="?karaoke=anime/kodomo-no-jikan-oav"><img src="images/animes/kodomo-no-jikan-oav.jpg"></a>
	<a href="?karaoke=anime/kujibiki-unbalance2"><img src="images/animes/kujibiki-unbalance2.jpg"></a>
	<a href="?karaoke=anime/maria-holic"><img src="images/animes/maria-holic.jpg"></a>
	<a href="?karaoke=anime/mermaid-melody-pichi-pichi-pitch"><img src="images/animes/mermaid-melody-pichi-pichi-pitch.jpg"></a>
	<a href="?karaoke=anime/sketchbook-full-colors"><img src="images/animes/sketchbook-full-colors.jpg"></a>
	<a href="?karaoke=anime/toradora"><img src="images/animes/toradora.jpg"></a>
</marquee>
</div>
<div id="header">
<div id="menu">
<form><input type="text" name="search" value="" size="20" /> 
<input type="submit" name="search" value="Recherche" /></form>
<div style="float: right; margin-top:10px; margin-right: 10px;">
<a href="?karaoke=faq">FAQ</a><br />
<a href="?karaoke=contact">Contact</a><br />
<a href="?karaoke=proposer">Proposer un karaoké</a><br />
<a href="?karaoke=tutoriaux">Tutoriaux</a></div>
<div style="margin-top:10px;">
<a href="?karaoke=accueil">Accueil</a><br />
<a href="?karaoke=list">Liste des karaokés</a><br />
<a href="?karaoke=faq#faq18">Nous aider ?</a><br />
<a href="?karaoke=playlist">Ma Playlist</a>
</div>
</div>
<div id="logo"><a href="/"><img src="images/interface/logo.jpg" alt="Karaokanime"></a></div>
<div id="alphabet">
<a href="?karaoke=list/~">~</a> 
<a href="?karaoke=list/a">a</a> 
<a href="?karaoke=list/b">b</a> 
<a href="?karaoke=list/c">c</a> 
<a href="?karaoke=list/d">d</a> 
<a href="?karaoke=list/e">e</a> 
<a href="?karaoke=list/f">f</a> 
<a href="?karaoke=list/g">g</a> 
<a href="?karaoke=list/h">h</a> 
<a href="?karaoke=list/i">i</a> 
<a href="?karaoke=list/j">j</a> 
<a href="?karaoke=list/k">k</a> 
<a href="?karaoke=list/l">l</a> 
<a href="?karaoke=list/m">m</a> 
<a href="?karaoke=list/n">n</a> 
<a href="?karaoke=list/o">o</a> 
<a href="?karaoke=list/p">p</a> 
<a href="?karaoke=list/q">q</a> 
<a href="?karaoke=list/r">r</a> 
<a href="?karaoke=list/s">s</a> 
<a href="?karaoke=list/t">t</a> 
<a href="?karaoke=list/u">u</a> 
<a href="?karaoke=list/v">v</a> 
<a href="?karaoke=list/w">w</a> 
<a href="?karaoke=list/x">x</a> 
<a href="?karaoke=list/y">y</a> 
<a href="?karaoke=list/z">z</a>
</div>
<div class="pub"><img src="images/pub.jpg"></div>
</div>

<div id="page">

<?php if (isset($_GET['karaoke']))
{
$karaoke = $_GET['karaoke'];
}
else
{
$karaoke = "accueil";
}
if (file_exists("karaokes/$karaoke.php")) {
require("karaokes/$karaoke.php");
}
else {
require("karaokes/accueil.php");
}
?>

</div>




<div class="pub"><img src="images/pub.jpg"></div>
<div class="credits">Karaokanime est un site de la <a href="http://db0.fr" target="_blank">db0 company</a>. Par Ryocu et db0. Tout droits réservés.</div></div>
<div id="H-F"></div>
</body>
</html>