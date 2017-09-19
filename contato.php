<?php
include_once "header.php";
$_SESSION['header-title'] = 'Contato';
?>
	<main class="page-main">
		<!-- Breadcrumbs Block -->
		<div class="block breadcrumbs">
			<div class="container">
				<ul class="breadcrumb">
					<li><a href="home">Home</a></li>
					<li><?php echo $_SESSION['header-title']; ?></li>
				</ul>
			</div>
		</div>
		<!-- //Breadcrumbs Block -->
		<div class="block">
			<h2 class="text-center h-lg h-decor"><?php echo $_SESSION['header-title']; ?></h2>
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="order-form-box">
							<form id="orderForm" method="post" novalidate="novalidate">
								<h6>Seus dados</h6>
								<p>Preencha corretamente os dados abaixo.</p>
								<div class="row">
									<div class="col-sm-6"><label  class="h6">Nome *</label>
										<input type="text" class="input-custom input-custom--sm input-full" name="name" placeholder="Nome *">
									</div>
									<div class="col-sm-6"><label class="h6">E-mail *</label>
										<!--input type="text" class="input-custom input-custom--sm input-full" name="address" placeholder="Endereço *"-->
										<input type="text" class="input-custom input-custom--sm input-full" name="email" placeholder="E-mail*">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6"><label class="h6">Telefone *</label>
										<input type="text" class="input-custom input-custom--sm input-full" name="phone" placeholder="Telefone *">
									</div>
									<div class="col-sm-6">
										<!--input type="text" class="input-custom input-custom--sm input-full" name="email" placeholder="E-mail*"-->
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6"><label class="h6">Mensagem</label>
										<textarea class="textarea-custom textarea-custom--sm input-full" name="mensagem" placeholder="Mensagem"></textarea>
									</div>
									<div class="col-sm-6">
										<!--input type="text" class="input-custom input-custom--sm input-full" name="email" placeholder="E-mail*"-->
									</div>
								</div>
								
								<div class="divider-line"></div>
								<h6>Pré-reserva</h6>
								<p>Já tem uma data que gostaria de reservar um profissional? Informe aqui e nossa equipe entrará em contato o mais breve possível. </p>
								<div class="row">
									<div class="col-sm-4 col-md-5">
										<div class="datetimepicker-wrap">
											<input type="text" name="date" class="form-control input-custom input-custom--sm datetimepicker" placeholder="Data">
										</div>
									</div>
									<div class="visible-xs text-center">
										<p>Any time between</p>
									</div>
									<div class="col-sm-8 col-md-7 text-right text-center-xs">
										<span class="hidden-xs">Horário das &nbsp;</span>
										<div class="select-wrapper select-wrapper--sm select-time">
											<select name="time1" class="input-custom input-custom--sm">
												<option value="8:00">8:00</option>
												<option value="9:00">9:00</option>
												<option value="10:00">10:00</option>
												<option value="11:00">11:00</option>
												<option value="12:00">12:00</option>
												<option value="13:00">13:00</option>
												<option value="14:00">14:00</option>
												<option value="15:00">15:00</option>
												<option value="16:00">16:00</option>
											</select>
											
										
										</div>
										<span>&nbsp;às&nbsp;</span>
										<div class="select-wrapper select-wrapper--sm select-time">
											<select name="time2" class="input-custom input-custom--sm">
												<option value="8:00">8:00</option>
												<option value="9:00">9:00</option>
												<option value="10:00">10:00</option>
												<option value="11:00">11:00</option>
												<option value="12:00">12:00</option>
												<option value="13:00">13:00</option>
												<option value="14:00">14:00</option>
												<option value="15:00">15:00</option>
												<option value="16:00">16:00</option>
											</select>
										</div>
									</div>
								</div>
								<div class="divider"></div>
								<h6>Qual o tipo de serviço?</h6>
								<div class="select-wrapper select-wrapper--sm">
									<select name="service" class="input-custom input-custom--sm">
										<option value="" disabled selected>- Selecione -</option>
										<?php
										/* LISTAGEM DOS SERVIÇOS DISPONIVEIS */
										include "include-servicos.php"; //contem os arrays com os titulos, descrição e imagem de cada item
										$qtd = count($titulo);
										for ($i = 0; $i < $qtd; $i++){ //faz o loop conforme a qtde de itens do array tendo como base o array titulo
										?>
										<option value="<?php echo $titulo[$i];?>"><?php echo $titulo[$i];?></option>
										<?php } ?>
									</select>
								</div>
								<div class="divider"></div>
								<div class="divider-line"></div>
								<div class="divider"></div>
								
								<div class="text-center">
									<button type="submit" class="btn btn-wide">ENVIAR FORMULÁRIO</button>
								</div>
								<div class="divider"></div>
								<div class="successform text-center">
									<div class="divider-line"></div>
									<p>Enviado com sucesso!</p>
									<div class="divider"></div>
								</div>
							</form>
						</div>
					</div>
					<div class="col-lg-4 visible-lg">
						<img src="images/content/order-form-img.jpg" class="img-fullwidth" alt="">
					</div>
				</div>
			</div>
		</div>
	</main>
<?php include_once "footer.php"; ?>