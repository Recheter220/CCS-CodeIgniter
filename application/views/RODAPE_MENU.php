		<div class="row">
			<div class="large-12 columns">
				<fieldset>
					<nav class="center">
						<label class="center">Vagas Cadastradas</label>
						<div class="row">
							<?php foreach ($vagas as $vaga): ?>
							
							<div class="small-4 columns">
								
							<?= anchor("busca_vaga/descricao", $vaga["DESCRICAO"]) ?>
							<br>
							</div>
						<?php endforeach ?>
						</div>
					</nav>
				</fieldset>
			</div>
		</div>

		<script src="<?php echo JS . 'vendor/jquery.js' ?>"></script>
		<script src="<?php echo JS . 'foundation.min.js' ?>"></script>
		<script>
		    $(document).foundation();
		</script>


	</body>
</html>