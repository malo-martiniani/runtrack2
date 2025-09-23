<?php
function leetSpeak($str) {
    for ($i = 0; isset($str[$i]); $i++) {
        switch ($str[$i]) {
            case 'a':
            case 'A':
                $str[$i] = '4';
                break;
            case 'e':
            case 'E':
                $str[$i] = '3';
                break;
            case 'i':
            case 'I':
                $str[$i] = '1';
                break;
            case 'o':
            case 'O':
                $str[$i] = '0';
                break;
            case 's':
            case 'S':
                $str[$i] = '5';
                break;
        }
    }
    return $str;
}
echo leetSpeak("ba be bi bo bu sa se si so su");

