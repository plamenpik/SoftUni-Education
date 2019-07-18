function multiplyOrDivide(arr) {
    let num1 = arr[0];
    let num2 = arr[1];
    
    if (num1 <= num2){
        return num1 * num2;
    }
    else {
        return num1 / num2;
    }
}