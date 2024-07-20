<?php

	add_action('init', 'coffee_polylang_strings' );

	function coffee_polylang_strings() {

		if( ! function_exists( 'pll_register_string' ) ) {
			return;
		}

		pll_register_string(
			'coffee_btn_open_cafe',
			'Открыть кофейню',
			'Переклади',
			false
		);

		pll_register_string(
			'coffee_btn_city_add',
			'Занять город',
			'Переклади',
			false
		);

		pll_register_string(
			'coffee_btn_get_presentation',
			'Получить презентацию',
			'Переклади',
			false
		);

		pll_register_string(
			'coffee_calc_you_chek',
			'Ваша прибыль будет составлять',
			'Переклади',
			false
		);

		pll_register_string(
			'coffee_calc_title',
			'ЗАРАБАТЫВАЙ ПРОСТО',
			'Переклади',
			false
		);

		pll_register_string(
			'coffee_calc_cup',
			'Количество чашек в день',
			'Переклади',
			false
		);

		pll_register_string(
			'coffee_calc_midl_price',
			'Средний чек',
			'Переклади',
			false
		);

		pll_register_string(
			'coffee_calc_coffee_count',
			'Количество кофеен',
			'Переклади',
			false
		);

		pll_register_string(
			'coffee_calc_rent_price',
			'Стоимость аренды',
			'Переклади',
			false
		);

		//

		pll_register_string(
			'coffee_btn_scroll_text_1',
			'скролль',
			'Переклади',
			false
		);


		pll_register_string(
			'coffee_btn_scroll_text_2',
			'дальше',
			'Переклади',
			false
		);

		pll_register_string(
			'coffee_text_mein',
			'Главная',
			'Переклади',
			false
		);

		pll_register_string(
			'coffee_text_inter_found',
			'интервью с основателем',
			'Переклади',
			false
		);

		pll_register_string(
			'coffee_text_enter_question',
			'задать другой вопрос',
			'Переклади',
			false
		);

		pll_register_string(
			'coffee_text_get_plan',
			'Получить финансовый план',
			'Переклади',
			false
		);

		pll_register_string(
			'coffee_text_more_info',
			'Подробнее',
			'Переклади',
			false
		);

		pll_register_string(
			'coffee_btn_fran_text',
			'Франчайзинг',
			'Переклади',
			false
		);

		pll_register_string(
			'coffee_btn_hot_line_text',
			'Горячая линия',
			'Переклади',
			false
		);

		pll_register_string(
			'coffee_popup_get_b_plan',
			'Получить бизнес-план',
			'Переклади',
			false
		);

		pll_register_string(
			'coffee_popup_get_f_plan',
			'ПОЛУЧИТЬ ФИНАНСОВЫЙ ПЛАН',
			'Переклади',
			false
		);

		pll_register_string(
			'coffee_popup_get_pres',
			'получить презентацию',
			'Переклади',
			false
		);

		pll_register_string(
			'coffee_popup_get_call',
			'Заказать звонок',
			'Переклади',
			false
		);

		pll_register_string(
			'coffee_form_name',
			'Ваше имя',
			'Переклади',
			false
		);

		pll_register_string(
			'coffee_form_city',
			'Ваш город',
			'Переклади',
			false
		);

		pll_register_string(
			'coffee_form_send',
			'отправить',
			'Переклади',
			false
		);

		pll_register_string(
			'coffee_form_send_soc',
			'или',
			'Переклади',
			false
		);

		pll_register_string(
			'coffee_popup_thx_title',
			'Успешно отправлено',
			'Переклади',
			false
		);

		pll_register_string(
			'coffee_popup_thx_text',
			'Ваша заявка доставлена. Наш менеджер свяжется с Вами в ближайшее время',
			'Переклади',
			false
		);



	}