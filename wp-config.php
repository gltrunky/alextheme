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
define( 'DB_NAME', 'alex' );

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
define( 'AUTH_KEY',         'OA!}ONieXi9LQdq(=A!X#zZyXzPTks49F?v0]j0Mm.g~?]iQqf=2f9twJ]KZ(YWv' );
define( 'SECURE_AUTH_KEY',  'KhFC}4>TN7:,?v&nmpekJOLWHp=.Lb!O))c|d!.;#{9GYX|&vaRX#m^4i:,^`ka`' );
define( 'LOGGED_IN_KEY',    'Y8A1d#t;WBJ{>G.ezp!eaR}yixzU^@Kk(VAOz`*}=,$uR+a#K>Ac etuhhH~LP(d' );
define( 'NONCE_KEY',        '(_QlAPRt9Lv%sS*XnFE[hx#l`GwjV*:XQ0qg-Q@M/9H>2wlUkDGUNVJO:+F]IM0J' );
define( 'AUTH_SALT',        'm }NSJ+h6%FAC~hgQ8~Fpl3mDa]<XF|yP.ZjwsZhf3wj2qTjBFT04#)9cW-)9Nnv' );
define( 'SECURE_AUTH_SALT', '?F/g_{LlXFjdb|BB%6j#aziZT7An[!|GZf81)-e#7wx!`Sm1gV%56As4NqLc hKc' );
define( 'LOGGED_IN_SALT',   '}Cj-S2~f[Ci&o$^RZs$tgG%Geqn5uq7Qnh92zW/H?:h^ecO^z3<pCj<|][K_+U-n' );
define( 'NONCE_SALT',       'lhCTq_mUGGrObjX%W~}A4%XY9BF0E}/+s-(4&SB9sx-VDMtT>E7uNIYkfN(8l%&F' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
