<?php

$showForm = isset($_COOKIE['showForm']) && $_COOKIE['showForm'] == '1';
    if ($showForm) {
        echo'<span class="d-block p-3 text-bg-light text-center">';
        echo'<a class="gray fw-bold fs-3 calibri text-uppercase">Inscrivez-vous ici</a>';
        echo'</span>';
        echo'<form method="post" id="myForm">';
        echo'<div class="d-block p-3 text-bg-light">';
        echo'<div class="form-group floating-labels pb-4">';
        echo'<input type="text" name="nom" class="form-control gray calibri" id="nom" placeholder="Nom" required>';
        echo'</div>';
        echo'<div class="form-group floating-labels pb-4">';
        echo'<input type="text" name="prenom" class="form-control gray calibri" id="prenom" placeholder="Prénom" required>';
        echo'</div>';
        echo'<div class="form-group floating-labels pb-4">';
        echo'<input type="email" name="email" class="form-control gray calibri" id="email" placeholder="Adresse mail" required>';
        echo'</div>';
        echo'<div class="form-group floating-labels pb-4">';
        echo'<input type="text" name="nsiret" class="form-control gray calibri" id="nsiret" placeholder="Siret" required>';
        echo'</div>';
        echo'<div class="form-group floating-labels pb-4">';
        echo'<input type="text" name="entreprise" class="form-control gray calibri" id="entreprise" placeholder="Nom de l\'entreprise/structure" required>';
        echo'</div>';
        echo'<div class="form-group floating-labels pb-4">';
        echo'<input type="text" name="poste" class="form-control gray calibri" id="poste" placeholder="Fonction du poste" required>';
        echo'</div>';
        echo'<div class="form-group floating-labels pb-4">';
        echo'<input type="tel" name="numero" class="form-control gray calibri" id="numero" placeholder="Téléphone (optionnel)">';
        echo'</div>';
        echo'<div class="form-group form-floating pb-1">';
        echo'<textarea name="commentaire" class="form-control gray calibri" placeholder="Laissez un commentaire ici" id="commentaire" style="height: 100px;  background-color: rgb(225, 225, 225)"></textarea>';
        echo'<label class="gray calibri">Besoin(s) spécifique(s) (optionnel)</label>';
        echo'</div>';
        echo'</div>';
        echo'<div class="d-block p-3 text-bg-light">';
        echo'<div class="float-start">';
        echo'<div class="col-12">';
        echo'<div class="form-check">';
        echo'<input class="form-check-input" type="checkbox" value="1" id="invalidCheck" name="photo">';
        echo'<label class="form-check-label" for="invalidCheck">';
        echo'<a class="gray calibri">Je ne souhaite pas être pris en photo durant l\'évènement</a>';
        echo'</label>';
        echo'</div>';
        echo'<input type="hidden" name="checkbox_value" value="0">';
        echo'</div>';
        echo'</div>';
        echo'<div class="float-end">';
        echo'<button type="button" class="btn btn-link" data-bs-toggle = "modal" data-bs-target="#staticBackdrop"><a class="text-primary calibri">Information sur l\'évènement</a></button>';
        echo'</div>';
        echo'</div>';
        echo'<div class="d-block p-3 text-bg-light">';
        echo'<button type="submit" class="btn btn-success mt-2 d-flex m-auto"><a class="text-white calibri fw-bold">Valider l\'inscription</a></button>';
        echo'</div>';
        echo'</form>';
    } else {
        echo'<span class="d-block p-3 text-bg-light text-center">';
        echo'<a class="gray fw-bold fs-3 calibri text-uppercase">Les Inscriptions sont cloturées</a>';
        echo'</span>';
    }
    ?>