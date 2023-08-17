<?php
class Controller
{


    public static function Sair()
    {
        if (isset($_REQUEST['sair'])) {
            $_SESSION['online'] = false;
            session_destroy();
            header(("Location: index.php"));
        }
    }

    public static function EsvaziarCarrinho()
    {
        if (isset($_REQUEST['esvaziar'])) {
            $_SESSION['carrinho'] = [];
            $_SESSION['precoT'] = 0;
            header(("Location: index.php"));
        }
    }

    public static function addCarrinho($arrayItem)
    {
        if (isset($_REQUEST['itemid'])) {
            $carrinho = new Carrinho($_SESSION['id'], $arrayItem[$_REQUEST['itemid'] - 1]);
            array_push($_SESSION['carrinho'], $carrinho);
            $_SESSION['precoT'] += $carrinho->getItem()->getPreco();
            header(("Location: index.php"));
        }
    }

}