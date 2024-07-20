jQuery(document).ready(function ($) {
    $('.coffee-list__more').on('click', function (e) {
        var format_id = $(this).attr('data-format');
        var ajaxData = 'action=get_format&format_id=' + format_id;
        $.ajax({
            url: wpAjax.url,
            data: ajaxData,
            type: 'post',
            datatype: 'json',
            success: function (json) {
                if (json.success === false) {
                    $('.popup-formats').removeClass('active');
                }
                if (json.success === true) {
                    if (json.html_block) {
                        $('#formats_box').text('');
                        $('#formats_box').append(json.html_block);
                        $('#formats_box .finance-button').on('click', function () {
                            $('.popup-finance').addClass('active');
                        });
                        $('.formats__image').slick({
                            infinite: true,
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            fade: true,
                            prevArrow: `<button type="button" class="slick-prev">
                  <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M6.87972 0.721063C6.95986 0.801167 6.99987 0.893442 6.99987 0.997763C6.99987 1.10183 6.95986 1.19407 6.87972 1.27417L2.15416 5.99994L6.87984 10.7255C6.95999 10.8056 7 10.8979 7 11.0021C7 11.1063 6.95999 11.1985 6.87984 11.2786L6.27856 11.8797C6.19841 11.96 6.10618 12 6.00202 12C5.89783 12 5.80556 11.9599 5.72532 11.8797L0.121991 6.27651C0.0418448 6.19641 0.00179291 6.10413 0.00179291 5.99994C0.00179291 5.89574 0.0418448 5.80363 0.121991 5.72357L5.72532 0.119903C5.80547 0.0397987 5.8977 -9.53674e-07 6.00181 -9.53674e-07C6.10601 -9.53674e-07 6.19812 0.0400515 6.27839 0.119903L6.87972 0.721063Z" fill="white"/>
                  </svg>
                </button>`,
                            nextArrow: `<button type="button" class="slick-next">
                  <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0.120283 0.721063C0.0401364 0.801167 0.000126278 0.893442 0.000126278 0.997763C0.000126278 1.10183 0.0401364 1.19407 0.120283 1.27417L4.84584 5.99994L0.120156 10.7255C0.0400102 10.8056 0 10.8979 0 11.0021C0 11.1063 0.0400102 11.1985 0.120156 11.2786L0.721443 11.8797C0.801589 11.96 0.893823 12 0.997975 12C1.10217 12 1.19444 11.9599 1.27468 11.8797L6.87801 6.27651C6.95816 6.19641 6.99821 6.10413 6.99821 5.99994C6.99821 5.89574 6.95816 5.80363 6.87801 5.72357L1.27468 0.119903C1.19453 0.0397987 1.1023 -9.53674e-07 0.998185 -9.53674e-07C0.893991 -9.53674e-07 0.801884 0.0400515 0.721611 0.119903L0.120283 0.721063Z" fill="white"/>
                  </svg>
                </button>`
                        });
                    }
                }
            }
        });
    });
});