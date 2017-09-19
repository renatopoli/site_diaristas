<div class="container">
				<ul class="menu">
					<li><a href="home">HOME<span class="arrow"></span></a></li>
					<li><a href="empresa">Empresa</a></li>
					<li><a href="servicos">Serviços<span class="arrow"></span></a>
						<ul class="sub-menu">
						<?php
						/* WIDGETS */
						include "include-servicos.php"; //contem os arrays com os titulos, descrição e imagem de cada item
						$qtd = count($titulo);
						for ($i = 0; $i < $qtd; $i++){ //faz o loop conforme a qtde de itens do array tendo como base o array titulo
						?>
							<li><a href="<?php echo $link[$i]; ?>"><?php echo $titulo[$i]; ?></a></li>
						<?php } ?>
							
						</ul>
					</li>
					<li><a href="#">Blog<span class="arrow"></span></a></li>
					<li><a href="contato">Contato</a></li>
				</ul>
			</div>