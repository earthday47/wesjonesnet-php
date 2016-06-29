<?php
function dpm($var) {
  print "<pre>";
  print_r($var);
  print "</pre>";
}

function get_lang() {
  $lang_list = array('en', 'es', 'zh');
  if (!empty($_GET['lang'])) {
    if (in_array($_GET['lang'], $lang_list)) {
      return $_GET['lang'];
    }
  }
  return 'en';
}

function t($key, $default) {
  $lang = get_lang();

  $translation_filepath = dirname(__FILE__) . '/../_translations/' . $lang . '.php';
  if (file_exists($translation_filepath)) {
    global $translate;
    require_once $translation_filepath;
    if (!empty($translate[$key])) {
      return $translate[$key];
    }
  }

  return $default;
}

function url($path) {
  $lang = get_lang();
  if ($lang != 'en') {
    return $path . '?lang=' . $lang;
  }
  return $path;
}
