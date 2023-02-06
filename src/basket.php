<?php

$basket = Basket::getInstance();

$items = $basket->getItems();

?>

<ul>

<?php

    foreach ($items as $item):
?>
        <li>
            <?php
                echo "{$item->getName()} - {$item->getModel()} - {$item->getPrice()}"
            ?>
        </li>
<?php
    endforeach;
?>

</ul>