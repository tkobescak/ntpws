<?php

$polje1 = array("prvi" => "jedan", "drugi" => "dva");
$polje2 = array();
foreach($polje1 as $p){
    $polje2[] = $p;
}
var_dump($polje2);

/*
1. Zadatak:
Potrebno je polje koje ima kljuceve i vrijednosti kopirati u drugo polje bez kljuceva (u kojem će se
nalaziti samo vrijednosti).
$polje1 = array(„prvi“ => „jedan“, „drugi“ => „dva“);
$polje2 = array();
// polje2 na kraju mora imati array(„jedan“, „dva“);
Pomoć:
Koristiti for‐each petlju za $polje1.
*/

?>
