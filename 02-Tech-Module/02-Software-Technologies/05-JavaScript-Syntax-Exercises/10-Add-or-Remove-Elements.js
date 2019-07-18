function addOrRemoveElements(arr) {
    let result = [];

    for (let i = 0; i < arr.length; i++) {
        let temp = arr[i].split(' ')
        if (temp[0] == "add") {
            result.push(Number(temp[1]));
        }
        else if (temp[0] == "remove"){
            let index = (Number(temp[1]));
            result.splice(index, 1);
        }
    }
    for (let resultElement of result) {
        console.log(resultElement);
    }
}
addOrRemoveElements(["add 3", "add 5", "remove 1", "add 2"])