<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

// $n: the number of temperatures to analyse
fscanf(STDIN, "%d", $n);
$inputs = explode(" ", fgets(STDIN));
for ($i = 0; $i < $n; $i++)
{
    $t = intval($inputs[$i]); // a temperature expressed as an integer ranging from -273 to 5526
}

function plusProcheDeZero($inputs) {
    
    if (empty($inputs)) {
        return 0;
    }

    $plusProche = $inputs[0];

    foreach ($inputs as $valeur) {
        $differenceActuelle = abs($valeur);
        $differencePlusProche = abs($plusProche);
        if ($differenceActuelle < $differencePlusProche || ($differenceActuelle == $differencePlusProche && $valeur > 0)) {
            $plusProche = $valeur;
        }
    }

    return $plusProche;
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

error_log(var_export($inputs, true));

$result = plusProcheDeZero($inputs);

echo($result);
?>
