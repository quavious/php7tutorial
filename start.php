<?php

$var1 = 2;
$var2 = 3;

$str = "Hello";
$str .= " World!";

if ($var2 < $var1) {
    echo "This is bigger than 2";
} else {
    echo "Nope";
}

echo ($var1===$var2) ? "SPAM" : "POTATO";

$spam = $var1 <=> $var2;

echo $spam;
echo $str;

$degree = 20;

do {
    echo "It is rather warm <br>";
    $degree++;
} while($degree<25);

for($idx=10, $flag=0;$idx<=20;$idx+=2){
    if($flag==0){
        echo $idx.' ';
        $flag = 0;
    } else {
        $flag = 0;
        continue;
    }
}

for ($col = 'A'; $col != 'AA'; $col++){
    echo $col.' ';
}
# WOW

echo "<br>";

$arr = array(111, 'blue', 'green');
print_r($arr[0]);

$arr = [1,2,3,4,5];
print_r($arr);

$arrX = array(0=>"TEST", 2=>"VALUE");
print_r($arrX);

$arrY = [1 => "KEY", 10 => "VALUE", 5 => "MID"];
print_r($arrY);

$arr = array('color_1' => 'red');
print_r($arr);

array_push($arrX, "NOPE");
print_r($arrX);

array_unshift($arrX, "NONE");
print_r($arrX);

array_pop($arrX);
print_r($arrX);

array_shift($arrX);
print_r($arrX);
