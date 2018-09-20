
		<div class="row">
			<div class="large-12 columns">
				<fieldset>
					<nav class="container" id="painel">
					<ul class="tabs" data-tab >
						<?php foreach ($vaga as $vagas): ?>
						<div class="tabs-content" data-tab >
    					<p class="tabs-panel is-active"><h5><?= $vagas['DESCRICAO']; ?></h5></a>
    					<p> <?= $vagas['RESUMO']; ?></p>
    					</p>
    					</div>
    					<?php endforeach; ?>
    				</ul>
					</nav>
				</fieldset>
			</div>
		</div>


		<script src="<?php echo JS . 'vendor/jquery.js' ?>"></script>
		<script src="<?php echo JS . 'foundation.min.js' ?>"></script>
		<script src="<?php echo JS . 'foundation.tab.js' ?>"></script>
		<script>
		    $(document).foundation();
		</script>


	</body>
</html>



<ul class="tabs" data-tabs id="example-tabs">
  <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Tab 1</a></li>
  <li class="tabs-title"><a href="#panel2">Tab 2</a></li>
</ul>

<div class="tabs-content" data-tabs-content="example-tabs">
  <div class="tabs-panel is-active" id="panel1">
    <p>Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus.</p>
  </div>
  <div class="tabs-panel" id="panel2">
    <p>Suspendisse dictum feugiat nisl ut dapibus.  Vivamus hendrerit arcu sed erat molestie vehicula. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor.  Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor.</p>
  </div>
</div>


								