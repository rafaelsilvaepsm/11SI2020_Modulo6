<?php 
$menus = array("LP", "SI", "AISE");
?>

<ul class="navbar-nav mr-auto">
      
    <?php foreach ($menus as $key => $value) { ?>
        
        <li class="nav-item">
            <a class="nav-link" href="<?php echo $value; ?>.php"><?php echo $value; ?></a>
        </li>

    <?php } ?>
    
</ul>