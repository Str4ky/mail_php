<!--Vérifier si la valeur d'envoie de mail existe pour ne rien changer-->
<?php
if (!isset($_SESSION['message']))
{
    $_SESSION['message'] = '';
}
?>
<link rel="stylesheet" href="default.css">
<?php
/*Vérifier si un mail a été envoyé*/
if($_SESSION['message'] = 1)
{
echo"
<body>
            <center>
                <div class='name'>Message envoyé avec succès</div></center><br>

            <center><div><a href='index.php' class='input'>Retour à l'accueil</a></div><center>";
}
else{
    echo"
    <body>
                <center>
                    <div class='name'>Pas de message envoyé</div></center><br>
    
                <center><div><a href='index.php' class='input'>Retour à l'accueil</a></div><center>";
    }
    ?>