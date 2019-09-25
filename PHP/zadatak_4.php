<?php
//print_r($_FILES);
//print_r($_POST);
if($_FILES["fajl"]["type"] == "image/jpeg"){

    if ($_FILES["fajl"]["error"] > 0){
        echo "Error: " . $_FILES["fajl"]["error"] . "<br>";
    }else{
        echo "Upload: " . $_FILES["fajl"]["name"] . "<br>";
        echo "Tip: " . $_FILES["fajl"]["type"] . "<br>";
        echo "Velicina: " . ($_FILES["fajl"]["size"] / 1024) . " kB<br>";
        echo "Spremljeno u: " . $_FILES["fajl"]["tmp_name"];
    }
}else{
    echo "dopusten je samo upload slika tipa jpeg!";
}