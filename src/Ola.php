<!DOCTYPE html>
<html>
<body>

<?php
echo "Olá Mundo!";

class Pessoa {
    public $name;

    function falar(){
        echo "$this->name falando...";
    }

    function __construct(){
    echo ("<span><strong>constructor rodou...</strong><-span><br>");   
    }

    function set_name($name) {
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
}

$huguinho = new Pessoa();
$zezinho = new Pessoa();
$luizinho = new Pessoa();

$huguinho->set_name("huguinho");
$huguinho->falar();
?>

</body>
</html>