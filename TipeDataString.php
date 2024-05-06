<?php

echo 'Nama : ';
echo 'Eko Kurniawan Khannedy';
echo "\n";

echo "Nama : ";
echo "Eko\t Kurniawan\t Khannedy\n";

echo <<<OZI
Selamat belajar PHP Dasar
ini adalah tipe data string ke 3
ini menggunakan heredoc

OZI;

echo <<<'OZI'
Ini juga merupakan tipe data string
ini tipe data string ke keempat
ini menggunakan nowdoc
OZI;