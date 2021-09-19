<?php

//Spaceship com Int
echo '<b>Spaceship com Int</b><br><br>';

echo 'Spaceship 0 <=> 1 = '; //-1
echo 0<=>1;

echo "<br>Spaceship 1 <=> 1 = "; //0
echo 1<=>1;

echo "<br>Spaceship 2 <=> 1 = "; //1
echo 2<=>1;


//Spaceship com Float
echo '<br><br><br><b>Spaceship com Float</b><br><br>';

echo 'Spaceship 0.7 <=> 1.8 = '; //-1
echo 0.7 <=> 1.8;

echo "<br>Spaceship 1.8 <=> 1.8 = "; //0
echo 1.8 <=> 1.8;

echo "<br>Spaceship 2.0 <=> 1.8 = "; //1
echo 2.0 <=> 1.8;


//Spaceship com Array
echo '<br><br><br><b>Spaceship com Array</b><br><br>';

echo 'Spaceship [5, 6, 7] <=> [1, 2, 3, 4] = '; //-1
echo [5, 6, 7] <=> [1, 2, 3, 4];

echo '<br>Spaceship [5, 6, 7, 8] <=> [1, 2, 3, 4] = '; //1
echo [5, 6, 7, 8] <=> [1, 2, 3, 4];

echo '<br>Spaceship [1, 2, 3, 4] <=> [1, 2, 3, 4] = '; //0
echo [1, 2, 3, 4] <=> [1, 2, 3, 4];


//Utilização na prática

echo '<br><br><br><b>Comparação entre 2 numeros</b><br><br>';

function retornaMaiorSpaceship(int $a, int $b):int
{
    return $a<=>$b;
}

function retornaMaior(int $a, int $b):int
{
    return ($a<$b) ? -1 : (($a>$b) ? 1 : 0); 
}

echo 'Usando Spaceship = ' . retornaMaiorSpaceship(2,3) . '<br>';
echo 'Sem Spaceship = ' . retornaMaior(2,3) . '<br>';
?>