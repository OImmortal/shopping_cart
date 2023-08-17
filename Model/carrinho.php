<?php
class Carrinho
{
    private int $UserID;
    private Item $item;

    public function __construct(int $userId, Item $item)
    {
        $this->UserID = $userId;
        $this->item = $item;
    }

    public function getUserID()
    {
        return $this->UserID;
    }

    public function getItem()
    {
        return $this->item;
    }

}