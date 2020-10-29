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
define( 'DB_NAME', 'teste' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'V}1hcZJ~PHakoJ6{f1170g,.4Ga};4:ekSwUn*,JyC|Y1G@IQB^OcZdo,`R-y{}$' );
define( 'SECURE_AUTH_KEY',  'G@I)[x~dp9,uA5@@  Ug+5mX9CY?N H#cN^Owa;gLJkfMEtSO2=mts;a@EN8Aaf~' );
define( 'LOGGED_IN_KEY',    'I_(GI(N2(Od}zOR&6y60:aGa(:~O_d;(T2BuA%AXLHksl3g27}y58>m_bPR%V8}=' );
define( 'NONCE_KEY',        '7,k/u$O^Wf`ga=4Dy5pK(9H2VF5b:03LI-c#l1c:m,hF*Bit]NGPZiWam<YbpoB^' );
define( 'AUTH_SALT',        'UR2QoK&VY5={1n}yq9Jcd`_fosULw|9{A2wnSj.c>,U&Uw23cHa5-Hw5l,~HHB5Y' );
define( 'SECURE_AUTH_SALT', '`|rP?MB#:8b|ijtYC4BpKqij?g?I(1%<=Wu0y~0 Lx~55eMI{dN|]g0Gy[H+oIWD' );
define( 'LOGGED_IN_SALT',   'yV_srVw{hMa~&ox9HR$=KO;N9,3Ci$Fppqz]bi={q+hjTcggt;&iR1#-tVif#tQ5' );
define( 'NONCE_SALT',       '/)#*t#ca}*#}I8><:y[]^HS1[cOX]%Tm-:9BqzBW$vP.ntZ!T;tyObr.E9#[>O5L' );

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
