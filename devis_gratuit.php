<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/devis_gratuit.css"/>

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

    <h1 id="fenetres">DEVIS GRATUIT</h1>
    <br/>
    <br/>

   

    <hr/>

    <div class="text">
    <p> Commencez votre projet dès aujourd'hui en demandant un devis gratuit. <br/>Notre équipe dédiée est prête à transformer vos idées en réalité, 
        offrant des solutions personnalisées <br/>pour répondre à vos besoins spécifiques.</p>

</div>

<hr/>
<br/>




<form action="traitement.php" method="post" class="form-container">
<fieldset>
    <h2 id="h3_milieu"> Veuillez remplir les champs ci-dessous </h2>
  <div class="form-group">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required>
  </div>

  <div class="form-group">
    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" required>
  </div>

  <div class="form-group">
    <label for="telephone">Téléphone :</label>
    <input type="tel" id="telephone" name="telephone" required>
  </div>

  <div class="form-group">
    <label for="email">E-mail :</label>
    <input type="email" id="email" name="email" required>
  </div>

  <div class="form-group">
    <label for="adresse">Adresse :</label>
    <input type="text" id="adresse" name="adresse">
  </div>

  <div class="form-group">
    <label for="codePostal">Code Postal :</label>
    <input type="text" id="codePostal" name="codePostal">
  </div>

  <div class="form-group">
    <label for="ville">Ville :</label>
    <input type="text" id="ville" name="ville">
  </div>

  <div class="form-group">
    <label for="message">Message :</label>
    <textarea id="message" name="message" rows="4" cols="50"></textarea>
  </div>

  <div class="form-group">
    <input type="submit" value="Envoyer">
  </div>
  </fieldset>
</form>



<br/>
<hr/>
<br/>
<br/>

<p id="index"><a href="#">Cliquez-ici pour remonter</a></p>

</br>
</br>

<footer>
        <p id="footer">
            &copy; <a href="mentions_legales.pdf" target="_blank">Mentions légales</a> - <a href="politique_de_confidentialite.pdf" target="_blank">Politique de confidentialité</a> - <a href="gestion_des_cookies.pdf" target="_blank">Gestion des cookies</a> - <a href="droitimage.pdf" target="_blank">Droit à l'image</a>
        </p>
    </footer>


</body>
</html>