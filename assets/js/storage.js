var basil = require('basil.js');
basil = new basil();

exports.get = function(item){
	return basil.get();
};

exports.set = function(key, value){
	return basil.set(key, value);
};