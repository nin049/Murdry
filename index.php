<?php
// création d'une session
session_start();
// inclusion en une seule fois du fichier des fonctions et du modèle
// require_once("model/fonctions.inc.php");
require_once("model/class.pdo.mudry.inc.php");
// // inclusion des vues
// include("vues/v_entete.php") ;
// include("vues/v_bandeau.php") ;

if(!isset($_REQUEST['login']))
     $co = False;
else
	$co = True;


$co = True;
switch($co)
{
	case False:
		{include("controller/c_connexion.php");break;}
	case True :
		{include("controller/c_panel.php");break;}
}
//include("vues/v_pied.php") ;
?>