<?php

include_once 'Model.php';

class VeiculoModel extends Model {

    //setando nome da tabela
    public function __construct()
    {
        Model::setTable("veiculo");
    }
}
?>