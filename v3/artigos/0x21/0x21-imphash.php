<!DOCTYPE HTML>
<!--
	TXT by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>No Sidebar - TXT by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="../../assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../../assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="../../assets/css/ie8.css" /><![endif]-->
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
						<div class="logo container">
							<?php
								include "../../functions.php";
								echo logo();
							?>
						</div>
						<div class="phrase">
							<?php echo frase(); ?>
						</div>
				</header>

			<!-- Nav -->
				<nav id="nav">
					<?php include_once "../../menu.inc"; ?>
				</nav>

			<!-- Main -->
				<div id="main-wrapper">
					<div id="main" class="container">
						<div class="row">
							<div class="12u">
								<div class="content">

									<!-- Content -->

										<article class="box page-content">

											<header>
												<h2>Entendendo o imphash</h2>
												<ul class="meta">
													<li class="icon fa-clock-o">6 de Maio de 2016</li>
													<li class="icon fa-user">Fernando Mercês</li>
													<li class="icon fa-creative-commons"><a href="http://creativecommons.org/licenses/by/3.0/br" target="_blank">Creative Commons</a></li>
												</ul>
											</header>

											<section>
												<p>No início de 2014 a Mandiant publicou que estava calculando o hash MD5 das funções importadas por binários PE para buscar variantes [1]. Eles também fizeram um patch na biblioteca pefile [2] para suportar o novo cálculo. A ideia colou e até o Virus Total passou a utilizar [3]. Eu mesmo utilizei um tempo sem entender direito até que um dia decidi estudá-lo para implementar no pev [4] (que ainda não fiz) e hoje decidi escrever sobre. :)
												</p>

												<p>Todo binário PE que se preze usa funções de bibliotecas. Assim sendo, desde os primórdios da especificação PE, há o que é conhecido por IAT - Import Address Table, que é uma tabela contendo uma lista de cada módulo (DLL) que o binário utiliza (importa) com suas respectivas funções. Por exemplo, vamos analisar o programa no estilo "Hello, world" abaixo:</p>

<pre>
#include &lt;stdio.h&gt;

int main(void)
{
  puts("Quem avisa chato eh!");
  return 0;
}
</pre>

											</section>

											<section>
												<h3>More intriguing information</h3>
												<p>
													Todo binário PE que se preze usa funções de bibliotecas. Assim sendo, desde os primórdios da especificação PE, há o que é conhecido por IAT - Import Address Table, que é uma tabela contendo uma lista de cada módulo (DLL) que o binário utiliza (importa) com suas respectivas funções. Por exemplo, vamos analisar o programa no estilo "Hello, world" abaixo:
												</p>
											</section>


										</article>

								</div>
							</div>
						</div>
						
					</div>
				</div>


			<!-- Footer -->
				<?php include_once "../../footer.inc"; ?>

			</div>

		</div>

		<!-- Scripts -->
			<script src="../../assets/js/jquery.min.js"></script>
			<script src="../../assets/js/jquery.dropotron.min.js"></script>
			<script src="../../assets/js/skel.min.js"></script>
			<script src="../../assets/js/skel-viewport.min.js"></script>
			<script src="../../assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="../../assets/js/main.js"></script>

	</body>
</html>