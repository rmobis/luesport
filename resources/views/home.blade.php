@extends('layouts.full-form')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card card-nav-tabs">
				<div class="card-header">
					<div class="nav-tabs-navigation">
						<div class="nav-tabs-wrapper">
							<ul class="nav nav-tabs" data-tabs="tabs">
								<li class="nav-item">
									<a class="nav-link active" href="#equipe" data-toggle="tab">
										<i class="fas fa-users material-icons"></i>
										Equipe
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#lol" data-toggle="tab">
										<img src="/img/lol-icon.png" alt="" class="material-icons">
										LoL
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#csgo" data-toggle="tab">
										<img src="/img/cs-icon.png" alt="" class="material-icons">
										CS:GO
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#fifa" data-toggle="tab">
										<img src="/img/fifa-icon.png" alt="" class="material-icons">
										FIFA
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#clash" data-toggle="tab">
										<img src="/img/cr-icon.png" alt="" class="material-icons">
										Clash
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#hs" data-toggle="tab">
										<img src="/img/hs-icon.png" alt="" class="material-icons">
										HS
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#payment" data-toggle="tab">
										<i class="far fa-money-bill-alt material-icons"></i>
										Pagamento
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="https://goo.gl/nrrfKq" target="_blank">
										<i class="fas fa-file-alt material-icons"></i>
										Regulamentos
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="card-body">
					<form action="{{ route('saveData') }}" method="post" id="data-form">
						<div class="tab-content">
							@include('partials.team-pane')
							@include('partials.lol-pane')
							@include('partials.csgo-pane')
							@include('partials.fifa-pane')
							@include('partials.clash-pane')
							@include('partials.hs-pane')
							@include('partials.pay-pane')
						</div>
						@if ($isAdmin)
							<div class="bmd-form-group form-check text-right">
								@if ($userID > 1)
									<a class="btn btn-primary btn-prev" role="button" href="{{ route('adminView', $userID - 1) }}">
										<i class="fas fa-chevron-left"></i>
									</a>
								@endif

								@if ($userID < \App\User::count())
									<a class="btn btn-primary btn-next" role="button" href="{{ route('adminView', $userID + 1) }}">
										<i class="fas fa-chevron-right"></i>
									</a>
								@endif
							</div>
						@else
							<div class="bmd-form-group form-check text-right">
								<button type="submit" class="btn btn-primary btn-save">
									Salvar
								</button>
							</div>
						@endif
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	let savedData = JSON.parse({!! json_encode($userData) !!});
	if (savedData !== null) {
		for (const [k, v] of Object.entries(savedData)) {
			if (v != null) {
				document.querySelector(`#${k}`).value = v;
			}
		}
	}

	let fileData = JSON.parse(`{!! json_encode($fileData) !!}`);
	if (fileData !== null) {
		for (const [k, v] of Object.entries(fileData)) {
			let el = document.querySelector(`.btn-dropzone[data-file="${k}"]`);

			if (el) {
				el.dataset.link = v;
				el.classList.add('text-primary');
			}
		}
	}

	let dataForm = document.querySelector('#data-form'),
		btnSave = document.querySelector('.btn-save');

	@if ($isAdmin)
		for (input of dataForm.elements) {
			if (input.nodeName !== 'BUTTON') {
				input.setAttribute('readonly', '');
			}
		}
	@else
		dataForm.onsubmit = function() {
			let data = {};

			for (input of dataForm.elements) {
				if (input.nodeName !== 'BUTTON') {
					if (input.value !== '') {
						data[input.name] = input.value;
					}
				}
			}

			btnSave.innerHTML = `<i class="fas fa-circle-notch fa-spin"></i> Salvando`;

			let p = axios.post('/saveData', data);

			p.then(() => {
				setTimeout(() => { btnSave.innerHTML = `Salvar`; }, 150);
			});

			return false;
		}
	@endif

	window.onload = function () {
		let upButtons = document.querySelectorAll('.btn-dropzone');

		for (let btn of upButtons) {
			@if ($isAdmin)
				if (btn.dataset.link !== null) {
					btn.onclick = function () {
						window.open(btn.dataset.link, '_blank');
					};
				}
			@else
				let drp = new Dropzone(btn, {
					url: `/upload/file/${btn.dataset.file}`,
					previewTemplate: '<div style="display: none;"></div>',
					acceptedFiles: "image/*,application/pdf,.rar,.zip,.ai,.eps,.svg",
					thumbnailWidth: null,
					thumbnailHeight: null,
				});

				drp.on('success', function () {
					btn.classList.add('text-primary');
				});

				drp.on('error', function (file) {
					if (file.type !== 'application/pdf' && !file.type.startsWith('image/')) {
						alert('Apenas são aceitos arquivos de imagem e documentos .pdf!');
					} else {
						alert('Um erro ocorreu durante o upload do arquivo. Por favor, tente novamente. Caso o erro persista, entre em contato com a organização.');
					}

					btn.classList.remove('text-primary');
				});

				if (btn.dataset.target !== null) {
					drp.on('thumbnail', function (file, dataURI) {
						document.querySelector(btn.dataset.target).src = dataURI;
					});
				}
			@endif
		}
	}
</script>
@endsection
