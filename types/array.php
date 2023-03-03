<?php   
    #   php arrays
    // arrays in php is an orderd map. map: is a type that allocates values to key
    // this type(map) is used for various purposes 
    // it can be treated as an array, list(vector) hash table (an implementation of a map), dictionary,collection, stack, queue e.t.c
    // arrays are created with the 'array()' construct it takes any number of comma seperated 'key => value' pair as argument
    // array(
    //     key  => value,
    //     key2 => value2,
    //     key3 => value3,
    //     ...
    // )
    // the comma after the last element can be ommitted(optional) 
    // this array(1, 2) is preffered over array(1, 2, )
    // but the tailing comma is preffered for multi-line 
    // we can also uses the short array syntax e.g $array = [1, 2]
    
    #   declearing array
    $a = ["php", 1, true];

    #   array casting
    // key value of arrays are either int or string while value can be any data type
    // floats are cast to int e.g 7.8 will be cast to 7
    // bools are cast to int with true stored as one and false as 0
    // string containing valid number will be cast as int e.g "8" will be cast as int 8
    // string with invalid combination of int are not cast "o8" is not int
    $array = array(
        1 => "a",
        "1" => "b",
        1.5 => "c",
        true => "d"
    );
    var_dump($array);
    echo "<br>";
    // it cast all the value to one and overwrite each occurence of 1 the last update was "d"
    // we can use both int and string as key value
    // $array = array(
    //     "foo" => "bar",
    //     "bar" => "foo",
    //     100   => -100,
    //     -100  => 100,
    // );
    #   null key
    // specified as this  ('' => "3")

    #   indexed arrays without keys
    $array2 = array("foo", "bar", "php", "reference");
    var_dump($array2);
    echo "<br>";

    #   key not on all element
    // array determine index based on the last largest integer key
    $array3 = array(
        "a",
        "b",
        "c",
        6 => "d",
        "e"
    );
    var_dump($array3);
    echo "<br>";
    // the key after the 6 is 7 because it updates it based on the last integer key value

    #   accessing array elements
    // array element are assessed based on the array[key] syntax the array is the name of the array while the key is the index or key of the elements to be accessed
    $array4  = array(
        "a",    // index 0
        9,  //index 1
        "foo" => "bar",
        5 => 42,
        // example of array as value
        "multi" => array(
            "dimensional" => array(
                "array" => "foo"
            )
        )
    );

    var_dump($array4[0]);
    echo "<br>";
    var_dump($array4[1]);
    echo "<br>";
    var_dump($array4["foo"]);
    echo "<br>";
    var_dump($array4[5]);
    echo "<br>";
    var_dump($array4["multi"]["dimensional"]["array"]);
    echo "<br>";

    #   Array dereferencing
    // attempting to access an array key which has not been defined is also like accessing undefined variable which throws an error
    // and the result will be null
    function getarrary() {
        return array5(1, 2, 3);
    } 
    // this throw an error
    // $secondelement = getarrary()[1];
    echo "<br>";
    #  Creating/modifying with square bracket syntax

    // An existing array can be modified by explicitly setting valuesin it. 

    // This is done by assigning values to the array, specifying thekey in brackets. The key can also be omitted, resulting in an empty pair ofbrackets ([]). 
    // $arr[key] = value;
    // $arr[] = value;
    // key may be an int or string
    // value may be any value of any type
    // the key can be empty which automatically uses the next key after the last key 

    // we can remove a value/key or delete the whole array by using the unset()
    // we change the value, assign new ones by using the key
    $array6 = array(5 => 1, 12 => 2);

    $array6[] = 56; // this assigns the value to next key of the formal last key i.e $array[13]

    // adding new pair of elements to an array
    $array6["x"] = 21;
    // modifying elements of array
    $array6[5] = 3;
    // removing pair of elements from array
    unset($array6[12]);
    var_dump($array6);
    echo "<br>";
    // deleting the whole array
    unset($array6);
    // the array do not exist again
    var_dump($array6);
    echo "<br>";

    #   print_r is used so as to print readable information about a variable to human
    // if no key is specified in the square bracket the maximum int key is increaed by one as the key of the next element
    // if no int index or key the key value will be 0
    // if only the elements of an array is deleted when assigning new key it continues from where the elements that were deleted stopped
    $array7 = array(1, 2, 3, 4, 5);
    print_r($array7);
    echo "<br>";
    // we delete the element but leave the array
    foreach ($array7 as $i => $value) // this takes all the key and value
    {
        unset($array7[$i]); // and then deletes it
    }
    print_r($array7);
    echo "<br>";

    // if we add another elements it continues after the max of the key of the array
    $array7[] = 6;
    print_r($array7);
    echo "<br>";

    // to re-index it to start from 0 again we do the following
    $array7 = array_values($array7);
    // assigning new pair will make the first pair assigned after deleting the formal element start from index 0
    $array7[] = 7;
    print_r($array7);
    echo "<br>";
    // see array function in reference for more array

    // some array function
    // current() : returns the present element of an array
    // next() : returns the next element in an array from the current element
    // prev() : returns the element before the current element
    // end() : returns the last element if an array


    // $transport = array('foot', 'bike', 'car', 'plane');
    // var_dump(current($transport));
    // var_dump(next($transport));
    // var_dump(end($transport));
    // var_dump(prev($transport));

    #   converting other data types to an array
    class A {
        private $B;
        protected $C;
        public $D;
        function __construct()
        {
            $this->{1} = null;
        }
    }
    
    var_export((array) new A());
    echo "<br>";

    #   unpacking array
    $arr = [1, 2, 3];
    $arr2 = [...$arr]; // outputs 1, 2, 3
    $arr3 = [0, ...$arr]; // outputs 0, 1, 2, 3
    $arr4 = [...$arr, ...$arr2, 111]; // outputs 1, 2, 3, 1, 2, 3, 111
    $arr5 = [...$arr, ...$arr2]; // outputs 1, 2, 3, 1, 2, 3

    function get_array() {
        return ['a', 'b'];
    }
    $arr6 = [...get_array(), 'c' => 'd']; // outputs a, b, 'c' => 'd'

    // if a key is not suplied but onlt the elements it will be treated as having key 0
    // especially if key 0 is not existing.
    // the array $alpha...
    // $alpha = array(
    //     "color" => "red",
    //     "taste" => "sweet",
    //     "shape" => "round",
    //     "name" => "apple",
    //     4 // the key of this is 0 
    // );
    //... is also same thing as this below
    $alpha = array();   // another way of declearing array 
    $alpha["color"] = "red";
    $alpha["taste"] = "sweet";
    $alpha["shape"] = "round";
    $alpha["name"] = "apple";
    $alpha[] = 4;
    var_dump($alpha);
    echo "<br>";

    // array $ is also same as...
    // $beta = array('a', 'b', 'c');
    // ..this
    $beta = array();
    $beta[] = 'a';
    $beta[] = 'b';
    $beta[] = 'c';
    var_dump($beta);
    echo "<br>";

    #   using array
    // Array as (property-)map
    $map = array(
        'version' => 10,
        'OS' => 'Windows',
        'lang' => 'english',
        'short_tags' => true
    );

    // strictly numerical keys
    // since key is not supplied the elements are values and 0 index i.e 0 => 7,  1 =>8
    $arrays = array(
        7, 
        8,
        0,
        156,
        -10
    );

    // if keys have been assigned a value, the value will be overwritten by the new value if the key is assigned a new value
    $switching = array(
        10,
        9,
        4,
        5 => 6,
        3 => 7,
        'a' => 4,
        11, // key will 6 since the formal largest int key as 5
        '8' => 2, // key is int 8 (remember key is ussually int or string and numerical strings are cast ot int)
        '02' => 77, //the key is '02'
        0 => 12 // it overwrite the formal value of 0 which was initially. now the value of 0 is 12
    );
    // '02' is different from '2' or 2

    #   empty array
    $empty = array();
    var_dump($arrays);
    echo "<br>";
    var_dump($map);
    echo "<br>";
    var_dump($switching);
    echo "<br>";
    var_dump($empty);
    echo "<br>";

    #   collection
    $colors = array('red', 'blue', 'green', 'yellow');
    // the & signifying passing by reference
    foreach ($colors as &$color)
    {
        echo "Do you like $color?";
        echo "<br>";
        $color = strtoupper($color);
    }

    #   changing elements in the loop
    unset($color);
    print_r($colors);
    echo "<br>";
    #   one-based index
    // you know based on the array we have been working with you know that array are 0 indexed.  the key start from 0
    // we can set the index to start from 0
    $first_quarter = array(1 => 'January', 'February', 'March');
    print_r($first_quarter);
    echo "<br>";
    // the output will be 
    // Array 
    // (
    //     [1] => 'January'
    //     [2] => 'February'
    //     [3] => 'March'
    // )

    #   sorting arrays
    // this will correct the index of the array and also arrange it alphabetically or numerically
    sort($first_quarter);
    print_r($first_quarter);
    echo "<br>";
    
    #   the count() returns number of elments in an array
    $counting[] = 7;
    $counting[] = 9;
    $counting[] = 11;
    var_dump(count($counting));
    echo "<br>";

    #   recursive and multi dimensional arrays
    $fruits = array(
        "fruit" => array(
            "a" => "orange",
            "b" => "banana",
            "c" => "apple"
        ),
        "numbers" => array(
            1,
            2,
            3,
            4,
            5,
            6
        ),
        "holes" => array(
            "first",
            5 => "second",
            "third"
        )

    );
    // Some examples to address values in the array above 
    echo $fruits["holes"][5];    // prints "second"
    echo "<br>";
    echo $fruits["fruit"]["a"]; // prints "orange"
    echo "<br>";
    unset($fruits["holes"][0]);  // remove "first"

    #   creating multi-dimensional arrays
    // this creates an array caled $juice creates key apple and value as an array the creates a key within an array as green and set value to good
    $juice["apple"]["green"] = "good";
    var_dump($juice);
    echo "<br>";
    echo "<br>";

    // we can use the reference operator to copy value of array
    $arr1 = array(2, 3);
    $arr2 = $arr1;
    $arr2[] = 4; // $arr2 is changed,
                 // $arr1 is still array(2, 3)
                 
    $arr3 = &$arr1;
    $arr3[] = 4; // now $arr1 and $arr3 are the same
    var_dump($arr1);
    echo "<br>";
    var_dump($arr2);
    echo "<br>";
    var_dump($arr3);
    echo "<br>";
    
    #   looping through
    $cars = array("Volvo", "BMW", "Toyota");
    $arrlength = count($cars);
    for($x = 0; $x < $arrlength; $x++) {
        echo $cars[$x];
        echo "<br>";
    }
    // or
    foreach($cars as $car)
    {
        echo $car;
        echo "<br>";
    }
?>