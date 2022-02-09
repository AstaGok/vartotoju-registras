<?php

echo "<pre>";
print_r($_POST);
echo "</pre>";

$link=mysqli_connect("localhost","root","","nauja_duom");
$sql="INSERT INTO pirmi_duomenys VALUES('".$_POST["vardas"]."','".$_POST["pavarde"]."',"
        . "'".$_POST["email"]."','".$_POST["phone"]."')";
$sql1="INSERT INTO antri_duomenys VALUES('".$_POST["adresas"]."','".$_POST["lytis"]."',"
        . "'".$_POST["seimos_statusas"]."')";
mysqli_query($link, $sql);
mysqli_query($link, $sql1);

if (mysqli_errno($link)){
    echo mysqli_errno($link);
}