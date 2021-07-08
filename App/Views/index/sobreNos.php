<h1>Sobre Nós</h1>
<hr>
<?php foreach ($this->view->informacoes as $indice => $info) { ?>

    <h3><?= $info['titulo'] ?></h3>
    <p><?= $info['descricao'] ?></p>
    <hr>

<?php } ?>