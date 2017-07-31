<?php include ROOT . '/views/layouts/header.php' ?>
<section id="form" style="margin-top: 0px;"><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1 padding-right">

                <h1>
                    <?php
                    if (!$mail->send()) {
                        echo 'Сообщение не может быть отправлено.';
                        echo 'Ошибка Mailer: ' . $mail->ErrorInfo;
                    } else {
                        echo 'Описание товара оправлено вам на почту!';
                    } ?>
                </h1>
            </div>
        </div>
    </div>
</section><!--/form-->
<?php include ROOT . '/views/layouts/footer.php' ?>
