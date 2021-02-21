<?php
/*
Plugin Name: Disable Images Compress
Plugin URI: https://artemsannikov.ru/plugins/disable-images-compress/
Description: Плагин Disable Images Compress позволяет отключить сжатие изображений при загрузке на сайт.
Version: 1.0
Author: Artem Sannikov
Author URI: https://artemsannikov.ru
Donate link: https://artemsannikov.ru/donate/
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

function disable_image_compress(){
	add_filter('jpeg_quality', create_function( '','return 100;'));	
}
$disable_image_compress = 'disable_image_compress';
$disable_image_compress();

?>