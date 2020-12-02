<?php 

if (isset($_GET["nome"])){
    echo "Nome (GET) = " . $_GET["nome"];
}

if (isset($_POST["nome"])){
    echo "Nome (POST) = " . $_POST["nome"];
}

$abc = array('João', 'Pedro', 'Maria', 
'José', 'Manuel');

//$cookie_name = "nomes";
//setcookie($cookie_name, json_encode($abc), time() + (86400 * 30), "/");
//$nomes = json_decode($_COOKIE['nomes'], true);

//var_dump($nomes);

?>

<form method="POST">

    <label for="nome">Nome</label>
    <input type="text" name="nome" />

    <input type="submit" value="Enviar" />

</form>

<table>
    
    <?php
    foreach ($nomes as $key => $value) {
        echo "<tr><td>" . $value . "</td></tr>";
    }
    ?>

</table>