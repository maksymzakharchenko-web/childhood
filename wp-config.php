<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'childhood' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'child_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'admin' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'VJm1Q:26x!}&V1>v8av#BJ13G7/h;43W>kP5>fex-Gl+5gVSc^yU>2%ww0nYFgf$' );
define( 'SECURE_AUTH_KEY',  'L:EC(P+;LEHW7HJF5CMkVUTX: yc7]c9<O$$Ylf@zK8tIw2..n;r x(kvm08dktC' );
define( 'LOGGED_IN_KEY',    'A%TiE^w(c*Wrs^tH#!>x(YTqitNa0>c:V@KMHDW)0`__J9`.p):U2=XphD#hh$&8' );
define( 'NONCE_KEY',        '_slaAB,H=%N0qFhZ2a(TnD3a7:dfhy]r7|OEj$ztvbV#%mzz[}URI8^T<fD_-8Br' );
define( 'AUTH_SALT',        'OwrA{&N|-%t9?OHh&n3,Dk.}bCz_u!H,Dk/C3s[rpnl/ER+P`,9^P|l-wDY;xboP' );
define( 'SECURE_AUTH_SALT', 'x>87]P6hZHQ?^b&kw_^/z:Gun~Cf$Uc*7&0n_ye[)|6Dgs0%i6n)bL^#F+0_Q+@,' );
define( 'LOGGED_IN_SALT',   'W]H|RDgG .ns[|jh ~P-;:jIboR5[ T#:N!JZtp/4cR*NM#E@/w_c!/}I]A*di?!' );
define( 'NONCE_SALT',       'S^vS;0m@8{~Wfw3+!tyqO4{r[?F&KRqRUic~s3?ES(>WKs_[[RKc^X%jc_7oC91*' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
