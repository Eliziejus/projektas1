<?php

$items = [
    12 =>"Kompiuteris lenovo",
    465 => "Telefonas",
    67 => "Piestukas",
];

$items = implode(',', $items);

$items = explode(':',$items);

var_dump($items);

//$Studentai = [
//    "1c" =>[
//        "1pogrupis" =>[
//            123 =>"Pertras",
//            173 =>"Jonas",
//            451 =>"Ieva",
//        ]
//    ],
//    "2c"=>[
//        "2pogrupis"=>[
//            145=>"Karolis",
//            175=>"Tomas",
//            194=>"Simas",
//        ]
//    ]
//];
//
//echo$Studentai["1c"]["1pogrupis"][173];


?>
