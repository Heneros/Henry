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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         'F_w1[@ITg1_0T7O.%9$Rh<:E_M&B.,S6QH=+BW<QlTz|fzY[|9x+}!wZx;Fj2.A ');
define('SECURE_AUTH_KEY',  '+qXKdLyoYlb6G=63MH_oQRLV|M>rqe@))Fmda!~g]X,liZQj1nB&D&X1?WlPJa-r');
define('LOGGED_IN_KEY',    'z1<h`!j(`Nqq9yd81WI6?`I+QPl0jQN>^H7`bC-Z%v4]{20|y;BYlAehFs|SHSU<');
define('NONCE_KEY',        ';[7Aj2Dz~Z7Vrs=T&YI<ni&l&5C*^q6,RLyh3R3Rj:z0Hy<yE!x ,.fhc^0!Qvu<');
define('AUTH_SALT',        '$k)-[CI7[En;W;Hm^1Ut+6(C[[@f?8g=_n6[$}?4$*zcU*k-;&y|q_>:CUvWTOG,');
define('SECURE_AUTH_SALT', 'B)6/0(}fW;NX8A]?2Q gnv%Hbrr+FkPky1FaDE}6v_-wTv@.Gz:0&ku:n8`6QPp_');
define('LOGGED_IN_SALT',   '3|ir@J{M[=8;1ApQg-{$_o#Z2s99`/?M+c;%;%^%L:F73@.jBiqvjX,>A}6znaGf');
define('NONCE_SALT',       'N47641(fr5{e&;iW8#JRuIsK!Fx]Rb,Vc<N9I9/j8TbxW~!8qj/5}Cqw9$/V{ivj');

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
