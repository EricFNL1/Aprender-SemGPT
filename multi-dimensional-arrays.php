<?php 

$cadastros = array(
    array("Eric",21, "TI"),
    array("Sarah", 19, "Gestão"),
    array("Kaíque", 24, "Dev"),
);

//echo $cadastros[0]

foreach ($cadastros as $registers) {
    foreach ($registers as $valor) {
        echo $valor . " ";
    }
}
?>