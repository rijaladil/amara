-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2022 at 12:52 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amc`
--

-- --------------------------------------------------------

--
-- Table structure for table `amc_m_client`
--

CREATE TABLE `amc_m_client` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `information` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `city_kabupaten` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `address2` varchar(255) NOT NULL COMMENT 'Project Location',
  `city_kabupaten2` varchar(50) NOT NULL,
  `province2` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sector_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `status_client` tinyint(1) NOT NULL COMMENT '0 = Prospective Client  / 1 = Process / 2 = Closing / 3 = Black List',
  `id_user` int(11) NOT NULL COMMENT 'marketing',
  `createDate` datetime NOT NULL DEFAULT current_timestamp(),
  `createUser` int(11) NOT NULL,
  `editDate` datetime NOT NULL,
  `editUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `amc_m_client_email`
--

CREATE TABLE `amc_m_client_email` (
  `id` int(11) NOT NULL,
  `id_email` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `amc_m_client_pic_contact`
--

CREATE TABLE `amc_m_client_pic_contact` (
  `id` int(11) NOT NULL,
  `id_pic` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `pic` varchar(50) NOT NULL COMMENT 'pemrakarsa',
  `pic_contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `amc_m_client_project`
--

CREATE TABLE `amc_m_client_project` (
  `id` int(11) NOT NULL,
  `id_project` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `amc_m_client_tlp`
--

CREATE TABLE `amc_m_client_tlp` (
  `id` int(11) NOT NULL,
  `id_tlp` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `tlp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `amc_m_job`
--

CREATE TABLE `amc_m_job` (
  `id` int(11) NOT NULL,
  `job` varchar(50) NOT NULL,
  `createDate` datetime NOT NULL DEFAULT current_timestamp(),
  `createUser` int(11) NOT NULL,
  `editDate` datetime NOT NULL,
  `editUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amc_m_job`
--

INSERT INTO `amc_m_job` (`id`, `job`, `createDate`, `createUser`, `editDate`, `editUser`) VALUES
(1, 'Meeting', '2019-09-27 08:32:27', 0, '0000-00-00 00:00:00', 0),
(2, 'Sampling', '2019-09-27 08:32:27', 0, '0000-00-00 00:00:00', 0),
(3, 'Office', '2020-09-30 00:00:00', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `amc_m_price`
--

CREATE TABLE `amc_m_price` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL COMMENT 'uraian',
  `unit` varchar(50) NOT NULL COMMENT 'satuan',
  `price` int(11) NOT NULL COMMENT 'harga satuan',
  `createDate` datetime NOT NULL DEFAULT current_timestamp(),
  `createUser` int(11) NOT NULL,
  `editDate` datetime NOT NULL,
  `editUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `amc_m_products`
--

CREATE TABLE `amc_m_products` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `category_teknik` int(1) NOT NULL COMMENT '1 = AMDAL, 2 = PERTEK',
  `ket` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amc_m_products`
--

INSERT INTO `amc_m_products` (`id`, `name`, `category_teknik`, `ket`) VALUES
(1, 'AMDAL', 1, '1'),
(2, 'UKL & UPL', 1, '1'),
(3, 'SPPL', 1, '1'),
(4, 'DELH', 1, '1'),
(5, 'DPLH', 1, '1'),
(6, 'Implementasi Izin Lingkungan', 2, '2'),
(7, 'SURVEY LINGKUNGAN', 2, '2'),
(8, 'Kajian Hidrologi (Peil Banjir)', 1, '2'),
(9, 'Analisis Dampak Lalu Lintas', 1, '2'),
(10, 'Penelitian Lingkungan', 2, '2'),
(11, 'Pengurusan Izin Pengumpulan dan Pemanfaataan limbah B3.', 1, '2'),
(12, 'PERTEK Air Limbah', 1, '2'),
(13, 'Jasa Instalasi Pengolahan Air Limbah (IPAL).', 1, '2'),
(14, 'PERTEK Emisi', 2, '1'),
(15, 'Addendum ANDAL, RKL-RPL', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `amc_m_project`
--

CREATE TABLE `amc_m_project` (
  `id` int(3) NOT NULL,
  `name` varchar(54) DEFAULT NULL,
  `work_package` varchar(270) DEFAULT NULL,
  `location` varchar(25) DEFAULT NULL,
  `date` varchar(4) DEFAULT NULL,
  `project` varchar(31) DEFAULT NULL,
  `sector` varchar(50) NOT NULL,
  `createDate` datetime NOT NULL DEFAULT current_timestamp(),
  `createUser` int(11) NOT NULL,
  `editDate` datetime NOT NULL,
  `editUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `amc_m_project`
--

INSERT INTO `amc_m_project` (`id`, `name`, `work_package`, `location`, `date`, `project`, `sector`, `createDate`, `createUser`, `editDate`, `editUser`) VALUES
(2, 'PT Waskita Beton Precast', 'Studi AMDAL Kegiatan Pembangunan Dermaga Plant Bojonegara', 'Kabupaten Serang', '2021', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(3, 'PT Indonesia Toppan Printing', 'Studi AMDAL Kegiatan Industri Percetakan dan Kemasan Plastik', 'Kabupaten Bekasi', '2021', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(4, 'PT Grenex Tirta Indonesia', 'Studi AMDAL Kegiatan Proyek Pengembangan Sistem Penyediaan Air Minum (SPAM) Cabang Babelan Tahap 1 PDAM Tirta Bhagasasi Bekasi', 'Kabupaten Bekasi', '2020', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(5, 'PT Grenex Perkasa Indonesia', 'Studi AMDAL Kegiatan Proyek Pengembangan Sistem Penyediaan Air Minum (SPAM) Cabang Babelan Tahap 2 PDAM Tirta Bhagasasi Bekasi', 'Kabupaten Bekasi', '2020', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(6, 'PT Sahabat Duta Wisata', 'Studi AMDAL Kegiatan Pembangunan Mall dan Hotel Living World Grand Wisata (Pusat Perbelanjaan dan Sarana Pendukung)', 'Kabupaten Bekasi', '2020', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(7, 'PT Mastertama Adhi Propertindo', 'Studi AMDAL Kegiatan Pembangunan Apartemen Riverdale', 'Kabupaten Bekasi', '2020', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(8, 'PT Lippo Cikarang Tbk', 'Studi AMDAL Kegiatan Pembangunan Mall Living World (Pusat Perbelanjaan) dan Hotel Serta Sarana Pendukungnya', 'Kabupaten Bekasi', '2020', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(9, 'PT Alfa Goldland Realty', 'Studi AMDAL Kegiatan Pembangunan Apartemen Corbetti', 'Tangerang', '2019', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(10, 'PT Global Jet Express', 'Studi AMDAL Kegiatan Pembangunan Pabrik Ekspedisi', 'Tangerang', '2019', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(11, 'PT Fajar Surya Wisesa Tbk', 'Studi AMDAL Kegiatan Pembangunan Pabrik Kertas', 'Bekasi', '2019', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(12, 'PT Bank OCBC NISP Tbk', 'Studi AMDAL Kegiatan Pembangunan Gedung Bank Bertingkat', 'Kabupten Tangerang', '2019', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(13, 'PT Indonesia Power', 'Studi AMDAL Kegiatan Pembangunan PLTD Senayan 150 MW', 'Jakarta Selatan', '2018', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(14, 'Direktorat Jenderal Perhubungan Darat', 'Studi AMDAL Kegiatan Pembangunan Pelabuhan Danau Kerinci', 'Jambi', '2018', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(15, 'PT Hutama Karya (Persero)', 'Studi AMDAL Kegiatan Pembangunan Jalan Toll Jambi', 'Jambi', '2018', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(16, 'PPK Kantor UPBU Wasior', 'Studi AMDAL Kegiatan Pembangunan Bandara Baru Wasior', 'Papua Barat', '2018', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(17, 'PT Fajar Putera Dinasti', 'Studi AMDAL Kegiatan Pembangunan Metland Cibitung', 'Bekasi', '2018', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(18, 'Dinas Tata Kota, Bangunan dan Pemukiman', 'Studi AMDAL Kegiatan Pembangunan Gedung DPRD Kota Tangerang Selatan', 'Tangerang Selatan', '2016', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(19, 'PT Hotel Property Internasional', 'Studi AMDAL Kegiatan Pembangunan Salak Tower Hotel/Salak Boutique The Heritage', 'Bogor', '2016', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(20, 'PT Kereta Api Indonesia (Persero)', 'Studi AMDAL Kegiatan Pembangunan Passenger Crossing di Stasiun Manggarai ', 'Jakarta Selatan', '2016', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(21, 'Dinas Prasarana Jalan Tata Ruang dan Pemukiman', 'Studi AMDAL Kegiatan Pembangunan Jalan dan Terowongan Balingka - Ngarai Sianok', 'Sumatera Barat', '2015', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(22, 'PT Kereta Api Indonesia (Persero)', 'Studi AMDAL Kegiatan Pembangunan Stasiun Sudirmanbaru ', 'Jakarta Pusat', '2015', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(23, 'PT Nusantara Agung Jaya', 'Studi AMDAL Kegiatan Pembangunan Bendung Way Apu', 'Maluku', '2015', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(24, 'PT Kinaya Vasthu Wira', 'Studi AMDAL Kegiatan Pembangunan Apartement', 'Jakarta Barat', '2015', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(25, 'PT Sutera Kharisma Unggul', 'Studi AMDAL Kegiatan Pembangunan Apartemen De Mension', 'Tangerang', '2015', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(26, 'PT Adhi Karya Tbk', 'Studi AMDAL Kegiatan Pembangunan Penyelenggaraan Kereta Api Ringan/Light Rail Transit (LRT)', 'Jabodebek', '2015', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(27, 'PT Angkasa Pura II', 'Studi AMDAL Kegiatan Pembangunan Gedung Training Center dan Wisma', 'Tangerang', '2015', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(28, 'PT Moya Bekasi Jaya', 'Studi AMDAL Kegiatan Pembangunan Penyediaan Air Minum', 'Bekasi', '2015', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(29, 'PT Harapan Global Niaga', 'Studi AMDAL Kegiatan Pembangunan Apartemen dan Perkantoran West Vista Beserta Fasilitasnya', 'Jakarta Barat', '2015', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(30, 'PT Royal Bintang Persada', 'Studi AMDAL Kegiatan Pembangunan Gedung Perkantoran Kino Tower', 'Tangerang', '2014', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(31, 'PT Wahana Agung Indonesia', 'Studi AMDAL Kegiatan Pembangunan Apartemen, Hotel, Rukan dan Fasilitasnya', 'Tangerang', '2014', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(32, 'PT Angkasa Pura II', 'Studi AMDAL Kegiatan Pembangunan Bandar Udara Soepadio - Pontianak', 'Kalimantan Barat', '2014', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(33, 'PT Intan Anugerah Persada', 'Studi AMDAL Kegiatan Pembangunan Residensial Treepark (Apartemen, Soho dan Hotel) Serta Fasilitasnya', 'Tangerang', '2014', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(34, 'PT Soll Marina Property Indonesia', 'Studi AMDAL Kegiatan Pembangunan Ruko, Apartemen dan Hotel', 'Tangerang', '2014', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(35, 'PT Canggih Bersaudara Mulyajaya', 'Studi AMDAL Kegiatan Pembangunan Kawasan Industri Artha Hill', 'Karawang', '2014', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(36, 'PT Nusantara Prospekindo Sukses', 'Studi AMDAL Kegiatan Pembangunan Pusat Perdagangan, Hunian dan Non Hunian', 'Bekasi', '2013', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(37, 'PT Mutiara Mitra Sejahtera', 'Studi AMDAL Kegiatan Pembangunan Kondotel, Pertokoan dan Hotel', 'Bekasi', '2013', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(38, 'PT Bumi Hero Perkasa', 'Studi AMDAL Pertambangan Timah', 'Kepulauan Bangka Belitung', '2013', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(39, 'PT Maritim Sinar Utama', 'Studi AMDAL Kegiatan Pembangunan Pergudangan', 'Jakarta Utara', '2013', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(40, 'PT Bekasi Surya Pratama', 'Studi AMDAL Rencana Pengembangan Kawasan Industri MM2100 Phase 4', 'Bekasi', '2013', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(41, 'PT Moya Tangerang', 'Studi AMDAL Pembangunan Unit Pengolahan Air Minum, Pemipaan Transmisi dan Distribusi Zona 1 dan 2 Kapasitas 1.000 lt/dtk dan Studi AMDAL Pembangunan Unit Pengolahan Air Minum, Pemipaan Transmisi dan Distribusi Zona 3 Kapasitas 700 lt/dtk', 'Tangerang', '2013', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(42, 'Direktorat Jenderal Perhubungan Udara', 'Studi AMDAL Rencana Pembangunan Gedung Jakarta Automated Air Trafic Services (JAATS)', 'Tangerang', '2013', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(43, 'PT Puredelta Lestari dan PT Pembangunan Delta Mas', 'Studi AMDAL Pembangunan Kawasan Industri GIIC', 'Bekasi', '2013', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(44, 'PT Bumi Tangerang Mesindotama', 'Studi AMDAL Pengembangan Pabrik Coklat BT Cocoa', 'Tangerang', '2012', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(45, 'PT Pelindo', 'Studi AMDAL Rencana Pembangunan Gedung Pelatihan Kepelabuhan ', 'Bogor', '2012', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(46, 'PT Multi Energi Dinamika', 'Studi AMDAL PLTM Tarusan', 'Sumatera Barat', '2012', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(47, 'PT Sawindo Cemerlang', 'Studi AMDAL Kegiatan Jalan Akses Perkebunan Kelapa Sawit', 'Gorontalo', '2011', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(48, 'PT Sawit Tiara Nusa', 'Studi AMDAL Kegiatan Perkebunan dan Pabrik Kelapa Sawit', 'Gorontalo', '2010', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(49, 'Dinas Pekerjaan Umum Kota Sangata, Kalimantan Timur', 'Studi AMDAL Kegiatan TPA Kota Sangata', 'Kalimantan Timur', '2010', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(50, 'PT Berkat Berlian Internasional', 'Studi AMDAL Kegiatan Pembangunan Apartement', 'Jakarta Timur', '2010', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(51, 'JOB Pertamina ? Golden Spike Indonesia', 'Studi AMDAL Rencana Peningkatan Operasi & Produksi', 'Sumatera Selatan', '2008', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(52, 'RSUD Kabupaten Mukomuko', 'Studi AMDAL Kegiatan Rencana Pembangunan RSUD', 'Bengkulu', '2007', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(53, 'PT Bangun Sarana Baja', 'Studi AMDAL Pembangunan Industri Peleburan Baja', 'Tangerang', '2007', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(54, 'Pelabuhan Kuala Pembuang', 'Studi AMDAL Pembangunan dan Pengoperasian Pelabuhan', 'Kalimantan Tengah', '2007', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(55, 'JOB Pertamina - Golden Spike Indonesia Ltd', 'Studi AMDAL Lapangan Migas Terbatas Lapangan Air Itam', 'Sumatera Selatan', '2007', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(56, 'PT Wiratman Associated', 'Studi AMDAL Rencana Pembangunan Reservoir Teluk Pusong dan Perbaikan Sistem Drainase Kota Lhokseumawe', 'Aceh', '2007', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(57, 'PT Wiratman Associated', 'Studi AMDAL Pengendalian Banjir Kali Pesanggrahan', 'Jakarta', '2007', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(58, 'Dinas Pekerjaan Umum Kalimantan Timur', 'Studi AMDAL Pembangunan Trase Jalan Baru Arteri Primer Lingkar Luar Samarinda ke Arah Arteri Primer Balikpapan - Samarinda', 'Kalimantan Timur', '2005', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(59, 'PT Wahana Pamunah Limbah Industri', 'Studi AMDAL Pembangunan Industri Pengolahan Limbah Cair B3', 'Serang', '2005', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(60, 'PT Khong Guan Biscuit Indonesia', 'Studi AMDAL Kegiatan Pabrik Biscuit', 'Tangerang', '2005', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(61, 'PT Indocement Tunggal Prakarsa Tbk', 'Studi Studi Addendum ANDAL, RKL dan RPL Kegiatan Industri Semen Unit Citereup', 'Bogor', '2021', 'ADDENDUM AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(62, 'PT Krakatau Semen Indonesia', 'Studi Studi Addendum ANDAL, RKL dan RPL Kegiatan Industri Semen', 'Kota Cilegon', '2021', 'ADDENDUM AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(63, 'PT International Chemical Industry', 'Studi Studi Addendum ANDAL, RKL dan RPL Kegiatan Industri Batu Baterai', 'Jakarta Barat', '2021', 'ADDENDUM AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(64, 'PT Unelec Indonesia', 'Studi Studi Addendum ANDAL, RKL dan RPL Kegiatan Transformator', 'Jakarta Timur', '2018', 'ADDENDUM AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(65, 'PT Wahana Pamunah Limbah Industri', 'Studi Addendum ANDAL, RKL dan RPL Kegiatan Pabrik Pengolahan Limbah Industri', 'Serang', '2018', 'ADDENDUM AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(66, 'PT Moya Tangerang', 'Studi Addendum ANDAL, RKL dan RPL IPA Pramuka - PDAM Tirta Benteng Dalam Penambahan Kapasitas IPA 2X500 lps dan Reservoir', 'Tangerang', '2017', 'ADDENDUM AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(67, 'AirNav Indonesia', 'Studi Adendum ANDAL, RKL dan RPL Kegiatan Gedung Jakarta Automated Air Traffic Services (JAATS)', 'Tangerang', '2016', 'ADDENDUM AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(68, 'PT Rinnai Indonesia', 'Studi Adendum ANDAL, RKL dan RPL Kegiatan Industry Produk Keperluan Rumah Tangga', 'Kabupaten Tangerang', '2016', 'ADDENDUM AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(69, 'Yayasan Islam Syekh-Yusuf', 'Studi Addendum ANDAL, RKL dan RPL Kegiatan Gedung Kampus Universitas Islam Syekh-Yusuf Tangerang', 'Tangerang', '2016', 'ADDENDUM AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(70, 'PT Unelec Indonesia', 'Studi Addendum Andal, RKL dan RPL Kegiatan PT Unelec Indonesia', 'Jakarta Timur', '2016', 'ADDENDUM AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(71, 'PT Pelindo', 'Studi Adendum ANDAL, RKL-RKL Pengembangan Pelabuhan Tarakan', 'Kalimantan Utara', '2015', 'ADDENDUM AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(72, 'PT Pelindo', 'Studi Adendum ANDAL, RKL-RKL Pengembangan Pelabuhan Nunukan', 'Kalimantan Utara', '2015', 'ADDENDUM AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(73, 'PT Semen Lebak', 'Studi Addendum AMDAL Terpadu Perubahan/Penambahan Fasilitas Kegiatan Rencana Pembangunan Pabrik Semen dan Utilitas, Jalan Akses serta Pelabuhan Khusus', 'Kabupaten Lebak', '2015', 'ADDENDUM AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(74, 'PT Metropolis Propertindo Utama', 'Studi Adendum ANDAL, RKL-RKL Mall Metropolis', 'Tangerang', '2014', 'ADDENDUM AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(75, 'PT Rinnai Indonesia', 'Studi Adendum ANDAL, RKL dan RPL Kegiatan Industry Produk Keperluan Rumah Tangga', 'Kabupaten Tangerang', '2014', 'ADDENDUM AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(76, 'PT Wahana Pamunah Limbah Industri', 'Studi Adendum ANDAL, RKL dan RPL Kegiatan Industry Pengelolaan Limbah B3', 'Serang', '2014', 'ADDENDUM AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(77, 'PT Metropolis Propertindo Utama', 'Adendum ANDAL, RKL/RPL Kegiatan Operasional Pusat Perbelanjaan Metropolis Town Square', 'Tangerang', '2014', 'ADDENDUM AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(78, 'PT Spinmill Indah Industri', 'Adendum ANDAL, RKL/RPL Industri Pemintalan Benang', 'Kabupaten Tangerang', '2013', 'ADDENDUM AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(79, 'PT Indofarma Tbk', 'Revisi Rencana Pengelolaan Lingkungan dan Rencana Pemantauan Lingkungan (RKL dan RPL) Kegiatan Industri Farmasi', 'Bekasi', '2005', 'ADDENDUM AMDAL (ANDAL, RKL-RPL)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(80, 'PT BASF Indonesia (Plant Cengkareng)', 'Studi DELH Kegiatan Industri Kimia', 'Jakarta Barat', '2021', 'DELH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(81, 'PT Grenex Tirta Indonesia', 'Studi DELH Kegiatan Operasional IPA Babelan 1', 'Kabupaten Bekasi', '2020', 'DELH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(82, 'PT Grenex Perkasa Indonesia', 'Studi DELH Kegiatan Operasional IPA Babelan 2', 'Kabupaten Bekasi', '2020', 'DELH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(83, 'PT Alfa Goldland Realty', 'Studi DELH Kegiatan Operasional Apartemen dan Rukan', 'Tangerang', '2018', 'DELH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(84, 'PT Intiroda Makmur', 'Studi DELH Kegiatan Industri Barang dari Kawat', 'Tangerang', '2018', 'DELH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(85, 'PT Gajah Tunggal Tbk', 'Studi Dokumen Evaluasi Lingkungan Hidup (DELH) Kegiatan Operasional Pabrik Industri Ban Bermotor', 'Tangerang', '2017', 'DELH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(86, 'PT Moya Bekasi Jaya', 'Studi DELH IPA Tegal Gede (Eksisting) - PDAM Tirta Bhagasasi', 'Bekasi', '2017', 'DELH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(87, 'PT IMS Logistik Indonesia', 'Studi Dokumen Evaluasi Lingkungan Hidup (DELH) Kegiatan Usaha PT IMS Logistik Indonesia', 'Tangerang', '2016', 'DELH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(88, 'PT Nusantara Agung Jaya', 'Studi Dokumen Evaluasi Lingkungan Hidup (DELH) Kegiatan Perluasan Jalan Nasional', 'Maluku Utara', '2015', 'DELH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(89, 'PT Aresta Karya Mandiri', 'Studi Dokumen Evaluasi Lingkungan Hidup (DELH) Kegiatan PLN-Puslitbang', 'Jakarta', '2015', 'DELH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(90, 'PT Greencap NAA Indonesia', 'Studi Dokumen Evaluasi Lingkungan Hidup (DELH) Kegiatan Komplek Perkantoran Bank Indonesia (KOPERBI) Jakarta', 'Jakarta', '2015', 'DELH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(91, 'Universitas Indonesia', 'Studi Dokumen Evaluasi Lingkungan Hidup (DELH) Kegiatan Universitas Indonesia Kampus Salemba', 'Jakarta Pusat', '2015', 'DELH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(92, 'Universitas Indonesia', 'Studi Dokumen Evaluasi Lingkungan Hidup (DELH) Kegiatan Universitas Indonesia Kampus Srengseng Sawah/Jagakarsa', 'Jakarta Selatan', '2015', 'DELH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(93, 'Yayasan Islam Syekh-Yusuf', 'Studi Dokumen Evaluasi Lingkungan Hidup (DELH) Kegiatan Gedung Kampus Universitas Islam Syekh-Yusuf Tangerang', 'Tangerang', '2015', 'DELH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(94, 'PT Mesindo Agung Nusantara', 'Studi Dokumen Evaluasi Lingkungan Hidup (DELH) Kegiatan Gudang, Penyiapan Kabel, Worksop (Maintenance Mesin-Mesin), Dan Budidaya Bibit Tanaman', 'Tangerang', '2015', 'DELH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(95, 'PT Sejahteraraya Anugrahjaya Tbk', 'Studi Dokumen Evaluasi Lingkungan Hidup (DELH) Kegiatan Rumah Sakit Mayapada Tangerang', 'Tangerang', '2015', 'DELH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(96, 'PT Pupuk Swadaya Purimas', 'Studi UKL-UPL Kegiatan Industri Pupuk NPK ', 'Kabupaten OKI', '2021', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(97, 'Yayasan Baytu Rahmah Madania', 'Studi UKL-UPL Kegiatan Pembangunan Sarana Pendidikan', 'Tangerang', '2020', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(98, 'PT Grenex Persada Indonesia', 'Studi UKL-UPL Kegiatan Pembangunan IPA Sukatani 240 Lps', 'Kabupaten Bekasi', '2020', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(99, 'PT Grenex Gradiant Babelan Indonesia', 'Studi UKL-UPL Kegiatan Proyek Pengembangan Sistem Penyediaan Air Minum (SPAM) Cabang Babelan Tahap 3 PDAM Tirta Bhagasasi Bekasi', 'Kabupaten Bekasi', '2020', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(100, 'Yayasan Bintang Rahmah Tangerang', 'Studi Revisi UKL UPL Kegiatan Operasional Rumah Sakit Islam Sari Asih Ar-Rahmah', 'Kota Tangerang', '2020', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(101, 'PT Tigalapan Adam Internasional', 'Studi UKL UPL Kegiatan IPA Tambun', 'Kabupaten Bekasi', '2020', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(102, 'PT Sinar Makmur Sarana', 'Studi UKL UPL Kegiatan IPA Taruma Jaya', 'Kabupaten Bekasi', '2020', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(103, 'PT PLN (Persero)', 'Studi UKL UPL Kegiatan Pembangunan SUTT 150 kV Tenggarong-Sepaku', 'Kalimantan Timur', '2019', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(104, 'PT Pertamina (Persero)', 'Studi UKL UPL Kegiatan Distribusi Pipa Minyak', 'Jambi', '2019', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(105, 'PT Pertamina (Persero)', 'Studi UKL UPL Kegiatan Tempat Penyimpanan Minyak di Bandara', 'Pangkal Pinang', '2019', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(106, 'Dinas PUPR Kota Tangerang', 'Studi UKL UPL Kegiatan Pembangunan Jembatan Ciganea', 'Tangerang', '2019', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(107, 'Dinas PUPR Kota Tangerang', 'Studi UKL UPL Kegiatan Pembangunan Jembatan KA Bandara', 'Tangerang', '2019', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(108, 'Dinas Lingkungan Hidup Kota Tangerang', 'Jasa Konsultansi Penyusunan Dokumen Lingkungan UKL-UPL Gedung ITF', 'Tangerang', '2018', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(109, 'PT Quad Kontena Logistics', 'Studi UKL-UPL Kegiatan Depo Kontainer', 'Jakarta Utara', '2018', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(110, 'PT Colorpak Indonesia', 'Studi UKL dan UPL Kegiatan Industri Tinta', 'Tangerang', '2018', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(111, 'PT Sari Asih', 'Studi UKL UPL Kegiatan Pembangunan Rumah Sakit Sari Asih', 'Tangerang', '2018', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(112, 'PT Krakatau Tirta Industri', 'Studi UKL-UPL Instalasi Pengolahan Lumpur Secara Mekanis (Decanter)', 'Cilegon', '2018', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(113, 'PT IRC Gajah Tunggal Manufacturing Indonesia', 'Studi UKL dan UPL Kegiatan PT IRC Gajah Tunggal Manufacturing Indonesia', 'Tangerang', '2018', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(114, 'PT Handal Jaya Service', 'Studi UKL UPL Kegiatan Depo Kontainer', 'Jakarta Utara', '2017', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(115, 'PT Kereta Api Indonesia (Persero)', 'Studi UKL dan UPL Pembangunan Container Yard di Stasiun Banjarsari antara Muara Enim - Lahat Wilayah Divre III Palembang', 'Palembang', '2017', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(116, 'PT PLN (Persero)', 'Studi UKL UPL Kegiatan Pembangunan SUTT 150kV GI Pangkalan Bun - GI Sukamara dan GI 150 kV Sukamara', 'Kalimantan Tengah', '2017', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(117, 'PT Wangi Energi', 'Studi UKL UPL Kegiatan Stockpile Batu Bara', 'Jakarta Utara', '2017', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(118, 'PT Dayati Defa Contenindo', 'Studi UKL UPL Kegiatan Stockpile Batu Bara', 'Jakarta Utara', '2017', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(119, 'PT Paul & CO Asia', 'Studi UKL UPL Kegiatan Percetakan Kertas', 'Tangerang Selatan', '2017', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(120, 'PT Kereta Api Indonesia (Persero)', 'Studi UKL UPL Kegiatan Peningkatan Kapasitas Dipo Gerbong Rejosari', 'Sumatera Selatan', '2017', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(121, 'PT Aneka Petroindo Raya', 'Studi UKL UPL Kegiatan Pembangunan SPBU', 'Tangerang Selatan', '2017', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(122, 'PT PLN (Persero)', 'Studi UKL UPL Kegiatan Pembangunan SUTT 150kV PLTGU Kalsel Peaker - Seberang Barito', 'Kalimantan Tengah', '2017', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(123, 'PT PLN (Persero)', 'Studi UKL-UPL Gardu Induk 150 kVBatulicin SUTT 150 Kv GI Batulicin-Landing Point Batulicin, Saluran Kabel Laut Tegangan Tinggi (SKLTT) 150 KV Landing Point Batulicin -Landing Point P. Laut, SUTT 150 KV Landing Point P. Laut - GI Kotabaru dan Gardu Induk 150 Kv Kota Baru', 'Kalimantan Selatan', '2017', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(124, 'PT Kereta Api Indonesia (Persero)', 'Studi UKL-UPL Rencana Pembangunan Jalur Kereta Api Bandara Adi Soemarmo', 'Jawa Tengah', '2017', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(125, 'PT Kereta Api Indonesia (Persero)', 'Studi UKL-UPL Kegiatan Pembangunan Jalur Stabling KRLdi Emplasemen Stasiun Serpong, Tangerang dan Rangkasbitung', 'Jawa Tengah', '2017', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(126, 'PT PLN (Persero)', 'Studi UKL UPL Rencana Pembangunan SUTT 150 kV Lati ? Tj. Redep ? Tj. Selor, GI Lati, GI Tj. Redep, Tj. Selor', 'Kalimantan Timur', '2016', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(127, 'PT Hansae Indonesia Utama', 'Studi UKL dan UPL  Industri Pakaian Jadi', 'Jakarta Utara', '2016', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(128, 'PT Panca Amara Utama', 'Studi UKL-UPL Pipanisasi Gas Bumi di Desa Uso', 'Sulawesi', '2016', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(129, 'PT PLN (Persero)', 'Studi UKL-UPL Pembangnan Gardu Induk 150 kV Muara Komam', 'Kalimantan Timur', '2016', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(130, 'PT Sari Asih', 'Studi UKL-UPL Kegiatan Rumah Sakit Sari Asih Cipondoh', 'Tangerang', '2016', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(131, 'PT Kreasi Tehnik Bahari', 'Studi UKL-UPL Kegiatan Operasional Dermaga dan Gudang', 'Jakarta Utara', '2016', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(132, 'Ezi Sushanti, AMD', 'Studi UKL-UPL Kegiatan Workshop Alat Berat', 'Tangerang', '2016', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(133, 'PT Arkonin Engineering Manggala Pratama', 'Studi UKL-UPL Kegiatan Pembangunan Kawasan Pariwisata Bromo Tengger Semeru (BTS)', 'Jawa Timur', '2016', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(134, 'PT Gilang Hydro Lestari', 'Studi UKL-UPL Kegiatan PLTM Cikamunding', 'Lebak', '2015', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(135, 'PT Smart Motor Indonesia', 'Studi UKL dan UPL PT Smart Motor Indonesia', 'Bekasi', '2015', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(136, 'PT Hansae Indonesia Utama', 'Studi UKL dan UPL  Industri Pakaian Jadi', 'Jakarta Utara', '2015', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(137, 'PT Kharisma Astra Nusantara', 'Studi UKL dan UPL  Depo Kontainer', 'Jakarta Utara', '2014', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(138, 'PT YCH Distrikpark Indonesia', 'Studi UKL dan UPL Kegiatan Pembangunan Gudang', 'Bekasi', '2014', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(139, 'PT Gama Griya Sentosa', 'Studi UKL dan UPL Kegiatan Pembangunan Ruko', 'Jakarta Selatan', '2014', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(140, 'PT Dok Duasatu Nusantara', 'Studi UKL dan UPL Kegiatan Pembangunan Galangan Kapal', 'Jakarta Utara', '2014', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(141, 'PT Sun Tak Indonesia', 'Studi UKL dan UPL  PT Sun Tak Indonesia', 'Jakarta Utara', '2013', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(142, 'PT Transcon Indonesia', 'Studi UKL dan UPL  PT Transcon Indonesia', 'Jakarta Utara', '2013', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(143, 'PT Layanan Lancar Lintas Logistindo', 'Studi UKL dan UPL  PT Layanan Lancar Lintas Logistindo', 'Jakarta Utara', '2013', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(144, 'PT Bina Abadi', 'Studi UKL dan UPL Kegiatan Beton Cair/Batching', 'Kalimantan Timur', '2013', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(145, 'PT Tawun Gegunung Energi', 'Studi UKL dan UPL Pengembangan Lapangan Terbatas Blok Tawun - Gegunung', 'Jawa Timur', '2013', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(146, 'PT Mutiara Energi', 'Studi UKL dan UPL Penyaluran Gas ke PT Toyogiri', 'Bekasi', '2013', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(147, 'PT YTI Indonesia', 'Studi UKL dan UPL  PT YTI Indonesia', 'Jakarta Utara', '2012', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(148, 'Kalimantan Kutai Energi', 'Studi UKL dan UPL  Kegiatan Pemboran Sumur Eksplorasi Blok West Sangata', 'Kalimantan Timur', '2012', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(149, 'PT Akino Indonesia Trading', 'Studi UKL dan UPL Kegiatan Pergdangan', 'Jakarta Utara', '2012', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(150, 'PT Saranaguna Makmur Persada', 'Studi UKL dan UPL Kegiatan Penimbunan Alat Berat', 'Jakrta Utara', '2012', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(151, 'PT Bina Abadi', 'Studi UKL dan UPL Kegiatan Beton Cair/Batching', 'Kalimantan Timur', '2012', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(152, 'PT Corum Indonesia', 'Studi UKL dan UPL Kegiatan Pembuatan Jerigen', 'Jakarta Utara', '2012', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(153, 'PT Anugrah Citra Rekonindo', 'Studi UKL dan UPL Kegiatan Pergudangan', 'Jakarta Utara', '2012', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(154, 'PT Indo-Sino Agrochemical', 'Studi UKL dan UPL  Industri Pemberantasan Hama (Formulasi)', 'Bekasi', '2011', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(155, 'PT Ziegler Indonesia', 'Studi UKL dan UPL  PT Ziegler Indonesia', 'Bekasi', '2011', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(156, 'PT Hansae Indonesia Utama', 'Studi UKL dan UPL  Industri Pakaian Jadi', 'Jakarta Utara', '2011', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(157, 'PT Gorontalo Sejahtera Mining', 'Studi UKL dan UPL PT Gorontalo Sejahtera Mining', 'Sulawesi', '2011', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(158, 'PT Gasindo Pratama Sejati', 'Studi UKL dan UPL Kegiatan Penyaluran Gas Bumi Melalu Pipa 18 in Sepanjang 48 Km dari Citarik Kabupaten Karawang - Cikarang Listrindo', 'Bekasi', '2010', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(159, 'PT Rabana Gasindo Utama', 'Studi UKL dan UPL Kegiatan Penyaluran Gas Bumi Melalu Pipa 10 in Sepanjang 3 Km dari Tegal Gede - Cikarang Listrindo', 'Cikarang', '2010', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(160, 'PT Kharisma Astra Nusantara', 'Studi UKL dan UPL kegiatan Depo Kontainer', 'Jakarta Utara', '2009', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(161, 'PT Global Bitumen Utama', 'Studi UKL dan UPL Pemda Bekasi dan Migas', 'Bekasi', '2009', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(162, 'JOB Pertamina-Golden Spike Indonesia Ltd', 'Studi Revisi UKL dan UPL Kegiatan Penyaluran Minyak Bumi Melalui Pipa ? 8? Sepanjang 19 Km dari AIPF ke Pengabuan', 'Sumatera Selatan', '2009', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(163, 'JOB Pertamina-Golden Spike Indonesia Ltd', 'Studi UKL dan UPL Kegiatan Penyaluran Minyak Bumi Melalui Pipa ? 8? Sepanjang 22 Km dari AIPF ke Pengabuan', 'Sumatera Selatan', '2008', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(164, 'PT Indonesia Bulk Terminal', 'Studi UKL dan UPL Kegiatan Dermaga (Jetty)', 'Kalimantan Selatan', '2008', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(165, 'PT Nichias Metalwork Indonesia', 'Studi UKL dan UPL Kegiatan Industri Gasket dan Komponen Penyangga Logam', 'Bekasi', '2008', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(166, 'PT Pandu Dewa Nata', 'Studi UKL UPL Kegiatan Industri Garmen (Pakaian Jadi)', 'Jakarta Utara', '2008', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(167, 'PT Yeon Heung Megasari', 'Studi UKL UPL Kegiatan Industri Garmen (Pakaian Jadi)', 'Jakarta Utara', '2008', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(168, 'PT Colorpak Indonesia', 'Studi UKL dan UPL Kegiatan Industri Tinta Cetak', 'Tangerang', '2008', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(169, 'PT Sinar Syno Kimia', 'Studi UKL dan UPL Industri Kimia', 'Bekasi', '2008', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(170, 'PT Primanusa Palma Energi', 'Studi UKL dan UPL Industri Biodiesel', 'Jakarta Utara', '2008', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(171, 'PT Seasonal Suplies Indonesia', 'Studi UKL dan UPL Industri Wafer Stick', 'Tangerang', '2008', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(172, 'PT Nugraha Mitra Jaya', 'Studi UKL dan UPL Kegiatan Industri Zinc Oxide', 'Tangerang', '2008', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(173, 'PT Hansae Indonesia Utama', 'Studi UKL dan UPL  Industri Pakaian Jadi', 'Jakarta Utara', '2007', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(174, 'PT Fucolor Chemical Industri', 'Studi UKL dan UPL Kegiatan Industri Kimia Tekstil', 'Jakarta Utara', '2007', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(175, 'PT Total Chemindo Loka', 'Studi UKL UPL Kegiatan Industri Detergent', 'Jakarta Timur', '2007', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(176, 'PT Merpati Petro', 'Studi UKL dan UPL Kegiatan SPBU', 'Tangerang', '2007', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(177, 'PT Mahaputra Adi Nusa', 'Studi UKL dan UPL Kegiatan industri Pengolahan Minyak Pelumas Bekas', 'Jakarta Timur', '2007', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(178, 'PT Hansoll Indo', 'Studi UKL dan UPL Kegiatan Industri Garmen (Pakaian Jadi)', 'Jakarta Utara', '2007', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(179, 'PT Bintang Adibusana', 'Studi UKL dan UPL Kegiatan Industri Garmen (Pakaian Jadi)', 'Jakarta Utara', '2007', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(180, 'PT Inco Sindo Sukses', 'Studi UKL dan UPL Kegiatan Industri Garmen (Pakaian Jadi)', 'Jakarta Utara', '2006', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(181, 'PT  Inanta Mandiri', 'Studi UKL dan UPL SPBU', 'Jakarta Barat', '2006', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(182, 'PT Selindo', 'Studi UKL dan UPL Kegiatan Industri Bahan Makanan', 'Tangerang', '2006', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(183, 'PT Gasindo Piranti Nusa', 'Studi UKL dan UPL Kegiatan Pengisian Gas LPG', 'Bekasi', '2006', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(184, 'PT Walinusa Energi', 'Studi UKL dan UPL Pemasangan Pipa Distribusi Gas 12? Sepanjang 14 Km', 'Jawa Timur', '2006', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(185, 'PT Sigma Rancang Perdana', 'Studi UKL dan UPL Kegiatan SPBU', 'Jakarta Selatan', '2006', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(186, 'PT Surya Jaya Liga Mandiri', 'Studi UKL dan UPL SPBU', 'Jakarta Barat', '2006', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(187, 'PT Cicero Indonesia', 'Studi UKL UPL PT Cicero Indonesia', 'Jakrta Timur', '2005', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(188, 'Rumah Sakit Bersalin YPK', 'Studi UKL dan UPL Rumah Sakit Bersalin', 'Jakarta Pusat', '2005', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(189, 'PT Gandum Mas Kencana', 'Studi UKL dan UPL Industri Makanan', 'Tangerang', '2005', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(190, 'PT Trofik Energi Pandan', 'Studi UKL dan UPL Seismik 2 D', 'Sumatera', '2005', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(191, 'PT Widico Stantina Biscuit', 'Studi UKL dan UPL Industri Wafer Stick', 'Tangerang', '2005', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(192, 'PT Sumi Indo Kabel', 'Studi UKL dan UPL Kegiatan Industri Kabel', 'Tangerang', '2005', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(193, 'PT Manna Food Indonesia', 'Studi UKL dan UPL Industri Kembang Gula', 'Tangerang', '2005', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(194, 'RS. THT Prof. Nizar', 'Studi UKL dan UPL RS. THT Prof Nizar', 'Jakarta Pusat', '2004', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(195, 'PT Ziegler Indonesia', 'Studi UKL dan UPL PT Ziegler Indonesia', 'Bekasi', '2004', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(196, 'RS. Yumaga', 'Studi UKL dan UPL RS. Yumaga', 'Serang', '2004', 'UKL-UPL', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(197, 'PT Garuda Indonesia (Persero) Tbk', 'Studi DPLH Kegiatan Klinik', 'Jakarta Pusat', '2021', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(198, 'PT Pembangunan Deltamas', 'Studi DPLH Kegiatan Deltamas Sport Center dan Kolam Renang Pasadena', 'Bekasi', '2020', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(199, 'PT Sari Asih Infiardi', 'Studi DPLH Kegiatan Rumah Sakit Sari Asih Sangiang', 'Kota Tangerang', '2020', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(200, 'PT Kehatilab Indonesia', 'Studi DPLH Kegiatan Laboratorium Lingkungan', 'Tangerang Selatan', '2020', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(201, 'PT PLN (Persero)', 'Studi DPLH Kegiatan Operasional Perkantoran dan Rumah Dinas', 'Kalimantan Timur', '2017', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(202, 'CV Hidup Sukses Mandiri', 'Studi DPLH Kegiatan Penimbunan Pasir dan Batu', 'Jakarta Utara', '2017', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(203, 'CV Helen Bersaudara', 'Studi DPLH Kegiatan Penimbunan Pasir dan Batu', 'Jakarta Utara', '2017', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(204, 'PT Roda Mandala Asiamakmur', 'Studi DPLH Kegiatan Penimbunan Pasir dan Batu', 'Jakarta Utara', '2017', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(205, 'PT Akssara Buana Internusa', 'Studi DPLH Kegiatan Penimbunan Pasir dan Batu', 'Jakarta Utara', '2017', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(206, 'PT Multi Trans Sejahtera', 'Studi DPLH Kegiatan Penimbunan Pasir dan Batu', 'Jakarta Utara', '2017', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(207, 'Asosiasi Asuransi Jiwa Indonesia', 'Studi DPLH Kegiatan Perkantoran Asuransi', 'Jakarta Pusat', '2017', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(208, 'PT Nindya Karya (Persero)', 'Studi DPLH Kegiatan Perkantoran', 'Jakarta Timur', '2017', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(209, 'PT Multisukses Jayasakti', 'Studi DPLH Kegiatan Operasional Industri Pakaian Jadi', 'Jakarta Timur', '2016', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(210, 'PT Aisin Indonesia', 'Studi DPLH Gedung Consumer Goods', 'Bekasi', '2015', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(211, 'PT Dok Duasatu Nusantara', 'Studi DPLH Kegiatan Galangan Kapal', 'Jakarta Utara', '2014', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(212, 'PT Gasindo Pratama Sejati', 'Studi DPLH Kegiatan Penyaluran Gas Bumi Melalui Pipa ? 18? Sepanjang 48,6 Km', 'Bekasi', '2014', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(213, 'PT Bangun Busana Maju', 'Studi DPLH Industri Pakaian Jadi', 'Jakarta Utara', '2011', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(214, 'PT Fokus Garmindo', 'Studi DPLH Industri Pakaian Jadi', 'Jakarta Utara', '2011', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(215, 'PT Indonesia Airin Marine Supply', 'Studi DPLH Kegiatan Depo Kontainer dan Pergudangan', 'Jakarta Utara', '2011', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(216, 'PT Eins Trend Global', 'Studi DPLH Industri Pakaian Jadi', 'Jakarta Utara', '2011', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(217, 'PT Gunung Abadi', 'Studi DPLH Industri Pakaian Jadi', 'Jakarta Utara', '2011', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(218, 'PT Uni Kyung Seung International', 'Studi DPLH Industri Pakaian Jadi', 'Jakarta Utara', '2011', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(219, 'PT Golden Continental', 'Studi DPLH Industri Pakaian Jadi', 'Jakarta Utara', '2011', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(220, 'PT NB Indonesia', 'Studi DPLH Industri Pakaian Jadi', 'Jakarta Utara', '2011', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(221, 'PT Adidaya Indo-China Industry', 'Studi DPLH PT Adidaya Indo-China Industry', 'Jakarta Utara', '2011', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(222, 'PT Wooin Indonesia', 'Studi DPPL Kegiatan Operasional Industri Pakaian Jadi', 'Jakarta Utara', '2011', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(223, 'PT Indosox Mills', 'Studi DPPL Kegiatan Industri Perajutan Tekstil (Kaos Kaki dan Sarung Tangan)', 'Jakarta Utara', '2010', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(224, 'PT Multi Well', 'Studi DPPL Kegiatan Industri Bordir/Sulaman', 'Jakarta Utara', '2010', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(225, 'PT Satwa Boga Sempurna', 'Studi DPLH Industri Pakan Jadi Ternak Unggas', 'Kabupaten Tangerang', '2010', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(226, 'PT Multisukses Jayasakti', 'Studi DPPL Kegiatan Operasional Industri Pakaian Jadi', 'Jakarta Timur', '2010', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(227, 'PT H.M.L Indonesia', 'Studi DPPL PT H.M.L Indonesia', 'Jakarta Utara', '2009', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(228, 'PT Karya Tehnik Pasirindo', 'Studi DPPL Kegiatan Stockpile Pasir', 'Jakarta Utara', '2009', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(229, 'PT Rismar Daewo Apparel', 'Studi DPPL Kegiatan Operasional Industri Pakaian Jadi', 'Jakarta Utara', '2009', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(230, 'PT Wooin Indonesia', 'Studi DPPL Kegiatan Operasional Industri Pakaian Jadi', 'Jakarta Utara', '2009', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(231, 'PT Andhika Makmur Persada', 'Studi DPPL Kegiatan Operasional Pengangkut, Penyimpanan dan Pengumpulan Limbah B3', 'Jakarta Timur', '2009', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(232, 'PT Segara Pacifik Maju', 'Studi DPPL Kegiatan Operasional Depot Container', 'Jakarta Utara', '2009', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(233, 'PT Multi Bina Pura International', 'Studi DPPL Kegiatan Operasional Depot Container', 'Jakarta Utara', '2009', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(234, 'PT NYK Puninar Logistics Indonesia', 'Studi DPPL Kegiatan Operasional Depot Container', 'Jakarta Timur', '2009', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(235, 'PT Ritra Konnas Freight Center', 'Studi DPPL Kegiatan Operasional Depot Container', 'Jakarta Utara', '2009', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(236, 'PT Masaji Tatanan Kontainer', 'Studi DPPL Kegiatan Operasional Depot Container', 'Jakarta Utara', '2009', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(237, 'PT Setia Putra Sejati', 'Studi DPPL Kegiatan Operasional Depot Container', 'Jakarta Utara', '2009', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(238, 'PT Dwipa Kharisma Mitra', 'Studi DPPL Kegiatan Operasional Depot Container', 'Jakarta Utara', '2009', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(239, 'PT Global Terminal Marunda', 'Studi DPPL Kegiatan Operasional Depot Container', 'Jakarta Utara', '2009', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(240, 'PT Kharisma Astra Nusantara', 'Studi DPPL Kegiatan Operasional Depot Container', 'Jakarta Utara', '2009', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(241, 'PT Gema Nawagraha Sejati', 'Studi DPPL Kegiatan Operasional Depot Container', 'Jakarta Utara', '2009', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(242, 'PT Karya Teknik Pasirindo', 'Studi DPPL Kegiatan Operasional Stock Pile', 'Jakarta Utara', '2009', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(243, 'PT Multimas Nabati Asahan', 'Studi DPPL Kegiatan Industri Minyak Nabati dan Mentega Nabati', 'Jakarta Timur', '2008', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(244, 'PT Glorius Interbuana', 'Studi DPPL Kegiatan Operasional Depot Container', 'Jakarta Utara', '2008', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(245, 'PT Intinusa Mitra Sukses', 'Studi DPPL Kegiatan Operasional Stock Pile', 'Jakarta Utara', '2008', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(246, 'PT Hutamasarana Dhianarta', 'Studi DPPL Kegiatan Operasional Dermaga', 'Jakarta Utara', '2008', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(247, 'PT Kreasi Tehnik Bahari', 'Studi DPPL Kegiatan Operasional Dermaga dan Gudang', 'Jakarta Utara', '2008', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(248, 'PT Amcor Flexibles Indonesia', 'Studi ANDALALIN Kegiatan Industri Kemasan Plastik', 'Tangerang', '2021', 'ANDALALIN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(249, 'PT BASF Indonesia (Plant Cengkareng)', 'Studi ANDALALIN Kegiatan Industri Kimia', 'Jakarta Barat', '2021', 'ANDALALIN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(250, 'PT International Chemical Industri', 'Studi ANDALALIN Kegiatan Industri Batu Baterai', 'Jakarta Barat', '2021', 'ANDALALIN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(251, 'PT. Aneka Petroindo Raya', 'Studi ANDALALIN Kegiatan Pembangunan SPBU', 'Tangerang Selatan', '2017', 'ANDALALIN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(252, 'PT Kinaya Vasthu Wira', 'Studi ANDALALIN Kegiatan Pembangunan Apartemen West Vista', 'Jakarta Barat', '2015', 'ANDALALIN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);
INSERT INTO `amc_m_project` (`id`, `name`, `work_package`, `location`, `date`, `project`, `sector`, `createDate`, `createUser`, `editDate`, `editUser`) VALUES
(253, 'PT Maritim Sinar Utama', 'Studi ANDALALIN Kegiatan Pembangunan Container Yard MSU', 'DKI Jakarta', '2013', 'ANDALALIN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(254, 'ASDEKI DPW DKI Jakarta', 'Studi ANDALALIN Kegiatan  Perusahaan-perusahaan Asosiasi Depo Kontainer Indonesia Dewan Pengurus Wilayah DKI Jakarta (ASDEKI DPW DKI Jakarta)', 'DKI Jakarta', '2013', 'ANDALALIN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(255, 'PT BASF Indonesia (Plant Merak)', 'Studi IPLC Kegiatan Industri Kimia', 'Merak', '2020', 'KAJIAN LINGKUNGAN (PERTEK)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(256, 'PT PLN (Persero)', 'Studi IPLC Kegiatan PLTG/MG Kaltim Peaker 100 MW', 'Kalimantan Timur', '2017', 'KAJIAN LINGKUNGAN (PERTEK)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(257, 'PT PLN (Persero)', 'Studi IPLC PLTU Kariangau', 'Kalimantan Timur', '2016', 'KAJIAN LINGKUNGAN (PERTEK)', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(258, 'PT Indonesia Toppan Printing', 'Studi IMB Kegiatan Industri Percetakan dan Kemasan Plastik', 'Kabupaten Bekasi', '2021', 'IMB', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(259, 'PT Waskita Beton Precast TBK', 'Pengurusan Izin Pengusahaan Air Tanah Sumur Bor (SIPA) di Workshop Cikopo', 'Kabupaten Purwakarta', '2021', 'DPPL/DPLH', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(260, 'Dinas Lingkungan Hidup Kota Tangerang', 'Jasa Konsultansi Penelitian Kegiatan Pemantauan Kualitas Air Sungai dan Kondisi Ekologis Kota Tangerang Semester I Tahun 2019', 'Tangerang', '2019', 'KAJIAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(261, 'Dinas Lingkungan Hidup Kota Tangerang', 'Penyusunan Dokumen Sistem Manajemen Adipura Tahun 2019 Kota Tangerang', 'Tangerang', '2019', 'KAJIAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(262, 'Dinas Bappeda Kota Tangerang', 'Studi Dokumen Limbah B3', 'Tangerang', '2019', 'KAJIAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(263, 'Dinas Bappeda Kota Tangerang', 'Studi Dokumen Sumur Dalam', 'Tangerang', '2019', 'KAJIAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(264, 'Dinas Lingkungan Hidup Kota Tangerang', 'Jasa Konsultansi Penelitian Pemantauan Lingkungan Kegiatan Emisi Kota Tangerang', 'Tengerang', '2019', 'KAJIAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(265, 'Dinas Lingkungan Hidup Kota Tangerang', 'Jasa Konsultansi Penelitian Pemantauan Kualitas Udara dan Kebisingan Kota Tangerang Semester I Tahun 2019', 'Tangerang', '2019', 'KAJIAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(266, 'Dinas Lingkungan Hidup Kota Tangerang', 'Jasa Konsultansi Penelitian Non Kontruksi Kegiatan Pengawasan Pelaksanaan\nKebijakan Lingkungan Hidup Kota Tangerang Tahun 2019\n', 'Tangerang', '2019', 'KAJIAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(267, 'Dinas Lingkungan Hidup Kota Tangerang', 'Jasa Konsultansi Penelitian Non Kontruksi Kegiatan Pengawasan Pelaksanaan\nKebijakan Lingkungan Hidup Kota Tangerang Tahun 2019\n', 'Tangerang', '2019', 'KAJIAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(268, 'Dinas Lingkungan Hidup Kota Tangerang', 'Jasa Konsultansi Penelitian Non Kontruksi Kegiatan Pengawasan Pelaksanaan\nKebijakan Lingkungan Hidup Kota Tangerang Tahun 2018\n', 'Tangerang', '2018', 'KAJIAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(269, 'Dinas Lingkungan Hidup Kota Tangerang', 'Penyusunan Kajian Analisa Kualitas Kompos Kegiatan Pengembangan Teknologi Pengolahan Sampahan', 'Tangerang', '2018', 'KAJIAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(270, 'Dinas Lingkungan Hidup Kota Tangerang', 'Studi Dokumen Adipura Tahun 2018 Kota Tangerang', 'Tangerang', '2018', 'KAJIAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(271, 'Dinas Lingkungan Hidup Kota Tangerang', 'Jasa Konsultansi Penelitian Kegiatan Pemantauan Kualitas TPA Rawa Kucing Semester II Tahun 2018', 'Tangerang', '2018', 'KAJIAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(272, 'Dinas Lingkungan Hidup Kota Tangerang', 'Jasa Konsultansi Penelitian Kegiatan Pemantauan Kualitas Air Sungai dan Kondisi Ekologis Kota Tangerang', 'Tangerang', '2017', 'KAJIAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(273, 'PT Shinta Indah Jaya', 'Implementasi dan Pelaporan Hasil Pemantauan Lingkungan SBU TSJ Tahun 2015-2016', 'Tangerang', '2015', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(274, 'PT Sulindafin', 'Implementasi RKL-RPL Kegiatan Industri Tekstil', 'Tangerang', '2020', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(275, 'PT Damai Indah Golf', 'Implementasi RKL-RPL Kegiatan Lapangan Golf BSD', 'Tangerang Selatan', '', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(276, 'PT Castrol Indonesia', 'Implementasi RKL-RPL Kegiatan Industri Oli', 'Merak', '', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(277, 'PT Usaha Gedung Bimantara', 'Implementasi RKL-RPL Kegiatan Gedung Perkantoran Menara Kebon Sirih', 'Jakarta Pusat', '', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(278, 'PT Jatake Keramindo', 'Implementasi RKL-RPL Kegiatan Industri Keramik', 'Tangerang', '', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(279, 'PT NGK Busi Indonesia', 'Implementasi RKL-RPL Kegiatan Industri Busi', 'Jakarta Timur', '', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(280, 'PT Odira Energi Persada', 'Implementasi RKL-RPL Kegiatan Kilang Mini LPG dan Pipa Transmisi Gas SP Tambun ? SK Tegal Gede', 'Bekasi', '', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(281, 'PT Air Liquid Indonesia', 'Implementasi RKL-RPL Kegiatan Industri Gas', 'Bekasi', '', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(282, 'PT Air Liquid Indonesia', 'Implementasi RKL-RPL Kegiatan Industri Gas', 'Bojonegara', '', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(283, 'PT Air Liquid Indonesia', 'Implementasi RKL-RPL Kegiatan Industri Gas', 'Cilegon', '', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(284, 'PT Perusahaan Gas Negara (PGN)', 'Jasa Konsultan Implementasi dan Pelaporan Hasil Pemantauan Lingkungan SBU TSJ Tahun 2015-2016', 'Pulau Sumatera - Jawa', '2015', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(285, 'Kodeco Energi Ltd', 'Implementasi RKL-RPL Kegiatan ORF Gresik', 'Jawa Timur', '', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(286, 'PT. Pertamina Hulu Energi ', 'Implementasi RKL-RPL Kegiatan Pengeboran Minyak dan Gas', 'Jawa Timur', '2019', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(287, 'PT PLN (Persero)', 'Implementasi RKL-RPL Kegiatan Teluk Sirih Sumatera Barat dan PLTU 4 dan 3 Bangka Belitung', 'Sumatera Barat', '', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(288, 'Badan Pengelolaan Lingkungan Hidup Kota Bekasi', 'Implementasi RKL-RPL Kegiatan Pengujian Kualitas Udara Ambient Jalan Raya Kota Bekasi', 'Bekasi', '', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(289, 'JOB Pertamina? Medco E&P Tomori', 'Implementasi RKL-RPL Kegiatan Pengembangan Lapangan Migas di Blok Senoro-Toili', 'Sulawesi Tengah', '', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(290, 'TAC Pertamina EP-Elipse Energi Jatirarangon Wahana Ltd', 'Implementasi RKL-RPL Kegiatan Operasional Pengembangan Lapangan Migas di Lapangan Jatirarangon', 'Bekasi', '', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(291, 'PT Pion Quarry Nusantara', 'Implementasi RKL-RPL Kegiatan Usaha Pertambangan Batu Gamping dan Associate Mineral', 'Lebak', '', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(292, 'PT Semen Lebak', 'Implementasi RKL-RPL Kegiatan Pembangunan Pabrik Semen dan Untilitas, Jalur Akses Serta Pelabuhan Khusus', 'Lebak', '2020', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(293, 'Tokyu Wika Joint Operation', 'Implementasi RKL-RPL Kegiatan Pembangunan Jalur MRT', 'DKI Jakarta', '', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(294, 'Obayashi Shimizu Jaya KJV', 'Implementasi RKL-RPL Kegiatan Pembangunan Jalur MRT', 'DKI Jakarta', '2015', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(295, 'Shimizu Obayashi Wijaya KJV', 'Implementasi RKL-RPL Kegiatan Pembangunan Jalur MRT Jakarta CP 103', 'DKI Jakarta', '2015', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(297, 'PT Layanan Lancar Lintas Logistindo', 'Implementasi RKL-RPL Kegiatan Logistik', 'Jakarta Utara', '2021', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(298, 'PT Tainan Enterprises Indonesia', 'Implementasi RKL-RPL Kegiatan Industri Garment', 'Jakarta Utara', '2021', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(299, 'PT Rinnai Indonesia Plant Cikupa', 'Implementasi RKL-RPL Kegiatan Industri Perlengkapan Rumah Tangga', 'Tangerang', '2016', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(300, 'PT Rinnai Indonesia Plant Balaraja', 'Implementasi RKL-RPL Kegiatan Industri Perlengkapan Rumah Tangga', 'Tangerang', '2016', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(301, 'PT Colorpak Indonesia', ' Laporan Pelaksanaan RKL-RPL  Semester I Tahun 2021 Colorpak Indonesia\r\n', 'Tangerang', '2021', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(302, 'PT Pan Pacific Jakarta', 'Implementasi RKL-RPL Kegiatan Industri Garment Semester II Tahun 2018\r\n', 'Jakarta Utara', '2018', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(303, 'PT Bina Bangun Wibawa Mukti', 'Implementasi RKL-RPL Kegiatan Kilang LPG Tambun Semester I Tahun 2018\r\n', 'Bekasi', '2018', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(304, 'PT Kurnia Tirta Samudera Makmur', 'Implementasi RKL-RPL Kegiatan Bongkar Muat Pelabuhan Semester I Tahun 2021\r\n', 'Jakarta Utara', '2021', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(305, 'PT Hutama Sarana Dhianarta', 'Implementasi RKL-RPL Kegiatan Industri Garment Pelabuhan', 'Jakarta Utara', '2021', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(306, 'PT Glorious Interbuana', 'Implementasi RKL-RPL Kegiatan Depo Container', 'Jakarta Utara', '2016', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(307, 'PT Kereta Api Indonesia (Persero)', 'Implementasi RKL-RPL Kegiatan Pembangunan Jalur KA Stasiun Batu Ceper ? Bandara Soekarno Hatta', 'Tangerang', '2016', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(308, 'PT Wooin Indonesia', 'Implementasi RKL-RPL Kegiatan Industri Garment Pelabuhan', 'Jakarta Utara', '', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(309, 'PT Wahyu Abadi', 'Implementasi RKL-RPL Kegiatan Industri Garment Pelabuhan', 'Jakarta Utara', '2017', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(310, 'PT Karya Tehnik Pasirindo', 'Implementasi RKL-RPL Kegiatan Stock Pile Pasir', 'Jakarta Utara', '2017', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(311, 'PT Young IL Indonesia', 'Implementasi RKL-RPL Kegiatan Pabrik', 'Jakarta Utara', '2017', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(312, 'PT Multisukses Jayasakti', 'Implementasi RKL-RPL Kegiatan Industri Manufaktur', 'Jakarta Timur', '2021', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(313, 'PT Adhi Karya Persero', 'Implementasi RKL-RPL Kegiatan Pembangunan Jalur LRT', 'Jakarta Timur', '2021', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(314, 'PT Prima Tedja Kharisma', 'Implementasi RKL-RPL Kegiatan Kawasan Pergudangan', 'Tangerang', '2021', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(315, 'PT Royal Bintang Persada', 'Implementasi RKL-RPL Kegiatan Hotel/Apartemen', 'Tangerang', '2020', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(316, 'PT Kreasi Teknik Bahari', 'Implementasi RKL-RPL Kegiatan Dermaga', 'Jakarta Utara', '2021', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(317, 'PT Transportasi Gas Negara', 'Implementasi RKL-RPL Kegiatan Pipanisasi Gas Bumi', 'Sumartera Selatan', '', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(318, 'KSO DISY', 'Implementasi RKL-RPL Kegiatan Jalan Toll', 'Jakarta Timur', '', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(319, 'PT Trafoindo Prima Perkasa', 'Pemantauan Lingkungan Pabrik Kabel', 'Tangerang', '2020', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(320, 'AirNav Indonesia', 'Implementasi RKL-RPL Kegiatan Perum LPPNPI', 'Tangerang', '2021', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(321, 'PT Panca Amara Utama', 'Kegiatan Pemantauan Lingkungan Pabrik Amoniak', 'Sulawesi Selatan', '2018', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(322, 'PT Envilab Indonesia', 'Implementasi RKL-RPL Kegiatan Pertamina Hulu Energi WMO', 'Jawa Timur', '2016', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(323, 'PT Paul & CO Asia', 'Pemantauan Lingkungan Kegiatan Percetakan Kertas', 'Tangerang', '2021', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(324, 'PT Kawasan Berikat Nusantara (Persero)', 'Pemantaual Lingkungan Pembangunan Dermaga KBN', 'Jakarta Utara', '2019', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(325, 'P3SRS Menara Kuningan', 'Pemantauan Lingkungan Kegiatan Apartemen', 'Jakarta Pusat', '2021', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(326, 'PT Sumi Indo Kabel', 'Pemantauan Lingkungan Kegiatan Pabrik Kabel', 'Tangerang', '2021', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(327, 'PT Gema Nawagraha Sejati', ' Laporan Pelaksanaan RKL-RPL  Semester I Tahun 2021 Gema Nawagraha Sejati\r\n', 'Jakarta Utara', '2021', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(328, 'PT Triniti Menara Serpong', 'Pemantauan Lingkungan Kegiatan Operasinal Apartemen Collins', 'Tangerang', '2020', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(329, 'PT Inter World Steel Mills Indo', 'Pemantauan Lingkungan Kegiatan Industri Baja', 'Tangerang', '2021', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(330, 'PT Alfa Goldland Realty', 'Pemantauan Lingkungan Kegiatan Operasional Tower Paddington', 'Tangerang', '2020', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(331, 'PT Alfa Goldland Realty', 'Pemantauan Lingkungan Kegiatan Operasional Tower Prominence', 'Tangerang', '2020', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(332, 'PT Moya Bekasi Jaya', 'Pemantauan Lingkungan Kegiatan Penyediaan Air Minum / PDAM', 'Tangerang', '2020', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(333, 'PT PLN (Persero) UID Banten', 'Pemantauan Lingkungan Kegiatan Kantor Unit Distribusi Banten di 9 Lokasi', 'Tangerang', '2020', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(334, 'PT Hotmal Jaya Perkasa', 'Pemantauan Lingkungan Kegiatan Industri Pelapis Besi', 'Tangerang', '2021', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(335, 'PT Fajar Surya Wisesa Tbk', 'Pemantauan Lingkungan Kegiatan Pembangunan Pabrik Kertas', 'Bekasi', '2020', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(336, 'PT PGAS Solution', 'Implementasi RKL-RPL Kegiatan Jasa Penyaluran dan Distribusi Gas di Indonesia', 'Jakarta', '', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(337, 'PT Alam Lestari Unggul', 'Pemantauan Lingkungan Kegiatan Manufaktur Dalam Pembuatan Kawat Las', 'Kabupaten Tangerang', '2021', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(338, 'PT MRT Jakarta (Perseroda)', 'Implementasi RKL-RPL Kegiatan Tahap Pra-Konstruksi MRT Fase II ', 'DKI Jakarta', '2021', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(339, 'PT MRT Jakarta (Perseroda)', 'Implementasi RKL-RPL Kegiatan Operasional MRT Fase I', 'DKI Jakarta', '2021', 'PEMANTAUAN LINGKUNGAN', 'Energi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(340, 'Pergudangan Duta Indah Sentoha', 'Pemantauan Lingkungan Kegiatan Pergudangan Duta Indah Sentoha ', 'Tangerang', '2021', 'PEMANTAUAN LINGKUNGAN', '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(342, 'PT Amcor Flexibles Indonesia', 'Studi AMDAL Kegiatan Industri Kemasan Plastik\r\n', 'Tangerang', '2021', 'AMDAL (ANDAL, RKL-RPL)', '', '2021-06-22 16:45:00', 0, '0000-00-00 00:00:00', 0),
(344, 'PT Setiawan Dwi Tunggal', ' Laporan Pelaksanaan RKL-RPL  Semester I Tahun 2021 South City\r\n', 'Tangerang Selatan', '2021', 'PEMANTAUAN LINGKUNGAN', '', '2021-11-08 16:13:47', 0, '0000-00-00 00:00:00', 0),
(345, 'PT Glorious Interbuana', ' Laporan Pelaksanaan RKL-RPL  Semester I Tahun 2021 Glorious\r\n', 'DKI Jakarta', '2021', 'PEMANTAUAN LINGKUNGAN', '', '2021-11-08 16:17:34', 0, '0000-00-00 00:00:00', 0),
(346, 'PT Manambang Muara Enim', 'Addendum ANDAL, PERTEK Lalulintas, Emisi dan Air Limbah serta TPS B3 kegiatan Tambang Batu Bara PT. Manambang Muara Enim \r\n', 'Sumatera Selatan', '2021', 'ADDENDUM AMDAL (ANDAL, RKL-RPL)', 'Batu Bara', '2021-11-08 16:22:19', 0, '0000-00-00 00:00:00', 0),
(347, 'PDAM Tirta Bhagasasi Bekasi', 'DPLH PDAM Hegar Mukti\r\n', 'Bekasi', '2021', 'DPPL/DPLH', '', '2021-11-08 16:25:38', 0, '0000-00-00 00:00:00', 0),
(348, 'PT Delta Kontainer Depot', 'Penyusunan DPLH Kegiatan PT.Delta Kontainer Depot\r\n', 'DKI Jakarta', '2021', 'KAJIAN LINGKUNGAN (PERTEK)', 'Kontainer', '2021-11-08 16:27:13', 0, '0000-00-00 00:00:00', 0),
(349, 'PDAM Tirta Bhagasasi Bekasi ', 'Penyusunan DPLH PDAM Tanah Merah \r\n', 'Bekasi', '2021', 'PEMANTAUAN LINGKUNGAN', '', '2021-11-08 16:29:33', 0, '0000-00-00 00:00:00', 0),
(350, 'PT Rexxa Inti Corpora', 'SPPL Kegiatan Rexxa Inti Corpora\r\n', 'Tangerang', '2021', 'DPPL/DPLH', '', '2021-11-08 16:31:15', 0, '0000-00-00 00:00:00', 0),
(351, 'PT Pulunaga Persada', ' Laporan Pelaksanaan RKL-RPL  Semester I Tahun 2021 Pulunaga Persada\r\n', 'Tangerang', '2021', 'PEMANTAUAN LINGKUNGAN', '', '2021-11-08 16:32:06', 0, '0000-00-00 00:00:00', 0),
(352, 'PT ESC Environment Indonesia', 'Amdal PT. ESC \r\n', 'DKI Jakarta', '2021', 'AMDAL (ANDAL, RKL-RPL)', '', '2021-11-08 16:32:50', 0, '0000-00-00 00:00:00', 0),
(353, 'PT Delta Kontainer Depot', 'DPLH Delta Kontainer Depot\r\n', 'DKI Jakarta', '2021', 'ANDALALIN', 'Kontainer', '2021-11-08 16:33:50', 0, '0000-00-00 00:00:00', 0),
(354, 'PT Delta Kontainer Depot', 'DPLH Delta Kontainer Depot\r\n', 'DKI Jakarta', '2021', 'DPPL/DPLH', 'Kontainer', '2021-11-08 16:34:11', 0, '0000-00-00 00:00:00', 0),
(355, 'PT Kurnia Tirta Samudera Makmur', 'Implementasi RKL-RPL Kegiatan Bongkar Muat Pelabuhan Semester II Tahun 2020\r\n', 'Jakarta Utara', '2020', 'PEMANTAUAN LINGKUNGAN', '', '2021-11-08 17:04:49', 0, '0000-00-00 00:00:00', 0),
(356, 'PT Kurnia Tirta Samudera Makmur', 'Implementasi RKL-RPL Kegiatan Bongkar Muat Pelabuhan Semester I Tahun 2020\r\n', 'Jakarta Utara', '2020', 'PEMANTAUAN LINGKUNGAN', '', '2021-11-08 17:06:02', 0, '0000-00-00 00:00:00', 0),
(357, 'PT Kurnia Tirta Samudera Makmur', 'Implementasi RKL-RPL Kegiatan Bongkar Muat Pelabuhan Semester II Tahun 2019\r\n', 'Jakarta Utara', '2019', 'PEMANTAUAN LINGKUNGAN', '', '2021-11-08 17:06:28', 0, '0000-00-00 00:00:00', 0),
(358, 'PT Kurnia Tirta Samudera Makmur', 'Implementasi RKL-RPL Kegiatan Bongkar Muat Pelabuhan Semester I Tahun 2019\r\n', 'Jakarta Utara', '2019', 'PEMANTAUAN LINGKUNGAN', '', '2021-11-08 17:06:48', 0, '0000-00-00 00:00:00', 0),
(359, 'PT Kurnia Tirta Samudera Makmur', 'Implementasi RKL-RPL Kegiatan Bongkar Muat Pelabuhan Semester II Tahun 2018\r\n', 'Jakarta Utara', '2018', 'PEMANTAUAN LINGKUNGAN', '', '2021-11-08 17:07:36', 0, '0000-00-00 00:00:00', 0),
(360, 'PT Kurnia Tirta Samudera Makmur', 'Implementasi RKL-RPL Kegiatan Bongkar Muat Pelabuhan Semester I Tahun 2018\r\n', 'Jakarta Utara', '2018', 'PEMANTAUAN LINGKUNGAN', '', '2021-11-08 17:08:36', 0, '0000-00-00 00:00:00', 0),
(361, 'PT Kurnia Tirta Samudera Makmur', 'Implementasi RKL-RPL Kegiatan Bongkar Muat Pelabuhan Semester II Tahun 2017\r\n', 'Jakarta Utara', '2017', 'PEMANTAUAN LINGKUNGAN', '', '2021-11-08 17:08:49', 0, '0000-00-00 00:00:00', 0),
(362, 'PT Kurnia Tirta Samudera Makmur', 'Implementasi RKL-RPL Kegiatan Bongkar Muat Pelabuhan Semester I Tahun 2017\r\n', 'Jakarta Utara', '2017', 'PEMANTAUAN LINGKUNGAN', '', '2021-11-08 17:09:04', 0, '0000-00-00 00:00:00', 0),
(363, 'PT Kurnia Tirta Samudera Makmur', 'Implementasi RKL-RPL Kegiatan Bongkar Muat Pelabuhan Semester I Tahun 2016\r\n', 'Jakarta Utara', '2016', 'PEMANTAUAN LINGKUNGAN', '', '2021-11-08 17:09:18', 0, '0000-00-00 00:00:00', 0),
(364, 'PT Bina Bangun Wibawa Mukti', 'Implementasi RKL-RPL Kegiatan Kilang LPG Tambun Semester I & II Tahun 2017\r\n', 'Bekasi', '2017', 'PEMANTAUAN LINGKUNGAN', '', '2021-11-08 17:10:58', 0, '0000-00-00 00:00:00', 0),
(365, 'PT Bina Bangun Wibawa Mukti', 'Implementasi RKL-RPL Kegiatan Kilang LPG Tambun Semester I & II Tahun 2016\r\n', 'Bekasi', '2016', 'PEMANTAUAN LINGKUNGAN', '', '2021-11-08 17:11:19', 0, '0000-00-00 00:00:00', 0),
(366, 'PT Pan Pacific Jakarta', 'Implementasi RKL-RPL Kegiatan Industri Garment Semester I Tahun 2018\r\n', 'Jakarta Utara', '2018', 'PEMANTAUAN LINGKUNGAN', '', '2021-11-08 17:12:58', 0, '0000-00-00 00:00:00', 0),
(367, 'PT Pan Pacific Jakarta', 'Implementasi RKL-RPL Kegiatan Industri Garment Semester I Tahun 2017\r\n', 'Jakarta Utara', '2017', 'PEMANTAUAN LINGKUNGAN', '', '2021-11-08 17:13:20', 0, '0000-00-00 00:00:00', 0),
(368, 'PT Pan Pacific Jakarta', 'Implementasi RKL-RPL Kegiatan Industri Garment Semester II Tahun 2016\r\n', 'Jakarta Utara', '2016', 'PEMANTAUAN LINGKUNGAN', '', '2021-11-08 17:13:35', 0, '0000-00-00 00:00:00', 0),
(369, 'PT Pan Pacific Jakarta', 'Implementasi RKL-RPL Kegiatan Industri Garment Semester I Tahun 2016\r\n', 'Jakarta Utara', '2016', 'PEMANTAUAN LINGKUNGAN', '', '2021-11-08 17:13:50', 0, '0000-00-00 00:00:00', 0),
(370, 'PT Rinnai - Balaraja', 'Implementasi RKL-RPL Kegiatan Industri Garment Semester I ', 'Tangerang', '2021', 'PEMANTAUAN LINGKUNGAN', '', '2021-11-16 14:35:07', 0, '0000-00-00 00:00:00', 0),
(371, 'PT Rinnai - Cikupa', 'Implementasi RKL-RPL Kegiatan Industri Garment Semester I ', 'Tangerang', '2021', 'PEMANTAUAN LINGKUNGAN', '', '2021-11-16 14:36:07', 0, '0000-00-00 00:00:00', 0),
(372, 'DLH Kota Tangerang', 'Kajian Kualitas Udara ', 'Tangerang', '2021', 'PEMANTAUAN LINGKUNGAN', '', '2021-11-16 15:10:15', 0, '0000-00-00 00:00:00', 0),
(373, 'PT Sulindafin', ' Laporan Pelaksanaan RKL-RPL  Semester I Tahun 2021 \r\n', 'Tangerang', '2021', 'PEMANTAUAN LINGKUNGAN', '', '2021-11-16 15:12:58', 0, '0000-00-00 00:00:00', 0),
(374, 'PT Sumi Indo Kabel', ' Laporan Pelaksanaan RKL-RPL  Semester I Tahun 2021 Sumi Indo Kabel\r\n\r\n', 'Tangerang', '2020', 'PEMANTAUAN LINGKUNGAN', '', '2021-11-16 15:14:21', 0, '0000-00-00 00:00:00', 0),
(375, 'PT Sumi Indo Kabel', 'Laporan Pelaksanaan UKL-UPL Kegiatan Industri Kabel Listrik dan Telepon Periode Semester I Tahun 2020 PT Sumi Indo Kabel\r\n', 'Tangerang', '2020', 'PEMANTAUAN LINGKUNGAN', '', '2021-11-16 15:16:46', 0, '0000-00-00 00:00:00', 0),
(376, 'PT Kurnia Tirta Samudera Makmur', ' Laporan Pelaksanaan RKL-RPL  Semester II Tahun 2021 KTSM\r\n', 'Jakarta Utara', '2021', 'PEMANTAUAN LINGKUNGAN', '', '2021-11-16 15:17:17', 0, '0000-00-00 00:00:00', 0),
(377, 'PT Kurnia Tirta Samudera Makmur', ' Laporan Pelaksanaan RKL-RPL  Semester II Tahun 2021 KTSM\r\n', 'Jakarta Utara', '2021', 'PEMANTAUAN LINGKUNGAN', '', '2021-11-16 15:17:20', 0, '0000-00-00 00:00:00', 0),
(378, 'PT Trafoindo Prima Perkasa', ' Laporan Pelaksanaan RKL-RPL  Semester I Tahun 2021 Trafoindo (Backdate)\r\n', 'Tangerang', '2021', 'PEMANTAUAN LINGKUNGAN', '', '2021-11-16 15:18:04', 0, '0000-00-00 00:00:00', 0),
(379, 'PT Sumi Indo Kabel', ' Laporan Pelaksanaan RKL-RPL  Semester I Tahun 2021 Sumi Indo Kabel\r\n', 'Tangerang', '2021', 'PEMANTAUAN LINGKUNGAN', '', '2021-11-16 15:40:05', 0, '0000-00-00 00:00:00', 0),
(380, 'PT Kerasi Teknik Bahari', 'Laporan Pelaksanaan Dokumen Updating UKL-UPL Dermaga dan Gudang Periode Semester I Tahun 2021  PT Kreasi Teknik Bahari\r\n', 'Jakarta Utara', '2021', 'UKL-UPL', '', '2021-11-16 15:42:38', 0, '0000-00-00 00:00:00', 0),
(381, 'PT Waterindo Primatech Bekasi', 'Proposal Teknis\r\n', 'Bekasi', '2021', 'UKL-UPL', '', '2021-11-16 15:44:57', 0, '0000-00-00 00:00:00', 0),
(382, 'PT Semen Lebak', ' Laporan Pelaksanaan RKL-RPL  Semester I Tahun 2021 PT Semen Lebak\r\n', 'Lebak - Banten', '2021', 'PEMANTAUAN LINGKUNGAN', '', '2021-11-16 15:54:44', 0, '0000-00-00 00:00:00', 0),
(383, 'PT Semen Lebak', ' Laporan Pelaksanaan RKL-RPL  Semester I Tahun 2021 PT Semen Lebak\r\n', 'Lebak - Banten', '2021', 'PEMANTAUAN LINGKUNGAN', '', '2021-11-16 15:54:46', 0, '0000-00-00 00:00:00', 0),
(384, 'PT Semen Lebak', ' Laporan Pelaksanaan RKL-RPL  Semester I Tahun 2021 PT Semen Lebak\r\n', 'Lebak - Banten', '2021', 'PEMANTAUAN LINGKUNGAN', '', '2021-11-16 15:56:35', 0, '0000-00-00 00:00:00', 0),
(385, 'PT Krakatau Semen Indonesia', ' Laporan Pelaksanaan RKL-RPL  Semester I Tahun 2021 Krakatau Semen Indonesia\r\n', 'Kota Cilegon', '2021', 'PEMANTAUAN LINGKUNGAN', '', '2021-11-16 15:58:04', 0, '0000-00-00 00:00:00', 0),
(386, 'PT Colorpak Indonesia', ' Laporan Pelaksanaan RKL-RPL  Semester II Tahun 2021 Colourpark\r\n', 'Tangerang', '2021', 'PEMANTAUAN LINGKUNGAN', '', '2021-11-19 16:24:52', 0, '0000-00-00 00:00:00', 0),
(387, 'PT Colorpak Indonesia', 'Laporan Implementasi RKL-RPL Semester I Tahun 2020 PT Colorpak Indonesia\r\n', 'Tangerang', '2020', 'PEMANTAUAN LINGKUNGAN', '', '2021-11-19 16:25:40', 0, '0000-00-00 00:00:00', 0),
(388, 'PT Colorpak Indonesia', 'Uji Laboratorium Air Limbah PT Colorpak Indonesia\r\n', 'Tangerang', '2020', 'PEMANTAUAN LINGKUNGAN', '', '2021-11-19 16:26:14', 0, '0000-00-00 00:00:00', 0),
(389, 'PT Kawasan Industri Dumai', 'Addendum Amdal tipe C \r\n', 'Riau', '2021', 'AMDAL (ANDAL, RKL-RPL)', '', '2021-11-19 16:31:05', 0, '0000-00-00 00:00:00', 0),
(390, 'PT Jagasutama Nusantara', 'Kegiatan DPLH PT Jagasutama Nusantara', 'Bekasi - Jawa Barat', '2021', 'DPPL/DPLH', '', '2021-12-02 13:09:01', 0, '0000-00-00 00:00:00', 0),
(391, 'PT Rafa Karya Indonesia', 'SPPL Kegiatan PT Rafa Karya Indonesia', 'Tangerang', '2021', 'KAJIAN LINGKUNGAN', '', '2021-12-02 13:10:10', 0, '0000-00-00 00:00:00', 0),
(392, 'PT Indonesia Toppan Printing', 'Studi PERTEK Emisi, Air Limbah, & TPS B3 Kegiatan Industri Percetakan dan Kemasan Plastik', 'Bekasi', '2021', 'KAJIAN LINGKUNGAN (PERTEK)', '', '2021-12-02 13:11:39', 0, '0000-00-00 00:00:00', 0),
(393, 'PT. Djojonegoro C-1000', 'Studi AMDAL, PERTEK Pemenuhan Baku Mutu Emisi, PERTEK Menuhan Baku Mutu TPS Limbah B3 & Andalalin ', 'Sukabumi - Jawa Barat', '2021', 'AMDAL (ANDAL, RKL-RPL)', '', '2021-12-09 13:50:55', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `amc_m_sector`
--

CREATE TABLE `amc_m_sector` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amc_m_sector`
--

INSERT INTO `amc_m_sector` (`id`, `name`, `ket`) VALUES
(1, 'Agriculture (Sektor Pertanian) ', 'Tanaman pangan,\r\nPerkebunan, Peternakan, Perikanan, Kehutanan, dan pertanian Lainnya '),
(2, 'Mining (Pertambangan)', '- Coal Mining (pertambangan batubara)\r\n- Crude Petroleum & Natural Gas Production (pertambangan minyak dan gas bumi)\r\n- Metal and Mineral Mining (pertambangan logam dan mineral lainnya)\r\n- Land / Stone Quarrying (pertambangan batu-batuan)\r\n- Dan pertambangan lainnya'),
(3, 'Industri Dasar dan Kimia (Basic Industry & Chemicals)', 'Cement (Semen)\r\nCeramics, Glass, Porcelain (Keramik, kaca, dan porselen)\r\nMetal And Allied Products (Logam dan sejenisnya)\r\nChemicals (Kimia)\r\nPlastics and Packaging (Plastik dan kemasan)\r\nAnimal Feed (Pakan ternak)\r\nWood Industries (kayu dan pengolahannya)\r\nPulp and Paper (Pulp dan kertas)\r\nDan sub sektor lainnya'),
(4, 'Aneka Industri atau Miscellaneous Industry', 'Machinery And Heavy Equipment (Mesin dan alat berat)\r\nAutomotive and Components (Otomotif dan komponennya)\r\nTextile and Garment (Tekstil dan garmen)\r\nFootwear (Alas kaki)\r\nCable (Kabel)\r\nElectronics (Elektronik)\r\nDan sub sektor lainnya'),
(5, 'Sektor Consumer Goods Industry', 'Food And Beverages (Makanan dan minuman)\r\nTobacco Manufacturers (Rokok)\r\nPharmaceuticals (Farmasi)\r\nCosmetics and Household (Kosmetik dan barang keperluan rumah tangga)\r\nHouseware (Peralatan rumah tangga)\r\nDan sub sektor lainnya'),
(6, 'Bangunan Property, Real Estate, and Building Construction', 'Property and real estate (Properti dan real estat)\r\nBuilding Construction (Konstruksi bangunan)\r\nDan sub sektor lainnya.'),
(7, 'Infrastructure, Utility, and Transportation (Infrastruktur, Utilitas dan Transportasi)', 'Energy (Energi)\r\nToll Road, Airport, Harbor and Allied Products (Jalan tol, pelabuhan, bandara, dan sejenisnya)\r\nTelecommunication (Telekomunikasi)\r\nTransportation (transportasi)\r\nNon Building Construction (Konstruksi non bangunan)\r\ndan sub sektor lainnya.'),
(8, 'Sektor Finance (Finansial)', 'Bank\r\nFinancial Institution (Lembaga pembiayaan)\r\nSecurities Company (Perusahaan efek)\r\nInsurance (Asuransi)\r\nMutual funds (Reksa dana)\r\nDan sub sektor lainnya'),
(9, 'Sektor Trade, Service, and Investment (Perdagangan, Jasa, dan Investasi)', 'Wholesale (Grosir)\r\nRetail Trade (Pedagang eceran)\r\nRestaurant, Hotel and Tourism (Restoran, hotel, dan pariwisata)\r\nAdvertising, Printing & Media (Periklanan, percetakan, dan media)\r\nHealthcare (Kesehatan)\r\nComputer And Services (Jasa komputer dan perangkatnya\r\nInvestment Company (Perusahaan investasi)\r\nDan sub sektor lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `amc_m_user`
--

CREATE TABLE `amc_m_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `department` varchar(50) NOT NULL,
  `user_level` int(1) NOT NULL COMMENT '0 = Management 1 = Administrator2 = Marketing3 = Admin4 = Teknik5 = Finance6 = Client',
  `password` varchar(200) NOT NULL,
  `client_id` int(11) NOT NULL,
  `createDate` datetime NOT NULL DEFAULT current_timestamp(),
  `createUser` int(11) NOT NULL,
  `editDate` datetime NOT NULL,
  `editUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amc_m_user`
--

INSERT INTO `amc_m_user` (`id`, `name`, `email`, `contact`, `department`, `user_level`, `password`, `client_id`, `createDate`, `createUser`, `editDate`, `editUser`) VALUES
(1, 'admin AMC', 'amaracisadane@gmail.com', '-', 'ADM', 0, 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 0, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1),
(2, 'Ir. Heryansyah Zaini', 'heriansyah@amaracisadane.co.id', '08129197892', 'CEO', 0, 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 0, '2021-08-31 13:24:55', 0, '0000-00-00 00:00:00', 0),
(28, 'Fiqroh Annisa', 'fiqrohannisa@amaracisadane.co.id', '081384456276', 'IT Marketing', 1, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0, '2021-07-01 09:57:52', 0, '0000-00-00 00:00:00', 0),
(29, 'Maman Faturahman', 'm.fathurahman@amaracisadane.co.id', '081311457266', 'Manager Teknis', 0, 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 0, '2021-07-01 10:35:40', 0, '0000-00-00 00:00:00', 0),
(30, 'Anindita Asri Maulida', 'anindita.maulida@amaracisadane.co.id', '082110842240', 'Supervisor', 4, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0, '2021-07-01 10:36:27', 0, '0000-00-00 00:00:00', 0),
(31, 'Murniarti', 'murniati@amaracisadane.co.id', '087877138087', 'R & D', 4, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0, '2021-07-01 10:37:03', 0, '0000-00-00 00:00:00', 0),
(32, 'Siti Karimah', 'siti.karimah@amaracisadane.co.id', '082112907137', 'R & D', 4, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0, '2021-07-01 10:37:26', 0, '0000-00-00 00:00:00', 0),
(33, 'M. Rezza Fiqrullah', 'reza.fiqrullah@amaracisadane.co.id', '087871535431', 'Staf Teknis', 4, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0, '2021-07-01 10:37:52', 0, '0000-00-00 00:00:00', 0),
(34, 'Hirma Naufal Rahmawati', 'hirma.naufal@amaracisadane.co.id', '085223516588', 'Staf Teknis', 4, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0, '2021-07-01 10:38:21', 0, '0000-00-00 00:00:00', 0),
(35, 'Ahmad Farhan A., S.M', 'farhan.asshidiqy@amaracisadane.co.id', '089610134286', 'Staf Teknis Junior', 4, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0, '2021-07-01 10:38:46', 0, '0000-00-00 00:00:00', 0),
(36, 'Tommy Anggiawan P. P', 'tommy.pamungkas@amaracisadane.co.id', '081776694177', 'Staf Teknis Junior', 4, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0, '2021-07-01 10:39:10', 0, '0000-00-00 00:00:00', 0),
(37, 'Rofi Ashidqi Putra', 'rofi.ashidqi@amaracisadane.co.id', '082298205633', 'Staf Teknis Junior', 4, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0, '2021-07-01 10:39:34', 0, '0000-00-00 00:00:00', 0),
(38, 'Muhamad Alifan F.', 'alifan.farrizqy@amaracisadane.co.id', '081220038468', 'Asisten Staf Teknis', 4, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0, '2021-07-01 10:39:53', 0, '0000-00-00 00:00:00', 0),
(39, 'M Fauzan Yunus', 'fauzan.yunus@amaracisadane.co.id', '081223538580', 'Asisten Staf Teknis', 4, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0, '2021-07-01 10:40:15', 0, '0000-00-00 00:00:00', 0),
(40, 'Monika Andriani', 'monika.andriani@amaracisadane.co.id', '089636918084', 'Keuangan', 5, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0, '2021-07-01 10:40:35', 0, '0000-00-00 00:00:00', 0),
(41, 'M. Faisal K.B.A', 'faisal.kba@amaracisadane.co.id', '089634444608', 'Marketing', 2, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0, '2021-07-01 10:40:56', 0, '0000-00-00 00:00:00', 0),
(42, 'Suci Khoirunnisa', 'suci.khoirunnisa@amaracisadane.co.id', '0895327773101', 'Admin/ Umum', 3, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0, '2021-07-01 10:41:14', 0, '0000-00-00 00:00:00', 0),
(43, 'RIJAL', 'rijal23diy@gmail.com', '085781289232', 'IT Developer', 1, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0, '2021-09-22 10:19:12', 0, '0000-00-00 00:00:00', 0),
(45, 'Ni Nur Aminah Hamim', 'ninur@amaracisadane.co.id', '082293863361', 'Teknis', 4, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0, '2021-11-11 12:00:54', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `amc_m_vendor`
--

CREATE TABLE `amc_m_vendor` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `no_registered` varchar(50) NOT NULL COMMENT 'no terdaftar',
  `date_registered` date NOT NULL COMMENT 'tgl terdaftar',
  `validity_period` date NOT NULL COMMENT 'masa berlaku',
  `link_web` varchar(255) NOT NULL,
  `no_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `information` text NOT NULL COMMENT 'keterangan',
  `createDate` datetime NOT NULL DEFAULT current_timestamp(),
  `createUser` int(11) NOT NULL,
  `editDate` datetime NOT NULL,
  `editUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amc_m_vendor`
--

INSERT INTO `amc_m_vendor` (`id`, `name`, `no_registered`, `date_registered`, `validity_period`, `link_web`, `no_id`, `password`, `information`, `createDate`, `createUser`, `editDate`, `editUser`) VALUES
(9, 'PT MRT Jakarta', '202101001001021', '2021-01-27', '2024-01-27', 'https://eproc-internal.jakartamrt.co.id/vendors/login', 'amaracisadane@gmail.com', 'amaracisadane17', '', '0000-00-00 00:00:00', 0, '2021-01-29 06:22:04', 0),
(10, 'PT Angkasa Pura II (Persero)', 'V003770', '0000-00-00', '0000-00-00', 'http://eprocurement.angkasapura2.co.id:999/default.asp', 'V003770', 'amaracisadane17', '', '0000-00-00 00:00:00', 0, '2021-08-30 23:33:46', 0),
(11, 'PT Surveyor Indonesia (Persero)', '', '0000-00-00', '0000-00-00', 'https://app.ptsi.co.id/rekanan/auth/login', 'PTAMARACISADANE', 'ANEAMA', 'Update dan lengkapi data vendor', '0000-00-00 00:00:00', 0, '2021-02-23 11:50:07', 0),
(12, 'AirNav Indonesia', '1010000130', '2020-06-17', '0000-00-00', 'https://eproc.airnavindonesia.co.id/vms/web/index.php/', 'amaracisadane@gmail.com', 'amaracisadane17', 'Update dan lengkapi data vendor', '0000-00-00 00:00:00', 0, '2021-01-29 07:28:39', 0),
(13, 'CIVD SKK Migas', '17525/PT PERTAMINA EP/2018', '2021-08-31', '0001-01-01', 'https://civdmigas.skkmigas.go.id/vnd/login.jwebs', 'AMAR5776', 'Amaracisadane17', 'Update dan lengkapi data vendor', '0000-00-00 00:00:00', 0, '2021-08-31 15:30:39', 0),
(14, 'PT Bandarudara Internasional Jawa Barat (PT BIJB)', '', '0000-00-00', '0000-00-00', 'https://eproc.bijb.co.id/home', 'amaracisadane@gmail.com', 'amaracisadane17', 'Lengkapi data vendor (Proses pengajuan, Menunggu Approve)', '0000-00-00 00:00:00', 0, '2021-02-23 11:47:37', 0),
(16, 'PT PLN (Persero)', '', '0000-00-00', '0000-00-00', 'https://eproc.pln.co.id/login', 'AMARACISADANE', '@Amaracisadane17', 'Lengkapi Data Vendor', '0000-00-00 00:00:00', 0, '2021-02-24 10:19:59', 0),
(17, 'PT Indonesia Power', '', '0000-00-00', '0000-00-00', 'https://supplier.indonesiapower.co.id/supplier/login', 'amaracisadane@gmail.com', 'amaracisadane1', 'Lengkapi Data Vendor (Status sudah minta review by email)', '0000-00-00 00:00:00', 0, '2021-02-23 10:36:02', 0),
(18, 'PT Hutama Karya (Persero)', '', '0000-00-00', '0000-00-00', 'https://circle.hutamakarya.com/home/loginpage_cp#1', 'amaracisadane', 'amaracisadane1', 'Lengkapi Data Vendor', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(19, 'SKUP Dirjen Migas', '', '2021-08-31', '0000-00-00', 'https://www.esdm.go.id/skupmigas', 'pt_amara_cisadane', 'amaracisadane1', 'Permohonan pertama di tolak\r\ntahap permohonan ke 2', '0000-00-00 00:00:00', 0, '2021-09-01 09:24:54', 0),
(20, 'PT Elnusa Petrofin', '', '0000-00-00', '0000-00-00', 'https://eproc.elnusapetrofin.co.id/vm/portal.promise', 'amaracisadane@gmail.com', 'ze3r*gjR', 'Lengkapi Data Vendor', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(22, 'PT Geo Dipa Energi (Persero)', 'Nomor: 00271.SKT/PST.03-GDE/VI/2021', '2021-06-14', '2022-06-14', 'https://eproc.geodipa.co.id/', '00001852', 'AmaraCisadane1', 'Sudah Teregistrasi', '2021-08-31 16:33:54', 0, '2021-08-31 16:36:14', 0);

-- --------------------------------------------------------

--
-- Table structure for table `amc_t_adm_payment`
--

CREATE TABLE `amc_t_adm_payment` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `tahap` int(2) NOT NULL,
  `percentage` int(3) NOT NULL,
  `price` decimal(20,0) NOT NULL,
  `info` text NOT NULL,
  `status` int(1) NOT NULL COMMENT '0=Outstanding\r\n1=Paid',
  `createDate` datetime NOT NULL DEFAULT current_timestamp(),
  `createUser` int(11) NOT NULL,
  `editDate` datetime NOT NULL,
  `editeUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `amc_t_adm_payment`
--

INSERT INTO `amc_t_adm_payment` (`id`, `client_id`, `tahap`, `percentage`, `price`, `info`, `status`, `createDate`, `createUser`, `editDate`, `editeUser`) VALUES
(1, 11, 2, 100, '4000000', 'Setelah Tandatangan Kontrak edit', 0, '2022-01-13 18:12:33', 0, '2022-01-13 19:11:05', 0);

-- --------------------------------------------------------

--
-- Table structure for table `amc_t_client_confirmation`
--

CREATE TABLE `amc_t_client_confirmation` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `info` text NOT NULL,
  `createDate` datetime NOT NULL DEFAULT current_timestamp(),
  `createUser` int(11) NOT NULL,
  `editDate` datetime NOT NULL,
  `editUSer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `amc_t_client_penawaran`
--

CREATE TABLE `amc_t_client_penawaran` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `no_penawaran` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `price` decimal(20,0) NOT NULL,
  `info` text NOT NULL,
  `createDate` datetime NOT NULL DEFAULT current_timestamp(),
  `createUser` int(11) NOT NULL,
  `editDate` datetime NOT NULL,
  `editUSer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `amc_t_client_po`
--

CREATE TABLE `amc_t_client_po` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `no_po` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `price` double(20,0) NOT NULL,
  `info` text NOT NULL,
  `createDate` datetime NOT NULL DEFAULT current_timestamp(),
  `createUser` int(11) NOT NULL,
  `editDate` datetime NOT NULL,
  `editUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `amc_t_client_process`
--

CREATE TABLE `amc_t_client_process` (
  `id` int(11) NOT NULL,
  `no_po` varchar(50) NOT NULL,
  `product_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `price_bid` decimal(20,0) NOT NULL,
  `price` decimal(20,0) NOT NULL,
  `process_1` text NOT NULL COMMENT 'contact',
  `date_1` date DEFAULT NULL COMMENT 'date contact',
  `process_2` text NOT NULL COMMENT 'surat penawaran',
  `date_2` date DEFAULT NULL COMMENT 'date surat penawaran',
  `process_3` text NOT NULL COMMENT 'konfirmasi',
  `date_3` date DEFAULT NULL COMMENT 'date konfirmasi',
  `process_4` text NOT NULL COMMENT 'negosiasi harga',
  `date_4` date DEFAULT NULL COMMENT 'date negosiasi harga',
  `process_5` text NOT NULL COMMENT 'PO / kontrak',
  `date_5` date DEFAULT NULL COMMENT 'date PO / kontrak',
  `upload` text NOT NULL,
  `createDate` datetime NOT NULL DEFAULT current_timestamp(),
  `createUser` int(11) NOT NULL,
  `editDate` datetime NOT NULL,
  `editUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amc_t_client_process`
--

INSERT INTO `amc_t_client_process` (`id`, `no_po`, `product_id`, `client_id`, `description`, `price_bid`, `price`, `process_1`, `date_1`, `process_2`, `date_2`, `process_3`, `date_3`, `process_4`, `date_4`, `process_5`, `date_5`, `upload`, `createDate`, `createUser`, `editDate`, `editUser`) VALUES
(1, 'PO-TEST-2012', 10, 5, '-', '0', '0', '', '2021-11-29', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', 'MARKETING-1638170757-List_Room_Peserta.pdf', '2021-11-29 14:21:38', 0, '2021-12-15 08:50:53', 0),
(2, '012/M-AmC/X/2021', 10, 6, 'kegiatan pembangunan coba aja ', '12000000', '10000000', 'AWAL PERTAMA', '2021-12-12', 'KEDUA TAHAPAN', '2021-12-15', 'FOLLUP LAGI', '2021-12-20', 'PO BERHASIL', '2021-12-29', 'BERHASIL PENGERJAAN 3 BULAN', '2021-12-30', 'MARKETING-1638848438-21NOP2021_LapJumantik.pdf', '2021-11-29 14:44:09', 0, '2021-12-15 08:52:36', 0),
(3, '120', 11, 8, 'ninur@amaracisadane.co.id', '20000', '20000', 'ninur@amaracisadane.co.id', '2021-12-12', 'ninur@amaracisadane.co.id', '2021-12-12', 'ninur@amaracisadane.co.id', '2022-12-12', 'ninur@amaracisadane.co.id', '2022-12-12', 'ninur@amaracisadane.co.id', '2022-12-12', 'MARKETING-1638848452-SE_Walikota_Perpanjangan_PPKM_Level_2_.pdf', '2021-12-07 10:13:23', 0, '2021-12-07 10:40:52', 0),
(4, 'ffqwfqwf', 10, 7, 'afegewgeqfqw', '12121', '1212121', '112eqwe', '1222-02-12', '', '1222-12-12', '', '1212-12-12', '', '1212-12-12', 'wdwdw', '1212-12-12', '', '2021-12-15 08:54:24', 0, '0000-00-00 00:00:00', 0),
(5, 'faaffafa', 0, 9, 'Jasa Penyusunan Dokumen Surat Pernyataan Kesangupan Pengelolaan dan Pemantauan Lingkungan Hidup (SPPL) Gudang Kelapa Dua', '807807', '7078078', 'sasa', '2021-12-30', 'asasa', '2021-12-31', 'adadfasd', '2022-01-01', 'aegsgeeg', '2021-12-31', 'wfawffawfaw', '2021-12-27', '', '2021-12-22 14:58:47', 0, '0000-00-00 00:00:00', 0),
(6, '001/PO-AmC/XII/2021', 3, 11, 'Penyusunan Dokumen AMDAL, Pertek Air Limbah , Emisi, Andalalin Kegiatan Industri Plastik', '1000000', '1000000', 'Contac 1', '2021-12-26', 'SP 1', '2021-12-26', 'Konfimrais oleh User', '2021-12-26', 'Langsung ', '2021-12-26', 'Test', '2021-12-26', '', '2021-12-26 08:59:42', 0, '2021-12-26 10:10:21', 0);

-- --------------------------------------------------------

--
-- Table structure for table `amc_t_client_rekapitulasi_tender`
--

CREATE TABLE `amc_t_client_rekapitulasi_tender` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `code_tender` varchar(100) NOT NULL,
  `price_hps` decimal(20,0) NOT NULL,
  `dk_date_download` date NOT NULL COMMENT 'Dokumen Kualifikasi',
  `dk_date_penjelasan` date NOT NULL COMMENT 'Dokumen Kualifikasi',
  `dk_date_upload` date NOT NULL COMMENT 'Dokumen Kualifikasi',
  `dk_date_pembuktian` date NOT NULL COMMENT 'Dokumen Kualifikasi',
  `dk_date_pengumuman` date NOT NULL COMMENT 'Dokumen Kualifikasi',
  `dp_date_download` date NOT NULL COMMENT 'Dokumen Pemilihan',
  `dp_date_penjelasan` date NOT NULL COMMENT 'Dokumen Pemilihan',
  `dp_date_upload` date NOT NULL COMMENT 'Dokumen Pemilihan',
  `dp_date_pembukaan_evaluasi_teknis` date NOT NULL COMMENT 'Dokumen Pemilihan',
  `dp_date_pengumuman` date NOT NULL COMMENT 'Dokumen Pemilihan',
  `dp_date_pembukaan_evaluasi_harga` date NOT NULL COMMENT 'Dokumen Pemilihan',
  `pengumuman_pemenang` varchar(255) NOT NULL COMMENT 'Dokumen Pemilihan',
  `keterangan` text NOT NULL,
  `createDate` datetime NOT NULL DEFAULT current_timestamp(),
  `createUser` int(11) NOT NULL,
  `editDate` datetime NOT NULL,
  `editUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `amc_t_finance`
--

CREATE TABLE `amc_t_finance` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `invoice_no` varchar(50) NOT NULL,
  `price` decimal(20,0) NOT NULL,
  `date` date NOT NULL,
  `due_date` date NOT NULL,
  `date_confirmation` date NOT NULL,
  `info` text NOT NULL,
  `createDate` datetime NOT NULL DEFAULT current_timestamp(),
  `createUser` int(11) NOT NULL,
  `editDate` datetime NOT NULL,
  `editUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `amc_t_finance`
--

INSERT INTO `amc_t_finance` (`id`, `client_id`, `invoice_no`, `price`, `date`, `due_date`, `date_confirmation`, `info`, `createDate`, `createUser`, `editDate`, `editUser`) VALUES
(2, 11, '001/amc/I/2022', '9100000000', '2022-01-13', '2022-01-13', '2022-01-13', 'test', '2022-01-13 16:08:31', 0, '2022-01-13 16:50:50', 0);

-- --------------------------------------------------------

--
-- Table structure for table `amc_t_recapitulation_project`
--

CREATE TABLE `amc_t_recapitulation_project` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `no_order` varchar(50) NOT NULL,
  `no_report` varchar(50) NOT NULL COMMENT 'nomer laporan ',
  `contract_start_date` date NOT NULL,
  `contract_finish_date` date NOT NULL,
  `project_activity` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `percentage` int(3) NOT NULL,
  `upload` text NOT NULL,
  `createDate` datetime NOT NULL DEFAULT current_timestamp(),
  `createUser` int(11) NOT NULL,
  `editDate` datetime NOT NULL,
  `editUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amc_t_recapitulation_project`
--

INSERT INTO `amc_t_recapitulation_project` (`id`, `client_id`, `no_order`, `no_report`, `contract_start_date`, `contract_finish_date`, `project_activity`, `user_id`, `percentage`, `upload`, `createDate`, `createUser`, `editDate`, `editUser`) VALUES
(8, 11, '002/AMC/1/2021', '', '2021-12-01', '2021-12-26', 'Penyusunan Dokumen AMDAL, Pertek Air Limbah , Emisi, Andalalin Kegiatan Industri Plastik', 35, 0, '', '2021-12-26 10:12:00', 0, '2021-12-26 10:12:30', 0);

-- --------------------------------------------------------

--
-- Table structure for table `amc_t_teknis_progress`
--

CREATE TABLE `amc_t_teknis_progress` (
  `id` int(11) NOT NULL,
  `recapitulation_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `finish_date` date NOT NULL,
  `planing_this_week` text NOT NULL,
  `realization` text NOT NULL,
  `problem` text NOT NULL,
  `solution` text NOT NULL,
  `planing_next_week` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `note` text NOT NULL,
  `createDate` datetime NOT NULL DEFAULT current_timestamp(),
  `createUser` int(11) NOT NULL,
  `editDate` datetime NOT NULL,
  `editUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amc_t_teknis_progress`
--

INSERT INTO `amc_t_teknis_progress` (`id`, `recapitulation_id`, `start_date`, `finish_date`, `planing_this_week`, `realization`, `problem`, `solution`, `planing_next_week`, `user_id`, `note`, `createDate`, `createUser`, `editDate`, `editUser`) VALUES
(1, 2, '2021-12-14', '2021-12-14', '', '', '', '', '', 33, '', '2021-11-29 15:14:06', 0, '2021-12-14 13:22:28', 0),
(2, 3, '2021-12-12', '0000-00-00', 'nganu', 'nganu', 'nganu', 'nganu', 'nganu', 45, '', '2021-12-07 10:10:51', 0, '2021-12-15 09:44:52', 0),
(3, 3, '2021-12-12', '2022-12-12', 'Test', 'Test', 'Test', 'Test', 'Test', 45, '', '2021-12-07 10:11:08', 0, '0000-00-00 00:00:00', 0),
(4, 3, '2022-12-12', '2023-02-12', 'test selesai', 'finish', 'yes', 'besok', 'oke', 32, '', '2021-12-07 10:14:49', 0, '0000-00-00 00:00:00', 0),
(5, 2, '2021-12-07', '2021-12-07', 'test', 'test', 'test', 'test', 'test', 1, '', '2021-12-07 10:16:54', 0, '0000-00-00 00:00:00', 0),
(6, 3, '2021-12-12', '2022-02-12', 'selesaoi', 'coba', 'percobaan', 'lagi', 'dulu ya', 29, '', '2021-12-07 10:23:34', 0, '0000-00-00 00:00:00', 0),
(7, 2, '2017-12-12', '2018-05-12', '', '', '', '', '', 0, '', '2021-12-07 10:27:02', 0, '0000-00-00 00:00:00', 0),
(8, 1, '2021-02-15', '2021-12-15', 'bismillah', 'cpoba coba', 'ada aja', 'semangat', 'bisa', 45, '', '2021-12-07 10:27:53', 0, '2021-12-07 14:30:34', 0),
(9, 2, '2021-12-12', '2022-12-12', '1', '1', '1', '1', '1', 45, '', '2021-12-07 10:28:27', 0, '0000-00-00 00:00:00', 0),
(14, 1, '2021-12-15', '2021-12-15', 'anu', 'anu', 'anu', 'anu', 'anu', 45, '', '2021-12-15 09:59:21', 0, '2021-12-15 10:00:10', 0),
(15, 6, '2021-12-22', '2021-12-31', 'wfafa', 'asfasf', 'asfas', 'afafa', 'asfas', 32, '', '2021-12-22 15:02:07', 0, '0000-00-00 00:00:00', 0),
(16, 7, '2021-12-26', '2021-12-26', '', '', '', '', '', 36, '', '2021-12-26 09:24:49', 0, '0000-00-00 00:00:00', 0),
(17, 8, '2021-12-26', '2021-12-26', 'test 1', 'test 2', 'test 3', 'test 4', 'test 5', 38, '', '2021-12-26 10:13:45', 0, '2021-12-26 10:15:02', 0);

-- --------------------------------------------------------

--
-- Table structure for table `amc_t_work`
--

CREATE TABLE `amc_t_work` (
  `id` int(11) NOT NULL,
  `item` text NOT NULL,
  `id_job` text NOT NULL,
  `date` date NOT NULL,
  `start` time NOT NULL,
  `finish` time NOT NULL,
  `note` text NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `createDate` datetime NOT NULL DEFAULT current_timestamp(),
  `createUser` int(11) NOT NULL,
  `editDate` datetime NOT NULL,
  `editUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amc_m_client`
--
ALTER TABLE `amc_m_client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amc_m_client_email`
--
ALTER TABLE `amc_m_client_email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amc_m_client_pic_contact`
--
ALTER TABLE `amc_m_client_pic_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amc_m_client_project`
--
ALTER TABLE `amc_m_client_project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amc_m_client_tlp`
--
ALTER TABLE `amc_m_client_tlp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amc_m_job`
--
ALTER TABLE `amc_m_job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amc_m_price`
--
ALTER TABLE `amc_m_price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amc_m_products`
--
ALTER TABLE `amc_m_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amc_m_project`
--
ALTER TABLE `amc_m_project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amc_m_sector`
--
ALTER TABLE `amc_m_sector`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amc_m_user`
--
ALTER TABLE `amc_m_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amc_m_vendor`
--
ALTER TABLE `amc_m_vendor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amc_t_adm_payment`
--
ALTER TABLE `amc_t_adm_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amc_t_client_confirmation`
--
ALTER TABLE `amc_t_client_confirmation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amc_t_client_penawaran`
--
ALTER TABLE `amc_t_client_penawaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amc_t_client_po`
--
ALTER TABLE `amc_t_client_po`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amc_t_client_process`
--
ALTER TABLE `amc_t_client_process`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amc_t_client_rekapitulasi_tender`
--
ALTER TABLE `amc_t_client_rekapitulasi_tender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amc_t_finance`
--
ALTER TABLE `amc_t_finance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amc_t_recapitulation_project`
--
ALTER TABLE `amc_t_recapitulation_project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amc_t_teknis_progress`
--
ALTER TABLE `amc_t_teknis_progress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amc_t_work`
--
ALTER TABLE `amc_t_work`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amc_m_client`
--
ALTER TABLE `amc_m_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `amc_m_client_email`
--
ALTER TABLE `amc_m_client_email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `amc_m_client_pic_contact`
--
ALTER TABLE `amc_m_client_pic_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `amc_m_client_project`
--
ALTER TABLE `amc_m_client_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `amc_m_client_tlp`
--
ALTER TABLE `amc_m_client_tlp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `amc_m_job`
--
ALTER TABLE `amc_m_job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `amc_m_price`
--
ALTER TABLE `amc_m_price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `amc_m_products`
--
ALTER TABLE `amc_m_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `amc_m_project`
--
ALTER TABLE `amc_m_project`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=394;

--
-- AUTO_INCREMENT for table `amc_m_sector`
--
ALTER TABLE `amc_m_sector`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `amc_m_user`
--
ALTER TABLE `amc_m_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `amc_m_vendor`
--
ALTER TABLE `amc_m_vendor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `amc_t_adm_payment`
--
ALTER TABLE `amc_t_adm_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `amc_t_client_confirmation`
--
ALTER TABLE `amc_t_client_confirmation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `amc_t_client_penawaran`
--
ALTER TABLE `amc_t_client_penawaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `amc_t_client_po`
--
ALTER TABLE `amc_t_client_po`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `amc_t_client_process`
--
ALTER TABLE `amc_t_client_process`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `amc_t_client_rekapitulasi_tender`
--
ALTER TABLE `amc_t_client_rekapitulasi_tender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `amc_t_finance`
--
ALTER TABLE `amc_t_finance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `amc_t_recapitulation_project`
--
ALTER TABLE `amc_t_recapitulation_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `amc_t_teknis_progress`
--
ALTER TABLE `amc_t_teknis_progress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `amc_t_work`
--
ALTER TABLE `amc_t_work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
