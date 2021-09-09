<h2>PHP Mail</h2>
<a title="Utilisation du PHP"><img alt="Utilisation du PHP" src="https://img.shields.io/badge/PHP-Utilisation%20du%20PHP-purple"></a> <a title="Utilisation du CSS"><img alt="Utilisation du CSS" src="https://img.shields.io/badge/CSS-Utilisation%20du%20CSS-red"></a>
  
  <br>
  
*Envoie de mail automatique avec Outlook*

Utiliant le projet PHPMailer : https://raw.github.com/PHPMailer/PHPMailer

<br>

__Utilisation__ :

Dans le fichier __mail.php__ changez ces 2 lignes avec vos logins outlook

```
$mailto = "votre_email@outlook.fr";
$mailpsw = "votre_mot_de_passe_outlook";
```

Changez le style d'affichage du message qui vous sera envoyé

```
utf8_decode("Envoyé par : {$_POST['name']}<br>Son email : {$_POST['email']}<br><br>{$_POST['message']}<br><br>©Votre Nom");
```

<br>

__Test du projet__ :

Utilisez un logiciel de wamp tel que Uwamp : https://www.uwamp.com
<br>
Ou encore Laragon : https://laragon.org
