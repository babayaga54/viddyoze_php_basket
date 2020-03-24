# viddyoze_php_basket

## Usage

You can change items features from Database at db_mock.php

You can change and print Basket at index.php

### creating new basket example

```bash
$cart_1 = new Cart();
$cart_1->add_item('B01');
$cart_1->add_item('G01');

$c1_total = $cart_1->get_cart_total();
```


### 1. Class Item (at item.php) in this file there are functions for Items

For get price of item
```bash
function get_item_price()
```

For get code number of item
```bash
function get_item_code()
```


### 2. Class Card(at cart.php) in this file there are functions for Basket


Add item to the shopping cart

```bash
function add_item($new_item)
```

Print total cost of the basket

```bash
function get_cart_total()
```

Print total delivery cost 

```bash
function delivery_cost($current_saldo)
```
