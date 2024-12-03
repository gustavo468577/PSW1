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
            <th>nome</th>
            <th>turma</th>
        </tr>
        <tr>
            <td>
                <?php
                echo $_POST['aluno']
                ?>
            </td>
            <td>
                <?php
                echo $_POST['turma']
                ?>
            </td>
        </tr>
    </table>
    <?php
    
    ?>
</body>
</html>