<?php

class Kocka{    
public $duljina;
public $visina;
public $sirina;
    
function Kocka($duljina, $visina, $sirina){
    $this->duljina = $duljina;
    $this->visina = $visina;
    $this->sirina = $sirina;
}
    
function ispisPodataka(){
    echo "duljina = ".$this->duljina."<br />"
        . "visina = ".$this->visina."<br />"
        . "sirina = ".$this->sirina."<br />";
}
}

function checkVolume($kocka1, $kocka2){
    $volume1 = $kocka1->duljina * $kocka1->visina * $kocka1->sirina;
    $volume2 = $kocka2->duljina * $kocka2->visina * $kocka2->sirina;
        
    if($volume1 > $volume2){
        echo "Kocka 1 ima veci volumen = ".$volume1;
    }else if($volume1 < $volume2){
        echo "Kocka 2 ima veci volumen = ".$volume2;
    }else{
        echo "Kocke imaju isti volumen";
    }
    }

$kocka1 = new Kocka(3, 2, 2);
$kocka2 = new Kocka(2, 2, 2);

echo "podaci kocke 1 <br />";
$kocka1->ispisPodataka();
echo "<br />";

echo "podaci kocke2 <br />";
$kocka2->ispisPodataka();
echo "<br />";
echo "<br />";


checkVolume($kocka1, $kocka2);

/*
Zadatak:
Potrebno je kreirati klasu Kocka koja će imati duljinu, visinu i širinu. Kocka mora imati i funkciju koja će
ispisati podatke o njoj (duljina, visina, sirina).
Potrebno je napisati i dodatnu funkciju koja će primiti dvije kocke, a vratiti onu koja ima veći obujam.
*/

?>
