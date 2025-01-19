<?php
    $couleur_bulle_classe = "jaune";
    $sent_style = "display: none;";
    $error_style = "display: none;";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $email = filter_var($_POST["mail"], FILTER_SANITIZE_EMAIL);
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $sent_style = "display: flex;";
        } else {
            $error_style = "display: flex;";
        }
    }
?>

<!doctype html>
<html lang="fr">

<head>
    <link rel="icon" type="image/x-icon" href="/images/logo.ico">
    <meta charset="UTF-8">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <meta http-equiv="CACHE-CONTROL" content="NO-CACHE" >
    
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/npm-reset.css">
    
    <title>Bassem Meghiche</title>
</head>

<body>
    <div class="sent" style="<?= $sent_style; ?>">
        <p>Message envoyé !</p>
    </div>
    <div class="error" style="<?= $error_style; ?>">
        <p>Votre message possède une erreur !</p>
    </div>
    <nav>
        <navbar>    
            <ul>
                <a href="index">Accueil</a>
                <a href="parcours">Parcours</a>
                <a href="contact">Contact</a>
            </ul>
        </navbar>
    </nav>
    <section class="conteneur-1280">
    <h1 class="titre-page">Me Contacter</h1>
    <p class="obligatory"><span class="red">*</span>: Réponse obligatoire</p>
    <form method="post">
        <div class="form-group">
            <label class="debutlabel"for="prenom">Prénom<span class="red">*</span></label>
            <input class="debutform" type="text" id="prenom" name="prenom" required>
        </div>
        <div class="form-group">
            <label class="debutlabel" for="nom">Nom de famille<span class="red">*</span></label>
            <input class="debutform" type="text" id="nom" name="nom" required>
        </div>
        <div class="form-group">
            <label class="debutlabel" for="mail">Adresse e-mail<span class="red">*</span></label>
            <input class="debutform" type="email" id="mail" name="mail" required>
        </div>
        <div class="form-group">
            <label class="debutlabel" for="message">Message<span class="red">*</span></label>
            <textarea class="messagebox" type="text" id="message" name="message" required></textarea>
        </div>
        <h4 class="questions">Je suis<span class="red">*</span></h4>
        <div class="form-group5">
            <input type="radio" id="notdefined" name="answer" value="Je ne souhaite pas le préciser" required>
            <label for="notdefined">Je ne souhaite pas le préciser</label>
            <input type="radio" id="student" name="answer" value="Étudiant/Étudiante" required>
            <label for="student">Étudiant/Étudiante</label>
            <input type="radio" id="parent" name="answer" value="Parent" required>
            <label for="parent">Parent</label>
            <input type="radio" id="other" name="answer" value="Autre" required>
            <label for="other">Autre</label>
        </div>
        <div class="form-group">
            <button type="submit">ENVOYER</button>
        </div>
    </form>
    </section>
</body>

<div class="footertext">
    <p>© 2023 par <span class="footername">Bassem MEGHICHE</span></p>
</div>

<script src="js/main.js"></script>
