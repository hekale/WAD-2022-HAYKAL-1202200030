create database modul3;
 
use modul3;
 
CREATE TABLE `showroom_hekal_table` (
  `id_mobil` int(11) NOT NULL auto_increment,
  `nama_mobil` varchar(255),
  `pemilik_mobil` varchar(255),
  `merk_mobil` varchar(255),
  `tanggal_beli` date,
  `deskripsi` text,
  `foto_mobil` varchar(255),
  `status_pembayaran` varchar(255),
  PRIMARY KEY(`id_mobil`)
)