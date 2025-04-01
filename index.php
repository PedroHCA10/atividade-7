<?php
// Definir a senha
$senha_predefinida = "123456";

// Continuar tentando a senha até acertar
do {
    echo "Digite a senha: ";
    $senha_digitada = trim(fgets(STDIN));

    if ($senha_digitada === $senha_predefinida) {
        echo "Login bem-sucedido! Você está autenticado.\n";
    } else {
        echo "Senha incorreta. Tente novamente.\n";
    }
} while ($senha_digitada !== $senha_predefinida); // Repetir até a senha ser correta
?>
