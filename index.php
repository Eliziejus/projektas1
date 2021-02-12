<?php
//
//$data = ['item1',
//    'item2',
//    'item3',
//    'item4',
//    'item5',
//];
//
//foreach ($data as $key => $item){
//    echo"$key:$item<br>";
//}
//

$studentai = [
    "1c" =>[
        "1pogrupis" =>[
            123 =>"Pertras",
            173 =>"Jonas",
            451 =>"Ieva",
        ]
    ],
    "2c"=>[
        "2pogrupis"=>[
            145=>"Karolis",
            175=>"Tomas",
            194=>"Simas",
        ]
    ]
];

$keys = array_keys($studentai);
for($i=0;$i<count($studentai);$i++){
    echo $keys[$i].":<br>";
    foreach ($studentai[$keys[$i]]as $key =>$value){
        echo $key.":<br>";
        foreach ($value as $link){
            echo $link."<br>";
        }
    }
    echo "<br>";
}





?>