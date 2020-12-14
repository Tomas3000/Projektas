<?php
require __DIR__ . '/src/app.php';

?>



<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Katukai</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://kit.fontawesome.com/c8837ee2be.js" crossorigin="anonymous"></script>
        <link rel="shortcut icon" href="./img/fa.png">
        <link rel="stylesheet" href="social.css">
        <link rel="stylesheet" href="column.css">
        <link rel="stylesheet" href="slide.css">
        <link rel="stylesheet" href="contact.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
     <div class="mobile-container">
         <div class="topnav">
            <a  href="#" class="active"></a>
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
    
     <section>
        <div id="slider">
            <figure>
             <img src="./pukas/pukas1.jpg" alt="Photo">
             <img src="./mazylis/mazylis.jpg" alt="Photo">
             <img src="./simba/simba1.jpg" alt="photo">
             <img src="./pupa/pupa12.jpg" alt="Photo">
            </figure>
         </div>
     </section>


        <main>
        <div class="flex-container">
            <a href="pukas.php"><img alt="" src="pukas/snukutis.png"></a>
            <a href="simba.php"><img alt="" src="simba/simba8.jpg"></a>
            <a href="mazylis.php"><img alt="" src="mazylis/mazylis1.jpg"></a>
            <a href="pupa.php"><img alt="" src="pupa/pupa11.jpg"></a>
        </div>
        </main>
        <div class="draugai"><h2>Musu draugai!</h2></div>

        <article>
            <div class="border" >
              <img src="./img/r1.png" alt="png">
              <img src="./img/r2.png" alt="png">
              <img src="./img/r3.png" alt="png">
              <img src="./img/r4.png" alt="png">
            </div>

            <div class="kaledos" >
              <a href="https://bestlifeonline.com/funniest-cat-memes-ever/" target="_blank"><img  src="./img/skrenda.jpg" alt="skrenda" style= "width: 250px;"  ><p>100 Funniest Cat Memes Ever</p></a>
              <img class="centras" src="./img/kaledos1.png" alt="kaledos">
              <a href="https://www.thefactsite.com/cat-facts/" target="_blank"> <img src="./img/facts.png" alt="" style="height: 200px;"></a>

            </div>
          
          
          <div class="cards">
            <div class="card" style="background-image: url(./pukas/front1.jpg);background-size:cover;"><span class="threeD" >Pukas</span></div>
            <div class="card" style="background-image: url(./pupa/front1.jpg);background-size:cover;"><span class="threeD" >Pupa</span></div>
            <div class="card" style="background-image: url(./simba/front1.jpg);background-size:cover;"><span class="threeD" >Simba</span></div>
            <div class="card" style="background-image: url(./mazylis/mazylis4.jpg);background-size: cover;"><span class="threeD" >Mazylis</span></div>
          </div>
        </article>


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
                <p>&copy;Tomas Petrauskas</p>
        </footer>
        
        
        <script src="slide.js"></script>
    </body>
</html>