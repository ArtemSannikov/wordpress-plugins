<?php
/*
Plugin Name: Redirect username
Plugin URI: http://artemsannikov.ru/plugins/redirect-username
Description:  Plugin "Redirect username" does not allow to know the login site administrator via the url address type http://example.ru/?author=1.
Version: 1.0
Author: Artem Sannikov
Author URI: http://artemsannikov.ru
Donate link: http://artemsannikov.ru/donate/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

/*
Copyright 2016  Artem Sannikov  (email : info@artemsannikov.ru)
 
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

/*
Описание плагина на русском: Плагин Redirect username не позволяет узнать логин администратора сайта, через url адрес типа http://example.ru/?author=1.
*/

$site = get_site_url();//адрес сайта

$link_1 = '/?author=1';//ссылка на логин администратора
$link_2 = '/?author=';
$link_3 = '/?author';
$link_4 = '/author';

$part_url = $_SERVER['REQUEST_URI'];//текущая часть url адреса

if($part_url == $link_1){
	header('Location:'.$site);
	exit();
}
if($part_url == $link_2){
	header('Location:'.$site);
	exit();
}
if($part_url == $link_3){
	header('Location:'.$site);
	exit();
}
if($part_url == $link_4){
	header('Location:'.$site);
	exit();
}

?>