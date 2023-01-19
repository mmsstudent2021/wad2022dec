<?php

system("clear");
//variable
// $a;
// $a=10;
// echo $a;
$myName = "hein htet zan ";
// $age = 28;
// $myWeight = 230.5;

// print($myName);

// var_dump($myName);
// var_dump($age);
// var_dump($myWeight);

// print("my name is $myName");
// print('my name is $myName');

// $students = ["mg mg","kyaw kyaw","zaw zaw"]; // index array
// $students[3] = "k k";
// $students[4] = "t t";
// $students[7] = "a a";
// $students[0] = "ma ma";

// print_r($students);
// print($students[0]);
// print($students[1]);
// print($students[2]);

// $mySelf = [
//     "name" => "hhz",
//     "age" => 28,
//     "weight" => 230.8,
//     "skill" => ["html","css","js","php"],
// ] ;
//assoc

// print_r($students);
// print_r($mySelf);
// print($mySelf["name"]);
// print($mySelf["age"]);
// print($mySelf["weight"]);
// print_r($mySelf["skill"]);
// print($mySelf["skill"][1]);

// $x=null;

// print($x);

// $true = true;
// $false = false;

// var_dump($false);
// var_dump($true);

// $firstName = "hein";
// $lastName = "htet";

// print($firstName.$lastName);

//function

// function run(){
//     return "I'm run function \n";
// }

// function add($x,$y){
//     return $x+$y;
// }

// function aaa(){
//     $x = 5;
//     $y= 100;
//     // echo $x+$y;
// }

// // print(run());
// // print(add(5,10));
// var_dump(aaa());


// echo count($students);
// echo strtoupper($myName);

// $add = fn($x,$y) => $x+$y;

// echo $add(12,23);

// if(false){
//     echo "this is true";
// }else{
//     echo "this is false";
// }


// $mark = 30;

// if($mark < 40){
//     echo "U are fail";
// }else if($mark < 80){
//     echo "U are pass";
// }else if($mark >= 80){
//     echo "U are d";
// }

// if($mark >= 80){
//     echo "U are d";
// }else if($mark >= 40){
//     echo "U are pass";
// }else if($mark < 40){
//     echo "U are fail";
// }


// $mark = 90;


// switch ($mark) {

//     case $mark>=80;
//     echo "U are D";
//     break;

//     case $mark>=40;
//     echo "U are pass";
//     break;

//     case $mark<40;
//     echo "U are fail";
//     break;

// }


// for($i=1;$i<=10;$i++){
//     if($i === 5){
//         break;
//     }
//     echo "loop $i \n";
// }

// $students = ["mg mg","kyaw kyaw","zaw zaw"];
// $mySelf = [
//     "name" => "hhz",
//     "age" => 28,
//     "weight" => 230.8,
//     "skill" => ["html","css","js","php"],
// ] ;

// foreach($mySelf as $key => $value){
//     echo $key."\n";
//     var_dump($value);
// }

// for($i=0;$i<count($students);$i++){
//     echo ($i+1)." ".$students[$i]."\n";
// }

// foreach($students as $student){
//     echo  $student."\n";
// }

// foreach($students as $key => $value){
//         echo  $key." ".$value."\n";
// }

// $i = 1;

// while($i <= 10){
//     print("While loop $i \n");
//     $i++;
// }

// do{
//     print("While loop $i \n");
//     $i++;
// }while($i <= 10);

// system("clear");

// $a = 10;
// echo $a;

// $a = "aaa";
// echo $a;

// $books = array("a","b","c");

// print_r($books);

// define("MYNAME","Hein Htet Zan");

// echo MYNAME;


// const MYNAME = "hein htet zan";


// echo MYNAME;


// $gg = "this is global \n";

// echo $GLOBALS['gg'];


// function run(){
//     $ll = "this is local \n";
//     global $gg;
//     return $ll;
//     // return $GLOBALS['gg'];
// }

// echo run();

// echo $ll;


// function counter(){
//     static $n = 1;
//     echo $n;
//     $n++;
    
// }

// counter();
// counter();
// counter();
// counter();

// $one = 1;
// $onePlusOne = " $one + $one";
// echo $onePlusOne;


$text = "Min ga lar par khin byar";

// echo strlen($text);
// echo str_word_count($text);
// echo strtolower($text);
// echo strtoupper($text);
// echo ucfirst($text);
// echo ucwords($text);

// echo strrev($text);
// echo str_shuffle($text);
// echo strpos($text,"za");

// echo str_replace("ga","za",$text);

// echo $text[0];
// echo $text[1];
// echo $text[2];
// echo $text[3];

$longText = "PHP 8.2 is released on December 8, 2022, it brings a lot of new features, changes, and more. Today we will go through the essential features and deprecations.

Features:
1- Readonly classes:
Now you can declare your classes as readonly. This feature was introduced in PHP 8.1 but it was only for properties.";

$longMmText = "မြန်မာနိုင်ငံ (အင်္ဂလိပ်: Myanmar သို့မဟုတ် Burma)၊ တရားဝင်အားဖြင့် ပြည်ထောင်စု သမ္မတ မြန်မာနိုင်ငံတော် (Republic of the Union of Myanmar) သည် အရှေ့တောင်အာရှရှိ နိုင်ငံတစ်နိုင်ငံဖြစ်သည်။ အနောက်နှင့် အနောက်မြောက်ဘက်တွင် ဘင်္ဂလားဒေ့ရှ်နိုင်ငံ၊ အိန္ဒိယနိုင်ငံ၊ အရှေ့မြောက်ဘက်တွင် တရုတ်ပြည်သူ့သမ္မတနိုင်ငံ၊ ‌အရှေ့နှင့် အရှေ့တောင်ဘက်တွင် လာအိုနိုင်ငံ၊ ထိုင်းနိုင်ငံတို့နှင့် နယ်နမိတ်ချင်းထိစပ်ပြီး တောင်ဘက်နှင့် အနောက်တောင်ဘက်တွင် ကပ္ပလီပင်လယ်နှင့် ဘင်္ဂလားပင်လယ်အော်တို့ တည်ရှိသည်။ နိုင်ငံ၏မြို့တော်မှာ နေပြည်တော်မြို့ဖြစ်ပြီး အကြီးဆုံးမြို့မှာ ရန်ကုန်မြို့ဖြစ်သည်။[၁]

မြန်မာနိုင်ငံရှိအစောဆုံးသော အခြေချမှုများသည် ပျူမြို့ပြနိုင်ငံများနှင့် မွန်ဘုရင့်နိုင်ငံများ၌ဖြစ်ကြသည်။[၉] အေဒီ ၉ရာစုခန့်တွင် မြန်မာလူမျိုးတို့သည် ဧရာဝတီမြစ်အနီး၌ ပုဂံပြည်ကိုတည်ထောင်ခဲ့ကြရာ မြန်မာ့ယဉ်ကျေးမှု၊ မြန်မာဘာသာစကားစသည်တို့ ပေါ်ပေါက်လာခဲ့သည်။ ပထမမြန်မာနိုင်ငံတော် ပုဂံပြည်သည် မွန်ဂိုကျူးကျော်စစ်ကြောင့် ကျဆုံးခဲ့ရသည်။ ၁၆ ရာစု‌တွင် ဒုတိယမြန်မာနိုင်ငံတော် တောင်ငူအင်ပါယာပေါ်ပေါက်လာခဲ့ပြီး အရှေ့တောင်အာရှသမိုင်း၏ အကြီးဆုံးအင်ပါယာအဖြစ် ခေတ္တရပ်တည်နိုင်ခဲ့သည်။[၁၀] ၁၉ ရာစုတွင် တတိယမြန်မာနိုင်ငံတော် ကုန်းဘောင်အင်ပါယာသည် မျက်မှောက်ခေတ် မြန်မာနိုင်ငံ၏ဒေသများကိုပါမက အာသံနှင့် မဏိပူရဒေသများကိုပါ အုပ်ချုပ်နိုင်ခဲ့သည်။ ဗြိတိသျှအင်ပါယာသည် မြန်မာနိုင်ငံကို ကျူးကျော်စစ်များဆင်နွှဲပြီး သိမ်းပိုက်ခဲ့သည်။ ဒုတိယကမ္ဘာစစ်အတွင်း၌ မြန်မာနိုင်ငံကို ဂျပန်တို့ကခေတ္တသိမ်းပိုက်ထားခဲ့ပြီး မဟာမိတ်နိုင်ငံတို့က ပြန်လည်သိမ်းယူခဲ့သည်။ ၁၉၄၈ ခုနှစ်တွင် မြန်မာနိုင်ငံသည် ဗြိတိသျှတို့ထံမှ လွတ်လပ်ရေးကိုရရှိခဲ့သည်။";


// echo substr($text, 0, 10);
// echo substr($longText, 0, 100);
// echo substr($longMmText, 0, 100); // not working correctly on UTF-8
// echo mb_substr($longMmText, 0, 100); // work with mm text


// echo str_pad("AAA",10,"0",STR_PAD_LEFT);
// echo "\n";

// echo str_pad("AAA",10,"0",STR_PAD_RIGHT);
// echo "\n";

// echo str_pad("AAA",10,"0",STR_PAD_BOTH);

// string to array

// echo $text;
// echo "\n";

// print_r(explode(" ",$text));

// $arr = ["a","b","c","d"];

// echo implode("---",$arr);

// $name = "aa hein htet aaa";

// echo strlen(trim($name,"a"));

// $h1 = "<h1>min ga lar par</h1>";

// echo htmlentities($h1);

// $car = "red car";
// $bus = "bus";

// echo md5($car);

// echo "\n";

// echo md5($bus);

// echo "\n";


// echo PHP_INT_MAX;
// echo "\n";
// echo PHP_INT_MIN;
// echo "\n";
// echo PHP_INT_SIZE;

// var_dump(1.2e3);

// var_dump(PHP_INT_MAX * 1000);

// var_dump(is_infinite(123e10000));

// var_dump("abc"-1);

// echo max(0,150,30,20, -8, -200);

// echo sqrt(890);

// echo pow(2,5);

// echo round(12.634435324,3);
// echo floor(12.734435324);


// echo rand(1,10);
// echo mt_rand(1,10);

// echo number_format(100000000.74345,3,".","-");

var_dump("1213"+1);



echo "\n";

