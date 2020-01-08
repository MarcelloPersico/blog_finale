<?php 
    include_once 'autoload.php';
    $attribute1 = new Attribute(9999, 50);
    $product1 = new Product(123456, "nono", 30.5);
    $product1->addAttribute($attribute1);
    $product2 = new Product(222222, "sisisi", 50);
    $product2->addAttribute($attribute1);
    $product3 = new Product(333333, "forse", 90);
    $product3->addAttribute($attribute1);
    $render1 = $product1->render();
    $render2 = $product2->render();
    $render3 = $product2->render();
    echo $render1 . "</br>" . $render2 . "</br>" . $render3 . "</br>";
?>