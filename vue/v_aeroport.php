<?php
foreach ($lesAeroports as $unAeroport){
    $codeOACI = $unAeroport['codeOACI'];
    $codeAITA = $unAeroport['codeAITA'];
    $nomAeroport = $unAeroport['nomAeroport'];
    $latitude = $unAeroport['latitude'];
    $longitude = $unAeroport['longitude'];
    
    ?>
    <ul>
        <li><?= $codeOACI?></li>
        <li><?= $codeAITA?></li>
        <li><?= $nomAeroport?></li>
        <li><?= $latitude?></li>
        <li><?= $longitude?></li>
    
    </ul>

    <?php
}

?>
