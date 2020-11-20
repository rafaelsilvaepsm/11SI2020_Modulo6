<!DOCTYPE html>
<html>
	<head>
		<title>Aula 1 - PHP</title>
	</head>
	<body>
		
        <?php
        if (isset($_GET["nome"]))
        {
            echo "<h1>Tenho nome</h1>";
        } else {
            echo "<h1>Preencha o nome</h1>";
        }
        ?>

	</body>
</html>
