<?php
 
global $cart;
global $index;
global $pricebook;
global $grandTotal;
global $numItems;
session_start([
    'cookie_lifetime' => 10800,
]);
include('tools.php');
topModule('Cart');
error_reporting(E_ALL);
ini_set('dispaly_errors', '1');

/*pricebook array */
$pricebook = array (
	"p1" => array (
		"o1" => array (
			"description" => "Adult Decks",
            "price" => 120.00
			),
		 "o2" => array (
			"description" => "Childs Decks",
            "price" => 80.00
			)
		),

	"p2" => array (
		"o1" => array (
			"description" => "Adult Trucks",
            "price" => 70.00
			),
		"o2" => array (
			"description" => "Child Trucks",
            "price" => 50.00
			)
		),
	"p3" => array (
		"o1" => array (
			"description" => "Adult Wheels",
            "price" => 50.00,
			),
		 "o2" => array (
			"description" => "Child Wheels",
            "price" => 30.00,
			)
		)

   	);

?>
<!-- Main content of page -->  
        <main>
            <!-- Title and Main Photo -->   
            <div class="wall">
                <section class="wallBlock" id="checkoutSection">
                    <div id="fontset">
                        <h1>Cart</h1>
                    </div>
<?php  
$numItems = 0;
if(isset($_POST) ) {
    // here can have a control statement to test which product was added to cart. Maybe a switch statment.
    $item = $_POST['item'];
    switch($item) {
        case 'p1':  
            // for p1 (Decks)
            $product1Type = $_POST['p1Select'];
            $product1Qty = $_POST['p1qty'];  
            // add into $_SESSION['$cart] array
            if ($product1Type == "o1") {
                //$price = $_SESSION['$productTree']['p1']['o1']['price'];
                $_SESSION['$cart']['p1']['o1']['description'] = $pricebook['p1']['o1']['description'];
                $_SESSION['$cart']['p1']['o1']['qty'] = $product1Qty;
                $_SESSION['$cart']['p1']['o1']['price'] = $pricebook['p1']['o1']['price'];
                $_SESSION['$cart']['p1']['o1']['total'] = $product1Qty * $pricebook['p1']['o1']['price'];
            } else {
                $_SESSION['$cart']['p1']['o2']['description'] = $pricebook['p1']['o2']['description'];
                $_SESSION['$cart']['p1']['o2']['qty'] = $product1Qty;
                $_SESSION['$cart']['p1']['o2']['price'] =  $pricebook['p1']['o2']['price'];
                $_SESSION['$cart']['p1']['o2']['total'] = $product1Qty * $pricebook['p1']['o2']['price'];
            }
            $numItems++;
        break;
        case 'p2':  
            // for p2 (Trucks)
            $product2Type = $_POST['p2Select'];
            $product2Qty = $_POST['p2qty'];  
            // add into $_SESSION['$cart] array
            if ($product2Type == "o1") {
                $_SESSION['$cart']['p2']['o1']['description'] = $pricebook['p2']['o1']['description'];
                $_SESSION['$cart']['p2']['o1']['qty'] = $product2Qty;
                $_SESSION['$cart']['p2']['o1']['price'] = $pricebook['p2']['o1']['price'];
                $_SESSION['$cart']['p2']['o1']['total'] = $product2Qty * $pricebook['p2']['o1']['price'];
        
            } else {
                $_SESSION['$cart']['p2']['o2']['description'] = $pricebook['p2']['o2']['description'];
                $_SESSION['$cart']['p2']['o2']['qty'] = $product2Qty;
                $_SESSION['$cart']['p2']['o2']['price'] = $pricebook['p2']['o2']['price'];
                $_SESSION['$cart']['p2']['o2']['total'] = $product2Qty * $pricebook['p2']['o2']['price'];
            }
            $numItems++;
        break;
        case 'p3':  
            // for p3 (Wheels)
            $product3Type = $_POST['p3Select'];
            $product3Qty = $_POST['p3qty'];  
            // add into $_SESSION['$cart] array
            if ($product3Type == "o1") {
                $_SESSION['$cart']['p3']['o1']['description'] = $pricebook['p3']['o1']['description'];
                $_SESSION['$cart']['p3']['o1']['qty'] = $product3Qty;
                $_SESSION['$cart']['p3']['o1']['price'] = $pricebook['p3']['o1']['price'];
                $_SESSION['$cart']['p3']['o1']['total'] = $product3Qty * $pricebook['p3']['o1']['price'];
        
            } else {
                $_SESSION['$cart']['p3']['o2']['description'] = $pricebook['p3']['o2']['description'];
                $_SESSION['$cart']['p3']['o2']['qty'] = $product3Qty;
                $_SESSION['$cart']['p3']['o2']['price'] = $pricebook['p3']['o2']['price'];
                $_SESSION['$cart']['p3']['o2']['total'] = $product3Qty * $pricebook['p3']['o2']['price'];
            }
            $numItems++;
        break;
        default:
            print "Error: Item not entered into cart";
    }
    
   
} else {
    echo "<h3>Cart is currently empty</h3>";
}                   

?>

<?php

if(isset($_SESSION['$cart'])) {   
                    
    echo "<pre>";
    echo "Item/Description | Quantity | Price/ea | Subtotal |","\n";
    echo "</pre>";
                        
                    
    foreach($_SESSION['$cart'] as $item) {
        echo "<div class='cartItem' id='cartRow'>";
        foreach($item as $option) {
            echo "<div class='cartRow' id='cartCell'>";
            echo "<div id='cartImg'>";
            if($option['description'] == "Adult Decks" || $option['description'] == "Childs Decks") 
                echo"<img id='cartImg' src='../img/deck.jpg' alt='Picture of deck' >";
            elseif ($option['description'] == "Adult Trucks" || $option['description'] == "Child Trucks")
                echo"<img id='cartImg' src='../img/trucks.jpg' alt='truck'>";
            elseif ($option['description'] == "Adult Wheels" || $option['description'] == "Child Wheels")
                echo"<img id='cartImg' src='../img/wheels.jpg' width='70' height='70' alt='wheels'>";
            else
                echo "Image not available";
            echo "</div>";
                            
            $count = 1; // count to catch ints for dollar value
            foreach($option as $cell){
                if($count > 2){
                    //parse $cell to int
                    $float = (float)$cell +0.00;
                    echo "<span class='cartCell' id='cartCell'>$". $float . ".00</span>";
                    if($count == 4) {
                        $grandTotal+=$float;
                    }
                } else {
                    echo "<span class='cartCell' id='cartCell'>". $cell . "</span>";
                }
                $count++;
            }
            // not removing not needed in specs
            /*echo "<form method='get' name='removeItem' action='cartTools.php'><button type='submit' value='removeItem' >Remove Item</button></form>";
            */
                            
            echo('</div>');
            //$index++;
                            
        }
        echo('</div>');
                        
    }
} else {
    echo "<h3>No items in cart</h3>";
}
                    

echo "<br><b>Total: $</b>".$grandTotal.".00<br><br>";
?>
                    
                    <button type="button" id="backToShop" onclick="returnToShop()">Continue Shopping</button>
                    <p></p>
                    <button type="button" id="toPay" onclick="gotToCheckout()">Checkout</button>
                    <p></p>
                    <!-- not clearing cart -->
                    <form method='get' name='clearCartButton' action='cartTools.php'>
                        <button type='submit' name='clearCart' value='clearCart'>Clear Cart</button><p></p>
                    </form>
                
                   
                </section> <!-- end of wallBlock section -->
            </div> <!-- end of "<div class="wall" -->
        </main>
        



<?php    
endModule();
include_once("/home/eh1/e54061/public_html/wp/debug.php");
?>