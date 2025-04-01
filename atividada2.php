<?php
function patinhosForamPassear() {
    $quantidade = (int)readline("Quantos patinhos foram passear? ");

    while ($quantidade > 0) {
        echo "{$quantidade} patinho" . ($quantidade > 1 ? "s" : "") . " foram passear\n";
        echo "Além das montanhas para brincar\n";
        echo "A mamãe gritou: Quá, quá, quá, quá\n";
        $quantidade--;
        echo "Mas só " . ($quantidade > 0 ? $quantidade : "nenhum") . " patinho voltou...\n\n";
    }

    echo "A mamãe patinha foi procurar\n";
    echo "Além das montanhas na beira do mar\n";
    echo "A mamãe gritou: Quá, quá, quá, quá\n";
    echo "E os patinhos voltaram de lá!\n";
    echo "\nFIM DA MÚSICA\n";
}

// Executa o programa
patinhosForamPassear();
?>
