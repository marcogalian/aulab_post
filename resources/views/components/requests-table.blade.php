<table class="table table-striped table-hover border">
    
    <thead class="table-dark">
        <tr>
            <th scope='col'>#</th>
            <th scope='col'>Nombre</th>
            <th scope='col'>Correo</th>
            <th scope='col'>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($roleRequests as $user)
        <tr>
            <th scope='row'>{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                @switch($role)
                    @case('administrador')
                        <a href="{{ route('admin.setAdmin', $user)}}" class="btn btn-info text-white">{{$role}} activado</a>
                        @break

                    @case('revisor')
                        <a href="{{ route('admin.setRevisor', $user)}}" class="btn btn-info text-white">{{$role}} activado</a>
                        @break

                    @case('redactor')
                        <a href="{{ route('admin.setWriter', $user)}}" class="btn btn-info text-white">{{$role}} activado</a>
                        @break
                    @default
                @endswitch
            </td>
        </tr>
        @endforeach
    </tbody>
</table>