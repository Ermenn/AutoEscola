<?php
    /*
    $servidor = "localhost";
    $bd = "registosumarios";
    $usuario = "root";
    $senha = "";

    // Create connection
    $conn = mysqli_connect($servidor, $usuario, $senha, $bd);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
    mysqli_close($conn);*/
    
    function conectar(){
        $servidor = "localhost";
        $bd = "registosumarios";
        $usuario = "root";
        $senha = "";

        $con = new mysqli($servidor, $usuario, $senha, $bd);
        return $con;
    }
    $conexao = conectar();
?>