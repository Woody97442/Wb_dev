

function randomIntArray(length, min, max) {
  let arr = [];
  for (let i = 0; i < length; i++) {
    arr.push(Math.floor(Math.random() * (max - min + 1)) + min);
  }
  return arr;
}

function getValue(length, min, max) 
{
    const myArray = randomIntArray(length, min, max);
    console.log(myArray);
    
    upValue = myArray[0];
    downValue = myArray[0];
    
    for (let index = 0; index < myArray.length; index++) 
    {
        if(myArray[index] > upValue){
            upValue = myArray[index];
        }
        if(myArray[index] <= downValue){
            downValue = myArray[index];
        }
    }
    console.log("La valeur la plus haut est : " + upValue);
    console.log("La valeur la plus basse est : " + downValue);
}

/**
 * Retourne les part partager
 * @param {int} money Money start
 * @param {array} ages Array child age
*/
function getPart(money, ages) 
{
    let totalmoney = money;
    let ArrayAge = ages;
    let totalAge = 0;

    for (let i = 0; i < ArrayAge.length; i++) {
        totalAge += ArrayAge[i];
    }

    moneyPerYear = totalmoney / totalAge;
    let result = [];

    for (let index = 0; index < ArrayAge.length; index++) {
        let partChild = ArrayAge[index] * moneyPerYear;
        result.push([
            {
                "idChild": index,
                "ageChild": ArrayAge[index],
                "partChild": Math.round(partChild),
            }
        ]);
    }
    return result;
}

getValue(10, 1, 100);
let ArrPart = getPart(200, [18,16,10,9,17]);

for (let index = 0; index < ArrPart.length; index++) {
    console.log("l'enfant âgé de " + ArrPart[index][0]["ageChild"] + " ans aura " + Math.round(ArrPart[index][0]["partChild"]) + " euros");
}
