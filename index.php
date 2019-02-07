
<?php

error_reporting(E_ALL);

$a = 1;
$b = 'name';
$c = true;
$f = 1.23;
$arr = [];
$k=0;

for ($i=0; $i < 100; $i+= 2) {
    $arr[] = $i * 2;
}



foreach ($arr as $key => $value) {
    echo '$key['.$key.']=$value=['.$value.'] </br>';


    if($key>0 && $key%2==0){
    
        echo '$key['.$key.']=$value=['.$value.'] </br>';
    
    }
    if($key==10 ){

        break;
    }
}

while ($k<199) {
    
    echo 'Value $k is '. $k;
    $k ++;
}


/*  Swich case */



