@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Adicionar nova conta</h1>
			<form class="" action="/contas" method="POST">
				<div class="form-group">					
					<div class="col-md-12">
						<label for="nome">Digite o nome da Conta</label>
						<input id="textinput" name="nome" type="text" placeholder="" class="form-control input-md">
						<span class="help-block">{{ ($errors->has('nome')) ? $errors->first('nome') : '' }}</span>  
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-12">
					<label for="descricao">Digite a descrição da Conta</label>
						<textarea class="form-control" id="textarea" name="descricao"></textarea>
						<span class="help-block">{{ ($errors->has('descricao')) ? $errors->first('descricao') : '' }}</span>
					</div>
				</div>
				<div class="form-group">					
					<div class="col-md-12">
						<label for="tipo">Tipo da Transação</label>
						<input id="textinput" name="tipo" type="text" placeholder="" class="form-control input-md">
						<span class="help-block">{{ ($errors->has('tipo')) ? $errors->first('tipo') : '' }}</span>  
					</div>
				</div>
				<div class="form-group">					
					<div class="col-md-12">
						<label for="saldo">Saldo da Transação</label>
						<input id="saldo" name="saldo" type="number" placeholder="e.g 5.39" step="0.01" class="form-control input-md" required>
						<span class="help-block">{{ ($errors->has('tipo')) ? $errors->first('tipo') : '' }}</span>  
					</div>
				</div>
				<p><br>
					<br>
				</p>				
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="submit" name="name" value="Cadastrar">
			</form>
		</div>
	</div>
</div>

@endsection