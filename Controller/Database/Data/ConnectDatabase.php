<?php
class MySql
{

    private static string $username = "root";
    private static string $password = "adminadmin";
    private static string $database = "carrinho_php";

    public static function Connect()
    {
        try {
            $conn = new PDO("mysql:host=localhost;dbname=" . self::$database, self::$username, self::$password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conn;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

}