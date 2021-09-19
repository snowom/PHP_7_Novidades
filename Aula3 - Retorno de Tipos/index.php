<?php

declare(strict_types = 1);


function returnHalfValueFloat(int $value): float
{
    return $value/2;
}

function returnHalfValueInt(int $value): int
{
    return intval($value/2);
}


// Chama função que retorna um int
echo returnHalfValueInt(5) . '<br>';

// Chama uma função que retorna um float
echo returnHalfValueFloat(5) . '<br>';

?>