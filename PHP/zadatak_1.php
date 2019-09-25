<?php

$polje1 = array("prvi" => "jedan", "drugi" => "dva");
$polje2 = array();
// polje2 na kraju mora imati array(„jedan“, „dva“);

foreach($polje1 as $p){
    $polje2[] = $p;
}

var_dump($polje2);