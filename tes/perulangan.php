<?php 

$nama = "Badiatul Roziqin";
$usia = 15;
$students = ["Badiatul Roziqin", 15, "Rekayasa Perangkat Lunak"];

for ( $i = 0; $i < 5; $i++ ) :
    echo $nama;
    echo "\n";
endfor;

echo "\n";

foreach ( $students as $student ) :
    echo $student;
endforeach

// echo ("Halo semuanya perkenalkan nama saya adalah ". $nama . " dan usia saya adalah ". $usia);
?>