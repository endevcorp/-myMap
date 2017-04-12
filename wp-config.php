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
define('DB_NAME', 'projectvision');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '?hxjr70C<_;bb)-^ }YADGR)?cnsP|qrCz$6cPCh5M(xN^sM%d{B*Iprc(bJoc;/');
define('SECURE_AUTH_KEY',  '=,IXs(a2}_M+|^?,z;x MVY?ZgN.SqK:Z Okab`j|>3;|iPfDZI))^_gpIPnzh*F');
define('LOGGED_IN_KEY',    'heNPACJ_X2FA.!~q|G?$Vg&]x&UYhbkJdv9zUU7:XzG@ZAm)$wJlt>?dU2vMmu*4');
define('NONCE_KEY',        'U[R:]bJZe@1Mdq+[2H$=6mK]<%cLZtQy+xK]T(H}U|RF4Xlud2tLSCt3]yD1MnCV');
define('AUTH_SALT',        'lw&oRO9niN*HM`Ir7w[)!t$pRD)JwT0Ysw${>ZWm4quZ5~{}2&3h/&DaLcn~+64M');
define('SECURE_AUTH_SALT', '5 IPo&.TbgvWJbv/s]GWS%{UK2O;Fy37]R3FzE8cuNHU>t%OpmP`^Bc%4UcGV7`X');
define('LOGGED_IN_SALT',   '|d:px48X5>xo^+d1UsC|pzN+#v3N!8I38t%9-BaA{ChwI7kSr l6T-L.woQxj.ho');
define('NONCE_SALT',       '#Xf_w[|I$vfaxQvDwOe=2;thiI_:;_$EII;k1aV1Q|M[Bc765~nu5g5kknvP$OQq');

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
