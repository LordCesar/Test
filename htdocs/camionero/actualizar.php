<?php

function actualizar_camionero($dni, $nombre, $telefono, $direccion)
{
    include './conexion.php';
    $consulta = "INSERT INTO `provincias` (`codigo`, `nombre`) VALUES (null, '$nombre');";
    $resultado = my_sqli_query($conexion, $consulta);
    return $resultado;
}