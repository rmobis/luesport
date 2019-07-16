<div class="tab-pane" id="{{ $game }}">
	<h5 class="text-primary">Titulares</h5>

	<table class="table table-borderless table-sm table-responsive table-collective">
		<thead>
			@foreach (['#', 'Nome Completo', 'RG/CPF', 'RA', 'E-mail', $nickField, 'RG/CPF', 'Comprovante de Matrícula'] as $header)
				<th scope="col">
					{{ $header }}
				</th>
			@endforeach
		</thead>
		<tbody>
			@for ($i = 1; $i <= 5; $i++)
				<tr>
					<td scope="row">
						{{ $i }}
					</td>
					@foreach (['Name', 'DocNo', 'RA', 'Email', 'Nick'] as $field)
						<td>
							<input name="{{ $game }}-player{{ $field }}{{ $i }}" id="{{ $game }}-player{{ $field }}{{ $i }}" type="text" class="form-control">
						</td>
					@endforeach
					@foreach (['Doc', 'Comprovante'] as $field)
						<td>
							<button class="btn btn-dropzone" type="button" data-file="{{ $game }}-player{{ $field }}{{ $i }}">
								<i class="fas fa-cloud-upload-alt"></i>
							</button>
						</td>
					@endforeach
				</tr>
			@endfor
		</tbody>
	</table>

	<h5 class="text-primary">Reservas</h5>

	<table class="table table-borderless table-sm table-responsive table-collective">
		<tbody>
			@for ($i = 6; $i <= 10; $i++)
				<tr>
					<td scope="row">
						{{ $i }}
					</td>
					@foreach (['Name', 'DocNo', 'RA', 'Email', 'Nick'] as $field)
						<td>
							<input name="{{ $game }}-player{{ $field }}{{ $i }}" id="{{ $game }}-player{{ $field }}{{ $i }}" type="text" class="form-control">
						</td>
					@endforeach
					@foreach (['Doc', 'Comprovante'] as $field)
						<td>
							<button class="btn btn-dropzone" type="button" data-file="{{ $game }}-player{{ $field }}{{ $i }}">
								<i class="fas fa-cloud-upload-alt"></i>
							</button>
						</td>
					@endforeach
				</tr>
			@endfor
		</tbody>
	</table>

	@if ($game == 'csgo')
		<h5 class="text-primary">GamersClub</h5>

		<div class="form-row">
			<div class="form-group col-12">
				<label for="csgo-teamLink">Link do Time na GamersClub</label>
				<input name="csgo-teamLink" id="csgo-teamLink" type="text" class="form-control">
			</div>
		</div>
	@endif
</div>
