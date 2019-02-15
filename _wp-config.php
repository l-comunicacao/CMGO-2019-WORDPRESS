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
define('DB_NAME', 'cbrh');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'MLkIf}.kYu X}(*egb1XrlkFV%S{69lQk5ghQ{#^h^^7zM78K(wTdJ$mDj0gI;rj');
define('SECURE_AUTH_KEY',  ',Oh3Og(= NM&sl6g2`c~O2uE~mh $ ]L%9sM|2BtErsmp>qa1^7Cr*BT.{Vmm`oa');
define('LOGGED_IN_KEY',    '/? ljnT1{jZTw@0tl|_+.S^n/F`IKb7gyk:fv:o,OucU#_3%MC_;^,U;@CrEE}Fo');
define('NONCE_KEY',        'Tax;)#gIS/ 6M~^[xs@ippvx>D`[c.t<Ftd$&EYL|7}8Ry5E2qkZjq9,sPju2+d_');
define('AUTH_SALT',        '9*(`B^)G/K>?Ph)kP)`XmE^&czUTr]wAeCg>.gA${uBf1R:[n6;0FsLxeF7ifYO-');
define('SECURE_AUTH_SALT', 'nS<}Wya~1GID1@Zc=0ikPw~Y_HCJJLpDqHtQ2w8bBO$-v#kZY2%MB.`A|@kXU<b8');
define('LOGGED_IN_SALT',   '%&Xb#JgT[zzsFzzr=AScx>00Dmk*MDZ[#::T`^GPch99);k30&+%->rM:l1v:r)+');
define('NONCE_SALT',       'LV)gC4r7nTe*eXBP&Vz!s?jJ$r@}N}>b*VmtWBwW7(ncs_]gmv64*=yU{-v5t_zj');

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
