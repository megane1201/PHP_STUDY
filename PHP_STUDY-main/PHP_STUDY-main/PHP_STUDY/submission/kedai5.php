<?php
$result = dubleArr(array(1,2,3));

// 引数に配列以外を渡した場合
if (!$result) {
    echo "引数が不正です!";
    return;
}

foreach ($result as $num) {
    echo $num;
    echo "\n";
}
//++++++++++++ここまでは変更しない+++++++++++++++++++++

/**
引数として受け取った数値を2倍にして返却する
**/
function dubleArr($result) {
     if(!is_array($result)){
         return false;
     }
     $resultArr = [];
     
     foreach( $result as $Arr){
         $resultArr[] = $Arr*2;
     }
      return $resultArr;
}
