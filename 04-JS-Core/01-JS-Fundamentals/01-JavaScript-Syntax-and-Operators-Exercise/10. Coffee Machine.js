function main(arr) {
    for (let element of arr) {
        let splited = element.split(',')
        console.log(splited);
    }
}

main(['1.00, coffee, caffeine, milk, 4', '0.40, tea, milk, 2',
    '1.00, coffee, decaf, 0']
);