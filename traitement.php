<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/traitement.css"/>

    <title>Devis gratuit - Fenêtre et porte</title>
</head>
<body>




<nav>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="fenetres.php">Fenêtres</a>
                <ul class="sub-menu">
                    <li><a href="fenetre_bois.php">Fenêtres Bois</a></li>
                    <li><a href="fenetre_pvc.php">Fenêtres PVC</a></li>
                    <li><a href="fenetre_aluminium.php">Fenêtres Aluminium</a></li>
                </ul>
            </li>
            <li><a href="portes.php">Portes</a>
            <ul class="sub-menu">
                    <li><a href="porte_bois.php">Portes Bois</a></li>
                    <li><a href="porte_pvc.php">Portes PVC</a></li>
                    <li><a href="porte_aluminium.php">Portes Aluminium</a></li>
                </ul>
                </li>
            <li><a href="volets.php">Volets</a></li>
            <li><a href="baies_vitrees.php">Baies vitrées</a></li>
            <li><a href="catalogues.php">Catalogues</a></li>
            <li><a href="devis_gratuit.php">Devis gratuit</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>

 
    </nav>

    <img src="./image/logo_hmf.jpg" title="Image HMF" alt="image HMF" id="image1"/>
    <br/>
    <br/>

    <h1 id="fenetres">Devis gratuit</h1>
    <br/>
    <br/>


    <?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=HMF;charset=utf8','root','');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo("<p id='reussi'>Connexion réussie !</p><br/>");
} catch (Exception $e) {
    die('Erreur de connexion : ' . $e->getMessage());
}

try {
    if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['telephone']) && !empty($_POST['email'])) {
        // Récupération des valeurs du formulaire
        $nom = htmlspecialchars(addslashes($_POST['nom']));
        $prenom = htmlspecialchars(addslashes($_POST['prenom']));
        $telephone = htmlspecialchars(addslashes($_POST['telephone']));
        $email = htmlspecialchars(addslashes($_POST['email']));
        $adresse = htmlspecialchars(addslashes($_POST['adresse']));
        $code_postal = htmlspecialchars(addslashes($_POST['codePostal']));
        $ville = htmlspecialchars(addslashes($_POST['ville']));
        $message = htmlspecialchars(addslashes($_POST['message']));

        // Insertion des données dans la table devis_gratuit
        $req = $bdd->prepare('INSERT INTO devis_gratuit(devis_gratuit_nom, devis_gratuit_prenom, devis_gratuit_telephone, devis_gratuit_email, devis_gratuit_adresse, devis_gratuit_code_postal, devis_gratuit_ville, devis_gratuit_message) 
                            VALUES(:nom, :prenom, :telephone, :email, :adresse, :code_postal, :ville, :message)');

        $req->execute(array(
            'nom' => $nom,
            'prenom' => $prenom,
            'telephone' => $telephone,
            'email' => $email,
            'adresse' => $adresse,
            'code_postal' => $code_postal,
            'ville' => $ville,
            'message' => $message
        ));

        echo('<p class="nouveau">Votre devis a été envoyé !<br/><br/> Il sera traité dans les plus brefs délais.

        <br/><br/><br/></p>
        
        <hr/>
        <p class="nouveau" >Voici les données envoyées :</p><br/><br/>' .
            '<p id="données">Le nom : ' . $_POST['nom'] . '<br/> 
            Le prénom : ' . $_POST['prenom'] . '<br/>
            Le téléphone : ' . $_POST['telephone'] . '<br/>
            L\'email : ' . $_POST['email'] . '<br/>
            L\'adresse : ' . $_POST['adresse'] . '<br/>
            Le code postal : ' . $_POST['codePostal'] . '<br/>
            La ville : ' . $_POST['ville'] . '<br/>
            Le message : ' . $_POST['message'] . '</p>'.
            '<br/><br/><p class="nouveau2">Merci pour votre envoi !</p>');

    } else {
        echo "<p id='remplir'>Veuillez remplir tous les champs obligatoires. </p>";
    }
} catch (Exception $e) {
    die('Erreur d\'insertion avec variable ou enregistrement déjà existant'. $e->getMessage());
}
?>

<br/>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $adresse = $_POST['adresse'];
    $codePostal = $_POST['codePostal'];
    $ville = $_POST['ville'];
    $message = $_POST['message'];

    // Adresse e-mail de destination
    $destinataire = "clem945@hotmail.com"; // Remplacez par votre adresse e-mail

    // Sujet de l'e-mail
    $sujet = "Nouveau devis gratuit de $nom $prenom";

    // Corps du message
    $corpsMessage = "Nom: $nom\n";
    $corpsMessage .= "Prénom: $prenom\n";
    $corpsMessage .= "Téléphone: $telephone\n";
    $corpsMessage .= "E-mail: $email\n";
    $corpsMessage .= "Adresse: $adresse\n";
    $corpsMessage .= "Code Postal: $codePostal\n";
    $corpsMessage .= "Ville: $ville\n";
    $corpsMessage .= "Message:\n$message";

    // Entêtes de l'e-mail
    $entetes = "From: $email\r\nReply-To: $email\r\n";

    // Envoyer l'e-mail
    $envoiMail = mail($destinataire, $sujet, $corpsMessage, $entetes);

    if ($envoiMail) {
        echo "L'e-mail a été envoyé avec succès.";
    } else {
        echo "Une erreur s'est produite lors de l'envoi de l'e-mail.";
    }
}
?>

<br/>
<br/>

    <hr/>
<br/>
<br/>

    <p id="index"><a href="#">Cliquez-ici pour remonter</a></p>


<br/>
<br/>



    <footer>
        <p id="footer">
            &copy; <a href="mentions_legales.pdf" target="_blank">Mentions légales</a> - <a href="politique_de_confidentialite.pdf" target="_blank">Politique de confidentialité</a> - <a href="gestion_des_cookies.pdf" target="_blank">Gestion des cookies</a> - <a href="droitimage.pdf" target="_blank">Droit à l'image</a>
        </p>
    </footer>



</body>
</html>