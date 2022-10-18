<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Accueil</title>
        <!--CSS-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="aceuil.css">
        <!--zoom tactile-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Mot clés-->
        <meta name="keywords" content="Stage étudiant, Staage entreprise, Stage exia, Stage, Stagiaire, Stage informatique, Stage ecole ingénieur">
        <!--icon sur le navigateur-->
        <link rel="shortcut icon "  href="Images/tigre-mini.jpg">
           <!--PWA-->
        <link rel="manifest" href="manifestweb.json"> 
        <link rel="apple-touch-icon" href="/assets/icons/icon-96x96.png">
        <meta name="apple-mobile-web-app-status-bar" content="white">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="theme-color" content="white">
        <meta name="background_color" content="red">
        
    </head>

    <body>
     

    
<?php include ("MoteurTemplate/header.php") ?>
     <main> 
       <!--caroussel-->
          <div class="container-fluid carousel">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="Images/dso-2018-1920x500.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="Images/Lesquestionsrelevantdevotrecomportementautravail.png" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="Images/entreprise1.png" alt="Third slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
          </div>
      
    
        <section>
          <div class="container-fluid one">
            <div class="how-section1">
                <div class="row">
                    <div class="col-md-6 how-img">
                        <img src="Images/exia.jpg" class="rounded-circle img-fluid" id="img" alt=""/>
                    </div>
                    <div class="col-md-6">
                        <h4 id="Apropos">A propos...</h4>
                            <h4 class="subheading">Vous etes étudiant et à la recherche d'un stage, vous etes donc à la bonne porte...</h4>
                    <p class="texteblanc">Student Internship est une plateforme en ligne qui permet aux étudiants de rechercher et de postuler à des stages de grandes entreprises ou start-up en un seul clique. Cette platforme n'aurai jamais pu exister sans l'equipe de choc d'Exia: Dalia Boughetaya, Nassim Kouidri, Wail Mesbah et El Patron Yacine Beghoul.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h4 id="Info">Information Covid-19...</h4>
                                    <h4 class="subheading">100% de continuité pédagogique assurée pendant les stages</h4>
                                    <p class="texteblanc">Conformément aux annonces de Tonton Abdelmadjid Tebboune, les stages 
                                       présentés par Student Internship se poursuiveront en présentiel, et ce jusqu’à nouvel ordre.<br>  </p>

                                        Veuillez donc respecter les mesures suivantes: 
                                        <ul class="texteblanc"> 
                                          <li>Port du masque obligatoire pour tous.</li>
                                          <li>Distanciation physique obligatoire.</li>
                                          <li>Respect des gestes barrières.</li>
                                        
                                  
                    </div>

                    <div class="col-md-6 how-img">
                        <img src="https://image.ibb.co/cHgKnU/Work_Section2_freelance_img2.png" class="rounded-circle img-fluid" id="img1" alt=""/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 how-img">
                          <img src="https://image.ibb.co/ctSLu9/Work_Section2_freelance_img3.png" class="rounded-circle img-fluid" id="img2" alt=""/>
                    </div>

                    <div class="col-md-6">
                        <h4 id="NosPartenaires">Nos Partenaires...</h4>
                                    <h4 class="subheading">Voici les entreprises partenaires de Student Intership:</h4>
                                    <div id="partenaires">
                  <a href="https://uqam.ca/" target="_blank"><img src="Images/uqam.png" class="img-fluid" alt="Responsive image"></a>
                  <a href="https://www.netacad.com/fr" target="_blank"><img src="Images/cisco.png" class="img-fluid" alt="Responsive image"></a>
                  <a href="https://openclassrooms.com/fr/" target="_blank"><img src="Images/openclassroom.png" class="img-fluid" alt="Responsive image"></a>
                  <a href="https://www.colas.com/" target="_blank"><img src="Images/colas.png" class="img-fluid" alt="Responsive image"></a>
                                    </div>
                                    <div id="partenaires2">
                  <a href="https://www.safran-group.com/fr" target="_blank"><img src="Images/safran.png" class="img-fluid" alt="Responsive image"></a>
                  <a href="https://www.stelia-aerospace.com/" target="_blank"><img src="Images/stelia.jpg" class="img-fluid" alt="Responsive image"></a>
                  <a href="https://www.universite-paris-saclay.fr/" target="_blank"><img src="Images/paris-saclay2.png" class="img-fluid" alt="Responsive image"></a>
                  <a href="https://www.vinci.com/vinci.nsf/fr/index.htm" target="_blank"><img src="Images/vinci.png" class="img-fluid" alt="Responsive image"></a>
                                    </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h4 id="Contact">Nous contacter...</h4>
                                    <h4 class="subheading">Une question précise? Un commentaire?  <br>Veuillez nous contactez via ce formulaire. En envoyant, vous acceptez que vos données soient collectées et traitées selon les modalités décrites dans la charte de protection des données. </h4>
                                    <section id="contact" >
                                      <div class="form-group">
                       <form action="" method="post">
                         <label for="n1"> Nom :</label>
                          <input type="text" class="form-control" name="n1" placeholder="Entrer votre nom" required>
                            <label for="n2">Adresse mail :</label>
                            <input type="mail" class="form-control" name="n2" placeholder="Entrer votre adresse mail" required>
                             <label for="n3">Sujet :</label>
                             <input type="text" class="form-control" name="n3"  placeholder="Entrer le sujet " required>
                               <label for="n4">Message :</label>
                               <input type="text" class="form-control" name="n4"  placeholder="Entrer le message " required><br>
                         
                               <input type="submit" name="ajout" value='Confirmer'class="btn btn-primary "> 
                           </form>
                                    </section>
                    </div>
                    <div class="col-md-6 how-img">
                        <img src="https://image.ibb.co/gQ9iE9/Work_Section2_freelance_img4.png" class="rounded-circle img-fluid" id="img3" alt=""/> <br><br><br><br><br>
                        <h5 id="adresse">Adresse : Cesi Algérie – 60 rue du Kadous
                          <br> Tixeraine BIRKHADEM– ALGER.، 60 CW 116, Birkhadem<br>
                          Téléphone : 021 40 55 00</h5>
                    </div>
                </div>
            </div>
          </div>
        </section>
       </main> 

<?php include ("MoteurTemplate/footer.php")
?>
    </body>
</html>

        <?php

                    if (isset($_POST['ajout'])) {

                        //Ouverture BDD

                        $bdd = new PDO('mysql:host=localhost;dbname=web', 'root', '');

                        //Preparer requete

                        $pdoStat = $bdd->prepare('INSERT INTO  informations_contact (Nom,  Adresse_mail,  Sujet, Message)  VALUES (:noom, :mail,  :sujet, :message)');
                    if (isset($_POST['ajout'])) {
                        $pdoStat->bindvalue('noom', $_POST['n1']);
                        $pdoStat->bindvalue('mail', $_POST['n2']);
                        $pdoStat->bindvalue('sujet', $_POST['n3']);
                        $pdoStat->bindvalue('message', $_POST['n4']);   
              
                        //Execution
                        $pdoStat->execute();

                     }

                     echo "enregister";

                    }

                ?>
