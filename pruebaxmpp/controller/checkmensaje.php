<html>
    <a href="../view/listaMensaje.php">Lista de mensajes</a>
</html>
<?php 
    $nombre = $_POST['firstName'];
    $mail = $_POST['email'];
    $tema = $_POST['tema'];
    $mensaje = $_POST['mensaje'];
    
    //Este paso es necesario porque trabajamos con POO
    //Creamos un objeto Pedido para luego guardarlo en la DB
    require_once("../model/blogmensaje.php");

    $mensajes = new blogmensaje($nombre, $mail, $tema, $mensaje);
    
    require_once("../dao/blogmensajeDAO.php");

    $blogmensajeDAO = new blogmensajeDAO();
    $guardoOk = $blogmensajeDAO->guardarMensaje($mensajes);

    if ($guardoOk) {
        echo "El mensaje se agrego correctamente <br>";
    } else {
        echo "Error en agregar mensaje <br>";
    }
  
?>