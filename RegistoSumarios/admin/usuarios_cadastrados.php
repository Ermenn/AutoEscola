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
    <title>Usuarios Cadastrados</title>

    <link rel="shortcut icon" href="image/icons/escola01.png">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>
<body>

    <div id="caixa-login">

        <?php
             //$sql = ("SELECT * FROM cursos  WHERE email = '$email' AND senha = '$password'");
             $sql = ("SELECT * FROM login");

             $result = mysqli_query($conexao, $sql);
             if(mysqli_num_rows($result) >0){
                 
                while($res_1 = mysqli_fetch_assoc($result)){
                    $nome = $res_1['nome'];
                    $email = $res_1['email'];
                    $senha = $res_1['senha'];
                    $painel = $res_1['painel'];
                    $status = $res_1['status']; 
                    $curso_de_formacao = $res_1['curso_de_formacao'];
                    $uc_a_leccionar = $res_1['uc_a_leccionar'];
                    
                     echo $nome;
                     echo $email;
                }
             }else {
                 echo "<h2>Sem dados para Visualizar!</h2>";
             }
        ?>

    </div>

</body>
</html>