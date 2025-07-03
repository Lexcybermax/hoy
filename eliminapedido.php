<?php
    $nombre=$_GET["nombre"];

    $conexion=new mysqli("localhost","root","","pasteleria");

    if($conexion->connect_errno){
        echo "Fallo la conexion".$conexion->connect_errno;
    }
    $conexion->set_charset("utf8");

    $consulta="DELETE FROM ordenes WHERE nombre = '$nombre'";
    
    $resultados=mysqli_query($conexion,$consulta);
    
    if($resultados=false) {
        echo "Error al cancelar";
    }else
    {
        echo "ORDEN CANCELADA, GRACIAS POR COMPRAR :)";

    }
        $conexion->close();

?>