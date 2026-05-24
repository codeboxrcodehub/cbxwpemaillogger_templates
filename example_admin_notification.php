<?php

$user_email   = ''; //define if you need to set reply to
$from_name    = 'Codeboxr Support';
$from_address = 'noreply@codeboxr.com';
$to           = 'info@codeboxr.com';//admin alert
$reply_to     = $user_email;
$cc           = $bcc = '';

$additional_note = 'Please note that, our time zone is GMT+6 ( i.e. 11 hours ahead from EST time) and we will be responding to you at the next available officer hours based on our time zone.<br/>';

$additional_text = '<div class="text-center-section">
            <h2 class="centered-heading">Support Timeline</h2>
            <p class="centered-text">
                '.wp_kses_post($additional_note).'
            </p>
        </div>';


$heading = 'Contact Form Notification';
$subject = '[Support Mail from Codeboxr]: '.$subject;

$body = '';// you need to build this part following our static html template. Our example template multiple html section which can you use that compatible for your need. For a form submission we will use something like below

$body = '<div class="form-summary-section">
                            <h3 class="form-summary-heading">Form Submission Summary</h3>
                            <p class="message" style="text-align: center; margin-bottom: 25px;">
                                Thank you for your submission! Here's a summary of the information you provided:
                            </p>

                            <table role="presentation" class="form-summary-table" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td class="form-label" width="35%">Full Name:</td>
                                    <td class="form-value" width="65%">John Doe</td>
                                </tr>
                                <tr>
                                    <td class="form-label">Email Address:</td>
                                    <td class="form-value">john.doe@example.com</td>
                                </tr>
                                <tr>
                                    <td class="form-label">Phone Number:</td>
                                    <td class="form-value">+1 (555) 123-4567</td>
                                </tr>
                                <tr>
                                    <td class="form-label">Company Name:</td>
                                    <td class="form-value">Acme Corporation</td>
                                </tr>
                                <tr>
                                    <td class="form-label">Subject:</td>
                                    <td class="form-value">Product Inquiry</td>
                                </tr>
                                <tr>
                                    <td class="form-label">Message:</td>
                                    <td class="form-value" style="border-bottom: none;">I am interested in learning more about your products and services. Please contact me at your earliest convenience.</td>
                                </tr>
                            </table>

                            <div class="form-summary-footer">
                                Submitted on January 30, 2026 at 10:45 AM
                            </div>
                        </div>';



$data = [
    'to_email'           => $to,
    'email_body'         => $body,
    'subject'            => $subject,
    'from_name'          => $from_name,
    'from_email'         => $from_address,
    'reply_to'           => $reply_to,
    'cc'                 => $cc,
    'bcc'                => $bcc,
    'additional_content' => ''
];

do_action('comfortsmtp_general_email_admin_trigger', $data, $attachments);