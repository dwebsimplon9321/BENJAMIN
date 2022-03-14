// commentaires
/**
 * commentaire
 * multilignes
 */
/**
 * generer nombre aleatoire entre 1 et 150
 * afficher limite aleatoire de 1 à n
 * recuperer nombre propose
 * verifier le nombre 
 *  - si le nombre est bon :
 * afficher message gagnant
 * 
 * - si le nombre pas bon :
 * verifier limite : 
 * - si limite atteinte :
 * afficher bon nombre 
 * afficher message perdu
 * 
 * - si limite non atteinte :
 * afficher indice 
 */

// generer nombre aléatoire entre 1 et 150
function devineMoi(min,max){
   // generateur aléatoire javascript
   return Math.floor(Math.random() * max) + min;
}

let resultat = devineMoi(1, 150);

// generer nombre aleatoire entre 1 et 15 
function essai(min, max){
    // nombre essai
    return Math.floor(Math.random() * max) +min;
}
let nbrE = essai(1, 15);
let
// afficher nbrE dans le jeux
let spanE = document.querySelector("span.essais");
spanE.innerHTML = nbrE

// ecouteur sur le bouton 'reponse'
let bt = document.querySelector("button");
bt.addEventListener("click", function(){
    let reponse = document.querySelector("input.reponse");}
    // comparer reponse et résultat
    if(reponse == resultat){
        console.log("oui");
    } else {
        console.log("non");

    }
