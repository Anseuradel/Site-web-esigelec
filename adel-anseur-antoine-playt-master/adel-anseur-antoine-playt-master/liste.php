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

    <h4>Nom du Ping:</h4>
    <div class=ping>
<?php
    require (".inc.php");
    $connexion=@mysqli_connect(SERVEUR, LOGIN, MDP ) ;
    if(!$connexion)

    {echo "la connexion a la bdd a echouee\n";exit;}
    mysqli_select_db($connexion, "bdd_8_1");
?>   
    <div class="table">
    <table width="1000" height="300" border="10">
      <tbody>
        <tr>
          <th scope="col">n°:&nbsp;</th>
          <th scope="col">Titres des sujets:&nbsp;</th>
    </tr>
    <tr>
      <td>&nbsp;1</td>
      <td>&nbsp;<?php 
      $res=mysqli_query($connexion,"SELECT DISTINCT * FROM sujet ORDER BY nom ASC LIMIT 1");
    while($tab=mysqli_fetch_assoc($res)){
        echo $tab['nom'];
    }
        ?>
    </td>
    <tr>
      <td>&nbsp;2</td>
      <td>&nbsp;<?php 
      $res=mysqli_query($connexion,"SELECT DISTINCT * FROM sujet ORDER BY nom ASC LIMIT 1,1");
    while($tab=mysqli_fetch_assoc($res)){
        echo $tab['nom'];
    }
        ?>
    </td>
    <tr>
      <td>&nbsp;3</td>
      <td>&nbsp;<?php 
      $res=mysqli_query($connexion,"SELECT DISTINCT * FROM sujet ORDER BY nom ASC LIMIT 2,1");
    while($tab=mysqli_fetch_assoc($res)){
        echo $tab['nom'];
    }
        ?>
    </td>
    <tr>
      <td>&nbsp;4</td>
      <td>&nbsp;<?php 
      $res=mysqli_query($connexion,"SELECT DISTINCT * FROM sujet ORDER BY nom ASC LIMIT 3,1");
    while($tab=mysqli_fetch_assoc($res)){
        echo $tab['nom'];
    }
        ?>
    </td>
    <tr>
      <td>&nbsp;5</td>
      <td>&nbsp;<?php 
      $res=mysqli_query($connexion,"SELECT DISTINCT * FROM sujet ORDER BY nom ASC LIMIT 4,1");
    while($tab=mysqli_fetch_assoc($res)){
        echo $tab['nom'];
    }
        ?>
    </td>
    <tr>
      <td>&nbsp;6</td>
      <td>&nbsp;<?php 
      $res=mysqli_query($connexion,"SELECT DISTINCT * FROM sujet ORDER BY nom ASC LIMIT 5,1");
    while($tab=mysqli_fetch_assoc($res)){
        echo $tab['nom'];
    }
        ?>
    </td>
   

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
