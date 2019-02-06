@extends('layouts.app')


@section('content')


<div class="container">
    <div class="row">

       
            <div class="col-md-12">
                    @if(session()->has('success'))
                    <div class="alert alert-danger col-md-12">
                        {{ session()->get('success') }}
                    </div>
                @endif
            </div>
      
        <div class="col-md-12">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th colspan="5" class="bg-app" style="border-bottom:2px solid black"><h3>Listado de Usuarios</h3></th>
                    </tr>
                </thead>
        
                <tbody>
                    <tr>
                        <td colspan="5" class="bg-app"><b>Empleados SERTRACEN</b></td>
                    </tr>
                    @if (count($SERTRACEN)==0)
                        <tr>
                            <td class="text-center" colspan="5">No hay usuarios registrados de esta empresa</td>
                        </tr>
                    @else
                        @foreach($SERTRACEN as $user)
                        <tr>
                            <td>{{$user -> name}}</td>
                            <td>{{$user -> email}}</td>
                            <td>{{$user -> company}}</td>
                            @if ($user ->role==0)
                                <td>Administrador</td>
                            @endif
                            @if ($user ->role==1)
                                <td>Coach</td>
                            @endif
                            @if ($user->role==2)
                                <td>Usuario</td>
                            @endif
                            <td>
                                <form action="{{Route('users.destroy',array($user->id))}}" method="post">
                                    {{csrf_field()}}
                                    <input name="_method" type="hidden" value="DELETE">
                                    <a href="{{Route('users.edit',array($user->id))}}" class="btn  btn-sec-app">Modificar</a>
                                    <button class="btn btn-app" type="Submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    @endif
                    

                    <tr>
                        <td colspan="5" class="bg-app"><b>DIARIO EL MUNDO</b></td>
                    </tr>
                   @if (count($DIARIOELMUNDO)==0)
                       <tr>
                           <td class="text-center" colspan="5">No hay usuarios registrados de esta empresa</td>
                       </tr>
                   @else
                        @foreach($DIARIOELMUNDO as $user)
                        <tr>
                            <td>{{$user -> name}}</td>
                            <td>{{$user -> email}}</td>
                            <td>{{$user -> company}}</td>
                            @if ($user ->role==0)
                                <td>Administrador</td>
                            @endif
                            @if ($user ->role==1)
                                <td>Coach</td>
                            @endif
                            @if ($user->role==2)
                                <td>Usuario</td>
                            @endif
                            <td>
                                <form action="{{Route('users.destroy',array($user->id))}}" method="post">
                                    {{csrf_field()}}
                                    <input name="_method" type="hidden" value="DELETE">
                                    <a href="{{Route('users.edit',array($user->id))}}" class="btn  btn-sec-app">Modificar</a>
                                    <button class="btn btn-app" type="Submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                   @endif

                    <tr>
                        <td colspan="5" class="bg-app"><b>RED-INTELFON</b></td>
                    </tr>

                    @if (count($REDINTELFON)==0)
                        <tr>
                            <td class="text-center" colspan="5">No hay usuarios registrados de esta empresa</td>
                        </tr>
                    @else
                        @foreach($REDINTELFON as $user)
                        <tr>
                            <td>{{$user -> name}}</td>
                            <td>{{$user -> email}}</td>
                            <td>{{$user -> company}}</td>
                            @if ($user ->role==0)
                                <td>Administrador</td>
                            @endif
                            @if ($user ->role==1)
                                <td>Coach</td>
                            @endif
                            @if ($user->role==2)
                                <td>Usuario</td>
                            @endif
                            <td>
                                <form action="{{Route('users.destroy',array($user->id))}}" method="post">
                                    {{csrf_field()}}
                                    <input name="_method" type="hidden" value="DELETE">
                                    <a href="{{Route('users.edit',array($user->id))}}" class="btn  btn-sec-app">Modificar</a>
                                    <button class="btn btn-app" type="Submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    @endif
                    

                        <tr>
                            <td colspan="5" class="bg-app"><b>JUGUETON</b></td>
                        </tr>

                        @if (count($JUGUETON)==0)
                            <tr>
                                <td class="text-center" colspan="5">No hay usuarios registrados de esta empresa</td>
                            </tr>
                        @else
                            @foreach($JUGUETON as $user)
                            <tr>
                                <td>{{$user -> name}}</td>
                                <td>{{$user -> email}}</td>
                                <td>{{$user -> company}}</td>
                                @if ($user ->role==0)
                                    <td>Administrador</td>
                                @endif
                                @if ($user ->role==1)
                                    <td>Coach</td>
                                @endif
                                @if ($user->role==2)
                                    <td>Usuario</td>
                                @endif
                                <td>
                                    <form action="{{Route('users.destroy',array($user->id))}}" method="post">
                                        {{csrf_field()}}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <a href="{{Route('users.edit',array($user->id))}}" class="btn  btn-sec-app">Modificar</a>
                                        <button class="btn btn-app" type="Submit">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach                            
                        @endif



                        <tr>
                            <td colspan="5" class="bg-app"><b>ALSASA</b></td>
                        </tr>

                        @if (count($ALSASA)==0)
                            <tr>
                                <td class="text-center" colspan="5">No hay usuarios registrados de esta empresa</td>
                            </tr>
                        @else
                            @foreach($ALSASA as $user)
                            <tr>
                                <td>{{$user -> name}}</td>
                                <td>{{$user -> email}}</td>
                                <td>{{$user -> company}}</td>
                                @if ($user ->role==0)
                                    <td>Administrador</td>
                                @endif
                                @if ($user ->role==1)
                                    <td>Coach</td>
                                @endif
                                @if ($user->role==2)
                                    <td>Usuario</td>
                                @endif
                                <td>
                                    <form action="{{Route('users.destroy',array($user->id))}}" method="post">
                                        {{csrf_field()}}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <a href="{{Route('users.edit',array($user->id))}}" class="btn  btn-sec-app">Modificar</a>
                                        <button class="btn btn-app" type="Submit">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach                            
                        @endif



                        <tr>
                            <td colspan="5" class="bg-app"><b>GRUPO BORJA</b></td>
                        </tr>

                        @if (count($GBORJA)==0)
                            <tr>
                                <td class="text-center" colspan="5">No hay usuarios registrados de esta empresa</td>
                            </tr>
                        @else
                            @foreach($GBORJA as $user)
                            <tr>
                                <td>{{$user -> name}}</td>
                                <td>{{$user -> email}}</td>
                                <td>{{$user -> company}}</td>
                                @if ($user ->role==0)
                                    <td>Administrador</td>
                                @endif
                                @if ($user ->role==1)
                                    <td>Coach</td>
                                @endif
                                @if ($user->role==2)
                                    <td>Usuario</td>
                                @endif
                                <td>
                                    <form action="{{Route('users.destroy',array($user->id))}}" method="post">
                                        {{csrf_field()}}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <a href="{{Route('users.edit',array($user->id))}}" class="btn  btn-sec-app">Modificar</a>
                                        <button class="btn btn-app" type="Submit">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach                            
                        @endif
                        

                </tbody>
            </table>
        </div>
    </div>
    

    
</div>

@endsection