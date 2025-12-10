<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="docs/style.css" />
<title>
	Les Cantates 
	<?php if ($_GET['page'] != NULL AND $_GET['page'] != "accueil" ) { echo " - ", $_GET['page']; } ?>
</title>

<style type="text/css">
img { vertical-align:middle; border:0px }
</style>
</head>
<body>
<div id="Layer1" style="width: 785px; margin-left: auto; margin-right: auto;">
<?php

if($_GET['page'] != NULL AND $_GET['page']!= "accueil" )
{
echo <<<EOF
<div align="right"><a href="index.php?page=suite"><img src="../Images/Logo_Lescantates_Lucida_large.gif" alt="logo"></a></div>
<br />
<div class="cellulemenu"><a href="index.php?page=nextcantate">La prochaine cantate&nbsp;</a> 
<a href="index.php?page=integrale27#Janvier">Les cantates en cours&nbsp;</a>
<a href="index.php?page=accueilorgue">Le nouvel orgue&nbsp;</a>
<a href="index.php?page=contacts">Contact|Liens&nbsp;</a>
</div>
EOF;
}
?>
