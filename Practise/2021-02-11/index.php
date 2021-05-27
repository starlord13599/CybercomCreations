<?php
//phpcs:disable
$dynamic = [
    'number' => 7,
    'live' => 'House',
    'drive' => 'Car',
    [ //0th index
        'mow' => 'grass',
        [
            'tractor' => 'John Deere',
            'tractor2' => 'Kubota',
            'tractor3' => 'New Holland'
        ],
        'landscape' => 'mulch'
    ]
];

$dynamic2 = [
    'number' => 7,
    'live' => 'House',
    'drive' => 'Car',
];
// echo $one = is_array($dynamic);
// echo $two = is_array($dynamic['number']);
// print_r($dynamic[0][0]);


// if ($two) {
//     echo "two iss array";
// } else {
//     echo "two is not an array";
// }

$veggies = ["Spinach", "Corn", "Carrots", "Tomatoes", 99];


// if (in_array('99', $veggies, TRUE)) {
//     echo "yes";
// }

// if (in_array('tractor', $dynamic[0][0])) {
//     echo "yes";
// }
$lists = [
    'Ten Steps To a Better You',
    'Ten Steps To a Better You',
    'Ten Steps To a Better You',
    'Eating Spiniach - The Pros Show You How',
    'Eating Spiniach - The Pros Show You How',
    'Falling in Love with Arrays',
    'Falling in Love with Arrays',
    'Stock Market Secrects Jim Cramer Will Not Share',
    'Uplifting News by ZeroHege',
    'Uplifting News by ZeroHege'
];

// print_r($lists);
// echo "<br>";

// print_r(array_unique($lists));
// foreach ($lists as $list) {
//     echo $list . "<br>";
// }


// echo array_search('mow', $dynamic[0]);
// print_r(array_search(99, $veggies, TRUE));

// print_r(array_reverse(array_unique($lists), TRUE)); //preserves key
// print_r(array_reverse(array_unique($lists))); //does not preserves key

$todo = [
    'How to build a website',
    'Design with Twitter Bootstrap',
    'Handle the backend with PHP',
    'Eat Veggies for good health',
    'The answers to all of your questions',
    'Racing in the Nascar Series'
];

// function lc($el)
// {
//     return strtolower($el);
// }

// print_r(array_map(function ($el) {
//     return strtolower($el);
// }, $todo));

// print_r(array_map('hello', $todo));//gives error

// print_r(array_diff($dynamic, $dynamic2));

$rand_idx = array_rand($dynamic, 2);

foreach ($rand_idx as $v) {
    print_r($dynamic[$v]);
};
