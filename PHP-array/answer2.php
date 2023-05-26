<?php
 $array = [
	'fruit' => ['apple', 'pear', 'strawberry', 'cheer'],
	'red' => ['strawberry', 'cheer', 'tomato'],
	'sweet' => ['sugar', 'cake', 'strawberry'],
];

$count = array_reduce($array, function ($carry, $subArray) {
    return $carry + count(array_intersect($subArray, ['strawberry']));
}, 0);

echo "$count times in array";
