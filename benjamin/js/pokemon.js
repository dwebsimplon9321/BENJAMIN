/**
 * Mise en place api pokemon
 */

// balise html
const listePU = document.querySelector("ul.liste-poke");

// nbr dynamique de poke
const nbrPoke = 50;

// tableau de datas
let allPokemon = [];
let tableauFin = [];
let cpTab = [];

/* appel API pokemon */
function findPoke(){

    // url api pokemon
    fetch("https://pokeapi.co/api/v2/pokemon?limit="+nbrPoke)
        .then( reponse => reponse.json())
        .then((allPoke => {
            //console.log(allPoke);

            allPoke.results.forEach(pokemon => {

                // function pour affichage info complete
                fullInfoPoke(pokemon);
            })
        }))
}
// executer la fonction
findPoke();

// info sur 1 pokemon
function fullInfoPoke(iPokemon){

    let objetPokeFull = {};  // format json vide
    
    let urlPoke = iPokemon.url;
    let namePoke = iPokemon.name;

    //console.log(urlPoke);

    // recuperer information sur un pokemon
    fetch(urlPoke)

        // reponse appel sur urlPoke
        .then(reponse => reponse.json()) // sortie format json
        .then((dataPoke => {
            //console.log(dataPoke);

            // recuperer info que je souhaite
            /**
             * - name
             * - sprites (images)
             * son id (identif+iant
             */
            objetPokeFull.nom = dataPoke.name;
            objetPokeFull.id = dataPoke.id;
            objetPokeFull.imgF = dataPoke.sprites.front_default; // devant
            objetPokeFull.imgB = dataPoke.sprites.back_default; // arrière
            //console.log(objetPokeFull);

            //recuperer info sur la conleur du pokemon
            /**
             * url : https://pokeapi.co/api/v2/pokemon-species/
             * - id du pokemon
             */
            fetch("https://pokeapi.co/api/v2/pokemon-species/"+dataPoke.id)
            .then(reponse => reponse.json())
            .then((dataPoke => {
                // console.log(dataPoke);
                // recuperer couleur du pokemon
                /**
                 * - color.name = la couleur
                 * - names[4].name = nom en francais du pokemon
                 */

                objetPokeFull.couleur = dataPoke.color.name;
                objetPokeFull.nomF = dataPoke.names[4].name;

                //console.log(objetPokeFull);

                // ajouter objetPokeFull dans un tableau
                allPokemon.push(objetPokeFull);

                if(allPokemon.length === nbrPoke){
                    //console.log(allPokemon);

                    // trier les ids par ordre croissant

                    tableauFin = allPokemon.sort((a, b) => {
                        return a.id - b.id;
                    }).slice(  );

                    //console.log(tableauFin);
                    //creation des cartes en html
                    createCard(tableauFin);
                }
            }))
        }))
}


// creer les cartes html
function createCard(tab){
    // lire contenu de la variable en paramettre tab

    for( let i=0; i < tab.length; i++){
        //console.log(tab[i]);

        // carte = li avec les couleurs
        const carte = document.createElement("li");
        let couleur = tab [i].couleur;

        carte.style.backgroundColor = couleur;

        // ajouter id du pokemon
        const idCarte = document.createElement("h3");
        idCarte.innerHTML = tab[i].id;

        // ajouter nom du pokemon
        const nomCarte = document.createElement("p");
        nomCarte.innerHTML = tab[i].nom;

        // ajouter image front du pokemon
        const imageF = document.createElement("img");
        imageF.src = tab[i].imgF;
        imageF.setAttribute("alt", tab[i].nom);
        /*const imgBCarte = document.createElement("img");
        imgBCarte.src = tab[i].imgB;*/


        // ajouter les li 
        carte.appendChild(idCarte);
        carte.appendChild(nomCarte);
        carte.appendChild(imageF);

        // ajouter Back image au rollhover sur li
        hoverLI(carte, tab[i].imgB, tab[i].imgF,imageF, nomCarte, tab[i].nomF);
        /*carte.appendChild(imgB);*/

        // ajouter dans ul les li
        listePU.appendChild(carte);

    }
}
// ecouteur sur hover
function hoverLI(carteLI, urlImgB, urlIimgF, image, paragraphe, nomFr){
    

    carteLI.addEventListener("mouseover", () =>{
        //console.log(image)
        image.src = urlImgB;
        nomFr.innerHTML =
        
        // option 2 // re initiasalition de l'image
        setTimeout( () => {


        image.src = urLImgF;
    }, 500 );

    });
}
// scroll infini
window.addEventListener("scroll", () => {
     /**
      * scrollTop : difference entre ce que l'on a scroller depuis le haut
      */
    const { scrollTop, scrollHeight, scrollClient};
});