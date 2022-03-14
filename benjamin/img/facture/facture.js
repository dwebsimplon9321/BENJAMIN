// Coment récuperer le sous-total ?
let sstotal = document.querySelector("td.sstotal");

// recuperer le montant ht
const tvaDom = 8.50;

// calcul de la tva (prix ht * 8.50/100)
let montantTVA = sstotal.innerHTML * tvaDom / 100;
montantTVA.parseFload(sstotal.innerHTML *  tvaDom / 100);

// conversion avec decimal (n.00)

// calcul TTC
let ttc = pareInt(sstotal.innerHTML) + montantTVA;

console.log();

// mettre a jour element html de la facture 
let tdTVA = document.querySelector("td.tva");
tdTVA.innerHTML = montantTVA;
let tdTotal = document.querySelector("total");
tdTotal



