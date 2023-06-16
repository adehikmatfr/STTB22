/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.adehikmatfr.discount_count;

/**
 *
 * @author Administrator
 */
public class Member {

    public Member(String kodeMember, String nama, String nomorTelepon) {
        this.kodeMember = kodeMember;
        this.nama = nama;
        this.nomorTelepon = nomorTelepon;
    }

    private String kodeMember;
    private String nama;
    private String nomorTelepon;

    public String getKodeMember() {
        return kodeMember;
    }

    public String getNama() {
        return nama;
    }

    public String getNomorTelepon() {
        return nomorTelepon;
    }

    public void setKodeMember(String kodeMember) {
        this.kodeMember = kodeMember;
    }

    public void setNama(String nama) {
        this.nama = nama;
    }

    public void setNomorTelepon(String nomorTelepon) {
        this.nomorTelepon = nomorTelepon;
    }

     public boolean validasiMember() {
        return this.kodeMember.isEmpty() || this.nama.isEmpty() || this.nomorTelepon.isEmpty();
    }
}
