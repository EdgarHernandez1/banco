@extends('layouts.principal')

@section('hijos')
<h1>Modulo de Retiros Afiliado: {{$afiliado->id}} {{$afiliado->nombre}} {{$afiliado->apellido}}</h1>


<table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Codempleado</th>
                <th>Codafiliado</th>
                <th>Fecha</th>
                <th>Monto</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach($retiros as $retiro)
            @if($retiro->codafiliado==$afiliado->id)
            </tr>
            <th>{{$retiro->id}}</th>
                <th>{{$retiro->codempleado}}</th>
                <th>{{$retiro->codafiliado}}</th>
                <th>{{$retiro->fecha}}</th>
                <th>{{$retiro->monto}}</th>
                <th>
                
                </th>
             </tr>

             @endif
            @endforeach
    
        </tbody>


    </table>

@endsection

