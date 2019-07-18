function reverse(arr) {
    let result = arr.map(Number).reverse();
    for (let resultElement of result) {
        console.log(resultElement);
    }
}
reverse([10, 15, 20])