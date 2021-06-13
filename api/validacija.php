<?php

if(isset($_GET["btn"])){
    $lat1=$_GET["lat"];
    $lon1=$_GET["lon"];

    if($lon1<-180 || $lon1>180){
        echo "Greska!!!  Geografska duzina mora biti u rasponu od -180 do 180" . "<br>";
    }
    if($lat1<-90 || $lat1>90){
        echo "Greska!!!  Geografska sirina mora biti u rasponu od -90 do 90" . "<br>";
    }
    
    $stirng=file_get_contents('https://api.met.no/weatherapi/locationforecast/1.9/?lat='.$lat1.';lon='.$lon1);
    $xml=simplexml_load_string($stirng);


    if(is_numeric($lat1) && is_numeric($lon1)){

        $lat1=$xml->product->time->location["latitude"];
        $lon1=$xml->product->time->location["longitude"];

        $temp=$xml->product->time->location->temperature["value"];
        $ws=$xml->product->time->location->windSpeed["mps"];
        $pressure=$xml->product->time->location->pressure["value"];
        $lowClouds =$xml->product->time->location->lowClouds ["percent"];
        $mediumClouds =$xml->product->time->location->mediumClouds["percent"];
        $highClouds =$xml->product->time->location->highClouds ["percent"];

    
        
             
                echo "<p>" . "Temperatura:". " " . "<b>" . $temp . "</b>" . "</p>" . "<br>";
                echo "<p>" . "Brzina vjetra:". " " . "<b>" . $ws . "</b>" . "</p>" . "<br>";
                echo "<p>" . "Pritisak:". " " . "<b>" . $pressure . "</b>" . "</p>" . "<br>";
                echo "<p>" . "Niski oblaci:". " " . "<b>" . $lowClouds . "</b>" . "</p>" . "<br>";
                echo "<p>" . "Srednji oblaci:". " " . "<b>" . $mediumClouds . "</b>" . "</p>" . "<br>";
                echo "<p>" . "Visoki oblaci:". " " . "<b>" . $highClouds . "</b>" . "</p>" . "<br>";
            
        
        
        
        upis($lat1,$lon1,$temp,$ws,$pressure,$lowClouds,$mediumClouds,$highClouds);
    
    }
    else
    {
        echo "Greska!!!  I za geografsku duzinu i za geografsku sirinu morate unijeti brojeve";
    }
   
}

