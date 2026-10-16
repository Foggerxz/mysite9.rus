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
define( 'DB_NAME', 'mysite9rus' );

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
define( 'AUTH_KEY',         '%{ujH9wl_?{z6gaP^1V6WbAuLc`*#x~tSh|H_tDP/AhSNUUH[IU4m[YyeVk]Z$L*' );
define( 'SECURE_AUTH_KEY',  'HnE}&)+Kt[bDI,d/*eZ)F/-L_mfOccQ]m2>H,<uo@fVe`k.vGpCy8<3t=s]Me4(v' );
define( 'LOGGED_IN_KEY',    'P?pK=ufKj*!>>%@%&95/PfKh$<FsBO>bMkpQTkGt)NEX Y_^?ueD;7A HZD:O:`f' );
define( 'NONCE_KEY',        '>.#Bf73*((Kd>l,T#?f(?KUz,ZZ0kJ6:y3?`O-N P,HoI{z=NbV@|ac@-[I[APN|' );
define( 'AUTH_SALT',        '+fqdHLY]9gwqO?#aNkTw_/_4ReAZB,SwP1%oaLjp.mzH7ZyHd,Etok6%%F5E}rC^' );
define( 'SECURE_AUTH_SALT', ']RmT&z}42OC4tcYHFdeC;YYb*>3gIw|:oD3y[O]:(}yrJ$A@6r:#qe8A/)7~m`4E' );
define( 'LOGGED_IN_SALT',   'JGhv5[b!Jlek/*Dv;Rj:<~s|$AL2Zf6hO`Fbx[@/d6:(gzu.ganUuRP[S@og2DU~' );
define( 'NONCE_SALT',       'i>qq N@fToS@e@r_?S.xe%2@dzj,@dP~WDLoF@/Aqb(>-`GM8ofCp,F-A}eI%8xl' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 *
 * В процессе установки указанный префикс добавляется к именам таблиц базы данных.
 * Если изменить это значение после установки WordPress, то сайт снова перейдёт
 * в режим установки.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
