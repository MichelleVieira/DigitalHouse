<?php

// echo '<pre>';
// var_dump($_POST);
//  var_dump($_FILES);

// sleep(3);

$foto = $_FILES['foto'];
$tmp_name = $foto['tmp_name'];

$tipos = [
    'image/jpeg',
    'image/png',
    'image/gif',
    'image/jpg'
];


// Validação dos tipos que aceitamos de imagem

if(in_array($foto['type'], $tipos) === false){
   
// Redirecionamento para o site upload.php
   header('Location: upload.php'); 
   exit;
}


// guardar arquivo ( fazer o arquivo criar a pasta )

//Craindo a pasta
if (is_dir('fotos') === false){
    mkdir('fotos', 0744);
}
if (move_uploaded_file($tmp_name,'fotos/' . $foto['name'])) {
    echo 'Arquivo carregado com sucesso';
}



?>