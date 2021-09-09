<h2>PHP Mail</h2>
  <a href="#tada-php-support" title="PHP Versions Supported"><img alt="PHP Versions Supported" src="https://img.shields.io/badge/php-5.3%20to%208.1-777bb3.svg?logo=php&logoColor=white&labelColor=555555"></a> 
  
  <br>
  
*Envoie de mail automatique avec Outlook*

Utiliant le projet PHPMailer : https://raw.github.com/PHPMailer/PHPMailer

<br>

__Utilisation__ :

Dans le fichier __mail.php__ changer ces 2 lignes avec vos logins outlook

```
$mailto = "votre_email@outlook.fr";
$mailpsw = "votre_mot_de_passe_outlook";
```

Changer le style d'affichage du message qui vous sera envoyé

```
utf8_decode("Envoyé par : {$_POST['name']}<br>Son email : {$_POST['email']}<br><br>{$_POST['message']}<br><br>©Votre Nom");
```
