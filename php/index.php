<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biorritmes</title>
    <form action="resultats.php" method="post">
        <?php 
        echo '<link href="../css/estil.css" type="text/css" rel="stylesheet">';
        $nom=null;
        ?>
        <p>La naturalesa i tot el que ella comprèn: clima, estacions, reproducció dels animals, collites, etc., es regeixen per cicles biològics o ritmes. Existeixen diferents bioritmes que afecten el nostre comportament en diferents maneres. S'ha comprovat estadísticament que l'energia física es comporta cíclicament en períodes de 23 dies, l'energia emotiva en períodes 28 dies i l'energia intel·lectual en 33 dies. Al moment de néixer, cada cicle comença des de zero i comença a pujar en una fase positiva, durant la qual les energies i les capacitats són altes.</p>
        <label>Nom: </label><input type="text" name="nom" value='<?php echo $nom?>' /><br>
        <label>Edat: </label><input type="date" min="1926-04-21"  name="data" value='<?php echo $data?>' />
        <input id="enviar" type="submit" />

    </form>
   </head>
</html>