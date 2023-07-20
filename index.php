<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AP-SUP03Web</title>
</head>

<body>
    <h1>Enviando um E-mail</h1>
    <?php
    // The message
    $message = "Line 1\r\nLine 2\r\nLine 3";

    // In case any of our lines are larger than 70 characters, we should use wordwrap()
    $message = wordwrap($message, 70, "\r\n");

    // Send
    
    mail('linduarte86@hotmail.com', 'My Subject', $message);
    ?>
</body>

</html>