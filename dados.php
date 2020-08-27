<?php 

include("conecta.php");
$consulta= "SELECT * FROM alunos"; 
$resultado = mysqli_query($conexao,$consulta) or die("Erro ao retornar dados");
?> 

<!DOCTYPE html> 
  <html> 

    <head> 
      <meta charset="UTF-8"> 
      <title>Dados dos Alunos</title> 
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="estilo.css">
    </head> 

    <body> 
  <div class="container">   
    <h2>Registro de alunos cadastrados</h2>
      <table border="1"> 
        <tr> 
          <th>Código</th> 
          <th>Nome</th> 
          <th>Endereço</th> 
          <th>Matricula</th> 
        </tr> 
        <?php while($dado = $resultado->fetch_array()) { ?> 
        <tr> 
          <td><?php echo $dado['id']; ?></td>
          <td><?php echo $dado['nome']; ?></td> 
          <td><?php echo $dado['endereco']; ?></td>
          <td><?php echo $dado['matricula']; ?></td>  
        </tr> 
        <?php } ?> 
      </table> 
      <div class="imagem">
        <img src="client-server.png" alt="">
     </div>
  </div>  
    </body> 
    
</html>