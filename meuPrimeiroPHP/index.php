<?php

echo "Hello word";

  $usuario = "Ana";
  $idade = 38;

 $habilidades = ["HTML", "CSS", "JS", "PHP"];
  echo "Boa tarde, $usuario! <br> ";  // ou
  echo 'Boa tarde '.$usuario;


 if($idade > 95){

    echo "Pode se aposentar";
}
 else{

    echo "Vai trabalhar!";

}

 for ($i=0; $i <  count($habilidades); $i++) { 
    
    echo "$habilidades[$i]  <br> ";
 }

echo " <br> Habilidades:  <br>";

foreach ($habilidades as $indice => $valor) {

    echo "$valor <br>";
 }

