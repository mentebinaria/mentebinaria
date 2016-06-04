<!DOCTYPE HTML>
<!--
	TXT by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Mente Binária</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
						<div class="logo container">
							<?php
								include "functions.php";
								echo logo();
							?>
						</div>
						<div class="phrase">
							<?php echo frase(); ?>
						</div>
				</header>

			<!-- Nav -->
				<nav id="nav">
					<?php include_once "menu.inc"; ?>
				</nav>

			<!-- Main -->
				<div id="main-wrapper">
					<div id="main" class="container">

						<div class="row 150%">
							<div class="12u">

								<!-- Features -->
									<section class="box features">
										<div>
											<div class="row">
												<div class="3u 12u(mobile)">

													<!-- Feature -->
														<section class="box feature">
															<a href="#" class="image featured"><img src="../img/prince.jpg" alt="" /></a>
															<h3><a href="#">Amorosa Opressão</a></h3>
															<p>
																Neste texto do blog reflito sobre a preocupação de pais
																com o futuro de seus filhos, sobre obrigações e deveres impostos e repassados.
															</p>
														</section>

												</div>
												<div class="3u 12u(mobile)">

													<!-- Feature -->
														<section class="box feature">
															<a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
															<h3><a href="#">Como hookei a execve()</a></h3>
															<p>
																No mais recente artigo, explico como hookei a syscall execve() num LSM
																(Linux Security Module) para um kernel da época, mesmo com a proteção
																da <em>default_security_ops</em>
															</p>
														</section>

												</div>
												<div class="3u 12u(mobile)">

													<!-- Feature -->
														<section class="box feature">
															<a href="#" class="image featured"><img src="maicon/20150908-0001.png" alt="" /></a>
															<h3><a href="#">Maicon - O Aluno</a></h3>
															<p>
																Na esperança de condensar várias reflexões em tirinhas, criamos o Maicon,
																um típico estudante brasileiro tentando entender o mundo e as pessoas
															</p>
														</section>

												</div>

												<div class="3u 12u(mobile)">

													<!-- Feature -->
														<section class="box feature">
															<a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
															<h3><a href="#">Já testou o pev?</a></h3>
															<p>
																O projeto do toolkit livre multiplataforma para análise de binários PE
																vai indo muito bem. Com um release prestes a acontecer, já conta com
																poderosos recursos. Dá uma olhada!
															</p>
														</section>

												</div>

											</div>

										</div>
									</section>

							</div>
						</div>
					</div>
				</div>

			<!-- Footer -->
				<?php include_once "footer.inc"; ?>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>