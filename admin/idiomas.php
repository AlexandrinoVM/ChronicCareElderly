<?php

$lang = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);

$acceptLang = ['es', 'en', 'pt'];
$lang = in_array($lang, $acceptLang) ? $lang :'en';

require_once "../locate/{$lang}.php";