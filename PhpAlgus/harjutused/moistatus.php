<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>.... Mõistatus</title>

</head>
<body>
<h1>Mõistatus</h1>
<?php
echo "<h3>Arva ära kaks arvu!</h3>";
$arv1=6;
$arv2=7;
//kahe arvude liitmine +
echo "Kui liidame kokku, vastus on ".($arv1+$arv2);
//jagamine
echo"<br>";
echo "Kui esimine arv jagame teise arvuga, siis vastus on ".($arv1/$arv2);
echo"<br>";
echo "Esimine arv ruudus on ".pow($arv1, 2);
echo"<br>";
//lahutamine
$arv3=13;
$arv4=7;
echo "Kui teisest arvust lahutada esimene,siis vastus on ".($arv3-$arv4);
echo"<br>";
//korrutis
echo "Kahe arvude korrutis = ";
echo"<br>";
echo "<a href='vastus.php'> Õiged vastused</a>";
echo"<br>";
echo "<h2>Arva ära EESTI LINNANIMI</h2>";
$nimi="Narva";
//teksti pikkus
echo "<br>LinnaNimi pikkus : ".strlen($nimi);
echo"<br>";
//esimene täht
echo "<br>LinnaNimi esimene täht -  ".substr($nimi, 0,1);
echo"<br>";
echo "See linn on - ";
$text = 'Narva';
$count = strlen($text)-1;
echo str_replace(array($text[0], $text[$count]), '*', $text);




?>
</body>
</html>

