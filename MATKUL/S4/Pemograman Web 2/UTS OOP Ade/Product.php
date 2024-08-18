<?php

abstract class Product {
    // access modifire
    public $nama;
    public $merek;
    protected $stock;

    // enkapsulation
    abstract public function info();
}