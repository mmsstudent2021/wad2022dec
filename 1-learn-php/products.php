<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

$productText = file_get_contents("https://fakestoreapi.com/products/");

$products = json_decode($productText,true);

// print_r($products);
// print_r($products[1]);

function star($count){
    $result = "";
    for($i=1;$i<$count;$i++){
        $result .= "* ";
    }
    return $result;
}


?>

<?php foreach($products as $product): ?>
<div class="card">
    <h3><?= $product["title"] ?></h3>
    <p>
        <?= $product["description"] ?>
    </p>
    <img src="<?= $product["image"] ?>" height="200" alt="">
    <div class="">
        $<?= $product["price"]  ?> / <?= star($product["rating"]["rate"]) ?>
    </div>
</div>

<hr>
<?php endforeach; ?>

    
</body>
</html>