<?php

session_start([
    'cookie_lifetime' => 10800,
]);
include('tools.php');
topModule('Pharside Skate Shop - Home');
error_reporting(E_ALL);
ini_set('dispaly_errors', '1');
?>

<!-- Main content of page -->  
    <main>    
    <!-- Title and Main Photo -->  
        <div class="wall" >
            <section class="wallBlock" id="streetView">
                <div id="fontset">
                    <h1>Pharside Skate Shop</h1>
                </div>
                <div class="wallImages">
                    <p><img id='imgShopFront' src="../img/cover.jpg"  alt='Skateboarders standing out the front of the shop' />
                </p>
                </div>
            </section>
    <!-- Mission statement ie About -->  
            <section class="wallBlock" id="about">
                <div id="fontset">
                    <h3>Our Mission</h3>
                
                    <button type="button" id='homeButton' onclick="returnHome()">Return to Home</button>
                    <p class = 'main'>Establsihed 1997 by pro skater Tony Laurence, <strong>Pharside Skate Shop</strong> has been stocking the latest in skatebaord parts and fassion for the Murwillumbah community.</p>
                </div>
            </section>
      
           
        <!-- invitation to skate -->
            <section class="wallBlock" id="joinUs">
                <div id="fontset">
                    <h3>Come shred with us!</h3>
                </div>
                <div class="wallImages">
                    <p><img id="trickImage" src='../img/trick.jpg' alt='trick'></p>
                </div>
            </section>
            
            
        </div> <!-- end of "<div class="wall" -->
    </main>

<?php    
endModule();
include_once("/home/eh1/e54061/public_html/wp/debug.php");
?>