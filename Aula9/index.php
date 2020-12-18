<?php 

$dsn = "mysql:host=localhost;dbname=si2020";
$user = "root";
$passwd = "";

$conexao = new PDO($dsn, $user, $passwd);

if (isset($_GET["idDelete"])){

    $id = $_GET["idDelete"];

    $delete = "DELETE FROM alunos WHERE ID = " . $id;

    $conexao->exec($delete);
    //var_dump($delete);

}

if (isset($_POST["btnEnviar"])){

    $nome = $_POST["txtNome"];

    $insert = "INSERT INTO alunos(nome) VALUES ('" . $nome . "')";

    $conexao->exec($insert);

    //var_dump($nome);

}


$sql = "SELECT * FROM alunos";
$query = $conexao->query($sql);
$alunos = $query->fetchAll(PDO::FETCH_ASSOC);

//var_dump($alunos);
?>

<!DOCTYPE html>
<html>
    <body>

        <form method="POST" >

            <label for="txtNome">Nome</label>
            <input type="text" name="txtNome" />

            <input type="submit" value="Enviar" name="btnEnviar" />

        </form>

        <table>
        
            <thead>
                <tr>
                    <th>Nome</th>
                </tr>
            </thead>

            <tbody>

                <?php foreach ($alunos as $aluno) { ?>
                    <tr>
                        <td>
                            <?php echo $aluno["id"]; ?>
                            <?php echo $aluno["nome"]; ?>
                            <a href="index.php?idDelete=<?php echo $aluno["id"]; ?>">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>

            </tbody>
        
        </table>

    </body>
</html>