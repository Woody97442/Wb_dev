/**
  * Renvoie un nombre aléatoire entre min (inclus) et max (exclusif)
*/
export function getRandomArbitrary(min, max) {
    return Math.random() * (max - min) + min;
}

/**
  * Renvoie un entier aléatoire entre min (inclus) et max (inclus).
  * La valeur n'est pas inférieure à min (ou le prochain entier supérieur à min
  * si min n'est pas un entier) et pas supérieur à max (ou à l'entier suivant
  * inférieur à max si max n'est pas un entier).
  * L'utilisation de Math.round() vous donnera une distribution non uniforme !
*/
export function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

/** 
 * Mélange le tableaux aléatoirement et le renvoie 
*/
export function shuffle(table) {
    for (let i = table.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [table[i], table[j]] = [table[j], table[i]];
    }
    return table;
}
