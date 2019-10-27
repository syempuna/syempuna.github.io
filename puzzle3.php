<?php
$box = $_POST['box'];
$position = array();
$step_all = array();

function cekr($box, $row, $col, $step, $step_all, $position){
    if(!empty($box[$row])){
        if(isset($box[$row][$col])){
            if($box[$row][$col] == "0"){
                array_push($step_all, $step);
                array_push($position, $row, $col);
                print_r($step_all);
            }
        }
    }
}

foreach($box as $key=>$val){
    foreach($val as $k=>$v){
        if($v == 8){
            $rs = $k;
            $cs = $key;
            echo "start: " . $k . " & " . $key . "<br>";
            array_push($position, $k, $key);
        }

        if($v == 9){
            $rf = $k;
            $cf = $key;
            echo "finish: " . $k . " & " . $key . "<br>";
        }
    }
}

if($rs > $rf){
    $rs = $rs - 1;
    $step = "W";
}else if($rs < $rf){
    $rs = $rs + 1;
    $step = "E";
}

cekr($box, $cs, $rs, $step, $step_all, $position);
print_r($step_all);
print_r($position);
