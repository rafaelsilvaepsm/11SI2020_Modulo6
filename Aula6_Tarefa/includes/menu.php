<?php 
//$menus = array("LP", "SI", "AISE");

//echo $_POST["limpar"];

$cookie_name = "menus";

//Ler Cookie
if(isset($_COOKIE[$cookie_name])){
    $menus = json_decode($_COOKIE[$cookie_name], true);
} else {
    $menus = array();
}

if (isset($_POST["nome"])){
    array_push($menus, $_POST["nome"]);
}

if (isset($_POST["limpar"])){
    $menus = array();
}

//Gravar Cookie com o novo array
setcookie($cookie_name, json_encode($menus), time() + (86400 * 30), "/");

?>

<ul class="navbar-nav mr-auto">
      
    <?php foreach ($menus as $key => $value) { ?>
        
        <li class="nav-item">
            <a class="nav-link" href="<?php echo $value; ?>.php"><?php echo $value; ?></a>
        </li>

    <?php } ?>
    
</ul>