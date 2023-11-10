<?php
$lesAvions = $pdo->getLesAvions();


if ($lesAvions == []) {
    echo 'sowwy all our plane has crash oopsie uWu';
} else {
  
    include("vue/v_avion.php");
}
