<?php

function sloane_sequence($n) {
    $result = array();
    for ($i = 1; $i <= $n; $i++) {
        $result[] = ((3 * $i * $i) - ($i)) / 2;
    }
    return implode("-", $result);
}

$input = 7;
echo sloane_sequence($input);

?>