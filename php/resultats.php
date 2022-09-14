<?php
    

if(isset($_POST['edad'])){
    
    $data_naixement=$_POST['edad'];
    include("biorritmes");
    $bio = new biorritmes($data_naixement);

}else{
    header("Location:");
    exit;
}

$data_naixement =$_POST['edad'];

?>
               