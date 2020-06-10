-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Des 2019 pada 12.40
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warnasol`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `id_cart` varchar(20) NOT NULL,
  `tanggal` datetime NOT NULL,
  `kode` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `qty` varchar(10) NOT NULL,
  `jumlah` varchar(10) NOT NULL,
  `session` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cart`
--

INSERT INTO `cart` (`id_cart`, `tanggal`, `kode`, `nama`, `harga`, `qty`, `jumlah`, `session`) VALUES
('20180206152934', '2018-02-06 15:29:34', '58', 'Oseng Kacan', '6000', '1', '6000', '20170820071826');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `kd_cus` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` text NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`kd_cus`, `nama`, `alamat`, `no_telp`, `username`, `password`, `gambar`) VALUES
('20170820071826', 'hakko', 'hakko', 'hakko', 'hakko', 'fb92eb16a09ed530c91a0e17d9d61a7758754013', '../admin/gambar_customer/images.jpg'),
('20180205073805', 'niqoweb', 'niqoweb', 'niqoweb', 'niqoweb', '6414e69bf25357d8d63353f469b35a7416963ab1', ''),
('20191227111858', 'Eka Noviana', 'kaligandu', '085602290504', 'ekanoviana', '45797c6c167a0e1fed6e74149c0720b926a31868', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi`
--

CREATE TABLE `konfirmasi` (
  `id_kon` int(6) NOT NULL,
  `nopo` varchar(20) NOT NULL,
  `kd_cus` varchar(20) NOT NULL,
  `bayar_via` varchar(30) NOT NULL,
  `tanggal` datetime NOT NULL,
  `jumlah` int(10) NOT NULL,
  `bukti_transfer` varchar(50) NOT NULL,
  `status` enum('Bayar','Belum') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konfirmasi`
--

INSERT INTO `konfirmasi` (`id_kon`, `nopo`, `kd_cus`, `bayar_via`, `tanggal`, `jumlah`, `bukti_transfer`, `status`) VALUES
(20, '20180205073805', '20180205073805', '0', '2018-02-05 07:38:37', 26000, '0', 'Belum'),
(22, '20170820071826', '20170820071826', 'Cash On Delivery (CO', '2018-02-05 09:44:53', 21000, '0', 'Belum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `po`
--

CREATE TABLE `po` (
  `nopo` varchar(20) NOT NULL,
  `tanggalkirim` date NOT NULL,
  `status` enum('Proses','Selesai','Terkirim','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `po_terima`
--

CREATE TABLE `po_terima` (
  `id` int(10) NOT NULL,
  `nopo` varchar(20) NOT NULL,
  `kd_cus` varchar(20) NOT NULL,
  `kode` int(4) NOT NULL,
  `tanggal` datetime NOT NULL,
  `qty` int(8) NOT NULL,
  `total` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `po_terima`
--

INSERT INTO `po_terima` (`id`, `nopo`, `kd_cus`, `kode`, `tanggal`, `qty`, `total`) VALUES
(38, '20180205073805', '20180205073805', 17, '2018-02-05 07:38:23', 2, 26000),
(39, '20170820071826', '20170820071826', 57, '2018-02-05 09:44:15', 1, 6000),
(40, '20170820071826', '20170820071826', 54, '2018-02-05 09:44:19', 1, 15000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `kode` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `harga` int(10) NOT NULL,
  `keterangan` text NOT NULL,
  `stok` int(3) NOT NULL,
  `gambar` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`kode`, `nama`, `jenis`, `harga`, `keterangan`, `stok`, `gambar`) VALUES
(17, 'Simply Pink', 'Hand Bouquet', 175000, 'Sofie bouquet yang tampak lembut dengan perpaduan warna pastel dalam pemilihan bunganya. ', 18, 'gambar_produk/wed11.jpg'),
(18, 'Sweet Viola', 'Hand Bouquet', 393000, 'Viola Bouquet dengan nuansa soft purple yang tampak cantik dan mewah.', 10, 'gambar_produk/wed2.jpg'),
(19, 'Romantic Blue', 'Hand Bouquet', 345000, 'Romantic blue yang terdiri dari bunga-bunga berwarna soft namun memberikan nuansa romantic.', 12, 'gambar_produk/wed3.jpg'),
(20, 'Soft Lavender', 'Hand Bouquet', 342500, 'Perpaduan bunga berwarna soft yang tampak elegan dilengkapi dengan hiasan bunga lavender', 7, 'gambar_produk/wed4.jpg'),
(21, 'Rustic Flow', 'Hand Bouquet', 278000, 'Bouqet yang bernuansa sederhana, namun tampak sangat elok dipandang', 5, 'gambar_produk/wed5.jpg'),
(22, 'Tiny Baby\'s Breath', 'Hand Bouquet', 315000, 'Bouqet yang berisi bunga baby\'s breath ini tampak mungil dan imut, namun berkesan sangat modern', 7, 'gambar_produk/wed6.jpg'),
(23, 'Lovable White', 'Hand Bouquet', 325000, 'Bouquet bernuansa putih yang tampak lembut dan manis', 13, 'gambar_produk/wed7.jpg'),
(24, 'Beloved Rose', 'Hand Bouquet', 352500, 'Perpaduan dari berbagai bunga yang tampak romantis untuk orang yang manis', 4, 'gambar_produk/wed8.jpg'),
(25, 'Kindly Florie', 'Hand Bouquet', 299500, 'Bouquet dengan perpaduan berbagai bunga namun bernuansa soft dan kindly', 9, 'gambar_produk/wed9.jpg'),
(26, 'Pretty Flow', 'Hand Bouquet', 387000, 'Bouquet yang berisikan banyak macam bunga dan tampak sangat pretty dengan warna-warninya', 19, 'gambar_produk/wed10.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk_funeral`
--

CREATE TABLE `produk_funeral` (
  `kode` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `harga` int(10) NOT NULL,
  `keterangan` text NOT NULL,
  `stok` int(3) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk_funeral`
--

INSERT INTO `produk_funeral` (`kode`, `nama`, `jenis`, `harga`, `keterangan`, `stok`, `gambar`) VALUES
(1, 'Red Sorrow', 'Funeral Flower', 375000, 'rangkaian bunga yang didominasi warna merah gelap yang melambangkan kesedihan', 2, 'gambar_produk/funeral 1.jpg'),
(2, 'Wistful Yellow', 'Funeral Flower', 315000, 'karangan bunga yang penuh dengan warna kuning yang bernuansa kesedihan', 5, 'gambar_produk/funeral 2.jpg'),
(3, 'Miserable Rose', 'Funeral Flower', 289500, 'karangan bunga yang terdiri dari bunga mawar warna merah gelap dan perpaduan dengan warna hitam tampak memberi kesan duka cita', 6, 'gambar_produk/funeral 3.jpg'),
(4, 'Pathetic Flow', 'Funeral Flower', 320000, 'rangkaian bunga yang terdiri dari perpaduan warna merah dan kuning serta disusun sedemikian rupa memberikan kesan duka cita', 0, 'gambar_produk/funeral 4.jpg'),
(5, 'White Mournful', 'Funeral Flower', 335000, 'perpaduan bunga warna putih yang dirangkai sedemikian rupa memberi kesan kesedihan yang mendalam', 2, 'gambar_produk/funeral 5.jpg'),
(6, 'White Mirthless', 'Funeral Flower', 295000, 'karangan bunga bernuansa putih yang tampak sayu dan memberi kesan duka cita', 6, 'gambar_produk/funeral 6.jpg'),
(7, 'Ruthful Orange', 'Funeral Flower', 380000, 'karangan bunga bernuansa orange dan dilengkapi dengan foto mendiang memberi kesan duka cita yang tak terlupakan', 0, 'gambar_produk/funeral 7.jpg'),
(8, 'Woeful Rose', 'Funeral Flower', 395000, 'karangan bunga yang disusun dari mawar merah dan mawar putih tampak memberi kesan kesedihan ', 8, 'gambar_produk/funeral 8.jpg'),
(9, 'Simply Plaintive', 'Funeral Flower', 180000, 'bunga warna putih yang simple dipadukan dengan hiasan daun dan kain hitam yang berkesan duka cita', 12, 'gambar_produk/funeral 9.jpg'),
(10, 'Cheerless Voila', 'Funeral Flower', 260000, 'bunga bernuansa ungu yang tampak pilu memberi kesan kesedihan yang mendalam', 3, 'gambar_produk/funeral 10.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk_graduate`
--

CREATE TABLE `produk_graduate` (
  `kode` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `harga` int(10) NOT NULL,
  `keterangan` text NOT NULL,
  `stok` int(3) NOT NULL,
  `gambar` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk_graduate`
--

INSERT INTO `produk_graduate` (`kode`, `nama`, `jenis`, `harga`, `keterangan`, `stok`, `gambar`) VALUES
(1, 'Cheerfull Salm', 'Graduation Bouquet', 175000, 'sekumpulan bunga mawar berwarna soft dan dihiasi dengan nuansa warna salm yang tampak kalem', 27, 'gambar_produk/grad1.jpg'),
(2, 'Snazzy Flow', 'Graduation Bouquet', 215000, 'Bouquet yang sangat cantik yang berisikan bermacam-macam bunga yang berwarna-warni', 25, 'gambar_produk/grad2.jpg'),
(3, 'Happy Sunflow', 'Graduation Bouquet', 187500, 'Bouquet yang tampak ceria yang dilengkapi dengan bunga matahari yang sangat manis', 21, 'gambar_produk/grad3.jpg'),
(4, 'Sweet Tulip', 'Graduation Bouquet', 225000, 'Bouquet yang kalem dan lucu ini berisikan bunga tulip yang bernuansa soft', 18, 'gambar_produk/grad4.jpg'),
(5, 'Pinky Baby\'s Breath', 'Graduation Bouquet', 195000, 'Bouquet yang lucu ini terdiri dari bunga baby\'s breath yang mewah dan dilengkapi dengan beberapa tangkai mawar berwarna pink', 23, 'gambar_produk/grad5.jpg'),
(6, 'Lovable Rose', 'Graduation Bouquet', 245000, 'Sekumpulan mawar pink yang tampak cantik dijadikan sebuah bouquet', 29, 'gambar_produk/grad6.jpg'),
(7, 'Sweet Lavender', 'Graduation Bouquet', 168000, 'Bouquet bernuansa ungu yang terdiri dari bunga lavender dan bunga-bunga ungu lainnya', 17, 'gambar_produk/grad7.jpg'),
(8, 'Memorable Rose', 'Graduation Bouquet', 265500, 'Bouquet yang tampak manis berisikan mawar merah yang tentunya akan memorable :-)', 27, 'gambar_produk/grad8.jpg'),
(9, 'Simply Carnetion', 'Graduation Bouquet', 187500, 'Bouquet yang berkesan simple dan elegan, dilengkapi dengan bunga anyelir yang manis', 19, 'gambar_produk/grad9.jpg'),
(10, 'Pretty Viola', 'Graduation Bouquet', 210000, 'Bouquet bernuansa violet yang dilengkapi dengan bermacam-macam bunga berwarna ungu yang tampak pretty', 15, 'gambar_produk/grad10.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk_tangkai`
--

CREATE TABLE `produk_tangkai` (
  `kode` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `stok` int(3) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk_tangkai`
--

INSERT INTO `produk_tangkai` (`kode`, `nama`, `jenis`, `harga`, `keterangan`, `stok`, `gambar`) VALUES
(1, 'Tulip', 'Single Flower', 23000, 'tersedia dalam berbagai warna : putih, pink, merah, biru, kuning', 57, 'gambar_produk/tangkai1tulip.jpg'),
(2, 'Lily', 'Single Flower', 21500, 'Bunga Lily yang cantik ini tersedia dalam beberapa warna : kuning, pink, putih, merah', 63, 'gambar_produk/tangkai2lily.jpg'),
(3, 'Rose', 'Single Flower', 24500, 'bunga mawar merah yang tampak mempesona dan memberikan kesan romantis', 78, 'gambar_produk/tangkai3rose.jpg'),
(4, 'Wildflow', 'Single Flower', 18000, 'bunga wildflow yang mungil ini tampak lucu dan menggemaskan', 43, 'gambar_produk/tangkai4wildflowers.jpg'),
(5, 'Carnation', 'Single Flower', 17000, 'bunga anyelir yang sederhana namun tampak mempesona', 45, 'gambar_produk/tangkai5carnation.jpg'),
(6, 'Daisy', 'Single Flower', 20500, 'bunga daisy yang ceria ini tersedia dalam berbagai warna : putih, kuning, pink, salm, merah', 78, 'gambar_produk/tangkai6daisy.jpg'),
(7, 'Orchid', 'Single Flower', 16500, 'bunga orchid yang kecil mungil ini tampak unik dengan bentuknya', 67, 'gambar_produk/tangkai7orchid.jpg'),
(8, 'Lavender', 'Single Flower', 18500, 'bunga lavender yang kecil dan imut, tapi tampak sangat romantis dan menawan', 53, 'gambar_produk/tangkai8lavender.jpg'),
(9, 'Sunflower', 'Single Flower', 23500, 'bunga matahari yang menawan ini tampak sangat ceria dan meningkatkan mood', 57, 'gambar_produk/tangkai9sunflow.jpg'),
(10, 'Dahlia', 'Single Flower', 19000, 'bunga dahlia yang tampak mewah ini tersedia dalam beberapa warna : pink, kuning, putih, biru, merah', 79, 'gambar_produk/tangkai10dahlia.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmp_po_terima`
--

CREATE TABLE `tmp_po_terima` (
  `id` int(10) NOT NULL,
  `nopo` varchar(10) NOT NULL,
  `kd_cus` varchar(10) NOT NULL,
  `kode` int(4) NOT NULL,
  `tanggal` date NOT NULL,
  `qty` int(8) NOT NULL,
  `total` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `gambar` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `fullname`, `gambar`) VALUES
(1, 'hakko', 'fb92eb16a09ed530c91a0e17d9d61a7758754013', 'Hakko Bio Richard', 'gambar_admin/hakkoblogs.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`kd_cus`);

--
-- Indeks untuk tabel `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD PRIMARY KEY (`id_kon`);

--
-- Indeks untuk tabel `po`
--
ALTER TABLE `po`
  ADD PRIMARY KEY (`nopo`);

--
-- Indeks untuk tabel `po_terima`
--
ALTER TABLE `po_terima`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `produk_funeral`
--
ALTER TABLE `produk_funeral`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `produk_graduate`
--
ALTER TABLE `produk_graduate`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `produk_tangkai`
--
ALTER TABLE `produk_tangkai`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `tmp_po_terima`
--
ALTER TABLE `tmp_po_terima`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `konfirmasi`
--
ALTER TABLE `konfirmasi`
  MODIFY `id_kon` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `po_terima`
--
ALTER TABLE `po_terima`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `kode` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `produk_funeral`
--
ALTER TABLE `produk_funeral`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `produk_graduate`
--
ALTER TABLE `produk_graduate`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `produk_tangkai`
--
ALTER TABLE `produk_tangkai`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tmp_po_terima`
--
ALTER TABLE `tmp_po_terima`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
