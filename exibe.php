<html>
<head>

<meta charset="UTF-8">
<!--<style type="text/css">


</style>!-->	
	<link rel="stylesheet" type="text/css" href="meuestilo.css">

    <title>Pessoas</title>
    	<link href="estilos_impressao.css" rel="stylesheet" type="text/css" media="print">
	<style type="text/css">
        *{
            margin: 15;
            padding: 0 ;
        }
        table{
            border: 1px solid gray;
            padding: 1em
        }
        td{
            border: 1px solid lightgray;
            font-size: 1em;
            padding: 0px
        }
        button{
            padding: 5px
			
        }
	
				table {
  border: 1px solid #1C6EA4;
  background-color: #EEEEEE;
  width: 100%;
  text-align: left;
  border-collapse: collapse;
}
table.blueTable td, table.blueTable th {
  border: 1px solid #AAAAAA;
  padding: 3px 2px;
}
table.blueTable tbody td {
  font-size: 13px;
}
table.blueTable tr:nth-child(even) {
  background: #D0E4F5;
}
table.blueTable thead {
  background: #1C6EA4;
  background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  border-bottom: 2px solid #444444;
}
table.blueTable thead th {
  font-size: 15px;
  font-weight: bold;
  color: #FFFFFF;
  border-left: 2px solid #D0E4F5;
}
table.blueTable thead th:first-child {
  border-left: none;
}

table.blueTable tfoot {
  font-size: 14px;
  font-weight: bold;
  color: #FFFFFF;
  background: #D0E4F5;
  background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
  background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
  background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
  border-top: 2px solid #444444;
}
table.blueTable tfoot td {
  font-size: 14px;
}
table.blueTable tfoot .links {
  text-align: right;
}
table.blueTable tfoot .links a{
  display: inline-block;
  background: #1C6EA4;
  color: #FFFFFF;
  padding: 2px 8px;
  border-radius: 5px;
}
		
    </style>
	





<!--<html>
	<head>
		<meta charset="utf-8">
		<title>Sistema de Busca sem Refresh</title>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
		<script type="text/javascript" src="javascriptpersonalizado.js"></script>
	</head>
	<body>
		<h1>Pesquisar Cliente </h1>
		<form method="POST" id="form-pesquisa" action="">
			Pesquisar: <input type="text" name="pesquisa" id="pesquisa" placeholder="Pesquisar">
			<input type="submit" name="enviar" value="Pesquisar">
		</form>
		
		<ul class="resultado">
		
		</ul>
	</body>
</html>
!-->

<form method="GET" action="busca.php">
  <label for="consulta">Buscar:</label>
  <input type="text" id="consulta" name="consulta" maxlength="255" />

  <input type="submit" value="OK" />
</form>




    <?php 
        //Área de notificações

        //Se existe a variável remocao, então
        if( isset($_GET['remocao'])){
            //Se remoção tem true, os dados foram removidos
            if( $_GET['remocao'] == "true" ){
				echo "<br>";
				echo "<br>";
                echo "<p><h1><center>Os dados foram removidos.</center></h1></p>";            
            }else{
                echo "<p>Não foi possivel remover os dados.</p>";
            }
        } 
        //Se existe a variável alteração, então
        if( isset($_GET['alteracao']) ){
            //Se alteracao tem true, os dados foram alterados
            if( $_GET['alteracao'] == "true" ){
                echo "<p>Os dados foram alterados.</p>";            
            }else{
                echo "<p>Não foi possivel alterar os dados.</p>";
            }/*dados*/
        } 
    ?>
    <table>
	
       <table>
	
        <caption><h1>Pessoas</h1></caption>
       <tr><td><font color  ="#" >ID</color></td><td><font color  ="#" > NOME</color></td><td><font color="red"> CPF</font></td><td><font color  ="green" >EMAIL</font></td><td><font color  ="#" >TELEFONE</font></td><td><font color  ="#" >ENDERECO</font></td><td>CEP</td><td>BAIRRO</td><td><font color  ="#" >CIDADE</font></td><td><font color="#">ESTADO</td><td>PEDIDO</td><td>VALOR</td><td>EDITAR</td> </font></td><td><font color  ="#" >APAGAR</font></td><td></font></td></tr>
                </center>
		<br/> <?php 
            //Estabelece a conexao com o mysql
            $conexao = mysqli_connect("localhost","root","root","bd1");
            if( !$conexao ){
                echo "Ops.. Erro na conexão.";
                exit;
            }
            //Carrega os dados
            $sql = "SELECT * FROM cadastro";
            $consulta = mysqli_query($conexao, $sql);
            if(!$consulta ){
                echo "Erro ao realizar consulta. Tente outra vez.";
                exit;
            }
            //se tudo deu certo, exibe os dados
            while( $dados = mysqli_fetch_assoc($consulta) ){
                            
			    echo "<tr>";
				echo "<td>" .$dados['id']."</td>";
				echo "<td>" .$dados['nome']."</td>";
                echo "<td>" .$dados['cpf']."</td>";
                //echo "<td>" .$dados['sexo']."</td>";
	 			echo "<td>" .$dados['email']."</td>";
				echo "<td>" .$dados['telefone']."</td>";
				echo "<td>" .$dados['endereco']."</td>";
				echo "<td>" .$dados['cep']."</td>";
				echo "<td>" .$dados['bairro']."</td>";
				echo "<td>" .$dados['cidade']."</td>";
				echo "<td>" .$dados['estado']."</td>";
   				echo "<td>" .$dados['pedido']."</td>";
   				echo "<td>" .$dados['valor']."</td>";

				
				// Cria um formulário para enviar os dados para a página de edição 
                // Colocamos os dados dentro input hidden
               
     		  		
                        		
                          	
                echo "<td>"; 
			    echo  "<font color  =White >";
				echo "<form action='edita.php' method='post'>";
				echo "<input name='id' type='hidden' value='" .$dados['id']. "'>";
                echo "<input name='nome' type='hidden' value='".$dados['nome']. "'>";
                echo "<input name='cpf' type='hidden' value='".$dados['cpf']. "'>";  
               	echo "<input name='email' type='hidden' value='".$dados['email']."'>"; 				
                echo "<input name='telefone' type='hidden' value='".$dados['telefone']."'>"; 				
                echo "<input name='endereco' type='hidden' value='".$dados['endereco']."'>";
                echo "<input name='cep' type='hidden' value='".$dados['cep']."'>"; 
                echo "<input name='bairro' type='hidden' value='".$dados['bairro']."'>";				 
        	    echo "<input name='cidade' type='hidden' value='".$dados['cidade']."'>"; 
           	    echo "<input name='estado' type='hidden' value='".$dados['estado']."'>"; 		
				echo "<input name='pedido' type='hidden' value='".$dados['pedido']."'>"; 		
				echo "<input name='valor' type='hidden' value='".$dados['valor']."'>"; 		
				
				echo "<button>Editar</button>";
           	    echo "</form>";
                echo "</td>";
                echo "</font>";
				
				
                // Cria um formulário para remover os dados 
                // Colocamos o id dos dados a serem removidos dentro do input hidden
                echo "<td>";
				echo "<form action='remove.php' method='post'>";
                echo "<input name='id' type='hidden' value='" .$dados['id']. "'>";
                echo "<button>Remover</button>";
				echo "<td>";
				//echo "<button>Imprimir</button>";
                echo "</form>";
                echo "</td>";
                echo "</tr>";
								
			};
            
        echo "<br>";
		echo "<br>";
		echo "<a href=http://localhost/System%20odonto/busca/cadastro.html ><button class='button'>Voltar para selecão de banco </button></h1> </a>"; 
		echo "<a href=http://localhost/System%20odonto/sistem%20inicio/ ><button class='button'>Voltar para o menu inicial </button></h1> <br></a>" ;
	 
		?>
		
    </table>
</body>
</html>





