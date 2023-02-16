<?php

namespace App\Controllers;


class Promosi extends BaseController
{
    public function __construct()
    {
        $this->email = \Config\Services::email();
    }

    public function promosi()
    {
        return view('promosi/kirimwa');
    }

    public function sendEmail()
    {
        $data = [
            'email_plgn' => $_POST['email_plgn'],

            'nama_pengirim' => $_POST['nama_pengirim'],
            'email_pelanggan' => $_POST['email_pelanggan'],
            'pesan_promosi' => $_POST['pesan_promosi']
        ];


        $this->email->setFrom('dphotographys.id@gmail.com', $data['nama_pengirim']);
        $this->email->setTo($data['email_pelanggan']);
        $this->email->setSubject('Ini Subjek');
        $this->email->setMassage($data['pesan_promosi']);
        if (!$this->email->send()) {
            echo 'Email Terkirim';
        } else {
            echo 'Kirim Email Gagal';
        }
    }





    // public function kirimemail()
    // {
    //     $data['title'] = 'Promosi';
    //     return view('gateway/kirimemail', $data);
    // }
    // public function send()
    // {
    //     if (isset($_post['submit'])) {
    //         //Instantiation and passing `true` enables exceptions
    //         $mail = new PHPMailer(true);

    //         $nama_pengirim = $_post['nama_pengirim'];
    //         $nama_pelanggan = $_post['nama_pelanggan'];
    //         $email_pengirim = $_post['email_pengirim'];
    //         $email_pelanggan = $_post['email_pelanggan'];
    //         $pesan_promosi = $_post['pesan_promosi'];


    //         //Server settings
    //         //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    //         $mail->isSMTP();                                            //Send using SMTP
    //         $mail->Host       = 'smtp.google.com';                     //Set the SMTP server to send through
    //         $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    //         $mail->Username   = 'dphotographys.id@gmail.com';                     //SMTP username
    //         $mail->Password   = 'dphotographys.com';                               //SMTP password
    //         //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    //         $mail->Port       = 456;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //         //Recipients
    //         $mail->setFrom($email_pengirim, 'DS Photography');
    //         $mail->addAddress($email_pelanggan, $nama_pelanggan);     //Add a recipient
    //         //$mail->addAddress('ellen@example.com');               //Name is optional
    //         $mail->addReplyTo('dphotographys.id@gmail.com', 'Dari DS Fotography');
    //         //$mail->addCC('cc@example.com');
    //         //$mail->addBCC('bcc@example.com');

    //         //Attachments
    //         //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //         // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //         //Content
    //         $mail->isHTML(true);                                  //Set email format to HTML
    //         $mail->Subject = 'Tes Kirim Email';
    //         $mail->Body    = $pesan_promosi; //'<b>Uji Coba</b>'
    //         //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    //         if ($mail->send()) {
    //             echo 'Email berhasil dikirim';
    //         } else {
    //             echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    //         }
    //     } else {
    //         echo "Tekan Submit";
    //     }
    // }
}
