<?php

use Item\Item;
use Session\SessionManager;
use Singleton\Singleton;

final class Basket extends Singleton
{
    private SessionManager $sessionManager;

    public function __construct()
    {
        parent::__construct();

        $this->sessionManager = new SessionManager();
    }

    /**
     * @param Item $item
     * @param int $quantity
     * @return void
     * @throws Exception
     */
    public function addItem(Item $item, int $quantity): void
    {
        if ($item->hasEnoughQuantity($quantity)) {
            $this->sessionManager->append('items', $item);
        } else {
            throw new Exception("Not enough quantity");
        }
    }

    public function getItems(): array
    {
        return $this->sessionManager->get('items') ?? [];
    }
}