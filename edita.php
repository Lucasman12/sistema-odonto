<html>
<head>
    <title>Editar</title>
    
	

	
			<link rel="stylesheet" type="text/css" href="meuestilo.css">

	<link rel="stylesheet" href="css/style.css">


<!--   <div class="site-section-cover img-bg-section" style="background-image: url('images/person-transparent-2.'); " data-aos="fade">

!-->


</div>

       <style type="text/css">

input[type=text]{   
    border-radius:4px;
    -moz-border-radius:4px;
    -webkit-border-radius:4px;
    box-shadow: 1px 1px 2px #333333;    
    -moz-box-shadow: 1px 1px 2px #333333;
    -webkit-box-shadow: 1px 1px 2px #333333;
    background: #00; 
    border:1px solid ;
    width:150px
}
 
textarea{
    border: 1px solid #000000;
    background: #00  ;
    width:150px;
    height:100px;
    border-radius:4px;
    -moz-border-radius:4px;
    -webkit-border-radius:4px;
    box-shadow: 1px 1px 2px #333333;    
    -moz-box-shadow: 1px 1px 2px #333333;
    -webkit-box-shadow: 1px 1px 2px #333333;
}
 
input[type=text]:hover, textarea:hover{ 
         background: #ffffff; border:1px solid #990000;
}
 
input[type=submit]{
        background:#006699;
        color:#ffffff;
}

    </style>
	
	
	
</head>
		<link rel="stylesheet" type="text/css" href="meuestilo.css">

    <body bgcolor="#8FBC8F">
	

	       
</head>
   <body bgcolor="#8FBC8F">
   
   
   
<div class="logo">
   <div class="symbol"></div>
   <div class="nome">Food</div>
   <div class="slogan">Food</div>
</div>
	   
	        <?php 
		
		
            //Recebe os dados a serem editados
            $id = filter_input(INPUT_POST, 'id');
            $nome = filter_input(INPUT_POST, 'nome');
            $cpf = filter_input(INPUT_POST, 'cpf');
            //$sexo = filter_input(INPUT_POST, 'sexo');
		     $email = filter_input(INPUT_POST, 'email');
			  $telefone = filter_input(INPUT_POST, 'telefone');
			   $endereco = filter_input(INPUT_POST, 'endereco');
			   $cep = filter_input(INPUT_POST, 'cep');
			   $bairro = filter_input(INPUT_POST, 'bairro');
			    $cidade = filter_input(INPUT_POST, 'cidade');
                 $estado = filter_input(INPUT_POST, 'estado');
                 $pedido = filter_input(INPUT_POST, 'pedido');
                  $valor = filter_input(INPUT_POST, 'valor');


	?>
		
       <h2><font color="black">Alteracao de Dados</h2>
	   
        <form action="Salva.php" method="post">
                          
                  ID 
				  <br><input type="text"  name="id" value="<?php  echo $id; ?>">
            <br>
    						  Nome   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cpf
                <br><input type="text"  name="nome" value="<?php  echo $nome; ?>">
            
       
                
               <input type="text"  name="cpf"  value="<?php echo $cpf;?>">
        <br>
             E-mail
            <br><input type="text"  name="email"  value="<?php echo $email;?>">
          <br>
           Telefone
           <br> <input type="text"  name="telefone"  value="<?php  echo $telefone;?>">
       <br>
            Endereco
           <br><input type="text"  name="endereco" value="<?php  echo $endereco;?>">        

        <br>
		
		<br>
            Cep
           <br><input type="text"  name="cep" value="<?php  echo $cep;?>">  
         
		 <br>
		 Bairro
		 <br><input type="text"  name="bairro" value="<?php  echo $bairro;?>"> 
		 <br>
            
                
            <br>
                Cidade&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Estado
               <br> <input type="text"  name="cidade"  value="<?php  echo $cidade;?>">
			   
           <input type="text"  name="estado"  value="<?php  echo $estado;?>">
              		
			<br>
           <br>
		        Pedido
                <br><input type="text"  name="pedido"  value="<?php  echo $pedido;?>">
              		
			<br>
			Valor
           <br><input type="text"  name="valor"  value="<?php  echo $valor;?>">
              		
			<br>
       
            <br>

			<Button class="button">Salvar alteracoes</Button>
			

        </form>
    </body>
</html>


		         
