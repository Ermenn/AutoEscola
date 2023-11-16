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
    <title>Cadastro de Cursos</title>
    <link rel="stylesheet" href="css/estilo_form_cadastro.css">
    
    <!--  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    -->
</head>
<body>
    <div id="caixa-login">
        <?php
            if(isset($_POST['button'])){
                $nome_curso = $_POST['nome_curso'];
                $codigo_curso = $_POST['codigo_curso'];
                $duracao_curso = $_POST['duracao_curso'];
                
                $sql = "INSERT INTO cursos (nome_curso, codigo_curso, duracao_curso) VALUES ('$nome_curso', '$codigo_curso', '$duracao_curso')";

                if (mysqli_query($conexao, $sql)) {
                    echo "<h2>Novo Curso Cadastrado com Sucesso!</h2>";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
                }
                mysqli_close($conexao);
            }
        ?>
        <form name="form" method="post" action="" enctype="multipart/form-data">
            <table>
                <h3>CADASTRO DE CURSOS</h3>
                <tr>
                    <td><h1>Nome do Curso:</h1></td>
                </tr>
                <tr>
                    <td><input class="col-sm-3" type="text" name="nome_curso" required></td>
                </tr>

                <tr>
                    <td><h1>Codigo do Curso:</h1></td>
                </tr>
                <tr>
                    <td><input type="text" name="codigo_curso" required></td>
                </tr>

                <tr>
                    <td><h1>Duração do Curso:</h1></td>
                </tr>
                <tr>
                    <td><input type="number" name="duracao_curso" required></td>
                </tr> 


                <tr>
                    <td><input class="input" type="submit" name="button" value="CADASTRAR"></td>
                </tr>

            </table>
        </form>
    </div>
    
</body>
</html>