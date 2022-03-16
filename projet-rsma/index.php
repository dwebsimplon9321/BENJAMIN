<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
    <header class="container-fluid">
        <div class="row">
            <div class="col">
                <img src="https://www.rsma.gp/templates/rsma_guadeloupe/images/logo-ministere.png" alt="logo du ministère des outer-mer">
            </div>
            <div class="col">
                <img src="https://www.rsma.gp/templates/rsma_guadeloupe/images/logo_rsma.png" alt="logo do rsma">
            </div>
            <div class="col">
                <img src="https://www.rsma.gp/templates/rsma_guadeloupe/images/logo_30pour30.png" alt=" logo 30 formations 30 métiers">
            </div>
            <div class="col">
                <ul class="menu">
                    <li>
                        <a href="#">
                            <img src="https://www.rsma.gp/templates/rsma_guadeloupe/images/icones/tel.png" alt="icône tel">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://www.rsma.gp/templates/rsma_guadeloupe/images/icones/mail.png" alt="icône mail">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://www.rsma.gp/templates/rsma_guadeloupe/images/icones/menu.png" alt="icône menu">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <form action="" class="needs-validation" novalidate>
                <div class="row">
                    <div class="col">

                    <select class="form-select" aria-label="Civilité" required id="civilite">
                        <option selected>Choisir une civilité</option>
                        <option value="M">Monsieur</option>
                        <option value="Mdm">Madame</option>
                      </select>
                      <div class="valid-feedback civ">
                        Correct!
                      </div>
                      <div id="civilitef" class="invalid-feedback">
                        Veuillez choisir votre civilité.
                      </div>
                      </div>
                  </div>
                      <div class="row">
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Nom" aria-label="Nom" required id="nom">
                          <div class="valid-feedback">
                            Correct!
                          </div>
                          <div id="nomf" class="invalid-feedback">
                            Veuillez choisir votre nom.
                          </div>
                        </div>
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Prénom" aria-label="Prénom" required id="prenom">
                          <div class="valid-feedback">
                            Correct!
                          </div>
                          <div id="prenomf" class="invalid-feedback">
                            Veuillez indiquer votre prénom.
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Date de naissance" aria-label="Date de naissance" required id="naissance">
                          <div class="valid-feedback">
                            Correct!
                          </div>
                          <div id="datef" class="invalid-feedback">
                            Veuillez renseigner votre date de naissance.
                          </div>
                        </div>
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Lieu de naissance" aria-label="Lieu de naissance" required id="lieu">
                          <div class="valid-feedback">
                            Correct!
                          </div>
                          <div id="naissancef" class="invalid-feedback">
                            Veuillez renseigner votre lieu de naissance.
                          </div>
                        </div>
                      </div>
                      <div class="row">
                      <div class="col">
                        <input type="text" class="form-control" placeholder="Adresse" aria-label="Adresse" required id="adresse">
                        <div class="valid-feedback">
                          Correct!
                        </div>
                        <div id="adressef" class="invalid-feedback">
                          Veuillez renseigner votre adresse
                        </div>
                      </div>
                      <div class="col">
                        <input type="text" class="form-control" placeholder="Adresse suite" aria-label="Adresse suite">
                        <div class="valid-feedback">
                          Correct!
                        </div>
                      </div>
                      </div>
                      <div class="row">
                      <div class="col">
                        <input type="text" class="form-control" placeholder="Code postal" aria-label="Code postal" required id="postal">
                        <div class="valid-feedback">
                          Correct!
                        </div>
                        <div id="postalf" class="invalid-feedback">
                          Veuillez renseigner votre code postal.
                        </div>
                      </div>
                      <div class="col">
                        <input type="text" class="form-control" placeholder="Ville" aria-label="Ville" required id="ville">
                        <div class="valid-feedback">
                          Correct!
                        </div>
                        <div id="villef" class="invalid-feedback">
                          Veuillez renseigner votre ville.
                        </div>
                      </div>
                      </div>
                      <div class="row">
                          <div class="col">
                    <select class="form-select" aria-label="JDC" required id="jdc">
                        <option selected>Avez-vous fait la journée d'appel (JDC)</option>
                        <option value="Oui">Oui</option>
                        <option value="Non">Non</option>
                      </select>
                      <div class="valid-feedback">
                        Correct!
                      </div>
                      <div id="jdcf" class="invalid-feedback">
                        Réponse manquante.
                      </div>
                          </div>
                      </div>
                      <hr>
                      <div class="row">
                          <div class="col">
                            <input type="text" class="form-control" placeholder="Quelle formation désirez-vous suivre?" aria-label="Formations" required id="formations">
                            <div class="valid-feedback">
                              Correct!
                            </div>
                            <div id="formationf" class="invalid-feedback">
                              Réponse manquante.
                            </div>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col">
                  <select class="form-select" aria-label="Diplome" required id="diplome">
                      <option selected>Possedez-vous un diplome?</option>
                      <option value="Oui">Oui</option>
                      <option value="Non">Non</option>
                    </select>
                    <div class="valid-feedback">
                      Correct!
                    </div>
                    <div id="diplomef" class="invalid-feedback">
                      Réponse manquante.
                    </div>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col">
                <select class="form-select" aria-label="SMA" required id="sma">
                    <option selected>Où avez-vous connu le SMA?</option>
                    <option value="jdc">Par la JDC</option>
                    <option value="ml">Mission locale</option>
                    <option value="pl">Pole Emploi</option>
                    <option value="cl">Par une information au collège ou au lycée</option>
                    <option value="fm">Par la famille</option>
                    <option value="ami">Par un/une ami(e)</option>
                    <option value="act">Par une association</option>
                    <option value="frm">Par un forum</option>
                    <option value="jt">Par le journal ou la télévision</option>
                  </select>
                  <div class="valid-feedback">
                    Correct!
                  </div>
                  <div id="smaf" class="invalid-feedback">
                    Réponse manquante.
                  </div>
                      </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <button class="btn btn-primary" type="submit">Valider inscription</button>
                    </div>
                  </div>
            </form>   
            <script>
              // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()


    let submit = document.querySelector("button");
    submit.addEventListener("click", function(){}

// verifier le listes
let civilite = document.querySelector("selector#civilite");


// verifie si valeur dans la liste selectionne
if(civilite.value === "Choisir une civilite"){
    console.log(civilite);

let divC = document.querySelector("div.civ");
//divC.classList.remove("valid-feedback");
divC.className = "displayN";

let divF = document.querySelector("div#civiliteF");
divF.className = "displayB";

} else {
    let divC = document.querySelector("div.civ");
//divC.classList.remove("valid-feedback");
divC.className = "displayN";

let divF = document.querySelector("div#civiliteF");
divF.className = "displayB";


} else {
    // ajouter un ecouteur 
    civilite.addEventListener("change",function(){
        let divC = document.querySelector("div.civ");
//divC.classList.remove("valid-feedback");
divC.className = "displayN";

let divF = document.querySelector("div#civiliteF");
divF.className = "displayB";

    })
}


    


</script>
        </div>
    </div>

    <footer class="container-fluid">
        <div class="row">
            <div class="col-12">
                <ul class="reseau">
                  <li>
                    <a href="#">
                      <img src="https://www.rsma.gp/templates/rsma_guadeloupe/images/icones/fb.png">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="https://www.rsma.gp/templates/rsma_guadeloupe/images/icones/twitter.png">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="https://www.rsma.gp/templates/rsma_guadeloupe/images/icones/ig.png">
                    </a>
                  </li>
                </ul>
            </div>
</div>
<div class="row">
  <div class="col">
    <ul class="menu">
      <li>
        <a href="#"> Plan du site</a>
      </li>
      <li>
        <a href="#">Mentions légales</a>
      </li>
      <li>
        <a href="#">Politique de confidentialité</a>
      </li>
      </ul>
      <ul class="fd">
        <li>
          <a href="#">
            <img src="https://www.rsma.gp/images/Drapeau_UE.jpg">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="https://www.rsma.gp/images/guadeloupefse.jpg">
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div class="col">
    <p>
      dweb rsma @ 2022
    </p>
  </div>

    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>