<?php
    $painel_actual = "admin";
    require "../config/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Docente</title>
    <link rel="stylesheet" href="css/estilo_form_cadastro.css">
    
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="/admin/bootstrap/css/bootstrap.css">
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
                <h3>CADASTRO DE DOCENTE</h3>
                <tr>
                    <td><h1>Nome Completo:</h1></td>
                </tr>
                <tr>
                    <td><input class="col-sm-3" type="text" name="nome"></td>
                </tr>

                <tr>
                    <td>
                        <div class="col-sm-6">
                            <select id="curso_de_formacao" name="curso_de_formacao" class="opcoes">
                                    <option value="vazio">Curso de Formação</option>
                                    <option value="Engenharia Informatica">Engenharia Informatica - EIT</option>
                                    <option value="Teologia">Teologia - TEO</option>
                                    <option value="Ciencias de Educação">Ciencias de Educação - CED</option>
                                    <option value="Ciencias de Administração e Gestão">Ciencias de Administração e Gestão -CAG</option>
                            </select>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="col-sm-6">
                            <select id="uc_a_leccionar" name="uc_a_leccionar" class="opcoes">
                                    <option value="vazio">UC a Leccionar</option>
                                    <option value="Introducao a Sistemas Operacionais">Introducao a Sistemas Operacionais</option>
                                    <option value="Analise Matematica">Analise Matematica</option>
                                    <option value="Analise e Desenho de Sistemas">Analise e Desenho de Sistemas</option>
                            </select>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td><h1>Email do Usuario:</h1></td>
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
                                    <option value="Docente">Tipo Usuario</option>
                                    <option value="Docente">Docente</option>
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