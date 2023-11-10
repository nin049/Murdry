<?php
$lePersonnels = $pdo->getLePersonnels();


if ($lePersonnels == []) {
    echo 'sowwy all our people has find death in crash oopsie uWu';
} else {
  
    include("vue/v_personel.php");
}