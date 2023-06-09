<div class="container">
    <div class="horario">
         <h1>Usuarios</h1>
        
        <a href="addUser">
            <div class="btn btn-success float-rigth">
                Añadir
            </div>
        </a>
        <table class="table table-bordered">
         <thead>
           <tr>
             <th>Nombre Completo</th>
             <th>CI</th>
             <th>Perfil</th>
             <th>Correo</th>
             <th>Especialidad</th>
             <th>Celular</th>
             <th>Direccion</th>
             <th>Cargo</th>
             <th>Usuario</th>
             <th>Opciones</th>
           </tr>
         </thead>

         <tbody>
            @foreach ($perfiles as $p)
                <tr>
                    <td> {{ $p->nombre." ".$p->apellido }}</td>
                    <td> {{ $p->ci }} </td>
                    
                    <td> <img src="{{ asset($p->perfil) }}" alt="perfil" style="max-width: 40px"> </td>
                    <td> {{ $p->email }} </td>
                    <td> {{ $p->especialidad }} </td>
                    <td> {{ $p->celular }} </td>
                    <td> {{ $p->direccion }} </td>
                    <td> {{ $p->cargo }} </td>
                    <td> {{ $p->user }} </td>
                    <td>
                        <div class="d-inline">
                            <a href="delete?id={{$p->id}}" class="btn btn-danger" id="deleteUser">
                                <i class="fa fa-trash "></i>
                            </a>

                            <a href="lock?id={{$p->id}}" class="btn btn-warning ">
                                @if ($p->estado==1)
                                    <i class="fa fa-unlock text-success"></i>
                                @else
                                    <i class="fa fa-lock"></i>
                                @endif
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach
         </tbody>
       </table>
</div>

@push('scripts')
    <script src="{{ asset('js/app.js') }}"></script>
@endpush
     