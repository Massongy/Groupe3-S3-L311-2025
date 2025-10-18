window.addEventListener("DOMContentLoaded", (event) => {
  let is_run = true; /* retrait des guillements  pour que true soit un boolean  et que l'operation fonctionne */

  init();

  // Correction : clic devient click
  function init() {
    document.querySelector(".button").addEventListener("click", (event) => {
      is_run = !is_run; // bascule la variable true/false==> pour le bouton pause/play

      /*calrififier la condition avec if else au lieu du  ? et : ==> coorespond à la class pause pour le CSS*/
      if (
        (" " + document.querySelector(".button").className + " ").indexOf(
          "pause"
        ) > -1
      ) {
        document
          .querySelector(".button")
          .setAttribute(
            "class",
            document
              .querySelector(".button")
              .getAttribute("class")
              .replace(" pause", "")
          );
      } else {
        document
          .querySelector(".button")
          .setAttribute(
            "class",
            document.querySelector(".button").getAttribute("class") + " pause"
          );
      }
    });

    // Mise à jour de l'intervalle du temps
    setInterval(function () {
      if (is_run) {
        let oDate = new Date(); // je defini les variables de temps
        let hours = oDate.getHours();
        let minutes = oDate.getMinutes();
        let seconds = oDate.getSeconds();

        document.querySelector("#hours").innerHTML = adjustTimer(hours);
        document.querySelector("#minutes").innerHTML = adjustTimer(minutes);
        document.querySelector("#seconds").innerHTML = adjustTimer(seconds);

        /* Passer les valeurs (Heures, Minutes, seconds) à la fonction de couleur*/
                        document.querySelector('body').style.background = randomHexColor(document.querySelector('#hours').innerHTML, document.querySelector('#minutes').innerHTML, document.querySelector('#seconds').innerHTML);


      }
    }, 1000); //je corrige ici la parenthèse manquante
  }

  /*la fonction doit retrouner la valeur et ajouter 0 si le nombre est < à 10*/
  function adjustTimer(timer) {
    return timer < 10 ? "0" + timer : timer;
  }

  /* La fonction devrait avoir 3  arguments (x,y,z)pour heures minutes et seconds*/
  function randomHexColor(x, y, z) {
    // Conversion du temps en valeurs RGB
    let r = Math.floor((x / 24) * 255); // Basé sur l'heure 24h
    let g = Math.floor((y / 60) * 255); // Basé sur les minutes 60
    let b = Math.floor((z / 60) * 255); // Basé sur les seconds 60

    return "rgb(" + r + ", " + g + "," + b + ")";
  }
});

/* avec la modification du fichier js en seconde étape noous avons desormais : - l'heure actuelle -Changement de couleur à la minute - le bouton pause/play fonctionnel*/
