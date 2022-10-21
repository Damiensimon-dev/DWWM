<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '+i1wiHqtZZPd@yv!epZcD!95oXU;2ac%H-2Flf8B8cY|)w+6F^@v8ZItG #T{{pp' );
define( 'SECURE_AUTH_KEY',  'E:&[r0(Vt=~qW1Pd+37azZZ*L_o/I1.`9x/.d+.79!)(v:<xjqB1jL{2Kt !Z@i=' );
define( 'LOGGED_IN_KEY',    '#{=,/VjTCD!:g~$U=0]jE UF?HYFJJLJoVy,P4+haeHt<=?Eu|`ahi{-lRN7Rod+' );
define( 'NONCE_KEY',        '~j6z/ewC@JxBKn`q?dS41tWt40I*P$^~Ta3lPHD2{?@$LZ%&8^>%> 5I~FPr}D,`' );
define( 'AUTH_SALT',        '3J(c%y4%)Y/@IqVBk0jYf&,Qr7nbJN:V!D&&5u&0k~/pkDexP]-{2Qiuo$BG4)-V' );
define( 'SECURE_AUTH_SALT', ' KE!7/gcl(&[p6wd<Ni-HB,P$Uhxn!arDgMLe94jg6[Reh6>Wer{K[]D_lp*?TM{' );
define( 'LOGGED_IN_SALT',   'Hq cR8[cY+f61 jIWWUqxFGPUw_<! JSQ;;}q9zM_w.l2V#{:y#J)k9Q/qr{Cnl!' );
define( 'NONCE_SALT',       'AUbQad*t#5mjX.q7/YL|=x?XW~QHUSpC5+l+~*&mz4)mxRDgY3FErog=0Nf!]6?R' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
