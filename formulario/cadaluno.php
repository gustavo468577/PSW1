<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO-ALUNO</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

        <div class="cab">
            <h1>SISTEMA DE CADASTRO PSW-1</h1>
        </div>

        <div class="entrada">
            <h2>PREENCHA O FORMULÁRIO:</h2>
        </div>

    <form action="listaaluno.php" method="post">
        <div class="pessoal">
                
            <label for="nome">NOME COMPLETO:</label><br>
            <input type="text" name="nome" id="nome" placeholder="Ex: Gustavo Oliveira Tolentino" required><br>
           
            <label for="cpf">CPF:</label><br>
            <input type="number" name="cpf" id="cpf" placeholder="Ex: 999.999.999-99" required><br>

            <label for="email">EMAIL:</label><br>
            <input type="email" name="email" id="email" placeholder="Ex: gustavo12345@gmail.com" required><br>

            <label for="zap">WHATSAAP:</label><br>
            <input type="number" name="zap" id="zap" placeholder="Ex: (38) 9999-8888" required><br>

            <label for="niver">DATA DE NASCIMENTO:</label><br>
            <input type="date" name="niver" id="niver"><br>

            <label for="turma">TURMA:</label><br>
                <select id="turma" name="turma">
                    <option value="" disabled selected>Selecione</option>
                    <option value="1°aii">1°Aii</option>
                    <option value="1°bii">1°Bii</option>
                    <option value="2°aii">2°Aii</option>
                    <option value="2°bii">2°Bii</option>
                    <option value="3°aii">3°Aii</option>
                    <option value="3°bii">3°Bii</option>
                </select>

            <ul id="ul-direita" >
                <label>Disciplinas Cursadas: </label><br>
                <input type="checkbox" name="fil" id="fil">
                <label for="mat">Filosofia</label>                    
                <input type="checkbox" name="bio" id="bio">
                <label for="port">Biologia</label>                   
                <input type="checkbox" name="pi" id="pi">
                <label for="psw">PI</label>   
                <input type="checkbox" name="fis" id="fis">
                <label for="fis">Física</label>                   
                <input type="checkbox" name="psw" id="psw">
                <label for="asw">PSW-1</label>
           </ul>

        </div>
        
        <div class="loc">
            <label for="uf">ESTADO(UF):</label><br>
            <select id="uf" name="uf" required>
            <option value="" disabled selected>Selecione</option>
            <option value="AC">Acre (AC)</option>
            <option value="AL">Alagoas (AL)</option>
            <option value="AP">Amapá (AP)</option>
            <option value="AM">Amazonas (AM)</option>
            <option value="BA">Bahia (BA)</option>
            <option value="CE">Ceará (CE)</option>
            <option value="DF">Distrito Federal (DF)</option>
            <option value="ES">Espírito Santo (ES)</option>
            <option value="GO">Goiás (GO)</option>
            <option value="MA">Maranhão (MA)</option>
            <option value="MT">Mato Grosso (MT)</option>
            <option value="MS">Mato Grosso do Sul (MS)</option>
            <option value="MG">Minas Gerais (MG)</option>
            <option value="PA">Pará (PA)</option>
            <option value="PB">Paraíba (PB)</option>
            <option value="PR">Paraná (PR)</option>
            <option value="PE">Pernambuco (PE)</option>
            <option value="PI">Piauí (PI)</option>
            <option value="RJ">Rio de Janeiro (RJ)</option>
            <option value="RN">Rio Grande do Norte (RN)</option>
            <option value="RS">Rio Grande do Sul (RS)</option>
            <option value="RO">Rondônia (RO)</option>
            <option value="RR">Roraima (RR)</option>
            <option value="SC">Santa Catarina (SC)</option>
            <option value="SP">São Paulo (SP)</option>
            <option value="SE">Sergipe (SE)</option>
            <option value="TO">Tocantins (TO)</option>
            </select><br>

            <label for="cidade">CIDADE:</label><br>
            <input type="text" name="cidade" id="cidade" placeholder="Ex: Urandi" required><br>

            <label for="end">ENDEREÇO:</label><br>
            <input type="text" name="end" id="end" placeholder="Ex: Rua da Bahia" required><br>

            <label for="bairro">BAIRRO:</label><br>
            <input type="text" name="bairro" id="bairro" placeholder="Ex: Centro" required><br>

            <label for="pref">MATÉRIA PREFERIDA:</label><br>
                <select id="pref" name="pref">
                    <option value="" disabled selected>Selecione</option>
                    <option value="Filosofia">Filosofia</option>
                    <option value="Biologia">Biologia</option>
                    <option value="PI">PI</option>
                    <option value="Física">Física</option>
                    <option value="PSW-1">PSW-1</option>
                   
                </select>

            <label for="senha" id="sen">CRIE UMA SENHA:</label><br>
            <input type="password" name="senha" id="senha" placeholder="Ex: 12345" required>

            <div class="botao">
                <input type="submit" id="salvar" value="Salvar">
                <input type="reset" value="Resetar">
            </div>
            </div>
           
    </form>
    <ul class="home">
        <li><a href="http://localhost:8081/formulario/index.php">HOME</a></li>
    </ul>

    <div class="rodap">
        "© 2024 - TODOS OS DIREITOS RESERVADOS A GUSTAVO TOLENTINO"
    </div>
</body>
</html>