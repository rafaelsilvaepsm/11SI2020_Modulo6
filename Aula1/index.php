<!DOCTYPE html>
<html>
	<head>
		<title>Aula 1 - PHP</title>
	</head>
	<body>
		
        <?php
        if (isset($_GET["nome"]))
        {
        ?>

            <h1>Tenho nome</h1>
        
        <?php } else { ?>

            <h1>Preencha o nome</h1>

        <?php } ?>

	</body>
</html>
