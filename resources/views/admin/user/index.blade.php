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
              
            <a href="{{ route('admin.user.create') }}" title="Crear Usuario">
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
                        @foreach ($users as $user)

                      <tr>              
                        <td><a href= "{{ route('admin.user.show' , $user->id) }}">{{ $user->first_name }}</a></td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->start_date }}</td>
                        <td>{{ $user->end_date }}</td>
                      </tr>

                    @endforeach
                                          </tbody>
                  </table>
                 </div>

                 {{ $users->render() }}
               </div> 

        <!-- /.card-body -->
     <!--  <div class="card-footer">

          Footer

        </div>
        /.card-footer-->
</div>
     
@endsection