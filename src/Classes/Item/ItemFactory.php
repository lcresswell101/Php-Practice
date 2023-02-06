<?php

namespace Item;

use Exception;

class ItemFactory
{
    const ITEMs_PATH = "\items";

    protected string $item;

    protected function setItem(string $item): void
    {
        $this->item = sprintf("%s\%s", self::ITEMs_PATH, $item);
    }

    protected function getItem(): string {
        return $this->item;
    }

    private function itemExists(string $item): bool
    {
        $this->setItem($item);

        return class_exists($this->getItem());
    }

    /**
     * @param string $item
     * @return Item
     * @throws Exception
     */
    public function buildItem(string $item): Item
    {
        if ($this->itemExists($item)) {
            $item = $this->getItem();

            return new $item;
        } else {
            throw new Exception('Item doesnt exist');
        }
    }
}