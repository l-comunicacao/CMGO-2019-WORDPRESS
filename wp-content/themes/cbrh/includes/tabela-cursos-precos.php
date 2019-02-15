<?php

$dias = ['<div class="data"></div>','<div class="data">Associados</div><b>SBRH</b>','<div class="dia"></div>','<div class="data"><b>Não</b></div>Associados'];
$ativo = 0 || 4;
$categorias1 = [

'<a href="http://www.28cbrh.com.br/site/curso-de-vitrificacao/"> CURSO TEÓRICO-PRÁTICO EM <br>VITRIFICAÇÃO INGÁMED</a> ' => ['','','',''],
'<p style=" font-weight:  normal;  ">Curso Teórico + Prático Tecidos Germinativos </p>  ' => ['','
R$ 300,00</p>  ','','R$ 600,00</p>'],
'<p style=" font-weight:  normal; ">Curso Teórico + Prático Oócitos e Embriões  </p>  ' => ['','
R$ 200,00</p>  ','','R$ 400,00</p>'],

];

$categorias2 = [
'<p style=" font-weight:  normal;">Somente Curso Teórico  </p>  ' => ['','
Gratuito</p>  ','','Gratuito</p>'],


];
$categorias = [

	
	'<a href="http://www.28cbrh.com.br/site/curso-pratico-de-analise-e-processamento-seminal/" style=" color: #F05436;"> VAGAS ESGOTADAS <br> <a href="http://www.28cbrh.com.br/site/curso-pratico-de-analise-e-processamento-seminal" style=" color: #003b6578;"> CURSO PRÁTICO DE ANÁLISE E <br> PROCESSAMENTO SEMINAL</a> </a> <br><br>' => ['','<a href="#" style=" color: #003b6578;">Gratuito</a><br><br><br>','','<a href="#" style=" color: #003b6578;">R$ 50,00</a> <br><br><br>'],
	
	'<a href="http://www.28cbrh.com.br/site/curso-pratico-de-vitrificacao-de-oocitos-e-embrioes/">CURSO PRÁTICO DE VITRIFICAÇÃO DE <br>OÓCITOS E EMBRIÕES SPECTRUN</a> <br><br>' => ['','R$ 50,00<br><br><br>','','R$ 150,00<br><br><br>'],
	
	'<a href="http://www.28cbrh.com.br/site/curso-pratico-de-biopsia-embrionaria/" style=" color: #F05436;" > ÚLTIMAS VAGAS <br> </a> <a href="http://www.28cbrh.com.br/site/curso-pratico-de-biopsia-embrionaria/"> CURSO PRÁTICO DE BIÓPSIA <br>EMBRIONÁRIA SPECTRUN</a><br><br>' => ['','R$ 50,00<br><br><br>','','R$ 150,00<br><br><br>'],
	
	'<a href="http://www.28cbrh.com.br/site/simulado-pratico-de-inspecao-em-centros-de-reproducao-humana-parceria-sbrh-anvisa/">SIMULADO PRÁTICO DE INSPEÇÃO EM CENTROS DE REPRODUÇÃO ASSISTIDA – BCTGS <br>PARCERIA SBRH / ANVISA</a><br><br>' => ['','R$ 100,00<br><br><br>','','R$ 400,00<br><br><br>'],

];

?>
<div class="tabela-precos">
	<table class="table table-hover table-sm table-responsive">
		<thead>
			<tr>
				<th></th>
				<?php
				$last = count($dias) - 1;
				?>
				<?php foreach ($dias as $x => $dia){ ?>
					<th class="<?php echo ($x!=$ativo)?'inativo':'ativo' ?>">
						<span>
							<?php if ($x == 1){ ?>
							
							<?php }else{ echo '&nbsp';} ?>
						</span>
						<div class="data">
							<?php echo $dia; ?>
						</div>
					</th>
				<?php } ?>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($categorias1 as $categoria => $valores){ ?>
				<tr>
					<td class="categoria" style=" border-bottom:  none;"><?php echo $categoria; ?></td>
					<?php foreach ($valores as $x => $valor){ ?>
						<td class="<?php echo ($x!=$ativo)?'inativo':'ativo' ?>" style=" border-bottom:  none;"> <?php echo $valor; ?></td>
					<?php } ?>
				</tr>
			<?php } ?>

			<?php foreach ($categorias2 as $categoria => $valores){ ?>
				<tr>
					<td class="categoria"><?php echo $categoria; ?></td>
					<?php foreach ($valores as $x => $valor){ ?>
						<td class="<?php echo ($x!=$ativo)?'inativo':'ativo' ?>"> <?php echo $valor; ?></td>
					<?php } ?>
				</tr>
			<?php } ?>

			<?php foreach ($categorias as $categoria => $valores){ ?>
				<tr>
					<td class="categoria"><?php echo $categoria; ?></td>
					<?php foreach ($valores as $x => $valor){ ?>
						<td class="<?php echo ($x!=$ativo)?'inativo':'ativo' ?>"> <?php echo $valor; ?></td>
					<?php } ?>
				</tr>
			<?php } ?>


		</tbody>
	</table>
</div>

