<!DOCTYPE html>
<html>
    
<?php
?>

<head>

<meta charset="utf-8">
<link rel="stylesheet" href="styleAcceuil.css">
<title>Gestion PING 2021/2022</title>
</head>
<body>
<nav>
<ul>
  <li><a class="active" href="index.php"><img src="https://media-exp1.licdn.com/dms/image/C4D0BAQHDcMd0iFuTeg/company-logo_200_200/0/1519892537247?e=2159024400&v=beta&t=Y_hTdGPgp5IENW2N_QVjA_WCEcruQe-9kzoFXRzBZ3Y" alt="Photo de l'école"  width="50" height="50" border="0"/></a></li>
  <li><a class="Créer" href="creation.php" height="50" width="50">Créer profil</a></li>
  <li><a class="connecter" href="authentification.php" height="50" width="50">Se connecter</a></li>
  <li><a href="https://www.esigelec.fr/fr"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQt6gExAkN79zj_1tn-otL4GUOl50zLXMigmw&usqp=CAU" alt="internet" height="50" width="50"></a></li>
  <li><a href="https://twitter.com/groupeesigelec"><img src="https://assets.stickpng.com/images/580b57fcd9996e24bc43c53e.png" alt="twitter" height="50" width="50"></a></li>
  <li><a href="https://www.facebook.com/Page.ESIGELEC"><img src="https://lh3.googleusercontent.com/proxy/0xXw2dJAg2FDPdPO52kGQElGBwkem_1pVgqACLRuC57P-89-d8ICaUETjc1nMQC4K-ILqw8PUamWJ9RO1ao" alt="facebook" height="50" width="50"></a></li>

  <div class="logoécole">
</div>
  <div class="internet">
    </div>
</a>
<div class="twitter">
    </div>
</a>
    <div class="facebook">
    </div>
</a>
</ul>
</nav>


    <main>
    <?php

$mail=$_GET['mail'];
require (".inc.php");
    $connexion=@mysqli_connect(SERVEUR, LOGIN, MDP ) ;
    if(!$connexion)

    {echo "la connexion a la bdd a echouee\n";exit;}
    mysqli_select_db($connexion, "bdd_8_1");
    
    echo "Mon sujets : ";  

$res=mysqli_query($connexion,"SELECT * FROM utilisateur WHERE `email`= '$mail' ");
while($tab=mysqli_fetch_assoc($res)){
$sujet=$tab['suj'];
}
if(!empty($sujet)){
$res=mysqli_query($connexion,"SELECT * FROM sujet WHERE `nom`= '$sujet' ");
while($tab=mysqli_fetch_assoc($res)){
    
    echo "<br />";
    echo $tab['nom'];
    echo "   | ";
    echo $tab['resume'];
    echo "   | ";
    echo $tab['places'];
    echo "<br />";
}


echo'<a  href = "modif_suj.php?mail='.$mail.'"> Modifier mon sujet</a>';
}
if(empty($sujet)){
    echo'<a  href = "Creation_sujet.php?mail='.$mail.'"> Créer un sujet</a>';
}
?>
<br/>
<br/>
<?php


    ?><div class="déco">
        <a href="index.php">
        <h8>Se déconnecter</h8></div>
    </a>
</div>
    </main>
    <footer>
        <div class="footer-dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 item text">  
                        Contact:<br>
                        ANSEUR Adel: adel.anseur@groupe-esigelec.org<br>
                        PLAYT Antoine: antoine.playt@groupe-esigelec.org<br>          
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">ANSEUR PLAYT © 2021</p>
            </div>
        </footer>
</body>  
</html>