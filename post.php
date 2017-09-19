<?php
//ESSA PAGINA EXIBE O CONTEUDO DO POST
include_once "header.php";
?>
	<main class="page-main">
		<!-- Breadcrumbs Block -->
		<div class="block breadcrumbs">
			<div class="container">
				<ul class="breadcrumb">
					<li><a href="home">Home</a></li>
					<li><a href="blog">Blog</a></li>
					<li>Titulo do post</li>
				</ul>
			</div>
		</div>
		<!-- //Breadcrumbs Block -->
		<div class="block">
			<h2 class="text-center h-lg h-decor">Titulo do post teste</h2>
			<div class="container">
				<div class="row">
					<div class="col-md-9 aside">
						<div class="blog-post single">
							<div class="post-image">
								<a href="blog-post-page.html"><img src="images/blog/blog-post-img-4.jpg" alt=""></a>
							</div>
							<ul class="post-meta">
								<li class="post-meta-date">16 Agosto, 2017</li>
								
							</ul>
							<h2 class="post-title">Sub titulo teste</h2>
							<div class="post-author">by XPTO</div>
							<div class="post-content">
								<p>Contratar a governanta certa pode ser uma alteração de vida para a família ocupada. Agora, isso pode parecer um pouco superior, mas eu estou falando sério. Pense sobre sua vida - seja solteiro(a), um casal ou uma família - você não tem tempo. Não há tempo para manter sua casa tão organizada ou limpa como você gostaria. Não há tempo para fazer tarefas de arrumação menores que fariam uma grande diferença.</p>
								<div class="quote">
									<p>Talvez você tenha dificuldade em dobrar a roupa, limpar os fornos e balcões, ou esfregar os banheiros. Talvez você precise limpar sua casa rapidamente para uma festa, precisa de uma empregada de hotel para ajudar a arrumar quartos, ou está procurando por um profissional para ajudar com a limpeza hospitalar.</p>
								</div>
								<p>E aqui entra uma boa limpeza doméstica. Agora, para ser realista, todos os relacionamentos, sejam trabalho ou pessoais, têm um ponto de partida e, com a correspondência certa, possam crescer em algo muito mais. É certamente assim com uma nova governanta. Você procura certas qualidades em uma pessoa, oferece-lhes um emprego e espera que seja uma boa escolha.</p>
								<ul class="tags-list"><!-- TAGS -->
									<li><a href="#">palavra chave 1</a></li>
									<li><a href="#">palavra chave 2</a></li>
									<li><a href="#">palavra chave 3</a></li>
								</ul>
							</div>
						</div>

						<div class="divider-lg"></div>
					</div>
					<div class="col-md-3 aside">
						<div class="side-block">
							<h3>Posts recentes</h3>
							<div class="blog-post post-preview">
								<h4 class="post-title"><a href="blog-post-page.html">Titulo post 1</a></h4>
								<ul class="post-meta">
									<li class="post-meta-date">16 Agosto, 2017</li>
								</ul>
								<div class="post-image">
									<a href="blog-post-page.html"><img src="images/blog/blog-post-featured-1.jpg" alt=""></a>
								</div>
							</div>
							<div class="blog-post post-preview">
								<h4 class="post-title"><a href="blog-post-page.html">Titulo post 2</a></h4>
								<ul class="post-meta">
									<li class="post-meta-date">16 Agosto, 2017</li>
								</ul>
								<div class="post-image">
									<a href="blog-post-page.html"><img src="images/blog/blog-post-featured-2.jpg" alt=""></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
<?php include_once "footer.php"; ?>