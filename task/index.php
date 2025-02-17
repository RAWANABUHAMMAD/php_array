<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
   // task1//
   $colors=["red","green","white"];
   $paragraph = "The memory of that scene for me is like a frame of film forever frozen at that moment: the " . 
    $colors[0] . " carpet, the " . 
    $colors[1] . " lawn, the " . 
    $colors[2] . " house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
    echo $paragraph;
    echo"<hr>";

    // task2//
    $colors =["red","green","white"]; 
    echo"<ul>";
    foreach ($colors as $color) {
        echo "<li>$color</li>";
    }
    echo "</ul>";
    echo"<hr>";

     // task3//
     $cities = array(
        "Italy" => "Rome", 
        "Luxembourg" => "Luxembourg", 
        "Belgium" => "Brussels",
        "Denmark" => "Copenhagen", 
        "Finland" => "Helsinki", 
        "France" => "Paris",
        "Slovakia" => "Bratislava", 
        "Slovenia" => "Ljubljana", 
        "Germany" => "Berlin", 
        "Greece" => "Athens", 
        "Ireland" => "Dublin", 
        "Netherlands" => "Amsterdam", 
        "Portugal" => "Lisbon",
        "Spain" => "Madrid"
     );
      asort($cities);
     foreach ($cities as $country => $capital) {
        echo "The capital of $country is $capital<br>";
    }
    echo"<hr>";
    // task4//
    $color = array (4 => 'white', 6 => 'green', 11=> 'red');
    echo reset($color)."<br>";
    echo"<hr>";
   

    
      // task5//
    $array = array(1 , 2 , 3 , 4 ,5);
    $location =3;
    $newitem = '$';

    array_splice($array ,$location,0, $newitem);
    foreach ($array as $value) {
    echo $value ;
};
echo"<br>";
echo"<hr>";

   // task6//
   $fruits = array(
    "d" => "lemon",
    "a" => "orange",
    "b" => "banana",
    "c" => "apple"
);
    sort($fruits);
    foreach ($fruits as $key => $value) {
        echo "$key => $value<br>";
    }
    echo"<hr>";

 // task7//
    $temperatures = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68,
    62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
    $total = array_sum($temperatures);
    $count= count($temperatures);
    $average = $total / $count;
    echo "The average temperature is $average<br>";
    sort($temperatures);
    $lowest=array_slice($temperatures,0,5);
    $highest=array_slice($temperatures,-5);
    echo "The lowest temperatures are: " . implode(", ", $lowest) . ".<br>";
    echo "The highest temperatures are: " . implode(", ", $highest) . ".<br>";
    echo "<hr>";

    // task8//
    $array1 = array("color" => "red", 2, 4);
    $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
    $array3 = array_merge($array1, $array2);
    print_r($array3 );
    echo"<br>";
    echo"<hr>";

    // task9//
    function convertToUpperCase($array)
    {
        return array_map('strtoupper', $array);
    }
    $colors = array("red","blue", "white","yellow");
    $uppercase = convertToUpperCase($colors);
    print_r($uppercase);
    echo"<br>";
    echo"<hr>";

    // task10//
    function convertToLowerCase($array)
    {
        return array_map('strtolower', $array);
    }
    $colors = array("RED","BLUE", "WHITE","YELLOW");
    $lowercase = convertToLowerCase($colors);
    print_r($lowercase);
    echo"<br>";
    echo"<hr>";

    // task11//
    function getStringLengths($array)
    {
        $lengths = array_map('strlen', $array);
        $shortest = min($lengths); 
        $longest = max($lengths);
        return array('shortest' => $shortest, 'longest' => $longest);   
    }
    $words =  array("abcd","abc","de","hjjj","g","wer");
    $result = getStringLengths($words);
    echo "Shortest string length: " . $result['shortest'] . "<br>";
    echo "Longest string length: " . $result['longest'] . "<br>";
    echo"<hr>";

    // task12//
    function findLowestNonZero($array) {
        $nonZero = array_filter($array, function($value) {
            return $value != 0;
        });
        if (count($nonZero) > 0) {
            return min($nonZero);
        } else {
            return null; 
        }
    }
    
    $array1 = array(2, 0, 10, 12, 6);
    echo findLowestNonZero($array1); 






    









    






















?>
</body>
</html>