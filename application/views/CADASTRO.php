

		<div class="row">
			<div class="large-12 columns">
				<fieldset>
					<label class="center"> Anuncie aqui seu CV </label>
					<form data-abide method="post" action="<?= base_url('index.php/curriculum/novo') ?>">
    					<div class="row">
      						<div class="large-12 columns">
        						<input type="text" name="nome" required placeholder="Digite seu nome">
        					</div>
        				</div>
        				<div class="row">
      						<div class="large-12 columns">
        						<input type="radio" name="sex" value="masc">Masculino
        						<input type="radio" name="sex" value="femi">Feminino
        					</div>
        				</div>
        				<div class="row">
      						<div class="large-12 columns">
        						<input type="text" name="dt_nasc" required placeholder="Data de Nascimento">
        					</div>
        				</div>
        				<div class="row">
      						<div class="large-12 columns">
        						<input type="text" name="email" required placeholder="Digite seu email">
        					</div>
        				</div>
        				<div class="row">
      						<div class="large-12 columns">
        						<input type="text" name="cep" required placeholder="Digite seu CEP">
        					</div>
        				</div>
        				<div class="row">
      						<div class="large-12 columns">
        						<input type="password" name="senha" required placeholder="Criar senha ********">
        					</div>
        				</div>
        				<div class="row">
      						<div class="large-12 columns">
        						<input type="password" required placeholder="Confirmar senha *****">
        					</div>
        				</div>
        				<div class="row">
      						<div class="large-12 columns" class="fileinput fileinput-new" data-provides="fileinput">
                                <div>
                                    <input type="file" name="userfile"></span>
                                </div>
        					</div>
        				</div>
		
        				<button class="button success radius" type="submit">Continuar</button>
        					
        			</form>
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

