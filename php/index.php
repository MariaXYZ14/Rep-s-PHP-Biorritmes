<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estil.css"/>
    <title>Biorritmes</title>
    <form action="biorritmes.php" method="post">
        
    
        <label>Nombre: </label><input type="text" name="nombre" />
        <label>Edad: </label><input type="date"  value="2022-01-01" min="1926-04-21" max="2022-01-01" name="edad" />
        <input type="submit" />

        <?php 
       
            if(isset($_POST["edad"])){
             $_SESSION["edad"]=$_POST["edad"];
             $data_naixement = $_POST["edad"];

            }
        
        ?>

    </form>
   </head>
</html>