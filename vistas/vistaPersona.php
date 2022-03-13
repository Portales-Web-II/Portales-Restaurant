<?php
require_once('../controladores/controladorPersona.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link href="../public/jquery/css/jquery.dataTables.min.css" media="all" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- Custom styles for this template -->
    <link href="../public/css/app.css" rel="stylesheet">
    <link href="../public/datatables/datatables.min.css" media="all" rel="stylesheet" type="text/css" />
    <!-- bootstrap-daterangepicker -->
    <link href="../public/pnotify/dist/pnotify.css" media="all" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../styles/estilos.css">
    <script src="../js/menu.js"></script>
    <title>Portales Restaurant</title>
</head>

<body id="body-pd">
  
  <header class="header" id="header">
    <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
    <div class="header_img"> <img src="../src/imgs/logoportalesw-preview.png" > </div>
  </header>
  <div class="l-navbar" id="nav-bar">
    <nav class="nav">
      <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">Portales Restaurant</span> </a>
        <div class="nav_list">
          <a href="../index.php" class="nav_link"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Inicio</span> </a>
          <a href="#" class="nav_link"> <i class='bx bx-shopping-bag nav_icon'></i> <span class="nav_name">Ventas</span> </a>
          <a href="#" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Usuarios</span> </a>
          <a href="#" class="nav_link active"> <i class='bx bx-group nav_icon'></i> <span class="nav_name">Empleado</span> </a>
          <a href="../vistas/vistaProductos.php" class="nav_link"> <i class='bx bx-cabinet nav_icon'></i> <span class="nav_name">Inventario</span> </a>
        </div>
      </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
    </nav>
  </div>

    <div class="container-fluid bg-light table-responsive">
        <div>
            <h4>
                Personas
            </h4>
        </div>

        <table id="tabla_personas" class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Identidad</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Acciones</th>
                    <th scope="col">Estado</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $personas_listar = personas_listar();
                //echo $row["idPersona"];
                //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
                foreach ($personas_listar as $row) {
                    echo '<tr id=' . $row["idPersona"] . '>';
                    echo '<td>' . $row["idPersona"] . '</td>';
                    echo '<td>' . $row["identidad"] . '</td>';
                    echo '<td>' . $row["nombre"] . '</td>';
                    echo '<td>' . $row["apellido"] . '</td>';
                    echo '<td>' . $row["telefono"] . '</td>';
                    echo '<td>' . $row["nombreCargo"] . '</td>';
                    echo '<td>' . $row["direccion"] . '</td>';
                    echo '<td>' . $row["estado"] . '</td>';
                    echo '<td>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_personas"
                data-idPersona="' . $row["idPersona"] . '"
                data-identidad="' . $row["identidad"] . '"																
                data-nombre="' . $row["nombre"] . '"															
                data-apellido="' . $row["apellido"] . '"															
                data-telefono="' . $row["telefono"] . '"															
                data-idCargo="' . $row["idCargo"] . '"															
                data-nombreCargo="' . $row["nombreCargo"] . '"															
                data-direccion="' . $row["direccion"] . '"															            															
                data-estado="' . $row["estado"] . '"															            															
                data-accion=2															
                ><i class="bx bx-edit-alt"></i></button>
                &nbsp&nbsp&nbsp<button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal_eliminar_personas"
                data-idPersona="' . $row["idPersona"] . '"															
                data-accion=3															
                ><i class="bx bxs-trash"></i></button>															
                </td>';
                    echo '</tr>';
                }

                ?>
            </tbody>
        </table>
    </div>




    <div id="modal_personas" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal_personas" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-6 shadow">
                <div class="modal-header border-bottom-0">
                    <h5 class="modal-title">Datos De Persona</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body py-0">
                    <div id="testmodal2" style="padding: 5px 20px;">
                        <form id="antoform2" class="form-horizontal calender" role="form">

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Identidad</label>
                                <div class="">
                                    <input type="text" class="form-control" id="identidad" name="identidad">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Nombre</label>
                                <div class="">
                                    <input type="text" class="form-control validatorword" id="nombre" name="nombre">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Apellido</label>
                                <div class="">
                                    <input type="text" class="form-control validatorword" id="apellido" name="apellido">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Telefono</label>
                                <div class="">
                                    <input type="text" class="form-control" id="telefono" name="telefono">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-sm-3 control-label">Cargo</label>
                                <div class="">
                                    <select id="idCargo" name="idCargo" class="select2_single form-control country">
                                        <option></option>
                                        <?php
                                        $cargos_listar = cargos_listar();

                                        try {

                                            foreach ($cargos_listar as $row) {
                                                echo '<option value=' . $row["idCargos"] . '>' . $row["nombreCargo"] . '</option>';
                                            }
                                        } catch (\Throwable $th) {
                                            //throw $th;
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Direccion</label>
                                <div class="">
                                    <input type="text" class="form-control" id="direccion" name="direccion">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Estado</label>
                                <div class="">
                                    <select id="estado" name="estado" class="select2_single form-control country">
                                        <option></option>
                                        <option value="activo">Activo</option>
                                        <option value="inactivo">Inactivo</option>
                                    </select>
                                </div>
                            </div>

                        </form>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light antoclose2" data-bs-dismiss="modal">Cerrar</button>
                            <button type="button" id="btn_guardar_personas" class="btn btn-primary antosubmit2">Guardar</button>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div id="modal_eliminar_personas" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal_eliminar_personas" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-6 shadow">
                <div class="modal-header border-bottom-0">
                    <h5 class="modal-title">Eliminar Persona</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body py-0">
                    <div id="testmodal2" style="padding: 5px 20px;">
                        <form id="antoform2" class="form-horizontal calender" role="form">

                            <div class="form-group">
                                <label class="control-label" style="font-size: 20px">¿Seguro que desea eliminar este registro?</label>
                            </div>

                        </form>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light antoclose2" data-bs-dismiss="modal">Cerrar</button>
                            <button type="button" id="btn_eliminar_personas" class="btn btn-primary antosubmit2">Guardar</button>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
<script type="text/javascript" src="../public/jquery/js/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="../public/js/app.js"></script>
<script type="text/javascript" src="../public/datatables/dataTables.min.js"></script>
<script type="text/javascript" src="../public/pnotify/dist/pnotify.js"></script>
<script type="text/javascript">
    var idPersona = null;
    var table = null;
    var identidad = null;
    var nombre = null;
    var apellido = null;
    var telefono = null;
    var idCargo = null;
    var nombreCargo = null;
    var direccion = null;
    var accion = null;
    var funcion = null;
    var estado = null;

    $(document).ready(function() {
        PNotify.prototype.options.styling = "fontawesome";

        table = $("#tabla_personas").DataTable({

            'language': {

                "decimal": "",
                "emptyTable": "Datos no disponibles",
                //"info": "Mostrando desde START a END de TOTAL registros",
                "infoEmpty": "Mostrando desde 0 a 0 de 0 registros",
                //"infoFiltered": "(Filrado de MAX registros totales)",
                "infoPostFix": "",
                "thousands": ",",
                //"lengthMenu": "Mostrar MENU registros",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                },
                "aria": {
                    "sortAscending": ": activar ordenamiento por columna ascendente",
                    "sortDescending": ": activar ordenamiento por columna descendente"
                }
            },
            dom: "lfBtipr",
            buttons: [{
                text: "Agregar",
                className: "btn btn-primary glyphicon glyphicon-plus",
                action: function(e, dt, node, config) {
                    funcion = "guardar_personas";
                    accion = 1;
                    $("#modal_personas").modal("show");

                }
            }]
        });

        $('.dt-button').removeClass('dt-button');

        $("#modal_personas").on("show.bs.modal", function(e) {
            var triggerLink = $(e.relatedTarget);
            idPersona = triggerLink.data("idpersona");
            identidad = triggerLink.data("identidad");
            nombre = triggerLink.data("nombre");
            apellido = triggerLink.data("apellido");
            telefono = triggerLink.data("telefono");
            idCargo = triggerLink.data("idcargo");
            direccion = triggerLink.data("direccion");
            estado = triggerLink.data("estado");

            $("#idPersona").val(idPersona);
            $("#identidad").val(identidad);
            $("#nombre").val(nombre);
            $("#apellido").val(apellido);
            $("#telefono").val(telefono);
            $("#idCargo").val(idCargo);
            $("#direccion").val(direccion);
            $("#estado").val(estado);

        });

        $("#modal_eliminar_personas").on("show.bs.modal", function(e) {
            var triggerLink = $(e.relatedTarget);
            idPersona = triggerLink.data("idpersona");

            $("#idPersona").val(idPersona);


        });

        $("#tabla_personas tbody").on("click", "tr", function() {
            rowNumber = parseInt(table.row(this).index());
            funcion = "guardar_personas";
            accion = 2;
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        });

        $(".modal-footer").on("click", "#btn_guardar_personas", function() {

            //idPersona = $("#idPersona").val();
            identidad = $("#identidad").val();
            nombre = $("#nombre").val();
            apellido = $("#apellido").val();
            telefono = $("#telefono").val();
            idCargo = $("#idCargo").val();
            direccion = $("#direccion").val();
            estado = $("#estado").val();

            if (identidad == null || identidad == '') {

                new PNotify({
                    title: 'Valor Requerido',
                    text: 'Debe especificar un valor para "Identidad"',
                    type: 'error',
                    shadow: true
                });

                return false;
            }

            if (nombre == null || nombre == '') {

                new PNotify({
                    title: 'Valor Requerido',
                    text: 'Debe especificar un valor para "Nombre"',
                    type: 'error',
                    shadow: true
                });

                return false;
            }
            if (apellido == null || apellido == '') {

                new PNotify({
                    title: 'Valor Requerido',
                    text: 'Debe especificar un valor para "apellido"',
                    type: 'error',
                    shadow: true
                });

                return false;
            }
            if (telefono == null || telefono == '') {

                new PNotify({
                    title: 'Valor Requerido',
                    text: 'Debe especificar un valor para "telefono"',
                    type: 'error',
                    shadow: true
                });

                return false;
            }
            if (idCargo == null || idCargo == '') {

                new PNotify({
                    title: 'Valor Requerido',
                    text: 'Debe especificar un valor para "Cargo"',
                    type: 'error',
                    shadow: true
                });

                return false;
            }

            if (direccion == null || direccion == '') {

                new PNotify({
                    title: 'Valor Requerido',
                    text: 'Debe especificar un valor para "Direccion"',
                    type: 'error',
                    shadow: true
                });

                return false;
            }

            console.log(idPersona + ' ' + nombre + ' ' +
                apellido + ' ' +
                telefono + ' ' +
                idCargo + ' ' +
                direccion + ' ' + funcion + ' ' + estado)

            guardar_personas();

        });

        $(".modal-footer").on("click", "#btn_eliminar_personas", function() {
            funcion = "guardar_personas";
            accion = 3;
            guardar_personas();
        });


    });


    function guardar_personas() {
        $.ajax({
            type: "post",
            url: '../controladores/controladorPersona.php',
            data: {
                "idPersona": idPersona,
                "identidad": identidad,
                "nombre": nombre,
                "apellido": apellido,
                "telefono": telefono,
                "idCargo": idCargo,
                "direccion": direccion,
                "estado": estado,
                "funcion": funcion,
                accion: accion
            },
            success: function(response) {


                if (response.msgError != null) {
                    titleMsg = "Error al Guardar";
                    textMsg = '';
                    typeMsg = "error";

                    if (accion == 1 || accion == 2) {
                        $("#modal_personas").modal("show");
                    } else if (accion == 3) {
                        $("#modal_eliminar_personas").modal("show");
                    }
                } else {

                    titleMsg = "Datos Guardados";
                    textMsg = '';
                    typeMsg = "success";
                    console.log(response);

                    $("#modal_personas").modal("hide");
                    $("#modal_eliminar_personas").modal("hide");
                    $(".modal-backdrop").remove();

                    for (var i = 0; i < response.length; i++) {
                        var row = response[i];
                        console.log(row[0] + ' ' + row[1] + ' ' + row[2] + ' ' + row[3] + ' ' + row[4]);
                        var nuevaFilaDT = [
                            row.idPersona, row.identidad, row.nombre, row.apellido, row.telefono, row.nombreCargo, row.direccion, row.estado

                            , '<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_personas"' +
                            'data-idPersona="' + row.idPersona + '" ' +
                            'data-identidad="' + row.identidad + '" ' +
                            'data-nombre="' + row.nombre + '" ' +
                            'data-apellido="' + row.apellido + '" ' +
                            'data-telefono="' + row.telefono + '" ' +
                            'data-idCargo="' + row.idCargo + '" ' +
                            'data-nombreCargo="' + row.nombreCargo + '" ' +
                            'data-direccion="' + row.direccion + '" ' +
                            'data-estado="' + row.estado + '" ' +
                            'data-accion=2 ' +
                            '><i class="bx bx-edit-alt"></i></button>' +
                            '&nbsp&nbsp&nbsp<button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal_eliminar_personas"' +
                            'data-idPersona="' + row.idPersona + '" ' +
                            'data-accion=3 ' +
                            '><i class="bx bxs-trash"></i></button>' +
                            ''
                        ];


                        if (accion == 1) {
                            $("#modal_personas").modal("hide");
                            $(".modal-backdrop").remove();
                            table.row.add(nuevaFilaDT).draw();

                        } else if (accion == 2) {
                            $("#modal_personas").modal("hide");
                            $(".modal-backdrop").remove();
                            table.row(rowNumber).data(nuevaFilaDT);
                        }
                    }
                    if (accion == 3) {
                        $("#modal_eliminar_personas").modal("hide");
                        $(".modal-backdrop").remove();
                        table.row(rowNumber).remove().draw();

                    }
                }

                new PNotify({
                    title: titleMsg,
                    text: textMsg,
                    type: typeMsg,
                    shadow: true
                });

            },
            error: function(xhr, status, error) {
                alert(xhr.responseText);
            }
        });
    }
</script>