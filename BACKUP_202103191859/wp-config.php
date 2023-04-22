<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'danielbr_fisiopilatesdobrasil');


/** Usuário do banco de dados MySQL */
define('DB_USER', 'danielbr_dan');


/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'bdfisio1.');


/** nome do host do MySQL */
define('DB_HOST', 'localhost');


/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Ed*%xJGP$|R3gm`ALe=NAvEB|~_kr;uu0<JUoAQf@n Z*J|trOTNfCnOb>+Y[r)A');

define('SECURE_AUTH_KEY',  '5{5mcE{bNTZ%]2Z2L9uzWq/WV,@Jon.! dSGS|mK}gxqPA+Llr+(5Zr|B/+gC(Be');

define('LOGGED_IN_KEY',    '&YV,6|3 04{n7iz~6pZP16aWt/(2g[7h<W}2bZ%e4$b*h1?1d6hJGyBKo+GD!Ht2');

define('NONCE_KEY',        '!+-6?+Eyy^yQ3)GVj-ig|r8cae}C|rp-Y/S`F1hpkXAuV=y7 ;n#/y&*QG J~M)r');

define('AUTH_SALT',        '?Dku?1d=3N^CsDvzSX8pFb92/d^dO?<Em:`J7Wzmj]syR_+:yNrZ5|fA)m&eiRF-');

define('SECURE_AUTH_SALT', 'mhJeP$cHNUlv4;Qr+^9vY4TSGj1Tr,A(q/>)IZL>(y)/Qxh}#a2]s=!i_KDx[h+9');

define('LOGGED_IN_SALT',   'zfqpjJyv`+b44YcNQLxHy9_ +p=gbBBj -oR$h9&=C#+2=[:]527sT}Dm*eYYG$f');

define('NONCE_SALT',       '0 O]MHunWE0LSbk1EFs+h^aSFvgy.Ny`t%w0kPTmj5V*}p&-loP..]RDW(=(?5-r');


/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');
  
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
