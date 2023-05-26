<?php
 $array = [
	'fruit' => ['apple', 'pear', 'strawberry', 'cheer'],
	'red' => ['strawberry', 'cheer', 'tomato'],
	'sweet' => ['sugar', 'cake', 'strawberry'],
];

function countItem(array $array, string $item)
{
    $count = 0;

    foreach ($array as $value) {
        if (is_array($value)) {
            $count += countItem($value, $item);
        } elseif ($value === $item) {
            $count++;
        }
    }

    return $count;
}

$count = countItem($array, 'strawberry');
echo "$count times in array";