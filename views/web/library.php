<?php $v->layout("web/_theme"); ?>

<div id="header">

	<?php $v->insert("web/fragments/navbar"); ?>

	<div class="inner">
		<header>
			<h1><a href="index.html" id="logo">Nossa Biblioteca</a></h1>
		</header>
	</div>

</div>

<section id="banner">
	<header>
		<h2>Conheça as <strong>nossas obras</strong> guardadas.</h2>
	</header>
</section>

<?php for ($categories = 0; $categories < 10; $categories++) : ?>
	<section class="carousel">
		<header class="center title">
			<h2>Categoria <?= $categories ?></h2>
		</header>

		<div class="reel">
			<?php
			for ($i = 0; $i < 10; $i++) :
				$v->insert("web/fragments/card");
			endfor;
			?>
		</div>

	</section>
<?php endfor; ?>