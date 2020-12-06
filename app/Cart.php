<?php

namespace App;

    /**
     * Sebuah kelas Cart
     * Yang di gunakan untuk menyimpan data
     * Pada session / local storage
     */
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
    /**
     * Fungsi ini akan menyimpan data ke Session
     * Jika items belum ada maka akan di buat array baru
     * Jika items sudah ada maka akan di tambahkan ke array yang sudah ada
     */
    public function add($item, $id, $qty)
    {
        $storeItem = ['qty' => 0, 'price' => $item->flower_price, 'item' => $item, 'img' => $item->flower_img];
        if ($this->items) {
            if (array_key_exists($id, $this->items)) {
                $storeItem = $this->items[$id];
            }
        }
        $storeItem['img'] = $item->flower_img;
        $storeItem['qty'] += $qty;
        $storeItem['price'] = $item->flower_price * $storeItem['qty'];
        $this->items[$id] = $storeItem;
        $this->totalQty += $qty;
        $this->totalPrice += $item->flower_price * $qty;
    }
    /**
     * Fungsi ini akan mengupdate cart
     * Jika items qty yang di input user 0 maka akan di delete
     * Jika items qty tidak 0 maka akan di tambahkan qty baru ke qty lama
     */
    public function update($item, $id, $qty)
    {
        if ($qty > 0) {
            $this->totalQty = ($this->totalQty - $this->items[$id]['qty']) + $qty;
            $this->items[$id]['qty'] = 0 + $qty;
            $this->totalPrice = ($this->totalPrice - $this->items[$id]['price']) + $item->flower_price * $qty;
            $this->items[$id]['price'] = $item->flower_price * $qty;
        } else {
            $this->totalQty = $this->totalQty - $this->items[$id]['qty'];
            $this->totalPrice = $this->totalPrice - $this->items[$id]['price'];
            unset($this->items[$id]);
        }
    }
}
