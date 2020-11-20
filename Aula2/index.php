<!DOCTYPE html>
<html>
	<head>
		<title>Aula 2 - PHP</title>
	</head>
	<body>
		
        <?php
        
        $alunos = array('João', 'Pedro', 'Maria');
        //var_dump($alunos);
        
        ?>

        <table border="1" width="200">
            <thead>
                <tr>
                    <th>Nome</th>
                </tr>
            </thead>

            <tbody>

                <?php foreach ($alunos as $key => $value) {
                    echo "<tr><td>" . $value . "</td></tr>";
                }?>

            </tbody>
        </table>

	</body>
</html>
