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

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'site_hawks_db' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'blaziken07' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'bmE(*TTJWeP!3),.#z=kN(ag$]~2@*r(t$>0];6(sNjKqmM8cJ3^A%c)zMZS IwU' );
define( 'SECURE_AUTH_KEY',  '|N@VwK1xecWw1/^-;vj7rV)(BX(o0cs079m$Tsv#^E@9TIP)g,@*=YIXZ|^FtC*n' );
define( 'LOGGED_IN_KEY',    '~a$ws0eggg1TiS@ JkT;CM`.PIw+V`Q6,F8B{A$Eb&$+4p[h5[RG8RL|;9#,HGbW' );
define( 'NONCE_KEY',        'wJ1QSKJj)rUkw8BAhu{2b/wF|%whVhIg{qye2o cZq ?cJl9e(|sNa8W#/9LpTZ!' );
define( 'AUTH_SALT',        ';gZouFP`]4:k8UAtA=[87+|eq9/yJ@m&[SzOB`~)jKQc;Bg 1<%}1MlNbxeT?X_$' );
define( 'SECURE_AUTH_SALT', 'UsRl.0enfyT,)HX*`EY#(Z`]`ucwHAPkJgHr|yDU_5EB#MT[b<UhGI|<S7gKawFQ' );
define( 'LOGGED_IN_SALT',   'lK[t~FL7SE>ElT{P0?:n_3i^3*Zl7WmWV9~kTGPuDK_vblM%L[~Sw8@x}{?0B.jK' );
define( 'NONCE_SALT',       'xE~RbwyFACv]N6m`&R-6;k(qznO{&s3S,qO3?L_$jyu2`4CE,Hp0*8TAus[]Pwkk' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
