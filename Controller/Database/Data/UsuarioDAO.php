<?php
class UsuarioDAO
{
    public static function SelectAll()
    {
        $sql = MySql::Connect()->prepare("SELECT * FROM `usuario`");
        $sql->execute();

        $selectAll = $sql->fetchAll();
        return $selectAll;
    }
}