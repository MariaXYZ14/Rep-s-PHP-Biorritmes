<?php
class Biorritmes{
    private $data_naixement;
    private $cicle_fisic;
    private $cicle_emocional;
    private $cicle_intelectual;

    function __construct($data_naixement){
       
        $this->data_naixement=$data_naixement;

    }

    function calcular(){  
       
        
        $date1 = new DateTime($this->data_naixement);
        $date2 = new DateTime(date('d-m-Y'));
        $diff = $date1->diff($date2);

        return $diff->days;
    }

    function calcularFisic(){
       
        $diff=$this->calcular();
        $cicle_fisic=$diff/23;
        $arg=2*pi()*$cicle_fisic;
        $cicle_fisic=round(sin($arg),2);
        return $cicle_fisic;

    }

    function calcularEmocional(){
        $diff=$this->calcular();
        $cicle_emocional=$diff/28;
        $arg2=2*pi()*$cicle_emocional;
        $cicle_emocional= round(sin($arg2),2);
        return $cicle_emocional;

    }

    function calcularIntelectual(){
        $diff=$this->calcular();
        $cicle_intelectual=$diff/33;
        $arg3=2*pi()*$cicle_intelectual;
        $cicle_intelectual=round(sin($arg3),2);
        return $cicle_intelectual;

    }
}

?>