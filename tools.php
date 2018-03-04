<?php
    error_reporting(E_ALL);
    ini_set('dispaly_errors', '1');
 
    function topModule($pageTitle) {
        $html = <<<"OUTPUT"
        <!DOCTYPE html>
        <html>
            <head>
                <meta charset="UTF-8">
                    <title>$pageTitle</title>
                    <link href="https://fonts.googleapis.com/css?family=Fontdiner+Swanky|Graduate|Oregano" rel="stylesheet">
    
    <!-- Link to External Style Sheet -->
                <link rel="stylesheet" href="style.css">
                <script src="myScript.js"></script>
                <noscript> ... helpful message for those without javascript enabled ... </noscript>
            </head>

            <body class='pageBackground'> <!-- rename pageBackground -->
                <div class="center"> 
        
    <!-- banner section contains logo and nav bar -->
                    <div class='banner'>
                        <header id='logoImg'>
                             <p>
                            <!-- image sourced for educational purposes from https://i.ebayimg.com/images/g/bKwAAOSwTA9X3dfk/s-l300.jpg -->
                            <img src='../img/logo1.jpg'  id='logoImg' alt='Smiling Devil Logo' >
                                </p>
      
                        </header>
    
    
    <!-- css nav bar attemnpt source http://css-snippets.com/simple-horizontal-navigation/ -->
                        <div class="nav">
                            <ul>
                                <li><a class="active" href="index.php">Home</a></li>
                                <li><a class="active" href="index.php#about">About</a></li>
                                <li><a class="active" href="products.php">Shop</a></li>
                                <li><a class="active" href="login.php">Login</a></li>
                                <li><a class="active" href="brand-guidelines.php">Design</a></li>
                                </ul>
                        </div>
                    </div>
OUTPUT;
    echo $html;  
    }
        
    function endModule() {
        $html = <<<"OUTPUT"
                             <!-- footer content -->        
                            <footer class='footerStyle'> 
                                 <h1>Assignment 2</h1>
                                 <p><strong>Author:</strong> Dhruva O'Shea |<strong> Student ID:</strong> s3622499 | <strong> Contact information:</strong> s3622499@student.rmit.edu.au</p>
                                </footer>
        
                    </div> <!-- <div> center -->
                </body>
                
OUTPUT;
    echo $html;
    }

?>
