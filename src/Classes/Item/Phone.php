<?php

namespace Item;

class Phone extends Item
{
    protected string $name = 'iPhone';
    protected int $price = 400;
    protected int $quantity = 3;
    protected string $model = '8s';

    public function getModel(): string
    {
        return $this->model;
    }
}