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
        // Initialisation des variables
        $result = "";
        $currentWord = "";
        $wordStartsWithUpper = false;
        // Parcourir chaque caractère de la chaîne
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
        // Retourner le résultat final
        return $result;
    }

    // Incrémente une chaîne de caractères pour pouvoir faire le décalage de César (pb ne gère pasles caractères spéciaux)
    function incrementString($str, $increment = 1)
    {
        // Incrémente la chaîne de caractères $increment fois
        for ($j = 0; $j < $increment; $j++) {

            $str++;
        }
        return $str;
    }
    //Décalage
    function cesar($str, $decalage)
    {
        // Parcourt chaque caractère de la chaîne
        $result = "";
        for ($i = 0; isset($str[$i]); $i++) {
            // Vérifie si le caractère est un espace
            if ($str[$i] == " ") {
                $result .= " ";
            } else {
                // Applique le décalage en utilisant la fonction incrementString
                $result .= incrementString($str[$i], $decalage);
            }
        }
        // Retourne le résultat final
        return $result;
    }

    function plateforme($str)
    {
        // Initialisation des variables
        $phrase = "";
        $i = 0;
        // Parcourt chaque caractère de la chaîne
        while (isset($str[$i]) || isset($str[$i + 1])) {
            // Vérifie si le caractère actuel et les deux précédents forment "me" suivi d'un espace ou si c'est la fin de la chaîne
            if ($str[$i] == " " && $str[$i - 1] == "e" && $str[$i - 2] == "m") {
                $phrase .= "_ ";
                // Gère le cas où "me" est à la fin de la chaîne sans espace après
            } elseif (!isset($str[$i + 1]) && $str[$i] == "e" && $str[$i - 1] == "m") {
                $phrase .= $str[$i];
                $phrase .= "_ ";
                // Ajoute le caractère actuel à la phrase sinon
            } else {
                $phrase .= $str[$i];
            }
            $i++;
        }
        // Retourne la phrase modifiée
        return $phrase;
    }

    ?>
</head>

<body>
    // Formulaire pour saisir la chaîne et choisir la fonction
    <form action="index.php" method="get">
        <label for="str">String:</label>
        <input type="text" name="str">
        <select name="fonction">
            <option value="1">Gras</option>
            <option value="2">Cesar</option>
            <option value="3">Plateforme</option>
            <input type="submit" value="submit">
        </select>
    </form>
    <?php
    // Vérifie si les paramètres sont définis et appelle la fonction appropriée
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
            case 3:
                echo plateforme($str);
                break;
            default:
                echo "Fonction non reconnue.";
        }
    }
    ?>
</body>

</html>