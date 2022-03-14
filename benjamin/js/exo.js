
// c'est un commentaire

// variable
/**
// Question : Comment on déclare une variable ?
let a = ''; // let a = 0;
const b = ''; // const b = 0;

 // Question : Comment affecter une chaine de caractère a une variable ?
 let c = 'Bonjour les gens !!';

 // Question : Comment changer une valeur dans une variable ?
 c = 'Bonjour la DWEB !!!';
// Comment vérifier le contenu d'une variable ?
alert(c);
*/
// Question : De quoi avons nous besoin pour faire une addition ?
let d = 5 + 6;
let e = 5; let f = 6;
let total = e + f;

/*
// Question : De quoi avons nous besoin pour une concatenation ?
let section = "DWEB";

let salutation = "Bonjour";
alert(salutation+section);
*/
// exercice
/**
 *  - Creer 4 variable 3 numerique et une avec la chaine de caracteres suivante
 *  - "Le total est :"
 * - vous devez mettre en place une division, une multiplication, une soustraction et une addition
 * avec des chiffres differents et afficher pour opération une alerte avec le résultat.
 */
/*
//  Question :  comment executer une addition ?
let j = 8;
let g = 9;
let h = 3;
let k = "le total est";
alert(k+(j+g));

let z = 24;
let m = 14;
let q = 16;
let l = "le total est";
alert(n+(z*m));


// Question : Comment changer le contenu d'un élément html
// identifier element html h1
alert(document.body.children);
console.log(document);
let bh1 = document.querySelector("h1");

bh1.innerHTML = "Bienvenue la DWEB";
// Question : Comment changer le contenu d'1 element html et l'affecter dans un autre element
// identifier element html h2
let bh2 = document.querySelectorAll("h2");

// identifier le 2ème h2 dans h3
let bh3 = document.querySelector("h3");
let changeH2 = bh2(1).innerHTML = "Merci beaucoup";

bh3.innerHTML = changeH2;

let bh2s = document.querySelector("h2.ssh2");
bh2s.innerHTML = "gero lôlô ouh";

console.log(bh2);

let paragraphe = document.querySelector("p");
paragraphe.innerHTML = 'La DWEB est en vacance à partir du 1er mars';
// Question : Comment ajouter un element html en javascript ?
// dans la div.info, ajouter un element html
// cibler element parent
let divI = document.querySelector("div.info");

// Comment poser une question
window.prompt("Poser une question ?");

// Comment recupérer une réponse à une question
let reponse = document.querySelector("p.r");
reponse.innerHTML = prompt("Comment va la DWEB ce matin?");


let n = prompt("Votre nom ?");
let nom = document.querySelector("p.nom");
nom.append(n);
console.log(p.nom)
*/
// Question : Comment verifier si une variable est vide ou pas ?
/*let myName = "";

if(myName == ""){
    alert("c'est vide");

}
*/
let action = "Benjamin écoute de la musique";


if(action ==""){
    action = "BENJAMIN doit écouter de la musique";
    alert(action);
}
else {
    alert(action);
}


// Question : Comment stocker les 6 mois de l'annee dans une variable ?
let semestre = ["janvier", "fevrier","mars","avril","mai","juin","juillet","septembre","octobre","novembre","decembre"];
console.log(annee[2]);

// compter le nombre d'element d'1 tableau
let nbrAnnee = annee.lenght;

// boucle for
//let i = 0; // on commence a compter à partir de zero

// si est plus petit que nbrAnnee alors 
// Question : Comment mettre en place automatiquement  ...
// afficher un nom dans un element html vide
function afficheNom(){
let dA = document.querySelector("div.afficher");
 
dA.children.innerHTML = "Martine";

     //dA.children(0).innerHTML = "Martine";
    dA.children[0].innerHTML
    console.log(dA);
    return dA;

} 

//  executer function afficheNom
afficheNom();

// Question : Comment creer une horloge numerique 
// Question : Comment rendre l'horloge dynamique
function afficheHeure(){
    // recuperer element html
    let divA = document.querySelector("div.afficher");

    // recuperer et écrire dans paragraphe
    divA.children[0].innerHTML = "Affiche heure";
    
    // creer un objet Date
    let objDate = new Date();
}