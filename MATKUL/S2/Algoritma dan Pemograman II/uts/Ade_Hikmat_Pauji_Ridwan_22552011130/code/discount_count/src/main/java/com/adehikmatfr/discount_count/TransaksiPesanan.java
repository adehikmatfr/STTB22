/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.adehikmatfr.discount_count;

import java.util.ArrayList;

/**
 *
 * @author Administrator
 */
public class TransaksiPesanan {

    public TransaksiPesanan(ArrayList<Barang> barangList, String kodeMember) {
        this.barangList = barangList;
        this.kodeMember = kodeMember;
        this.hitungTransaksi();
    }

    //make final becouse the transcation can't be edit
    private ArrayList<Barang> barangList = new ArrayList<>();
    private final String kodeMember;
    private double diskon;
    private double presentasiDiskon;
    private double jumlahTotal;
    private double jumlahHarga;

    private void hitungTransaksi() {
        this.barangList.forEach((Barang item) -> {
            this.jumlahTotal += item.getHarga();
        });

        if (this.getJumlahTotal() > 1000000) {
            this.presentasiDiskon = 5;
            if (!this.kodeMember.isEmpty()) {
                this.presentasiDiskon += 2;
            }
        }

        if (this.getJumlahTotal() > 500000 && this.getJumlahTotal() <= 1000000) {
            this.presentasiDiskon = 2.5;
            if (!this.kodeMember.isEmpty()) {
                this.presentasiDiskon += 1.5;
            }
        }

        if (this.getJumlahTotal() >= 100000 && this.getJumlahTotal() <= 500000) {
            this.presentasiDiskon++;
            if (!this.kodeMember.isEmpty()) {
                this.presentasiDiskon += 1;
            }
        }

        if (presentasiDiskon > 0) {
            this.diskon = this.getJumlahTotal() / 100 * this.getPresentasiDiskon();
        }

        this.jumlahHarga = this.jumlahTotal - this.diskon;
    }

    public double getDiskon() {
        return diskon;
    }

    public double getPresentasiDiskon() {
        return presentasiDiskon;
    }

    public double getJumlahTotal() {
        return jumlahTotal;
    }

    public double getJumlahHarga() {
        return jumlahHarga;
    }
}
