<?php
    $dados = array(
                array('nome' => 'Pá', 'desc' =>'Cabo de madeira com ponta de aço inoxidável', 'preco' =>10),
                array('nome' => 'Enxada', 'desc' =>'Cabo de madeira com ponta de aço inoxidável', 'preco' =>15),
                array('nome' => 'Brita', 'desc' =>'Saco de pedra com 3 quilos', 'preco' =>50),
                array('nome' => 'Areia', 'desc' =>'Saco de areia 3 quilos', 'preco' =>20),
                array('nome' => 'Gesso', 'desc' =>'Saco de gesso 500 gramas', 'preco' =>10)
             );

    header('Content-type: application /json');
    echo json_encode($dados);        
?>