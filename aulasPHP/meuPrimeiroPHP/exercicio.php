<?php


$pessoa = [
"nome" => "Jon", 
"sobrenome" => "Snow",
 "idade" => 27
 ,"passatempos" => ["Netflix","Futebol", "Música"]
];

echo"<pre>";



$pessoa["idade"] = 25;
$pessoa["endereco"] = "Winterfell";




$pessoa["passatempos"][] = ["Comer"];

var_dump($pessoa);