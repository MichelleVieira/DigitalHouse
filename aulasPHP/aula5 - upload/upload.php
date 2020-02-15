<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload</title>
</head>
<body>
  
   
  <form method="POST"  action ="save.php" enctype="multipart/form-data"  >

      <div class= "form-group">
         <label for="nome" >Nome</label>
         <input type="text"  name="nome">
      </div><br>
      
      <div class= "form-group">
         <label for="foto" >Foto</label> 
         <input type="file" name="foto">
      </div><br>
      
      <button>Cadastrar</button>
    
    
     

  </form>
    
</body>
</html>