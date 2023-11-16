<?php
    require "conexao.php";

    @session_start();

    $nome = $_SESSION['nome'];
    $email = $_SESSION['email'];
    $senha = $_SESSION['senha'];
    $painel = $_SESSION['painel'];
    $status = $_SESSION['status']; 
    $curso_de_formacao = $_SESSION['curso_de_formacao'];
    $uc_a_leccionar = $_SESSION['uc_a_leccionar'];

    if ($email =='') {
        echo "<script language='javascript'>window.location='../index.php';</script>";
    }elseif ($nome =='') {
        echo "<script language='javascript'>window.location='../index.php';</script>";
    }elseif ($senha =='') {
        echo "<script language='javascript'>window.location='../index.php';</script>";
    }else {
        if ($painel_actual != $painel) {
            echo "<script language='javascript'>window.location='../index.php';</script>";
        }
    }
 
?>