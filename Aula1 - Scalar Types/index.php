<?php

    class ClasseA
    {
        function receiveClasseB(ClasseB $b)
        {
            echo $b->printMsg('Olá') . '<br>';
        }
    }


    class ClasseB
    {
        function printMsg($message)
        {
            return $message;
        }
    }


    class ClasseC
    {
        function receiveArray(array $frutas)
        {
            return $frutas;
        }
    }


    class ClasseD
    {
        function receiveCallable(callable $callback)
        {
            return $callback;
        }
    }

    class ClasseE
    {
        function receiveFloat(float $value)
        {
            return $value;
        }

        function receiveInteger(int $value)
        {
            return $value;
        }

        function receiveString(String $value)
        {
            return $value;
        }

        function receiveBool(bool $value)
        {
            return $value;
        }
    }

    // EXEMPLO passando e recebendo um objeto como parâmetro
    $a = new ClasseA;
    $a->receiveClasseB(new ClasseB);


    // EXEMPLO passando e recebendo um array como parâmetro
    $c = new ClasseC;
    $frutas = $c->receiveArray(['maçã', 'banana', 'limão']);
    foreach($frutas as $fruta){
        echo "{$fruta} ";
    }
    echo '<br>';


    // EXEMPLO passando e recebendo um callable como parâmetro
    $d = new ClasseD;
    echo 'Exemplo Callable => ' . call_user_func(
        $d->receiveCallable(function(){
            return 5*5;
        })
    ) . '<br>';


    // EXEMPLO passando e recebendo um float como parâmetro
    $e = new ClasseE;
    echo "{$e->receiveFloat(4.9)} <br>";


    // EXEMPLO passando e recebendo um int como parâmetro
    $e = new ClasseE;
    echo "{$e->receiveInteger(4)} <br>";


    // EXEMPLO passando e recebendo um String como parâmetro
    $e = new ClasseE;
    echo "{$e->receiveString("Teste String")} <br>";

    
    // EXEMPLO passando e recebendo um Boolean como parâmetro
    $e = new ClasseE;
    echo "{$e->receiveBool(true)} <br>";
?>
