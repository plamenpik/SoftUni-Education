function productOfThreeNums(arr) {
    let num1 = arr[0];
    let num2 = arr[1];
    let num3 = arr[2];

    let sum = Number(num1) * Number(num2) * Number(num3);

    if (sum < 0){
        console.log("Negative");
    }
    else {
        console.log("Positive");
    }
}