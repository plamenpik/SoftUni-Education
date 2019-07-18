function solve(matrix, commands) {
    let tokens = commands.split(' ');

    let command = tokens[0];
    let header = tokens[1];

    let headers = matrix.shift();
    let headerIndex;

    for (let i = 0; i < headers.length; i++) {
        if (headers[i] === header) {
            headerIndex = i;
        }
    }

    switch (command) {
        case 'hide':
            console.log(headers.filter((h) => h !== header).join(' | '));
            for (let row = 0; row < matrix.length; row++) {
                let hidden = [];
                for (let col = 0; col < matrix[row].length; col++) {
                    if (col === headerIndex) {
                        continue;
                    }
                    hidden.push(matrix[row][col]);
                }
                console.log(hidden.join(' | '));
            }
            break;
        case 'sort':
            console.log(headers.join(' | '));
            let sorted = matrix.sort((a, b) => a[headerIndex].localeCompare(b[headerIndex]));
            for (let element of sorted) {
                console.log(element.join(' | '));
            }
            break;
        case 'filter':
            let value = tokens[2];
            console.log(headers.join(' | '));
            for (let row = 0; row < matrix.length; row++) {
                for (let col = 0; col <= matrix.length; col++) {
                    if (matrix[row][col] === value && headerIndex === col) {
                        console.log(matrix[row].join(' | '));
                    }
                }
            }
            break;
    }
}

solve([['firstName', 'age', 'grade', 'course'],
        ['Peter', '25', '4.00', 'JS-Core'],
        ['George', '34', '5.10', 'Tech'],
        ['Marry', '28', '5.49', 'Ruby']],
    'filter age 34'
);