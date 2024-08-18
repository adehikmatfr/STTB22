<?php
class Television extends Electronic {
    private $type;
    public function __construct(string $nama,string $merek,int $stock, string $type) {
        parent::__construct($nama, $merek, $stock);
        $this->type = $type;
    }

    //overriding
    public function info() {
        return parent::info()." Type ". $this->type;
    }
}