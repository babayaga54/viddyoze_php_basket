<?php
class DbMock
{

    public $all_items = array();

    function __construct()
    {
        $this->all_items['R01'] = new Item('Red Widget', 'R01', 32.95);
        $this->all_items['G01'] = new Item('Green Widget', 'G01', 24.95);
        $this->all_items['B01'] = new Item('Blue Widget', 'B01',  7.95);
    }

    public function get_item_by_code($code)
    {
        return $this->all_items[strtoupper(trim($code))];
    }
}
