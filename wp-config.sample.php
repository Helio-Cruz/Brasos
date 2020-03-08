<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wp_brasos' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'admin' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '120688' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'fc0p8-pzx|X+|LMQv *M8=mQwR]P0iSw|!rjBKs/sp/Et  AyXAqYq%;^k|s->h*');
define('SECURE_AUTH_KEY',  't<c|XyeC>K$&404o?1h|^K3M =+5EySQpBMs|T h69dljsZm?Px5^J(]+;5+_xKT');
define('LOGGED_IN_KEY',    'jRV9dngu=#/sL~(7^?0hUXS{R(mS/$hG[~dEF*k0dx^n+c^[M Ok2.sE0fV~/,<l');
define('NONCE_KEY',        ':[sG|)L@B2JfNezN@Em:;%Tt!L?1xyi8DN1qm~MxE>OVV&h /6Hh>`N>V;VXu!ql');
define('AUTH_SALT',        'K+/E8U$HV>+3NEQN|Vpm,!G>&:R0.|KJRQMd#vax;)^@^(e@/&X$P/;jn5r6:J$P');
define('SECURE_AUTH_SALT', 'sg{7M2(-/V<44~<+-UP#WjXK7ikfR[)nk@1_~JpSq|T7]PNDACDQ>+(7S-bH2qJe');
define('LOGGED_IN_SALT',   'x.8OzoN:>j7C:I=|BVbMh(_R*y6vrw2>y+xg?vc`1J|fke_^bru$0Y[O~D){C4i*');
define('NONCE_SALT',       'SS|5_bZ(u<15n~[CWtV+Xo*=<efgb)GX1}ue<|>ULb[IQX(&bX6E<n#n;>Kkj pr');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

define('WP_CONTENT_URL', 'http://localhost/Agencia-Fazer/Brasos/content');
define('WP_CONTENT_DIR', dirname(__FILE__).'/content');
/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

 

if (WP_DEBUG){

define('WP_DEBUG_LOG', true);

define('WP_DEBUG_DISPLAY',true);

define('WP_POST_REVISION',false);

define('EMPTY_TRASH_DAYS',0);

} else{


define('DISALLOW_FILE_MODS',true);

define('WP_POST_REVISION', 5);


define('EMPTY_TRASH_DAYS',15);


}

// J'ordonne à WordPress d'utiliser la méthode "simple"/"classique" pour
// manipuler les fichiers.
// Pas besoin de FTP ni de SSH, ma machine est bien configurée & sécurisée !
define('FS_METHOD', 'direct');

// Je désactive l'éditeur embarqué.
// 1 - Je n'en ai pas besoin, moi j'ai VSCODE !
// 2 - Mieux vaux pas que Mme Michu touche aux fichiers PHP !
define('DISALLOW_FILE_EDIT',true);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
