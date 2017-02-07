<html>
    <head>
        <title>Get 27thBox </title>
        <meta charset="utf-8" />
        <meta http-equiv="refresh" content="1000ms; url=http://www.27thbox.com">
    </head>
    <body>
        <?php
            $to      = 'info@27thbox.com';
            $from    = $_POST['name']
            $subject = $_POST['subject'];
            $message = $_POST['message'];
            $headers = 'From: '. $from . "\r\n" .
            'Reply-To: info@27thbox.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

            $send = mail($to, $subject, $message, $headers);

            // this will help you to get the status mail sent or not
            if($send) :
               echo "Email sent";
            else :
                echo "Email sending failed";
            endif;
        
        ?>
    </body>
</html>