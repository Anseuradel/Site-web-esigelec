<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="styleAcceuil.css">
     <title>Authentification</title>
</head>
<body>
<nav>
<ul>
  <li><a class="active" href="index.php"><img src="https://media-exp1.licdn.com/dms/image/C4D0BAQHDcMd0iFuTeg/company-logo_200_200/0/1519892537247?e=2159024400&v=beta&t=Y_hTdGPgp5IENW2N_QVjA_WCEcruQe-9kzoFXRzBZ3Y" alt="Photo de l'école"  width="50" height="50" border="0"/></a></li>
  <li><a class="Créer" href="creation.php" height="50" width="50">Créer profil</a></li>
  <li><a class="connecter" href="#authentification.php" height="50" width="50">Se connecter</a></li>
  <li><a href="https://www.esigelec.fr/fr"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c4/Globe_icon.svg/1024px-Globe_icon.svg.png" alt="internet" height="50" width="50"></a></li>
  <li><a href="https://twitter.com/groupeesigelec"><img src="https://assets.stickpng.com/images/580b57fcd9996e24bc43c53e.png" alt="twitter" height="50" width="50"></a></li>
  <li><a href="https://www.facebook.com/Page.ESIGELEC"><img src="https://fsu83.fsu.fr/wp-content/uploads/sites/56/2017/10/Facebook-logo.png" alt="facebook" height="50" width="50"></a></li>
  <li><a class="retour" href="index.php" height="50" width="50">Retour</a></li>
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
<div class="imageA">
  <img src="https://png.pngtree.com/png-vector/20190919/ourlarge/pngtree-user-login-or-authenticate-icon-on-gray-background-flat-icon-ve-png-image_1742031.jpg"  height="230" width="230">
</div>
<div class="ident">

  <form name="connexion" method="post">
        Entrez votre email : <input type="text" name="mail"/> <br/>
        <br/>
        Entrez votre mot de passe : <input type="password" name="mdp"/><br/>
        <br/>
        <input type="submit" name="valider" value="Connexion"/><br/>
        <br/>
    </form>
</div>
    

<div class=tempo>
    <?php

  if(isset($_POST['mail'])){
    if(isset($_POST['mdp'])){

$mail=$_POST['mail'];
$mdp=$_POST['mdp'];

    require (".inc.php");
    $connexion=@mysqli_connect(SERVEUR, LOGIN, MDP ) ;
    if(!$connexion)

    {echo "la connexion a la bdd a echouee\n";exit;}
    mysqli_select_db($connexion, "bdd_8_1");
    
    $res=mysqli_query($connexion,"SELECT * FROM utilisateur");
    while($tab=mysqli_fetch_assoc($res)){
     
      
        if($tab['email']==$mail && $tab['mdp']==$mdp && $tab['fonction']=="Eleve") {
          echo'<a  href = "eleve.php?mail='.$mail.'"> Connexion réussi</a>';
        }
        if($tab['email']==$mail && $tab['mdp']==$mdp && $tab['fonction']=="Enseignant") {
        echo'<a  href = "Page_acceuil_professeur.php?mail='.$mail.'"> Connexion réussi</a>';
        }
      }
    }
  }

   
?>
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
