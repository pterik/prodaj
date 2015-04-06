<?php
error_reporting(E_ALL); @ini_set('display_errors', true);
	$pages = array(
		'0'	=> array('id' => '1', 'alias' => array('ru' => 'Привет', 'uk' => 'Привіт', 'pl' => 'Cześć'), 'file' => '1.php'),
		'1'	=> array('id' => '4', 'alias' => array('ru' => 'Путешествуй-по-Польше', 'uk' => 'Подорожуй-по-Польщі', 'pl' => 'Turystyczna-w-Polska'), 'file' => '4.php'),
		'2'	=> array('id' => '9', 'alias' => array('ru' => '911', 'uk' => '911', 'pl' => '911'), 'file' => '9.php'),
		'3'	=> array('id' => '10', 'alias' => array('ru' => 'Регистрация', 'uk' => 'Реєстрація', 'pl' => 'Rejestracja'), 'file' => '10.php'),
		'4'	=> array('id' => '', 'alias' => array('ru' => 'Объявления', 'uk' => 'Оголошення', 'pl' => 'Ogłoszenia'), 'file' => '.php'),
		'5'	=> array('id' => '7', 'alias' => array('ru' => 'Форум', 'uk' => 'Форум', 'pl' => 'Forum'), 'file' => '7.php'),
		'6'	=> array('id' => '8', 'alias' => array('ru' => 'Посредники', 'uk' => 'Посередники', 'pl' => 'Pośrednicy'), 'file' => '8.php'),
		'7'	=> array('id' => '11', 'alias' => array('ru' => 'Контакты', 'uk' => 'Контакти', 'pl' => 'Kontakt'), 'file' => '11.php')
	);
	$forms = array(
		'10'	=> array(
			'6ce37c3a' => Array( 'email' => 'registration@prodaj.pl', 'subject' => 'Registration form', 'sentMessage' => 'Отослано, проверьте почту через 5 минут. Wysłane, sprawdź pocztę przez 5 minut.', 'fields' => array( array( 'fidx' => '0', 'name' => array('ru' => 'Имя ', 'uk' => 'Ім\'я', 'pl' => 'Imię'), 'type' => 'input', 'options' => '' ), array( 'fidx' => '1', 'name' => array('ru' => 'E-mail (*)', 'uk' => 'E-mail (*)', 'pl' => 'E-mail (*)'), 'type' => 'input', 'options' => '' ), array( 'fidx' => '2', 'name' => array('ru' => 'Город', 'uk' => 'Місто', 'pl' => 'Ogród'), 'type' => 'input', 'options' => '' ), array( 'fidx' => '3', 'name' => array('ru' => 'Контакты для связи', 'uk' => 'Контакти для зв\'язку', 'pl' => 'Kontakt dla związku'), 'type' => 'input', 'options' => '' ), array( 'fidx' => '4', 'name' => array('ru' => 'Как Вы пришли на наш сайт?', 'uk' => 'Як Ви прийшли на наш сайт?', 'pl' => 'Jak trafiłeś na naszą stronę?'), 'type' => 'select', 'options' => array('ru' => 'Реклама в Интернете;Увидел на Facebook;Друзья рассказали;Другое', 'uk' => 'Реклама в Інтернеті;Побачив на Facebook;Друзі розповіли;Інше', 'pl' => 'Reklama w Internecie;Zobaczył na Facebook;Przyjaciele powiedzieli;Więcej') ), array( 'fidx' => '5', 'name' => array('ru' => 'Страна проживания (*)', 'uk' => 'Країна проживання (*)', 'pl' => 'Kraj zamieszkania (*)'), 'type' => 'select', 'options' => array('ru' => 'Украина;Россия;Польша;Другая страна', 'uk' => 'Україна;Росія;Польща;Інша країна', 'pl' => 'Ukraina;Rosja;Polska;Inny kraj') ) ) ),
			'57e78122' => Array( 'email' => 'registration@prodaj.pl', 'subject' => 'Registration form', 'sentMessage' => 'Отослано, проверьте почту через 5 минут. Wysłane, sprawdź pocztę przez 5 minut.', 'fields' => array( array( 'fidx' => '0', 'name' => array('ru' => 'Имя ', 'uk' => 'Ім\'я', 'pl' => 'Imię'), 'type' => 'input', 'options' => '' ), array( 'fidx' => '1', 'name' => array('ru' => 'E-mail (*)', 'uk' => 'E-mail (*)', 'pl' => 'E-mail (*)'), 'type' => 'input', 'options' => '' ), array( 'fidx' => '2', 'name' => array('ru' => 'Город', 'uk' => 'Місто', 'pl' => 'Ogród'), 'type' => 'input', 'options' => '' ), array( 'fidx' => '3', 'name' => array('ru' => 'Контакты для связи', 'uk' => 'Контакти для зв\'язку', 'pl' => 'Kontakt dla związku'), 'type' => 'input', 'options' => '' ), array( 'fidx' => '4', 'name' => array('ru' => 'Как Вы пришли на наш сайт?', 'uk' => 'Як Ви прийшли на наш сайт?', 'pl' => 'Jak trafiłeś na naszą stronę?'), 'type' => 'select', 'options' => array('ru' => 'Реклама в Интернете;Увидел на Facebook;Друзья рассказали;Другое', 'uk' => 'Реклама в Інтернеті;Побачив на Facebook;Друзі розповіли;Інше', 'pl' => 'Reklama w Internecie;Zobaczył na Facebook;Przyjaciele powiedzieli;Więcej') ), array( 'fidx' => '5', 'name' => array('ru' => 'Страна проживания (*)', 'uk' => 'Країна проживання (*)', 'pl' => 'Kraj zamieszkania (*)'), 'type' => 'select', 'options' => array('ru' => 'Украина;Россия;Польша;Другая страна', 'uk' => 'Україна;Росія;Польща;Інша країна', 'pl' => 'Ukraina;Rosja;Polska;Inny kraj') ) ) ),
			'457e2d35' => Array( 'email' => 'registration@prodaj.pl', 'subject' => 'Registration form', 'sentMessage' => 'Отослано, проверьте почту через 5 минут. Wysłane, sprawdź pocztę przez 5 minut.', 'fields' => array( array( 'fidx' => '0', 'name' => array('ru' => 'Имя ', 'uk' => 'Ім\'я', 'pl' => 'Imię'), 'type' => 'input', 'options' => '' ), array( 'fidx' => '1', 'name' => array('ru' => 'E-mail (*)', 'uk' => 'E-mail (*)', 'pl' => 'E-mail (*)'), 'type' => 'input', 'options' => '' ), array( 'fidx' => '2', 'name' => array('ru' => 'Город', 'uk' => 'Місто', 'pl' => 'Ogród'), 'type' => 'input', 'options' => '' ), array( 'fidx' => '3', 'name' => array('ru' => 'Контакты для связи', 'uk' => 'Контакти для зв\'язку', 'pl' => 'Kontakt dla związku'), 'type' => 'input', 'options' => '' ), array( 'fidx' => '4', 'name' => array('ru' => 'Как Вы пришли на наш сайт?', 'uk' => 'Як Ви прийшли на наш сайт?', 'pl' => 'Jak trafiłeś na naszą stronę?'), 'type' => 'select', 'options' => array('ru' => 'Реклама в Интернете;Увидел на Facebook;Друзья рассказали;Другое', 'uk' => 'Реклама в Інтернеті;Побачив на Facebook;Друзі розповіли;Інше', 'pl' => 'Reklama w Internecie;Zobaczył na Facebook;Przyjaciele powiedzieli;Więcej') ), array( 'fidx' => '5', 'name' => array('ru' => 'Страна проживания (*)', 'uk' => 'Країна проживання (*)', 'pl' => 'Kraj zamieszkania (*)'), 'type' => 'select', 'options' => array('ru' => 'Украина;Россия;Польша;Другая страна', 'uk' => 'Україна;Росія;Польща;Інша країна', 'pl' => 'Ukraina;Rosja;Polska;Inny kraj') ) ) )
		)
	);
	$langs = array(
		'ru' => true, 'uk' => false, 'pl' => false
	);
	$def_lang = 'ru';
	$base_dir = dirname(__FILE__);
	$base_url = '/';
	$show_comments = false;
	include dirname(__FILE__).'/functions.inc.php';
	$home_page = '1';
	list($page_id, $lang) = parse_uri();
	$user_key = "iIhCgrJPFquJ";
	$user_hash = "eb5b3f26293bdbb4";
	$comment_callback = "http://uk.zyro.com/comment_callback/";
	$preview = false;
	$mod_rewrite = true;
	$page = isset($pages[$page_id]) ? $pages[$page_id] : null;
	if (!is_null($page)) {
		handleComments($page['id']);
		if (isset($_POST["wb_form_id"])) handleForms($page['id']);
	}
	ob_start();
	if (isset($_REQUEST['view']) && $_REQUEST['view'] == 'news')
		include dirname(__FILE__).'/news.php';
	else if (isset($_REQUEST['view']) && $_REQUEST['view'] == 'blog')
		include dirname(__FILE__).'/blog.php';
	else if ($page) {
		$fl = dirname(__FILE__).'/'.$page['file'];
		if (is_file($fl)) {
			ob_start();
			include $fl;
			$out = ob_get_clean();
			$ga_out = '';
			if ($lang && $langs) {
				foreach ($langs as $lang => $default) {
					$pageUri = getPageUri($page['id'], $lang);
					$out = str_replace(urlencode('{{lang_'.$lang.'}}'), $pageUri, $out);
				}
			}
			if (is_file($ga_file = dirname(__FILE__).'/ga_code') && $ga_code = file_get_contents($ga_file)) {
				$ga_out = str_replace('{{ga_code}}', $ga_code, file_get_contents(dirname(__FILE__).'/ga.html'));
			}
			$out = str_replace('{{ga_code}}', $ga_out, $out);
			$proto = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? 'https' : 'http';
			$out = str_replace('{{base_url}}', $proto.'://'.$_SERVER['HTTP_HOST'].'/', $out);
			header('Content-type: text/html; charset=utf-8', true);
			echo $out;
		}
	} else {
		header("Content-type: text/html; charset=utf-8", true, 404);
		if (is_file(dirname(__FILE__).'/404.html')) {
			include '404.html';
		} else {
			echo "<!DOCTYPE html>\n";
			echo "<html>\n";
			echo "<head>\n";
			echo "<title>404 Not found</title>\n";
			echo "</head>\n";
			echo "<body>\n";
			echo "404 Not found\n";
			echo "</body>\n";
			echo "</html>";
		}
	}
	ob_end_flush();

?>