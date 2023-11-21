<?php

include('../../controller/artisteC.php');
include('../../modele/artiste.php');

// create artiste
$artiste = null;

// create an instance of the controller
$artistesC = new ArtistesC();

if (
    isset($_POST["nom"]) &&
    isset($_POST["prenom"]) &&
    isset($_POST["biographie"]) &&
    isset($_POST["specialite"])
) {
    if (
        !empty($_POST["nom"]) &&
        !empty($_POST["prenom"]) &&
        !empty($_POST["biographie"]) &&
        !empty($_POST["specialite"])
    ) {
        $artiste = new Artiste();
        $artiste->setValues(
            $_POST["nom"],
            $_POST["prenom"],
            $_POST["biographie"],
            $_POST["specialite"]
        );

        $artistesC->addArtiste($artiste);

        header('Location: liste_artistes.php');
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Formulaire d'inscription d'artiste</title>
</head>

<body>
    <div class="container">
        <header class="text-center mt-4 mb-4">Ajouter un Artiste</header>
        <form action="" method="POST">
            <div class="form">
                <div class="details artiste">
                    <span class="title">Détails de l'Artiste</span>
                    <div class="fields">
                        <div class="input-field">
                            <label><i class="uil uil-user"></i> Nom</label>
                            <input class="form-control" type="text" name="nom" placeholder="Entrez le nom de l'artiste" required>
                        </div>
                        <div class="input-field">
                            <label><i class="uil uil-user"></i> Prénom</label>
                            <input class="form-control" type="text" name="prenom" placeholder="Entrez le prénom de l'artiste" required>
                        </div>
                        <div class="input-field">
                            <label><i class="uil uil-pen"></i> Biographie</label>
                            <textarea class="form-control" name="biographie" placeholder="Entrez la biographie de l'artiste" required></textarea>
                        </div>
                        <div class="input-field">
                            <label><i class="uil uil-award"></i> Spécialité</label>
                            <input class="form-control" type="text" name="specialite" placeholder="Entrez la spécialité de l'artiste" required>
                        </div>
                        <div class="submit-button">
                            <button class="btn btn-primary w-100 py-3" type="submit">Ajouter Artiste</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>











   



    <a href="#" class="logo"><span>Galerie</span>Creators</a>
    <div class="menuToggle" onclick="toggleMenu();"></div>
    <ul class="navbar">
        <li><a href="#banniere" onclick="toggleMenu();">Accueil</a></li>
        <li><a href="#apropos" onclick="toggleMenu();">A Propos</a></li>
        <li><a href="#menu" onclick="toggleMenu();">Galeries</a></li>
        <li><a href="#events" onclick="toggleMenu();">Evenements</a></li>
        <li><a href="#expert" onclick="toggleMenu();">Post</a></li>
        <li><a href="#temoignage" onclick="toggleMenu();">Temoignage</a></li>
        <li><a href="#commander" onclick="toggleMenu();">Commande</a></li>
        <li><a href="#contact" onclick="toggleMenu();">Contact</a></li>
        <li><a href="#login" onclick="toggleMenu();">Login</a></li>

        <a href="Module_Evenement/addEvenement.php" class="btn-reserve"onclick="toggleMenu();">Reservation</a>
    </ul>
</header>


<section class="banniere" id="banniere">
    <div class="contenu">
        <h2>"Inspiration exists, but it has to find you working." <span ><br>PABLO PICASSO</span></h2>
        <p>ART ET CULTURE</p>
        <a href="#menu" class="btn1">Galeries</a>
        <a href="#commander" class="btn2">Commandez ici</a>
    </div>
</section>


<section class="apropos" id="apropos">
    <div class="row">
        <div class="col50">
            <h2 class="titre-texte"><span>A</span> Propos De Nous</h2>
            <p>Restaurant et accueil très agréable, avec des plats et une présentation surprenante, le tout agrémenté de saveurs et de portions généreuse. Une ambiance de très bon goûts, une qualité de service très peu reprochable. Des prix très abordable vu la situation du restaurant, avec des produits frais.
            </p>
        </div>
        <div class="col50">
            <div class="image-slideshow">
                <div class="image fade">
                    <img src="../Front officeassets/wallpaperflare.com_wallpaper_1.jpg">
                </div>     
                <div class="image fade">
                    <img src="../Front officeassets/painting.jpg">
                </div>
                <div class="image fade">
                    <img src="../Front officeassets/painting2.jpg">
                </div>
              </div>
        </div>
    </div>
</section>


<section class="menu" id="menu">
    <div class="titre">
        <h2 class="titre-texte"><span>G</span>aleries</h2>
        <p>Ceci sont nos galeries. </p>
    </div>
    
    <div class="body-of-page">
        <div class="collection">
            <div class="galerie-group">
            <div class="museum1">
                <div class="card">
                    <p class="p-collection">T.G.M</p>
                    <img src="../Front office/assets/tgm.png">
                    <button class="butt-explorer">Explorer</button>
                </div>
            </div>
            <div class="museum2">
                <div class="card">
                    <p class="p-collection">Saladin</p>
                    <img src="../Front office/assets/saladin.png">
                    <button class="butt-explorer">Explorer</button>
                </div>
            </div>
            <div class="museum3">
                <div class="card">
                    <p class="p-collection">ARCHIVART</p>
                    <img src="../Front office/assets/archivare.png">
                    <button class="butt-explorer">Explorer</button>
                </div>
            </div>
        </div>
    </div>
</div>

 </div>
 <div class="titre">
    <a href="#" class="btn1">Voir Plus</a>
 </div>
</section>


<section class="events" id="events">
    <div class="titre">
        <h2 class="titre-texte"><span>E</span>venements</h2>
        <p>Ceci sont nos evenements. </p>
    </div>
    
    <div class="body-of-page">
        <div class="collection">
            <div class="galerie-group">
            <div class="museum1">
                <div class="card">
                    <p class="p-collection">Lac-event</p>
                    <img src="../Front office/assets/event-lac.jpg">
                    <button class="butt-explorer">S'inscrire</button>
                </div>
            </div>
            <div class="museum2">
                <div class="card">
                    <p class="p-collection">Sousse-event</p>
                    <img src="../Front office/assets/event-sousse.jpg">
                    <button class="butt-explorer">S'inscrire</button>
                </div>
            </div>
            <div class="museum3">
                <div class="card">
                    <p class="p-collection">Tunis-event</p>
                    <img src="../Front office/assets/event-tunis.jpg">
                    <button class="butt-explorer">S'inscrire</button>
                </div>
            </div>
        </div>
    </div>
</div>

 </div>
 <div class="titre">
    <a href="#" class="btn1">Voir Plus</a>
 </div>
</section>

<div class="container">
        <header class="text-center mt-4 mb-4">Ajouter une Actualité</header>
        <form action="" method="POST">
            <div class="form">
                <div class="details actualite">
                    <span class="title">Détails de l'Actualité</span>
                    <div class="fields">
                        <div class="input-field">
                            <label><i class="uil uil-heading"></i> Titre</label>
                            <input class="form-control" type="text" name="titre" placeholder="Entrez le titre de l'actualité" required>
                        </div>
                        <div class="input-field">
                            <label><i class="uil uil-pen"></i> Contenu</label>
                            <textarea class="form-control" name="contenu" placeholder="Entrez le contenu de l'actualité" required></textarea>
                        </div>
                        <div class="input-field">
                            <label><i class="uil uil-link"></i> Source</label>
                            <input class="form-control" type="text" name="source" placeholder="Entrez la source de l'actualité" required>
                        </div>
                        <div class="input-field">
                            <label><i class="uil uil-calendar-alt"></i> Date de publication</label>
                            <input class="form-control" type="date" name="datepublication" required>
                        </div>
                        <div class="submit-button">
                            <button class="btn btn-primary w-100 py-3" type="submit">Ajouter Actualité</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>


    <div class="container">
        <header class="text-center mt-4 mb-4">Ajouter un Artiste</header>
        <form action="" method="POST">
            <div class="form">
                <div class="details artiste">
                    <span class="title">Détails de l'Artiste</span>
                    <div class="fields">
                        <div class="input-field">
                            <label><i class="uil uil-user"></i> Nom</label>
                            <input class="form-control" type="text" name="nom" placeholder="Entrez le nom de l'artiste" required>
                        </div>
                        <div class="input-field">
                            <label><i class="uil uil-user"></i> Prénom</label>
                            <input class="form-control" type="text" name="prenom" placeholder="Entrez le prénom de l'artiste" required>
                        </div>
                        <div class="input-field">
                            <label><i class="uil uil-pen"></i> Biographie</label>
                            <textarea class="form-control" name="biographie" placeholder="Entrez la biographie de l'artiste" required></textarea>
                        </div>
                        <div class="input-field">
                            <label><i class="uil uil-award"></i> Spécialité</label>
                            <input class="form-control" type="text" name="specialite" placeholder="Entrez la spécialité de l'artiste" required>
                        </div>
                        <div class="submit-button">
                            <button class="btn btn-primary w-100 py-3" type="submit">Ajouter Artiste</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>




 <section class="temoignage" id="temoignage">
    <div class="titre blanc">
        
        <h2 class="titre-texte">Que Disent Nos <span>C</span>lients</h2>
        <p>Tout jugement est accepté par notre restaurant. </p>
    </div>
    <div class="contenu">
        <div class="box">
            <div class="imbox">
                <img src="../Front office/assets/lady.avif">
            </div>
            <div class="text">
                <p>J'ai adoré la variété du menu.</p>
                <h3>Mariem</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="../Front office/assets/man.jpg">
            </div>
            <div class="text">
                <p>C'est vraiment délicieux.</p>
                <h3>Ilyes</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
            <img src="../Front office/assets/man2.jpg">
            </div>
            <div class="text">
                <p>Je deteste leur service.</p>
                <h3>Japa</h3>
            </div>
        </div>
    </div>
 </section>

 <section class="commander" id="commander">
    <!-- commmander -->
  <title>Formulaire de Commande</title>
  <div class="container" id="com">
    <h2>Commander ici !</h2>
    <form action="traitement.php" method="post">
      <label for="nom">Nom :</label>
      <input type="text" id="nom" name="nom" required>

      <label for="email">Email :</label>
      <input type="email" id="email" name="email" required>

      <label for="produit">Lieu
       :</label>
      <select id="produit" name="produit">
        <option value="produit1">Manouba</option>
        <option value="produit2">Ariana</option>
        <option value="produit3">Sousse</option>
      </select>

      <label for="quantite">Quantité :</label>
      <input type="number" id="quantite" name="quantite" required>

      <input type="submit" class="inp" value="Commander">
    </form>
  </div>

 </section>

 <section class="contact" id="contact">
     <div class="titre noir">
         <h2 class="titre-text"><span>C</span>ontact</h2>
         <p>Contactez-nous à tous moments.</p>
     </div>
     <div class="contactform">
         <h3>Envoyer un message</h3>
         <div class="inputboite">
             <input type="text" placeholder="Nom" id="input1" >
         </div>
         <div class="inputboite">
            <input type="text" placeholder="email" id="input2" >
         </div>
         <div class="inputboite">
            <textarea placeholder="message" id="input3" ></textarea>
         </div>
         <div class="inputboite">
             <button class="btn-reserve" id="submit-btn" >Envoyer</button>
         </div>
     </div>
 </section>

 <section class="login" id="login">
    <div class="titre noir">
        <h2 class="titre-text"><span>L</span>ogin</h2>
    </div>
    <div class="contactform">
        <h3>Login</h3>
        <div class="inputboite">
            <input type="text" placeholder="Nom" id="input11" >
        </div>
        <div class="inputboite">
           <input type="password" placeholder="mot de passe" id="input22" >
        </div>
        <div class="inputboite">
            <button class="btn-reserve" id="submit-btn1" >Login</button>
        </div>
    </div>
 
</section>


 <div class="copyright">
     <p>ESPRIT 2023 GalerieCreators</p>
 </div>


 <script type="text/javascript">
     window.addEventListener('scroll', function(){
         const header =document.querySelector('header');
         header.classList.toggle("sticky", window.scrollY > 0 );
     });
     function toggleMenu(){
         const tmenuToggle = document.querySelector('.menuToggle');
         const navbar = document.querySelector('.navbar');
         navbar.classList.toggle('active');
         menuToggle.classList.toggle('active');
     }

 </script>
 <script src="main.js"></script>
</body>
</html>








<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'poppins', sans-serif;
    scroll-behavior: smooth;
}

p{
    font-weight: 300;
    color: #111;
}

header{
    position: fixed;
    top: 0%;
    left: 0%;
    padding: 20px 10px;
    width: 100%;
    z-index: 1;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    transition: 0.5s;
}

.logo{
    color: #fff;
    font-weight: bold;
    font-size: 2em;
    text-decoration: none;
}
.logo span{
    color: #347a48;
}

.navbar{
    display: flex;
    position: relative;
}
.navbar li{
    list-style: none;
}
.navbar a{
    color: #fff;
    text-decoration: none;
    margin-left: 30px;
    font-weight: 700;
}

.btn-reserve{
    padding: 10px 20px;
    background: #347a48;
   margin-top: -10px;
   text-transform:uppercase ;
}

.btn-reserve:hover{
    background: #347a48;
    transition: ease-out;
}

header .navbar li a:hover{
    color: #347a48;
    border-bottom: 2px solid #347a48;
}

.banniere{
    position: relative;
    width: 100%;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-image: url(assets/pageheader-banner.jpg);
    background-size: cover;
}

.banniere .contenu{
    max-width: 70%;
    text-align: center;
}
.banniere .contenu h2{
    color: #fff;
    font-size: 3em;
    text-transform: capitalize;
}
.contenu p:nth-child(2){
    color: #ffff;
    font-size: 1.2em;
}

.btn1{
    font-size: 1em;
    color: #fff;
    background: #347a48;
    padding: 10px 20px;
    display: inline-block;
    margin-top: 20px;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 2px;
    transition: 0.5s;
    margin-left: 10px;
}
.btn2{
    font-size: 1em;
    color: #fff;
    background: #2a4963;
    padding: 10px 20px;
    display: inline-block;
    margin-top: 20px;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 2px;
    transition: 0.5s;
    margin-left: 10px;
}

.btn1:hover{
letter-spacing: 4px;
}

section{
    padding: 100px;
}

.row{
    position: relative;
    width: 100%;
    display: flex;
    justify-content: space-between;
}

.row .col50{
    position: relative;
    width: 48%;
    justify-content: center;
    align-items: center;

}

.row .col50 h2{
    margin-bottom: 20px;
}

.titre-texte{
    color: #000;
    font-size: 2em;
    font-weight: 300px;
    text-transform: capitalize;
}

.titre-texte span{
    color: #347a48;
    font-size: 1.5em;
    font-weight: 700px;
}

.row .col50 img{
    height: 450px;
    width: 600px;
    position: relative;
}

.titre{
    display: flex;
    width: 100%;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}



.expert{
    margin-top: 100px;
    height: 100vh;
}

.expert .contenu{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin-top: 40px;
}

.expert .contenu .box{
    width: 250px;
    margin: 15px;
}
.expert .contenu .box img{
    position: relative;
    width: 100%;
    height: 300px;
    top: 0;
    left: 0;
    object-fit: cover;
}
/* commande */
select {
  width: 100%;
  padding: 10px;
  margin-top: 5px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

input[type="submit"] {
  background-color: #4caf50;
  color: #fff;
  padding: 10px 15px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #45a049;
}
.expert .contenu .box h3{
    color: #111;
    font-weight: 400;
    text-align: center;
}
.events{
    min-height: 100vh;
    margin-top: 200px;
    background-image: url(assets/backG.jpg);
    background-size: cover;
}

.temoignage{
    min-height: 100vh;
    margin-top: 100px;
    background-image: url(assets/images/bg2.jpg);
    background-size: cover;
}

.temoignage .contenu{
    display: flex;
    margin-top: 40px;
    width: 100%;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    flex-direction: row;
}

.temoignage .contenu .box{
    width: 340px;
    margin: 20px;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    border-radius: 15px;
    padding: 40px;
}

.temoignage .contenu .box .imbox{
    width: 80px;
    height: 80px;
    border-radius: 50px;
    position: relative;
    margin-bottom: 20px;
    overflow: hidden;
}

.temoignage .contenu .box .imbox img{
    position: relative;
    width: 100%;
    height: 100%;
    top:0;
    left: 0;
    object-fit: cover;
    justify-content: center;
    align-items: center;
}

.temoignage .contenu .box .text{
    text-align: center;
    color: #666;
    font-style: italic;
}

.temoignage .contenu .box .text h3{
    color: #347a48;
    margin-top: 20px;
    font-size: 1em;
    font-weight: 600;
}

.blanc .titre-texte,.blanc p{
    color: #ffffff;
}



.contact{
    background-image: url(assets/images/img-form.jpg);
    background-size: cover;
    box-shadow: 2px 2px 12px rgba(0,0,0, 0.8);
    width: 100%;
    background-position: unset;
}

.contactform{
    padding: 75px 50px;
    background: #fff;
    box-shadow: 5px 15px 50px rgba(0,0,0, 0.8);
    max-width: 500px;
    margin-top: 50px;
    justify-content: center;
    align-items: center;
    margin-left: 38%;
}

.contactform .inputboite{
    position: relative;
    width: 100%;
    margin-bottom: 20px;
}

.contactform h3{
    color: #111;
    font-size: 1.2em;
    margin-bottom: 20px;
}

.contactform .inputboite input,
.contactform .inputboite textarea{
    width: 100%;
    border: 1px solid #555;
    padding: 10px;
    color: #111;
    outline: none;
    font-size: 16px;
    font-weight: 300;
    resize: none;
}

.contactform .inputboite input[type="submit"]{
    font-size: 1em;
    font-weight: 700;
    color: #ffff;
    background: #347a48;
    display: inline-block;
    cursor: pointer;
    text-transform: uppercase;
    text-decoration: none;
    letter-spacing: 2px;
    outline: none;
    border: none;
    transition: 0.5s;
    max-width: 120px;
    align-items: center;
    justify-content: center;
}

.copyright{
    padding: 20px 40px;
    border-top: 2px solid rgba(0,0,0, 0.1);
    background: rgba(228,222,222,);
    text-align: center;
}

.copyright p:nth-child(1){
    color: #333;
}

.copyright a {
    color: #347a48;
    text-decoration: none;
    font-weight: 600;
    font-style: italic;
}

.contact .titre-text span{
    color: #347a48;
    font-size: 2em;
}

header.sticky{
    background: #fff;
    padding: 10px 10px;
    box-shadow: 0px 5px 20px rgba(0,0,0, 0.05);
}

header.sticky .logo{
    color: #000;
}

header.sticky .navbar li a {
    color: #000;
}

header.sticky li a:hover{
    color: #347a48;
    border-bottom: 2px solid #347a48;
}

@media (max-width: 991px) {
header, 
header.sticky{
    padding: 10px 20px;
}

header .navbar li{
    margin-left: 0px;
}

header .navbar li a {
    text-decoration: none;
    color: #111;
    font-size: 1.6em;
    font-weight: 300;
}

.navbar{
    display: none;
}
section{
    padding: 20px;
}

header .navbar.active{
    width: 100%;
    height: calc(100% -68px);
    position: fixed;
    top: 68px;
    left:0;
    display: flex;
    justify-content: center;
    flex-direction: column;
    background: #ffff;
    align-items: center;
}

.menuToggle{
    position: relative;
    width: 40px;
    height: 40px;
    background-image: url(assets/images/menu.png);
    background-repeat: no-repeat;
    background-position: center;
    cursor: pointer;
    background-size: 30px;
}

.menuToggle.active
{
    background-image: url(assets/images/close.png);
    background-size: 25px;
    background-repeat: no-repeat;
    background-origin: center;
}

header.sticky .menuToggle{
    filter: invert(1);
}


.banniere .contenu h2{
    font-size: 2em;
}

.row .col50 img{
    margin-left: 18%;
}

.contenu p:nth-child(2){
    font-size: 1.2em;
}
.expert{
    margin-top: 0px;
}

.menu{
    margin-top: 0px;
}

.row{
    display: flex;
    flex-direction: column;
}



.temoignage h2{
    font-size: 2em;
    text-align: center;
}

.temoignage p{
text-align: center;
}

.contactform{
    margin-left: 25%;
}


    .row .col50 {
        position: relative;
        width: 100%;
        justify-content: center;
        align-items: center;
        margin-bottom: 30px;
    
    }

    .row{
        flex-direction: column;
    }
}

@media (max-width: 480px)
{
    .banniere .contenu h2{
        font-size: 2.2em;
        color: #fff;
    }

    .titre-text{
        color: #000;
        font-size: 2rem;
        font-weight: 300;
        text-transform: capitalize;
    }

    .temoignage h2 
    {
        font-size: 1.1em;
    }

    .temoignage p{
        text-align: center;
    }
}

.contenu span{
    color:rgb(48, 194, 220);
}



/*body{
    background-color: rgb(254, 207, 215);
}*/

fieldset {
    /*background-color: #FAFAFA;
    border:2px dashed #DF3FF3;*/
    width: 70%;
    margin-left: 200px;
    margin-top: 100px;
}

legend {
    /*color: #DF3FF3;*/
padding-left:  0.25cm;
padding-right: 0.25cm;
}

button:hover{
    background-color: #F4CCCC;
}

* {
    box-sizing: border-box
}
.image-slideshow {
  max-width: 1000px;
  position: relative;
  margin: auto;
}
img {
  width: 100%
}
.fade {
  animation-name: fade;
  animation-duration: 2s;
}
@keyframes fade {
  from {opacity: .5}
  to {opacity: 1}
}


/* ----------------------------------------------------------------------------------------------------------------*/
/* ----------------------------------------------------------------------------------------------------------------*/


.body-of-page .collection{
    width: 100%;
    display: flex;
    flex-wrap: wrap;
}

.body-of-page .collection .museum1,.museum2,.museum3{
    padding: 10px;
}

.galerie-group {
    display: flex;
}
.body-of-page .collection .card {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    border-radius: 10px;
    position: relative;
    overflow: hidden;
    background: rgba(0, 0, 0, 0.5);
}
.body-of-page .collection .card::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0);
    border-radius: 10px;
    transition: background 0.5s ease;
}
.body-of-page .collection .card:hover::before {
    background: rgba(0, 0, 0, 0.5);
}
.body-of-page .collection img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.body-of-page .collection .p-collection{
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    z-index: 2;
    color: white;
    font-size: 1.8rem;
    font-weight: bold;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    text-align: center;
    background: rgba(0, 0, 0, 0.7); /* Set the background color and opacity */
    padding: 8px;
    width: 100%; /* Make it span the width of the card */
}

.butt-explorer {
    transition: 0.3s ease-in-out;
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%); /* Center horizontally */
    z-index: 2;
    margin-bottom: 10px; /* Adjust the margin for spacing */
    border: 3px solid white;
    padding: 8px;
    color: white;
    background-color: transparent;
    font-size: 1.6rem;
    font-weight: bold;
    cursor: pointer;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
.butt-explorer:hover{
    bottom: 10px;
    transition: 0.3s ease-in-out;
    border: 3px solid black;
    color: black;
    background-color: white;
    font-size: 1.6rem;
}
/* commande */
#produit {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }
  
  .inp{
    background-color: #4caf50;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  .inp:hover {
    background-color: #45a049;
  }

/* ----------------------------------------------------------------------------------------------------------------*/
/* ----------------------------------------------------------------------------------------------------------------*/




.container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  
  .container h2 {
    text-align: center;
  }
  
  .container label {
    display: block;
    margin-top: 10px;
  }
  
  .container input[type="text"], input[type="email"], input[type="number"] {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }
  
  /* commande */
  .container select {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }
  
  .container input[type="submit"] {
    background-color: #4caf50;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  .container input[type="submit"]:hover {
    background-color: #45a049;
  }



















.expert h1 {
    text-align: center;
    color: #333;
    font-family: Georgia, 'Times New Roman', Times, serif;
}


.expert form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.expert label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
    color: #333;
}


.expert input[type="text"],select,textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.expert input[type="submit"] {
    background-color: rgb(10, 106, 33);
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
</style>