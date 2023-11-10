<?php

if (!isset($_REQUEST['uc']))
    $uc = 'accueil';
else
    $uc = $_REQUEST['uc'];

switch ($uc) {
    case 'accueil':
        include('vue/v_panel.php');

    case 'personel':
        include('controller/c_personel.php');
        break;

    case 'avion':
        include('controller/c_avion.php');
        break;

    case 'aeroport':
        include('controller/c_aeroport.php');
        break;

    case 'mouvement':
        include('controller/c_mouvement.php');
        break;
}
