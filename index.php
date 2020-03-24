<?php
date_default_timezone_set('Europe/Istanbul');
require_once 'cart.php';

//Test Area

//Test Case 1
$cart_1 = new Cart();
$cart_1->add_item('B01');
$cart_1->add_item('G01');

$c1_total = $cart_1->get_cart_total();

//Test Case 2
$cart_2 = new Cart();
$cart_2->add_item('R01');
$cart_2->add_item('R01');

$c2_total = $cart_2->get_cart_total();


//Test Case 3
$cart_3 = new Cart();
$cart_3->add_item('R01');
$cart_3->add_item('G01');

$c3_total = $cart_3->get_cart_total();


//Test Case 4
$cart_4 = new Cart();
$cart_4->add_item('B01');
$cart_4->add_item('B01');
$cart_4->add_item('R01');
$cart_4->add_item('R01');
$cart_4->add_item('R01');

$c4_total = $cart_4->get_cart_total();


?>

<h2>Acme Widget Co</h2>
<table border="1">
    <tr>
        <th>Product</th>
        <th>Total</th>
    </tr>
    <tr>
        <td>B01,G01</td>
        <td>$<?php echo $c1_total ?></td>
    </tr>

    <tr>
        <td>R01,R01</td>
        <td>$<?php echo $c2_total ?></td>
    </tr>

    <tr>
        <td>R01,G01</td>
        <td>$<?php echo $c3_total ?></td>
    </tr>

    <tr>
        <td>B01,B01,R01,R01,R01</td>
        <td>$<?php echo $c4_total ?></td>
    </tr>

</table>