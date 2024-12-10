<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>LISTA-ALUNO</title>
</head>
<body>
<div class="cab">
            <h1>SISTEMA DE CADASTRO PSW-1</h1>
        </div>

        <div class="entrada">
            <h2>ALUNOS CADASTRADOS:</h2>
        </div>

    <table class="table">
        <tr>
            <th>NOME</th>
            <th>CPF</th>
            <th>TURMA</th>
            <th>ESTADO</th>
            <th>CIDADE</th>
            <th>ENDEREÇO</th>
            <th>NASCIMENTO</th>
            <th>MATÉRIA PREFERIDA</th>
        </tr>
        <tr>
            <td>Gabrielly</td>
            <td>36893591883</td>
            <td>2°Aii</td>
            <td>BA</td>
            <td>Ibiassucê</td>
            <td>Rua do Amor</td>
            <td>2007/07/23</td>
            <td>PSW</td>
        </tr>

        <tr>
            <td>Erick Gustavo</td>
            <td>27835620834</td>
            <td>2°Aii</td>
            <td>BA</td>
            <td>Carinhanha</td>
            <td>Rua da Inteligência</td>
            <td>2007/06/04</td>
            <td>PI</td>
        </tr>

        <tr>
            <td>Lara Vitória</td>
            <td>26635915628</td>
            <td>2°Aii</td>
            <td>BA</td>
            <td>Ibiassucê</td>
            <td>Rua do Sono</td>
            <td>2007/11/04</td>
            <td>Física</td>
        </tr>

        <tr>
            <td>Paulo Gabiel Wisniewski</td>
            <td>57825406345</td>
            <td>2°Aii</td>
            <td>BA</td>
            <td>Guanambi</td>
            <td>Rua da Vaquejada</td>
            <td>2007/09/11</td>
            <td>Biologia</td>
        </tr>

        <tr>
            <td>Gleimerson Rodrigo</td>
            <td>27845627845</td>
            <td>2°Aii</td>
            <td>BA</td>
            <td>Rio do Antônio</td>
            <td>Rua do GPT</td>
            <td>2007/04/08</td>
            <td>PSW</td>
        </tr>

        <tr>
            <td>Lorrani Costas</td>
            <td>37826307387</td>
            <td>2°Aii</td>
            <td>BA</td>
            <td>Ibiassucê</td>
            <td>Rua do Namorado</td>
            <td>2007/06/23</td>
            <td>PI</td>
        </tr>

        <tr>
            <td>Cintia Nunes</td>
            <td>28609325634</td>
            <td>2°Aii</td>
            <td>MG</td>
            <td>Mamonas</td>
            <td>Rua do Pet</td>
            <td>2007/04/03</td>
            <td>Física</td>
        </tr>

        <tr>
            <td><?php echo $_POST['nome']?></td>
            <td><?php echo $_POST['cpf']?></td>
            <td><?php echo $_POST['turma']?></td>
            <td><?php echo $_POST['uf']?></td>
            <td><?php echo $_POST['cidade']?></td>
            <td><?php echo $_POST['end']?></td>
            <td><?php echo $_POST['niver']?></td>
            <td><?php echo $_POST['pref']?></td>
        </tr>

    </table>
    <ul class="home2">
        <li><a href="http://localhost:8081/atv03-gustavo-tolentino/index.php">HOME</a></li>
        <li><a href="http://localhost:8081/atv03-gustavo-tolentino/cadaluno.php">CADASTRO</a></li>
    </ul>
    <div class="rodap2">
        "© 2024 - TODOS OS DIREITOS RESERVADOS A GUSTAVO TOLENTINO"
    </div>
</body>
</html>