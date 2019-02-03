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
                        <h3>Empresa A</h3>
                    </th>
                </tr>
            </thead>

            <tbody>
                @if (count($coachA)==0)
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
                    @foreach ($coachA as $item)
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
                        <h3>Empresa B</h3>
                    </th>
                </tr>
            </thead>
    
            <tbody>
                @if (count($coachB)==0)
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
                    @foreach ($coachB as $item)
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
                        <h3>Empresa C</h3>
                    </th>
                </tr>
            </thead>
    
            <tbody>
                @if (count($coachC)==0)
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
                    @foreach ($coachC as $item)
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
                        <h3>Empresa D</h3>
                    </th>
                </tr>
            </thead>
    
            <tbody>
                @if (count($coachD)==0)
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
                    @foreach ($coachD as $item)
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
                        <h3>Empresa E</h3>
                    </th>
                </tr>
            </thead>
    
            <tbody>
                @if (count($coachE)==0)
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
                    @foreach ($coachE as $item)
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