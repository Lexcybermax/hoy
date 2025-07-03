<?php
    $nombre=$_GET["nombre"];
    $telefono=$_GET["telefono"];
    $FEntrega=$_GET["FEntrega"];
    $pedido=$_GET["pedido"];
    $nota=$_GET["nota"];

    $conexion=new mysqli("localhost","root","","pasteleria");

    if($conexion->connect_errno){
        echo "Fallo la conexion".$conexion->connect_errno;
    }
    $conexion->set_charset("utf8");

    $consulta="INSERT INTO ordenes (nombre, telefono, FEntrega, pedido, nota) VALUES ('$nombre', '$telefono', '$FEntrega', 
    '$pedido', '$nota')";
    
    $resultados=mysqli_query($conexion,$consulta);
    
    if($resultados=false) {
        echo "Error al ordenar";
    }else
    {
        echo "ORDEN FUARDADA, GRACIAS POR COMPRAR :)";

    }
        $conexion->close();

?>