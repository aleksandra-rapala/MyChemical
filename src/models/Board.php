<?php

class Board
{
    private $id_board;

    private $likesTables;
    private $likesCalculators;


    public function __construct(int $id_board) {
        $this->id_board = $id_board;
    }


    public function getIdBoard(): int
    {
        return $this->id_board;
    }


}