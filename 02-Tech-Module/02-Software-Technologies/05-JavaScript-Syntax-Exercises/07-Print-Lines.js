function printLines(text) {
    for (let i = 0; i < text.length; i++) {
        if (text[i] == "Stop") {
            return;
        }
        else {
            console.log(text[i]);
        }
    }
}
