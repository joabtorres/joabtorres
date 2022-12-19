<?php

router::get('', function ($arg) {
    $view = template::getInstance();
    $dados = array();
    $crudModel = crudModel::getInstance();
    $resultado = $crudModel->read('SELECT * FROM projetos ORDER BY ano DESC');
    $dados['projetos'] = (!empty($resultado)) ? $resultado : '';
    $view->loadTemplate('home', $dados);
});