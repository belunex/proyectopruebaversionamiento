<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Agregar foto del Estudiante</h1>
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
                <h3 class="card-title">Adjunte la foto del o la estudiante</h3><br>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

            <?php            
                echo form_open_multipart('estudiantelte/subir');
            ?>
                <input type="hidden" name="idestudiante" value="<?php echo $idEstudiante; ?>">

                <input type="file" name="userfile" class="form-control"><br>
                
                <button type="submit" class="btn btn-success">Agregar</button>

                <a href="<?php echo base_url();?>index.php/estudiantelte/indexlte">
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