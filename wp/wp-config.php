<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'u519801583_oc');

/** Имя пользователя MySQL */
define('DB_USER', 'u519801583_oc');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'ZDcvoVd2nj');

/** Имя сервера MySQL */
define('DB_HOST', 'mysql.hostinger.pl');

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
define('AUTH_KEY',         'ANV%Am33vz7%a[de+r47Fp9~)(z4ICXR(_r]Fj9bUb9fB(#tbr0BWWll3bo_.DQ}');
define('SECURE_AUTH_KEY',  'QUfX>BV=hHZJ(lP4v_eGn3nb2)ls_+{D33N:AY+Y1+-o6N8Q3h7`(,](NZS|++o2');
define('LOGGED_IN_KEY',    ':j,.+rE/os=wSJI{{RD%)|+B|j192b2cw@yXn|t,_?V#n_I<9v$y|d{/XNI|A{^`');
define('NONCE_KEY',        'O_nA =oMK=CRRp4*nUI?k~/Cb5}*A.[u6kRo0-(56N6:kG&)h[4j;,)[9LHAK1|#');
define('AUTH_SALT',        'iE;W3<=PX*F2w~}DN2Be7+{cz3CPUO`J+y(zDdxG+/6d<^=+-p@eNKAI+~-[g%+F');
define('SECURE_AUTH_SALT', 'KM5xnKEz&|DXB,8%oQp@}e+Yoog&ODa@Oug~Q,.jp9:Y4[HFT<hMK2*i:eRk;{O`');
define('LOGGED_IN_SALT',   'EAigK|`yE*3.j^-rQV/pV6oeS($tTJ TM7!`xY!!+ZN@VBMqP8St8A8[UJ6+(+MT');
define('NONCE_SALT',       '+2xTS&ud[/TxWJN8AzIe8#x.Vf3mz~Vq(fP5H|p@qt_d=DFga:1WUzzTZi_|Ri,!');

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
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
