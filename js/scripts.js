/*!
* Start Bootstrap - Shop Homepage v5.0.5 (https://startbootstrap.com/template/shop-homepage)
* Copyright 2013-2022 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-shop-homepage/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project

var product_price_total = document.getElementById('product_price_total');
var price_total = document.getElementById('price_total');

const decreaeNumber = (incdec,itmeprice) => {
    var itmeval = document.getElementById(incdec);
    var itmeprice = document.getElementById(itmeprice);
    console.log(itmeprice.innerHTML)
    
    if(itmeval.value <= 0){
        itmeval.value = 0;
    }
    else{
        itmeval.value = parseInt(itmeval.value) - 1;
        itmeprice.innerHTML = parseFloat(itmeprice.innerHTML ) - 20.00;
        product_price_total.innerHTML = (parseFloat(product_price_total.innerHTML ) - 20.00).toFixed(2);
        discount.innerHTML = 0;
        price_total.innerHTML = (parseFloat(product_price_total.innerHTML)).toFixed(2);

    }
}

const increaseNumber = (incdec,itmeprice) =>{
    var itmeval = document.getElementById(incdec);
    var itmeprice = document.getElementById(itmeprice);

    if(itmeval.value >= 0){
        itmeval.value = parseInt(itmeval.value) +1;
        itmeprice.innerHTML = parseFloat(itmeprice.innerHTML ) + 20.00; 
        product_price_total.innerHTML = (parseFloat(product_price_total.innerHTML ) + 20.00).toFixed(2);
        discount.innerHTML = 0;
        price_total.innerHTML = (parseFloat(product_price_total.innerHTML)).toFixed(2);

    }
    else{
        itmeval.value = 0;
    }
}

const decreaeNumber2 = (incdec) => {
    var itmeval = document.getElementById(incdec);
    
    if(itmeval.value <= 0){
        itmeval.value = 0;
    }
    else{
        itmeval.value = parseInt(itmeval.value) - 1;

    }
}

const increaseNumber2 = (incdec) =>{
    var itmeval = document.getElementById(incdec);

    if(itmeval.value >= 0){
        itmeval.value = parseInt(itmeval.value) +1;
    }
    else{
        itmeval.value = 0;
    }
}

const deletes = (incdec,itmeprice) =>{
    var itmeval = document.getElementById(incdec);
    var itmeprice = document.getElementById(itmeprice);

    product_price_total.innerHTML = parseFloat(product_price_total.innerHTML ) - (parseInt(itmeval.value) * 20.00);
    price_total.innerHTML = (parseFloat(product_price_total.innerHTML )).toFixed(2);
    itmeval.value = 0;
    itmeprice.innerHTML = 0.00;
    discount.innerHTML = 0;

    if(product_price_total.innerHTML == 0){
        discount.innerHTML = 0.00;
        price_total.innerHTML = 0.00;
    }

    member = 'silver'
    if(member == 'silver'){
        discount.innerHTML = parseFloat(product_price_total.innerHTML) * 0.03;
        price_total.innerHTML = (parseFloat(price_total.innerHTML ) - parseFloat(discount.innerHTML)).toFixed(2);
        product_price_total = 0;
    }
    else if(member == 'gold'){
        discount.innerHTML = parseFloat(product_price_total.innerHTML) * 0.06;
        price_total.innerHTML = (parseFloat(price_total.innerHTML ) - parseFloat(discount.innerHTML)).toFixed(2);
    }
    else if(member == 'premium'){
        discount.innerHTML = parseFloat(product_price_total.innerHTML) * 0.10;
        price_total.innerHTML = (parseFloat(price_total.innerHTML ) - parseFloat(discount.innerHTML)).toFixed(2);
    }

}


const addCard = (incdec,quantityCart) =>{
    var itmeval = document.getElementById(incdec);
    var quantityCart = document.getElementById(quantityCart);

    if(itmeval.value <= 0){
        quantityCart.innerHTML = 0;
    }
    else{
        quantityCart.innerHTML = parseInt(itmeval.value)
    }
}


const Discount = (member) =>{
    var member = document.getElementById(member);
    
    member = 'silver'
    if(member == 'silver'){
        discount.innerHTML = (parseFloat(product_price_total.innerHTML) * 0.03).toFixed(2);
        price_total.innerHTML = parseFloat(price_total.innerHTML ) - parseFloat(discount.innerHTML);
        // product_price_total = 0;
    }
    else if(member == 'gold'){
        discount.innerHTML = (parseFloat(product_price_total.innerHTML) * 0.06).toFixed(2);
        price_total.innerHTML = parseFloat(price_total.innerHTML ) - parseFloat(discount.innerHTML);
    }
    else if(member == 'premium'){
        discount.innerHTML = (parseFloat(product_price_total.innerHTML) * 0.10).toFixed(2);
        price_total.innerHTML = parseFloat(price_total.innerHTML ) - parseFloat(discount.innerHTML);
    }

}

