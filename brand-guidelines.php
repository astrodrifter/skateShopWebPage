<?php

    session_start();
    include('tools.php');
    topModule('Pharside Skate Shop - Design');
    error_reporting(E_ALL);
    ini_set('dispaly_errors', '1');
?>
  <main>

    <div class="wall">
        <div class="wallBlock" id="colourPalette">
            
            <p id='design'>design</p>
            <h3>Color Palette</h3>
            <p class='main'>Colours used on this web page:</p>
            
            <div id='palette'>
                <!--<span class='black'></span>
                <span class='white'></span><br>
                <span class='hue1-1'></span>-->
                <span class='hue1-2'></span>
                <span class='hue1-3'></span><br>
                <!--<span class='hue2-1'></span>
                <span class='hue2-2'></span><br>
                <span class='hue3'></span>-->
            </div>
        </div>
        <div class="wallBlock" id="imagesUsed">
            <div id="fontset">
                <h3>Images and Background Images</h3>
                
                <div id='imagery'>
                    <p>
                    <img src="../img/cover.jpg"  width=150 height=200 alt='cover photo' />
                    <img src='../img/shop.jpg' width=200 height=200 alt='shop'>
                    <img src='../img/trick.jpg' width=200 height=200 alt='trick'>
                    <img src='../img/deck.jpg' width=100 height=200 alt='deck'>
                    <img src='../img/trucks.jpg' width=100 height=200 alt='truck'>
                    <img src='../img/wheels.jpg' width=120 height=120 alt='wheel'>
                    <img src='../img/plusButton.jpg' width=150 height=150 alt='short'>
                    <img src='../img/minusButton.jpg' width=150 height=150  alt='short'>
                    </p>    
                </div>
            </div>
        </div>

    <div class="wallBlock" id="fontsUsed">
        <div id="fontset">
            <h3>Font Set</h3>
            <p class='main'>Fonts used on this web page are Google fonts:</p>
            
            <h1>Heading 1</h1>
            <h2>Heading 2</h2>
            <h3>Heading 3</h3>
            <p class='nav'>Navigation links</p>
            <p class='main'>Main text: ABCDE abcde 0-9</p>
       </div>
    </div>
</div> <!-- wall div -->
  </main>
<?php    
    endModule();
?>