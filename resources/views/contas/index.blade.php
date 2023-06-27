@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Contas</h1>
            <p>{{ Session::get('message') }}</p>          

            <table class="table table-bordered table-hover table-condensed">
                <thead>
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>
                            Nome
                        </th>
                        <th>
                            Descrição
                        </th>
                        
                        <th>
                        Editar
                        </th>
                        <th>
                            Ver
                        </th>
                        <th>
                        Deletar
                        </th>
                    </tr>
                </thead>
                <tbody>
                @foreach($todascontas as $conta)
                    <tr>
                        <td>
                            {{ $conta -> id }}
                        </td>
                        <td>
                            {{ $conta -> nome }}
                        </td>
                        <td>
                            {{ $conta -> descricao }}
                        </td>
                        
                        <td>
                            <a href="/contas/{{ $conta->id }}/edit">Editar</a>
                        </td>
                        <td>
                            <a href="/contas/{{ $contas->id }}"> <span class="glyphicon glyphicon-eye-open"></span></a>
                        </td>
                        <td>
                            <form action="/contas/{{ $conta->id }}" method="POST">
                                <input type="hidden" name="_method" value="delete">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" name="name" value="Apagar">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div>
    </div>
</div>
@endsection