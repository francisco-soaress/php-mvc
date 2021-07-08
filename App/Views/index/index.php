<h2>Index</h2>

<?php
echo "<p>Estamos na IndexControlle na action index</p>";


foreach ($this->view->dados as $indice => $produto) {
    echo "{$produto['id']} - {$produto['descricao']} = R$ " . number_format($produto['preco'], 2, ",", ".") . "<br>";
}
?>