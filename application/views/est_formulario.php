<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Agregar Actividades</h1>
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
                <h3 class="card-title">Rellene un formulario para asignar una Tarea</h3><br>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

            <?php            
                echo form_open_multipart('estudiantelte/agregarTareabdlte');
            ?>
                <input type="text" name="materia" placeholder="Escriba la materia" class="form-control"><br>

                <input type="text" name="tareaAsignacion" placeholder="Detalle la tarea Asignada" class="form-control"><br>

                <input type="text" name="aula" placeholder="Indique el curso" class="form-control"><br>
                
                <button type="submit" class="btn btn-success">Agregar</button>

                <a href="<?php echo base_url();?>index.php/estudiantelte/invitadolte">
                    <button type="button" class="btn btn-danger">Cancelar</button>
                </a>
            <?php            
                echo form_close();
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