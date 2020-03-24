<?php
require_once 'item.php';
require_once 'db_mock.php';


class Cart
{

    private $items = array();
    //
    function add_item($new_item)
    {
        $db_mock = new DbMock();
        $current_item = $db_mock->get_item_by_code($new_item);
        array_push($this->items, $current_item);
    }
    //
    public function get_cart_total()
    {
        $saldo = 0;
        $no_of_red_widgets_ordered = 0;
        foreach ($this->items as $item) {

            //Check if ordered item is redc
            if ($item->get_item_code() == 'R01')
                $no_of_red_widgets_ordered++;

            //If item is red, and has ordered for second time
            if ($no_of_red_widgets_ordered == 2 && $item->get_item_code() == 'R01')
                $saldo += $item->get_item_price() / 2;
            else $saldo += $item->get_item_price();
        }

        return $saldo + $this->delivery_cost($saldo);
    }

    function delivery_cost($current_saldo)
    {
        if ($current_saldo < 50)
            return 4.95;
        else if ($current_saldo < 90)
            return 2.95;
        else return 0;
    }
}
