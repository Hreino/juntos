@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="label">Listado de Presupuestos</h1>
        
        <table class="table table-hover table-stripped table-bordered">
            <thead class="text-center">
                <tr>
                    <th>Usuario</th>
                    <th>Mes</th>
                    <th>Coaching</th>
                    <td>Detalles</td>
                </tr>
            </thead>

            <tbody>
                @if (count($userBudgets)==0)
                    <tr class="text-center label">
                        <td colspan="4"><h1>Aún no has generado un presupuesto</h1></td>
                    </tr>
                @else
                    @foreach ($userBudgets as $presu)
                    <tr class="text-center">
                        <td>{{auth()->user()->name}}</td>
                        <td>{{$presu->mes}}</td>
                        <td>{{$presu->coaching}}</td>
                        <td>
                        
                                <a class="btn btn-default-app" href="{{Route('budget.show', $presu->id)}}">Ver Detalles </a>
                            
                        </td>
                    </tr>
                    @endforeach
            
                @endif
                    
                

                

                
            </tbody>
        </table>
    </div>
@endsection