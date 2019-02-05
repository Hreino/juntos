@extends('layouts.app')

@section('content')

    <div class="container">
        {{-- Empresa A --}}
        <table class="table  table-bordered">
            <thead class="text-center">
                <tr>
                    <th colspan="4" class="bg-app" style="border-bottom:3px solid black">
                        <h3>Listado de Presupuestos</h3>
                    </th>
                </tr>
                <tr>
                    <th colspan="4" class="bg-app" style="border-bottom:3px solid black">
                        <h3>SERTRACEN</h3>
                    </th>
                </tr>
            </thead>

            <tbody>
                @if (count($SERTRACEN)==0)
                    <tr>
                        <td class="text-center">
                            <h3>No hay usuarios que recibirán coaching de esta empresa</h3>
                        </td>
                    </tr>
                @else
                    <tr class="text-center label">
                        <td>Nombre del usuario</td>
                        <td>Mes</td>
                        <td>Detalles</td>
                    </tr>
                    @foreach ($SERTRACEN as $item)
                        <tr class="text-center">
                            <td>{{$item->name}}</td>
                            <td>{{$item->mes}}</td>
                            <td><a  href="{{Route('budget.show', $item->id)}}" class="btn  btn-default-app">Ver Detalles </a></td>

                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        {{-- Empresa A --}}
        <hr>
    {{-- Empresa B --}}
        <table class="table  table-bordered">
            <thead class="text-center">
                
                <tr>
                    <th colspan="4" class="bg-app" style="border-bottom:3px solid black">
                        <h3>DIARIO EL MUNDO</h3>
                    </th>
                </tr>
            </thead>
    
            <tbody>
                @if (count($DIARIOELMUNDO)==0)
                    <tr>
                        <td class="text-center">
                            <h3>No hay usuarios que recibirán coaching de esta empresa</h3>
                        </td>
                    </tr>
                @else
                    <tr class="text-center label">
                        <td>Nombre del usuario</td>
                        <td>Mes</td>
                        <td>Detalles</td>
                    </tr>
                    @foreach ($DIARIOELMUNDO as $item)
                        <tr class="text-center">
                            <td>{{$item->name}}</td>
                            <td>{{$item->mes}}</td>
                            <td><a  href="{{Route('budget.show', $item->id)}}" class="btn  btn-default-app">Ver Detalles </a></td>

                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        {{-- Empresa B --}}


        <hr>
    {{-- Empresa C --}}
        <table class="table  table-bordered">
            <thead class="text-center">
               
                <tr>
                    <th colspan="4" class="bg-app" style="border-bottom:3px solid black">
                        <h3>RED-INTELFON</h3>
                    </th>
                </tr>
            </thead>
    
            <tbody>
                @if (count($REDINTELFON)==0)
                    <tr>
                        <td class="text-center">
                            <h3>No hay usuarios que recibirán coaching de esta empresa</h3>
                        </td>
                    </tr>
                @else
                    <tr class="text-center label">
                        <td>Nombre del usuario</td>
                        <td>Mes</td>
                        <td>Detalles</td>
                    </tr>
                    @foreach ($REDINTELFON as $item)
                        <tr class="text-center">
                            <td>{{$item->name}}</td>
                            <td>{{$item->mes}}</td>
                            <td><a  href="{{Route('budget.show', $item->id)}}" class="btn  btn-default-app">Ver Detalles </a></td>

                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        {{-- Empresa C --}}

        <hr>
    {{-- Empresa D --}}
        <table class="table  table-bordered">
            <thead class="text-center">
                
                <tr>
                    <th colspan="4" class="bg-app" style="border-bottom:3px solid black">
                        <h3>JUGUETON</h3>
                    </th>
                </tr>
            </thead>
    
            <tbody>
                @if (count($JUGUETON)==0)
                    <tr>
                        <td class="text-center">
                            <h3>No hay usuarios que recibirán coaching de esta empresa</h3>
                        </td>
                    </tr>
                @else
                <tr class="text-center label">
                    <td>Nombre del usuario</td>
                    <td>Mes</td>
                    <td>Detalles</td>
                </tr>
                    @foreach ($JUGUETON as $item)
                        <tr class="text-center "> 
                            <td>{{$item->name}}</td>
                            <td>{{$item->mes}}</td>
                            <td><a  href="{{Route('budget.show', $item->id)}}" class="btn  btn-default-app">Ver Detalles </a></td>

                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        {{-- Empresa D --}}

        <hr>
    {{-- Empresa E --}}
        <table class="table  table-bordered">
            <thead class="text-center">
               
                <tr>
                    <th colspan="4" class="bg-app" style="border-bottom:3px solid black">
                        <h3>ALSASA</h3>
                    </th>
                </tr>
            </thead>
    
            <tbody>
                @if (count($ALSASA)==0)
                    <tr>
                        <td class="text-center">
                            <h3>No hay usuarios que recibirán coaching de esta empresa</h3>
                        </td>
                    </tr>
                @else
                    <tr class="text-center label">
                        <td>Nombre del usuario</td>
                        <td>Mes</td>
                        <td>Detalles</td>
                    </tr>
                    @foreach ($ALSASA as $item)
                        <tr class="text-center">
                            <td>{{$item->name}}</td>
                            <td>{{$item->mes}}</td>
                            
                            <td><a  href="{{Route('budget.show', $item->id)}}" class="btn  btn-default-app">Ver Detalles </a></td>

                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        {{-- Empresa E --}}

        <hr>
        {{-- Empresa F--}}
            <table class="table  table-bordered">
                <thead class="text-center">
                   
                    <tr>
                        <th colspan="4" class="bg-app" style="border-bottom:3px solid black">
                            <h3>GRUPO BORJA</h3>
                        </th>
                    </tr>
                </thead>
        
                <tbody>
                    @if (count($GBORJA)==0)
                        <tr>
                            <td class="text-center">
                                <h3>No hay usuarios que recibirán coaching de esta empresa</h3>
                            </td>
                        </tr>
                    @else
                        <tr class="text-center label">
                            <td>Nombre del usuario</td>
                            <td>Mes</td>
                            <td>Detalles</td>
                        </tr>
                        @foreach ($GBORJA as $item)
                            <tr class="text-center">
                                <td>{{$item->name}}</td>
                                <td>{{$item->mes}}</td>
                                
                                <td><a  href="{{Route('budget.show', $item->id)}}" class="btn  btn-default-app">Ver Detalles </a></td>
    
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
            {{-- Empresa E --}}
    </div>
@endsection