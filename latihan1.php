<?php
class Produk{
public $nama = "sabun" ;
public $harga = 3000;
public $merk = "GIV";
public $stock= 10;
public function pemesanan(){
    return "Pemesanan sudah diterima...";
}
}
$tv = new Produk();
echo $tv->nama; 
echo "<br>";
