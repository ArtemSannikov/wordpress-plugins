$(document).ready(function() {
 
  	// Объекты с которыми будем работать
  	let accordion_ul_sub = $('.widget_nav_menu li > ul.sub-menu');
	let accordion_head = $('.widget_nav_menu li.menu-item-has-children > a');
	let	accordion_body = $('.widget_nav_menu li > ul.sub-menu');
	let accordion_current_menu_item = $('.widget_nav_menu li.current-menu-item');
	let accordion_current_post_parent = $('.widget_nav_menu li.current-post-parent');
 
 	// Настройки аккордиона
	let speed_accordion = 'normal'; // [normal, fast, low]
	let active_accordion = 'active';

	/*
	 * Применяем к меню ul.sub-menu свойство (display: none), если в шаблоне это не реализовано
	 */

	accordion_ul_sub.css('display', 'none');

	/*
	 * Действия при клике на элемент, содержащий потомков
	 */

	accordion_head.on('click', function(event) {
 
		// Отключить заголовок ссылки
		event.preventDefault();

 		
		if($(this).attr('class') != active_accordion){

			accordion_body.addClass(active_accordion);// Добавляем класс 'active' для (ul.sub-menu)

			accordion_body.slideUp(speed_accordion);// Скорость и тип анимации

			$(this).next().finish().slideToggle(speed_accordion);// (вместо .stop(true, true) используем .finish() )

			accordion_head.removeClass(active_accordion);

			$(this).addClass(active_accordion);// Добавляем класс 'active' для (li.menu-item-has-children > a)

		}else{
			
			accordion_body.removeClass(active_accordion); // Удаляем класс 'active' у (ul.submenu), и перменную из localStorage
			
			accordion_head.removeClass(active_accordion); // Удаляем класс 'active' у (li.menu-item-has-children > a)
			
			accordion_body.slideUp(speed_accordion); // Скорость и тип анимации

		};
 
	});

	/*
	 * Находим активный элемент меню li, и разворачиваем его родительский класс ul
	 */
	 
	accordion_current_menu_item.parent().css('display','block'); // Когда открыта категория
	accordion_current_post_parent.parent().css('display','block'); // Когда открыт пост
	 
});