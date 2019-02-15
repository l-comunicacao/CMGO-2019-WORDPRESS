<?php
/*
Template Name: Palestrantes Nacionais
*/
?>
<?php get_header(); ?>
<?php the_post(); ?>

<div class="entrada">
	<div class="fundo-parallax" style="background: url(<?php the_field('imagem_fundo'); ?>);" data-stellar-background-ratio="0.5">
		<h1 class="titulo-principal"><?php the_title(); ?></h1>
	</div>

	<?php $categorias = get_terms([
		'taxonomy' => 'cat_palestrante',
	    'exclude' => [28, 29],
	    'hide_empty' => false
	    ]);
	?>
	<div class="conteudo-entrada">
		<div class="container">
			<div class="row justify-content-center">
					<div class="col">&nbsp;</div>
					<div class="col-12 col-md-5">
						<div class="box-outros-palestrantes">
							<div class="dash"></div>
							<h2>A-J</h2>
<span>• Adelino Amaral Silva (DF) <br>
• Agnaldo Lopes da Silva Filho (MG) <br>
• Almir Antônio Urbanetz (PR) <br>
• Altina Castelo Branco Almeida Barros (PE) <br>
• Alvaro Petracco (RS) <br>
• Álvaro Pigatto Ceschin (PR) <br>
• Amanda Cristina Braga de Oliveira (SP) <br>
• Ana Carolina Japur de Sá Rosa e Silva (SP) <br>
• Ana Cláudia Brito Costa Fernandes (MG) <br>
• Ana Lúcia Ribeiro Valadares (MG) <br>
• Ana Luisa Menezes Campos (MG) <br>
• Ana Luiza Lunardi Rocha (MG) <br>
• Anièlle Stipp Amador Travain  (PR) <br>
• Antonio César Paes Barbosa (DF) <br>
• Antônio Eugênio Motta Ferrari (MG) <br>
• Antônio Hélio Oliani (SP) <br>
• Aryane Moreira dos Santos  (SP) <br>
• Augusto Barbosa Reis (MG) <br>
• Barbara Barrozo Siqueira (MG) <br>
• Beatriz de Mattos Silva (DF) <br>
• Beatriz Santana Soares Rocha (MG) <br>
• Bruno Muzzi Camargos (MG) <br>
• Bruno Vinícius Pimenta de Almada (ES) <br>
• Caio Parente Barbosa (SP) <br>
• Carlos Alberto Marcondes de Oliveira (SP) <br>
• Carlos Alberto Petta (SP) <br>
• Carlos Gilberto Almódin (PR) <br>
• Carlos Henrique Mascarenhas Silva (MG) <br>
• Carolina Tereza Kimati (SP) <br>
• Caroline Bianco Lourenço (SP) <br>
• Caroline Cançado Avelar (MG) <br>
• Cássia Maria de Carvalho Cançado Avelar (MG) <br>
• César Augusto Cornel (PR) <br>
• César Eduardo Fernandes (SP) <br>
• Claudete Reggiani (PR) <br>
• Cláudia Lúcia Barbosa Salomão (MG) <br>
• Cláudia Navarro Carvalho Duarte Lemos (MG) <br>
• Claudio Barros Leal Ribeiro (PE) <br>
• Condesmar Marcondes de Oliveira Filho (SP) <br>
• Cristiane Araujo de Oliveira  (MG) <br>
• Cristiano Eduardo Busso (SP) <br>
• Cristina Aparecida Falbo Guazzelli (SP) <br>
• Daniela Ogera Pudeulko (PR) <br>
• Daniela Scherer da Silva (RS) <br>
• Daniela Sacconi (SP) <br>
• Danielle Telles Schneider (SP) <br>
• Darlete Lima Matos (CE) <br>
• Débora Marcodes Farinati (RS) <br>
• Denise Cristina Mós Vaz Oliani (SP) <br>
• Edilberto de Araújo Filho (SP) <br>
• Edmund Chada Baracat (SP) <br>
• Edna Maria Câmara Sant´Anna (MG) <br>
• Edsel Renata de Morais Nunes (SP) <br>
• Edson Guimarães Lo Turco (SP) <br>
• Eduardo Camelo de Castro (GO) <br>
• Eduardo Dale (RJ) <br>
• Eduardo Leme Alves da Motta (SP) <br>
• Eleonora Bedin Pasqualotto (RS) <br>
• Eliano Arnaldo José Pellini (SP) <br>
• Emerson Barchi Cordts (SP) <br>
• Érika Becker de Souza Xavier (MG) <br>
• Eunice Francisca Martins (MG) <br>
• Fabiane Dias Lopes (MG) <br>
• Fabiene Bernardes Castro Vale (MG) <br>
• Fabio Eugênio Magalhães Rodrigues (CE) <br>
• Fábio Firmbach Pasqualotto (RS) <br>
• Fabiola Moura da Costa (MG) <br>
• Felipe Lazar Júnior (SP) <br>
• Fernanda Kunrath Robin (RS) <br>
• Fernanda Souza Peruzzato (SC) <br>
• Fernando César Sanches (SC) <br>
• Fernando Marcos dos Reis (MG) <br>
• Flávia da Silva Chiamba (SP) <br>
• Francieli Oliveira Duarte (SP) <br>
• Francisco de Assis Nunes Pereira (MG) <br>
• Gabriel Costa Osanan (MG) <br>
• George Hamilton Caldas Silveira  (SE) <br>
• Glaucia de Freitas Batista Andrade (MG) <br>
• Gustavo Arantes Rosa Maciel (SP) <br>
• Gustavo Cancela e Penna (MG) <br>
• Helena Maria Loureiro Montagnani (SP) <br>
• Helena Prado Lopes (RJ) <br>
• Hérica Cristina Mendonça (MG) <br>
• Heron Werner Júnior (SP) <br>
• Hitomi Miura Nakagawa (DF) <br>
• Ines Katerina Cruzeiro Damasceno (MG) <br>
• Irineu Iester Degasperi (ES) <br>
• Isaac Moises Yadid (RJ) <br>
• Ivan Henrique Yoshida (SP) <br>
• Jaqueline Sousa Leite (SP) <br>
• Jean Pierre Barguil Brasileiro (DF) <br>
• João Pedro Junqueira Caetano (MG) <br>
• João Sabino Lahorgue da Cunha Filho (RS) <br>
• Joao Tadeu Leite dos Reis (MG) <br>
• Joaquim Roberto Costa Lopes (BA) <br>
• Joji Ueno (SP) <br>
• Jonathas Borges Soares (SP) <br>
• José Aldair Kotecki (MT) <br>
• José Maria Soares Júnior (SP) <br>
• José Roberto Alegretti (SP) <br>
• José Tadeu Campos de Avelar (MG) <br>
• Juliana Assi (SP) <br>
• Juliana Cristina da Costa (MG) <br>
• Juliana Cuzzi (SP) <br>
• Juliana Roberto dos Santos (SP) <br></span><br>
						</div>
					</div>

					<div class="col-12 col-md-5">
						<div class="box-outros-palestrantes">
							<div class="dash"></div>
							<h2>K-Z</h2>
<span>
• Karina Aparecida Versiani (MG) <br>
• Karina Medeiros de Abreu (MG) <br>
• Kátia Maria Straube  (PR) <br>
• Kelly Colussi Pinheiro Precipito (SP) <br>
• Kleber Morais (RN) <br>
• Laura Maria Almeida Maia (MG) <br>
• Leopoldo de Oliveira Tso (SP) <br>
• Letícia Couto Motta Piccolo (ES) <br>
• Lia Mara Netto Dornelles (RS) <br>
• Lídio Jair Ribas Centa  (PR) <br>
• Lilian Lage Magalhães (MG) <br>
• Lucas Vianna Machado (MG) <br>
• Lucia Alves da Silva Lara (SP) <br>
• Luciana Leis (SP) <br>
• Ludmila Machado Neves Bercaire (SP) <br>
• Luiz Augusto Antônio Batista (GO) <br>
• Luiz Eduardo Trevisan de Albuquerque (SP) <br>
• Luiz Fernando Dale (RJ) <br>
• Marcelo Giacobbe (SP) <br>
• Marcelo Horta Furtado (MG) <br>
• Marcelo Lopes Cançado (MG) <br>
• Marcelo Zugaib (SP) <br>
• Márcia Riboldi (SP) <br>
• Márcio Alexandre Hipólito Rodrigues (MG) <br>
• Marco Antônio Barreto de Melo (MG) <br>
• Marcos Aurélio Coelho Sampaio (MG) <br>
• Marcos Felipe Silva de Sá (SP) <br>
• Maria Cecília Erthal de Campos Martins (RJ) <br>
• Maria do Carmo Borges de Souza (RJ) <br>
• Maria Gabriela Sant´anna Silva (MS) <br>
• Maria Marta Sarquis Soares (MG) <br>
• Maria Regina Moreira dos Santos de Aquino (MG) <br>
• Maria Yolanda Makuch (SP) <br>
• Mariana Nicolielo Barreto (SP) <br>
• Mariangela Badalotti (RS) <br>
• Marina Leal Bicelli de Aguiar (DF) <br>
• Mário Silva Approbato (GO) <br>
• Marta Curado Carvalho Franco Finotti (GO) <br>
• Matheus Roque (RJ ) <br>
• Maurício Barbour Chehin (SP) <br>
• Michelle Borges (BA) <br>
• Moacir Rafael Martins Radaelli (PR) <br>
• Moísa Lúcia Pedrosa Corrêa da Silva (MG) <br>
• Monique Bonavita Bueno (SP) <br>
• Mychelle de Medeiros Garcia Torres (RN) <br>
• Newton Eduardo Busso (SP) <br>
• Nilka Fernandes Donadio (SP) <br>
• Nilo Frantz (RS) <br>
• Nilson Roberto de Melo (SP) <br>
• Patrícia Pinho de França (MG) <br>
• Paula Andrea de Albuquerque Salles Navarro (SP) <br>
• Paula Motta Almodin Cerialle (PR) <br>
• Paulo Franco Taitson (MG) <br>
• Paulo Gallo de Sá (RJ) <br>
• Pedro Augusto Araújo Monteleone (SP) <br>
• Pedro Paulo Bastos Filho (BA) <br>
• Philip Wolff (SP) <br>
• Poli Mara Spritzer (RS) <br>
• Rafael Portela (SP) <br>
• Rafaella Gehm Petracco (RS) <br>
• Raquel de Lima Leite Soares Alvarenga (MG) <br>
• Raquel Di Falco Cossielo (SP) <br>
• Raul Eid Nakano (SP) <br>
• Regina Amélia Lopes Pessoa de Aguiar (MG) <br>
• Reginaldo Martello (MG) <br>
• Renata de Lima Bossi (MG) <br>
• Renata Miranda Parca (DF) <br>
• Ricardo Marques de Azambuja (RS) <br>
• Ricardo Mello Marinho (MG) <br>
• Ricardo Vasconcellos Bruno (RJ) <br>
• Rita de Cássia Savio Figueira (SP) <br>
• Rivia Mara Lamaita (MG) <br>
• Roberto de Azevedo Antunes (RJ) <br>
• Rodrigo Barbano Weingrill (SP) <br>
• Rodrigo da Rosa Filho (SP) <br>
• Rodrigo de Carvalho Ribeiro (MG) <br>
• Rogerio Bonassi Machado (SP) <br>
• Rosaly Rulli Costa (DF) <br>
• Rosana Maria dos Reis (SP) <br>
• Rose Marie Massaro Melamed  (SP) <br>
• Rui Alberto Ferriani (SP) <br>
• Sarah Martins (DF) <br>
• Sebastião Freitas de Medeiros (MT) <br>
• Selmo Geber (MG) <br>
• Sidney Glina (SP) <br>
• Silvana Chedid Grieco (SP) <br>
• Stany Rodrigues Campos de Paula (MG) <br>
• Thaís Meirelles de Sousa Maia Ribacionka (DF) <br>
• Thaís Sanches Domingues Cury (SP) <br>
• Thais Serzedello de Paula (SP) <br>
• Thomas Gabriel Miklos (SP) <br>
• Torcata Amorim (MG) <br>
• Tulius Augustos Ferreira de Freitas (CE) <br>
• Vanessa Rodrigues Alves (SP) <br>
• Vania Cibele Minguetti Câmara (PR) <br>
• Vanya Sansivieri Dossi (SP) <br>
• Vinícius Bonato da Rosa (PR) <br>
• Vinicius Medina Lopes (DF) <br>
• Viviane Margareth Scantamburlo Nieheus (PR) <br>
• Waldemar de Almeida Pereira Carvalho (SP) <br>
• Waldemar Naves do Amaral (GO) <br>
• Walter Antônio Prata Pace (MG) <br>
• Wellington de Paula Martins (SP) <br>
• Zelma Bernardes Costa (GO) <br>
</span><br>
						</div>
					</div>
			</div>
		</div>
	</div>

</div>




<?php get_footer(); ?>