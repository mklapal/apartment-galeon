<?php

function return_url($input) {

    
    $output = str_replace(
    array('á', 'č', 'ď', 'é', 'ě', 'í', 'ň', 'ó', 'ř', 'š', 'ť', 'ú', 'ů', 'ý', 'ž', ' ', '/', '.', '@'),
    array('a', 'c', 'd', 'e', 'e', 'i', 'n', 'o', 'r', 's', 't', 'u', 'u', 'y', 'z', '-', '', '', ''),
    $input);

    $output = strtolower($output);

    return $output;
}

/*
$_POST['name'] = "michal";
$_POST['phone'] = "michal";
$_POST['email'] = "michalklapal@gmail.com";
$_POST['text'] = "testovaci zprava / mockup";
*/

//odešle email zákazníkovi a nám
    $message = ('
    <html>
    <head>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <title>Apartment Galeon</title>
    </head>
    <body style="font-family: Arial, sans-serif;">
    
    <!--header-->
    <div style="background-color: #ffffff;">
    
    <table width="550" cellpadding="0" align="center" style="margin-top: 30px; border: 0px solid #ffffff; background:#ffffff;" color:#000000;>
    <tr><td style="background:#ffffff;padding:10px;">
    
    <img src="http://www.apartment-galeon.com/images/logo.svg" alt="logo">
    <!--/header-->
    <br />
    <!--body-->
    <table cellspacing="0" style="background:#ffffff; width:100%;">
      <tr>
        <td valign="top" style="text-align:left;font-size:14px; padding:0px;">
    <h2 style="padding:10px;">Děkujeme za Vaši zprávu!</h2>
    <p style="font-size:16px;color:#000000;padding:10px;">
    Detaily zprávy:<br ><br >
    Jméno: '.$_POST["name"].'<br >
    Telefon: '.$_POST["phone"].'<br >
    Email: '.$_POST["email"].'<br >
    Text zprávy: '.$_POST["text"].'<br >
    <br >
    Budeme Vás kontaktovat v nejblížším možném termínu!<br >
    <br >
    <b>

    Miroslav a Martina Staroňovi<br/>
    E: info@apartment-galeon.com<br/>
    </b>
    </p>
    </td>
      </tr>
    </table>
    <!--/body-->
    
    <!--footer-->
    <p style="color:#fff;padding:10px;">
    <a href="http://www.apartment-galeon.com" style="color:#333333;">http://www.apartment-galeon.com</a>
        
    </td></tr>
    </table>
    </div>
    <!--/footer-->
    
    </body>
    </html>
    ');
    
    //uložení do souboru html
    $html_order = '../users/'.return_url($_POST['email']).'_'.date("ymdhis").'.html';
    //echo $html_order;
    $file = fopen($html_order, "w+");
    fwrite($file, $message);
    fclose($file);
    
    //echo "true";
    //exit;
    
    //odeslání mailu - zákazník
    require_once('../ext/phpmailer/class.phpmailer.php'); //nalinkuješ soubor class.phpmailer.php
    $mail = new PHPMailer(); //vytvoříš objekt mail
    
    $mail->CharSet = "UTF-8";
    $mail->ContentType = "text/html";
    
    $add[] = array($_POST['email'], $_POST['name']);
    $add[] = array('michalklapal@gmail.com', 'Info');
    $add[] = array('info@apartment-galeon.com', 'Info Apartment Galeon');
    
    foreach ($add as $key => $val) {
    
      $mail->SetFrom('info@apartment-galeon.com', 'Info Apartment Galeon');
      $mail->AddReplyTo('info@apartment-galeon.com', 'Info Apartment Galeon');
      $mail->AddAddress($val[0], $val[1]);
      
      $mail->Subject    = "Apartment Galeon - kontaktni formular / contact form"; //předmět mailu 
      $mail->AltBody    = strip_tags($message); // optional, comment out and test
      $mail->MsgHTML($message);
    
      if(!$mail->Send()) {
          echo "Mailer Error: " . $mail->ErrorInfo; //pokud se mail neodešle, ohlásí chybu
          //header('Location: '.path_web.'/shop/chybna-objednavka');
      } 
      $mail->ClearAddresses();
    }

    echo "true";
?>
