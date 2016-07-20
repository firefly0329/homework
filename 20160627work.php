<?php 
//將1~49值放陣列

for($i = 0; $i <= 48; $i++){
    $lotto[$i] = $i + 1;
}
//echo var_dump($Lotto) . "<br>";
//echo rand(0 , 48);


for($i = 0; $i <= 6; $i++){//取出7個數字 與最前面得數字交換
    $lottoNum = rand($i , 48);
    // echo $lottoNum . "<br>";
    $x =  $lotto[$i];
    $lotto[$i] = $lotto[$lottoNum];
    $lotto[$lottoNum] = $x;
    
    // echo $lotto[$i] . "<br>";
}

// echo var_dump($Lotto) . "<br>";

for($i = 1; $i <= 7; $i++){//顯示抽出號碼
    echo "number$i:" . $lotto[$i-1] . "<br>";
}




?>