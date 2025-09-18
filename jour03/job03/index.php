<?php
$str = "I'm sorry Dave I'm afraid I can't do that";
for ($i=0; isset($str[$i]); $i++){
    if ($str[$i] != 'a' && $str[$i] != 'e' && $str[$i] != 'i' && $str[$i] != 'o' && $str[$i] != 'u' && $str[$i] != 'y' &&
        $str[$i] != 'A' && $str[$i] != 'E' && $str[$i] != 'I' && $str[$i] != 'O' && $str[$i] != 'U' && $str[$i] != 'Y'){
        echo "";
    } else {
        echo $str[$i];
    }
}