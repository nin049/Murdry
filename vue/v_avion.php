<?php
foreach ($lesAvions as $unAvion){
    $matricule = $unAvion['matricule'];
    $numSerie = $unAvion['numSerie'];
    $codeInterne = $unAvion['codeInterne'];
    $idModele = $unAvion['idModele'];
    $libelle = $unAvion['libelle'];
    $nbrSiegeMax = $unAvion['nbrSiegesMax'];
    ?>
    <ul>
        <li><?= $matricule?></li>
        <li><?= $numSerie?></li>
        <li><?= $codeInterne?></li>
        <li><?= $idModele?></li>
        <li><?= $libelle?></li>
        <li><?= $nbrSiegeMax?></li>
    </ul>

    <?php
}

?>