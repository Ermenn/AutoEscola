<?php
    $painel_actual = "docente";
    require "../config/config.php";
    //echo $_SESSION['uc_a_leccionar'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docente</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

    <ul>
        <li><a class="active" href="#home">Home</a></li>
        <li><a href="#news">Alunos</a></li>
        <li><a href="cadastro_sumario.php">Sumario</a></li>
        <li><a href="#about">Presencas</a></li>

        <div id="perfil">
            <li><a href="#about">Perfil</a></li>
            <li><a href="#about">Sair</a></li>
        </div>
        
    </ul>

</body>
</html>



