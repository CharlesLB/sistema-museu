<?php $v->layout("web/_theme"); ?>

<div id="header">
	<nav id="nav">
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="#contact" class="scrolly">Doação</a></li>
			<li><a href="right-sidebar.html">Acervo</a></li>
			<li><a href="right-sidebar.html">Biblioteca</a></li>
		</ul>
	</nav>

	<div class="inner">
		<header>
			<h1><a href="index.html" id="logo">Museu do computador</a></h1>
			<hr />
			<p>O acervo de informática do IF Sudeste MG Campus Juiz de Fora</p>
		</header>
		<footer>
			<a href="#banner" class="button circled scrolly">Conhecer</a>
		</footer>
	</div>


</div>

<section id="banner">
	<header>
		<h2>Conheça o <strong>Museu do Computador</strong>.</h2>
		<p>
			O museu do <a href="https://www.ifsudestemg.edu.br/juizdefora">IF Sudeste MG Campus Juiz de Fora</a>.
			Veja abaixo algumas das peças de nosso vasto acervo
		</p>
	</header>
</section>

<section class="carousel">
	<div class="reel">

		<?php for ($i = 0; $i < 10; $i++) : ?>
			<article>
				<a href="" class="image featured"><img src="<?= asset("images/pic01.jpg", "web") ?>" alt="" /></a>
				<header>
					<h3><a href="#">Nome da peça</a></h3>
				</header>
				<p>Descrição bacana da peça.</p>
			</article>
		<?php endfor; ?>
	</div>

	<footer class="center">
		<a href="#" class="button">Conhecer todo o nosso acervo</a>
	</footer>
</section>

<section class="section">
	<header class="container">
		<h2>O <strong>Museu do Computador</strong> precisa de você.</h2>
		<p>
			Caso possua uma peça de informática antiga que enriqueceria nosso acervo e está disposto a doar, entre em contato clicando no botão abaixo.
		</p>
	</header>
	<footer class="center">
		<a href="#contact" class="button scrolly">Doar uma peça</a>
	</footer>
</section>


<section class="carousel">
	<div class="reel">
		<?php for ($i = 0; $i < 10; $i++) : ?>
			<article>
				<a href="" class="image featured"><img src="<?= asset("images/pic01.jpg", "web") ?>" alt="" /></a>
				<header>
					<h3><a href="#">Nome da obra</a></h3>
				</header>
				<p>Descrição bacana da obra.</p>
			</article>
		<?php endfor; ?>
	</div>

	<footer class="center">
		<a href="#" class="button">Conheça também nossa biblioteca</a>
	</footer>
</section>


<!-- Main -->
<div class="wrapper style2">
	<article id="main" class="container special">
		<header>
			<h2>E venha no conhecer!</h2>
			<p>
				Ficamos aberto terça e quinta-feira das 14:00 às 18:00 horas!
			</p>
		</header>
		<div class="image featured"><img src="images/pic06.jpg" alt="" /></div>
	</article>
</div>