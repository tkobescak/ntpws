<?php
if($_FILES["dokument"]["type"] == "image/jpeg"){

if ($_FILES["dokument"]["error"] > 0) 
{
    echo "Error: " . $_FILES["dokument"]["error"] . "<br>";
}

else
{
    echo "Upload: " . $_FILES["dokument"]["name"] . "<br>";
    echo "Tip: " . $_FILES["dokument"]["type"] . "<br>";
    echo "Velicina: " . ($_FILES["dokument"]["size"] / 1024) . " kB<br>";
    echo "Spremiti u: " . $_FILES["dokument"]["tmp_name"];
} }

else{
    echo "Samo je omogucen upload slika *.jpeg";
}
?>
