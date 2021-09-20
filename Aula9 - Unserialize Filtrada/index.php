<?php

// Filtred unserialize();

class User
{
    public $name;
    public $email;

    public function __toString()
    {
        return "Nome: {$this->name}; Email: {$this->email}<br>";
    }
}


class Blog
{
    public $title;
    public $author;

    public function __toString()
    {
        return "Titulo: {$this->title}; Autor: {$this->author}";
    }
}


$user = new User;
$user->name = "Thomaz";
$user->email = "teste@teste.com";

$blog = new Blog;
$blog->title = "Novidades PHP 7";
$blog->author = "School of Net";

//Serializa Dados e salva no arquivo data.save
file_put_contents("data.save", serialize([$user, $blog]));


//Recupera conteudo serializado no arquivo data.save e desserializa TODOS os dados
echo '<b>Utilizando ["allowed_classes" => true]</b><br>';
$data = file_get_contents("data.save");
$data = unserialize($data, ["allowed_classes" => true]);

foreach($data as $object){
    echo $object;
}

//Recupera conteudo serializado no arquivo data.save e desserializa apenas os dados da classe User
echo '<br><br><b>Utilizando ["allowed_classes" => ["User"]]</b><br>';
$data = file_get_contents("data.save");
$data = unserialize($data, ["allowed_classes" => ["User"]]);

foreach($data as $object){
    if(is_object($object))
        echo $object;
}

//Recupera conteudo serializado no arquivo data.save e não desserializa nenhum dado
echo '<br><br><b>Utilizando ["allowed_classes" => false]</b><br>';
$data = file_get_contents("data.save");
$data = unserialize($data, ["allowed_classes" => false]);

foreach($data as $object){
    if(is_object($object) && gettype($object) == 'object')
        echo $object;
}

?>