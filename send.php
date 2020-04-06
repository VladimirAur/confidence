<?
if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['email'])&&$_POST['email']!="")&&(isset($_POST['phone'])&&$_POST['phone']!="")&&(isset($_POST['area'])&&$_POST['area']!="")){
        $to = 'hvgnlr@gmail.com';
        $subject = 'Запрос с сайта';
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['name'].'</p>
                        <p>Почтовый адрес: '.$_POST['email'].'</p>
                        <p>Телефон: '.$_POST['phone'].'</p>                       
                        <p>Сообщение: '.$_POST['area'].'</p>                       
                    </body>
                </html>';
        $headers  = "Content-type: text/html; charset=utf-8 \r\n";
        $headers .= "From: nizhyn-sb <from@example.com>\r\n";
        $result = mail($to, $subject, $message, $headers);
        if ($result)  {
        echo "<h2>Thank you for your message!!!</h2>";	
        }
        else {
        echo "<h2>Message NOT sent!!!</h2>";
        }
}
?>