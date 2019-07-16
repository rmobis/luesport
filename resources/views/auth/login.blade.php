@extends('layouts.full-form')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-xl-4 col-lg-5 col-md-6 col-sm-8 ml-auto mr-auto">
			<div class="card card-fullh">
				<div class="card-header text-center">
					<h4 class="card-title">Sistema de Inscrição</h4>
				</div>

				<div class="card-body">
					<div class="text-center user-icon">
						<i class="far fa-user-circle"></i>
					</div>

					<form class="form" method="POST" action="{{ route('login') }}">
						@csrf

						<div class="bmd-form-group input-form-group">
							<div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="material-icons">mail</i>
									</span>
								</div>
								<input id="email" name="email" type="text" class="form-control" placeholder="E-mail" autocomplete="off" required autofocus>

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
							<small><u><a href="{{ route('register') }}">Não tem conta? Clique aqui para fazer seu cadastro.</a></u></small><br />
							<small><u><a href="javascript:alert('Registre-se novamente em nosso site, ou envie um email para r.mobis@gmail.com com o assunto <[LUE] Esqueci minha senha>.');">Esqueceu a senha?</a></u></small>
						</div>

						<div class="bmd-form-group form-check">
							<button type="submit" class="btn btn-primary">
								Entrar
							</button>
							<label class="form-check-label">
								<input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
								<span class="form-check-sign">
									<span class="check"></span>
								</span>
								Permanecer logado
							</label>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
