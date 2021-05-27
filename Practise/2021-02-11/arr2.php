<?php
// phpcs:disable


// $data = [
//     ['category' => 1, 'categoryname' => 'c1', 'attribute' => 1, 'attributename' => 'a1', 'option' => 1, 'optionname' => 'o1'],
//     ['category' => 1, 'categoryname' => 'c1', 'attribute' => 1, 'attributename' => 'a1', 'option' => 2, 'optionname' => 'o2'],
//     ['category' => 1, 'categoryname' => 'c1', 'attribute' => 2, 'attributename' => 'a2', 'option' => 3, 'optionname' => 'o3'],
//     ['category' => 1, 'categoryname' => 'c1', 'attribute' => 2, 'attributename' => 'a2', 'option' => 4, 'optionname' => 'o4'],
//     ['category' => 2, 'categoryname' => 'c2', 'attribute' => 3, 'attributename' => 'a3', 'option' => 5, 'optionname' => 'o5'],
//     ['category' => 2, 'categoryname' => 'c2', 'attribute' => 3, 'attributename' => 'a3', 'option' => 6, 'optionname' => 'o6'],
//     ['category' => 2, 'categoryname' => 'c2', 'attribute' => 4, 'attributename' => 'a4', 'option' => 7, 'optionname' => 'o7'],
//     ['category' => 2, 'categoryname' => 'c2', 'attribute' => 4, 'attributename' => 'a4', 'option' => 8, 'optionname' => 'o8'],
// ];
$input = [
    'category' => [
        '1' => [
            'name' => 'c1',
            'attribute' => [
                '1' => [
                    'name' => 'a1',
                    'option' => [
                        '1' => [
                            'name' => 'o1'
                        ],
                        '2' => [
                            'name' => 'o2'
                        ]
                    ]
                ],
                '2' => [
                    'name' => 'a2',
                    'option' => [
                        '3' => [
                            'name' => 'o3'
                        ],
                        '4' => [
                            'name' => 'o4'
                        ]
                    ]
                ]
            ]
        ],
        '2' => [
            'name' => 'c2',
            'attribute' => [
                '3' => [
                    'name' => 'a3',
                    'option' => [
                        '5' => [
                            'name' => 'o5'
                        ],
                        '6' => [
                            'name' => 'o6'
                        ]
                    ]
                ],
                '4' => [
                    'name' => 'a4',
                    'option' => [
                        '7' => [
                            'name' => 'o7'
                        ],
                        '8' => [
                            'name' => 'o8'
                        ]
                    ]
                ]
            ]
        ]
    ]
];


print_r($input['category']['1']['attribute']['1']['option']['1']['name']);
// $final = [];

// foreach ($data as $d) {
//     $final['category'][$d['category']]['name'] = $d['categoryname'];
//     $final['category'][$d['category']]['attribute'][$d['attribute']]['name'] = $d['attributename'];
//     $final['category'][$d['category']]['attribute'][$d['attribute']]['option'][$d['option']]['name'] = $d['optionname'];
// }


// echo '<pre>';
// print_r($final);

$data = [
    ['category' => 1, 'categoryname' => 'c1', 'attribute' => 1, 'attributename' => 'a1', 'option' => 1, 'optionname' => 'o1'],
    ['category' => 1, 'categoryname' => 'c1', 'attribute' => 1, 'attributename' => 'a1', 'option' => 2, 'optionname' => 'o2'],
    ['category' => 1, 'categoryname' => 'c1', 'attribute' => 2, 'attributename' => 'a2', 'option' => 3, 'optionname' => 'o3'],
    ['category' => 1, 'categoryname' => 'c1', 'attribute' => 2, 'attributename' => 'a2', 'option' => 4, 'optionname' => 'o4'],
    ['category' => 2, 'categoryname' => 'c2', 'attribute' => 3, 'attributename' => 'a3', 'option' => 5, 'optionname' => 'o5'],
    ['category' => 2, 'categoryname' => 'c2', 'attribute' => 3, 'attributename' => 'a3', 'option' => 6, 'optionname' => 'o6'],
    ['category' => 2, 'categoryname' => 'c2', 'attribute' => 4, 'attributename' => 'a4', 'option' => 7, 'optionname' => 'o7'],
    ['category' => 2, 'categoryname' => 'c2', 'attribute' => 4, 'attributename' => 'a4', 'option' => 8, 'optionname' => 'o8'],
];


$final = [];


// foreach ($answer as $k => $d) {
//     foreach ($d as $ki => $i) {
//         foreach ($i['attribute'] as $ka => $a) {
//             foreach ($a['option'] as $ko => $o) {
//                 array_push($final, ['category' => $ki, 'categoryname' => $i['name'], 'attribute' => $ka, 'attributename' => $a['name'], 'option' => $ko, 'optionname' => $o['name']]);
//             };
//         }
//     }
// };

$final = [];
foreach ($input as $categories) {
    foreach ($categories as $categoryId => $category) {
        foreach ($category['attribute'] as $attributeId => $attribute) {
            foreach ($attribute['option'] as $optionId => $option) {
                $final[] = [
                    'category' => $categoryId,
                    'categoryname' => $category['name'],
                    'attribute' => $attributeId,
                    'attributename' => $attribute['name'],
                    'option' => $optionId,
                    'optionname' => $option['name']
                ];
            }
        }
    }
}


echo '<pre>';
print_r($final);
print_r('-------------------------------------<br>');
print_r('-------------------------------------<br>');
print_r('-------------------------------------<br>');
// print_r($data);
