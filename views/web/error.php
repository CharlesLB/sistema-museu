<?php $v->layout("web/_theme"); ?>

<div id="header">
	
	<?php $v->insert("web/fragments/navbar");?>

	<div class="inner">
		<header>
			<h1><a href="index.html" id="logo">Ops!
				</a></h1>
			<hr />
			<p>Parece que esta página não existe!</p>
		</header>
		<footer>
			<a href="<?= url() ?>" class="button circled scrolly">Retornar</a>
		</footer>
	</div>
</div>