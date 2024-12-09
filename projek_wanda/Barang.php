<?php

Class barang {
    public $id;
    public $nama;
    public $harga;
    public $stock;

    public function __construct($id, $nama, $harga, $stock) {
        $this->id = $id;
        $this->nama =$nama;
        $this->harga =$harga;
        $this ->stock =$stock;

    }
}