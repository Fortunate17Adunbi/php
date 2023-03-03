<?php
#   JSON : JavaScript Object Notation
// it is used for storing and exchanging data
// some php function to handle JSOn
// json_encode(); // used to encode value into json format
// json_decode(); // used to decode json object into php object of associative array

#   encoding php associateive array into json object
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
echo json_encode($age);echo "<br>";
// encoding php indexed array into josn array
$car = array("Volvo", "BMW", "Toyota");
echo json_encode($car);echo "<br>";

#   decoding
// used to decode json object into php associative array/object
// the json_decode() returns an object by default but setting the second parameter to be true returns an associative array
// decoding into php object
$jsonObj = '{"Peter":35,"Ben":37,"Joe":43}';
var_dump(json_decode($jsonObj));echo "<br>";

// decoding into php associative array
var_dump(json_decode($jsonObj, true));echo "<br>";echo "<br>";

$obj = json_decode($jsonObj);
$arr = json_decode($jsonObj, true);


// accessing the decode value
// we can use the object calling method if it is was decoded into object
// or associative array calling methid if it was decoded into array
// object calling
echo $obj->Peter;echo "<br>";
echo $obj->Ben;echo "<br>";
echo $obj->Joe;echo "<br>";echo "<br>";

// arrray call
echo $arr['Peter'];echo "<br>";
echo $arr['Ben'];echo "<br>";
echo $arr['Joe'];echo "<br>";echo "<br>";

#   looping through the values 
// of object
foreach ($obj as $key => $value) {
    echo  $key."=>".$value;
    echo "<br>";
}
echo "<br>";
// of array
foreach ($arr as $key => $value) {
    echo $key."=>".$value;
    echo "<br>";
}



