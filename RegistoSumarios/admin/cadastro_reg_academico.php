<?php
    $painel_actual = "admin";
    require "../config/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de CTA</title>
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
                $email = $_POST['email'];
                $password = $_POST['password'];
                $tipo_usuario = $_POST['tipo_usuario'];
                $status = $_POST['status'];
                echo $nome;
            }
        ?>
        <form name="form" method="post" action="" enctype="multipart/form-data">
            <table>
                <h1 id="titulo">CADASTRO DO PESSOAL DO REGISTO ACADEMICO - CTA</h1>
                <tr>
                    <td><h1>Nome Completo:</h1></td>
                </tr>
                <tr>
                    <td><input class="col-sm-3" type="text" name="nome"></td>
                </tr>

                <tr>
                    <td>
                        <div class="col-sm-6">
                            <select id="cargo" name="cargo" class="opcoes">
                                    <option value="RegistoAcademico">Cargo</option>
                                    <option value="Admin">Director</option>
                                    <option value="RegistoAcademico">Secretaria</option>
                                    <option value="RegistoAcademico">Funcionario</option>
                            </select>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td><h1>Email:</h1></td>
                </tr>
                <tr>
                    <td><input type="email" name="email"></td>
                </tr>

                <tr>
                    <td><h1>Senha:</h1></td>
                </tr>
                <tr>
                    <td><input type="password" name="password"></td>
                </tr>

                <tr>
                    <td>
                        <div class="col-sm-6">
                            <select id="tipo_usuario" name="tipo_usuario" class="opcoes">
                                    <option value="RegistoAcademico">Tipo Usuario</option>
                                    <option value="RegistoAcademico">Registo Academico</option>
                                    <option value="Admin">Administrador</option>
                            </select>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="col-sm-6">
                            <select id="status" name="status" value="Activo" class="opcoes">
                                    <option value="Activo">Estado</option>
                                    <option value="Activo">Activo</option>
                                    <option value="Inactivo">Inactivo</option>
                            </select>
                        </div>
                    </td>
                </tr>


                <tr>
                    <td><input class="input" type="submit" name="button" value="CADASTRAR"></td>
                </tr>

            </table>
        </form>
    </div>
    
</body>
</html>