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
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'securitySite' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
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
define( 'AUTH_KEY',         'Z4a~TQJ_WMZ27Yvd733qbxaO *&ktU4nTBFyO8 O`ANa|)R!1$/bOBK,tb$Bew?T' );
define( 'SECURE_AUTH_KEY',  ':_B^PA2` C<e:GQ6|FpFMam{{3tB>1SH0l-_ZO||t]/YMfvHD4,39<r:<?VIvI6:' );
define( 'LOGGED_IN_KEY',    '2:*Cc&Wt4OtTVK*&$x%t{S|;f{`=lf32ubWN{LhznzuzSvz-eYuLLza=]X=wumOx' );
define( 'NONCE_KEY',        's@,peJCETF$Cl6r.-h#Q6+hvVM6ZM`YOT1qL@1978DCKkyv3RR*c_q&Qz4$LiNJP' );
define( 'AUTH_SALT',        '~-3:~v[G#iyG7?V2BG,XWt:dIR}j|c6K>a~b;d6.FqqG@qh,JZ~p@o7ZmLwUkmW_' );
define( 'SECURE_AUTH_SALT', '-CSH}d7N[;ly8[-]uqzLkq:o28&;_N_tnp-o}NGVv9kM#?h6E-A| KK B8Y! LD_' );
define( 'LOGGED_IN_SALT',   ']t 4ueB|`z)X8H;Ob6B%b2hIx1Q`dl{>HvNO4>pk1{{<[mA?wl%t0;fo+ZCD#K}9' );
define( 'NONCE_SALT',       'n^$DSEBYDe)F{z:z8h4cfU*)Y9:4{]::0*yNR ,t[@?d)T{>G9N}v!D4c1J[EWYp' );

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
