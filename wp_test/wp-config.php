<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'lesson');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'xG&TFd<`X{JCMgTmP};@_0$M(%Kw-}EftwQ{okKv??mA5zE/oBg&?CvE5?YTf(K-');
define('SECURE_AUTH_KEY',  '7q^*UPM<s7s0(sN-FAjj(s:~fatkKX..,=|W2D0<#45-Z!&!PHxg*]%)5cWSl9_#');
define('LOGGED_IN_KEY',    '`O*2Q>LOIZ&2<O^p,UL@QDT?/`6htkWg:iM4gisqy:Y](89Q_8&cMoL~60`[)_.i');
define('NONCE_KEY',        'wiRsw_F!{P($yoH;N+ORxy/4yr:M;5kqIVR R%LU.}wq0yf0Ti3tpO,IfJ&&j@9c');
define('AUTH_SALT',        'y_m*_fFjf+p`o,o/*$w?/OdTqbtx|.^x(=[jCV-0EB~X?~2cHc#G*rE5b$Lhwlv0');
define('SECURE_AUTH_SALT', '6?@C?l~VJ!{*mUf*6DF-$a>ezu$LcRq|$vT^k5%`OzPv9L,;gB{m=FgDnYu0Zlo2');
define('LOGGED_IN_SALT',   'T=]tEc.UoSQEQ?yw3P`->-.S)LNDQf=D=T?ExyIa2!i;86V#,e/:k<!C,}^hK}&9');
define('NONCE_SALT',       ']F5neA|8A/V&SME}UQb[YtPmR;wnO!N[v|X=@iavj9?,Xy*Z;Jq%T8u>Sz[oE^y!');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
