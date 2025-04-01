<?php

$senha_predefinida = "123456";

do {
    echo "Digite a senha: ";
    $senha_digitada = trim(fgets(STDIN));

    if ($senha_digitada === $senha_predefinida) {
        echo "Login bem-sucedido! Você está autenticado.\n";
    } else {
        echo "Senha incorreta. Tente novamente.\n";
    }
} while ($senha_digitada !== $senha_predefinida); 
?>
