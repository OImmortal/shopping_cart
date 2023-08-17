<?php
ob_start();
require("./Controller/Metods.php");
require("./model/carrinho.php");
require("./model/usuario.php");
require("./model/item.php");
require("./Controller/Database/Data/ItemDAO.php");
require("./Controller/Database/Data/UsuarioDAO.php");
require("./Controller/Database/Data/VendaDAO.php");

session_start();

@$senha = $_POST['senha'];
@$email = $_POST['email'];

$array = [];
foreach (UsuarioDAO::SelectAll() as $key => $value) {
    array_push($array, new Usuario($value['id'], $value['nome'], $value['email'], $value['password']));
}

$arrayItem = [];
foreach (ItemDAO::selectAll() as $key => $value) {
    array_push($arrayItem, new Item($value['id'], $value['nome'], $value['preco']));
}

for ($i = 0; $i < count($array); $i++) {
    if (isset($_POST['acao'])) {
        if (@$email == $array[$i]->getEmail() && $senha == $array[$i]->getPassword()) {
            $_SESSION['id'] = $array[$i]->getId();
            $_SESSION['carrinho'] = [];
            $_SESSION['online'] = true;
            $_SESSION['precoT'] = 0;
            $i = count($array);

        }
    }
}

if (isset($_REQUEST['comprar'])) {
    foreach ($_SESSION['carrinho'] as $key => $value) {
        VendaDAO::Insert($value->getUserID(), $value->getItem()->getNome(), $value->getItem()->getPreco(), $_SESSION['precoT']);
    }
    header("Location: index.php?esvaziar");
}

if (isset($_SESSION['online']) && $_SESSION['online'] == false || !isset($_SESSION['online'])) {
    include("View/index.php");
} else {
    include("View/cart.php");
}



Controller::addCarrinho($arrayItem);

Controller::EsvaziarCarrinho();

Controller::Sair();


ob_end_flush();