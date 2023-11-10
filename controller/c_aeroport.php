<?php
$lesAeroports = $pdo->getLesAeroports();


if ($lesAeroports == []) {
    echo 'sowwy all our airport has burned oopsie uWu';
} else {
  
    include("vue/v_aeroport.php");
}