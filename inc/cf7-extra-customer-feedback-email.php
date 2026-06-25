<?php
add_action('wpcf7_before_send_mail', 'cf7_add_bcc_on_high_rating');

function cf7_add_bcc_on_high_rating($contact_form) {

    $submission = WPCF7_Submission::get_instance();

    if (!$submission) {
        return;
    }

    $posted_data = $submission->get_posted_data();

    // Safely handle array/string values
    $rating_raw = isset($posted_data['star-rating'])
        ? (is_array($posted_data['star-rating'])
            ? implode(' ', $posted_data['star-rating'])
            : $posted_data['star-rating'])
        : '';

    // Extract rating number
    $rating = 0;
    
    if (!empty($rating_raw)) {
        preg_match('/\d+/', $rating_raw, $matches);
        $rating = isset($matches[0]) ? intval($matches[0]) : 0;
    }

    // Only for 4 or 5 star reviews
    if ($rating >= 4) {

        $mail = $contact_form->prop('mail');

        $extra_email = 'reid@drycleanexpress.com';

        // Add BCC header
        if (!empty($mail['additional_headers'])) {
            $mail['additional_headers'] .= "\r\nBcc: " . $extra_email;
        } else {
            $mail['additional_headers'] = "Bcc: " . $extra_email;
        }

        $contact_form->set_properties(array(
            'mail' => $mail
        ));
    }
}