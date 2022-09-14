<!doctype html>
<html lang="en">
    
    <?php 
    include('header.php')
   
    ?>
    <body>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
        <?php


        if(isset($_POST["nom"])){
            $_SESSION["nom"]=$_POST["nom"];
            setCookie("nom",$_POST["nom"]);
            $nom = $_POST["nom"];
            echo "<h2>Benvingut $nom </h2>";
        }else{
            if(isset($_SESSION["nom"])){
                echo "<h2>Benvingut " .$_SESSION["nom"] . "</h2>"; 
                $nom=$_COOKIE["nom"];
            }
            
        }
        
        ?>

    <?php
    include('footer.php')

    ?>

   </body>

 </html>