@extends ('layouts.app')

@section('title','Listado de usuarios')

@section('icon_title')

    <i class="fa fa-fw fa-users"></i>

@endsection

@section('content')

     <!-- Default box -->
     <div class="card">
        <div class="card-header">
          <h3 class="card-title">Lista Usuarios</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>

            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i>
              </button>
              
            <a href="" title="Crear Usuario">
              <i class="fas fa-plus"></i>
            </a>
          </div>
        </div>

            <div class="card-body">
                <div class= "table-responsive">
                <table class="table">
                <thead>
                      <tr>                
                        <th>Nombres</th>
                        <th>Correos</th>
                        <th>Usuario</th>
                        <th>Fecha de Inicio</th>
                        <th>Fecha de Fin</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>              
                        <td>Nombres y ape</td>
                        <td>Correos</td>
                        <td>Usuario</td>
                        <td>Fecha de Inicio</td>
                        <td>Fecha Fin</td>
                      </tr>

                      <tr>
                        <td>Nombres 2</td>
                        <td>Correos 2</td>
                        <td>Usuario 2</td>
                        <td>Fecha de Inicio 2</td>
                        <td>Fecha Fin 2</td>
                      </tr>

                      <tr>
                        <td>Nombres 3</td>
                        <td>Correos 3</td>
                        <td>Usuario 3</td>
                        <td>Fecha de Inicio 3</td>
                        <td>Fecha Fin 3</td>
                      </tr>
                    </tbody>
                  </table>
                 </div>
               </div> 

        <!-- /.card-body -->
     <!--  <div class="card-footer">

          Footer

        </div>
        /.card-footer-->
</div>
     
@endsection