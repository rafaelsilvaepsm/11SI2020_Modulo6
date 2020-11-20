<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Turma</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <link rel="stylesheet" href="css/estilos.css" />
    </head>
    <body>

    <?php include "includes/menu.php"; ?>

    <?php 
    $alunos = array(
        '3' => 'Bruno',
        '7' => 'Azedo',
        '15' => 'Lucia',
    );
    ?>

        <?php foreach ($alunos as $key => $value) { ?>
            
            <div class="aluno">
                <div class="alunoContent">
                    <img src="img/<?php echo $key; ?>.jpg" alt="<?php echo $value; ?>" />
                    <a href="aluno.php?nome=<?php echo $value; ?>"><?php echo $key . " - " . $value; ?></a>
                </div>
            </div>

        <?php } ?>
        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>