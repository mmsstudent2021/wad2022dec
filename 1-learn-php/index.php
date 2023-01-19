<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      table{
        width:300px;
      }
      td,th{
        border:1px solid black;
      }
      .text-end{
        text-align:right;
      }
      .bg-danger{
        background-color:pink;
      }
    </style>
  </head>
  <body>

    <?php
    
      $name = "hein htet zan";
      $age = 1;
      $status = false;
      $gfCount = 5;

      $fruits = ["apple","ornage","lemon","grape","mango","banana"];
      

      $info = [
        "name" => "mg mg",
        "age" => 15,
        "major" => "bio",
        "job" => null
      ];

      $products = [
        [
          "id" => 1,
          "name"  => "pork",
          "price" => 1200,
          "stock" => 300,
          "unit" => "Kg"
        ],
        [
          "id" => 2,
          "name"  => "chicken",
          "price" => 1000,
          "stock" => 0,
          "unit" => "Kg"
        ],
        [
          "id" => 3,
          "name"  => "pen",
          "price" => 500,
          "stock" => 30,
          "unit" => "piece"
        ],
        [
          "id" => 4,
          "name"  => "egg",
          "price" => 2000,
          "stock" => 25,
          "unit" => "box"
        ],
        [
          "id" => 5,
          "name"  => "book",
          "price" => 300,
          "stock" => 0,
          "unit" => "piece"
        ],
      ];

    ?>
    <h1>Min Ga Lar Par</h1>
    <p>I'm <?= $name ?></p>
    <p>
      I'm <?= $age ?> 
      year<?= $age > 1 ? "s": "" ?> old
    </p>

    <? echo "i'm short"; ?>

    <hr>



    <?php if($gfCount > 0) : ?>

      <h1>girl friend<?= $gfCount>1 ? "s":"" ?> shi tal</h1>

    <?php  else: ?>

      <h1>girl friend ma shi buu</h1>
        
    <?php endif ?>

    <hr>

    <h4>Fruit Lists</h4>
      <ul>
       
        <?php foreach($fruits as $key=>$fruit): ?>
          <li>
            <?= $key. " | " .$fruit; ?>
          </li>
        <?php endforeach; ?>
    
      </ul>

      <hr>

    <h4>Mg Mg Information</h4>

    <ul>
      <?php foreach($info as $key=>$value): ?>
        <li>
          <?= $key." | ".$value ?>
        </li>
      <?php endforeach; ?>
    </ul>

    <hr>
    <h4>Product List</h4>

    <table>
      <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th class="text-end">Price</th>
          <th>Stock</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($products as $product): ?>
          <tr class=" <?= $product['stock'] === 0 ? 'bg-danger':'' ?> ">
            <td><?= $product["id"] ?></td>
            <td><?= $product["name"] ?></td>
            <td class="text-end"><?= $product["price"] ?></td>
            <td><?= $product["stock"]."/".$product["unit"] ?></td>
            
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>


    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

  </body>
</html>
