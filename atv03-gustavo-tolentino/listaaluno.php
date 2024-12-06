<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>lista</title>
</head>
<body>
    <table>
        <tr>
            <th>NOME</th>
            <th>TURMA</th>
            <th>ESTADO</th>
            <th>CIDADE</th>
            <th>ENDEREÇO</th>
            <th>NASCIMENTO</th>
            <th>MATÉRIA 1</th>
            <th>MATÉRIA 2</th>
            <th>MATÉRIA 3</th>
        </tr>
        <tr>
            <td>
                <?php
                echo $_POST['nome']
                ?>
            </td>

            <td>
                <?php
                echo $_POST['turma']
                ?>
            </td>

            <td>
                <?php
                echo $_POST['estado']
                ?>
            </td>

            <td>
                <?php
                echo $_POST['cidade']
                ?>
            </td>

            <td>
                <?php
                echo $_POST['endereco']
                ?>
            </td>

            <td>
                <?php
                echo $_POST['nascimento']
                ?>
            </td>

            <td>
                <?php
                echo $_POST['mat1']
                ?>
            </td>

            <td>
                <?php
                echo $_POST['mat2']
                ?>
            </td>

            <td>
                <?php
                echo $_POST['mat3']
                ?>
            </td>
        </tr>
    </table>
    <?php
    
    ?>
</body>
</html>