<?php
global $customer;
 session_start([
    'cookie_lifetime' => 10800,
]);
include('tools.php');
topModule('Pharside Skate Shop - Login');
error_reporting(E_ALL);
ini_set('dispaly_errors', '1');


// maybe add a control feature to check if already set
if(!isset($_POST)) {
    $email = ($_POST[  'email'  ]);
    $password = ($_POST['password']);
    $fullname = ($_POST['fullname']);
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) { 
        // store login details in ana array
        $customer['email'] = $email;
        $customer['password'] = $password;
        $customer['name'] = $fullname;
        
        //take customer to home page
        //header("Location: index.php");
        //greeting message
        echo "<section class='wallBlock'>";
        echo "<h3>You have successfully logged in " . $fullname . "</h3><br><br>";
        echo "<button type='button' id='homeButton' onclick='returnHome()'>Return to Home</button>";
        echo "</section>";
    } 
    
} else {
    $name = ($_POST['fullname']);
    echo "<section class='wallBlock'>";
    echo "<h3>You are already logged in " . $name . "</h3><br><br>";
    echo "<button type='button' id='homeButton' onclick='returnHome()'>Return to Home</button>";
    echo "</section>";
}

 // remove cart item
if(isset($_POST[$option['description']])) { 
    foreach($_SESSION['$cart'] as $item) {
        foreach($item as $option) {
            if($option['description'] == $_POST[$option['description']]){
                unset($item);
                header('location: cart.php');
            }
        }
    }
}
    //clear cart
if(isset($_POST['clearCart'])) {
    unset($_SESSION['cart']);
    header('location: cart.php');
}


endModule();
include_once("/home/eh1/e54061/public_html/wp/debug.php");
?>