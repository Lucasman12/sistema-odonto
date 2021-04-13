<?php 
$host= "localhost";
$user ="root";
$pass ="root";
$banco ="bd1";
$link= mysqli_connect($host,$user,$pass,$banco);

if(mysqli_errno($link)){

echo "Erro ao conectar db";

}else{ 


}

?> 