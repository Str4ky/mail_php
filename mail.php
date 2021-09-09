<!--Vérifier si la valeur d'envoie de mail existe pour ne rien changer-->
<?php
if (!isset($_SESSION['message']))
{
    $_SESSION['message'] = '';
}
?>
<!--Configurer le compte Outloook ainsi que le coprs du mail puis envoyer celui-ci puis définir la variable d'envoie d'un message-->
<?php
    $mailto = "votre_email@outlook.fr";
    $mailpsw = "votre_mot_de_passe_outlook";
    $mailsub = $_POST["subject"];
    $mailmsg = utf8_decode("Envoyé par : {$_POST['name']}<br>Son email : {$_POST['email']}<br><br>{$_POST['message']}<br><br>©Votre Nom");
    require("src/PHPMailer.php");
    require("src/SMTP.php");
    require("src/Exception.php");
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSmtp();
    $mail->SMTPDebug = 2;

    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = "smtp.live.com";
    $mail->Port = 587; 

    $mail->IsHTML(true);
    $mail->Username = $mailto;
    $mail->Password = $mailpsw;
    $mail->setFrom($mailto);
    $mail->Subject = $mailsub;
    $mail->Body = $mailmsg;
    $mail->AddAddress($mailto);
    $mail->Send();
    $_SESSION['message'] = 1;
    /*Rediriger l'utilisateur sur la page de message*/
    echo '<script language="Javascript">
    <!--
    document.location.replace("send.php");
    // -->
    </script>';
?>