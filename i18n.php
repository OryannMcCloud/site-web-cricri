<?php

error_reporting(E_ALL | E_STRICT);

define('PROJECT_DIR', realpath('./'));
define('LOCALE_DIR', PROJECT_DIR .'/locale');
define('DEFAULT_LOCALE', 'fr_FR'); // langue par défaut

require_once('lib/gettext/gettext.inc');

$supported_locales = array('en_US', 'es_ES', 'it_IT', 'fr_FR');
$encoding = 'UTF-8';

$locale = (isset($_GET['lang']))? $_GET['lang'] : DEFAULT_LOCALE;

T_setlocale(LC_MESSAGES, $locale);

$domain = 'traduction';
bindtextdomain($domain, LOCALE_DIR);

if (function_exists('bind_textdomain_codeset'))
  bind_textdomain_codeset($domain, $encoding);
textdomain($domain);

header("Content-type: text/html; charset=$encoding");
?>