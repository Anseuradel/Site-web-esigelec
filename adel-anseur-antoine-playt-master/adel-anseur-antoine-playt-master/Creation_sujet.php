<!DOCTYPE html>
<html>
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
  <li><a href="https://www.esigelec.fr/fr"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c4/Globe_icon.svg/1024px-Globe_icon.svg.png" alt="internet" height="50" width="50"></a></li>
  <li><a href="https://twitter.com/groupeesigelec"><img src="https://assets.stickpng.com/images/580b57fcd9996e24bc43c53e.png" alt="twitter" height="50" width="50"></a></li>
  <li><a href="https://www.facebook.com/Page.ESIGELEC"><img src="https://fsu83.fsu.fr/wp-content/uploads/sites/56/2017/10/Facebook-logo.png" alt="facebook" height="50" width="50"></a></li>
  

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
    <br/>    
    <br/>    
    <div class="creation">
    <form name="creation" method="post">
        Titre du sujet : <input type="text" name="nom"/> <br/>
        <br/>
        Résumé : <input type="text" name="resume"/><br/>
        <br/>
        Nombre de place disponible: <input type="text" name="places"/><br/>
        <br/>

        <select name="select">
            <option valeur="pdf">PDF</option>
            <option valeur="word">WORD</option>
        </select></br>
</br>
<input type="submit" name="valider" value="Création"/><br/>

        <br/>
    </form>
    
</div>







    <?php
    
    $mail=$_GET['mail'];
if(isset($_POST['nom'])){
    if(isset($_POST['resume'])){
        if(isset($_POST['places'])){
           
    $nom=$_POST['nom'];
    $resume=$_POST['resume'];
    $places=$_POST['places'];

    require (".inc.php");
    $connexion=@mysqli_connect(SERVEUR, LOGIN, MDP ) ;
    if(!$connexion)

    {echo "la connexion a la bdd a echouee\n";exit;}
    mysqli_select_db($connexion, "bdd_8_1");
    $res=mysqli_query($connexion,"SELECT * FROM utilisateur WHERE `email`= '$mail' ;");
while($tab=mysqli_fetch_assoc($res)){
$domi=$tab['dominante'];
}
    mysqli_query($connexion,"INSERT INTO `sujet` (`nom`, `resume`, `places`, `dominante`) VALUES ('$nom', '$resume', '$places', '$domi');");
    mysqli_query($connexion,"UPDATE `utilisateur` SET `suj` = '$nom' WHERE `utilisateur`.`email` = '$mail';");
}
}
    }
    
   
    
      ?>
      <div class="creation">
      <?php
 echo '<a href="Page_acceuil_professeur.php?mail='.$mail.'" ><button>Retour</button></a>'
 ?>
 </div>


    <div class="Deconnexion">   
    <a href="page_deconnexion.php"><button>Déconnexion</button></a>
        <br/>    
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
