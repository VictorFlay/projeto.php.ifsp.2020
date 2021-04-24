<?php

    if ($_POST['cxuser'] != "") {
        
        include_once '../Banco/conexao.php';

        $usuario = $_POST['cxuser'];
        $senha = $_POST['cxsenha'];

        $sql = "insert into tbusuario(user, senha)
        values ('$usuario','$senha')";

        $query = mysqli_query($conn, $sql);

        echo "Dados Cadastrados com Sucesso !!";
    }
    else{
        echo "Não foi possível realizar o cadastro !!";
    }
   
    echo"<br/><a href='../PHP/login.php'>Voltar</a>";
?>