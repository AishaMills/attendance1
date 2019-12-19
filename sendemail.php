<?php
require 'vendor/autoload.php';


class SendEmail{

    public static function SendMail($to,$subject,$content){
        $key = '';

        $email = new  \SendGrid\Mail\Mail();
        $email->setFrom("aishamills94@gmail.com", "Aisha Mills");
        $email->setSubject($subject);
        $email->addTo($to);
        $email->addContent("text/plain", $content);

        $sendgrid = new \SendGrid($key);

        try{
            $response = $sendgrid->send($email);
            return $response;


        }catch(Exception $e){

            echo 'Email exeption Caught :'. $e->getMessage() ."\n";
            return false;
        }
    }
}





?>