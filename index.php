<!DOCTYPE html>
<!--Plusieurs erreurs de syntaxe donc le navigateur ne sait pas comment interpréter la structure html car incoherente -->
<html lang="fr"> <!-- structure html invalide
    <head>// correction balise incorrecte + lien css et google fonts+ posiitionnemt balise script-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- ajout meta viewport -->
    <title>Timer</title> 
    <link href="https://fonts.googleapis.com/css?family=Aldrich&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="assets/css/style.css">
</head>       
<body> <!--erreur id + texte bouton + ajout : -->
    <div id="wrapper"> <!-- correction: #wrapper pour correspondre au CSS -->
        <div class="inside" id="timer-container">
            <div class="timer">
                <!-- suppression des ":" en dur, gérés par CSS ::after -->
                <span id="hours">00</span>
                <span id="minutes">00</span>
                <span id="seconds">00</span>
            </div>
            <div class="controls">
                <!-- bouton sans texte: l'icône est dessinée via CSS; ajout aria-label -->
                <button class="button" aria-label="Lecture/Pause" title="Lecture/Pause"></button>
            </div>
        </div>
    </div>
    <script src="assets/js/script.js"></script>
</body>
</html>

<!--Une fois la correction du fichier index.php, le navigateur devrait afficher la page : la div pour l'heure et le bouton  sans style. Les fichiers css et js devront maintenant etre visible dans onglet Network même si elles contiennent des erreurs -->