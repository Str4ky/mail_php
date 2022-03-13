<h2>PHP Mail</h2>
<div>
<a title="PHP"><img alt="PHP" src="https://img.shields.io/badge/PHP-Site%20web-purple"></a> <a title="CSS"><img alt="CSS" src="https://img.shields.io/badge/CSS-Style-blue"></a> <a title="PHPMailer"><img alt="PHPMailer" src="https://img.shields.io/badge/PHPMailer-Script-yellow"></a>
</div>
  
  <br>
  
*Envoie de mail automatique en PHP*

Utilisant le projet PHPMailer : https://github.com/PHPMailer/PHPMailer

<br>

__Utilisation :__

Dans le fichier __mail.php__ changez ces 3 lignes avec vos logins outlook et le destinataire

```
$mailfrom = "votre_email@mail.fr";
$mailpsw = "votre_mot_de_passe";
$mailto = "votre_destinataire@mail.fr";
```

Changez le style d'affichage du message qui vous sera envoyé

```
utf8_decode("Envoyé par : {$_POST['name']}<br>Son email : {$_POST['email']}<br><br>{$_POST['message']}<br><br>©Votre Nom");
```

Par défaut les serveurs mails sont ceux d'__Outlook__, vous pouvez les changer en modifiant ces lignes

```
$mail->SMTPSecure = 'tls';
$mail->Host = "smtp.live.com";
$mail->Port = 587;
```

<br>

__Test du projet :__

Utilisez un logiciel de wamp tel que Uwamp : https://www.uwamp.com
<br>
Ou encore Laragon : https://laragon.org si vous êtes en local
<br><br>
Vous pouvez aussi l'hoster sur votre propre site web/serveur
