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
define( 'DB_NAME', 'bt' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '+.h8ZoG]yV=Y}%4vxkkzh55PCC-2~NUYt|./#A+$^=7t?Y>oyU53.^!yA8`B^aw4' );
define( 'SECURE_AUTH_KEY',  '!.uV0wR+$Jc(Ihj)jeFeq@S<c>brLv=J!JK9a9|YBviKTbvpgmT, q^B*Jfd.dR@' );
define( 'LOGGED_IN_KEY',    'XhrLu275C1)`1iG>2GY}{z8RPwA5MjdaKtOeOw.b]% ?CuQp,vEv5l[q>2.0rJFO' );
define( 'NONCE_KEY',        '48t2t$E4&KeY`#L Q|(`g:[,}FrsW!w_Z8sh?y_s<xVgSoHd>K=BaC;H3$J~$p/L' );
define( 'AUTH_SALT',        '6V@Z>J`F0|/)vjBsZ.4dV}J_q6)>]`[),T}<_t&:J9$zF@fS|TR;@@S&|R[DGN>I' );
define( 'SECURE_AUTH_SALT', '_.:|ltP%RPg0w: !*1atj7aOum!fD5Wb6#A~.^=uKKK+fQ8c#h@m{Dv|&q],L2hD' );
define( 'LOGGED_IN_SALT',   'o0ILwIY=H{hsU-X8p1<$#lWMA51}6hko?4=1SCn7V08MwnFQ6dqN2Arl&G^CXarP' );
define( 'NONCE_SALT',       'uS] s7__ EdJ(GY9IAiG* (/K1mr<:Ae3;++vMR)xIsBfZ7}0^#]UQwcpNqluCh^' );

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
