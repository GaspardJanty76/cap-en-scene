<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="img/logo.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/66ce4227d4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/inscription.css">  
    <link rel="stylesheet" href="css/index.css">
    <script src="js/popup.js"></script>
    <script src="js/hidden.js"></script>
    <title>Cap En Scène - Inscription</title>
</head>
<body>



    <!-- Barre de navigation -->


        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <div>
                    <div>
                        <img src="img/CapEmploi5.png" alt="Logo" width="20%" height="auto" class="navbar-brand">
                        <span class="float-none fs-4 gray fw-bold calibri text-nav">
                            Le 23 novembre 2023 Halle aux toiles
                        </span>
                    </div>
                </div>
            </div>
        </nav>


        <!-- fond pour le formulaire -->


        <div class="block container">
            <!-- création du formulaire -->
            <?php
            echo'<span class="d-block p-3 text-bg-light text-center">';
        echo'<a class="gray fw-bold fs-3 calibri text-uppercase">Inscriptions terminées</a>';
        echo '<br>';
        echo '<br>';
        
        echo'<a class="gray fw-bold fs-4 calibri ">Les inscriptions sont closes pour l\'événement Cap En Scène.</a>';
        echo'</span>';
            ?>
        </div>

    <!-- Footer -->


    <footer>
        <div class="footer-images">
            <a href="https://normandiewebschool.fr/"><img class="nws" src="img/Ban_NWS.2e16d0ba.fill-1200x1200.png"></a>
            <a href="https://travail-emploi.gouv.fr/"><img class="republique_fr" src="img/republique_fr.png"></a>
            <a href="https://www.agefiph.fr/"><img class="agefiph" src="img/agefiph.jpg"></a>
            <a href="https://www.fiphfp.fr/"><img class="fiphfp" src="img/fiphfp.jpg"></a>
            <a href="https://www.pole-emploi.fr/accueil/"><img class="pole_emploi" src="img/pole_emploi.png"></a>
        </div>
    </footer>

    <!-- Pop Up-->


    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content m-auto" width="95%">
            <div class="text-center">
              <h1 class="modal-title fs-4 gray fw-bold calibri mt-4">
                <a>Information sur l'évènement Cap En Scène</a>
              </h1>
            </div>
            <h1 class="fs-4 gray fw-bold calibri text-center">Le 23 novembre à partir de 9h</h1>
            <a class="gray fw-bold calibri text-center">Semaine européenne pour l'emploi des personnes handicapées 2023</a>
            <div class="modal-body">
                <div class="calibri gray ">
                    déroulé de la matinée :<br>
                    • De 9h à 13h à la Halle aux toiles de Rouen - Forum ludique<br>
                    • À 10h : Témoignages des créateurs d'entreprise<br>
                    • À 12h : Démonstration d'exosquelettes<br>
                </div>
            </div>
            <a class="gray fw-bold calibri text-center">22 ateliers immersifs animés par nos partenaires, pour une sensibilisation ludique aux handicaps.</a>
            <a class="text-danger fw-bold calibri text-center">Évènement réservé aux professionnels</a>
            <div class="modal-footer text-center">
              <button type="button" class="btn btn-success mx-auto text-white calibri" data-bs-dismiss="modal">D'accord</button>
            </div>
        </div>
    </div>

    </body>

</html>

