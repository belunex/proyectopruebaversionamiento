<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Actividades</h1>
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
                <h2 class="card-title">Tareas Pendientes</h2><br>

                    <a href="<?php echo base_url();?>index.php/estudiantelte/agregarTarealte">
                        <button type="button" class="btn btn-primary">Agregar Tarea</button>
                    </a>
                    

                    <a href="<?php echo base_url();?>index.php/usuarios/logout">
                        <button type="button" class="btn btn-danger">Cerrar Sesion</button>
                    </a>

                    <br>
                   
              </div>
              <!-- /.card-header -->
                <div class="card-body">              
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Nro.</th>
                      <th>Materia</th>
                      <th>Actividad</th>
                      <th>Aula</th>
                      <th>Creacion</th>
                    </tr>
                    </thead>
                    <tbody>
                  <?php
                  $indice=1;
                      foreach($cursos->result() as $row)
                      {
                  ?>    
                    <tr>
                      <td><?php echo $indice; ?></td>
                      <td><?php echo $row->materia; ?></td>
                      <td><?php echo $row->tareaAsignacion; ?></td>
                      <td><?php echo $row->aula; ?></td>
                      <td><?php echo $row->creado; ?></td>
                    </tr>
                  <?php
                  $indice++;
                      }
                  ?>          
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>Nro.</th>
                      <th>Materia</th>
                      <th>Actividad</th>
                      <th>Aula</th>
                      <th>Creacion</th>
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