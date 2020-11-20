<!DOCTYPE html>
<html>
    <head>
        <title>Aluno</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <link rel="stylesheet" href="css/estilos.css" />        
    </head>
    <body>

        <?php include "includes/menu.php"; ?>

        <div class="alunoDetalhe">

            <img src="img/1.png" alt="Aluno 1" />

            <a class="linkVoltar" href="turma.php">Voltar</a>

            <p><b>Nome:</b> <?php echo $_GET["nome"]; ?></p>
            <p><b>Turma:</b> Informática</p>
            <p><b>E-mail:</b> <a href="mailto:teste@teste.pt">teste@teste.pt</a></p>
            <p><b>Telemóvel:</b> +351 918 562 523</p>

            <hr />

            <table width="100%">
                <thead>
                    <tr>
                        <th align="left">Disciplina</th>
                        <th align="center">Nota</th>
                    </tr>
                </thead>
                
                <tbody>
                    <tr>
                        <td class="grupo" align="center" colspan="2">
                            Grupo 1
                        </td>
                    </tr>
                    <tr>
                        <td align="left">Português</td>
                        <td align="center">15</td>
                    </tr>
                    <tr>
                        <td align="left">Inglês</td>
                        <td align="center">14</td>
                    </tr>
                    <tr>
                        <td align="left">Matemática</td>
                        <td align="center">14</td>
                    </tr>
                    <tr>
                        <td class="grupo" align="center" colspan="2">
                            Grupo 2
                        </td>
                    </tr>
                    <tr>
                        <td align="left">Sistemas de Informação</td>
                        <td align="center">15</td>
                    </tr>
                    <tr>
                        <td align="left">Linguagens de Programação</td>
                        <td align="center">14</td>
                    </tr>
                    <tr>
                        <td align="left">Integração</td>
                        <td align="center">14</td>
                    </tr>
                    
                </tbody>

            </table>    

        </div>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>