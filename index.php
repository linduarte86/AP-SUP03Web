<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AP-SUP03Web</title>
</head>

<body>
    
    <?php
    require_once('src/PHPMailer.php');
    require_once('src/SMTP.php');
    require_once('src/Exception.php');

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    $email = new PHPMailer(true);

    try {
        $email->SMTPDebug = SMTP::DEBUG_SERVER;
        $email->isSMTP();
        $email->Host = 'smtp-mail.outlook.com';
        $email->SMTPAuth = true;
        $email->Username = 'linduarte86@hotmail.com';
        $email->Password = 'ljc778963ljc';
        $email->Port = 587;

        $email->setFrom('linduarte86@hotmail.com');
        $email->addAddress('linduarte86@gmail.com');

        $email->isHTML(true);
        $email->Subject = 'Teste de envio de email';
        $email->Body = '<h2>O e-mail foi enviado com sucesso!</h2>';
        $email->AltBody = 'O e-mail foi enviado com sucesso!';

        if ($email->send()) {
            echo 'E-mail enviado com sucesso!';
        } else {
            echo 'E-mail não enviado!';
        }

    } catch (Exception $e) {
        echo "Erro ao enviar e-mail: {$email->ErrorInfo}";
    }
    ?>
</body>

</html>