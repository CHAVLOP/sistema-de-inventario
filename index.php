<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/inicio.css">
    
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="datatables/datatables.min.css">
    <link rel="stylesheet" href="css/tablas.css">
    <link rel="stylesheet" href="datatables/DataTables-1.12.1/css/dataTables.bootstrap.css">
    <link rel="stylesheet" href="datatables/DataTables-1.12.1/css/dataTables.bootstrap4.min.css">

    <title>Inicio</title>

    
</head>
<body>
    <div id="sidemenu" class="menu-collapsed">

        <div id="header">
            <div id="tittle"><span>Inventario</span></div>
            <div id="menu-btn">
                <div class="btn-hamburger"></div>
                <div class="btn-hamburger"></div>
                <div class="btn-hamburger"></div>
            </div>
        </div>

        <div id="profile">
            <div id="photo"><img src="img/nuevo.png" alt=""></div>
            <div id="name"><span>Sistema de inventario</span></div>
        </div>

        <div id="menu-items">
            <div class="item">
                <a href="#">
                    <div class="icon"><img src="iconos/entradas.png" alt=""></div>
                    <div class="tittle"><span>Entradas de productos</span></div>
                </a>
            </div>

            </div>
            
            <div id="menu-items">
                <div class="item">
                    <a href="#">
                        <div class="icon"><img src="iconos/salidas.png" alt=""></div>
                        <div class="tittle"><span>salidas de productos</span></div>
                    </a>
                </div> 
                
        </div>
        <div id="menu-items">
            <div class="item">
                <a href="#">
                    <div class="icon"><img src="iconos/reportes.png" alt=""></div>
                    <div class="tittle"><span>Generar reporte</span></div>
                </a>
            </div> 
        <div class="item separator"></div>
        
        </div>

    </div>
    <div id="main-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table id="tablaProductos" class="table table-striped table-bordered table-condensed">
                        <thead class="text-center">
                            <tr class="col-5">
                                <th class="text-dark">Codigo</th>
                                <th class="text-dark">Departamento</th>
                                <th class="text-dark">Producto</th>
                                <th class="text-dark">Tipo_entrada</th>
                                <th class="text-dark">Fecha_de_entrada</th>
                                <th class="text-dark">Proveedor</th>
                                <th class="text-dark">Cantidad</th>
                                <th class="text-dark">Unidad</th>
                                <th class="text-dark">Costo_unitario</th>
                                <th class="text-dark">Especificaciones</th>
                                <th class="text-dark">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include "conexion.php";
                            $sql = $conexion -> query("select * from entradas e INNER JOIN departamentos d ON e.Id_Dpto = d.Id_Dpto INNER JOIN unidades u ON e.Id_Unidad = u.Id_unidad");
                            while($datos = $sql->fetch_object()){
                            ?>
                            <tr>
                                <td class="text-dark"><?= $datos->Id_entrada?></td>
                                <td class="text-dark"><?= $datos->Nombre_Dpto?></td>
                                <td class="text-dark"><?= $datos->Nombre_Producto ?></td>
                                <td class="text-dark"><?= $datos->Tipo_Entrada?></td>
                                <td class="text-dark"><?= $datos->Fecha_Entrada?></td>
                                <td class="text-dark"><?= $datos->Proovedor?></td>
                                <td class="text-dark"><?= $datos->Cantidad?></td>
                                <td class="text-dark"><?= $datos->Clasifiacacion?></td>
                                <td class="text-dark"><?= $datos->Costo_unitario?>$</td>
                                <td class="text-dark"><?= $datos->Especificaciones?></td>
                                <td>
                                     <div class="text-center">
                                        <div class="btn-group">
                                             <a href="agregar.php"><button type="button" class="btn btn-success btnGuardar" style="margin: 5px;">Nuevo</button></a>
                                             <button class="btn btn-primary btnEditar"style="margin: 5px;">Editar</button>
                                             <button class="btn btn-danger btnBorrar"style="margin: 5px;">Borrar</button>
                                         </div>
                                     </div>
                        </td>
                            </tr>
                        <?php }
                        ?>
                           
                        </tbody>
                    </table>
                    </div>

                </div>
            </div>
        </div>      
    </div>
                
    <script>
        const btn = document.querySelector('#menu-btn');
        const menu = document.querySelector('#sidemenu');
        btn.addEventListener ('click', e =>{
            menu.classList.toggle("menu-expanded");
            menu.classList.toggle("menu-collapsed");
            document.querySelector('body').classList.toggle('body-expanded');
            
        });
    </script>

    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="datatables/datatables.min.js"></script>  

    <script src="datatables/datatables.min.js"></script>
    <script type="text/javascript" src="main.js"></script>  
    
    
</body>
</html>