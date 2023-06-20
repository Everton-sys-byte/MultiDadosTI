<?php

class Item
{
    public static $listItens = [
        /* ITENS DO CADASTRO CADASTRO */
        'cadastro' => [
            ['name' => 'Cliente', 'url' => 'cliente.php'],
            ['name' => 'Fornecedor', 'url' => 'fornecedor.php'],
            ['name' => 'Usuário', 'url' => 'usuario.php'],
            /* PRODUTOS QUE FORAM PEDIDOS PARA SEREM ADICIONADOS */
            ['name' => 'Produtos', 'url' => 'produtos.php'],
            ['name' => 'Perfil de acesso', 'url' => 'perfil_acesso.php'],
        ],

        /* ITENS DO RELATÓRIO RELATÓRIO */
        'relatorio' => [
            ['name' => 'Cliente', 'url' => 'cliente_relatorio.php'],
            ['name' => 'Faturamento', 'url' => 'faturamento_relatorio.php'],
            /* PRODUTOS QUE FORAM PEDIDOS PARA SEREM ADICIONADOS */
            ['name' => 'Produtos', 'url' => 'produtos_relatorio.php'],
        ]
    ];


    public static function getItensAsc(){
        /* ORDENA AS CHAVES CADASTRO E RELATÓRIO EM ORDEM ALFABÉTICA */
        sort(Item::$listItens['cadastro']);
        sort(Item::$listItens['relatorio']);

        return Item::$listItens;
    }
}
