<?php

//Closure::call()

class ClasseA
{
    private $x = 1;
}

//código feito SEM closure call()
echo "<b>Sem Closure Call</b><br>";

$getABC = function(){
    return $this->x;
};

$getX = $getABC->bindTo(new ClasseA, "ClasseA");
echo $getX() . '<br><br>';


// Mesmo código feito COM closure call()
echo "<b>Com Closure Call</b><br>";

$getX2 = function(){
    return $this->x;
};

echo $getX2->call(new ClasseA);

?>