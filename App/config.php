<?php

header("Content-Type: text/html; charset=utf-8;");

session_start();

setlocale(LC_ALL, "pt_BR");
date_default_timezone_set("America/Sao_Paulo");

// CONFIG URL
define("SITE_PROTOCOL", isset($_SERVER["HTTPS"]) ? "https://" : "http://");
define("SITE_DOMAIN", $_SERVER["SERVER_NAME"]);
define("SITE_ROOT", '/phpapidb');
define("URL_BASE", SITE_PROTOCOL.SITE_DOMAIN.SITE_ROOT);


var_dump(URL_BASE);