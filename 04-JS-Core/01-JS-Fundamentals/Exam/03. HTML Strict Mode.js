function solve(arr) {
    for (let arrElement of arr) {
        console.log(arrElement);
    }
}

solve(['<h1><span>Hello World!</span></h1>',
    '<p>I am Peter.']
);

// ^<([A-Z][A-Z0-9]*)\b[^>]*>(.*?)</\1>$