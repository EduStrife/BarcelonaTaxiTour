<?php
      include_once 'funciones/sesiones.php';
        include_once 'templates/header.php';
        include_once 'funciones/funciones.php';

        include_once 'templates/barra.php';

        include_once 'templates/navegacion.php';
?>




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Crear taxis
        <small>llena el formulario para añadir un taxi</small>
      </h1>
    </section>

        <div class="row">
                <div class="col-md-8">
                <!-- Main content -->
                <section class="content">

                  <!-- Default box -->
                  <div class="box">
                    <div class="box-header with-border">
                      <h3 class="box-title">Crear taxi</h3>
                    </div>
                    <div class="box-body">
                        <!-- form start -->
                        <form role="form" name="guardar-registro" id="guardar-registro-archivo" method="post" action="modelo-taxi.php" enctype="multipart/form-data">
                              <div class="box-body">
                                    <div class="form-group">
                                          <label for="nombre_taxi">Nombre:</label>
                                          <input type="text" class="form-control" id="nombre_taxi" name="nombre_taxi" placeholder="Nombre">
                                    </div>
                                    <div class="form-group">
                                          <label for="apellido_taxi">Apellido:</label>
                                          <input type="text" class="form-control" id="apellido_taxi" name="apellido_taxi" placeholder="Nombre">
                                    </div>
                                    <div class="form-group">
                                        <label for="biografia_taxi">Biografía: </label>
                                        <textarea class="form-control" id="biografia_taxi" name="biografia_taxi" rows="8" placeholder="Biografía"></textarea>
                                    </div>
                                    <div class="form-group">
                                      <label for="imagen_taxi">Imagen:</label>
                                      <input type="file" id="imagen_taxi" name="archivo_imagen">
                                      <p class="help-block">Añada la imagen del taxi aquí</p>
                                    </div>
                              </div>
                              <!-- /.box-body -->

                              <div class="box-footer">
                                  <input type="hidden" name="registro" value="nuevo">
                                  <button type="submit" class="btn btn-primary" id="crear_registro">Añadir</button>
                              </div>
                        </form>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->

                </section>
                <!-- /.content -->

                </div>
        </div>
  </div>
  <!-- /.content-wrapper -->

  <?php
          include_once 'templates/footer.php';
  ?>

