<h2>PHP Mail</h2>

*Envoie de mail automatique avec Outlook*

Utiliant le projet PHPMailer : https://raw.github.com/PHPMailer/PHPMailer

<br>

__Utilisation__ :

Dans le fichier "mail.php" changer ces 2 lignes avec vos logins outlook

```
$mailto = "votre_email@outlook.fr";
$mailpsw = "votre_mot_de_passe_outlook";
```

Changer le style du message qui vous sera envoyé

```
$mailmsg = utf8_decode("Envoyé par : {$_POST['name']}<br>Son email : {$_POST['email']}<br><br>{$_POST['message']}<br><br>©Votre Nom");
```
