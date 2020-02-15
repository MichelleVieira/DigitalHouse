<?php
//if ($_SERVER['REQUEST_METHOD'] === 'POST'){
 //   echo 'Mandou POST';
//}
$nome = '';
$email = '';
$mensagem = '';
$erro = '';
if (count($_POST)){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    //Validação se vazio
    if (empty($nome)){
            $erro = 'O campo nome deve ser preenchido';
    } 
    if (empty($email)){
        $erro .= '<br>O campo email deve ser preenchido';
    } 

    
    if (empty($erro)){
        $mensagem= "Olá $nome você será notificado(a) no email $email em breve !";
    }   
}
?>
    
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário Backend</title>
</head>
<body>
    <form method="POST" action="formularioback.php" novalidate>
        <div>
            <label for="nome">Nome: </label>
            <input type="text" value="<?=$nome?>" name="nome"> 
        </div>
        <br>
        <div>
            <label for="email">Email: </label>
            <input type="email"  value="<?=$email?>" name="email">
        </div>
        <br>
        <button>Cadastrar</button>
    </form>
    <p>
        <?php
            if ($mensagem != ''){
                echo $mensagem;
            }
        ?>
    </p>
    <div style ="color: red">
    
    <?=$erro?>

    </div>
    
</body>
</html>






















