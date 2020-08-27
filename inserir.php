
<?php
include("conecta.php");

$nome = $_POST['nome'];
$endereco= $_POST['endereco'];
$matricula = $_POST['matricula'];

 $sql = "INSERT INTO alunos VALUES";
 $sql .= " (default, '$nome', '$endereco', '$matricula')";

if($conexao->query($sql)===TRUE){

	echo "usuario incluido com sucesso";
	header('Location: dados.php');
} else{
	echo 'ERRO' . $sql. "<br>".$conexao->error;
}

$conexao->close();


// echo "dados recebidos <br>" ;
//  echo  "<br>" . $nome  ; 
//  echo  "<br>" . $endereco ; 
//  echo  "<br>" . $matricula ; 


?>