<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="shortcut icon" href="image/icons/escola01.png">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <?php require "config/conexao.php" ?>
</head>
<body>
    <div id="logo">
        <img src="image/logoescola.jpg" alt="logotipo">
    </div>

    <div id="caixa-login">
        <?php
            if(isset($_POST['button'])){
                $email = $_POST['email'];
                $password = $_POST['password'];

                if ($email=='') {
                    echo"<h2>Por favor, insira o seu email!</h2>";
                }elseif($password==''){
                        echo"<h2>Por favor, insira a Senha!</h2>";
                    }else {
                        $sql = ("SELECT * FROM login  WHERE email = '$email' AND senha = '$password'");

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

                                if ($status== 'inactivo') {
                                    echo "<h2>Voce esta inactivo, Contacte o Administrador!</h2>";
                                }else {
                                    session_start();
                                    $_SESSION['nome'] = $nome;
                                    $_SESSION['email'] = $email;
                                    $_SESSION['senha'] = $senha;
                                    $_SESSION['painel'] = $painel;
                                    $_SESSION['status'] = $status;
                                    $_SESSION['curso_de_formacao'] = $curso_de_formacao;
                                    $_SESSION['uc_a_leccionar'] = $uc_a_leccionar;

                                    if ($painel == 'admin') {
                                        echo "<script language='javascript'>window.location='admin';</script>";
                                    }elseif ($painel == 'docente') {
                                        echo "<script language='javascript'>window.location='docente';</script>";
                                    }elseif ($painel == 'estudante') {
                                        echo "<script language='javascript'>window.location='estudante';</script>";
                                    }elseif ($painel == 'RegistoAcademico') {
                                        echo "<script language='javascript'>window.location='registoAcademico';</script>";
                                    }
                                }
                            }
                        }else {
                            echo "<h2>Email ou Senha Invalidos!</h2>";
                        }

                    }
                
            }
        ?>
        <form name="form" method="post" action="" enctype="multipart/form-data">
            <table>
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
                    <td><input class="input" type="submit" name="button" value="ENTRAR"></td>
                </tr>

            </table>
        </form>
    </div>
</body>
</html>