<?php

/*
Plugin Name: Easy Accordion Menu
Plugin URI: https://artemsannikov.ru/plugins/easy-accordion-menu/
Description: Плагин Easy Accordion Menu позволяет организовать на вашем сайте простое и элегантное аккордеон меню (раскрывающееся меню).
Version: 0.1
Author: Artem Sannikov
Author URI: https://artemsannikov.ru
Donate link: https://artemsannikov.ru/donate/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Copyright 2021 Artem Sannikov  (email : info@artemsannikov.ru)
 
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.
 
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// Enabling js scripts on the our site
function eamenu_enable_js_script(){

	wp_enqueue_script(
		'easy-accordion-menu', // $handle - название скрипта (обязательный параметр)
		plugin_dir_url(__FILE__).'js/easy-accordion-menu.js', // $src - адрес скрипта (по умолчанию: '')
		array(), // $deps - скрипты которые должны быть загружены перед этим скриптом (по умолчанию: array())
		false, // $ver - версия скрипта (по умолчанию: false)
		true // $in_footer - подключение скрпита в подвале (по умолчанию: false)
	);

}

eamenu_enable_js_script();

?>