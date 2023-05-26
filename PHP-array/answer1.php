<?php
 $array = [
	'fruit' => ['apple', 'pear', 'strawberry', 'cheer'],
	'red' => ['strawberry', 'cheer', 'tomato'],
	'sweet' => ['sugar', 'cake', 'strawberry'],
];

$count = 0;
foreach ($array as $subArray) {
    $count += count(array_filter($subArray, function ($item) {
        return $item === 'strawberry';
    }));
}

echo "$count times in array";
