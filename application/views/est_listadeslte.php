<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Lista de Estudiantes deshabilitados</h1>
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
                <h3 class="card-title">Estudiantes deshabilitados</h3><br>
                <a href="<?php echo base_url();?>index.php/estudiantelte/indexlte">
                    <button type="button" class="btn btn-warning">Ver lista Habilitados</button>
                </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">


            <table class="table">
                <tr>
                    <td>No</td>
                    <td>Nombre</td>
                    <td>Apellido P.</td>
                    <td>Apellido M.</td>
                    <td>Nota</td>
                    <td>Habilitar</td>
                </tr>
                
                <?php
                $indice=1;
                    foreach($estudiantes->result() as $row)
                    {
                        ?>
                            <tr>
                                
                                <td><?php echo $indice; ?></td>
                                <td><?php echo $row->nombre; ?></td>
                                <td><?php echo $row->primerApellido; ?></td>
                                <td><?php echo $row->segundoApellido; ?></td>
                                <td><?php echo $row->nota; ?></td>
                                
                                
                                <td>

                                <?php            
                                    echo form_open_multipart('estudiantelte/habilitarbdlte');
                                ?>
                                    <input type="hidden" name="idestudiante" value="<?php echo $row->idEstudiante;?>">
                                    <button type="submit" class="btn btn-warning">Habilitar</button>
                                <?php            
                                    echo form_close();
                                ?>

                                </td>
                            </tr>
                        <?php
                        $indice++;
                    }
                ?>
            </table>
       
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