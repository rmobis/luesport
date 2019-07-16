<div class="tab-pane active" id="equipe">
	<div class="row">
		<div class="form-group col-md-4">
			<div class="team-logo">
				<img src="{{ (isset($fileData['teamLogo']) ? $fileData['teamLogo'] : '/img/default.jpg') }}" alt="" class="img-thumbnail rounded img-logo">
			</div>
			<button class="btn btn-dropzone" type="button" data-file="teamLogo" data-target=".img-logo">
				<i class="fas fa-cloud-upload-alt"></i>
			</button>
		</div>
		<div class="col-md-8">
			<h5 class="text-primary">Equipe</h5>

			<div class="form-row">
				<div class="form-group form-group-lg col-lg-6 col-md-12">
					<label for="teamName">Nome da Equipe</label>
					<input name="teamName" id="teamName" type="text" class="form-control">
				</div>
				<div class="form-group col-lg-6 col-md-12">
					<label for="teamAbbr">Sigla da Equipe</label>
					<input name="teamAbbr" id="teamAbbr" type="text" class="form-control">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-lg-6 col-md-12">
					<label for="collegeName">Nome da Faculdade</label>
					<input name="collegeName" id="collegeName" type="text" class="form-control">
				</div>
				<div class="form-group col-lg-6 col-md-12">
					<label for="teamPage">Página no Facebook</label>
					<input name="teamPage" id="teamPage" type="text" class="form-control">
				</div>
			</div>

			<h5 class="text-primary">Representante</h5>

			<div class="form-group">
				<label for="repName">Nome Completo</label>
				<input name="repName" id="repName" type="text" class="form-control">
			</div>
			<div class="form-row">
				<div class="form-group col-lg-6 col-md-12">
					<label for="repPhone">Telefone Celular</label>
					<input name="repPhone" id="repPhone" type="text" class="form-control">
				</div>
				<div class="form-group col-lg-6 col-md-12">
					<label for="repEmail">E-mail</label>
					<input name="repEmail" id="repEmail" type="text" class="form-control">
				</div>
			</div>
		</div>
	</div>
</div>
