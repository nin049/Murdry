<?php

foreach ($lePersonnels as $unePersonne){
    $idPersonnel = $unePersonne['idPersonnel'];
    $nom = $unePersonne['nom'];
    $prenom = $unePersonne['prenom'];
    $numTel = $unePersonne['numTel'];
    ?>
    <ul>
        <li><?= $idPersonnel?></li>
        <li><?= $nom?></li>
        <li><?= $prenom?></li>
        <li><?= $numTel?></li>
    </ul>

    <?php
}

?>