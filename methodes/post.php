<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

// Vérifie si le formulaire a été soumis via la méthode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $serveur = "localhost"; // Adresse du serveur MySQL
    $port = 3306;
    $utilisateur = "u749965636_admin"; // Nom d'utilisateur MySQL
    $motdepasse = "tS]QKB*fr7M]"; // Mot de passe MySQL
    $basededonnees = "u749965636_capenscene"; // Nom de la base de données

    // Connexion à la base de données en utilisant les paramètres définis ci-dessus
    $connexion = new mysqli($serveur, $utilisateur, $motdepasse, $basededonnees);

    // Vérifie si la connexion à la base de données a échoué
    if ($connexion->connect_error) {
        // En cas d'échec de la connexion, affiche un message d'erreur et arrête l'exécution du script
        die("La connexion à la base de données a échoué : " . $connexion->connect_error);
    }

    // Récupère les données du formulaire soumises via la méthode POST
    $nom = mysqli_real_escape_string($connexion, $_POST["nom"]);
    $prenom = mysqli_real_escape_string($connexion, $_POST["prenom"]);
    $email = mysqli_real_escape_string($connexion, $_POST["email"]);
    $nsiret = mysqli_real_escape_string($connexion, $_POST["nsiret"]);
    $entreprise = mysqli_real_escape_string($connexion, $_POST["entreprise"]);
    $poste = mysqli_real_escape_string($connexion, $_POST["poste"]);
    $numero = mysqli_real_escape_string($connexion, $_POST["numero"]);
    $commentaire = mysqli_real_escape_string($connexion, $_POST["commentaire"]);
    $photo = isset($_POST["photo"]) ? 1 : 0;

    // Requête SQL pour insérer les données du formulaire dans la table "inscrit"
    $sql = "INSERT INTO inscrit (nom, prenom, email, nsiret, entreprise, poste, numero, commentaire, photo)
            VALUES ('$nom', '$prenom', '$email', '$nsiret', '$entreprise', '$poste', '$numero', '$commentaire', '$photo')";

    // Exécute la requête SQL
    if ($connexion->query($sql) === TRUE) {
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'capenscene.info@gmail.com';                     //SMTP username
            $mail->Password   = 'eqnbeyskjzudbeou';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;      //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('info@capenscene.fr', 'Cap En Scene');
            $mail->addAddress($email, $prenom);     //Add a recipient
            //Content
            $mail->isHTML(true); 
                                                    //Set email format to HTML
            $mail->Subject = 'Confirmation d\'inscription a Cap en Scene';
            $mail->Body    = ' <b> Bonjour ' . $prenom . ' votre inscription a été validée , à très vite à la Halle aux toiles de Rouen <b>';
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

        // Redirige vers une page de confirmation d'inscription en cas de succès
        header("Location: inscription-reussie");
        exit(); // Arrête l'exécution du script après la redirection
    } else {
        // En cas d'erreur lors de l'exécution de la requête SQL, affiche un message d'erreur
        echo "Erreur lors de votre inscription";
    }

    // Ferme la connexion à la base de données
    $connexion->close();
}
?>
