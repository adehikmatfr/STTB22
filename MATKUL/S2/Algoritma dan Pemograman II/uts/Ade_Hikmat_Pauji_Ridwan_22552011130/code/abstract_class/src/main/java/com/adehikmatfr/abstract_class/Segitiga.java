/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.adehikmatfr.abstract_class;

/**
 *
 * @author Administrator
 */
public class Segitiga extends SegitigaAbstrak {

    public Segitiga(int sisi1, int sisi2, int sisi3) {
        super(sisi1, sisi2, sisi3);
    }

    @Override
    boolean isSegitigaSamaSisi() {
        //count side 
        int sideCount = this.getSisi1() + this.getSisi2() + this.getSisi3();
        //if count side equal sisi1 range 3 this is segitiga sma sisi
        return sideCount == (this.getSisi1() + this.getSisi1() + this.getSisi1());
    }

    @Override
    boolean isSegitiaSamaKaki() {
        return (this.getSisi1() == this.getSisi2()) || (this.getSisi1() == this.getSisi3()) || (this.getSisi2() == this.getSisi3());
    }

    private boolean teoremaPhytagoras(int hypotenuse, int uprightSide, int pedestal) {
        return hypotenuse * hypotenuse == (uprightSide * uprightSide + pedestal * pedestal);
    }

    @Override
    boolean isSegitiaSikuSiku() {
        return this.teoremaPhytagoras(this.getSisi1(), this.getSisi2(), this.getSisi3()) || this.teoremaPhytagoras(this.getSisi2(), this.getSisi1(), this.getSisi3()) || this.teoremaPhytagoras(this.getSisi3(), this.getSisi1(), this.getSisi2());
    }
}
