<?php

//Lançando uma exceção personalizada
function somaValor($a, $b)
{
    if($a < 0)
        throw new Exception("O primeiro valor não pode ser menor do que 0");
    return $a + $b;
}

echo '<b>Lançando uma exceção personalizada</b><br><br>';
try{
    echo somaValor(-1,2);
}catch(Exception $e){
    echo '<b>Usando getMessage()</b><br>';
    echo "{$e->getMessage()}";

    echo '<br><br><b>Usando getCode()</b><br>';
    echo "{$e->getCode()}";

    echo '<br><br><b>Usando getFile()</b><br>';
    echo "{$e->getFile()}";

    echo '<br><br><b>Usando getTrace()</b><br>';
    print_r($e->getTrace());

    echo '<br><br><b>Usando getTraceAsString()</b><br>';
    echo "{$e->getTraceAsString()}";
}

?>