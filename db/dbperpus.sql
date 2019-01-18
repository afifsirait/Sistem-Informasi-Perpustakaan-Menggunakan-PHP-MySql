-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 18. Januari 2019 jam 10:42
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbperpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `loker_buku` varchar(25) NOT NULL,
  `no_rak` int(5) NOT NULL,
  `no_laci` int(5) NOT NULL,
  `no_boks` int(5) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `nama_pengarang` varchar(100) NOT NULL,
  `tahun_terbit` date NOT NULL,
  `penerima` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `status` varchar(25) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=42 ;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `loker_buku`, `no_rak`, `no_laci`, `no_boks`, `judul_buku`, `nama_pengarang`, `tahun_terbit`, `penerima`, `penerbit`, `status`, `keterangan`) VALUES
(20, 'Buku Anak Anak', 22, 23, 24, 'Mari Belajar Gembira', 'Swedio', '2019-12-31', 'Herman', 'CV. Petir', 'Ada', '10'),
(22, 'Buku Anak Anak', 89, 898, 989, 'Majalah Genie', 'Mahkamah', '2019-12-31', 'Permata', 'CV. Badai', 'Ada', '12'),
(24, 'Buku Resep Masakan', 23, 221, 21, 'Masakan Tradisional Indonesia', 'Chef Juna', '2018-12-02', 'Ronaldo', 'UD. Skyscraper', 'Ada', '20'),
(25, 'Buku Anak Anak', 2, 2, 12, 'hidup sehat', 'muhammad iqbal', '2019-04-03', 'TK zahira', 'indie', 'Ada', '12345'),
(26, 'Buku Anak Anak', 3, 3, 12, 'mari belajar', 'rika hardina', '2019-06-06', 'Tk zahirA', 'Anlitera', 'Ada', '12345'),
(27, 'Buku Anak Anak', 3, 3, 3, 'Sopan santun', 'Dwi hartono', '2019-01-01', 'TK ZAHIRA', 'Andi publisher', 'Ada', '12345'),
(28, 'Buku Anak Anak', 4, 4, 123, 'Bermain dengan alat tradisional', 'Aan sutejo', '2019-01-03', 'Tk zahira', 'Gramedia', 'Ada', '12345'),
(29, 'Buku Anak Anak', 5, 5, 5, 'Belajar membaca', 'Mizan', '2019-01-17', 'Tk zahira', 'Elexmedia', 'Ada', '12345'),
(30, 'Buku Anak Anak', 6, 6, 6, 'Belajar berhitung', 'Tri Azhari', '2019-01-05', 'Tk zahira', 'Agro media', 'Ada', '12345'),
(31, 'Buku Anak Anak', 7, 7, 7, 'Cara mudah membaca tanpa mengeja', 'irma yani', '2019-01-06', 'TK ZAHIRA', 'Gramdia', 'Ada', '12345'),
(32, 'Buku Anak Anak', 8, 8, 8, 'belajar menebalkan', 'tri hawanda', '2018-12-30', 'Tk zahira', 'Andalas', 'Ada', '12345'),
(33, 'Buku Anak Anak', 8, 8, 8, 'Belajar menulis huruf', 'joko susilo', '2019-01-13', 'Tk zahira', 'pustaka', 'Ada', '12345'),
(34, 'Buku Anak Anak', 9, 9, 9, 'Mari bernyanyi bersama', 'Darwin', '2019-01-10', 'Tk zahira', 'Erlangga', 'Ada', '12345'),
(35, 'Buku Anak Anak', 10, 10, 10, 'Makanan sehat', 'endang Mr', '2019-01-17', 'TK ZAHIRA', 'Swedia', 'Ada', '12345'),
(36, 'Buku Anak Anak', 11, 111, 1, 'Huruf hijaiyah', 'reza hardian', '2019-01-09', 'Tk zahira', 'Elex media', 'Ada', '12346'),
(37, 'Buku Anak Anak', 12, 12, 12, 'Mewarnai gambar', 'Irma yani', '2019-01-14', 'Tk zahira', 'Gria husada', 'Ada', '1234567'),
(38, 'Buku Anak Anak', 13, 13, 13, 'Menggunting dan menempel', 'nuraini', '2019-01-12', 'Tk zahira', 'Gagas media', 'Ada', '1234567'),
(39, 'Buku Anak Anak', 14, 14, 14, 'Mengenal Hewan', 'Astuti', '2019-01-06', 'Tk zahira', 'Aksara', 'Ada', '12345678'),
(40, 'Buku Anak Anak', 15, 15, 15, '4 sehat 5 sempurna', 'tri aksara', '2019-01-02', 'Tk zahira', 'Elfata Andi', 'Ada', '12345678'),
(41, 'Buku Anak Anak', 16, 16, 16, 'Lingkungan sehat', 'roro tri muji', '2019-01-09', 'Tk zahira', 'Andalas', 'Ada', '12345678');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE IF NOT EXISTS `peminjaman` (
  `judul_buku` varchar(50) NOT NULL,
  `peminjam` varchar(50) NOT NULL,
  `tgl_pinjam` varchar(25) NOT NULL,
  `tgl_kembali` varchar(25) NOT NULL,
  `lama_pinjam` int(5) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `id` int(5) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`judul_buku`, `peminjam`, `tgl_pinjam`, `tgl_kembali`, `lama_pinjam`, `keterangan`, `id`) VALUES
('Kancil dan Buaya', 'Kamil', '2018-12-03', '2018-12-19', 16, 'Untuk Anak', 9),
('hidup sehat', 'Yanto', '2019-01-15', '2019-01-17', 2, 'untuk anak', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'afifsirait@gmail.com', 'Muhammad Afifurrahman', 1, 'Staff Perpustakaan');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
