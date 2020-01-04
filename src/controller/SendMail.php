<?php


namespace Admin\controller;

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

class SendMail
{
    public $mail;
    
    public function __construct()
    {
        $this->mail=new PHPMailer();
    }

    public function sendMail($e_mail, $title, $description, $attach_path=null,$attach_name=null){

        try {
            $this->mail->isSMTP();
            $this->mail->Host = 'smtp.gmail.com';
            $this->mail->SMTPAuth = true;
            $this->mail->Username = '********@gmail.com';
            $this->mail->Password = '********';
            $this->mail->SMTPSecure = 'tls';
            $this->mail->Port = 587;

            $this->mail->setFrom('********@gmail.com', 'Name');
            $this->mail->addReplyTo('********@gmail.com', 'Name');
            $this->mail->addAddress($e_mail);
            if (!empty($attach_path && $attach_name)) {
                $this->mail->addAttachment($attach_path, $attach_name);
            }
            $this->mail->Subject = $title;
            $this->mail->Body = $description;
            $this->mail->send();
            echo $msg='<script>alert("Send!");</script>';
        }catch (Exception $e){
            echo $msg="<script>alert('Not send, $e->ErrorInfo');</script>";
        }
    }
}