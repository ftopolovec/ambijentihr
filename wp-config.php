<?php
/**
 * Temeljna konfiguracija WordPressa.
 *
 * wp-config.php instalacijska skripta koristi ovaj zapis tijekom instalacije.
 * Ne morate koristiti web stranicu, samo kopirajte i preimenujte ovaj zapis
 * u "wp-config.php" datoteku i popunite tražene vrijednosti.
 *
 * Ovaj zapis sadrži sljedeće konfiguracije:
 *
 * * MySQL postavke
 * * Tajne ključeve
 * * Prefiks tablica baze podataka
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL postavke - Informacije možete dobiti od vašeg web hosta ** //
/** Ime baze podataka za WordPress */
//define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'E:\xamp\htdocs\ambijentihr\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'ambijentihr');

/** MySQL korisničko ime baze podataka */
define('DB_USER', 'root');

/** MySQL lozinka baze podataka */
define('DB_PASSWORD', '');

/** MySQL naziv hosta */
define('DB_HOST', 'localhost');

/** Kodna tablica koja će se koristiti u kreiranju tablica baze podataka. */
define('DB_CHARSET', 'utf8mb4');

/** Tip sortiranja (collate) baze podataka. Ne mijenjate ako ne znate što radite. */
define('DB_COLLATE', '');

define( 'WP_MEMORY_LIMIT', '256M' );

/**#@+
 * Jedinstveni Autentifikacijski ključevi (Authentication Unique Keys and Salts).
 *
 * Promijenite ovo u vaše jedinstvene fraze!
 * Ključeve možete generirati pomoću {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org tajni-ključ servis}
 * Ključeve možete promijeniti bilo kada s tim da će se svi korisnici morati ponovo prijaviti jer kolačići (cookies) neće više važiti nakon izmjene ključeva.
 *
 * @od inačice 2.6.0
 */
define('AUTH_KEY',         ')uZwHM-*7i$P-Yr&5qzRp}IGOmkRJ[N3KeD1$-YgY/o3<s2~}OH*_ZF<6-L0<F6u');
define('SECURE_AUTH_KEY',  'Iy76{G;S.J,`pw0nkp|=v3}!;]m[5Oxq8A?ClA%] [:AF76K%0E{jI2G]#H?X:zz');
define('LOGGED_IN_KEY',    '#7P%yO_&Nt>)&x7z0Jc$$2qu[FCHk*G;3i`(%|:!8|-uZge6W!Bmh!B9GjKja(1x');
define('NONCE_KEY',        'D3dS J)OIQRGP)|^ @77&mKiK9&6p*CaGzr8SIRg${rq;)Z}NtRFG%_byBk>?<1z');
define('AUTH_SALT',        'E9GEH1L,z||[:<axWICPy9 H|B]VbFl|c+)o]l11=|a26J[g&TB/:r$zVz:@aQm*');
define('SECURE_AUTH_SALT', '*U--Uej@|`.M0TS2y|WLg->*jrIojep,?F-6z~el2z*ebl(APXlHj*|42!gxjMWF');
define('LOGGED_IN_SALT',   '+Z-bz-h3TN=40e/zeo6}x{c^ITVTz1u:K7|7yuy82f@SMw&$P{6T2DpqKJ2az5{7');
define('NONCE_SALT',       '1:kOr0QLw>|jW K|quH)[GECN,12c:PF6}6oR4HVo/!6~R+l^|,w36QQe]8,sQmV');

/**#@-*/

/**
 * Prefix WordPress tablica baze podataka.
 *
 * Možete imati više instalacija unutar jedne baze ukoliko svakoj dodjelite
 * jedinstveni prefiks. Koristite samo brojeve, slova, i donju crticu!
 */
$table_prefix  = 'amb_';

/**
 * Za programere: WordPress debugging mode.
 *
 * Promijenit ovo u true kako bi omogućili prikazivanje poruka tijekom razvoja.
 * Izrazito preporučujemo da razvojni programeri dodataka (plugin) i tema
 * koriste WP_DEBUG u njihovom razvojnom okružju.
 *
 * Za informacije o deugim konstantama koje se mogu koristiti za debugging,
 * posjetite Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* To je sve, ne morate više ništa mijenjati! Sretno bloganje. */

/** WordPress apsolutna putanja do WordPress mape. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Postavke za WordPress varijable i već uključene zapise. */
require_once(ABSPATH . 'wp-settings.php');
