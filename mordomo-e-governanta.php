<?php
include_once "header.php";
$_SESSION['header-title'] = 'Mordomo e Governanta';
?>
	<main class="page-main">
		<!-- Breadcrumbs Block -->
		<div class="block breadcrumbs">
			<div class="container">
				<ul class="breadcrumb">
					<li><a href="home">Home</a></li>
					<li><?php echo $_SESSION['header-title'];?></li>
				</ul>
			</div>
		</div>
		<!-- //Breadcrumbs Block -->
		<div class="block">
			<h1 class="text-center h-decor"><?php echo $_SESSION['header-title'];?></h1>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-lg-9 aside">
						<img src="images/content/service-page-8-img.jpg" class="img-responsive" alt="">
						<div class="divider-lg"></div>
						<h2>Commercial Cleaning</h2>
						<p>Our cleaning system sets us apart. Our customers keep coming back to us, because we provide services that work and keep their homes and apartments clean, right down to the little details. This extensive cleaning system, which we call our Detail-Clean Rotation System, which has been proven to be effective in more than five million cleans!</p>
						<h5>How does our apartment cleaning program work?</h5>
						<p>We start with a thorough detail-clean throughout your house over the course of the first two cleans. On the first clean, our maid service will thoroughly clean your apartment, with special attention on your kitchen and bathrooms. On the second session, we'll clean your entire apartment, but this time we'll provide detail-clean services in your sleeping and living areas. We'll continue to maintain this detail-clean level throughout your home throughout our next visits by providing deep cleaning services on a rotating basis.</p>
						<p>Every time we clean, we'll provide services that include the following:</p>
						<ul class="marker-list">
							<li><b>Bathrooms</b>
								<br>Cobwebs removed, dusting, floors cleaned, toilets cleaned, mirrors / chrome fixtures cleaned, shower doors cleaned, tile walls, bathtub / showers cleaned</li>
							<li><b>Sleeping Areas</b>
								<br> Surfaces hand wiped, floors cleaned, general dusting, cobwebs removed, doors and door frames spot cleaned</li>
							<li><b>Living Areas</b>
								<br>Surfaces hand wiped, cobwebs removed, doors and door frames spot cleaned, general dusting, floors cleaned</li>
							<li><b>Kitchen</b>
								<br>Countertops cleaned, outside of range hood cleaned, top and front of range cleaned, drip pans / glass top surfaces wiped, sinks cleaned and chrome shined, fronts of all appliances cleaned, general dusting, cobwebs removed, microwave wiped out, doors and door frames spot cleaned</li>
						</ul>
						<div class="divider-xl"></div>
						<?php include "contatos-na-pagina.php"; ?>
					</div>
					<div class="col-md-4 col-lg-3 aside">
						<ul class="services-list">
						<?php
						/* WIDGETS */
						include "include-servicos.php"; //contem os arrays com os titulos, descrição e imagem de cada item
						$qtd = count($titulo);
						for ($i = 0; $i < $qtd; $i++){ //faz o loop conforme a qtde de itens do array tendo como base o array titulo
						?>
							<li <?php if ($titulo[$i] == $_SESSION['header-title']){echo 'class="active"';}?>><a href="<?php echo $link[$i]; ?>"><?php echo $titulo[$i]; ?></a></li>
						<?php } ?>
						</ul>
						<!-- WIDGET FORM -->
						<?php include "widget-form.php"; ?>
						<!--/WIDGET FORM -->
					</div>
				</div>
			</div>
		</div>
	</main>
<?php include_once "footer.php"; ?>