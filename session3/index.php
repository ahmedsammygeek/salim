<?php 



$users = array("ahmed" , 'ali' , 'nehad');



// foreach ($users as  $key => $user ) {
// 	echo $key."=>".$user;
// 	echo "<br>";

// }





$users = array(
	array("ahmed" , 22 , "bilqas") , 
	array("salim" , 22 , "mansoura") , 
	array('alaa' , 22 , 'm7la')
	);




// echo array elements with for
// for ($i=0; $i <count($users) ; $i++) { 
// 	// echo $users[$i];
// 	for ($r=0; $r <count($users[$i]) ; $r++) { 
// 		echo $users[$i][$r];
// 		echo "<br>";
// 	}
// }



// echo array elements with foreach
// foreach ($users as  $user) {
// 	// echo $user;

// 	foreach ($user as  $one) {
// 		echo $one;
// 		echo "<br>";
// 	}
// }



// 48
// //functions

// function sum($num1 = 10 , $num2 = 10) {
// 	return  $num1 + $num2;
// } 

// function sum($numbers= array()) {
// 	$total = 0; $total = $number * $total;
// 	return  $num1 + $num2;
// } 


// echo  sum(10 , 10 );


// array("ahjh" , "sfds" , "sdfsd");

// $name = "dfdsf";


// echo rand(2,90);

$names = array("ahmed", 'glal' , 'ziad');

$names[] = "alaa";

array_push($names, "moahmed"); // add new elemnts
array_pop($names); // remove element from the back

unset($names[1]); // determine the wanted element to remove it


var_dump(array_key_exists(100, $names)); // 3lshan ashof low key or index mwgod wla la2

echo array_sum(array(2,34,5,5,5,5,55,7));

var_dump(array_search("ziad", $names)); 
var_dump(in_array("ziad", $names));
var_dump(array_reverse(array(2,34,5,5,5,5,55,7))); // by3kes trteeb el arrays
var_dump($names);


?>