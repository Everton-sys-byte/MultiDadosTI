<?php
/* INCLUINDO A CLASSE DATAREQUEST */
include_once('../DataRequest.php');

/* a resposta desta requisição deve me retornar um json */
header('Content-Type: application/json');

function retrieveDataInformation($type)
{
    $dataRequest = new DataRequest();
    switch ($type) {
        case 'fornecedores':
            echo json_encode($dataRequest->dadosFornecedores());
            break;
        case 'usuarios':
            echo json_encode($dataRequest->dadosUsuarios());
            break;
        case 'clientes':
            echo json_encode($dataRequest->dadosClientes());
            break;
    }
}

//var_dump($_GET['data']);
if (isset($_GET['data']))
    retrieveDataInformation($_GET['data']);
/*  */