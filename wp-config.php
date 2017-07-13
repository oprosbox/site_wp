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
define('DB_NAME', 'site_architect_wp');

/** Имя пользователя MySQL */
define('DB_USER', 'architect');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'WxUUjNiLzzhCbgKY');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '%)xNqE,O?| GcmMHMKeBrce8yv(/|C02!V8Bc$q)|4!OdG YUH!%9neS~Z%,.8@7');
define('SECURE_AUTH_KEY',  '*1E8q%X,BW!Zo2)fT}SP^L(N~HJe-06n@<7Nl`4ZA VNTT8wO(Vv 3!53-H5W6U*');
define('LOGGED_IN_KEY',    '1hMz)J1+NYY?1CH;M.Y.X.~YJ~s1%byQ[t$}e]mM9Geb 8IGKW&l@j:ij^kxME`5');
define('NONCE_KEY',        '5q$Od$,?Q1:LiQIepF!oRH<{~re0RY4=~71Bx]Fk@1XB`3YP;UMmC/8c|c&eS.He');
define('AUTH_SALT',        ']=^lat4VcmeS/s<n4A_vX.MBIfv=^}sf#180?b |hWXaVb2B<4|YNL,Pg/(^Q$BB');
define('SECURE_AUTH_SALT', '/_m|&Pb*Nebj/68BT.$xNfh.Aj`S!I_Ia=W4p6LAf5{%1zs^b>3fXCB|8?Fn-W*/');
define('LOGGED_IN_SALT',   'A/{wc]N7r!_jo.m?mD.x#^jg>9*!4*?``O]~ltvX eg,3tVk;6;z}fw]%:}QFta>');
define('NONCE_SALT',       '9^f`!wQyV^]3a-(:o|uzsn^Ntg ZGi#n%L0Cz-1;lLqs@rw1`5QQfitarVu{X28w');

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
