const http = require("http");
const router = require('./routes');
const express = require('express');
const exphbs = require('express-handlebars');
const app = express();
const handleRequest = (request, response) => {
    response.writeHead(200, {
        'Content-Type': 'text/html'
    });
 
};

app.engine('hbs', exphbs({
    defaultLayout: 'main',
    extname: '.hbs'
}));

app.set('view engine', 'hbs');


http.createServer(router.handleRequest).listen(3000);