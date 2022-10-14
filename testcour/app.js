// import d'express
const express = require('express');
const bodyParser = require('body-parser');

// application express
const app = express();

app.use(bodyParser.urlencoded());
// app.use(bodyParser.json())

app.use((req, res, next) =>{
    let method = req.method;
    let path = req.originalUrl;
    console.log(`${method} ${path}`);
    next();
})

app.use('/', express.static(__dirname + '/public'))


const router = require('./routes')

app.use('/', router)

app.listen(80, () => {
    console.log("Serveur prêt (http://localhost)")
});