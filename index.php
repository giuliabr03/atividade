<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
</head>
<body>
    <main>
      <h1>Resultado:</h1>
      <p>
      <?php
           $nome = $_GET["nome"]?? 0;
           $nota1 = $_GET["nota1"]?? 0;
           $nota2 = $_GET["nota2"]?? 0;
           $media = ($nota2+$nota2)\2;
           echo " $nome, a sua média é $media ";
      ?>
      </p>
      <button onclick="javascript:history.go(-1)">&#x2B05;Voltar</button>
</main>
</body>
</html>