<?php
    class Kucing {
        public $warna;
        public $ekor;
        public $umur;
        public $jeniskelamin;
        public $jeniskucing;

        // konstruktor
        public function __construct($warna, $ekor, $umur, $jeniskelamin, $jeniskucing) {
            $this->warna = $warna;
            $this->ekor = $ekor;
            $this->umur = $umur;
            $this->jeniskelamin = $jeniskelamin;
            $this->jeniskucing = $jeniskucing;
        }

        // Behaviour
        public function meong(): string {
            return "meongggggg";
        }

        public function goyangekor(): string{
            return "cepat";
        }

        public function loncat(): string{
            return "loncatnya kayak bangkong";
        }
    }


    // inisialisasi
    $kucing1 = new Kucing(warna: "Hitam", ekor: "Panjang", umur: "5 bulan", jeniskelamin: "Jantan", jeniskucing: "Bombay");
    echo $kucing1->meong() . "<br>";
    echo $kucing1->goyangekor() . "<br>";
    echo $kucing1->loncat() . "<br>";v