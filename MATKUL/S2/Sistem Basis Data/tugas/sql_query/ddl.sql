CREATE DATABASE penjualan;
use penjualan;
CREATE TABLE barangMaster(
    idBarang VARCHAR(5),
    barangName VARCHAR(255),
    barangHarga FLOAT,
    barangStock INT,
    PRIMARY KEY (idBarang)
);
CREATE TABLE detailJual(
    idDetail INT AUTO_INCREMENT,
    idBarang VARCHAR(5),
    quantity INT,
    subtotal FLOAT,
    PRIMARY KEY (idDetail),
    FOREIGN KEY (idBarang) REFERENCES barangMaster(idBarang)
);
