<!DOCTYPE html>
<!--Plusieurs erreurs de syntaxe donc le navigateur ne sait pas comment interpréter la structure html car incoherente -->
<html lang="fr"> <!-- structure html invalide
    <head>// correction balise incorrecte + lien css et google fonts+ posiitionnemt balise script-->
        
        <meta charset="utf-8">
        <title>Timer</title> 
            <link href="https://fonts.googleapis.com/css?family=Aldrich" rel="stylesheet"> 
            <link rel="stylesheet" href="assets/css/style.css">
    </head>       
    <body> <!--erreur id + texte bouton + ajout : -->
        <div id="wrapper">
            <div class="inside" id="timer-container">
                <div class="timer">
                    <span id="hours">00</span>:
                    <span id="minutes">00</span>:
                    <span id="seconds">00</span>
                </div>
                <div class="controls">
                    <button class="button pause">Pause</button>
                </div>
            </div>
        </div>
        <script src="assets/js/script.js"></script>
</body>
    </html>

    <!--Une fois la correction du fichier index.php, le navigateur devrait afficher la page : la div pour l'heure et le bouton  sans style. Les fichiers css et js devront maintenant etre visible dans onglet Network même si elles contiennent des erreurs -->