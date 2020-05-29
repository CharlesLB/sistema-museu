<!DOCTYPE HTML>

<html>

<head>
	<title><?= $title ?></title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="icon" href="<?= shared("/images/icon.ico", "web") ?> " type="image/x-icon" />
	<link rel="stylesheet" href="<?= asset("/css/main.css?5", "web") ?> " />
	<link rel="stylesheet" href="<?= shared("/css/globals.css") ?> " />
	<link rel="stylesheet" href="<?= asset("/css/lightbox.min.css", "web") ?> " />
	<noscript>
		<link rel="stylesheet" href="<?= asset("/css/noscript.css", "web") ?>" /></noscript>
</head>

<body class="homepage is-preload">
	<div id="page-wrapper">

		<?= $v->section("content"); ?>

		<!-- Footer -->
		<div id="footer">
			<div class="container">
				<section id="contact">
					<div class="center">
						<h2>Faça sua doação!</h2>
					</div>
					<form action="<?= $router->route("mail.contact") ?>" method="post">
						<div class="form-inline">
							<div class="form-group">
								<label for="name">Nome:</label>
								<input type="text" id="name" name="name" placeholder="Nome Completo">
							</div>
							<div class="form-group">
								<label for="email">E-mail:</label>
								<input type="email" id="email" name="email" placeholder="E-mail">
							</div>
						</div>
						<div class="form-inline">
							<div class="form-group">
								<label for="item">Qual peça gostaria de doar:</label>
								<input type="text" id="item" name="item" placeholder="Peça a ser doada">
							</div>
							<div class="form-group">
								<label for="date">Data para entrega preferencial:</label>
								<input type="text" id="date" name="date" placeholder="Exemplo: Manhã do dia 08/03">
							</div>
						</div>
						<div class="form-group">
							<label for="textarea">Descrição Opcional:</label>
							<textarea id="textarea" name="message"></textarea>
						</div>
						
						<div class="form_ajax" style="display: none"></div>

						<footer class="center">
							<button type="submit" class="button">Doar uma peça</button>
						</footer>

					</form>
				</section>

				<hr />
				<div class="row">
					<div class="col-12">

						<!-- Contact -->
						<section class="contact">
							<header>
								<h3>Museu do Computador</h3>
							</header>
							<p>Um projeto do IF Sudeste MG Campus Juiz de Fora</p>
						</section>

						<!-- Copyright -->
						<div class="copyright">
							<ul class="menu">
								<li><a href="<?= SITE["github"] ?>" target="_blank">@CharlesLB</a></li>
								<li>Ícones feitos por <a href="https://www.flaticon.com/br/autores/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/br/" title="Flaticon"> www.flaticon.com</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Scripts -->
	<script src="<?= asset("/js/jquery.min.js", "web") ?>"></script>
	<script src="<?= asset("/js/lightbox.min.js", "web") ?>"></script>
	<script src="<?= asset("/js/jquery.dropotron.min.js", "web") ?>"></script>
	<script src="<?= asset("/js/jquery.scrolly.min.js", "web") ?>"></script>
	<script src="<?= asset("/js/jquery.scrollex.min.js", "web") ?>"></script>
	<script src="<?= asset("/js/browser.min.js", "web") ?>"></script>
	<script src="<?= asset("/js/breakpoints.min.js", "web") ?>"></script>
	<script src="<?= asset("/js/util.js", "web") ?>"></script>
	<script src="<?= asset("/js/main.js", "web") ?>"></script>
	<script>
		$(function() {
			$("form").submit(function(e) {
				e.preventDefault();

				var form = $(this);
				var form_ajax = $(".form_ajax");

				$.ajax({
					url: form.attr("action"),
					data: form.serialize(),
					type: "post",
					dataType: "json",
					success: function(callback) {
						if (callback.message) {
							form_ajax.html(callback.message).fadeIn();
						} else {
							form_ajax.fadeOut(function() {
								$(this).html("");
							});
						}
						if(callback.success == true){
							$("#name").val('');
							$("#email").val('');
							$("#date").val('');
							$("#item").val('');
							$("#textarea").val('');
						}
					}
				});
			});
		});
	</script>

</body>

</html>