<?php

namespace Item;

interface ItemInterface
{
    public function getName(): string;

    public function getPrice(): int;

    public function getQuantity(): int;
}