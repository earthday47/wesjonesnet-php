<?php
function dpm($var) {
  print "<pre>";
  print_r($var);
  print "</pre>";
}

function get_lang() {
  return 'en';
}

function t($key, $default) {
  return $default;
}

function url($path) {
  return $path;
}
