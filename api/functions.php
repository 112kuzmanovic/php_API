<?php

function upis($lat1,$lon1,$temp,$ws,$pressure,$lowClouds,$mediumClouds,$highClouds){
    $p=fopen("upis.txt","a+");
    $red="Vrijeme:" . date("H:i:s") . " " . "Geografska sirina je:" . $lat1. ";;" . "Geografska duzina je:" .$lon1.";;". "Temperatura:" . $temp . ";;" . "Pritisak:" . $pressure . ";;" . "Brzina vjetra:" . $ws . ";;" . "Niski oblaci:" . $lowClouds . ";;" . "Srednji oblaci" . $mediumClouds . ";;" . "Visoki oblaci" . $highClouds . "\r\n";
    fwrite($p,$red);
    fclose($p);


}

?>