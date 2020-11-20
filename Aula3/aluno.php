<!DOCTYPE html>
<html>
    <head>
        <title>Aluno</title>
        <link rel="stylesheet" href="css/estilos.css" />        
    </head>
    <body>

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

    </body>
</html>