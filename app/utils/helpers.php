<?php
function base_url($url = '') {
    return $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME']. '/examen2FT/'.$url;
}

function path() {
  $path = explode('/', $_SERVER['SCRIPT_FILENAME']);
  return base_url().$path[count($path) - 1];
}
