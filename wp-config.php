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
define( 'AUTH_KEY',         '39>mr76:[rDG.KN%WW.:]IKwl6?DitvFC#V]PVCLk_p)B=EVuHgmon)tXg wiW;_' );
define( 'SECURE_AUTH_KEY',  'D )b7 .kART6t(]-b1>wl7oaR0kK~WE<F)b0$O$(ikLtFDLXuXtkzFnOto=g)kyf' );
define( 'LOGGED_IN_KEY',    'o=G!Cz)G.mPH,Nzj5#9[]7vf^T>]t2/qG6gVVOj.Rb4qL.N1(iS89!RRFU]Oc]M9' );
define( 'NONCE_KEY',        '<A[a&|OlD>0i~kVI~]o2EX0_{yQ4Gcw;{|B-(O17UeO.<BcA?wt~Z#i^lf?FJ9QR' );
define( 'AUTH_SALT',        '}^g m^gkSq%Y`6;T3QS8).:m:#tQU[4}<s$VgT-m~#$vH]#a|w|)MwTW::EydX2K' );
define( 'SECURE_AUTH_SALT', ' OY1<^Y~5<`w^{xrSL3RV<>4?^zJ/Z6M30@Vd!k,6;fzvHo*YL<jkjg4(d/Qc,Vv' );
define( 'LOGGED_IN_SALT',   'q(h:wML~!ju%Z+RY.=mwxv35xw_ss-5H|huYyPnlz=U3%5#=X@l!nj$~J/T6~1/}' );
define( 'NONCE_SALT',       '_T[Jnn+H1]:ej)20WD_m0Yr%:D!2j Z>$PRin5H>v$ Up-P5R#Mh#ReJwyDj[97t' );

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
