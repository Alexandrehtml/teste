<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

 <link rel="stylesheet" href="treinamento.css">

 

</head>

<body >
 
<div class="p">


  <form action="" method="post" name="form">

    

    <label>Numero</label>
    <input type="text" name="numero" size="5px">
    <br><br>

    <label>Tipo</label>
    <input type="text" name="tipo" size="5px">
    <br><br>

    <label>oi</label>
    <input type="text" name="oi" size="5px">
    <br><br>

    <input type="submit" name="envio" value="enviar">


  </form>
  
  
 <?php
  if (isset($_POST["envio"]))
  {
  echo "<script>alert('Formulário Foi enviado pelo método POST')</script>";
  }
?>

<?php
    if (isset($_POST["acao"])){
        $nome=$_POST["tipo"];
        $telefone=$_POST["oi"];
        $email=$_POST["numero"];
        
    }
?>

<?php
    if (isset($_POST["acao"])){
      $nome=$_POST["tipo"];
        $telefone=$_POST["oi"];
        $email=$_POST["numero"];

        echo "<p>Olá, ".$tipo."</p>";
        echo "<p>Seu email é: ".$oi."</p>";
        echo "<p>Seu telefone é: ".$numero."</p>";
        if ($radio=="sim"){
            echo "<p>Você escolheu receber nossas novidades</p>";
        }elseif ($radio=="nao") {
            echo "<p>Você escolheu NÃO receber nossas novidades</p>";
        }
        echo "<p>Sua mensagem é:<br/>".$msg."</p>";
    }
?>


         
        
</body>
</html>