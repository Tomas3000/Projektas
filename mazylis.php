<?php
require __DIR__ . '/src/app.php';

?>






<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Pukelis</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="./img/fa.png">
        <script src="https://kit.fontawesome.com/c8837ee2be.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
        <link rel="stylesheet" href="social.css">
        <link rel="stylesheet" href="contact.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
         
     <div class="mobile-container">
        <div class="topnav">
          <a href="index.php" class="active"></a>
          <div id="myLinks">
            <a href="#">Apie Mus</a>
            <a href="#">Pasikiskekopusteliaudamasis</a>
            <a href="https://goo.gl/maps/BBYYPF6pDQe3WTmH6" target="_blank">Kontaktai</a>
          </div>
          <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars" style="background-color: rgb(11, 79, 167); "></i>
          </a>
        </div>
        </div>
        </header>

        <div class="container">
            <div class="grid-item"> <a data-fancybox="gallery" href="mazylis/mazylis.jpg"><img src="mazylis/mazylis.jpg"></a></div>
            <div class="grid-item"> <a data-fancybox="gallery" href="mazylis/mazylis2.jpg"><img src="mazylis/mazylis2.jpg"></a></div>
            <div class="grid-item"> <a data-fancybox="gallery" href="mazylis/mazylis3.jpg"><img src="mazylis/mazylis3.jpg"></a></div> 
        </div>
      


		
  
       

        <div class="form-body">
            <form id="contact" action="index.php" method="post">
                <input type="text" name="vardas" class="feedback-input"  placeholder="Vardas" required autofocus>
                <input type="email" name="email" class="feedback-input" placeholder="Pastas" required>
                <textarea placeholder="Zinute" name="message" class="feedback-input"  required></textarea>
                <button name="submit" type="submit" >Siųsti</button>
            </form> 
            </div>



        <footer>
            <div class="social">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-linkedin"></a>
                <a href="#" class="fa fa-youtube"></a>

             </div>  
                <p>  &copy;Tomas Petrauskas</p>   
               
        </footer>
        
       
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
        <script src="slide.js"></script>
    </body>
</html>