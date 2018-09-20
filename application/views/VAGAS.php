
		<div class="row">
			<div class="large-12 columns">
				<label class="right"> <?= $usuario['USUARIO']; ?></label>
			</div>
		</div>
			<div class="row">
			<div class="large-12 columns">
				<form data-abide method="post" action="<?= base_url('index.php/busca_vaga/seleciona') ?>">
  					<fieldset>
    					<div class="row">
      						<div class="large-6 columns">
        						<input type="text" required name="buscavaga" placeholder="Digite a vaga">
        					</div>
        					<div class="large-6 columns">
        						<input type="checkbox" name="vaga_deficientes"> Vagas para Deficientes
        					</div>
        				</div>
						<div class="row">
							
        					<div class="large-8 columns">
        						<select name="cidade">
        							<option value="0">TODAS</option>
        							<?php foreach ($cidades as $cidade): ?>
        							<option value="<?= $cidade['ID_CIDADE'] ?>"><?= $cidade['DESCRICAO']; ?></option>	
        							<?php endforeach; ?>
        						</select>
        							<button class="button success radius" type="submit">Procurar</button>
        						</div>
        				</div>
        			</fieldset>
        		</form>
			</div>
		</div>


