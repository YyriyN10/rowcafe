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
define( 'DB_NAME', 'row_coffee' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'myDBpass100!' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1g :/z]BOd]0*rDvGh4pnV?$wD2@KC+witNTLu?%vV>`I?Ncp~UVgq8JR)n!L3rR' );
define( 'SECURE_AUTH_KEY',  'k5!)k5(A1zvl{%$ipW=P#3wfVKQ~Fw0wOJ Mepf6>7?UWKDAJT]tfI0ym8cdbY!9' );
define( 'LOGGED_IN_KEY',    'O:%x>~?LD9@g03trW}WOn8 8uFlym,SGjvH41I36l,HA[esh:bmtd=LANfU3QHvK' );
define( 'NONCE_KEY',        '9EDM>RPwOs7K+aPIw^6a_,+#K8t&@cDIx3#Xz:ykEe%Dzks*L| dPZzl$,>PCS6c' );
define( 'AUTH_SALT',        'SM~d*;+~mDQYanR Yld|J*5nN`yY@$B)h8*Ro)GwG>!xm#5~sdrMhq/#}4RZtl,Q' );
define( 'SECURE_AUTH_SALT', 'P(Nfs#=ueiU3r.4T%`OvHaCji^KYI`U7N5t_(p1{a!TV9&Ucb<Fc0|)r{Ut[L|!I' );
define( 'LOGGED_IN_SALT',   'F#sgIsuG>1`~{M^jPmxT!I_E%_~bv]bVUlR[5}o|xDQ{(Fs3|nyQ;US5m:yOl#`l' );
define( 'NONCE_SALT',       'fv^+f_FoGuJwN<f;./Gb+?lvm2D{}hv!j=:A&,wbPz)y[u/h>_(lWx{:]F8^5f;F' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );

	/** Загрузка плагинов и обновлений без FTP. */
	define('FS_METHOD', 'direct');

	/* Отключение редактирования файлов в админке WP */
	define('DISALLOW_FILE_EDIT', true);