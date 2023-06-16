/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.adehikmatfr.discount_count;

/**
 *
 * @author Administrator
 */
public class Barang {

    public Barang(String kodeBarang, String nama, double harga) {
        this.kodeBarang = kodeBarang;
        this.nama = nama;
        this.harga = harga;
    }

    private String kodeBarang;
    private String nama;
    private double harga;

    public String getKodeBarang() {
        return kodeBarang;
    }

    public String getNama() {
        return nama;
    }

    public double getHarga() {
        return harga;
    }

    public void setKodeBarang(String kodeBarang) {
        this.kodeBarang = kodeBarang;
    }

    public void setNama(String nama) {
        this.nama = nama;
    }

    public void setHarga(double harga) {
        this.harga = harga;
    }

    public boolean validasiBarang() {
        return this.kodeBarang.isEmpty() || this.nama.isEmpty() || this.harga <= 0;
    }
}
