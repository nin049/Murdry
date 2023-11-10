<?php
foreach ($lesMouvements as $unMouvement){
    $numMouvement = $unMouvement['numMouvement'];
    $numVol = $unMouvement['numVol'];
    $nbrPassagers = $unMouvement['nbrPassagers'];
    $dateDepart = $unMouvement['dateDepart'];
    $dateArrivee = $unMouvement['dateArrivee'];
    $distance = $unMouvement['distance'];
    $matricule = $unMouvement['matricule'];
    $aeroportDepart = $unMouvement['aeroportDepart'];
    $aeroportArrivee = $unMouvement['aeroportArrivee'];
    ?>
    <ul>
        <li><?= $numMouvement?></li>
        <li><?= $numVol?></li>
        <li><?= $nbrPassagers?></li>
        <li><?= $dateDepart?></li>
        <li><?= $dateArrivee?></li>
        <li><?= $distance?></li>
        <li><?= $matricule?></li>
        <li><?= $aeroportDepart?></li>
        <li><?= $aeroportArrivee?></li>
    </ul>

    <?php
}

?>