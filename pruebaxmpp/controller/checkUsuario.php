<?php 

    

    $usuario = $_POST["user"];

    $contrasenia = $_POST["pass"];



    require_once("../model/Usuario.php");

    $usuario = new Usuario($usuario, $contrasenia, "");



    require_once("../dao/UsuarioDAO.php");

    $usuarioDAO = new UsuarioDAO();

    $guardoOk = $usuarioDAO->guardarUsuario($usuario);



    if ($guardoOk) {

        echo "El usuario se agrego correctamente <br>" ;

    } else {

        echo "Error en agregar usuario <br>";

    }    

 

?>



<html>

    <br>

    <br>

    <br>

    <br>

    <br>

    <a href="https://elatellier.000webhostapp.com/">----------------  Inicio  ------</a>

</html>

