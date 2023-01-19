<?php

$apiData = file_get_contents("http://forex.cbm.gov.mm/api/latest");
$apiData = json_decode($apiData, true);
$rates = $apiData["rates"];

// print_r($_POST);

// 1 usd => mmk
// 100usd * mmk rate ( usd known )
// 2 mmk => usd
// mmk/usd rate ( usd know )
// 3 usd => sgd
// usd => mmk => sgd

if (isset($_POST["calc"])) :
    $amount = $_POST["amount"];
    $from = $_POST["from"];
    $to = $_POST["to"];

    // echo $amount;
    // echo "<br>";
    // echo str_replace(",","",$rates[$from]);

    $mmk = $amount * str_replace(",", "", $rates[$from]);
    $result = $mmk / str_replace(",", "", $rates[$to]);
    $showResult = round($result,2);

    $data = fopen("data","a");
    fwrite($data, $amount.$from." to ". $showResult.$to."\n" );
    fclose($data);


?>

    <div class=" bg-light border-3 p-3">
        <p class=" mb-0 text-black-50">
            From <?= $amount ?> <?= $from ?> to <?= $to ?>
        </p>
        <h1 class=" fw-bold">
            <?= $showResult ?>
            <?= $to ?>
        </h1>
    </div>

<?php endif; ?>