<?php
add_action('wp_ajax_nopriv_question', 'question');
add_action('wp_ajax_question', 'question');
function question()
{
    if (isset($_POST['email'])) {
        $json = validate_fields([
            'name',
            'email',
            'phone',
        ]);
    } else {
        $json = validate_fields([
            'name',
            'phone',
        ]);
    }

    if (empty($json)) {
        $subject = 'Ryan Row form';
        // send mail
        $to = get_bloginfo('admin_email');
        $to = '
ryanrowcoffee.franchise@gmail.com, i.sidorovich@art-lemon.com, 	artlemonppc1@gmail.com';  
        $message = sanitize_text_field($_POST['type']) . PHP_EOL;
        $message .= 'Имя: ' . sanitize_text_field($_POST['name']) . PHP_EOL;
        if (isset($_POST['email'])) {
            $message .= 'Email: ' . sanitize_email($_POST['email']) . PHP_EOL;
        }
        $message .= 'Телефон: ' . sanitize_text_field($_POST['phone_code']) . sanitize_text_field($_POST['phone']) . PHP_EOL;

        if (wp_mail($to, $subject, $message)) {
            wp_send_json_success();
        } else {
            wp_send_json_error('did not send');
        }
    } else {
        wp_send_json_error($json);
    }
}

function validate_fields($fields)
{
    $errors = get_field('errors', 'option');
    foreach ($errors as $key => $error) {
        if (empty($error)) {
            unset($errors[$key]);
        }
    }

    $error_messages = [
        'name' => $errors['name'] ?? __('Поле "Имя" обязательное', 'lemon_site'),
        'phone' => $errors['phone'] ?? __('Field "Телефон" is required', 'lemon_site'),
        'phone_wrong' => $errors['phone_wrong'] ?? __('Неверный формат телефона', 'lemon_site'),
        'email' => $errors['email'] ?? __('Поле "Email" обязательное', 'lemon_site'),
        'required' => $errors['required'] ?? __('Это обязательное поле', 'lemon_site'),
        'agreement' => $errors['agreement'] ?? __('Please read Terms and Terms and Conditions', 'lemon_site'),
    ];

    $errors = [];

    foreach ($fields as $field) {
        switch ($field) {
            case 'email':
                $value = sanitize_email($_POST[$field]);
                break;
            case 'comment':
                $value = sanitize_textarea_field($_POST[$field]);
                break;
            case 'agreement':
            case 'accept':
                $value = true;
                break;
            default:
                $value = sanitize_text_field($_POST[$field]);
        }

        if (!$value || !isset($_POST[$field]) || empty($_POST[$field])) {
            if (isset($error_messages[$field])) {
                $errors[$field] = $error_messages[$field];
            } else {
                $errors[$field] = $error_messages['required'];
            }
        }

        if ($field == 'phone' && !isset($errors[$field])) {
            $value = str_replace([' ', '(', ')', '-', '+'], '', $value);

//            if (strlen($value) < '11') {
//                $errors[$field] = $error_messages['phone_wrong'];
//            }
        }
    }

    return $errors;
}