@extends('layouts.full-form')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-xl-4 col-lg-5 col-md-6 col-sm-8 ml-auto mr-auto">
			<div class="card card-fullh">
				<div class="card-header text-center">
					<h4 class="card-title">Cadastro de Novo Usuário</h4>
				</div>

				<div class="card-body">
					<div class="text-center user-icon">
						<i class="far fa-address-card"></i>
					</div>

					<form class="form" method="POST" action="{{ route('register') }}">
						@csrf

						<div class="bmd-form-group input-form-group">
							<div class="input-group{{ $errors->has('name') ? ' has-danger' : '' }}">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="material-icons">face</i>
									</span>
								</div>
								<input id="name" name="name" type="text" class="form-control" placeholder="Nome" autocomplete="off" required autofocus>

							</div>
							@if ($errors->has('name'))
								<span class="invalid-feedback">
									<strong>{{ $errors->first('name') }}</strong>
								</span>
							@endif
						</div>

						<div class="bmd-form-group input-form-group">
							<div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="material-icons">mail</i>
									</span>
								</div>
								<input id="email" name="email" type="text" class="form-control" placeholder="E-mail" autocomplete="off" required>

							</div>
							@if ($errors->has('email'))
								<span class="invalid-feedback">
									<strong>{{ $errors->first('email') }}</strong>
								</span>
							@endif
						</div>

						<div class="bmd-form-group input-form-group">
							<div class="input-group{{ $errors->has('password') ? ' has-danger' : '' }}">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="material-icons">lock_outline</i>
									</span>
								</div>
								<input id="password" name="password" type="password" class="form-control" placeholder="Senha" autocomplete="off" required>

							</div>
							@if ($errors->has('password'))
								<span class="invalid-feedback">
									<strong>{{ $errors->first('password') }}</strong>
								</span>
							@endif
						</div>

						<div class="bmd-form-group text-center">
							<small><u><a href="{{ route('login') }}">Já tem cadastro? Clique aqui para fazer login.</a></u></small>
						</div>

						<div class="bmd-form-group text-center">
							<button type="submit" class="btn btn-primary">
								Cadastrar-se
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
