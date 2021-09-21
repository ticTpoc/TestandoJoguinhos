<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Joguinhos</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

<h3> PYTHON<br> PHP<br> HTMLCSS<br> JAVASCRIPT</h3>
<!-- Conversinha básica com o Python -->
<!-- Seria muito maluco colocar inteligencia artificial nisso algum dia -->

<div class="conversa">

   <h2> Pergunta: </h2>

   <form action="php.php" method="post">
   <label for="input">Conversar com o Python</label><br>
   <input type="radio" id="pergunta" name="input" value="testar">
   <label for="pergunta">Python, Você está funcionando?</label><br>
   <button type="submit">Enviar</button>
  </form>

<?php
//pegar o valor que a pessoa inseriu no forms do php
$input = $_POST['input'] ?? null;

echo "<br>";
echo "<h2> Resposta: </h2>";
/*esse comando executa o shell(prompt) de python e envia parametros separados por espaço
como em um array, o python o recebera como sys.argv[index do parametro] */

echo shell_exec("python $input \"Parametro livre\""); 

?>
</div>
<br><br>
<button><a  href="index.html"> Voltar </a></button>
<script src="javascript/funcoes.js"></script>
</body>
</html>
