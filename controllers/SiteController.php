<?php


class SiteController
{
    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $latestProducts = array();
        $latestProducts = Product::getLatestProducts(2);

        require_once(ROOT . '/views/site/index.php');
        return true;
    }

    public function actionContact($prodDescId)
    {
         $descr = "";

        $description = array();
        $description = Product::getProductDescription($prodDescId);




        require_once (ROOT . '/components/phpmailer/PHPMailerAutoload.php');
        $mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'monsterx022@gmail.com';                 // SMTP username
        $mail->Password = '19960212AP';                           // SMTP password
//        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 25;                                    // TCP port to connect to

        $mail->setFrom('monsterx022@gmail.com', 'Mailer');
        $mail->addAddress('monsterx022@gmail.com', 'Joe User');     // Add a recipient
//        $mail->addAddress('ellen@example.com');               // Name is optional
//        $mail->addReplyTo('info@example.com', 'Information');
//        $mail->addCC('cc@example.com');
//        $mail->addBCC('bcc@example.com');

//        $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//        $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = 'Here is the subject';
        $mail->Body    = $description;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';



        require_once(ROOT . '/views/site/description_form.php');
        return true;

    }
}