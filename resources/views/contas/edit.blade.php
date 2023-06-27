@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-offset-2 col-md-8">
			<h1>Editar Conta</h1>
			<form action="/contas/{{ $detailpage->id }}" method="POST">
				<input type="text" name="nome" value="{{ $detailpage->nome }}" placeholder="Nome">
				{{ ($errors->has('nome')) ? $errors->first('nome') : '' }}<br>
				<textarea name="descricao" rows="8" cols="40" placeholder="Descricao">{{ $detailpage->descricao }}</textarea>
				{{ ($errors->has('descricao')) ? $errors->first('descricao') : '' }}<br>
				<input type="text" name="tipo" value="{{ $detailpage->tipo }}" placeholder="Tipo da Transação">
				{{ ($errors->has('tipo')) ? $errors->first('tipo') : '' }}<br>
				<input type="hidden" name="_method" value="put">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="submit" name="name" value="Salvar">
			</form>
		</div>
	</div>
</div>

@endsection