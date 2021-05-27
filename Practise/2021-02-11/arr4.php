<?php
// phpcs:disable

$data = [
    'category' => [
        '1' => [
            'categoryname' => 'grandfather1',
            'children' => [
                '1' => [
                    'grandfather' => [
                        'grandfathername' => 'gf1',
                        'children' => [
                            'child' => [
                                'childname' => 'c1'
                            ],
                            'child' => [
                                'childname' => 'c2'
                            ]
                        ]
                    ]
                ],
                '2' => [
                    'grandfather' => [
                        'grandfathername' => 'gf1',
                        'children' => [
                            'child' => [
                                'childname' => 'c1'
                            ],
                            'child' => [
                                'childname' => 'c2'
                            ]
                        ]
                    ]
                ]

            ]

        ],
        '2' => [
            'categoryname' => 'grandfather2',
            'grandfather' => [
                'grandfathername' => 'gf2',
                'children' => [
                    'child' => [
                        'childname' => 'c3'
                    ],
                    'child' => [
                        'childname' => 'c4'
                    ]
                ]
            ]
        ]

    ]

];


$final = [];
echo "<pre>";

foreach ($data as $category) {
    foreach ($category as $categoryId => $category) {
    }
}

echo "<pre>";
print_r($final);
