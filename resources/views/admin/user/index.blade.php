@extends ('layouts.app')

@section('title','Listado de usuarios')

@section('icon_title')

    <i class="fa fa-fw fa-users"></i>

@endsection

@section('breadcrumb')

 <li class="breadcrumb-item active"><a href="{{ route('admin.user.index') }}">Usuarios</li>

@endsection

@section('content')
   @component('component.card')

    @slot('title','Lista Usuarios')
    
    @slot('action')
    <a href="{{ route('admin.user.create') }}" title="Crear Usuario">
              <i class="fas fa-plus"></i>
            </a>
    @endslot

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
@endcomponent

@endsection