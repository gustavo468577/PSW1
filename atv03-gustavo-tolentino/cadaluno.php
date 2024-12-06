<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO-ALUNO</title>
    <link rel="stylesheet" href="styless.css">
</head>
<body>
    <div id="cab">
        <h1>SISTEMA DE CADASTRO DE ALUNOS PSW-1</h1>
    </div>

    <form action="" method="post">

        <div class="esquerdo">
            <p>Nome:<br> <input type="text" name="nome"></p>
           
            <label for="turma">Turma:</label>

                <select id="turma" name="turma">
                    <option value="" disabled selected>Selecione</option>
                    <option value="1°aii">1°Aii</option>
                    <option value="1°bii">1°Bii</option>
                    <option value="2°aii">2°Aii</option>
                    <option value="2°bii">2°Bii</option>
                    <option value="3°aii">3°Aii</option>
                    <option value="3°bii">3°Bii</option>
                </select>

                <p>Disciplinas Cursadas:</p><br>
                <div id="cursadas">
                        <input type="checkbox" id="mat1" name="mat1" value="psw">
                        <label for="mat1">PSW-1</label>
                        <input type="checkbox" id="mat2" name="mat2" value="pi">
                        <label for="mat2">PI</label>
                        <input type="checkbox" id="mat3" name="mat3" value="mate">
                        <label for="mat3">MATEMÁTICA</label>
                        <input type="checkbox" id="mat4" name="mat4" value="fis">
                        <label for="mat4">FÍSICA</label>
                        <input type="checkbox" id="mat5" name="mat5" value="bd">
                        <label for="mat5">BD</label>
                        <input type="checkbox" id="mat6" name="mat6" value="qui">
                        <label for="mat6">QUÍMICA</label>
                </div>

                <label for="pref">Disciplina Preferida:</label>
                <select id="matpref" name="pref">
                    <option value="" disabled selected>Selecione</option>
                    <option value="mat1">PSW-1</option>
                    <option value="mat2">PI</option>
                    <option value="mat3">MATEMÁTICA</option>
                    <option value="mat4">FÍSICA</option>
                    <option value="mat5">BD</option>
                    <option value="mat6">QUÍMICA</option>
                </select>

        <p>Email:<br> <input type="email" name="emai"></p>
        <p>WhatsApp:<br> <input type="number" name="zap"></p>
        <p>Nascimento:<br> <input type="date" name="nascimento"></p>
        </div>

        <div class="direito">
            <p>Estado(UF):</p>
            <select name="estado" id="estado">
                <option value="" disabled selected>Selecione um estado</option>
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
            </select>
            <p>Cidade:<br> <input type="text" name="cidade" id=""></p>
            <p>Bairro:<br> <input type="text" name="Bairro" id=""></p>
            <p>Endereço:<br><input type="text" name="rua" id=""></p>
        
        </div>
    
    </form>
</body>
</html>