jQuery(document).ready(function ($) {
    // Question form
    $(document).on('submit', '#business_plan', function (event) {
        event.preventDefault();
        const form = $(this);
        send_feedback(form);
    });
});
function send_feedback(form){
    var UserData = $(form).serialize() + '&action=question';
    $(form).find('button').attr('disabled','disabled');
    $.ajax({
        url: wpAjax.url,
        data: UserData,
        type: 'post',
        datatype: 'json',
        success: function (json) {
            $(form).find('input.error').removeClass('error');
            $(form).find('p.error').remove();
            if (json.success === false) {
                $.each(json.data, function (i, item) {
                    $(form).find('[name="' + i + '"]').addClass('error')
                    if(i!='phone') {
                        $(form).find('[name="' + i + '"]').parent().append('<p class="error">' + item + '</p>');
                    }
                });
            }
            if (json.success === true) {
                $(form).find('input').val('').removeAttr('value');
                $('.popup-success').addClass('active');
            }
            $(form).find('button').removeAttr('disabled');
        }
    });
}