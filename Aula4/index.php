<?php 

if (isset($_GET["nome"])){
    echo "Nome = " . $_GET["nome"];
}

$nomes = array('João', 'Pedro', 'Maria', 
'José', 'Manuel');

//var_dump($nomes);

?>

<table>
    
    <?php
    foreach ($nomes as $key => $value) {
        echo "<tr><td>" . $value . "</td></tr>";
    }
    ?>

</table>