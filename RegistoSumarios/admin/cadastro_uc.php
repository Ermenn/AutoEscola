<?php
    $painel_actual = "admin";
    require "../config/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro da UC</title>
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
                $nome = $_POST['nome'];
                $curso_de_formacao = $_POST['curso_de_formacao'];
                $uc_a_leccionar = $_POST['uc_a_leccionar'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $tipo_usuario = $_POST['tipo_usuario'];
                $status = $_POST['status'];
                echo $nome;
            }
        ?>
        <form name="form" method="post" action="" enctype="multipart/form-data">
            <table>
                <h1 id="titulo">CADASTRO DA UNIDADE CURRICULAR</h1>
                <tr>
                    <td><h1>Nome da UC:</h1></td>
                </tr>
                <tr>
                    <td><input class="col-sm-3" type="text" name="nome_uc" required></td>
                </tr>

                <tr>
                    <td><h1>Codigo da UC:</h1></td>
                </tr>
                <tr>
                    <td><input type="text" name="codigo_uc" required></td>
                </tr>

                <tr>
                    <td><h1>Carga Horaria:</h1></td>
                </tr>
                <tr>
                    <td><input type="number" name="carga_horaria" required></td>
                </tr> 


                <tr>
                    <td><input class="input" type="submit" name="button" value="CADASTRAR"></td>
                </tr>

            </table>
        </form>
    </div>
    
</body>
</html>