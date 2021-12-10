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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
define('WP_HOME','https://teste5.b2s.marketing/');
define('WP_SITEURL','https://teste5.b2s.marketing/');
define('FS_METHOD','direct');
define( 'WP_MEMORY_LIMIT', '1024M' );
// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'eos' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'efc;2505xx' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'a4t^4-php~j],?X3HiNTE|~%1>ce?ZF+g(ovM|-tzr#hliP.VNSYC_Bu{cn}zM1,' );
define( 'SECURE_AUTH_KEY',  'L<K<(5`q5M^`KOaGo2u,TQY[oV_LfNNGGQQ6$CDC6.:cjrnevG>~2$t`$o=o6_Qc' );
define( 'LOGGED_IN_KEY',    'fbo5qa0aoTDIKaF==+uk.c@6vd4igS5 ; 1N!C}pn@*esnVkOE],m}=h.8|]n8CO' );
define( 'NONCE_KEY',        ',DwRDlMw}]3_N}q/r8=DGg8:~wBrpJ:p;Q/foXYJjcV}N|qv Ofvw|d)_{>&#T~.' );
define( 'AUTH_SALT',        'K|Q<BP@Q0dC=~8$#b}v<oavoxg2n.lj48|JFVif0d07I)lyWd++-{(QAAuxL&WI4' );
define( 'SECURE_AUTH_SALT', '*#yag9j_R.?107@XUg_X+|fP_FmXmvyBKX&vbfu+Cg0nVZ}5W8s_[qfyf8PBUEGt' );
define( 'LOGGED_IN_SALT',   '>jsFz<b7DuC.^s!fo2!sbS?S:Ckhh_b$A=C/2G+^M9s)&gb,Avv:`z7j8},dIZ{}' );
define( 'NONCE_SALT',       'pNW&*ksE!7XERA3RT*edx6_DFriEo~Ir`Gr[sB/tP%Ux,WGNv?6@5 t]K#9W7?=W' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
