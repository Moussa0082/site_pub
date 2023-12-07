<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'site_pub' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'r=[D&U1Zm1{@X3;[6^7}}Wq|@6Gnoj9RVzH/nLHZmB[CH6,`BSgdMEeQ05N=+hMm' );
define( 'SECURE_AUTH_KEY',  '5;t]cZBhXMAJu@.&$_05%XFN0(gXMxN6O&])|G+0>OB{U2YmQ!FE?nGVDgGrq6%/' );
define( 'LOGGED_IN_KEY',    '2VaX[ t1v~d<8.Ng9DgRl,lykdgDhu0<MG=~$&Ty(^iW5,wD{ sGoJ8><{la!Tj9' );
define( 'NONCE_KEY',        '6*T2!I{ vp,_)$a(i.5rS<W6:+{h]jN`n4(~4Bv$U$T[&5p3fLI0E}C+mkp#h!+@' );
define( 'AUTH_SALT',        '(4=s8>NxuW;#w#<N{77[d@p!@?%XM(6!|k4(@!-RSpuOi2#+khUH>p~>p#6i_5WP' );
define( 'SECURE_AUTH_SALT', '.D]$~SVtr h5mjK&NZs3y9&|FLEKFsrP/IB(|+aNi4W4SjWOJiEu/<e]L8xa<?Gz' );
define( 'LOGGED_IN_SALT',   '?I<)6u#lv5^aK*c^{w*nB(Bes=FVkuWvW[;ilqy5 /w.y0=^:$>Zr/UA> Bp,#lq' );
define( 'NONCE_SALT',       'r:&Q+V9j8@cFUJ7krFC)K=y{9I#=[:)N,ED++nebNwL;P7#8>wq,rT_l_FAR3#=3' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
