<?php
global $listaProgramacao;
$atividades = get_atividades($listaProgramacao);
foreach ($atividades as $atividade) {
	$atividade->palestrantes = get_conectados($atividade->ID, 'atividades_palestrantes');
	$atividade->palestras = get_conectados($atividade->ID, 'atividades_palestras');

	foreach ($atividade->palestras as $palestras) {
		$palestras->palestrantes = get_conectados($palestras->ID, 'palestras_palestrantes');
	}
}

$class = 'sala-'.$listaProgramacao->slug;

foreach ($atividades as $atividade){
	echo print_programacao_corrida($atividade, $class);
	if (!empty($atividade->palestras)) {
		foreach ($atividade->palestras as $palestra) {
			echo print_programacao_corrida($palestra, $class.' palestra');
		}
	}
}