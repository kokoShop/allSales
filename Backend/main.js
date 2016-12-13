

var express = require('express');
var path = require('path'); 
var morgan = require('morgan'); 
var bodyParser = require('body-parser'); 

function configurateEndpoints(app){
	//var api = require('./api');
	var pages = require('./pages');

	app.get('/', pages.mainPage);	

	app.get('/catalog.html', pages.catalog);

	app.use(express.static(path.join(__dirname, './pattern')));

}

function startServer(port){

	var app = express();

    app.set('views', path.join(__dirname, 'pattern'));
    app.set('view engine', 'ejs');

    app.use(morgan('dev'));

    configurateEndpoints(app);

    app.listen(port, function(){
    	console.log('My Application Running on http://localhost:'+port+'/');
    });
}


exports.startServer = startServer;