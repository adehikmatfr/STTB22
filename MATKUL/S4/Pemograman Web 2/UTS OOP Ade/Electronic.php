<?php
require_once 'IElectronic.php'; 
require_once 'Product.php';
class Electronic extends Product implements IElectronic {
     public function __construct(string $nama,string $merek,int $stock) {
        $this->setNama($nama);
        $this->setMarek($merek);
        $this->setStock($stock);
     }

    public function setMarek($merek){
        $this->merek = $merek;
    }
    public function setNama($nama){
        $this->nama = "Product Electronic ". $nama;
    }
    public function setStock($stock){
        $this->stock = $stock;
    }

    // overrieding func
    public function info() {
        return "nama product ". $this->nama." marek product ".$this->merek;
    }
}