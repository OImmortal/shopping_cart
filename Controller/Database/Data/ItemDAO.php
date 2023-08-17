<?php
include(__DIR__ . "/ConnectDatabase.php");

class ItemDAO
{
    public static function selectAll()
    {
        $sql = MySql::Connect()->prepare("SELECT * FROM `itens`");
        $sql->execute();

        $selectAll = $sql->fetchAll();
        return $selectAll;
    }
}