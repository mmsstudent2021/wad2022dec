<?php
system("clear");

$fruits = ["apple","ornage","lemon","grape","mango","banana"];

// sort($fruits);
// rsort($fruits);


// array_push($fruits,"aaa");
// array_push($fruits,"bbb");
// array_push($fruits,"ccc");
// array_unshift($fruits,"111");
// array_unshift($fruits,"222");
// array_unshift($fruits,"333");

// array_pop($fruits);
// array_pop($fruits);
// array_pop($fruits);

// array_shift($fruits);
// array_shift($fruits);
// array_shift($fruits);

// $arr = array_chunk($fruits,2);

// $arr = [1,2,3,"apple"];

// print_r(array_merge($fruits,$arr));

// $nums = [12,4,6];
// print_r(array_sum($nums));
// print_r(array_product($nums));

// print_r($fruits[array_rand($fruits)]);
// print_r(array_rand($fruits,5));

// print_r(array_slice($fruits,0,2));
// print_r($fruits);

// print_r(array_splice($fruits,3,2,["aaa","bbb"]));
// print_r($fruits);

// print_r(current($fruits));
// print_r(end($fruits));

// print_r(in_array("ball",$fruits));// index

// $arr = ["a","b","c"];

// [$one,$two,$three] = $arr;

// echo $one;

// $nums = range(1,100,5);
// print_r($nums);

// shuffle($fruits);
// $arr = array_reverse($fruits);
// print_r($arr);

// $arr = ["a","b","a","c","b","r","a"];

// print_r(array_unique($arr));

// $str = "min ga lar par byar";
// print_r(str_split($str,2));
// print_r(explode(" ",$str));

// echo implode("---",$fruits);




// $info = [
//     "name" => "mg mg",
//     "age" => 15,
//     "major" => "bio",
//     "job" => null
// ];


// echo array_search(15,$info);
// echo array_key_exists("agee",$info);

// print_r(array_keys($info));
// print_r(array_values($info));
// print_r($info);

// asort($info);
// arsort($info);
// ksort($info);
// krsort($info);


// print_r($info);

// $products = [
//     [
//       "id" => 1,
//       "name"  => "pork",
//       "price" => 1200,
//       "stock" => 300,
//       "unit" => "Kg"
//     ],
//     [
//       "id" => 2,
//       "name"  => "chicken",
//       "price" => 1000,
//       "stock" => 0,
//       "unit" => "Kg"
//     ],
//     [
//       "id" => 3,
//       "name"  => "pen",
//       "price" => 500,
//       "stock" => 30,
//       "unit" => "piece"
//     ],
//     [
//       "id" => 4,
//       "name"  => "egg",
//       "price" => 2000,
//       "stock" => 25,
//       "unit" => "box"
//     ],
//     [
//       "id" => 5,
//       "name"  => "book",
//       "price" => 300,
//       "stock" => 0,
//       "unit" => "piece"
//     ],
//   ];


//   print_r(array_map(function($product){
//     // $product["price"] += 100;
//     // $product["status"] = $product["stock"] === 0 ? "out of stock" : "available";
//     return [
//         "name" => $product["name"],
//         "price" => $product["price"]
//     ];
//   },$products));

// $p = array_map(fn($product)=> [
//     "name" => $product["name"],
//         "price" => $product["price"]
// ],$products);

// print_r($p);


// $p = array_filter($products,fn($product)=>$product['price']>=1000);

// print_r($p);

// $nums = [1,5,36,6];
// echo array_sum($nums);

// echo "\n";

// echo array_reduce($products,fn($pv,$cv)=>$pv+$cv["price"],0);

// $json = file_get_contents("data.json");

// // json text => php array
// $arr = json_decode($json,true);

// echo $json;

// print_r($arr);

// echo $arr["name"];
// echo $arr["age"];
// echo $arr->name;
// echo $arr->age;

// $exchange = file_get_contents("https://forex.cbm.gov.mm/api/latest");

// $exchangeArr = json_decode($exchange,true);

// $rates = $exchangeArr["rates"];

// echo $rates["USD"];
// echo $exchange;
// print_r();

// $productText = file_get_contents("https://fakestoreapi.com/products/");

// $products = json_decode($productText,true);

// // print_r($products);
// print_r($products[1]);

// php array => json text

// $arr = ["a","b","c"];
// $str = json_encode($arr);
// echo $str;

// print_r($_SERVER);


// echo __FILE__;
// echo "\n";
// echo __DIR__;
// echo "\n";
// echo PHP_VERSION;
// echo "\n";
// echo PHP_OS;

//casting

// $a = 4;
// echo $a;
// $a = "hello";
// echo $a;


// $weight =(int) 230.85;

// var_dump($weight);

// $arr = (object) [
//     'a' => "a",
//     "b" => "b",
//     "c" => "c"
// ];
// echo $arr->a;
// var_dump($arr);

// $a = (bool) "";

// var_dump($a);

// function add($x):int{
//     return $x;
// }

// var_dump(add("hello"));

function run(int $x):int{
    return $x;
}

var_dump(run("hello"));








      