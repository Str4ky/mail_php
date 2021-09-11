<!--Vérifier si un mail a été envoyé pour réinitialiser sa valeur-->
<?php
session_start();

if (isset($_SESSION['message']))
{
    $_SESSION['message'] = '';
}
?>
<!--Formulaire basique d'envoie de mail-->
<link rel="stylesheet" href="default.css">
<div>
<form method="post" action="mail.php">
    <center><p>Envoie de mail PHP</p></center>
    <center><input type="text" name="name" id="name" placeholder="Entrez votre nom" required></center><br>
    <center><input type="email" name="email" id="email" placeholder="Entrez votre email" required></center><br>
    <center><input type="text" name="subject" id="subject" placeholder="Entrez votre sujet" required></center><br>
    <center><textarea name="message" id="message" placeholder="Entrez votre message" class="textarea" required></textarea></center><br>
    <!--Affiche un message après l'envoie du mail-->
	<?php
	echo $_SESSION['message'];
	?>
    <center><input type="submit" class="input" value="Envoyer"/></center>
</form>
</div>