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
define( 'DB_NAME', 'auto_wordpress' );

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
define( 'AUTH_KEY',         '>f+2UqK?HsKxNbiqA~aks},7D.Iz*6>Rap?}C<Eh^%a$z* .81O%WCz^kc.3z$4:' );
define( 'SECURE_AUTH_KEY',  ':nz&KG*y@$4}C+NEu]AW0(ck=fH*$n!U#Qn:=c5-%pvJbBd?:O`{rAx)wuHbuXQW' );
define( 'LOGGED_IN_KEY',    'u2BwLe7@U>I`%@r]i~Bk~5A[DYOd]KR@-_Dnwp|v_GyH@J]~3a;.F9A.;8wbm,SR' );
define( 'NONCE_KEY',        'y}^u&pi`;4hH,if_|r^Eo%J(jc:U|_@GQcMLw4Y;o)jy(u@dwMVIOVXE;u8|/#KO' );
define( 'AUTH_SALT',        'd$1-Kg~emt<kPZCi|ut3nK`vM4hxqjQzidlc[o*k@XAu:}Z3 hgu<#.!1C1^F8?W' );
define( 'SECURE_AUTH_SALT', 'VZMk` ,%#NN6$7;`WVc4p;31L#HvV+@_-E^db9Ctd6ivm8OizK=<nah+0x}f4Vw$' );
define( 'LOGGED_IN_SALT',   '4W@+Nx!6]d--WS}VITuHpm}^l)9] zUH{yDqZ}L}1o8L8X]/1t2*T(&i`{ >hg$#' );
define( 'NONCE_SALT',       ' 2|NGb82@7df&LE  gS;B-.k@)>|&lobBq8 #&HBpF^hK9|YT&Y1c,y}#IRXm[|;' );
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
