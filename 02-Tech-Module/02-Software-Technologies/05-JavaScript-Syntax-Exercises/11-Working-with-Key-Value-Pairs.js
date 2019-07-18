function kvp(input) {
    let arr = input.split(" ");

    while (!arr.length == 1) {

        let dict = new Map();
        let key = arr[0];
        let value = arr[1];

        if (!dict.has(arr[0])) {
            dict.set(key, value);
        }
    }
    if (dict.has(arr[0]))  {
        console.log(dict.has(arr[0]));
    }else {
        console.log("None");
    }

}

kvp(["key value"]);