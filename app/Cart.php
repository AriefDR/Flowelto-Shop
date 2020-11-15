<?php

namespace App;


class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $id, $qty)
    {
        $storeItem = ['qty' => 0, 'price' => $item->flower_price, 'item' => $item];
        if ($this->items) {
            if (array_key_exists($id, $this->items)) {
                $storeItem = $this->items[$id];
            }
        }
        $storeItem['qty'] += $qty;
        $storeItem['price'] = $item->flower_price * $storeItem['qty'];
        $this->items[$id] = $storeItem;
        $this->totalQty++;
        $this->totalPrice += $storeItem['price'];
    }
}
