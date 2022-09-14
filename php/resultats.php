<!DOCTYPE html>
<html lang="en">
<body>
<?php 
        include 'biorritmes.php';
        echo '<link href="../css/estil.css" type="text/css" rel="stylesheet">';
      //  echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">';


          $nom="";

          if(isset($_POST['nom'])){
                $nom=$_POST['nom'];     
          }

          $data="";

          if(isset($_POST['data'])){
               $data=$_POST['data'];     
          }

          echo $nom,$data;

          $biorritmes= new biorritmes($data);
        
         
          $cicle_fisic=$biorritmes->calcularFisic();
          $cicle_emocional=$biorritmes->calcularEmocional();
          $cicle_intelectual=$biorritmes->calcularIntelectual();


          echo '<br>El cicle físic és de ' . $cicle_fisic;
          echo '<br>El cicle emocional és de ' . $cicle_emocional;
          echo '<br>El cicle intelectual és de ' . $cicle_intelectual;


?>  

<label for="file">Cicle Físic <?php echo ($cicle_fisic*100)?></label>
<progress id="file" max="100" value='<?php echo abs($cicle_fisic*100)?>'></progress><br>
<label for="file">Cicle Emocional <?php echo ($cicle_emocional*100)?></label>
<progress id="file" max="100" value='<?php echo abs($cicle_emocional*100)?>'></progress><br>
<label for="file">Cicle Intelectual <?php echo ($cicle_intelectual*100)?></label>
<progress id="file" max="100" value='<?php echo abs($cicle_intelectual*100)?>'></progress><br>

</body>
</html>

               