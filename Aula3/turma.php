<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Turma</title>
        <link rel="stylesheet" href="css/estilos.css" />
    </head>
    <body>

    <?php 
    $alunos = array('João', 'Pedro', 'Maria', 'João', 'Pedro', 'Maria', 'João', 'Pedro', 'Maria', 'João', 'Pedro', 'Maria', 'Ana');
    ?>

        <?php foreach ($alunos as $key => $value) { ?>
            
            <div class="aluno">
                <div class="alunoContent">
                    <img src="img/1.png" alt="<?php echo $value; ?>" />
                    <a href="aluno.php?nome=<?php echo $value; ?>"><?php echo $value; ?></a>
                </div>
            </div>

        <?php } ?>

    </body>
</html>