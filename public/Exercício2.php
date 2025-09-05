<?php
$carrinho_de_compras = [
    [
        "nome" => "Laranja",
        "preco_unitario" => 50,
        "quantidade" => 2
    ],
    [
        "nome" => "Maça",
        "preco_unitario" => 120,
        "quantidade" => 1
    ],
    [
        "nome" => "Beringela",
        "preco_unitario" => 200,
        "quantidade" => 1
    ]
];

$total = 0;
foreach ($carrinho_de_compras as $produto) {

    $nome = $produto["nome"];
    $preco = $produto["preco_unitario"];
    $quantidade = $produto["quantidade"];
    $subtotal = $preco * $quantidade;

    echo "Produto: $nome <br>- Preço: $preco <br> - Quantidade: $quantidade<br> - subtotal: $subtotal<br>";

    $total += $subtotal;
}
echo "Total: $total<br>";
