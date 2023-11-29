$(document).ready(function () {
    $('#staticBackdrop').modal('show');
});

document.addEventListener('DOMContentLoaded', function () {
    // Sélectionnez l'élément input par son ID
    var siretInput = document.getElementById('nsiret');

    siretInput.addEventListener('input', function () {
        // Supprimez les espaces et les caractères non numériques de l'entrée
        var siretValue = siretInput.value.replace(/\D/g, '');

        // Vérifiez si la longueur est de 14 chiffres
        if (siretValue.length == 14) {
            siretInput.setCustomValidity(''); // Réinitialisez la validation personnalisée
        } else {
            siretInput.setCustomValidity('Le numéro de Siret doit être valide !'); // Définissez un message d'erreur personnalisé
        }
    });
});



