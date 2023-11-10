<?php
$lesMouvements= $pdo->getLesMouvements();


if ($lesMouvements == []) {
    echo 'sowwy all our people has find death in crash oopsie uWu';
} else {
  
    include("vue/v_mouvement.php");
}