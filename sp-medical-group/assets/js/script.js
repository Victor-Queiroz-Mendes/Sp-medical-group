document.getElementById('patientForm').addEventListener('submit', function(event) {
    event.preventDefault();

    // Captura os valores dos campos do formulário
    const nome = document.getElementById('nome').value;
    const data_nascimento = document.getElementById('data_nascimento').value;
    const cpf = document.getElementById('cpf').value;
    const endereco = document.getElementById('endereco').value;
    const telefone = document.getElementById('telefone').value;
    const email = document.getElementById('email').value;
    const especialidade_atendida = document.getElementById('especialidade_atendida').value;
    const historico_consultas = document.getElementById('historico_consultas').value;

    // Cria uma nova linha para a tabela
    const table = document.getElementById('patientsTable').getElementsByTagName('tbody')[0];
    const newRow = table.insertRow();

    // Insere as células com os dados capturados
    newRow.insertCell(0).textContent = nome;
    newRow.insertCell(1).textContent = data_nascimento;
    newRow.insertCell(2).textContent = cpf;
    newRow.insertCell(3).textContent = endereco;
    newRow.insertCell(4).textContent = telefone;
    newRow.insertCell(5).textContent = email;
    newRow.insertCell(6).textContent = especialidade_atendida;
    newRow.insertCell(7).textContent = historico_consultas;

    // Limpa o formulário após o envio
    document.getElementById('patientForm').reset();
});
