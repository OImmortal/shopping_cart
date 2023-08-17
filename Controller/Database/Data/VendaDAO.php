<?php
class VendaDAO
{

    public static function Insert(int $UserID, string $itemNome, float $itemPreco, float $precoTotal)
    {
        $sql = MySql::Connect()->prepare("INSERT INTO vendas (`user_id`,`item_nome`, `item_preco`, `preco_total`) VALUES(?,?,?,?)");
        $sql->execute(array($UserID, $itemNome, $itemPreco, $precoTotal));

    }

}