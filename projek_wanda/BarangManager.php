<?php

class BarangManager {
    private $datafile ='data.json';
    private $barangList = [];

    public function __construct(){
        if (file_exists($this->datafile))
        $data = file_get_contents($this->datafile);
    $this->barangList = json_decode($data, true) ?? [];
    }

    //Menambahkan barang
public function tambahBarang($nama, $harga, $stock){
    $id = uniqid (); //Generate ID unik
    $barang = new Barang ($id, $nama, $harga, $stock);
    $this->barangList[] = $barang;
    $this->simpanData();
}

    //Mendapatkan semua barang 
    public function getBarang(){
    return $this->barangList;
}

    //Menghapus barang berdasarkan ID
    public function hapusBarang ($id){
        $this-> barangList = array_filter($this->barangList, function($barang) use ($id) {
        return $barang ['id'] !== $id;
        });
        $this->simpanData();
    }

    //Menyimpan data ke file JSON
    private function simpanData (){
        file_put_contents($this->datafile, json_encode($this->barangList, JSON_PRETTY_PRINT));
    }
    

}
   