<?php

define('ANIMALS', [
    'gato',
    'rato',
    'coelho'
]);

echo '<b>Print constante Array usando define</b><br><br>';
foreach(ANIMALS as $animal){
    echo "{$animal}<br>";
}


const CORES = [
    'azul',
    'amarelo',
    'roxo'
];

echo '<br><br><b>Print constante Array usando const</b><br><br>';
foreach(CORES as $cor){
    echo "{$cor}<br>";
}

?>