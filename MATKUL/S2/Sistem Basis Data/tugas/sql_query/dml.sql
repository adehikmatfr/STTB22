INSERT INTO barangMaster (idBarang, barangName, barangHarga, barangStock)
VALUES ('B0001', 'Baju', 100000, 10),
    ('B0002', 'Celana Panjang', 200000, 20),
    ('B0003', 'Celana Pendek', 150000, 30),
    ('B0004', 'Kemeja', 125000, 25),
    ('B0005', 'Jaket', 400000, 15),
    ('B0006', 'Sepatu', 500000, 5);
INSERT INTO detailJual (idBarang, quantity, subtotal)
VALUES ('B0001', 2, 200000),
    ('B0002', 3, 600000),
    ('B0003', 4, 600000),
    ('B0001', 1, 100000),
    ('B0002', 2, 400000),
    ('B0004', 3, 375000),
    ('B0005', 1, 400000),
    ('B0006', 2, 1000000),
    ('B0002', 3, 600000),
    ('B0003', 3, 450000);
-- 1. Buat Query untuk menampilkan seluruh data master barang
SELECT *
FROM barangMaster;
-- 2. Buat Query untuk menampilkan kolom barangName dan barangHarga
SELECT barangName,
    barangHarga
from barangMaster;
-- 3. Buat Query untuk menampilkan data barang yang stocknya dibawah 20
SELECT *
FROM barangMaster
WHERE barangStock < 20;
-- 4. Buat Query untuk menampilkan semua jenis celana
SELECT *
FROM barangMaster
WHERE barangName LIKE "Celana%";
-- 5. Buat Query untuk menambahkan barang baru pada barangMaster
INSERT INTO barangMaster (idBarang, barangName, barangHarga, barangStock)
VALUES ('B0007', 'Kaus Kaki', 30000, 10);
-- 6. Buat Query untuk menampilkan barang yang stocknya antara 20 sampai 30
SELECT *
FROM barangMaster
WHERE barangStock BETWEEN 20 AND 30;
-- 7. Buat Query untuk mengurutkan harga barang dari yang paling mahal sampai paling murah
SELECT *
FROM barangMaster
ORDER BY barangHarga DESC;
-- 8. Buat Query untuk menentukan barang yang harganya antara 100000 sampai 200000
SELECT *
FROM barangMaster
WHERE barangHarga BETWEEN 100000 AND 200000;
-- 9. Buat Query untuk menghitung jumlah data barang master
SELECT COUNT(idBarang)
FROM barangMaster;
-- 10. Buat Query untuk menampilkan harga barang 400000 dan 500000
SELECT *
FROM barangMaster
WHERE barangHarga IN(400000, 500000);
-- 11. Buat Query untuk menentukan rata2 harga barang
SELECT AVG(barangHarga) as average
from barangMaster;
-- 12. Buat Query untuk menampilkan detiljual kolom idbarang dan subtotal
SELECT idBarang,
    subtotal
from detailJual;
-- 13. Buat Query untuk menambahkan detiljual yang baru
INSERT INTO detailJual (idBarang, quantity, subtotal)
VALUES ('B0001', 3, 300000);
-- 14. Buat Query untuk menampilkan detiljual dengan quantity dibawah 3
SELECT *
FROM detailJual
WHERE quantity < 3;
-- 15. Buat Query untuk menampilkan detiljual dengan quantity antara 2 dan 4
SELECT *
FROM detailJual
WHERE quantity BETWEEN 2 AND 4;
-- 16. Buat Query untuk nemapilkan segala jenis subtotal dengan subtotal 600000 atau 400000
SELECT *
FROM detailJual
WHERE subtotal IN(600000,400000);
-- 17. Buat Query untuk menghitung jumlah pembelian untuk jenis barang B0002
SELECT COUNT(idBarang)
FROM detailJual
WHERE idBarang = "B0002";
-- 18. Buat Query untuk menampilkan detiljual urutkan idbarang,  quantity dan berikutnya subtotal dari yang paling kecil
SELECT idBarang,
    quantity,
    subtotal
FROM detailJual
ORDER BY subtotal ASC;
-- 19. Buat Query untuk menampilan group by barangID , jumlah total quantity dan jumlah total sum
SELECT idBarang,
    SUM(quantity) as jumlah_total_quantity_sum,
    SUM(subtotal) as jumlah_subtotal_sum
FROM detailJual
GROUP BY idBarang;
-- 20. Buat Query Groupby dan Having menggunakan column detiljual dan jelaskan
SELECT idBarang,
    SUM(quantity) as jumlah_total_quantity_sum,
    SUM(subtotal) as jumlah_subtotal_sum
FROM detailJual
GROUP BY idBarang
HAVING jumlah_subtotal_sum BETWEEN 700000 AND 1000000
ORDER BY jumlah_subtotal_sum ASC;