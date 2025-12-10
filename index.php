<?php
$pages = array('accueil' => 'docs/accueil.php',
			   'suite' => 'docs/suite.php',
			   'inscription_presence' => 'docs/inscription_presence.php',
			   'nextcantate' => 'docs/nextcantate.php',
			   'integrale' => 'docs/integrale.php',
			   'liens' => 'docs/liens.php',
			   'accueilorgue' => 'docs/accueilorgue.php',
			   'contact'=> 'docs/contact.php',
			   'orgue1'=> 'docs/orgue1.php',
			   'orgue2'=> 'docs/orgue2.php',
			   'orgue3'=> 'docs/orgue3.php',
			   'orgue4'=> 'docs/orgue4.php',
			   'orgue5'=> 'docs/orgue5.php',
			   'contacts'=> 'docs/contacts.php',
			   'liens'=> 'docs/liens.php',
			   'plan'=> 'docs/plan.php',
			   'calendrier'=> 'docs/calendrier.php',
			   'integrale1'=> 'docs/integrale1.php',
			   'integrale2'=> 'docs/integrale2.php',
			   'integrale3'=> 'docs/integrale3.php',
			   'integrale4'=> 'docs/integrale4.php',
			   'integrale5'=> 'docs/integrale5.php',
			   'integrale6'=> 'docs/integrale6.php',
			   'integrale7'=> 'docs/integrale7.php',
			   'integrale8'=> 'docs/integrale8.php',
			   'integrale9'=> 'docs/integrale9.php',
			   'integrale10'=> 'docs/integrale10.php',
			   'integrale11'=> 'docs/integrale11.php',
			   'integrale12'=> 'docs/integrale12.php',
			   'integrale13'=> 'docs/integrale13.php',
			   'integrale14'=> 'docs/integrale14.php',
			   'integrale15'=> 'docs/integrale15.php',
			   'integrale16'=> 'docs/integrale16.php',
			   'integrale17'=> 'docs/integrale17.php',
			   'integrale18'=> 'docs/integrale18.php',
			   'integrale19'=> 'docs/integrale19.php',
			   'integrale20'=> 'docs/integrale20.php',
			   'integrale21'=> 'docs/integrale21.php',
			  'integrale22'=> 'docs/integrale22.php',
			  'integrale23'=> 'docs/integrale23.php',
			  'integrale24'=> 'docs/integrale24.php',
			  'integrale25'=> 'docs/integrale25.php',
			  'integrale26'=> 'docs/integrale26.php',
			  'integrale27'=> 'docs/integrale27.php',
			);
			
if($_GET['page'] != NULL) $page = htmlentities($_GET['page'], ENT_QUOTES);
else $page = "accueil";

$page_include = (array_key_exists($page, $pages) ) ? $pages[$page] : $pages['accueil'];

include("docs/header.php");
include($page_include);
include("docs/footer.php");
?>













