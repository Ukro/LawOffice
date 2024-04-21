<?php

// Визначення IP-адреси користувача
$ip_address = $_SERVER['REMOTE_ADDR'];

// Визначення країни користувача
$country_code = geoip_country_code_by_addr($ip_address);

// Встановлення імені файлу
if ($country_code === 'UA') {
  $filename = 'index_uk.html';
} else {
  $filename = 'index_en.html';
}

// Завантаження файлу
include($filename);

?>
