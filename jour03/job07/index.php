<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
for ($i=1; isset($str[$i]); $i++){
    echo $str[$i];
}
$str[$i] = $str[0];
echo $str[0];