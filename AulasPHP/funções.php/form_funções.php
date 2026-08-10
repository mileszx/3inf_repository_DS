<?php

function conversao($temp,$unidade_1,$unidade_2)
{
    if ($unidade_1 == $unidade_2) {
        echo "A temperatura é:";
    } elseif ($unidade_1 == "C" and $unidade_2 == "F") {
        $temp = ($temp * 8) + 32;
        echo "O resultado é:$temp";
    } elseif ($unidade_1 == "C" and $unidade_2 == "K") {
        $temp = $temp +273.15;
        echo "O resultado é:$temp";
    }
    elseif ($unidade_1 == "C" and $unidade_2 == "Re") {
        $temp = $temp *0.8;
        echo "O resultado é:$temp";
    }
    elseif ($unidade_1 == "F" and $unidade_2 == "C") {
        $temp = ($temp-32)*5/9;
        echo "O resultado é:$temp";
    }
    elseif ($unidade_1 == "F" and $unidade_2 == "K") {
        $temp = ($temp-32)*5/9+213.5;
        echo "O resultado é:$temp";
    }
    elseif ($unidade_1 == "F" and $unidade_2 == "Re") {
        $temp = ($temp-32)*4/9;
        echo "O resultado é:$temp";
    }
    elseif ($unidade_1 == "K" and $unidade_2 == "C") {
        $temp = $temp -273.15;
        echo "O resultado é:$temp";
    }
    elseif ($unidade_1 == "K" and $unidade_2 == "F") {
        $temp = ($temp -273.15)*1.8+32;
        echo "O resultado é:$temp";
    }
    elseif ($unidade_1 == "K" and $unidade_2 == "Re") {
        $temp = ($temp -273.15)*1.8;
        echo "O resultado é:$temp";
    }
    elseif ($unidade_1 == "Re" and $unidade_2 == "C") {
        $temp = $temp *1.25;
        echo "O resultado é:$temp";
    }
    elseif ($unidade_1 == "Re" and $unidade_2 == "F") {
        $temp = $temp *2.25+32;
        echo "O resultado é:$temp";
    }
    elseif ($unidade_1 == "Re" and $unidade_2 == "F") {
        $temp = ($temp *5/4)+273.15;
        echo "O resultado é:$temp";
    }
}
conversao(14,"C","K");
?>