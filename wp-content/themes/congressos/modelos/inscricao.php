<?php get_header(); ?>
<?php the_post(); ?>

<?php get_template_part( 'includes/entrada-pagina' ); ?>

<section class="tabela-inscricao" id="tabela-inscricao">
	<div class="fundo-parallax" style="background: url(<?php echo $fundo; ?>);" data-stellar-background-ratio="0.5">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-10 offset-1 col-md-8 offset-md-0">
					<div class="fundo-site full-size">
						<?php get_template_part( 'includes/tabela-precos' ); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-10 offset-1 col-md-8 offset-md-0">
					<div class="fundo-site full-size">
						<div class="text">
							<div class="dash"></div>
							<h2 class="titulo" style="font-size: 30px;
    margin: 7px 0px;
    text-transform: uppercase;
    font-weight: 700;
    color: #003b65;">
								Cursos
							</h2>
							<div class="conteudo">
								Participe também dos Cursos Intra Congresso que o 28º Congresso da SBRH está organizando para você.
							</div>
							<!-- <a href="https://www.28cbrh.com.br/inscricao/" class="btn btn-outline-primary">Faça sua inscrição</a> -->
						</div>
					</div>
				</div>
				<div class="col-10 offset-1 col-md-7 offset-md-0">
					<div class="fundo-site full-size">
						<?php get_template_part( 'includes/tabela-cursos-precos' ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="chamada">
	<div class="container-fluid">
		<div class="row">
			<div class="col">
				<?php get_template_part( 'includes/chamada-inscricao' ); ?>
			</div>
		</div>
	</div>
</section>



<div class="conteudo-principal-da-pagina">
	<div class="container">
		<div class="row">
			<div class="col">
			  	<?php the_content(); ?>
			</div>
		</div>
	</div>
</div>



<div class="politicas">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md">
				<div class="box">
					<div class="dash_cinza"></div>
					<h2>INSCRIÇÕES<br>NO LOCAL</h2>
					<div class="conteudo">Após 31 de outubro de 2018, as inscrições serão feitas apenas no local do evento. Serão aceitos nesta data, preferencialmente, pagamentos com cheque e cartão de crédito ou débito.</div>
				</div>
			</div>
			<div class="col-12 col-md">
				<div class="box">
					<div class="dash_cinza"></div>
					<h2>CANCELAMENTO<br>DE INSCRIÇÕES</h2>
					<div class="conteudo">As solicitações de cancelamento deverão ser efetuadas até o dia 12 de outubro de 2018, mediante comunicação escrita (encaminhar para o e-mail: sbrh2018@rhodeseventos.com.br. O participante terá direito a restituição do valor pago, deduzido de 30% de encargos administrativos. A devolução será feita em até 60 dias após o evento. A solicitação de cancelamento de inscrição após essa data NÃO será reembolsada.</div>
				</div>
			</div>
			<div class="col-12 col-md">
				<div class="box">
					<div class="dash_cinza"></div>
					<h2>SUBSTITUIÇÕES<br>DE INSCRICOES</h2>
					<div class="conteudo">A inscrição no evento poderá ser transferida para outra pessoa dentro da mesma categoria. Serão aceitas substituições até o dia 12 de outubro de 2018, mediante pedido por escrito, enviado para o e-mail: sbrh2018@rhodeseventos.com.br, juntamente com os dados do novo participante que deverá estar previamente cadastrado no sistema de inscrição.</div>
				</div>
			</div>
		</div>
	</div>
</div>




<?php get_template_part( 'includes/chamada-contato' ); ?>

<?php get_template_part( 'includes/patrocinadores' ); ?>

<?php get_footer(); ?>