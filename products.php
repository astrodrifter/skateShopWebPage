<?php

session_start();
include('tools.php');
topModule('Pharside Skate Shop - Shop');
error_reporting(E_ALL);
ini_set('dispaly_errors', '1');


?>
        <main>
        
<!-- Main content of page --> 
        
        <!-- Title and Main Photo -->  
            <div class="wall">
                <section class="wallBlock" id="shopView">
                    <div id="fontset">
                        <h1>Shop</h1>
                    </div>
        
                    <div class="wallImages">
                        <p><img id='shopImg' src='../img/shop.jpg' alt='shop'>
                        </p>
                    </div>
                </section>
                
                <section class='wallBlock' id="skateboardParts">
                    <div id="fontset">
                        <h2>Skateboard Parts</h2>
                    </div>
                    
<!-- following three items are clickable divs 
    but the javascript is slow so I put href link in there also -->    
                    <div class="table">
                        <div class="row">
                            <div class="cell"></div> 
                            <div id="deckButton" onclick="goToItem('deckButton');"> 
                                <div id="fontset"><h3>Decks</h3></div>
                                <p><img id="deckPic" src='../img/deck.jpg' width=100 height=140 alt='Picture of deck' ></p>
                                <div id="fontset"><h4>Price</h4></div>
                            <!-- on click go to product1.php -->
                                <p><a href='product1.php' target='_blank'>Adult's $120.00</a></p> 
                                <p><a href='product1.php' target='_blank'>Child's $80.00</a></p>
                                    
                            </div>
                
                            <div class="cell"></div>
                            <div id="trucksButton" onlick="goToItem('trucksButton');">
                                <div id="fontset"><h3>Trucks</h3></div>
                                <p><img id="truckPic" src='../img/trucks.jpg' width=100 height=130 alt='truck'></p>
                                <div id="fontset"><h4>Price</h4></div>
                            <!-- on click go to product2.php -->
                                <p><a href='product2.php' target='_blank'>Adult's $70.00</a></p>
                                <p><a href='product2.php' target='_blank'>Child's $40.00</a></p>
                            </div>
                
                            <div class="cell"></div>
                            <div id="wheelsButton" onclick="goToItem('wheelsButton');">
                                <div id="fontset"><h3>Wheels</h3></div>
                                <p><img id="wheelPic" src='../img/wheels.jpg' width=120 height=120 alt='wheel'></p>
                                <div id="fontset"><h4>Price</h4></div>
                            <!-- on click go to product3.php -->
                                <p><a href='product3.php' target='_blank'>Adult's $50.00</a></p>
                                <p><a href='product3.php' target='_blank'>Child's $30.00</a></p>
                            </div>
                
                        </div>
        
                    </div>
                </section>
            </div> <!-- end of "<div class="wall" -->
    </main>
      
<?php    
endModule();
include_once("/home/eh1/e54061/public_html/wp/debug.php");
?>