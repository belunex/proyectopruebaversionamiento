<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Lista de Estudiantes</h1>
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
                <h3 class="card-title">Estudiante Habilitados</h3><br>
<br>
                    <a href="<?php echo base_url();?>index.php/estudiantelte/agregarlte">
                        <button type="button" class="btn btn-primary">Agregar Estudiante</button>
                    </a>

                    <a href="<?php echo base_url();?>index.php/estudiantelte/deshabilitadoslte">
                        <button type="button" class="btn btn-warning">Ver lista deshabilitados</button>
                    </a>

                    <a href="<?php echo base_url();?>index.php/usuarios/logout">
                        <button type="button" class="btn btn-danger">Cerrar Sesion</button>
                    </a>

                    <a href="<?php echo base_url();?>index.php/estudiantelte/cursolte">
                      <button type="button" class="btn btn-danger">Cancelar</button>
                    </a>

                    <br>
                    
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nro.</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Curriculum</th>
                  </tr>
                  </thead>
                  <tbody>
         <?php
        $indice=1;
            foreach($estudiante->result() as $row)
            {
        ?>    
                  <tr>
                    <td><?php echo $indice; ?></td>
                    <td><?php echo $row->nombre;?></td>
                    <td><?php echo $row->apellido; ?></td>
                    <td>
                      <?php 
                        $foto=$row->foto;
                        if($foto=="")
                        {
                      ?>
                          <img width="70" src="<?php echo base_url(); ?>uploads/documentos/default.png">
                      <?php
                        }
                        else
                        {
                      ?>
                            <a href="<?php echo base_url();?>uploads/documentos/<?php echo $foto;?>" target="_blank" download>
                            <img width="70" src="<?php echo base_url(); ?>uploads/documentos/pdficon.png">
                      <?php
                        }
                      ?>


                      <?php            
                            echo form_open_multipart('estudiantelte/subirpos');
                      ?>
                          <input type="hidden" name="idestudiante" value="<?php echo $row->idEstudiante; ?>">
                          <button type="submit" class="btn btn-primary">Subir</button>
                      <?php            
                          echo form_close();
                      ?>
                    </td>
                  </tr>
        <?php
        $indice++;
            }
        ?>          
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Nro.</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Curriculum</th>
                  </tr>
                  </tfoot>
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