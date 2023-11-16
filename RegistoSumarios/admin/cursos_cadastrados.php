<?php
    $painel_actual = "admin";
    require "../config/config.php";
    "../config/conexao.php"; //incluindo a conexao
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos Cadastrados</title>

    <link rel="shortcut icon" href="image/icons/escola01.png">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <?php //require "../config/conexao.php";?>

</head>
<body>

    <div id="caixa-login">

        <?php
             //$sql = ("SELECT * FROM cursos  WHERE email = '$email' AND senha = '$password'");
             $sql = ("SELECT * FROM cursos");

             $result = mysqli_query($conexao, $sql);
             if(mysqli_num_rows($result) >0){
                 
                while($res_1 = mysqli_fetch_assoc($result)){
                     $nome_curso = $res_1['nome_curso'];
                     $codigo_curso = $res_1['codigo_curso'];
                     $duracao_curso = $res_1['duracao_curso'];
                    
                     echo $nome_curso;
                }
             }else {
                 echo "<h2>Sem dados para Visualizar!</h2>";
             }
        ?>

    </div>

</body>
</html>