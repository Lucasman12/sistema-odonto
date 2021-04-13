<?php 

    include "edita.php";
    //Recebe os dados com as alterações feitas
            $id = filter_input(INPUT_POST, 'id');
            $novonome = filter_input(INPUT_POST, 'nome');
            $novocpf = filter_input(INPUT_POST, 'cpf');
            //$novosexo = filter_input(INPUT_POST, 'sexo');
            $novoemail = filter_input(INPUT_POST, 'email');
            $novotelefone = filter_input(INPUT_POST, 'telefone');
			 $novoendereco = filter_input(INPUT_POST, 'endereco');
			 $novocep = filter_input(INPUT_POST, 'cep');
			 $novobairro = filter_input(INPUT_POST, 'bairro');
            $novocidade =filter_input(INPUT_POST, 'cidade');
			$novoestado =filter_input(INPUT_POST, 'estado');
			$novopedido =filter_input(INPUT_POST, 'pedido');
			$novovalor =filter_input(INPUT_POST, 'valor');
			

	
    //Estabelece a conexão com o mysql
    $conexao = mysqli_connect("localhost","root","root","bd1");
    if( !$conexao ){
        header("Location:exibe.php?alteracao=false");
        exit;
    }
    //Executa a atualização no banco de dados
    $sql = "UPDATE cadastro SET nome='" .$novonome. "', cpf='" .$novocpf. "', email='".$novoemail."', telefone='".$novotelefone."', endereco='".$novoendereco."', cep='".$cep."',  bairro='".$bairro."',  cidade='".$novocidade."', estado='".$novoestado."', pedido='".$pedido. "',  valor ='".$valor."'    WHERE id=".$id;
    $update = mysqli_query($conexao, $sql);

    //Se não deu certo, redireciona pra exibe.php com alteracao igual a false
    if( !$update ){
        header("Location:exibe.php?alteracao=false");
        exit;
    }

    //se tudo deu certo, redireciona pra exibe.php com alteracao igual a true
    header("Location:exibe.php?alteracao=true");
?>
 