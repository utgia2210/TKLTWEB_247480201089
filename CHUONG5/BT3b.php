<?php
$x=rand(1,100000000);
$y=rand(1,100000000);

echo "Kết quả phép tính nhân ".($x*$y)."";
echo "<br>Kết quả phép tính cộng ".($x+$y)."";
echo "<br>Kết quả phép tính chia ".($x/$y)."";
echo "<br>Kết quả phép tính trừ  ".($x-$y)."";
echo "<br>Kết quả chia lấy dư ".($x%=$y)."";



?>