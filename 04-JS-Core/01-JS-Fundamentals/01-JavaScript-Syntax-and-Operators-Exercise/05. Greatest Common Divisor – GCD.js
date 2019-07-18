function main(firstNumber, secondNumber) {
    while (firstNumber !== 0 && secondNumber !== 0)
    {
        if (firstNumber > secondNumber)
            firstNumber %= secondNumber;
        else
            secondNumber %= firstNumber;
    }

    if (firstNumber === 0){
        console.log(secondNumber);
    } else {
        console.log(firstNumber);
    }
}

main(15, 5);