
@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Página de detalhe da Conta</h1>
			<h2>{{ $detailpage->nome }}</h2>
			<p>
				{{ $detailpage->descricao }}
			</p>
			<a href="/contas">Voltar</a>
		</div>
	</div>
</div>

@endsection