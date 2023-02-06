<?php

namespace Item;

abstract class Item implements ItemInterface
{
    protected string $name = "";
    protected int $price = 0;
    protected int $quantity = 0;

    public function getName(): string {
        return $this->name;
    }

    public function getPrice(): int {
        return $this->price;
    }

    public function getQuantity(): int {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return bool
     */
    public function hasEnoughQuantity(int $quantity): bool {
        return $this->quantity >= $quantity;
    }
}