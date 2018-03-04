/* return home */
function returnHome() {
        location.href = "index.php";
}
/* return to shop */
function returnToShop() {
    location.href = "products.php";
}
/* plus one item */
function incrementItem(productID) {
    var value = document.getElementById(productID).value;
    value = isNaN(value) ? 0 : parseInt(value, 10) + 1;
    document.getElementById(productID).value = value;
    var subtotal;
    
    // this code is to update in real time the subtotal on the product page before it is added to cart.
    if(productID == 'p1qty') {
        if(document.getElementById('p1Select').value == "o1") {
            subtotal = value*120.00;
            document.getElementById('subtotal').value = parseFloat(subtotal).toFixed(2);
        } else {
            subtotal = value*80.00;
            document.getElementById('subtotal').value = parseFloat(subtotal).toFixed(2);
        }
    } else if (productID == 'p2qty') {
        if(document.getElementById('p2Select').value == "o1") {
            subtotal = value*70.00;
            document.getElementById('subtotal').value = parseFloat(subtotal).toFixed(2);
        } else {
            subtotal = value*50.00;
            document.getElementById('subtotal').value = parseFloat(subtotal).toFixed(2);
        }
    } else if (productID == 'p3qty') {
        if(document.getElementById('p3Select').value == "o1") {
            subtotal = value*50.00;
            document.getElementById('subtotal').value = parseFloat(subtotal).toFixed(2);
        } else {
            subtotal = value*30.00;
            document.getElementById('subtotal').value = parseFloat(subtotal).toFixed(2);
        }
    } else {
        document.getElementById('subtotal').value = 100.00;
    }
}
/* minus one item */
function deIncrementItem(productID) {
    var value = document.getElementById(productID).value;
    if(value > 0) {
        value = isNaN(value) ? 0 : parseInt(value, 10) - 1;
        document.getElementById(productID).value =  value;
    } else {
        alert("Cannot buy less than 0 items!");
    }
} 
/* go to item */
function goToItem(i) {
    document.getElementById(i).onclick = function () {
        if(i == "deckButton"){
            location.href = "product1.php"; // takes user to deck page
        } else if (i == "trucksButton") {
            location.href = "product2.php"; // takes user to trucks page
        } else if (i == "wheelsButton") {
            location.href = "product3.php"; // takes user to wheels page
        } 
            
            
    }
}
// go to check out
function gotToCheckout() {
	location.href = "checkout.php";
}
// view cart
function goToCart() {
	location.href = "cart.php";
}
// return to checkout
function returnCheckout() {
	location.href = "checkout.php";
}


/*function clearCart() {
      $.ajax({
           type: "POST",
           url: 'your_url/ajax.php',
           data:{action:'call_this'},
           success:function(html) {
             alert(html);
           }

      });
 }
function removeItem() {
      $.ajax({
           type: "POST",
           url: 'your_url/ajax.php',
           data:{action:'call_this'},
           success:function(html) {
             alert(html);
           }

      });
 }*/