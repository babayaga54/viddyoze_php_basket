<?php
class Item
{
    private $product;
    private $price;
    private $code;

    function __construct($product, $code, $price)
    {
        $this->product = $product;
        $this->code = $code;
        $this->price = $price;
    }
    //get_item_price
    function get_item_price()
    {
        return $this->price;
    }
    //get_item_code
    function get_item_code()
    {
        return $this->code;
    }
}
