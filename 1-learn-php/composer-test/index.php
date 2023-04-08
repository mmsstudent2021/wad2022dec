<?php

use App\Db\Connect;
use App\Person;
use chillerlan\QRCode\QRCode;
use Faker\Factory;
use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

require_once "./vendor/autoload.php";


system("clear");

// $faker = Factory::create();

// var_dump($faker->name());
// var_dump($faker->name());
// var_dump($faker->name());

// var_dump($faker->phoneNumber());
// var_dump($faker->address());

// $qr = new QRCode();
// echo "<img src='".$qr->render('MMS IT')."' >";

// create a log channel
// $log = new Logger('name');
// $log->pushHandler(new StreamHandler('logs/message.log', Level::Warning));


// $log->error("Hello Hello");

// $me = new Person("Hein Htet Zan");
// var_dump($me->name);

$conn = new Connect;
var_dump($conn->connection());