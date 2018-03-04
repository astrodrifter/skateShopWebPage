<?php
global $customer;
 session_start([
    'cookie_lifetime' => 10800,
]);
include('tools.php');
topModule('Pharside Skate Shop - Checkout');
error_reporting(E_ALL);
ini_set('dispaly_errors', '1');

/* Luhn algorithm number checker - (c) 2005-2008 shaman - www.planzero.org *
 * This code has been released into the public domain, however please      *
 * give credit to the original author where possible.                      */

function luhn_check($number) {

  // Strip any non-digits (useful for credit card numbers with spaces and hyphens)
  $number=preg_replace('/\D/', '', $number);

  // Set the string length and parity
  $number_length=strlen($number);
  $parity=$number_length % 2;

  // Loop through each digit and do the maths
  $total=0;
  for ($i=0; $i<$number_length; $i++) {
    $digit=$number[$i];
    // Multiply alternate digits by two
    if ($i % 2 == $parity) {
      $digit*=2;
      // If the sum is two digits, add them together (in effect)
      if ($digit > 9) {
        $digit-=9;
      }
    }
    // Total up the digits
    $total+=$digit;
  }

  // If the total mod 10 equals 0, the number is valid
  return ($total % 10 == 0) ? TRUE : FALSE;

}

/* mobile phone check https://stackoverflow.com/questions/35892543/mobile-number-validation-pattern-in-php */
function validate_mobile($mobile)
{
    return preg_match('/^[0-9]{10}+$/', $mobile);
}

// maybe add a control feature to check if already set
if(isset($_POST)) {
    //print_r($_POST);
    $nameOnCard = ($_POST['fullName']);
    $address = ($_POST['address']);
    $mobileNumber = ($_POST['mobileNumber']);
    $creditCardNumber = ($_POST['creditCardNumber']);
    $message1;
    $message2;
    $result1;
    $result2;
    $result;
    $cardValid;
    // code to varify 
    if (luhn_check($creditCardNumber)) { 
        // store login details in ana array
        $customer['nameOnCard'] = $nameOnCard;
        $customer['creditCardNumber'] = $creditCardNumber;
        $message1 = "valid";
        $result1 = "Successful";
    } else {
        $message1 = "invalid";
        $result1 = "Unsuccessful";
    }
     
    if(validate_mobile($mobileNumber)) {
        $customer['mobileNumber'] = $mobileNumber;
        $message2 = "valid";
        $result2 = "Successful";
    } else {
        $message2 = "invalid";
        $result2 = "Unsuccessful";
    }
        if($message1 != "valid"){
            $cardValid = "Card number is invalid!";
            echo "<button type='button' id='homeButton' onclick='returnCheckout()'>Return to Checkout page</button>";
        } 
    
        if($message2 != "valid"){
            $numValid = "Mobile number  invalid!";
            echo "<button type='button' id='homeButton' onclick='returnCheckout()'>Return to Checkout page</button>";
        } 
        
        if($result1 != "Successful"){
            $cardValid = "Card number is invalid!";
            echo "<h3>".$cardValid."</h3>";
            echo "<button type='button' id='homeButton' onclick='returnCheckout()'>Return to Checkout page</button>";
            $result = $result1;
        } else if($result2 != "Successful"){
            $numValid = "Mobile number  invalid!";
            echo "<h3>".$numValid."</h3>";
            echo "<button type='button' id='homeButton' onclick='returnCheckout()'>Return to Checkout page</button>";
            $result = $result2;
        } else {
            $result = "Successful";
        }
        echo "<section class='wallBlock'>";
        echo "<h3>Your Payment was ".$result . " ". $customer['nameOnCard'] . "</h3><br><br>";
        // receipt
        $grandTotal;
        if($result == "Successful") {
            echo "<h3>Your Receipt</h3>";
                            
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
                    echo('</div>');
        }
        echo('</div>');
                        
    }
    echo "<br><b>Amount Paid: $</b>".$grandTotal.".00<br><br>";
            
        }
        echo "<button type='button' id='homeButton' onclick='returnHome()'>Return to Home</button>";
        echo "</section>";
} else {
    echo "<section class='wallBlock'>";
    echo "<h3>Your payment was unsuccesful " . $name . "</h3><br><br>";
    //return to checkout form.
    echo "<button type='button' id='homeButton' onclick='returnCheckout()'>Return to Checkout page</button>";
    echo "</section>";
}



endModule();
include_once("/home/eh1/e54061/public_html/wp/debug.php");
?>
<script>
// return to checkout
function returnCheckout() {
	location.href = "checkout.php";
}
</script>