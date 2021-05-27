<?php
// phpcs:disable


$data1 = [
    ['category' => '1', 'attribute' => 1, 'option' => 1],
    ['category' => '1', 'attribute' => 1, 'option' => 2],
    ['category' => '1', 'attribute' => 2, 'option' => 3],
    ['category' => '1', 'attribute' => 2, 'option' => 4],
    ['category' => '2', 'attribute' => 3, 'option' => 6],
    ['category' => '2', 'attribute' => 3, 'option' => 7],
    ['category' => '2', 'attribute' => 4, 'option' => 8],
    ['category' => '2', 'attribute' => 4, 'option' => 9],
];

$answer = [
    '1' => [
        '1' => [
            '1' => 1,
            '2' => 2
        ],
        '2' => [
            '3' => 3,
            '4' => 4
        ]
    ],
    '2' => [
        '3' => [
            '5' => 5,
            '6' => 6
        ],
        '4' => [
            '7' => 7,
            '8' => 8
        ]
    ],
];

// $final = [];
// foreach ($data1 as $d) {
//     $final[$d['category']][$d['attribute']][$d['option']] = $d['option'];
// }

// echo '<pre>';
// print_r($final);


$final2 = [];

// foreach ($answer as $kc => $c) {
//     foreach ($c as $ka => $a) {
//         foreach ($a as $ko => $o) {
//             array_push($final2, ['category' => $kc, 'attribute' => $ka, 'options' => $ko]);
//         }
//     }
// };

foreach ($answer as $categoryId => $category) {
    foreach ($category as $attributeId => $attribute) {
        foreach ($attribute as $optionId => $option) {
            $final2[] = [
                'category' => $categoryId,
                'attribute' => $attributeId,
                'option' => $optionId,
            ];
        }
    }
}



echo '<pre>';
print_r($final2);
