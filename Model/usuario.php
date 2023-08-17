<?php
class Usuario
{
    private int $id;
    private string $nome;
    private string $email;
    private string $password;

    public function __construct(int $id, string $nome, string $email, string $password)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->password = $password;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }
}