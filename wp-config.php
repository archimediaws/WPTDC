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
define('DB_NAME', 'wptdc');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'I4$$TS< WY7WX=9Iv`x2~hKB<&BhJxeKbIB6#>t8{I.8TP@Ch0/5#y)wA*cB/%Z ');
define('SECURE_AUTH_KEY',  '/?1nN)g}ilh!>+I4$yf;6D488WxaB<b2$BtO^lhJ^C&>p_/+,8RKzA-yqy=z[O:?');
define('LOGGED_IN_KEY',    '>z8Cpj(=qe+*EMDiLX+t|wr,YV#rxO9@?iY4I2Z)3T-7dl>*<S4x^R5c C&<>YEx');
define('NONCE_KEY',        'X5+w,TF;Ahq[iptr6zvX5>h|Kn&#ls2W+/!AXm4UQUSk=bt=<|Z=X#cuT57/jU71');
define('AUTH_SALT',        'D|2DX4~S+<FRmP/>AI34 VwyeO`.+ToPY(.1Gk(ula+zATNiF1X~LQ[4?Qr.Mviv');
define('SECURE_AUTH_SALT', 'W^o5an$mDmCcBTd#c?QRdq{~ nsB^osQ^BUv.prTGk*DQm4`c}eEn37,_MV6&ugl');
define('LOGGED_IN_SALT',   'l+DRFj?v5zJ@k6W5AkshqBsS1y!im#_T;H(hLL)8!%sSago1_,|,ju-bgSR!X_RC');
define('NONCE_SALT',       '2kM 7<HoY$jh@k16ZVvzauo bB!C,d&Zw2E_e~-J]ESTtAo@X]]75]ws(9k<KYj[');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');