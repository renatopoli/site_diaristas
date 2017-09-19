<?php
include_once "header.php";
$_SESSION['header-title'] = 'Serviços';
?>
	<main class="page-main">
		<!-- Breadcrumbs Block -->
		<div class="block breadcrumbs">
			<div class="container">
				<ul class="breadcrumb">
					<li><a href="home">Home</a></li>
					<li>Serviços</li>
				</ul>
			</div>
		</div>
		<!-- //Breadcrumbs Block -->
		<!-- services grid -->
		<div class="block">
			<div class="container">
				<h2 class="text-center h-lg h-decor">Por que nos contratar?</h2>
				<p class="text-center">Ao longo do nosso tempo de atuação, adquirimos larga experiência no ramo de atuação e prezamos pela qualidade no atendimento ao cliente.</p>
				<div class="row services-grid services-mobile-carousel">
				
				<?php
				include "include-servicos.php"; //contem os arrays com os titulos, descrição e imagem de cada item
				$qtd = count($titulo);
				for ($i = 0; $i < $qtd; $i++){ //faz o loop conforme a qtde de itens do array tendo como base o array titulo
				?>
				
					<div class="col-xs-6 col-sm-6 col-md-4 service-box"><!--SERVIÇOS-->
						<a href="<?php echo $link[$i]; ?>" class="service-box-img">
							<img src="images/<?php echo $imagem[$i]; ?>" alt="Service">
						</a>
						<h3 class="service-box-title"><?php echo $titulo[$i]; ?></h3>
						<div class="service-box-text">
							<?php echo $descricao[$i]; ?>
						</div>
						<a href="<?php echo $link[$i]; ?>" class="service-box-link">SAIBA MAIS</a>
					</div><!--/SERVIÇOS-->
				<?php } ?>
				</div>
			</div>
		</div>
		<!-- /services grid -->
		<!-- banner -->
		<div class="block fullwidth-sm no-pad">
			<div class="container">
				<div class="banner-text">
					<div>Ligue já e conheça mais sobre nossos serviços</div>
					<div><i class="icon icon-technology"></i><b>(11) 1234-5678</b></div>
				</div>
			</div>
		</div>
		<!-- / banner -->
		<!--block Additional Services -->
		<div class="block fullwidth-bg inset-85 bg-cover bg-mobile-right" data-bg="images/block-bg-4.jpg">
			<div class="container">
				<h2 class="text-center h-lg h-decor">Serviços adicionais</h2>
						<div class="row services-list-row">
						
						<?php for ($i=1; $i<=4; $i++){?>

							<div class="col-xs-6 col-md-3">
								<ul class="marker-list">
									<?php for ($j=1; $j<=5; $j++){?><li>Serviço <?php echo $j; ?></li><?php } ?>
								</ul>
							</div>
						<?php } ?>
						</div>
					<div class="text-center visible-xs">
						<div class="divider"></div>
						<a href="#" class="all-view" data-show-xs="collapse-col"><span>All Services</span></a>
					</div>
			</div>
		</div>
		<!--/block Additional Services -->
		<!--block Discounts -->
		<!--div class="block">
			<div class="container">
				<h2 class="text-center h-lg h-decor">Discounts for Recurring Clientele</h2>
				<p class="text-center">Looking to setup a regular cleaning? We offer huge savings to loyal customers (applies to second cleaning onward).</p>
				<div class="discount-box-row">
					<div class="discount-box discount-box--color1">
						<div class="discount-box-sale">30% OFF</div>
						<div>Weekly clients</div>
					</div>
					<div class="discount-box discount-box--color2">
						<div class="discount-box-sale">25% OFF</div>
						<div>Bi-weekly clients</div>
					</div>
					<div class="discount-box discount-box--color3">
						<div class="discount-box-sale">15% OFF</div>
						<div>Monthly clients</div>
					</div>
				</div>
			</div>
		</div-->
		<!--block Discounts -->
		<!--block Prices -->
		<!--div class="block">
			<div class="container">
				<h2 class="text-center h-lg h-decor">Our Prices</h2>
				<p class="text-center">Outstanding cleaning services with flat rate pricing. No hidden fees. No surprises.
				</p>
				<div class="price-carousel">
					<div class="prices-box">
						<h3 class="prices-box-title">Studio</h3>
						<div class="prices-box-price">
							<b><sup>$</sup>119</b>
							<span>Flat Rate</span>
						</div>
						<div class="prices-box-row">Apartments</div>
						<div class="prices-box-row">Estimated Time – 2 hours</div>
						<div class="prices-box-link">
							<a href="order-form.html" class="btn btn-sm">BOOK NOW</a>
						</div>
					</div>
					<div class="prices-box">
						<h3 class="prices-box-title">One Bedroom</h3>
						<div class="prices-box-price">
							<b><sup>$</sup>129</b>
							<span>Flat Rate</span>
						</div>
						<div class="prices-box-row">Apartments</div>
						<div class="prices-box-row">Estimated Time – 2 hrs 30 mins</div>
						<div class="prices-box-link">
							<a href="order-form.html" class="btn btn-sm">BOOK NOW</a>
						</div>
					</div>
					<div class="prices-box">
						<h3 class="prices-box-title">Two Bedroom</h3>
						<div class="prices-box-price">
							<b><sup>$</sup>139</b>
							<span>Flat Rate</span>
						</div>
						<div class="prices-box-row">Apartments</div>
						<div class="prices-box-row">Estimated Time – 3 hours</div>
						<div class="prices-box-link">
							<a href="order-form.html" class="btn btn-sm">BOOK NOW</a>
						</div>
					</div>
					<div class="prices-box">
						<h3 class="prices-box-title">Three Bedroom</h3>
						<div class="prices-box-price">
							<b><sup>$</sup>189</b>
							<span>Flat Rate</span>
						</div>
						<div class="prices-box-row">Houses & Apartments</div>
						<div class="prices-box-row">Estimated Time – 3 hrs 30 mins</div>
						<div class="prices-box-link">
							<a href="order-form.html" class="btn btn-sm">BOOK NOW</a>
						</div>
					</div>
					<div class="prices-box">
						<h3 class="prices-box-title">Four Bedroom</h3>
						<div class="prices-box-price">
							<b><sup>$</sup>299</b>
							<span>Flat Rate</span>
						</div>
						<div class="prices-box-row">Houses</div>
						<div class="prices-box-row">Estimated Time – 4 hours</div>
						<div class="prices-box-link">
							<a href="order-form.html" class="btn btn-sm">BOOK NOW</a>
						</div>
					</div>
					<div class="prices-box">
						<h3 class="prices-box-title">Five Bedroom</h3>
						<div class="prices-box-price">
							<b><sup>$</sup>349</b>
							<span>Flat Rate</span>
						</div>
						<div class="prices-box-row">Houses</div>
						<div class="prices-box-row">Estimated Time – 5 hours</div>
						<div class="prices-box-link">
							<a href="order-form.html" class="btn btn-sm">BOOK NOW</a>
						</div>
					</div>
					<div class="prices-box">
						<h3 class="prices-box-title">Six Bedroom</h3>
						<div class="prices-box-price">
							<b><sup>$</sup>399</b>
							<span>Flat Rate</span>
						</div>
						<div class="prices-box-row">Houses</div>
						<div class="prices-box-row">Estimated Time – 6 hours</div>
						<div class="prices-box-link">
							<a href="order-form.html" class="btn btn-sm">BOOK NOW</a>
						</div>
					</div>
					<div class="prices-box">
						<h3 class="prices-box-title">Hourly Service</h3>
						<div class="prices-box-price">
							<b><sup>$</sup>50</b>
							<span>Flat Rate</span>
						</div>
						<div class="prices-box-row">Perfect for customized jobs</div>
						<div class="prices-box-row">2 Hours Minimum</div>
						<div class="prices-box-link">
							<a href="order-form.html" class="btn btn-sm">BOOK NOW</a>
						</div>
					</div>
				</div>
			</div>
		</div-->
		<!--block Prices -->
	</main>

<?php
include_once "footer.php";
?>