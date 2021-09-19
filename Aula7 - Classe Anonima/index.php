<?php

interface Logger
{
    public function log(string $msg);
}


class App
{
    private $logger;

    public function getLogger():Logger
    {
        return $this->logger;
    }

    public function setLogger(Logger $logger)
    {
        $this->logger = $logger;
    }
}


class Logg implements Logger
{
    public function log(string $msg)
    {
        echo $msg;
    }
}


// SEM Classe Anonima;
$app = new App;
$app->setLogger(new Logg);
var_dump($app->getLogger());


//COM Classe Anonima
$app = new App;
$app->setLogger(new class implements Logger{

    public function log(string $msg)
    {
        echo $msg;
    }
    
});
var_dump($app->getLogger());

?>