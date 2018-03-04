<?php
session_start([
    'cookie_lifetime' => 10800,
]);
include('tools.php');
topModule('Pharside Skate Shop - Wheels');
error_reporting(E_ALL);
ini_set('dispaly_errors', '1');
?>
        <main>
        
        
<!-- Title and Main Photo -->  
        <div class="wall" >
            <section class="wallBlock" id="wheelsSale">
                
                <div id="fontset">
                    <h1>Wheels</h1>
                </div>
                <div class="saleItem" id="wheelsItemSale">
                    <h2>Orbs Wheels</h2>
                    
                <!-- return to shop button -->
                    <button type="button" id="returnToShop" onclick="returnToShop()">Return to Shop</button>
                    
                    <div class="wallImages">
                        <p><img id="wheelsImg" src='../img/wheels.jpg' width=300 height=420 alt='Picture of Orbs Wheels'>
                        </p>
                    </div>
                
                <!-- form that add Wheels to productTree array -->
                    <form method="post" id="wheelsForm" action="cart.php" value="p3"> 
                        <div class="input_div" id="wheelsInputDiv">
                            <input type="hidden" name="item" value="p3">
                            <h3>Options</h3>
                            <h4>Prices</h4>
                            <pre><p>Adult's $50.00  |  Child's $30.00</p></pre><br>
                            <!-- select Wheels size -->
                            <label for="selectSize"><b>Select Size</b></label>
                            <select name="p3Select" id='p3Select'>
				                <option value="o1">Adult's</option>
				                <option value="o2">Child's</option>
                            </select>
                            <p></p>
                            <!-- select Wheels quantity -->
                            <label for="selectQty"><b>Select Quantity</b></label>		    
                            <input type="button" value="-" id="moins" onclick="deIncrementItem('p3qty')">
                            <input type="button" value="+" id="plus" onclick="incrementItem('p3qty')">
                            <input type="text" name="p3qty" size="25" value="0" id="p3qty">
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