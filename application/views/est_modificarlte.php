<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Modificar Estudiante</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Modifique el formulario para actualizar un estudiante</h3><br>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

            <?php     
                foreach($infoestudiante->result() as $row)
                {       
                    echo form_open_multipart('estudiantelte/modificarbdlte');
            ?>
                    <input type="hidden" name="idestudiante" class="form-control" value="<?php echo $row->idEstudiante?>">

                    <input type="text" name="nombre" placeholder="Escriba el nombre" class="form-control" value="<?php echo $row->nombre?>"><br>

                    <input type="text" name="apellido1" placeholder="Escriba el primer apellido" class="form-control" value="<?php echo $row->primerApellido?>"><br>

                    <input type="text" name="apellido2" placeholder="Escriba el segundo apellido" class="form-control" value="<?php echo $row->segundoApellido?>"><br>

                    <input type="text" name="nota" placeholder="Ingrese la nota" class="form-control" value="<?php echo $row->nota?>"><br>
                    
                    <button type="submit" class="btn btn-success">Modificar</button>
                    
                    <a href="<?php echo base_url();?>index.php/estudiantelte/indexlte">
                        <button type="button" class="btn btn-danger">Cancelar</button>
                    </a>
            <?php            
                    echo form_close();
                }    
            ?>

                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->