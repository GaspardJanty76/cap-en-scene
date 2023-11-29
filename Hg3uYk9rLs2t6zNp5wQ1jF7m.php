<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/admin.css" rel="stylesheet">
    <script src="js/hidden.js"></script>
    <title>Cap En Scène - Administration</title>
</head>
<body>
 <?php include ('methodes/getlines.php');?>
<!-- Barre de navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <div class="navbar-brand">
            <img src="img/CapEmploi5.png" alt="Logo" width="20%" height="auto">
            <span class="fs-4 gray fw-bold calibri text-nav p-5">Administration</span>
        </div>
    </div>
</nav>

<!-- boutons -->
<div class="container bouttons">
    <div class="form-check form-switch">

    </div>
    <p class="gray fs-4 calibri fw-bold"><?php echo "nombre d'inscriptions : " . $nombre_lignes; ?></p>
    <button type="button" class="btn btn-primary calibri text-white fw-bold" onclick="exportToExcel()">Télécharger le tableau Excel</button>
    
    <script>
        function exportToExcel() {
            // Redirigez l'utilisateur vers le script "export.php" lorsqu'il clique sur le bouton
            window.location.href = 'export.php';
        }
    </script>
    
</div>

<!-- Tableau admin -->
<div class="container tableau">
    <div class="table-responsive">
        <table class="border">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Numéro de SIRET</th>
                    <th>Entreprise</th>
                    <th>Poste</th>
                    <th>Téléphone</th>
                    <th>Commentaire</th>
                </tr>
            </thead>
            <tbody>
                <?php include ('methodes/get.php');?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
