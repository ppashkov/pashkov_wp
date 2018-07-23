<?php
error_reporting(E_ALL);
mb_internal_encoding("UTF-8");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="text/html; charset=utf-8">
    <title>Форма</title>
    <link rel="stylesheet" href="style/main.css">
</head>
<body>
    <main class="form">
    <div class="form_wrapper">
        <form action="../../../wp-content/themes/pashkov/handler.php" method="POST" id="cvform" enctype="multipart/form-data">
        
        <p>Если вы нашли ошибку на данном веб-сайте, оставьте свой e-mail, комментарий, и прикрепленный скриншот</p>
            <input type="email" name="email" id="email" value="asd@gmailc.om" placeholder="E-mail" required>
            <input type="text" name="message"  id="message" value="asdasdasdasd" placeholder="Комментарий" required>
            <input type="file" id="file" multiple="multiple" name="screen" accept=".jpg, .jpeg, .png, .pdf, .gif, .bmp"  > 
            <input type="submit" value="Отправить"> 
            <span id="msg"></span>
          
        </form>

    </div>
    </main>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/form.js"></script>
</body>
</html>