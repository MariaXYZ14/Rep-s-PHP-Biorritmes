<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../css/estil.css" type="text/css" rel="stylesheet">
<title>Biorritmes</title>
</head>
<body>
<?php 


        include 'biorritmes.php';
        echo '<link href="../css/estil.css" type="text/css" rel="stylesheet">';
        
          $nom="";

          if(isset($_POST['nom'])){
                $nom=$_POST['nom'];     
          }

          $data="";

          if(isset($_POST['data'])){
               $data=$_POST['data'];     
          }

          echo 'Nom d¨usari:' . $nom .'<br>Data naixement: ' . $data . '<br>';

          $biorritmes= new biorritmes($data);
        
          

          $cicle_fisic=$biorritmes->calcularFisic();
          $cicle_emocional=$biorritmes->calcularEmocional();
          $cicle_intelectual=$biorritmes->calcularIntelectual();

          $newClass='';
          $newClass2='';
          $newClass3='';

          if($cicle_fisic < 0){

            $newClass = 'barraFisicaNegativa';
      
          }

          if($cicle_emocional < 0){

            $newClass2 = 'barraEmocionalNegativa';
      
          }
          if($cicle_intelectual < 0){

            $newClass3 = 'barraIntelectualNegativa';
      
          }

          echo '<br>El cicle físic és de ' . $cicle_fisic;
          echo '<br>El cicle emocional és de ' . $cicle_emocional;
          echo '<br>El cicle intelectual és de ' . $cicle_intelectual . '<br>';


?>  

<br><label for="file">Cicle Físic <?php echo ($cicle_fisic*100)?> %</label><br>
<progress class="barra <?php echo $newClass;?>" max="100" value='<?php echo abs($cicle_fisic*100)?>'></progress><br>
<label for="file">Cicle Emocional <?php echo ($cicle_emocional*100)?> %</label><br>
<progress class="barra <?php echo $newClass2;?>" max="100" value='<?php echo abs($cicle_emocional*100)?>'></progress><br>
<label for="file">Cicle Intelectual <?php echo ($cicle_intelectual*100)?> %</label><br>
<progress  class="barra <?php echo $newClass3;?>" max="100" value='<?php echo abs($cicle_intelectual*100)?>'></progress><br>

</body>

</html>

               