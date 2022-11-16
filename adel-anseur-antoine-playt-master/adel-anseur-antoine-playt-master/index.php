<!DOCTYPE html>
<html>
<head>
</head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<title>Gestion PING 2021/2022</title>
<body>
<header>   
</header>
</body>
<nav>
<ul>
  <li><a class="active" href="#home"><img src="https://media-exp1.licdn.com/dms/image/C4D0BAQHDcMd0iFuTeg/company-logo_200_200/0/1519892537247?e=2159024400&v=beta&t=Y_hTdGPgp5IENW2N_QVjA_WCEcruQe-9kzoFXRzBZ3Y" alt="Photo de l'école"  width="50" height="50" border="0"/></a></li>
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

<body>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="https://cdn.futura-sciences.com/buildsv6/images/wide1920/7/5/8/7589f8e179_50164709_ingenieur-recherche-developpement1.jpg"  height="430" width="1000">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="https://cdn.futura-sciences.com/buildsv6/images/mediumoriginal/0/1/1/0119c45346_50148024_ingenieur-calcul-aeronautique2.jpg" height="430" width="1000"">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="https://cdn.futura-sciences.com/buildsv6/images/mediumoriginal/7/5/4/75406205fb_50165536_ingenieur-concepteur-moteur-aeronautique2.jpg" height="430" width="1000"">
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
<div class="liste">
        <a href="liste.php">
     <h3>Voir les PINGS</h3></div>
    </a>
<br>
<br>
<br>
<br>
<br>
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