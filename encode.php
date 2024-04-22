<?php
    $marks=array("Gaurav"=>05,"Avani"=>04,"Ramesh"=>04);
    $encodearray=json_encode($marks);
    echo $encodearray;//Encoded
    var_dump(json_decode($encodearray));//Decoded
?>