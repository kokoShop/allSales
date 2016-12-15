var main = require('./cart');

$(function(){
	main.initialiseCart();
	var price = $('.price').html();

	var item = $('#articul').html();

	var size = 0;
	var number = 0;

	$('.size').click(function(){
		size = $(this).html();
		console.log(size);
	});

		$('.number').click(function(){
		number = $(this).html();
		console.log(number);
	});

	$('.add-button').click(function(){
		if (size != 0  && number != 0){
			main.addCart(item, price, size, number);
			var cart = main.getPizzaCart();
			main.putCart();
			console.log(cart);
		}else{
			alert("you forgot to choose smth");
		}
		
	});

});