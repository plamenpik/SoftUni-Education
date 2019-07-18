function indexOfArray(arr) {
    let arrLen =Number(arr[0]);
    let result = [];
    for (let i = 1; i < arr.length; i++) {
        let temp = arr[i].split(" - ").map(Number);
        result[temp[0]] = temp[1];
    }
    for (let i = 0; i < arrLen; i++) {
        if (result[i] == undefined){
            console.log(0);
        }
        else {
            console.log(result[i]);
        }
    }
}
indexOfArray(["2", "0 - 5", "0 - 6", "0 - 7"])