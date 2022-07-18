<?php

function trataNome($nome)
{

    if (!$nome) {

        throw new Exception("Nenhum nome foi inserido.", 1);

    }

    echo ucfirst($nome)."<br>";

}

try {

    trataNome("Marcone");
    trataNome("");

} catch (Excerption $e) {

    echo $e-getMessage();

} finally {

    echo "executou o bloco try!";

}

?>