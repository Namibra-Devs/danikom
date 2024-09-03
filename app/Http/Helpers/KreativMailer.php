<?php

namespace App\Http\Helpers;

use App\Models\EmailTemplate;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

use Illuminate\Support\Facades\Log;

class KreativMailer {

    public function mailFromAdmin($data) {
        $temp = EmailTemplate::where('email_type', '=', $data['templateType'])->first();

        $body = $temp->email_body;
        if (array_key_exists('customer_name', $data)) {
            $body = preg_replace("/{customer_name}/", $data['customer_name'], $body);
        }
        if (array_key_exists('customer_username', $data)) {
            $body = preg_replace("/{customer_username}/", $data['customer_username'], $body);
        }
        if (array_key_exists('activation_date', $data)) {
            $body = preg_replace("/{activation_date}/", $data['activation_date'], $body);
        }
        if (array_key_exists('expire_date', $data)) {
            $body = preg_replace("/{expire_date}/", $data['expire_date'], $body);
        }
        if (array_key_exists('order_number', $data)) {
            $body = preg_replace("/{order_number}/", $data['order_number'], $body);
        }
        if (array_key_exists('order_link', $data)) {
            $body = preg_replace("/{order_link}/", $data['order_link'], $body);
        }
        if (array_key_exists('verification_link', $data)) {
            $body = preg_replace("/{verification_link}/", $data['verification_link'], $body);
        }
        if (array_key_exists('remaining_days', $data)) {
            $body = preg_replace("/{remaining_days}/", $data['remaining_days'], $body);
        }
        if (array_key_exists('website_title', $data)) {
            $body = preg_replace("/{website_title}/", $data['website_title'], $body);
        }

        $mail = new PHPMailer(true);


            try {

                $mail->isSMTP();
                $mail->Host       = 'smtp.namibra.io';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'testemail@namibra.io';
                $mail->Password   = 'testemail@123$+';
                $mail->SMTPSecure = 'ssl';
                $mail->Port       = '465';

            } catch (Exception $e) { 
                Log::error('A connection exception occurred: ' . $e->getMessage());
            }

        try {

            //Recipients
            $mail->setFrom('testemail@namibra.io', 'Danikom Trading');
            $mail->addAddress($data['toMail'], $data['toName']);

            // Attachments
            if (array_key_exists('attachment', $data) && $data['type'] == 'productOrder') {
                $mail->addAttachment('assets/frontend/invoices/product/' . $data['attachment']);
            }

            // Content
            $mail->isHTML(true);
            $mail->Subject = $temp->email_subject;
            $mail->Body    = $body;

            $mail->send();
        } catch (Exception $e) { 
            Log::error('An exception occurred: ' . $e->getMessage());
        }
    }

}
