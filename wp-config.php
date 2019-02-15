<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'cmgo2019');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'cmgo2019_inscric');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'cmgo2019_inscricao');

/** Nome do host do MySQL */
define('DB_HOST', 'mysql.cmgo2019.com.br');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'x#,N;Xs-}OYOMq>io5-(WvTYx%3 -2KuzbGNj6+%E9]m)V%uv>l+O]Ad(XVt6&sq');
define('SECURE_AUTH_KEY',  '@+BepN`/S$uXG!bacKA?nBR|!B@j/f$hPE~eiw<7lw)&c=9lA>~@ZTC9sR;B~$Gn');
define('LOGGED_IN_KEY',    '-O7!XmAs%uH(=YKg[av^] h1V)>[N4v_Q;]h(kCD7aP}qlezf5=1d_@1V2B-NKp;');
define('NONCE_KEY',        ':Vkx/Jx]dSs<#p0-&^U7?U>N^w(u`hs27j//>lkz2s?+QQFT>(J$PF(0v>D4Pc3t');
define('AUTH_SALT',        '{;v00KLO}WO&or2N%*.=zkMXB#R#R&lXhUVd%X]zR>8{U|~>,p7}*bs@Evp@UJpv');
define('SECURE_AUTH_SALT', '3T8;-&}]yFl/oK/+=-N-6#ur/3tAl7:y%DbW7osGvraIFr(cN+&0^IRL[I$)/V{;');
define('LOGGED_IN_SALT',   '~25p5<6Pv+3c*>MMV=5:mn|#T/>YNFNGwr$JlK[`U>S;gsrZ!-YBgxv51[rlUUE~');
define('NONCE_SALT',       '~i n>qw@yj0Cd0,b/.H3!RJ6H2CTOmm$mY 6>/+s0CpHAZ[S._2[vUFhtqU<-,tY');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
