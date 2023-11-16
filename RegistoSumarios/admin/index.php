<?php
    $painel_actual = "admin";
    require "../config/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administracao</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="shortcut icon" href="image/icons/escola01.png">

</head>
<body style="background-color:white;">
    <div class="navbar">

        <a href="#home">Home</a>
        <a href="#news">News</a>
        <div class="dropdown">
            <button class="dropbtn">Administração<i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
            <div class="header">
                <h2>Menu de Administração</h2>
            </div>   
                <div class="row">
                    <div class="column">
                    <h3>CADASTRO</h3>
                    <a href="cadastro_docentes.php">Cadastro de Docentes</a>
                    <a href="cadastro_estudantes.php">Cadastro de Estudantes</a>
                    <a href="cadastro_reg_academico.php">Cadastro do Pessoal do Regiso Academico</a>
                    <a href="cadastro_uc.php">Cadastro da UC</a>
                    <a href="cadastro_cursos.php">Cadastro de Cursos</a>
                    </div>
                    <div class="column">
                    <h3>VISUALIZACAO DE CADASTROS</h3>
                    <a href="usuarios_cadastrados.php">Usuarios Cadastrados</a>
                    <a href="ucs.php">UC's Cadastradas</a>
                    <a href="cursos_cadastrados.php">Cursos  Cadastrados</a>
                    </div>
                    <div class="column">
                    <h3>RELATORIOS</h3>
                    <a href="#">Relatorio de Usuarios Registados</a>
                    <a href="#">Relatorio de Sumarios</a>
                    <a href="#">Link 3</a>
                    </div>
                </div>
            </div>
            
        </div> 
        
    </div>

    <div style="padding:16px">
        <h3>Responsive Mega Menu (Full-width dropdown in navbar)</h3>
    </div>
    <div id="fundo-image">
        <img src="image/logoescola.jpg" alt="">
    </div>

</body>
</html>