<?php
session_start([
    'cookie_lifetime' => 10800,
]);
include('tools.php');
topModule('Checkout');

?>

<!-- Main content of page -->  
        <main>
            <!-- Title and Main Photo -->   
            <div class="wall">
                <section class="wallBlock" id="checkoutSection">
                    <div id="fontset">
                        <h1>Checkout</h1>
                    </div>
                <?php
                    /* code here to add all sale items to make a total and dispaly */
                    $grandTotal = 0;
                    foreach($_SESSION['$cart'] as $item) {
                        foreach($item as $option) {
                            $count = 1; // count to catch ints for dollar value
                            foreach($option as $cell){
                                if($count > 2){
                                    //parse $cell to int
                                    $float = (float)$cell +0.00;
                                    if($count == 4) {
                                        $grandTotal+=$float;
                                    }
                                }
                                $count++;
                            
                            }
                        }
                    }
                    echo "Your Total = $".$grandTotal;
                    /* code here to take credit card details */
                ?>
                    <div class="container">
                        <h3>Enter you payment details</h3>
                        <form method='post' action='cardProcessing.php'>
                            <b>Name on Card:</b><input type="text" name="fullName"><br><br>
                            <b>Address:</b><input type="text" name="address"><br><br>
                            <b>Mobile Number:</b><input type="text" name="mobileNumber"><br><br>
                            <b>Credit Card Number:</b><input type="text" name="creditCardNumber"><br><br>
                            <br><button type="submit" id="payButton" onclick="">Pay Now</button>
                        </form>
                    </div>
                </section> <!-- end of wallBlock section -->
        
            </div> <!-- end of "<div class="wall" -->
        </main>
<script>
    function pay(amount) {
        alert("Total = $"+amount+" Enter you credit card details here..")
    }
</script>
   
<?php    
endModule();
include_once("/home/eh1/e54061/public_html/wp/debug.php");
?>