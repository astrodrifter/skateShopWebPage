<?php
session_start([
    'cookie_lifetime' => 10800,
]);
include('tools.php');
topModule('Pharside Skate Shop - Trucks');
error_reporting(E_ALL);
ini_set('dispaly_errors', '1');
?>
        <main>
        
        
<!-- Title and Main Photo -->  
        <div class="wall" >
            <section class="wallBlock" id="deckSale">
                
                <div id="fontset">
                    <h1>Trucks</h1>
                </div>
                <div class="saleItem" id="trucksItemSale">
                    <h2>Independant Trucks</h2>
                    
                <!-- return to shop button -->
                    <button type="button" id="returnToShop" onclick="returnToShop()">Return to Shop</button>
                    
                    <div class="wallImages">
                        <p><img id="trucksImg" src='../img/trucks.jpg' width=300 height=420 alt='Picture of a Independant Trucks'>
                        </p>
                    </div>
                
                <!-- form that add trucks to productTree array -->
                    <form method="post" id="deckForm" action="cart.php" value="p2"> 
                        <div class="input_div" id="trucksInputDiv">
                            <input type="hidden" name="item" value="p2">
                            <h3>Options</h3>
                            <h4>Prices</h4>
                            <pre><p>Adult's $70.00  |  Child's $50.00</p></pre><br>
                            <!-- select Trucks size -->
                            <label for="selectSize"><b>Select Size</b></label>
                            <select name="p2Select" id='p2Select'>
				                <option value="o1">Adult's</option>
				                <option value="o2">Child's</option>
                            </select>
                            <p></p>
                            <!-- select Trucks quantity -->
                            <label for="selectQty"><b>Select Quantity</b></label>		    
                            <input type="button" value="-" id="moins" onclick="deIncrementItem('p2qty')">
                            <input type="button" value="+" id="plus" onclick="incrementItem('p2qty')">
                            <input type="text" name="p2qty" size="25" value="0" id="p2qty">
                            <br><br><b>Subtotal - $</b><input type="text" name='subtotal' id='subtotal' value='0.00'>
                        </div>
                        <br><button type="submit" id="addToCartButton">Add to cart</button>
                    </form>
                    <div id="veiwCartButton"><button type="button" onclick="goToCart()">View Cart</button></div>
                </div>
            </section>
    

        </div> <!-- end of <div class='wall' -->
  </main>
<script>
/* for some unknown reason this function would not work in myScript.js */
function goToCart() {
	location.href = "cart.php";
}
document.getElementById("veiwCartButton").addEventListener("click", goToCart);
</script>

<?php    
endModule();
include_once("/home/eh1/e54061/public_html/wp/debug.php");
?>