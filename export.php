<?php
require 'methodes/connexion.php'; // Inclure le fichier de connexion à la base de données
require 'vendor/autoload.php'; // Inclure l'autoloader de PHPExcel

// Créez un nouvel objet PhpSpreadsheet
$spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();

// Sélectionnez la feuille active
$sheet = $spreadsheet->getActiveSheet();

// En-têtes de colonne
$sheet->setCellValue('A1', 'Nom');
$sheet->setCellValue('B1', 'Prénom');
$sheet->setCellValue('C1', 'Email');
$sheet->setCellValue('D1', 'Numéro de SIRET');
$sheet->setCellValue('E1', 'Entreprise');
$sheet->setCellValue('F1', 'Poste');
$sheet->setCellValue('G1', 'Téléphone');
$sheet->setCellValue('I1', 'Commentaire');
$sheet->setCellValue('H1', 'Photo');

// Requête SQL pour obtenir les données des inscriptions
$sql = "SELECT * FROM inscrit WHERE suppr = 0 ORDER BY nom";
$result = $connexion->query($sql);

$row = 2; // Commencez à la deuxième ligne du fichier Excel

if ($result->num_rows > 0) {
    while ($data = $result->fetch_assoc()) {
        $sheet->setCellValue('A' . $row, $data['nom']);
        $sheet->setCellValue('B' . $row, $data['prenom']);
        $sheet->setCellValue('C' . $row, $data['email']);
        $sheet->setCellValue('D' . $row, $data['nsiret']);
        $sheet->setCellValue('E' . $row, $data['entreprise']);
        $sheet->setCellValue('F' . $row, $data['poste']);
        $sheet->setCellValue('G' . $row, $data['numero']);
        $sheet->setCellValue('I' . $row, $data['commentaire']);

        // Vérifiez si la valeur de 'photo' est égale à 1
        if ($data['photo'] == 1) {
            $sheet->setCellValue('H' . $row, 'ne veut pas être pris en photo');
        } else {
            $sheet->setCellValue('H' . $row, ''); // Laissez la cellule vide si la condition n'est pas remplie
        }

        $row++;
    }
}

// Nom du fichier Excel
$filename = 'tableau_excel.xlsx';

// Créez l'objet Writer pour Excel
$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');

// Définissez le type de réponse pour le navigateur
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="' . $filename . '"');
header('Cache-Control: max-age=0');

$writer->save('php://output');
