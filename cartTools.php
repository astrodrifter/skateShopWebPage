<?php
session_start([
    'cookie_lifetime' => 10800,
]);
include('tools.php');
topModule('Clear Cart');
error_reporting(E_ALL);
ini_set('dispaly_errors', '1');

 // remove cart item
/*if(isset($_GET['removeItem'])) { 
    
    foreach($_SESSION['$cart'] as $item) {
        $i = 0;
        foreach($item as $option) {
            if($i == $index-1){
                unset($_SESSION['cart']['$item'][$i]);
                header('location: cart.php');
            }
            $i++;
        }
        
    }
    header('location: cart.php');
}*/
    //clear cart
if(isset($_GET['clearCart'])) {
    print_r($_SESSION['$cart']);
    echo "get is set";
    unset($_SESSION['$cart']);
    print_r($_SESSION['$cart']);
    header('location: products.php');
}

?>
<!-- Main content of page -->  
        <main>
            <!-- Title and Main Photo -->   
            <div class="wall">
                <section class="wallBlock" id="loginSection">
                    <div id="fontset">
                        <h3>Cart emptied</h3>
                    </div>
                <div id='clearCartMessage'>
                    <?php 
                    print_r($_GET);
                    ?>
                     <!-- return to shop button -->
                    <br><button type="button" id="returnToShop" onclick="returnToShop()">Return to Shop</button>
                </div>
        

           
                </section> <!-- end of wallBlock section -->
        
            </div> <!-- end of "<div class="wall" -->
        </main>

<?php    
endModule();
include_once("/home/eh1/e54061/public_html/wp/debug.php");
?>