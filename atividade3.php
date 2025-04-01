<?php

// Simulando um banco de dados com um array de contas
$contas = [
    ["numero" => "12345-6", "cpf" => "111.222.333-44", "saldo" => 1500.75],
    ["numero" => "67890-1", "cpf" => "555.666.777-88", "saldo" => 250.50],
    ["numero" => "13579-2", "cpf" => "999.888.777-66", "saldo" => 3400.00],
    ["numero" => "24680-3", "cpf" => "123.456.789-00", "saldo" => 500.25]
];

// Solicita ao usuário o número da conta
echo "Digite o número da conta para consulta: ";
$numeroConta = trim(fgets(STDIN));

// Busca a conta informada
$contaEncontrada = null;
foreach ($contas as $conta) {
    if ($conta["numero"] === $numeroConta) {
        $contaEncontrada = $conta;
        break;
    }
}

// Exibe as informações da conta
if ($contaEncontrada) {
    echo "\n===== INFORMAÇÕES DA CONTA =====\n";
    echo "Número da Conta: " . $contaEncontrada["numero"] . "\n";
    echo "CPF do Proprietário: " . $contaEncontrada["cpf"] . "\n";
    echo "Saldo: R$ " . number_format($contaEncontrada["saldo"], 2, ',', '.') . "\n";
    echo "================================\n";
} else {
    echo "Conta não encontrada. Verifique o número informado.\n";
}

?>
