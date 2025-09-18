<?php
$str = "On n'est pas le meilleur quand on le croit mais quand on le sait";

$dic = array("consonnes" => 0, "voyelles" => 0);
for ($i = 0; isset($str[$i]); $i++) {
    if ($str[$i] != 'a' && $str[$i] != 'e' && $str[$i] != 'i' && $str[$i] != 'o' && $str[$i] != 'u' && $str[$i] != 'y' &&
        $str[$i] != 'A' && $str[$i] != 'E' && $str[$i] != 'I' && $str[$i] != 'O' && $str[$i] != 'U' && $str[$i] != 'Y' && $str[$i] != ' ' && $str[$i] != ',' && $str[$i] != '.' && $str[$i] != "'") {
        $dic["consonnes"]++;
    } elseif ($str[$i] != ' ' && $str[$i] != ',' && $str[$i] != '.' && $str[$i] != "'") {
        $dic["voyelles"]++;
    }
}
echo "Nombre de consonnes : " . $dic["consonnes"] . "<br>";
echo "Nombre de voyelles : " . $dic["voyelles"];