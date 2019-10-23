<?php
 
 $nome=$_POST['nome'];
 $email=$_POST['email'];
 $senha=$_POST['senha'];

 $sql="INSERT INTO cliente (nome, email, senha)
        VALUES ('$nome', '$email', '$senha')";
    if(mysqli_query($conexao, $sql)){
        echo "<h1>Aluno cadastrado com sucesso</h1>";
        echo "<a href='cadastro_aluno.html'>Cadastrar novo aluno?</a><br>";
        echo "<a href='index.html'>Página inicial</a>";
    }
    else{
        echo "Error: ".$sql."<br>".mysqli_error($conexao);
    }
    mysqli_close($conexao);
?>