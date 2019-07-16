<div class="tab-pane" id="{{ $game }}">
	<div class="row">
		@for ($i = 1; $i <= 2; $i++)
			<div class="col-sm-12 col-md-6">
				<h5 class="text-primary">Jogador #{{ $i }}</h5>

				<div class="form-row">
					<div class="form-group form-group-lg col-12">
						<label for="{{ $game }}-playerName{{ $i }}">Nome Completo</label>
						<input name="{{ $game }}-playerName{{ $i }}" id="{{ $game }}-playerName{{ $i }}" type="text" class="form-control">
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-lg-6 col-md-12">
						<label for="{{ $game }}-playerDocNo{{ $i }}">RG/CPF</label>
						<input name="{{ $game }}-playerDocNo{{ $i }}" id="{{ $game }}-playerDocNo{{ $i }}" type="text" class="form-control">
					</div>
					<div class="form-group col-lg-6 col-md-12">
						<label for="{{ $game }}-playerRA{{ $i }}">RA</label>
						<input name="{{ $game }}-playerRA{{ $i }}" id="{{ $game }}-playerRA{{ $i }}" type="text" class="form-control">
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-lg-6 col-md-12">
						<label for="{{ $game }}-playerEmail{{ $i }}">E-mail</label>
						<input name="{{ $game }}-playerEmail{{ $i }}" id="{{ $game }}-playerEmail{{ $i }}" type="text" class="form-control">
					</div>
					<div class="form-group col-lg-6 col-md-12">
						<label for="{{ $game }}-playerNick{{ $i }}">{{ $nickField }}</label>
						<input name="{{ $game }}-playerNick{{ $i }}" id="{{ $game }}-playerNick{{ $i }}" type="text" class="form-control">
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-lg-6 col-md-12">
						<label>RG/CPF</label>
						<button class="btn btn-dropzone" type="button" data-file="{{ $game }}-playerDoc{{ $i }}">
							<i class="fas fa-cloud-upload-alt"></i>
						</button>
					</div>
					<div class="form-group col-lg-6 col-md-12">
						<label>Comprovante de Matrícula</label>
						<button class="btn btn-dropzone" type="button" data-file="{{ $game }}-playerComprovante{{ $i }}">
							<i class="fas fa-cloud-upload-alt"></i>
						</button>
					</div>
				</div>
			</div>
		@endfor
	</div>
</div>
