<?php

// Fungsi untuk menghitung luas prisma segitiga
function luasPrismaSegitiga($alas, $tinggi, $luasAlas)
{
    $luas = 2 * $luasAlas + $alas * $tinggi;
    return $luas;
}

// Fungsi untuk menghitung volume prisma segitiga
function volumePrismaSegitiga($luasAlas, $tinggi)
{
    $volume = $luasAlas * $tinggi;
    return $volume;
}

// Memproses data dari formulir HTML
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $alasSegitiga = $_POST["alas"];
    $tinggiSegitiga = $_POST["tinggi_segitiga"];
    $tinggiPrisma = $_POST["tinggi_prisma"];

    // Menghitung luas alas segitiga
    $luasAlasSegitiga = 0.5 * $alasSegitiga * $tinggiSegitiga;

    // Menghitung luas dan volume prisma segitiga
    $luasPrisma = luasPrismaSegitiga($alasSegitiga, $tinggiPrisma, $luasAlasSegitiga);
    $volumePrisma = volumePrismaSegitiga($luasAlasSegitiga, $tinggiPrisma);

    // Menampilkan hasil
    echo "<h3>Hasil Perhitungan</h3>";
    echo "Luas Prisma Segitiga: " . $luasPrisma . " satuan luas<br>";
    echo "Volume Prisma Segitiga: " . $volumePrisma . " satuan volume";
}
