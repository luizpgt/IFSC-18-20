<?php

//include
include '../../control/ClienteController.php';
include '../../model/MunicipioModel.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Cliente</title>
</head>

<body>
<div class='center'>
    <?php

    $objClienteController = new ClienteController();

    if (!empty($_POST)) {
        //chama o metodo UPDATE recebendo os dados através do metodo $_POST
        $objClienteController->update($_POST);

        header("Location: listarClienteView.php");
    }   


    $objCliente = $objClienteController->find($_GET['id']);

    $objMunicipioModel = new MunicipioModel();
    $resultMunicipios =  $objMunicipioModel::selectAll();

    ?>

    <form action="formEditarClienteView.php" method="POST">
        <!-- Input Hidden tag que fica oculta para receber o valor do ID do form--->
        <!-- passo os id para a propriedade value -->
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

        <label>Nome</label>
        <!-- passo valor do atributo nome para a propriedade value -->
        <input type="text" name="nome" value="<?php echo $objCliente->nome; ?>"> <br>

        <label>CPF</label>
        <!-- passo valor do atributo cpf para a propriedade value -->
        <input type="text" name="cpf" value="<?php echo $objCliente->cpf; ?>"> <br>

        <label>Telefone</label>
        <!-- passo valor do atributo telefone para a propriedade value -->
        <input type="text" name="telefone" value="<?php echo $objCliente->telefone; ?>"> <br>

        <label>E-mail</label>
        <!-- passo valor do atributo e-mail para a propriedade value -->
        <input type="text" name="email" value="<?php echo $objCliente->email; ?>"> <br>

        <label>Município</label>
        <select name="municipio_id">
            <?php
            //percorre os municipios 
            foreach ($resultMunicipios as $itens) {
                // operador ternario IF para verificar se o id do municipio da listagem é o mesmo ID
                // do campo municipio_id do cliente
                $selected = ($itens['id'] == $objCliente->municipio_id ? "selected" : "");
                // se a operação a cima for verdadeiro ele vai setar o municipio correto na Tag Select
                echo "<option value='" . $itens['id'] . "' " . $selected . " >" .
                  $itens['nome'] . "</option>";
            }
            ?>
        </select>
        <br>
        <label>Ano de Nascimento</label>
        <!-- passo valor do atributo data_nascimento para a propriedade value -->
        <input type="date" name="data_nascimento" value="<?php echo $objCliente->data_nascimento; ?>"> <br>

        <input type="submit" value="Editar">
       
    </form>
    <a href="listarClienteView.php"><button>Voltar</button></a>
    </div>
</body>
    <!-- css -->
    <style>
        body{
            background-color: #CCC;
        }
        .center{
            position: absolute;
            left: 50%;
            transform: translate(-50%, 0);  
        } 
    </style>

</html>