<?php
session_start([
    'cookie_lifetime' => 10800,
]);
include('tools.php');
topModule('Pharside Skate Shop - Login');
error_reporting(E_ALL);
ini_set('dispaly_errors', '1');
?>

<!-- Main content of page -->  
        <main>
            <!-- Title and Main Photo -->   
            <div class="wall">
                <section class="wallBlock" id="loginSection">
                    <div id="fontset">
                        <h1>Login</h1>
                    </div>
                
        

            <!-- Login Form -->
                    <div id='loginForm'>
                        <!-- connect this form to php session array --> 
                        <form method='post' id='login' action="processing.php"> <!-- to process on my page latter /~s3622499/wp/a3/tools.php -->
                            <p><input id='fullname' type='text' name='fullname' placeholder='Enter full name'><br></p>
                            <p><input id='email' type='email' name='email' placeholder='youremail@gmail.com'><br></p>
                            <p><input id='password' type='password' name='password'><br></p>
                            <input id='submit' type='submit' name='submit' value='Login'>
                        </form> 
                    </div>
                </section> <!-- end of wallBlock section -->
        
            </div> <!-- end of "<div class="wall" -->
        </main>

<?php    
endModule();
include_once("/home/eh1/e54061/public_html/wp/debug.php");
?>