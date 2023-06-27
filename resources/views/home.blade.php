@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            @if (Auth::guest())
            <div class="panel-heading">Bem vindo</div>

                <div class="panel-body">
                 Faça o login
             </div>
             @else
             <div class="panel-heading">Bem vindo, {{ Auth::user()->name }}</div>

             <div class="panel-body">
                 Você está logado!
             </div>
         </div>
         @endif
     </div>
 </div>
</div>
@endsection