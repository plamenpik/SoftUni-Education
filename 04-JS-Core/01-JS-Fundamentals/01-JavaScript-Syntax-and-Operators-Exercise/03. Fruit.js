function main(fruit, weigth, price) {
    let weightInKilograms = (weigth / 1000);
    let moneyNeeded = (weightInKilograms * price);

    console.log(`I need ${moneyNeeded.toFixed(2)} leva to buy ${weightInKilograms.toFixed(2)} kilograms ${fruit}.`);
}

main('apple', 1563, 2.35);