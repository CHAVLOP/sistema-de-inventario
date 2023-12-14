<?php

if(!empty($_POST["btnRegistrar"])){
    if(!empty($_POST["codigo"]) and !empty($_POST["departamento"]) and !empty($_POST["producto"]) and !empty($_POST["tipo_entrada"]) and !empty($_POST["fecha"]) and !empty($_POST["proovedor"]) and !empty($_POST["cantidad"]) and !empty($_POST["unidad"]) and !empty($_POST["costo"]) and !empty($_POST["descripcion"])){
        $codigo=$_POST["codigo"];
        $departamento=$_POST["departamento"];
        $producto=$_POST["producto"];
        $tipo_entrada=$_POST["tipo_entrada"];
        $fecha=$_POST["fecha"];
        $proovedor=$_POST["proovedor"];
        $cantidad=$_POST["cantidad"];
        $unidad=$_POST["unidad"];
        $costo=$_POST["costo"];
        $descripcion=$_POST["descripcion"];

        $sql = $conexion->query ("insert into entradas (Id_entrada,Id_Dpto,Nombre_Producto,Tipo_Entrada,Fecha_Entrada,Proovedor,Cantidad,Id_Unidad,Costo_unitario,Especificaciones ) values ('$codigo','$departamento','$producto','$tipo_entrada','$fecha','$proovedor','$cantidad','$unidad','$costo','$descripcion')");
        if($sql ==1){
        echo '<div class="alert alert-success">Producto registrado Exitosamente</div>';
        }else{
            echo '<div class="alert alert-danger">Error al registrar el producto</div>';
        }
    }
    else{
        echo '<div class="alert alert-warning">Algunos campos estan vacios</div>';
    }
}

?>