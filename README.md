<h2>PHP Mail</h2>
<div>
<a title="PHP"><img alt="PHP" src="https://img.shields.io/badge/PHP-Site%20web-purple"></a> <a title="CSS"><img alt="CSS" src="https://img.shields.io/badge/CSS-Style-blue"></a> <a title="PHPMailer"><img alt="PHPMailer" src="https://img.shields.io/badge/PHPMailer-Script-yellow"></a>
</div>
  
  <br>
  
*Envoie de mail automatique en PHP*

Utilisant le projet PHPMailer : https://github.com/PHPMailer/PHPMailer

<br>

__Utilisation :__

Dans le fichier __mail.php__ changez ces 3 lignes avec les logins de votre compte Outlook/Gmail/etc... et le destinataire

```
$mailfrom = "votre_email@mail.fr";
$mailpsw = "votre_mot_de_passe";
$mailto = "votre_destinataire@mail.fr";
```

Changez, comment le message qui sera envoyé par mail ressemblera en terme de mise en page

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

Utilisez un logiciel de wamp tel que Uwamp : https://www.uwamp.com ou Laragon : https://laragon.org
<br>
Mettez le dossier du projet dans le dossier __www__ de votre logiciel de Wamp et lancer le projet depuis votre navigateur web
<br><br>
Vous pouvez aussi l'hoster sur votre propre site web/serveur
