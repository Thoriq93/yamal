<?php

$nilai = 96;

if ($nilai > 100) {
     $grade ="A+";

} elseif ($nilai > 95){
     $grade = "A";

} elseif ($nilai > 90){
     $grade = "B+";

} elseif ($nilai > 85){
     $grade = "B";

} elseif ($nilai > 80){ 
    $grade = "C+";

} elseif ($nilai > 74){
     $grade = "C";

} elseif ($nilai > 69){ 
    $grade = "D";

} elseif ($nilai > 64){ 
    $grade = "E";

} else {
     $grade = "F";

}

echo "Nilai anda: $nilai<br>";

echo "Grade: $grade";

?>
