<?php 
header("Content-Type:text/html; charset=utf-8");

$origin = array(
        array(0, 0, 1, 1, 0, 0, 0, 0, 0, 1),
        array(0, 0, 1, 0, 1, 0, 0, 1, 1, 1),
        array(0, 1, 0, 1, 1, 0, 1, 0, 0, 1),
        array(1, 0, 1, 0, 0, 0, 1, 1, 0, 1),
        array(1, 1, 1, 0, 0, 0, 1, 0, 0, 0),
        array(0, 0, 0, 0, 0, 0, 1, 0, 1, 1),
        array(1, 1, 1, 1, 1, 1, 0, 0, 0, 1),
        array(1, 0, 0, 0, 0, 1, 0, 1, 1, 1),
        array(1, 0, 0, 0, 0, 1, 0, 1, 0, 1),
        array(1, 1, 1, 1, 0, 0, 0, 1, 1, 1)
        );

$total = 0;
$originCopy = $origin;

//===========顯示輸入陣列===========
echo "原始陣列<br>";
foreach($origin as $origin2){
    foreach($origin2 as $origin3){
        echo "$origin3,";
    }
    echo "<br>";
}
echo "<br><br>";

//=============集合每一群=============
// $total = 0;


for($i = 0; $i <= 9; $i++){
    for($j = 0; $j <= 9; $j++){
        
        $total = 0;
        $totalAll[$i][$j] = loopOrigin($i,$j);
        
    }
}



function loopOrigin($i,$j){
    global $origin,$total;
    if($origin[$i][$j] == 1){
        $origin[$i][$j] = 0;
        $total++;
        if($origin[$i+1][$j] ==  1){
            loopOrigin($i+1,$j);
        }
        if($origin[$i][$j-1] == 1){
            loopOrigin($i,$j-1);
        }
        if($origin[$i-1][$j] == 1){
            loopOrigin($i-1,$j);
        }
        if($origin[$i][$j+1] == 1){
            loopOrigin($i,$j+1);
        }
    }
    return $total;
}


//===========顯示集合結果===========
echo "分群結果<br>";
foreach($totalAll as $totalAll2){
    foreach($totalAll2 as $totalAll3){
        echo "$totalAll3,";
    }
    echo "<br>";
}
echo "<br><br>";

//=============取得最大群=============
for($i = 0; $i <= 9; $i++){
    for($j = 0; $j <= 9; $j++){
        if($maxOnce < $totalAll[$i][$j]){
            $maxOnce = $totalAll[$i][$j];
        }
    }
}

//=============留下最大群=============
for($i = 0; $i <= 9; $i++){
    for($j = 0; $j <= 9; $j++){
        if($totalAll[$i][$j] > 0 && $totalAll[$i][$j] != $maxOnce){
            $totalAll[$i][$j] = 0;
        }
    }
}
//=============取得最大群的座標=============
for($i = 0; $i <= 9; $i++){
    for($j = 0; $j <= 9; $j++){
        if($totalAll[$i][$j] > 0){
            recover($i,$j);
        }
    }
}
//=============顯示最大群=============
echo "最大值:$maxOnce<br>";
foreach($totalAll as $totalAll2){
    foreach($totalAll2 as $totalAll3){
        echo "$totalAll3,";
    }
    echo "<br>";
}
echo "<br><br>";

//=============將最大群1->2=============
function recover($i,$j){
    global $originCopy;
    if($originCopy[$i][$j] == 1){
        $originCopy[$i][$j] = 2;
        $total++;
        if($originCopy[$i+1][$j] == 1){
            recover($i+1,$j);
        }
        if($originCopy[$i][$j-1] == 1){
            recover($i,$j-1);
        }
        if($originCopy[$i-1][$j] == 1){
            recover($i-1,$j);
        }
        if($originCopy[$i][$j+1] == 1){
            recover($i,$j+1);
        }
    }
}
//=============將1->0=============
for($i = 0; $i <= 9; $i++){
    for($j = 0; $j <= 9; $j++){
        if($originCopy[$i][$j] == 1){
            $originCopy[$i][$j] = 0;
        }
    }
}
//=============將2->1=============
for($i = 0; $i <= 9; $i++){
    for($j = 0; $j <= 9; $j++){
        if($originCopy[$i][$j] == 2){
            $originCopy[$i][$j] = 1;
        }
    }
}

//=============顯示最終結果=============
echo "最終結果<br>";
foreach($originCopy as $originCopy2){
    foreach($originCopy2 as $originCopy3){
        echo "$originCopy3,";
    }
    echo "<br>";
}
echo "<br><br>";




?>