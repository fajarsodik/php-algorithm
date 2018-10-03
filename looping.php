<?php


for($a=3;$a<=7;$a++){
  // for($i=7; $i>=$a; $i--){
    // echo "_";
    // 3
    // 44
    // 555
    // 6666
    // 77777
  // }
  for($b=3;$b<=$a;$b++){
    echo"$a";
  }

  echo"<br>";
}

echo "<br/>";

for ($i=3;$i<=7;$i++)
{
  for($j=$i;$j<=7;$j++)
  {
//     33333
// 4444
// 555
// 66
// 7

    echo "$i";
  }
  echo "<br>";
}

echo "<br/>";

for($a=9;$a>=5;$a--){
  // for($i=7; $i>=$a; $i--){
    // echo "_";
    // 56789
    // 5678
    // 567
    // 56
    // 5

  // }
  for($b=5;$b<=$a;$b++){
    echo"$b";
  }

  echo"<br>";
}

echo"<br>";

$data = array();
for ($i=9; $i <= 430; $i++) {
  $sisa = $i % 2;
  if ($sisa === 0) {
    array_push($data, $i);
  }

}
echo count($data);

echo "<br/>";

for ($i=9; $i <= 501; $i++) {

}
