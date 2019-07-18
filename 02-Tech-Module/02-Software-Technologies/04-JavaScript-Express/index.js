const express = require("express");
const app = express();

app.get('/', (req, res) => {
    res.end("<h1 style='text-align: center'>Welcome to our web page</h1>" +
    "<div style='text-align: center; color: brown'>" +
        "<p>Articles</p>" +
        "<p>First Article</p>" +
        "<p>Second Article</p>" +
        "<p>Third Article</p>" +
        "</div>")
})

app.get('/register', (req, res)=> {
    res.send("<form><h1 style='text-align: center'>Register</h1>" +
    "<lable for='num1'>Username: </lable>" +
    "<input type='text' id='num1' name='user[username]'>" +
        "<lable for='num2'>Email: </lable>"+
        "<input type='text' id='num2' name='user[email]'>"
    )

})

app.listen(3000, () => {
    console.log('Listening on http://localhost:3000');
})
