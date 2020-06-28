<?php
namespace tutorial;

echo __DIR__ . "</br>";
echo __FILE__ . "</br>";

function superfunction(){
    echo __FUNCTION__."</br>";
}

class hyperClass{
    public function echo_classname(){
        echo __CLASS__."</br>";
        echo __METHOD__."</br>";
    }
}

superfunction();

$testObj = new hyperClass;
$testObj -> echo_classname();

echo __LINE__."<br/>";
echo __NAMESPACE__."<br/>";

$x = array("blue", "green", "orange");

print_r($x);

for($i=0;$i<count($x);$i++){
    echo $x[$i]."<br>";
}

foreach($x as $val) {
    echo $val."<br>";
}

foreach($x as $key => $value) {
    echo "$key: $value</br>";
}

$super = array(1=>2, 5, 8, 3, "test");

$flag = array_key_exists(0, $super);
echo $flag;

$flag = in_array(2, $super);
echo $flag;

$flag = array_keys($super);
print_r($flag);

$flag = array_values($super);
print_r($flag);

$super = array(2,5,8,3,9);
print_r(rsort($super));
print_r($super);

$super = array(1=>2, 5=>5, 6=>8, 12=>3, 13=>9);
print_r(asort($super));
print_r($super);

$super = array(1=>2, 5=>5, 6=>8, 12=>3, 2=>9);
print_r(ksort($super));
print_r($super);

echo "<br>";

define("PI", 3.14);
echo PI;

function circle($radius){
    echo PI * ($radius * $radius);
}

circle(4);
