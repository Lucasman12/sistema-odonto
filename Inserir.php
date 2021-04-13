<html>
<head>
    <title>Pessoas</title>
	</head>
	<meta charset="UTF-8">
		
		<link rel="stylesheet" type="text/css" href="meuestilo.css">

	<!--<div class="logo">
   <div class="symbol"></div>
   <div class="nome">System</div>
   <div class="slogan">Odontologia</div>
</div>

<body onload='window.history.back();'>!-->



<body bgcolor="#8FBC8F">




<?php 

include "conect.php";

$nome= $_POST['nome'];
$cpf= $_POST['cpf'];
$email= $_POST['email'];
$telefone= $_POST['telefone'];
$endereco= $_POST['endereco'];
$cep= $_POST['cep'];
$bairro= $_POST['bairro'];
$cidade=$_POST['cidade'];
$estado=$_POST['estado'];
$pedido=$_POST['pedido'];
$valor= $_POST['valor'];


echo "<br>";
echo "<h4>Nome:".$nome."<br>";
echo "<br>";
echo "<br>Cpf:".$cpf."<br>";
echo "<br>";
//echo "<br>Sexo:".$sexo."<br>";
echo "<br>";
echo "<br>Email:".$email."<br>";
echo "<br>";
echo "<br>Telefone:".$telefone."<br>";
echo "<br>";
echo "<br>Endereco:".$endereco."<br>";
echo "<br>";
echo "Cep:".$cep."<br>";
echo "<br>";
echo "Bairro:".$bairro."<br>";
echo "<br>";
echo "<br>Cidade:".$cidade."</center><br>";
echo "<br>";
echo "<br>Estado:".$estado."</center><br>";
echo "<br>";
echo "<br>Pedido:".$pedido."<br>";
echo "<br>";
echo "<br>Valor:".$valor."<br>";


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
if($nome !="" && $cpf !=""  &&  $email !=""  &&  $telefone !="" && $endereco !="" &&  $cep !="" &&  $bairro !="" && $cidade !="" &&  $estado !=""  &&  $pedido !=""  &&  $valor !="" ){

mysqli_query($link, "INSERT INTO cadastro(nome, cpf, email, telefone, endereco, cep , bairro  , cidade, estado, pedido, valor)

VALUES('$nome','$cpf', '$email','$telefone','$endereco','$cep','$bairro','$cidade' ,'$estado', '$pedido', '$valor' )");

}else{

echo "<center><h3>Dados inserido com sucesso<h3></center>";


}

//echo "<center><a href=http://localhost/Crud%20php/inserir.php  button>Imprimir</center></a></button>";
?>

<a href="http://localhost/System%20odonto/cadastro.html" class="button">Voltar_____</a>
     	


<Button class="button"><script>var pfHeaderImgUrl = '';var pfHeaderTagline = '';var pfdisableClickToDel = 0;var pfHideImages = 0;var pfImageDisplayStyle = 'block';var pfDisablePDF = 0;var pfDisableEmail = 0;var pfDisablePrint = 0;var pfCustomCSS = '';var pfBtVersion='1';(function(){var js, pf;pf = document.createElement('script');pf.type = 'text/javascript';if('https:' == document.location.protocol){js='https://pf-cdn.printfriendly.com/ssl/main.js'}else{js='http://cdn.printfriendly.com/printfriendly.js'}pf.src=js;document.getElementsByTagName('head')[0].appendChild(pf)})();</script><a href="" style="color:#6D9F00;text-decoration:none;" class="printfriendly" onclick="window.print();return false;" title="Imprimir"><img style="border:none;-webkit-box-shadow:none;box-shadow:none;" src="" alt=""/><font color="black">Imprimir</button></a>

</body>
</html>
