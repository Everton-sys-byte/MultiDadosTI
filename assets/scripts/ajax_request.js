
$('.dashboard-stat .more').click((e) => {
    let clickedIndex = $('.dashboard-stat .more').index(e.target)
    switch (clickedIndex) {
        case 0:
            getDataRequest('clientes')
            break;
        case 1:
            getDataRequest('usuarios')
            break;
        case 2:
            getDataRequest('fornecedores')
            break;
    }
})

function getDataRequest(type) {
    /* VOCÊ PODE USAR ESSA VARIÁVEL PARA PEGAR A URL BASE E COLOCAR EM URL */
    let base_url = window.location.origin;

    $.ajax({
        /* ATENÇÃO, MUDAR A URL DEPENDENDO DE ONDE ISSO FOR TESTADO
         (NO MEU CASO FOI MEU LOCALHOST | NÃO TEM VARIÁVEL DE AMBIENTE) */
        url: `http://localhost/PHP/teste_php_multidadosti/API/Internal_API.php?data=${type}`,
        method: 'GET',
        dataType: 'json'
    }).done(function (response) {
        createTableHead(type)
        let tabelaBody = $('.table tbody')

        /* LIMPA O CORPO DA TABELA PARA NÃO REPETIR OS DADOS */
        tabelaBody.empty();

        /* INSERINDO INFORMAÇÕES NA TABELA DE ACORDO COM O TIPO DE DADO*/
        response.forEach((item, index) => {
            let linha = $('<tr></tr>')

            let colunaIndex = $('<td></td>').text(index)
            let colunaNome = $('<td></td>').text(item.nome)
            let colunaCPF = $('<td></td>').text(item.cpf)


            linha.append(colunaIndex)
            linha.append(colunaNome)
            linha.append(colunaCPF)

            if (type === 'clientes' || type === 'usuarios') {
                let colunaEndereco = $('<td></td>').text(item.endereco)
                let colunaTelefone = $('<td></td>').text(item.telefone)
                linha.append(colunaEndereco)
                linha.append(colunaTelefone)
            }

            if (type === 'usuarios') {
                let colunaUsuario = $('<td></td>').text(item.usuario)
                linha.append(colunaUsuario)
            }

            if (type === 'fornecedores') {
                let colunaCidade = $('<td></td>').text(item.cidade)
                linha.append(colunaCidade)
            }

            if (type === 'clientes' || type === 'fornecedores') {
                let colunaEmail = $('<td></td>').text(item.email)
                linha.append(colunaEmail)
            }
            tabelaBody.append(linha)
        });
    })
}

function createTableHead(type) {
    let tabelaHead = $('.table thead tr')
    tabelaHead.empty()

    /* estas colunas existem para os três tipos de dados */
    tabelaHead.append('<th>#</th>')
    tabelaHead.append('<th>Nome</th>')
    tabelaHead.append('<th>CPF</th>')

    if (type === 'fornecedores') {
        tabelaHead.append('<th>Cidade</th>')
    }

    if (type === 'clientes' || type === 'usuarios') {
        tabelaHead.append('<th>Endereço</th>')
        tabelaHead.append('<th>Telefone</th>')
    }

    if (type === 'clientes' || type === 'fornecedores') {
        tabelaHead.append('<th>Email</th>')
    }

    if (type === 'usuarios') {
        tabelaHead.append('<th>Usuario</th>')
    }
}

/* COMEÇAR PEGANDO DADOS DE USUÁRIOS */
$(document).ready(() => {
    getDataRequest('usuarios')
})


