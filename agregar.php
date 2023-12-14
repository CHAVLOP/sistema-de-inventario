<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="datatables/datatables.min.css">
    <link rel="stylesheet" href="datatables/DataTables-1.12.1/css/dataTables.bootstrap4.min.css">
    
    <title>Entradas</title>
</head>
<body>
<div class="container-fluid row">
<form class="col-4" method="POST">
  <h3 class="text-center text-secondary">Registro de productos</h3>
  <?php
  include "conexion.php";
  include "registrar_producto.php";
  ?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Codigo</label>
    <input type="number" class="form-control" name="codigo">
  </div>


 
  
  <div class="mb-3">
      <label for="disabledSelect" class="form-label">Departamento: </label>
      <div class="btn-group">
        <div class="mb-3">
         <select id="disabledSelect" class="form-select" name="departamento" >
          <option>Selecciona una opcion...</option>
          <option value="1">Articulos de limpieza</option>
          <option value="2">Articulos de vehiculos</option>
          <option value="3">Equipo de laboratorio</option>
          <option value="4">Material de laboratorio</option>
          <option value="5">Material de oficina</option>
          <option value="6">Equipo de seguridad</option>
          <option value="7">Equipo de oficina</option>
        </select>
  </div>
  
</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Producto</label>
    <input type="text" class="form-control" name="producto">
  </div>
  <div class="mb-3">
      <label for="disabledSelect" class="form-label">Tipo de entrada: </label>
      <select id="disabledSelect" class="form-select" name="tipo_entrada" >
        <option>Selecciona una opcion...</option>
        <option>Ingreso</option>
        <option>Compra</option>
        <option>Devolucion</option>
      </select>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Fecha de entrada</label>
    <input type="date" class="form-control" name="fecha">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Proovedor</label>
    <input type="text" class="form-control" name="proovedor">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Cantidad</label>
    <input type="number" class="form-control" name="cantidad">
  </div>
  <div class="mb-3">
      <label for="disabledSelect" class="form-label">Tipo de unidad: </label>
      <select id="disabledSelect" class="form-select" name="unidad" >
        <option>Selecciona una opcion...</option>
        <option value="1">Mililitros</option>
        <option value="2">Pieza</option>
        <option value="3">Centimetros</option>
        <option value="4">Par</option>
        <option value="5">Gramos</option>
        <option value="5">Frasco</option>
        <option value="7">Rollo</option>
        <option value="8">Botella</option>
        <option value="9">Litros</option>
        <option value="10">Lata</option>
        <option value="11">Cajas</option>
        <option value="12">Bolsa</option>
        <option value="13">Madeja</option>
        <option value="14">Juego</option>
        <option value="15">Metro</option>
        <option value="16">Hojas</option>
        <option value="17">Block</option>
        <option value="18">Paquete</option>
      </select>
  </div>


  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">costo_unitario</label>
    <input type="number" class="form-control" name="costo1">
    <div class="input-group mb-3">
  <span class="input-group-text">$</span>
  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="costo">
  <span class="input-group-text">.00</span>
</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Especificaciones</label>
    <input type="text" class="form-control" name="descripcion">
  </div>
  <button type="submit" class="btn btn-primary" name="btnRegistrar" value="ok">Registrar</button>
        
</form>
<div class="col-8 p-4">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Departamento</th>
      <th scope="col">Producto</th>
      <th scope="col">tipo_de_entrada</th>
      <th scope="col">Fecha_de_entrada</th>
      <th scope="col">Proovedor</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Unidad</th>
      <th scope="col">Costo_Unitario</th>
      <th scope="col">Especificaciones</th>
    </tr>
  </thead>
  <tbody>
    <?php
      include "conexion.php";
      $sql = $conexion -> query("select * from entradas e INNER JOIN departamentos d ON e.Id_Dpto = d.Id_Dpto INNER JOIN unidades u ON e.Id_Unidad = u.Id_unidad");
    while($datos = $sql->fetch_object()){
     ?>
    <tr>
      <th scope="row"><?= $datos->Id_entrada?></th>
      <td><?= $datos->Nombre_Dpto?></td>
      <td class="text-dark"><?= $datos->Nombre_Producto?></td>
      <td class="text-dark"><?= $datos->Tipo_Entrada ?></td>
      <td class="text-dark"><?= $datos->Fecha_Entrada ?></td>
      <td class="text-dark"><?= $datos->Proovedor?></td>
      <td class="text-dark"><?= $datos->Cantidad?></td>
      <td class="text-dark"><?= $datos->Clasifiacacion?></td>
      <td class="text-dark"><?= $datos->Costo_unitario?>$</td>
      <td class="text-dark"><?= $datos->Especificaciones?></td>
    <?php }
    ?>
    </tr>
                           
    <tr>
     
    <tr>
      
    </tr>
  </tbody>
</table>
</div>
</div>



    




    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="datatables/datatables.min.js"></script>  

    <script src="datatables/datatables.min.js"></script>
    <script type="text/javascript" src="main.js"></script>  
</body>
</html>