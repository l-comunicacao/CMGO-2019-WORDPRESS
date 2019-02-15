<?php

// $dias = ['<div class="dia">15/</div>abr','<div class="dia">15/</div>jul','<div class="dia">15/</div>Out','<strong>Local</strong>'];
// $ativo = 1;
// $categorias = [
// 	'Médicos Associados SBRH' => ['550,00 ','650,00 ','750,00 ','850,00 '],
// 	'Médicos Novos Associados (Afiliação + Congresso)' => ['910,00','1.010,00','1.110,00','1.210,00'],
// 	'Médicos Não Associados' => ['950,00','1.050,00','1.150,00','1.250,00'],
// 	'Embriologistas / Psicólogos / Enfermeiros Associados SBRH' => ['250,00','300,00','350,00','400,00'],
// 	'Novos Associados Embriologistas / Psicólogos / Enfermeiros ' => ['370,00','420,00','470,00','510,00'],
// 	'Embriologistas / Psicólogos / Enfermeiros Não Associados' => ['400,00','450,00','500,00','550,00'],
// 	'Residentes' => ['300,00','380,00','460,00','540,00'],
// 	'Acadêmicos' => ['200,00','250,00','300,00','350,00'],
// 	'Outros Profissionais' => ['500,00 ','600,00 ','700,00 ','800,00 '],



// $dias = ['<div class="dia">28/</div>Set','<div class="dia">15/</div>Out','<strong>Local</strong>'];
// $ativo = 0;
// $categorias = [
// 	'Médicos Associados SBRH' => ['650,00 ','700,00 ','750,00 '],
// 	'Médico Endocrinologistas Associados <br>SBEM' => ['650,00 ','700,00 ','750,00 '],
// 	'Médicos Não Associados' => ['1.050,00','1.150,00','1.250,00'],
// 	'Embriologistas / Psicólogos / Enfermeiros Associados SBRH' => ['200,00','250,00','300,00'],
// 	'Embriologistas / Psicólogos / Enfermeiros Não Associados' => ['450,00','500,00','550,00'],
// 	'Residentes' => ['300,00','350,00','400,00'],
// 	'Acadêmicos' => ['250,00','300,00','350,00'],
// 	'Outros Profissionais' => ['600,00 ','700,00 ','800,00 '],


// $dias = ['<div class="dia">17/</div>Out','<strong>Local</strong>'];
// $ativo = 0;
// $categorias = [
// 	'Médicos Associados SBRH' => ['650,00 ','750,00 '],
// 	'Médico Endocrinologistas Associados <br>SBEM' => ['650,00 ','750,00 '],
// 	'Médicos Não Associados' => ['1.050,00','1.250,00'],
// 	'Embriologistas / Psicólogos / Enfermeiros Associados SBRH' => ['200,00','300,00'],
// 	'Embriologistas / Psicólogos / Enfermeiros Não Associados' => ['450,00','550,00'],
// 	'Residentes' => ['300,00','400,00'],
// 	'Acadêmicos' => ['250,00','350,00'],
// 	'Outros Profissionais' => ['600,00 ','800,00 '],

$dias = ['<div class="dia">17/</div>Out','<div class="dia">31/</div>Out','<strong>Local</strong>'];
$ativo = 2;
$categorias = [
	'Médicos Associados SBRH' => ['650,00 ','700,00 ','750,00 '],
	'Médico Endocrinologistas Associados <br>SBEM' => ['650,00 ','700,00 ','750,00 '],
	'Médicos Não Associados' => ['1.050,00','1.150,00','1.250,00'],
	'Embriologistas / Psicólogos / Enfermeiros Associados SBRH' => ['200,00','250,00','300,00'],
	'Embriologistas / Psicólogos / Enfermeiros Não Associados' => ['450,00','500,00','550,00'],
	'Residentes' => ['300,00','350,00','400,00'],
	'Acadêmicos' => ['250,00','300,00','350,00'],
	'Outros Profissionais' => ['600,00 ','700,00 ','800,00 '],





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
							<?php if ($x != $last){ ?>
							Até
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
			<?php foreach ($categorias as $categoria => $valores){ ?>
				<tr>
					<td class="categoria"><?php echo $categoria; ?></td>
					<?php foreach ($valores as $x => $valor){ ?>
						<td class="<?php echo ($x!=$ativo)?'inativo':'ativo' ?>">R$ <?php echo $valor; ?></td>
					<?php } ?>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>