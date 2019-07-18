function main(number) {
    let areSame = true;
    let numberString = number.toString();
    let firstElement = numberString[0];
    let sum = +firstElement;

    for (let i = 1; i < numberString.length ; i++) {
        if (numberString[i] !== firstElement) {
            areSame = false;
        }
        sum += +numberString[i];
    }

    console.log(areSame);
    console.log(sum);
}

main(1111);