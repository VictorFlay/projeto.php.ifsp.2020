<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once '../Banco/conexao.php'; ?>
    <title>Deletar</title>
</head>
<body>
    <?php
        $cod = $_GET['id'];
        $consulta = "select *from tbcliente where cod_funcionario = '$cod'";
        $executar = mysqli_query($conn, $consulta); 
        $linha = mysqli_fetch_array($executar);
    ?>
    <h2>Tem certeza que deseja Excluir esse Cliente ? </h2>
    <br/>
    <button><a href="excluircliente.php?id=<?php echo $linha['cod_cliente'];?>">SIM</a></button>
    <button><a href="../admpage.php">NÃO</a></button>
</body>
</html>

