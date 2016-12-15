
  var storage = require('./storage'); 

    var Cart = [];

    function addCart (item, price, size, quantity){
        Cart.push({item: item,
                   price: price,
                   size: size,
                   quantity: quantity
        });
    }



    function removeFromCart(cart_item){
        var index = Cart.indexOf(cart_item);

        if (index > -1){
            Cart.splice(index, 1);
        }
        updateCart();
    }

    function updateCart(){
        $cart.html("");
    }

    function initialiseCart(){
        var items = storage.get('cart');
        if(items){
            Cart = items;
        }
    }

    function getPizzaCart(){
        return Cart;
    }

    function putCart(){
        storage.set('cart', Cart);
    }

    exports.addCart = addCart;
    exports.initialiseCart = initialiseCart;
    exports.removeFromCart = removeFromCart;
    exports.updateCart= updateCart;
    exports.getPizzaCart = getPizzaCart;
    exports.putCart = putCart;

