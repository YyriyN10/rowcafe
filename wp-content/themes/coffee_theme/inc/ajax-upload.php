<?php
add_action('wp_ajax_nopriv_get_format', 'get_format');
add_action('wp_ajax_get_format', 'get_format');

function get_format()
{
    $post_fields = filter_var_array($_POST, FILTER_SANITIZE_STRING);
    $post_id = $post_fields['format_id'];
    if ($post_id && !is_null(get_post($post_id)) && get_post_type($post_id) == 'formats') {
        $gallery = get_field('gallery', $post_id);
        $list = get_field('list', $post_id);
        if ($list || $gallery) {
            $html_block = '';
            $html_block .= '<div class="formats__info">
                <div class="formats__info-block">';
            $html_block .= '<div class="formats__name">' . get_the_title($post_id) . '</div>';
            $html_block .= '<div class="formats__notes">';
            $html_block .= get_the_excerpt($post_id);
            $html_block .= '</div>';
            if ($list) {
                $html_block .= '<ul class="formats__list">';
                foreach ($list as $item) {
                    $html_block .= '<li><div class="formats__list-name">';

                    $html_block .= '<div class="formats__list-ico">';
                    $html_block .= '<img class="svg" src="' . $item['img']['url'] . '">';
                    $html_block .= '</div>';
                    $html_block .= $item['title'];
                    $html_block .= '</div>';
                    $html_block .= '<div class="formats__list-descr">' . $item['text'] . '</div>';
                    $html_block .= '</li>';
                }
                $html_block .= '</ul>';
            }
            $html_block .= '<div class="home-about__btn finance-button">';
            $html_block .= '<div class="home-about__icon">';
            $html_block .= '<img class="svg" src="' . THEME_ASSETS_URL . 'images/coffee-ico.svg">';
            $html_block .= '</div>';
            $html_block .=  esc_html( pll__( "Получить финансовый план" ) );
            $html_block .= '</div>';
            $html_block .= '</div>';
            $html_block .= '</div>';
            if ($gallery) {
                $html_block .= '<div class="formats__image">';
                foreach ($gallery as $item) {
                    $html_block .= '<div class="formats__image-box">';
                    $html_block .= '<img src="' . $item['sizes']['format_img'] . '" width="580" height="420" alt="' . $item['alt'] . '">';
                    $html_block .= '</div>';
                }

                $html_block .= '</div>';
            }
            $response = [
                'success' => true,
                'html_block' => $html_block,
            ];
            wp_send_json($response);
        }
    }
    wp_send_json_error();
}