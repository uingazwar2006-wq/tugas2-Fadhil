<?php
class BangunDatar {
    private $phi;

    function __construct() { $this->phi = 3.14159; }

    private function tampil($nama, $arg, $luas, $keliling) {
        $info = [];
        foreach ($arg as $k => $v) $info[] = "$k = $v";
        echo "<b>$nama</b><br>Argumen: " . implode(", ", $info) . "<br>Luas: $luas<br>Keliling: $keliling<hr>";
    }

    function persegi($s) {
        $this->tampil("Persegi", compact('s'), $s * $s, 4 * $s);
    }
    function persegiPanjang($p, $l) {
        $this->tampil("Persegi Panjang", compact('p', 'l'), $p * $l, 2 * ($p + $l));
    }
    function segitiga($alas, $tinggi, $a, $b, $c) {
        $this->tampil("Segitiga", compact('alas', 'tinggi', 'a', 'b', 'c'), 0.5 * $alas * $tinggi, $a + $b + $c);
    }
    function lingkaran($r) {
        $this->tampil("Lingkaran", ['r' => $r, 'phi' => $this->phi], round($this->phi * $r * $r, 2), round(2 * $this->phi * $r, 2));
    }
    function trapesium($a, $b, $t, $c, $d) {
        $this->tampil("Trapesium", compact('a', 'b', 't', 'c', 'd'), 0.5 * ($a + $b) * $t, $a + $b + $c + $d);
    }
}

$bd = new BangunDatar();
$bd->persegi(5);
$bd->persegiPanjang(8, 4);
$bd->segitiga(6, 4, 5, 5, 6);
$bd->lingkaran(7);
$bd->trapesium(10, 6, 4, 5, 5);