<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    
    //Met en gras les mots contenant une majuscule
    function gras($str)
    {
        $result = "";
        $currentWord = "";
        $wordStartsWithUpper = false;

        for ($i = 0; isset($str[$i + 1]) || isset($str[$i]); $i++) {
            // Si on arrive à un espace ou si c'est le dernier caractère
            if ($str[$i] == " " || !isset($str[$i + 1])) {
                // Ajouter le dernier caractère s'il n'est pas un espace
                if ($str[$i] != " ") {
                    $currentWord .= $str[$i];
                }

                // Traiter le mot courant
                if ($currentWord != "") {
                    if ($wordStartsWithUpper) {
                        $result .= "<b>" . $currentWord . "</b>";
                    } else {
                        $result .= $currentWord;
                    }
                }

                // Ajouter l'espace si ce n'est pas le dernier caractère
                if ($str[$i] == " ") {
                    $result .= " ";
                }

                // Réinitialiser pour le prochain mot
                $currentWord = "";
                $wordStartsWithUpper = false;
            } else {
                // Si c'est le premier caractère du mot, vérifier s'il est en majuscule
                if ($currentWord == "") {
                    if ($str[$i] == "A" || $str[$i] == "B" || $str[$i] == "C" || $str[$i] == "D" || $str[$i] == "E" || $str[$i] == "F" || $str[$i] == "G" || $str[$i] == "H" || $str[$i] == "I" || $str[$i] == "J" || $str[$i] == "K" || $str[$i] == "L" || $str[$i] == "M" || $str[$i] == "N" || $str[$i] == "O" || $str[$i] == "P" || $str[$i] == "Q" || $str[$i] == "R" || $str[$i] == "S" || $str[$i] == "T" || $str[$i] == "U" || $str[$i] == "V" || $str[$i] == "W" || $str[$i] == "X" || $str[$i] == "Y" || $str[$i] == "Z") {
                        $wordStartsWithUpper = true;
                    }
                }

                // Ajouter le caractère au mot courant
                $currentWord .= $str[$i];
            }
        }

        return $result;
    }

    // Incrémente une chaîne de caractères pour pouvoir faire le décalage de César (pb : ne gère pas les espaces et les caractères spéciaux)
    function incrementString($str, $increment = 1)
    {
        for ($j = 0; $j < $increment; $j++) {

            $str++;
        }
        return $str;
    }
    //Décalage
    function cesar($str, $decalage)
    {
        $result = "";
        for ($i = 0; isset($str[$i]); $i++) {
            $result .= incrementString($str[$i], $decalage);
        }
        return $result;
    }

    function plateforme($str) {}
    ?>
</head>

<body>
    <form action="index.php" method="get">
        <label for="str">String:</label>
        <input type="text" name="str" id="str">
        <select name="fonction" id="fonction">
            <option value="1">Gras</option>
            <option value="2">Cesar</option>
            <option value="3">Plateforme</option>
            <input type="submit" value="submit">
        </select>
    </form>
    <?php
    if (isset($_GET['str']) && isset($_GET['fonction'])) {
        $str = $_GET['str'];
        $fonction = $_GET['fonction'];
        switch ($fonction) {
            case 1:
                echo gras($str);
                break;
            case 2:
                echo cesar($str, 3);
                break;
                // case 3:
                //     echo plateforme($str);
                //     break;
                // default:
                //     echo "Fonction non reconnue.";
        }
    }
    ?>
</body>

</html>