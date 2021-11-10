-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2020 at 08:28 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sector` varchar(50) NOT NULL,
  `createDate` datetime NOT NULL,
  `createUser` int(11) NOT NULL,
  `editDate` datetime NOT NULL,
  `editUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `amc_m_job`
--

CREATE TABLE `amc_m_job` (
  `id` int(11) NOT NULL,
  `job` varchar(50) NOT NULL,
  `createDate` datetime NOT NULL,
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
  `createDate` datetime NOT NULL,
  `createUser` int(11) NOT NULL,
  `editDate` datetime NOT NULL,
  `editUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `amc_m_project`
--

INSERT INTO `amc_m_project` (`id`, `name`, `work_package`, `location`, `date`, `project`, `sector`, `createDate`, `createUser`, `editDate`, `editUser`) VALUES
(1, 'PT Sahabat Duta Wisata', 'Studi AMDAL Kegiatan Pembangunan Mall dan Hotel Living World Grand Wisata (Pusat Perbelanjaan dan Sarana Pendukung)', 'Kabupaten Bekasi', '2020', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(2, 'PT Mastertama Adhi Propertindo', 'Studi AMDAL Kegiatan Pembangunan Apartemen Riverdale', 'Cibitung', '2020', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(3, 'PT Alfa Goldland Realty', 'Studi AMDAL Kegiatan Pembangunan Apartemen Corbetti', 'Tangerang', '2019', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(4, 'PT Global Jet Express', 'Studi AMDAL Kegiatan Pembangunan Pabrik Ekspedisi', 'Tangerang', '2019', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(5, 'PT Fajar Surya Wisesa Tbk', 'Studi AMDAL Kegiatan Pembangunan Pabrik Kertas', 'Bekasi', '2019', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(6, 'PT Bank OCBC NISP Tbk', 'Studi AMDAL Kegiatan Pembangunan Gedung Bank Bertingkat', 'Kabupten Tangerang', '2019', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(7, 'PT Indonesia Power', 'Studi AMDAL Kegiatan Pembangunan PLTD Senayan 150 MW', 'Jakarta Selatan', '2018', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(8, 'Direktorat Jenderal Perhubungan Darat', 'Studi AMDAL Kegiatan Pembangunan Pelabuhan Danau Kerinci', 'Jambi', '2018', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(9, 'PT Hutama Karya (Persero)', 'Studi AMDAL Kegiatan Pembangunan Jalan Toll Jambi', 'Jambi', '2018', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(10, 'PPK Kantor UPBU Wasior', 'Studi AMDAL Kegiatan Pembangunan Bandara Baru Wasior', 'Papua Barat', '2018', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(11, 'PT Fajar Putera Dinasti', 'Studi AMDAL Kegiatan Pembangunan Metland Cibitung', 'Bekasi', '2018', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(12, 'Dinas Tata Kota, Bangunan dan Pemukiman', 'Studi AMDAL Kegiatan Pembangunan Gedung DPRD Kota Tangerang Selatan', 'Tangerang Selatan', '2016', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(13, 'PT Hotel Property Internasional', 'Studi AMDAL Kegiatan Pembangunan Salak Tower Hotel/Salak Boutique The Heritage', 'Bogor', '2016', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(14, 'PT Kereta Api Indonesia (Persero)', 'Studi AMDAL Kegiatan Pembangunan Passenger Crossing di Stasiun Manggarai ', 'Jakarta Selatan', '2016', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(15, 'Dinas Prasarana Jalan Tata Ruang dan Pemukiman', 'Studi AMDAL Kegiatan Pembangunan Jalan dan Terowongan Balingka - Ngarai Sianok', 'Sumatera Barat', '2015', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(16, 'PT Kereta Api Indonesia (Persero)', 'Studi AMDAL Kegiatan Pembangunan Stasiun Sudirmanbaru ', 'Jakarta Pusat', '2015', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(17, 'PT Nusantara Agung Jaya', 'Studi AMDAL Kegiatan Pembangunan Bendung Way Apu', 'Maluku', '2015', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(18, 'PT Kinaya Vasthu Wira', 'Studi AMDAL Kegiatan Pembangunan Apartement', 'Jakarta Barat', '2015', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(19, 'PT Sutera Kharisma Unggul', 'Studi AMDAL Kegiatan Pembangunan Apartemen De Mension', 'Tangerang', '2015', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(20, 'PT Adhi Karya Tbk', 'Studi AMDAL Kegiatan Pembangunan Penyelenggaraan Kereta Api Ringan/Light Rail Transit (LRT)', 'Jabodebek', '2015', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(21, 'PT Angkasa Pura II', 'Studi AMDAL Kegiatan Pembangunan Gedung Training Center dan Wisma', 'Tangerang', '2015', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(22, 'PT Moya Bekasi Jaya', 'Studi AMDAL Kegiatan Pembangunan Penyediaan Air Minum', 'Bekasi', '2015', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(23, 'PT Harapan Global Niaga', 'Studi AMDAL Kegiatan Pembangunan Apartemen dan Perkantoran West Vista Beserta Fasilitasnya', 'Jakarta Barat', '2015', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(24, 'PT Royal Bintang Persada', 'Studi AMDAL Kegiatan Pembangunan Gedung Perkantoran Kino Tower', 'Tangerang', '2014', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(25, 'PT Wahana Agung Indonesia', 'Studi AMDAL Kegiatan Pembangunan Apartemen, Hotel, Rukan dan Fasilitasnya', 'Tangerang', '2014', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(26, 'PT Angkasa Pura II', 'Studi AMDAL Kegiatan Pembangunan Bandar Udara Soepadio - Pontianak', 'Kalimantan Barat', '2014', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(27, 'PT Intan Anugerah Persada', 'Studi AMDAL Kegiatan Pembangunan Residensial Treepark (Apartemen, Soho dan Hotel) Serta Fasilitasnya', 'Tangerang', '2014', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(28, 'PT Soll Marina Property Indonesia', 'Studi AMDAL Kegiatan Pembangunan Ruko, Apartemen dan Hotel', 'Tangerang', '2014', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(29, 'PT Canggih Bersaudara Mulyajaya', 'Studi AMDAL Kegiatan Pembangunan Kawasan Industri Artha Hill', 'Karawang', '2014', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(30, 'PT Nusantara Prospekindo Sukses', 'Studi AMDAL Kegiatan Pembangunan Pusat Perdagangan, Hunian dan Non Hunian', 'Bekasi', '2013', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(31, 'PT Mutiara Mitra Sejahtera', 'Studi AMDAL Kegiatan Pembangunan Kondotel, Pertokoan dan Hotel', 'Bekasi', '2013', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(32, 'PT Bumi Hero Perkasa', 'Studi AMDAL Pertambangan Timah', 'Kepulauan Bangka Belitung', '2013', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(33, 'PT Maritim Sinar Utama', 'Studi AMDAL Kegiatan Pembangunan Pergudangan', 'Jakarta Utara', '2013', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(34, 'PT Bekasi Surya Pratama', 'Studi AMDAL Rencana Pengembangan Kawasan Industri MM2100 Phase 4', 'Bekasi', '2013', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(35, 'PT Moya Tangerang', 'Studi AMDAL Pembangunan Unit Pengolahan Air Minum, Pemipaan Transmisi dan Distribusi Zona 1 dan 2 Kapasitas 1.000 lt/dtk dan Studi AMDAL Pembangunan Unit Pengolahan Air Minum, Pemipaan Transmisi dan Distribusi Zona 3 Kapasitas 700 lt/dtk', 'Tangerang', '2013', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(36, 'Direktorat Jenderal Perhubungan Udara', 'Studi AMDAL Rencana Pembangunan Gedung Jakarta Automated Air Trafic Services (JAATS)', 'Tangerang', '2013', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(37, 'PT Puredelta Lestari dan PT Pembangunan Delta Mas', 'Studi AMDAL Pembangunan Kawasan Industri GIIC', 'Bekasi', '2013', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(38, 'PT Bumi Tangerang Mesindotama', 'Studi AMDAL Pengembangan Pabrik Coklat BT Cocoa', 'Tangerang', '2012', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(39, 'PT Pelindo', 'Studi AMDAL Rencana Pembangunan Gedung Pelatihan Kepelabuhan ', 'Bogor', '2012', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(40, 'PT Multi Energi Dinamika', 'Studi AMDAL PLTM Tarusan', 'Sumatera Barat', '2012', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(41, 'PT Sawindo Cemerlang', 'Studi AMDAL Kegiatan Jalan Akses Perkebunan Kelapa Sawit', 'Gorontalo', '2011', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(42, 'PT Sawit Tiara Nusa', 'Studi AMDAL Kegiatan Perkebunan dan Pabrik Kelapa Sawit', 'Gorontalo', '2010', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(43, 'Dinas Pekerjaan Umum Kota Sangata, Kalimantan Timur', 'Studi AMDAL Kegiatan TPA Kota Sangata', 'Kalimantan Timur', '2010', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(44, 'PT Berkat Berlian Internasional', 'Studi AMDAL Kegiatan Pembangunan Apartement', 'Jakarta Timur', '2010', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(45, 'JOB Pertamina ? Golden Spike Indonesia', 'Studi AMDAL Rencana Peningkatan Operasi & Produksi', 'Sumatera Selatan', '2008', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(46, 'RSUD Kabupaten Mukomuko', 'Studi AMDAL Kegiatan Rencana Pembangunan RSUD', 'Bengkulu', '2007', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(47, 'PT Bangun Sarana Baja', 'Studi AMDAL Pembangunan Industri Peleburan Baja', 'Tangerang', '2007', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(48, 'Pelabuhan Kuala Pembuang', 'Studi AMDAL Pembangunan dan Pengoperasian Pelabuhan', 'Kalimantan Tengah', '2007', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(49, 'JOB Pertamina - Golden Spike Indonesia Ltd', 'Studi AMDAL Lapangan Migas Terbatas Lapangan Air Itam', 'Sumatera Selatan', '2007', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(50, 'PT Wiratman Associated', 'Studi AMDAL Rencana Pembangunan Reservoir Teluk Pusong dan Perbaikan Sistem Drainase Kota Lhokseumawe', 'Aceh', '2007', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(51, 'PT Wiratman Associated', 'Studi AMDAL Pengendalian Banjir Kali Pesanggrahan', 'Jakarta', '2007', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(52, 'Dinas Pekerjaan Umum Kalimantan Timur', 'Studi AMDAL Pembangunan Trase Jalan Baru Arteri Primer Lingkar Luar Samarinda ke Arah Arteri Primer Balikpapan - Samarinda', 'Kalimantan Timur', '2005', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(53, 'PT Wahana Pamunah Limbah Industri', 'Studi AMDAL Pembangunan Industri Pengolahan Limbah Cair B3', 'Serang', '2005', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(54, 'PT Khong Guan Biscuit Indonesia', 'Studi AMDAL Kegiatan Pabrik Biscuit', 'Tangerang', '2005', 'AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(55, 'PT Unelec Indonesia', 'Studi Studi Addendum ANDAL, RKL dan RPL Kegiatan Transformator', 'Jakarta Timur', '2018', 'ADDENDUM AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(56, 'PT Wahana Pamunah Limbah Industri', 'Studi Addendum ANDAL, RKL dan RPL Kegiatan Pabrik Pengolahan Limbah Industri', 'Serang', '2018', 'ADDENDUM AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(57, 'PT Moya Tangerang', 'Studi Addendum ANDAL, RKL dan RPL IPA Pramuka - PDAM Tirta Benteng Dalam Penambahan Kapasitas IPA 2X500 lps dan Reservoir', 'Tangerang', '2017', 'ADDENDUM AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(58, 'AirNav Indonesia', 'Studi Adendum ANDAL, RKL dan RPL Kegiatan Gedung Jakarta Automated Air Traffic Services (JAATS)', 'Tangerang', '2016', 'ADDENDUM AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(59, 'PT Rinnai Indonesia', 'Studi Adendum ANDAL, RKL dan RPL Kegiatan Industry Produk Keperluan Rumah Tangga', 'Kabupaten Tangerang', '2016', 'ADDENDUM AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(60, 'Yayasan Islam Syekh-Yusuf', 'Studi Addendum ANDAL, RKL dan RPL Kegiatan Gedung Kampus Universitas Islam Syekh-Yusuf Tangerang', 'Tangerang', '2016', 'ADDENDUM AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(61, 'PT Unelec Indonesia', 'Studi Addendum Andal, RKL dan RPL Kegiatan PT Unelec Indonesia', 'Jakarta Timur', '2016', 'ADDENDUM AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(62, 'PT Pelindo', 'Studi Adendum ANDAL, RKL-RKL Pengembangan Pelabuhan Tarakan', 'Kalimantan Utara', '2015', 'ADDENDUM AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(63, 'PT Pelindo', 'Studi Adendum ANDAL, RKL-RKL Pengembangan Pelabuhan Nunukan', 'Kalimantan Utara', '2015', 'ADDENDUM AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(64, 'PT Semen Lebak', 'Studi Addendum AMDAL Terpadu Perubahan/Penambahan Fasilitas Kegiatan Rencana Pembangunan Pabrik Semen dan Utilitas, Jalan Akses serta Pelabuhan Khusus', 'Kabupaten Lebak', '2015', 'ADDENDUM AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(65, 'PT Metropolis Propertindo Utama', 'Studi Adendum ANDAL, RKL-RKL Mall Metropolis', 'Tangerang', '2014', 'ADDENDUM AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(66, 'PT Rinnai Indonesia', 'Studi Adendum ANDAL, RKL dan RPL Kegiatan Industry Produk Keperluan Rumah Tangga', 'Kabupaten Tangerang', '2014', 'ADDENDUM AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(67, 'PT Wahana Pamunah Limbah Industri', 'Studi Adendum ANDAL, RKL dan RPL Kegiatan Industry Pengelolaan Limbah B3', 'Serang', '2014', 'ADDENDUM AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(68, 'PT Metropolis Propertindo Utama', 'Adendum ANDAL, RKL/RPL Kegiatan Operasional Pusat Perbelanjaan Metropolis Town Square', 'Tangerang', '2014', 'ADDENDUM AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(69, 'PT Spinmill Indah Industri', 'Adendum ANDAL, RKL/RPL Industri Pemintalan Benang', 'Kabupaten Tangerang', '2013', 'ADDENDUM AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(70, 'PT Indofarma Tbk', 'Revisi Rencana Pengelolaan Lingkungan dan Rencana Pemantauan Lingkungan (RKL dan RPL) Kegiatan Industri Farmasi', 'Bekasi', '2005', 'ADDENDUM AMDAL (ANDAL, RKL-RPL)', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(71, 'PT Alfa Goldland Realty', 'Studi DELH Kegiatan Operasional Apartemen dan Rukan', 'Tangerang', '2018', 'DELH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(72, 'PT Intiroda Makmur', 'Studi DELH Kegiatan Industri Barang dari Kawat', 'Tangerang', '2018', 'DELH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(73, 'PT Gajah Tunggal Tbk', 'Studi Dokumen Evaluasi Lingkungan Hidup (DELH) Kegiatan Operasional Pabrik Industri Ban Bermotor', 'Tangerang', '2017', 'DELH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(74, 'PT Moya Bekasi Jaya', 'Studi DELH IPA Tegal Gede (Eksisting) - PDAM Tirta Bhagasasi', 'Bekasi', '2017', 'DELH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(75, 'PT IMS Logistik Indonesia', 'Studi Dokumen Evaluasi Lingkungan Hidup (DELH) Kegiatan Usaha PT IMS Logistik Indonesia', 'Tangerang', '2016', 'DELH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(76, 'PT Nusantara Agung Jaya', 'Studi Dokumen Evaluasi Lingkungan Hidup (DELH) Kegiatan Perluasan Jalan Nasional', 'Maluku Utara', '2015', 'DELH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(77, 'PT Aresta Karya Mandiri', 'Studi Dokumen Evaluasi Lingkungan Hidup (DELH) Kegiatan PLN-Puslitbang', 'Jakarta', '2015', 'DELH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(78, 'Universitas Indonesia', 'Studi Dokumen Evaluasi Lingkungan Hidup (DELH) Kegiatan Universitas Indonesia Kampus Salemba', 'Jakarta Pusat', '2015', 'DELH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(79, 'Universitas Indonesia', 'Studi Dokumen Evaluasi Lingkungan Hidup (DELH) Kegiatan Universitas Indonesia Kampus Srengseng Sawah/Jagakarsa', 'Jakarta Selatan', '2015', 'DELH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(80, 'Yayasan Islam Syekh-Yusuf', 'Studi Dokumen Evaluasi Lingkungan Hidup (DELH) Kegiatan Gedung Kampus Universitas Islam Syekh-Yusuf Tangerang', 'Tangerang', '2015', 'DELH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(81, 'PT Mesindo Agung Nusantara', 'Studi Dokumen Evaluasi Lingkungan Hidup (DELH) Kegiatan Gudang, Penyiapan Kabel, Worksop (Maintenance Mesin-Mesin), Dan Budidaya Bibit Tanaman', 'Tangerang', '2015', 'DELH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(82, 'PT Sejahteraraya Anugrahjaya Tbk', 'Studi Dokumen Evaluasi Lingkungan Hidup (DELH) Kegiatan Rumah Sakit Mayapada Tangerang', 'Tangerang', '2015', 'DELH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(83, 'Yayasan Bintang Rahmah Tangerang', 'Studi Revisi UKL UPL Kegiatan Operasional Rumah Sakit Islam Sari Asih Ar-Rahmah', 'Kota Tangerang', '2020', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(84, 'PT Tigalapan Adam Internasional', 'Studi UKL UPL Kegiatan IPA Tambun', 'Kabupaten Bekasi', '2020', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(85, 'PT Sinar Makmur Sarana', 'Studi UKL UPL Kegiatan IPA Taruma Jaya', 'Kabupaten Bekasi', '2020', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(86, 'PT PLN (Persero)', 'Studi UKL UPL Kegiatan Pembangunan SUTT 150 kV Tenggarong-Sepaku', 'Kalimantan Timur', '2019', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(87, 'PT Pertamina (Persero)', 'Studi UKL UPL Kegiatan Distribusi Pipa Minyak', 'Jambi', '2019', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(88, 'PT Pertamina (Persero)', 'Studi UKL UPL Kegiatan Tempat Penyimpanan Minyak di Bandara', 'Pangkal Pinang', '2019', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(89, 'Dinas PUPR Kota Tangerang', 'Studi UKL UPL Kegiatan Pembangunan Jembatan Ciganea', 'Tangerang', '2019', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(90, 'Dinas PUPR Kota Tangerang', 'Studi UKL UPL Kegiatan Pembangunan Jembatan KA Bandara', 'Tangerang', '2019', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(91, 'Dinas Lingkungan Hidup Kota Tangerang', 'Jasa Konsultansi Penyusunan Dokumen Lingkungan UKL-UPL Gedung ITF', 'Tangerang', '2018', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(92, 'PT Quad Kontena Logistics', 'Studi UKL-UPL Kegiatan Depo Kontainer', 'Jakarta Utara', '2018', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(93, 'PT Colorpak Indonesia', 'Studi UKL dan UPL Kegiatan Industri Tinta', 'Tangerang', '2018', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(94, 'PT Sari Asih', 'Studi UKL UPL Kegiatan Pembangunan Rumah Sakit Sari Asih', 'Tangerang', '2018', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(95, 'PT Krakatau Tirta Industri', 'Studi UKL-UPL Instalasi Pengolahan Lumpur Secara Mekanis (Decanter)', 'Cilegon', '2018', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(96, 'PT IRC Gajah Tunggal Manufacturing Indonesia', 'Studi UKL dan UPL Kegiatan PT IRC Gajah Tunggal Manufacturing Indonesia', 'Tangerang', '2018', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(97, 'PT Handal Jaya Service', 'Studi UKL UPL Kegiatan Depo Kontainer', 'Jakarta Utara', '2017', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(98, 'PT Kereta Api Indonesia (Persero)', 'Studi UKL dan UPL Pembangunan Container Yard di Stasiun Banjarsari antara Muaraenim - Lahat Wilayah Divre III Palembang', 'Palembang', '2017', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(99, 'PT PLN (Persero)', 'Studi UKL UPL Kegiatan Pembangunan SUTT 150kV GI Pangkalan Bun - GI Sukamara dan GI 150 kV Sukamara', 'Kalimantan Tengah', '2017', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(100, 'PT Wangi Energi', 'Studi UKL UPL Kegiatan Stockpile Batu Bara', 'Jakarta Utara', '2017', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(101, 'PT Dayati Defa Contenindo', 'Studi UKL UPL Kegiatan Stockpile Batu Bara', 'Jakarta Utara', '2017', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(102, 'PT Paul & CO Asia', 'Studi UKL UPL Kegiatan Percetakan Kertas', 'Tangerang Selatan', '2017', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(103, 'PT Kereta Api Indonesia (Persero)', 'Studi UKL UPL Kegiatan Peningkatan Kapasitas Dipo Gerbong Rejosari', 'Sumatera Selatan', '2017', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(104, 'PT Aneka Petroindo Raya', 'Studi UKL UPL Kegiatan Pembangunan SPBU', 'Tangerang Selatan', '2017', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(105, 'PT PLN (Persero)', 'Studi UKL UPL Kegiatan Pembangunan SUTT 150kV PLTGU Kalsel Peaker - Seberang Barito', 'Kalimantan Tengah', '2017', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(106, 'PT PLN (Persero)', 'Studi UKL-UPL Gardu Induk 150 kVBatulicin SUTT 150 Kv GI Batulicin-Landing Point Batulicin, Saluran Kabel Laut Tegangan Tinggi (SKLTT) 150 KV Landing Point Batulicin -Landing Point P. Laut, SUTT 150 KV Landing Point P. Laut - GI Kotabaru dan Gardu Induk 150 Kv Kota Baru', 'Kalimantan Selatan', '2017', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(107, 'PT Kereta Api Indonesia (Persero)', 'Studi UKL-UPL Rencana Pembangunan Jalur Kereta Api Bandara Adi Soemarmo', 'Jawa Tengah', '2017', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(108, 'PT Kereta Api Indonesia (Persero)', 'Studi UKL-UPL Kegiatan Pembangunan Jalur Stabling KRLdi Emplasemen Stasiun Serpong, Tangerang dan Rangkasbitung', 'Jawa Tengah', '2017', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(109, 'PT PLN (Persero)', 'Studi UKL UPL Rencana Pembangunan SUTT 150 kV Lati ? Tj. Redep ? Tj. Selor, GI Lati, GI Tj. Redep, Tj. Selor', 'Kalimantan Timur', '2016', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(110, 'PT Hansae Indonesia Utama', 'Studi UKL dan UPL  Industri Pakaian Jadi', 'Jakarta Utara', '2016', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(111, 'PT Panca Amara Utama', 'Studi UKL-UPL Pipanisasi Gas Bumi di Desa Uso', 'Sulawesi', '2016', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(112, 'PT PLN (Persero)', 'Studi UKL-UPL Pembangnan Gardu Induk 150 kV Muara Komam', 'Kalimantan Timur', '2016', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(113, 'PT Sari Asih', 'Studi UKL-UPL Kegiatan Rumah Sakit Sari Asih Cipondoh', 'Tangerang', '2016', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(114, 'PT Kreasi Tehnik Bahari', 'Studi UKL-UPL Kegiatan Operasional Dermaga dan Gudang', 'Jakarta Utara', '2016', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(115, 'Ezi Sushanti, AMD', 'Studi UKL-UPL Kegiatan Workshop Alat Berat', 'Tangerang', '2016', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(116, 'PT Arkonin Engineering Manggala Pratama', 'Studi UKL-UPL Kegiatan Pembangunan Kawasan Pariwisata Bromo Tengger Semeru (BTS)', 'Jawa Timur', '2016', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(117, 'PT Gilang Hydro Lestari', 'Studi UKL-UPL Kegiatan PLTM Cikamunding', 'Lebak', '2015', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(118, 'PT Smart Motor Indonesia', 'Studi UKL dan UPL PT Smart Motor Indonesia', 'Bekasi', '2015', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(119, 'PT Hansae Indonesia Utama', 'Studi UKL dan UPL  Industri Pakaian Jadi', 'Jakarta Utara', '2015', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(120, 'PT Kharisma Astra Nusantara', 'Studi UKL dan UPL  Depo Kontainer', 'Jakarta Utara', '2014', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(121, 'PT YCH Distrikpark Indonesia', 'Studi UKL dan UPL Kegiatan Pembangunan Gudang', 'Bekasi', '2014', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(122, 'PT Gama Griya Sentosa', 'Studi UKL dan UPL Kegiatan Pembangunan Ruko', 'Jakarta Selatan', '2014', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(123, 'PT Dok Duasatu Nusantara', 'Studi UKL dan UPL Kegiatan Pembangunan Galangan Kapal', 'Jakarta Utara', '2014', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(124, 'PT Sun Tak Indonesia', 'Studi UKL dan UPL  PT Sun Tak Indonesia', 'Jakarta Utara', '2013', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(125, 'PT Transcon Indonesia', 'Studi UKL dan UPL  PT Transcon Indonesia', 'Jakarta Utara', '2013', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(126, 'PT Layanan Lancar Lintas Logistindo', 'Studi UKL dan UPL  PT Layanan Lancar Lintas Logistindo', 'Jakarta Utara', '2013', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(127, 'PT Bina Abadi', 'Studi UKL dan UPL Kegiatan Beton Cair/Batching', 'Kalimantan Timur', '2013', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(128, 'PT Tawun Gegunung Energi', 'Studi UKL dan UPL Pengembangan Lapangan Terbatas Blok Tawun - Gegunung', 'Jawa Timur', '2013', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(129, 'PT Mutiara Energi', 'Studi UKL dan UPL Penyaluran Gas ke PT Toyogiri', 'Bekasi', '2013', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(130, 'PT YTI Indonesia', 'Studi UKL dan UPL  PT YTI Indonesia', 'Jakarta Utara', '2012', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(131, 'Kalimantan Kutai Energi', 'Studi UKL dan UPL  Kegiatan Pemboran Sumur Eksplorasi Blok West Sangata', 'Kalimantan Timur', '2012', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(132, 'PT Akino Indonesia Trading', 'Studi UKL dan UPL Kegiatan Pergdangan', 'Jakarta Utara', '2012', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(133, 'PT Saranaguna Makmur Persada', 'Studi UKL dan UPL Kegiatan Penimbunan Alat Berat', 'Jakrta Utara', '2012', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(134, 'PT Bina Abadi', 'Studi UKL dan UPL Kegiatan Beton Cair/Batching', 'Kalimantan Timur', '2012', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(135, 'PT Corum Indonesia', 'Studi UKL dan UPL Kegiatan Pembuatan Jerigen', 'Jakarta Utara', '2012', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(136, 'PT Anugrah Citra Rekonindo', 'Studi UKL dan UPL Kegiatan Pergudangan', 'Jakarta Utara', '2012', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(137, 'PT Indo-Sino Agrochemical', 'Studi UKL dan UPL  Industri Pemberantasan Hama (Formulasi)', 'Bekasi', '2011', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(138, 'PT Ziegler Indonesia', 'Studi UKL dan UPL  PT Ziegler Indonesia', 'Bekasi', '2011', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(139, 'PT Hansae Indonesia Utama', 'Studi UKL dan UPL  Industri Pakaian Jadi', 'Jakarta Utara', '2011', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(140, 'PT Gorontalo Sejahtera Mining', 'Studi UKL dan UPL PT Gorontalo Sejahtera Mining', 'Sulawesi', '2011', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(141, 'PT Gasindo Pratama Sejati', 'Studi UKL dan UPL Kegiatan Penyaluran Gas Bumi Melalu Pipa 18 in Sepanjang 48 Km dari Citarik Kabupaten Karawang - Cikarang Listrindo', 'Bekasi', '2010', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(142, 'PT Rabana Gasindo Utama', 'Studi UKL dan UPL Kegiatan Penyaluran Gas Bumi Melalu Pipa 10 in Sepanjang 3 Km dari Tegal Gede - Cikarang Listrindo', 'Cikarang', '2010', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(143, 'PT Kharisma Astra Nusantara', 'Studi UKL dan UPL kegiatan Depo Kontainer', 'Jakarta Utara', '2009', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(144, 'PT Global Bitumen Utama', 'Studi UKL dan UPL Pemda Bekasi dan Migas', 'Bekasi', '2009', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(145, 'JOB Pertamina-Golden Spike Indonesia Ltd', 'Studi Revisi UKL dan UPL Kegiatan Penyaluran Minyak Bumi Melalui Pipa ? 8? Sepanjang 19 Km dari AIPF ke Pengabuan', 'Sumatera Selatan', '2009', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(146, 'JOB Pertamina-Golden Spike Indonesia Ltd', 'Studi UKL dan UPL Kegiatan Penyaluran Minyak Bumi Melalui Pipa ? 8? Sepanjang 22 Km dari AIPF ke Pengabuan', 'Sumatera Selatan', '2008', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(147, 'PT Indonesia Bulk Terminal', 'Studi UKL dan UPL Kegiatan Dermaga (Jetty)', 'Kalimantan Selatan', '2008', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(148, 'PT Nichias Metalwork Indonesia', 'Studi UKL dan UPL Kegiatan Industri Gasket dan Komponen Penyangga Logam', 'Bekasi', '2008', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(149, 'PT Pandu Dewa Nata', 'Studi UKL UPL Kegiatan Industri Garmen (Pakaian Jadi)', 'Jakarta Utara', '2008', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(150, 'PT Yeon Heung Megasari', 'Studi UKL UPL Kegiatan Industri Garmen (Pakaian Jadi)', 'Jakarta Utara', '2008', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(151, 'PT Colorpak Indonesia', 'Studi UKL dan UPL Kegiatan Industri Tinta Cetak', 'Tangerang', '2008', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(152, 'PT Sinar Syno Kimia', 'Studi UKL dan UPL Industri Kimia', 'Bekasi', '2008', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(153, 'PT Primanusa Palma Energi', 'Studi UKL dan UPL Industri Biodiesel', 'Jakarta Utara', '2008', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(154, 'PT Seasonal Suplies Indonesia', 'Studi UKL dan UPL Industri Wafer Stick', 'Tangerang', '2008', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(155, 'PT Nugraha Mitra Jaya', 'Studi UKL dan UPL Kegiatan Industri Zinc Oxide', 'Tangerang', '2008', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(156, 'PT Hansae Indonesia Utama', 'Studi UKL dan UPL  Industri Pakaian Jadi', 'Jakarta Utara', '2007', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(157, 'PT Fucolor Chemical Industri', 'Studi UKL dan UPL Kegiatan Industri Kimia Tekstil', 'Jakarta Utara', '2007', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(158, 'PT Total Chemindo Loka', 'Studi UKL UPL Kegiatan Industri Detergent', 'Jakarta Timur', '2007', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(159, 'PT Merpati Petro', 'Studi UKL dan UPL Kegiatan SPBU', 'Tangerang', '2007', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(160, 'PT Mahaputra Adi Nusa', 'Studi UKL dan UPL Kegiatan industri Pengolahan Minyak Pelumas Bekas', 'Jakarta Timur', '2007', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(161, 'PT Hansoll Indo', 'Studi UKL dan UPL Kegiatan Industri Garmen (Pakaian Jadi)', 'Jakarta Utara', '2007', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(162, 'PT Bintang Adibusana', 'Studi UKL dan UPL Kegiatan Industri Garmen (Pakaian Jadi)', 'Jakarta Utara', '2007', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(163, 'PT Inco Sindo Sukses', 'Studi UKL dan UPL Kegiatan Industri Garmen (Pakaian Jadi)', 'Jakarta Utara', '2006', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(164, 'PT  Inanta Mandiri', 'Studi UKL dan UPL SPBU', 'Jakarta Barat', '2006', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(165, 'PT Selindo', 'Studi UKL dan UPL Kegiatan Industri Bahan Makanan', 'Tangerang', '2006', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(166, 'PT Gasindo Piranti Nusa', 'Studi UKL dan UPL Kegiatan Pengisian Gas LPG', 'Bekasi', '2006', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(167, 'PT Walinusa Energi', 'Studi UKL dan UPL Pemasangan Pipa Distribusi Gas 12? Sepanjang 14 Km', 'Jawa Timur', '2006', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(168, 'PT Sigma Rancang Perdana', 'Studi UKL dan UPL Kegiatan SPBU', 'Jakarta Selatan', '2006', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(169, 'PT Surya Jaya Liga Mandiri', 'Studi UKL dan UPL SPBU', 'Jakarta Barat', '2006', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(170, 'PT Cicero Indonesia', 'Studi UKL UPL PT Cicero Indonesia', 'Jakrta Timur', '2005', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(171, 'Rumah Sakit Bersalin YPK', 'Studi UKL dan UPL Rumah Sakit Bersalin', 'Jakarta Pusat', '2005', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(172, 'PT Gandum Mas Kencana', 'Studi UKL dan UPL Industri Makanan', 'Tangerang', '2005', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(173, 'PT Trofik Energi Pandan', 'Studi UKL dan UPL Seismik 2 D', 'Sumatera', '2005', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(174, 'PT Widico Stantina Biscuit', 'Studi UKL dan UPL Industri Wafer Stick', 'Tangerang', '2005', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(175, 'PT Sumi Indo Kabel', 'Studi UKL dan UPL Kegiatan Industri Kabel', 'Tangerang', '2005', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(176, 'PT Manna Food Indonesia', 'Studi UKL dan UPL Industri Kembang Gula', 'Tangerang', '2005', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(177, 'RS. THT Prof. Nizar', 'Studi UKL dan UPL RS. THT Prof Nizar', 'Jakarta Pusat', '2004', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(178, 'PT Ziegler Indonesia', 'Studi UKL dan UPL PT Ziegler Indonesia', 'Bekasi', '2004', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(179, 'RS. Yumaga', 'Studi UKL dan UPL RS. Yumaga', 'Serang', '2004', 'UKL-UPL', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(180, 'PT Sari Asih Infiardi', 'Studi DPLH Kegiatan Rumah Sakit Sari Asih Sangiang', 'Kota Tangerang', '2020', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(181, 'PT Kehatilab Indonesia', 'Studi DPLH Kegiatan Laboratorium Lingkungan', 'Tangerang Selatan', '2020', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(182, 'PT PLN (Persero)', 'Studi DPLH Kegiatan Operasional Perkantoran dan Rumah Dinas', 'Kalimantan Timur', '2017', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(183, 'CV Hidup Sukses Mandiri', 'Studi DPLH Kegiatan Penimbunan Pasir dan Batu', 'Jakarta Utara', '2017', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(184, 'CV Helen Bersaudara', 'Studi DPLH Kegiatan Penimbunan Pasir dan Batu', 'Jakarta Utara', '2017', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(185, 'PT Roda Mandala Asiamakmur', 'Studi DPLH Kegiatan Penimbunan Pasir dan Batu', 'Jakarta Utara', '2017', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(186, 'PT Akssara Buana Internusa', 'Studi DPLH Kegiatan Penimbunan Pasir dan Batu', 'Jakarta Utara', '2017', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(187, 'PT Multi Trans Sejahtera', 'Studi DPLH Kegiatan Penimbunan Pasir dan Batu', 'Jakarta Utara', '2017', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(188, 'Asosiasi Asuransi Jiwa Indonesia', 'Studi DPLH Kegiatan Perkantoran Asuransi', 'Jakarta Pusat', '2017', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(189, 'PT Nindya Karya (Persero)', 'Studi DPLH Kegiatan Perkantoran', 'Jakarta Timur', '2017', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(190, 'PT Multisukses Jayasakti', 'Studi DPLH Kegiatan Operasional Industri Pakaian Jadi', 'Jakarta Timur', '2016', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(191, 'PT Aisin Indonesia', 'Studi DPLH Gedung Consumer Goods', 'Bekasi', '2015', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(192, 'PT Dok Duasatu Nusantara', 'Studi DPLH Kegiatan Galangan Kapal', 'Jakarta Utara', '2014', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(193, 'PT Gasindo Pratama Sejati', 'Studi DPLH Kegiatan Penyaluran Gas Bumi Melalui Pipa ? 18? Sepanjang 48,6 Km', 'Bekasi', '2014', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(194, 'PT Bangun Busana Maju', 'Studi DPLH Industri Pakaian Jadi', 'Jakarta Utara', '2011', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(195, 'PT Fokus Garmindo', 'Studi DPLH Industri Pakaian Jadi', 'Jakarta Utara', '2011', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(196, 'PT Indonesia Airin Marine Supply', 'Studi DPLH Kegiatan Depo Kontainer dan Pergudangan', 'Jakarta Utara', '2011', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(197, 'PT Eins Trend Global', 'Studi DPLH Industri Pakaian Jadi', 'Jakarta Utara', '2011', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(198, 'PT Gunung Abadi', 'Studi DPLH Industri Pakaian Jadi', 'Jakarta Utara', '2011', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(199, 'PT Uni Kyung Seung International', 'Studi DPLH Industri Pakaian Jadi', 'Jakarta Utara', '2011', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(200, 'PT Golden Continental', 'Studi DPLH Industri Pakaian Jadi', 'Jakarta Utara', '2011', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(201, 'PT NB Indonesia', 'Studi DPLH Industri Pakaian Jadi', 'Jakarta Utara', '2011', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(202, 'PT Adidaya Indo-China Industry', 'Studi DPLH PT Adidaya Indo-China Industry', 'Jakarta Utara', '2011', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(203, 'PT Wooin Indonesia', 'Studi DPPL Kegiatan Operasional Industri Pakaian Jadi', 'Jakarta Utara', '2011', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(204, 'PT Indosox Mills', 'Studi DPPL Kegiatan Industri Perajutan Tekstil (Kaos Kaki dan Sarung Tangan)', 'Jakarta Utara', '2010', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(205, 'PT Multi Well', 'Studi DPPL Kegiatan Industri Bordir/Sulaman', 'Jakarta Utara', '2010', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(206, 'PT Satwa Boga Sempurna', 'Studi DPLH Industri Pakan Jadi Ternak Unggas', 'Kabupaten Tangerang', '2010', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(207, 'PT Multisukses Jayasakti', 'Studi DPPL Kegiatan Operasional Industri Pakaian Jadi', 'Jakarta Timur', '2010', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(208, 'PT H.M.L Indonesia', 'Studi DPPL PT H.M.L Indonesia', 'Jakarta Utara', '2009', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(209, 'PT Karya Tehnik Pasirindo', 'Studi DPPL Kegiatan Stockpile Pasir', 'Jakarta Utara', '2009', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(210, 'PT Rismar Daewo Apparel', 'Studi DPPL Kegiatan Operasional Industri Pakaian Jadi', 'Jakarta Utara', '2009', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(211, 'PT Wooin Indonesia', 'Studi DPPL Kegiatan Operasional Industri Pakaian Jadi', 'Jakarta Utara', '2009', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(212, 'PT Andhika Makmur Persada', 'Studi DPPL Kegiatan Operasional Pengangkut, Penyimpanan dan Pengumpulan Limbah B3', 'Jakarta Timur', '2009', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(213, 'PT Segara Pacifik Maju', 'Studi DPPL Kegiatan Operasional Depot Container', 'Jakarta Utara', '2009', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(214, 'PT Multi Bina Pura International', 'Studi DPPL Kegiatan Operasional Depot Container', 'Jakarta Utara', '2009', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(215, 'PT NYK Puninar Logistics Indonesia', 'Studi DPPL Kegiatan Operasional Depot Container', 'Jakarta Timur', '2009', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(216, 'PT Ritra Konnas Freight Center', 'Studi DPPL Kegiatan Operasional Depot Container', 'Jakarta Utara', '2009', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(217, 'PT Masaji Tatanan Kontainer', 'Studi DPPL Kegiatan Operasional Depot Container', 'Jakarta Utara', '2009', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(218, 'PT Setia Putra Sejati', 'Studi DPPL Kegiatan Operasional Depot Container', 'Jakarta Utara', '2009', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(219, 'PT Dwipa Kharisma Mitra', 'Studi DPPL Kegiatan Operasional Depot Container', 'Jakarta Utara', '2009', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(220, 'PT Global Terminal Marunda', 'Studi DPPL Kegiatan Operasional Depot Container', 'Jakarta Utara', '2009', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(221, 'PT Kharisma Astra Nusantara', 'Studi DPPL Kegiatan Operasional Depot Container', 'Jakarta Utara', '2009', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(222, 'PT Gema Nawagraha Sejati', 'Studi DPPL Kegiatan Operasional Depot Container', 'Jakarta Utara', '2009', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(223, 'PT Karya Teknik Pasirindo', 'Studi DPPL Kegiatan Operasional Stock Pile', 'Jakarta Utara', '2009', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(224, 'PT Multimas Nabati Asahan', 'Studi DPPL Kegiatan Industri Minyak Nabati dan Mentega Nabati', 'Jakarta Timur', '2008', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(225, 'PT Glorius Interbuana', 'Studi DPPL Kegiatan Operasional Depot Container', 'Jakarta Utara', '2008', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(226, 'PT Intinusa Mitra Sukses', 'Studi DPPL Kegiatan Operasional Stock Pile', 'Jakarta Utara', '2008', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(227, 'PT Hutamasarana Dhianarta', 'Studi DPPL Kegiatan Operasional Dermaga', 'Jakarta Utara', '2008', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(228, 'PT Kreasi Tehnik Bahari', 'Studi DPPL Kegiatan Operasional Dermaga dan Gudang', 'Jakarta Utara', '2008', 'DPPL/DPLH', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(229, 'PT PLN (Persero)', 'Studi IPLC Kegiatan PLTG/MG Kaltim Peaker 100 MW', 'Kalimantan Timur', '2017', 'IPLC', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(230, 'PT PLN (Persero)', 'Studi IPLC PLTU Kariangau', 'Kalimantan Timur', '2016', 'IPLC', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(231, 'Dinas Lingkungan Hidup Kota Tangerang', 'Jasa Konsultansi Penelitian Kegiatan Pemantauan Kualitas Air Sungai dan Kondisi Ekologis Kota Tangerang Semester I Tahun 2019', 'Tangerang', '2019', 'KAJIAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(232, 'Dinas Lingkungan Hidup Kota Tangerang', 'Penyusunan Dokumen Sistem Manajemen Adipura Tahun 2019 Kota Tangerang', 'Tangerang', '2019', 'KAJIAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(233, 'Dinas Bappeda Kota Tangerang', 'Studi Dokumen Limbah B3', 'Tangerang', '2019', 'KAJIAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(234, 'Dinas Bappeda Kota Tangerang', 'Studi Dokumen Sumur Dalam', 'Tangerang', '2019', 'KAJIAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(235, 'Dinas Lingkungan Hidup Kota Tangerang', 'Jasa Konsultansi Penelitian Pemantauan Lingkungan Kegiatan Emisi Kota Tangerang', 'Tengerang', '2019', 'KAJIAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(236, 'Dinas Lingkungan Hidup Kota Tangerang', 'Jasa Konsultansi Penelitian Pemantauan Kualitas Udara dan Kebisingan Kota Tangerang Semester I Tahun 2019', 'Tangerang', '2019', 'KAJIAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(237, 'Dinas Lingkungan Hidup Kota Tangerang', 'Jasa Konsultansi Penelitian Non Kontruksi Kegiatan Pengawasan Pelaksanaan', 'Tangerang', '2019', 'KAJIAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(238, 'Dinas Lingkungan Hidup Kota Tangerang', 'Kebijakan Lingkungan Hidup Kota Tangerang Tahun 2019', 'Tangerang', '2019', 'KAJIAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(239, 'Dinas Lingkungan Hidup Kota Tangerang', 'Jasa Konsultansi Penelitian Non Kontruksi Kegiatan Pengawasan Pelaksanaan', 'Tangerang', '2019', 'KAJIAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(240, 'Dinas Lingkungan Hidup Kota Tangerang', 'Kebijakan Lingkungan Hidup Kota Tangerang Tahun 2019', 'Tangerang', '2019', 'KAJIAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(241, 'Dinas Lingkungan Hidup Kota Tangerang', 'Jasa Konsultansi Penelitian Non Kontruksi Kegiatan Pengawasan Pelaksanaan', 'Tangerang', '2018', 'KAJIAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(242, 'Dinas Lingkungan Hidup Kota Tangerang', 'Kebijakan Lingkungan Hidup Kota Tangerang Tahun 2018', 'Tangerang', '2018', 'KAJIAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(243, 'Dinas Lingkungan Hidup Kota Tangerang', 'Penyusunan Kajian Analisa Kualitas Kompos Kegiatan Pengembangan Teknologi Pengolahan Sampahan', 'Tangerang', '2018', 'KAJIAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(244, 'Dinas Lingkungan Hidup Kota Tangerang', 'Studi Dokumen Adipura Tahun 2018 Kota Tangerang', 'Tangerang', '2018', 'KAJIAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(245, 'Dinas Lingkungan Hidup Kota Tangerang', 'Jasa Konsultansi Penelitian Kegiatan Pemantauan Kualitas TPA Rawa Kucing Semester II Tahun 2018', 'Tangerang', '2018', 'KAJIAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(246, 'Dinas Lingkungan Hidup Kota Tangerang', 'Jasa Konsultansi Penelitian Kegiatan Pemantauan Kualitas Air Sungai dan Kondisi Ekologis Kota Tangerang', 'Tangerang', '2017', 'KAJIAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(247, 'PT Alfa Goldland Realty', 'Pemantauan Lingkungan Kegiatan Operasional Tower Prominence Semester I Tahun 2020', 'Tangerang', '2020', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(248, 'PT Triniti Menara Serpong', 'Pemantauan Lingkungan Kegiatan Operasinal Apartemen Collins Semester II Tahun 2020, Semester I & II Tahun 2021', 'Tangerang', '2020', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(249, 'PT Gema Nawagraha Sejati', 'Pemantauan Lingkungan Kegiatan Depo Kontainer Semester I Tahun 2020', 'Jakarta Utara', '2020', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(250, 'PT Inter World Steel Mills Indo', 'Pemantauan Lingkungan Kegiatan Industri Baja Semester I Tahun 2020', 'Tangerang', '2020', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0);
INSERT INTO `amc_m_project` (`id`, `name`, `work_package`, `location`, `date`, `project`, `sector`, `createDate`, `createUser`, `editDate`, `editUser`) VALUES
(251, 'PT Colorpak Indonesia', 'Implementasi RKL-RPL Kegiatan Industri Tinta Cetak Semester I Tahun 2020', 'Tangerang', '2020', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(252, 'PT Alfa Goldland Realty', 'Pemantauan Lingkungan Kegiatan Operasional Tower Paddington Semester I Tahun 2020', 'Tangerang', '2020', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(253, 'PT Rinnai Indonesia Plant Balaraja', 'Implementasi RKL-RPL Kegiatan Industri Perlengkapan Rumah Tangga Semester I Tahun 2020', 'Tangerang', '2020', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(254, 'PT Semen Lebak', 'Implementasi RKL-RPL Kegiatan Pembangunan Pabrik Semen dan Untilitas, Jalur Akses Serta Pelabuhan Khusus Semester I Tahun 2020', 'Lebak', '2020', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(255, 'PT Pion Quarry Nusantara', 'Implementasi RKL-RPL Kegiatan Usaha Pertambangan Batu Gamping dan Associate Mineral Semester I Tahun 2020', 'Lebak', '2020', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(256, 'PT Prima Tedja Kharisma', 'Implementasi RKL-RPL Kegiatan Kawasan Pergudangan Semester I Tahun 2020', 'Tangerang', '2020', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(257, 'PT Rinnai Indonesia Plant Cikupa', 'Implementasi RKL-RPL Kegiatan Industri Perlengkapan Rumah Tangga Semester I Tahun 2020', 'Tangerang', '2020', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(258, 'PT Paul & CO Asia', 'Pemantauan Lingkungan Kegiatan Percetakan Kertas Semester I Tahun 2020', 'Tangerang', '2020', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(259, 'PT Layanan Lancar Lintas Logistindo', 'Implementasi RKL-RPL Kegiatan Logistik Semester I Tahun 2020', 'Jakarta Utara', '2020', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(260, 'PT Kurnia Tirta Samudera Makmur', 'Implementasi RKL-RPL Kegiatan Bongkar Muat Pelabuhan Semester I Tahun 2020', 'Jakarta Utara', '2020', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(261, 'PT Hutama Sarana Dhianarta', 'Implementasi RKL-RPL Kegiatan Industri Garment Pelabuhan Semester I Tahun 2020', 'Jakarta Utara', '2020', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(262, 'PT Glorious Interbuana', 'Implementasi RKL-RPL Kegiatan Depo Container Semester I Tahun 2020', 'Jakarta Utara', '2020', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(263, 'PT Sumi Indo Kabel', 'Pemantauan Lingkungan Kegiatan Pabrik Kabel Semester I Tahun 2020', 'Tangerang', '2020', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(264, 'PT Tainan Enterprises Indonesia', 'Implementasi RKL-RPL Kegiatan Industri Garment Semester I Tahun 2020', 'Jakarta Utara', '2020', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(265, 'PT Kreasi Teknik Bahari', 'Implementasi RKL-RPL Kegiatan Dermaga Semester I Tahun 2020', 'Jakarta Utara', '2020', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(266, 'PT Panca Amara Utama', 'Kegiatan Pemantauan Lingkungan Pabrik Amoniak Triwulan I, II, III & IV Tahun 2020', 'Sulawesi Selatan', '2020', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(267, 'AirNav Indonesia', 'Implementasi RKL-RPL Kegiatan Perum LPPNPI Semester I & II Tahun 2020', 'Tangerang', '2020', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(268, 'PT Gema Nawagraha Sejati', 'Pemantauan Lingkungan Kegiatan Depo Kontainer Semester II Tahun 2019', 'Jakarta Utara', '2019', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(269, 'PT Trafoindo Prima Perkasa', 'Pemantauan Lingkungan Pabrik Kabel Semester II Tahun 2019', 'Tangerang', '2019', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(270, 'PT Inter World Steel Mills Indo', 'Pemantauan Lingkungan Kegiatan Industri Baja Semester II Tahun 2019', 'Tangerang', '2019', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(271, 'PT Rinnai Indonesia Plant Cikupa', 'Implementasi RKL-RPL Kegiatan Industri Perlengkapan Rumah Tangga Semester II Tahun 2019', 'Tangerang', '2019', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(272, 'PT Rinnai Indonesia Plant Balaraja', 'Implementasi RKL-RPL Kegiatan Industri Perlengkapan Rumah Tangga Semester II Tahun 2019', 'Tangerang', '2019', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(273, 'PT Semen Lebak', 'Implementasi RKL-RPL Kegiatan Pembangunan Pabrik Semen dan Untilitas, Jalur Akses Serta Pelabuhan Khusus Semester II Tahun 2019', 'Lebak', '2019', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(274, 'PT Envilab Indonesia', 'Implementasi RKL-RPL Kegiatan Pertamina Hulu Energi WMO Triwulan III & IV Tahun 2019 dan Triwulan I & II Tahun 2020', 'Jawa Timur', '2019', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(275, 'PT Colorpak Indonesia', 'Implementasi RKL-RPL Kegiatan Industri Tinta Cetak Semester II Tahun 2019', 'Tangerang', '2019', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(276, 'PT Sulindafin', 'Implementasi RKL-RPL Kegiatan Industri Tekstil Semester II Tahun 2019', 'Tangerang', '2019', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(277, 'PT Royal Bintang Persada', 'Implementasi RKL-RPL Kegiatan Hotel/Apartemen Semester II Tahun 2019 dan Semester I Tahun 2020', 'Tangerang', '2019', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(278, 'PT Sumi Indo Kabel', 'Pemantauan Lingkungan Kegiatan Pabrik Kabel Semester II Tahun 2019', 'Tangerang', '2019', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(279, 'PT Layanan Lancar Lintas Logistindo', 'Implementasi RKL-RPL Kegiatan Logistik Semester II Tahun 2019', 'Jakarta Utara', '2019', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(280, 'PT Prima Tedja Kharisma', 'Implementasi RKL-RPL Kegiatan Kawasan Pergudangan Semester II Tahun 2019', 'Tangerang', '2019', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(281, 'PT Kurnia Tirta Samudera Makmur', 'Implementasi RKL-RPL Kegiatan Bongkar Muat Pelabuhan Semester II Tahun 2019', 'Jakarta Utara', '2019', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(282, 'PT Paul & CO Asia', 'Pemantauan Lingkungan Kegiatan Percetakan Kertas Semester II Tahun 2019', 'Tangerang', '2019', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(283, 'PT Hutama Sarana Dhianarta', 'Implementasi RKL-RPL Kegiatan Industri Garment Pelabuhan Semester II Tahun 2019', 'Jakarta Utara', '2019', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(284, 'PT Kreasi Teknik Bahari', 'Implementasi RKL-RPL Kegiatan Dermaga Semester II Tahun 2019', 'Jakarta Utara', '2019', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(285, 'PT Glorious Interbuana', 'Implementasi RKL-RPL Kegiatan Depo Container Semester II Tahun 2019', 'Jakarta Utara', '2019', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(286, 'PT Adhi Karya Persero', 'Implementasi RKL-RPL Kegiatan Pembangunan Jalur LRT Semester I & II Tahun 2019, Semester I & II Tahun 2020 dan Semester I Tahun 2021', 'Jakarta Timur', '2019', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(287, 'PT Triniti Menara Serpong', 'Pemantauan Lingkungan Kegiatan Operasinal Apartemen Collins Semester II Tahun 2019 dan Semester I Tahun 2020', 'Tangerang', '2019', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(288, 'PT Tainan Enterprises Indonesia', 'Implementasi RKL-RPL Kegiatan Industri Garment Semester II Tahun 2019', 'Jakarta Utara', '2019', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(289, 'PT Layanan Lancar Lintas Logistindo', 'Implementasi RKL-RPL Kegiatan Logistik Semester I Tahun 2019', 'Jakarta Utara', '2019', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(290, 'PT Trafoindo Prima Perkasa', 'Pemantauan Lingkungan Pabrik Kabel Semester I Tahun 2019', 'Tangerang', '2019', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(291, 'PT Gema Nawagraha Sejati', 'Pemantauan Lingkungan Kegiatan Depo Kontainer Semester I Tahun 2019', 'Jakarta Utara', '2019', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(292, 'PT Tainan Enterprises Indonesia', 'Implementasi RKL-RPL Kegiatan Industri Garment Semester I Tahun 2019', 'Jakarta Utara', '2019', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(293, 'PT Paul & CO Asia', 'Pemantauan Lingkungan Kegiatan Percetakan Kertas Semester I Tahun 2019', 'Tangerang', '2019', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(294, 'PT Sumi Indo Kabel', 'Pemantauan Lingkungan Kegiatan Pabrik Kabel Semester I Tahun 2019', 'Tangerang', '2019', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(295, 'PT Kurnia Tirta Samudera Makmur', 'Implementasi RKL-RPL Kegiatan Bongkar Muat Pelabuhan Semester I Tahun 2019', 'Jakarta Utara', '2019', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(296, 'PT Rinnai Indonesia Plant Cikupa', 'Implementasi RKL-RPL Kegiatan Industri Perlengkapan Rumah Tangga Semester I Tahun 2019', 'Tangerang', '2019', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(297, 'PT Rinnai Indonesia Plant Balaraja', 'Implementasi RKL-RPL Kegiatan Industri Perlengkapan Rumah Tangga Semester I Tahun 2019', 'Tangerang', '2019', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(298, 'PT Multisukses Jayasakti', 'Implementasi RKL-RPL Kegiatan Industri Manufaktur Semester I & II Tahun 2019', 'Jakarta Timur', '2019', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(299, 'PT Prima Tedja Kharisma', 'Implementasi RKL-RPL Kegiatan Kawasan Pergudangan Semester I Tahun 2019', 'Tangerang', '2019', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(300, 'PT Hutama Sarana Dhianarta', 'Implementasi RKL-RPL Kegiatan Industri Garment Pelabuhan Semester I Tahun 2019', 'Jakarta Utara', '2019', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(301, 'PT Glorious Interbuana', 'Implementasi RKL-RPL Kegiatan Depo Container Semester I Tahun 2019', 'Jakarta Utara', '2019', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(302, 'PT Kreasi Teknik Bahari', 'Implementasi RKL-RPL Kegiatan Dermaga Semester I Tahun 2019', 'Jakarta Utara', '2019', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(303, 'PT Colorpak Indonesia', 'Implementasi RKL-RPL Kegiatan Industri Tinta Cetak Semester I Tahun 2019', 'Tangerang', '2019', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(304, 'PT Panca Amara Utama', 'Kegiatan Pemantauan Lingkungan Pabrik Amoniak Triwulan I, II, III & IV Tahun 2019', 'Sulawesi Selatan', '2019', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(305, 'AirNav Indonesia', 'Implementasi RKL-RPL Kegiatan Perum LPPNPI Semester I & II Tahun 2019', 'Tangerang', '2019', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(306, 'P3SRS Menara Kuningan', 'Pemantauan Lingkungan Kegiatan Apartemen Semester II Tahun 2018 dan Semester I Tahun 2019', 'Jakarta Pusat', '2019', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(307, 'Tokyu Wika Joint Operation', 'Implementasi RKL-RPL Kegiatan Pembangunan Jalur MRT Triwulan I Tahun 2019', 'DKI Jakarta', '2019', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(308, 'Obayashi Shimizu Jaya KJV', 'Implementasi RKL-RPL Kegiatan Pembangunan Jalur MRT Triwulan I Tahun 2019', 'DKI Jakarta', '2019', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(309, 'PT Kawasan Berikat Nusantara (Persero)', 'Implementasi RKL-RPL Kegiatan Pembangunan Pelabuhan Marunda Triwulan I, II, III & IV Tahun 2019', 'Jakarta Utara', '2019', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(310, 'PT Trafoindo Prima Perkasa', 'Pemantauan Lingkungan Pabrik Kabel Semester II Tahun 2018', 'Tangerang', '2018', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(311, 'PT Royal Bintang Persada', 'Implementasi RKL-RPL Kegiatan Hotel/Apartemen Semester II Tahun 2018 dan Semester I Tahun 2019', 'Tangerang', '2018', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(312, 'PT Layanan Lancar Lintas Logistindo', 'Implementasi RKL-RPL Kegiatan Logistik Semester II Tahun 2018', 'Jakarta Utara', '2018', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(313, 'PT Envilab Indonesia', 'Implementasi RKL-RPL Kegiatan Pertamina Hulu Energi WMO Triwulan III & IV Tahun 2018 dan Triwulan I & II Tahun 2019', 'Jawa Timur', '2018', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(314, 'PT Paul & CO Asia', 'Pemantauan Lingkungan Kegiatan Percetakan Kertas Semester II Tahun 2018', 'Tangerang', '2018', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(315, 'KSO DISY', 'Implementasi RKL-RPL Kegiatan Jalan Toll Semester II Tahun 2018', 'Jakarta Timur', '2018', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(316, 'PT Prima Tedja Kharisma', 'Implementasi RKL-RPL Kegiatan Kawasan Pergudangan Semester II Tahun 2018', 'Tangerang', '2018', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(317, 'PT Rinnai Indonesia Plant Cikupa', 'Implementasi RKL-RPL Kegiatan Industri Perlengkapan Rumah Tangga Semester II Tahun 2018', 'Tangerang', '2018', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(318, 'PT Rinnai Indonesia Plant Balaraja', 'Implementasi RKL-RPL Kegiatan Industri Perlengkapan Rumah Tangga Semester II Tahun 2018', 'Tangerang', '2018', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(319, 'PT Tainan Enterprises Indonesia', 'Implementasi RKL-RPL Kegiatan Industri Garment Semester II Tahun 2018', 'Jakarta Utara', '2018', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(320, 'PT Panca Amara Utama', 'Kegiatan Pemantauan Lingkungan Pabrik Amoniak Semester I & II Tahun 2018', 'Sulawesi Selatan', '2018', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(321, 'PT Glorious Interbuana', 'Implementasi RKL-RPL Kegiatan Depo Container Semester II Tahun 2018', 'Jakarta Utara', '2018', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(322, 'PT Hutama Sarana Dhianarta', 'Implementasi RKL-RPL Kegiatan Industri Garment Pelabuhan Semester II Tahun 2018', 'Jakarta Utara', '2018', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(323, 'PT Kreasi Teknik Bahari', 'Implementasi RKL-RPL Kegiatan Dermaga Semester II Tahun 2018', 'Jakarta Utara', '2018', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(324, 'PT Pan Pacific Jakarta', 'Implementasi RKL-RPL Kegiatan Industri Garment Semester II Tahun 2018', 'Jakarta Utara', '2018', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(325, 'PT Kurnia Tirta Samudera Makmur', 'Implementasi RKL-RPL Kegiatan Bongkar Muat Pelabuhan Semester II Tahun 2018', 'Jakarta Utara', '2018', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(326, 'AirNav Indonesia', 'Implementasi RKL-RPL Kegiatan Perum LPPNPI Semester II Tahun 2018', 'Tangerang', '2018', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(327, 'PT Trafoindo Prima Perkasa', 'Pemantauan Lingkungan Pabrik Kabel Semester I Tahun 2018', 'Tangerang', '2018', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(328, 'PT Transportasi Gas Negara', 'Implementasi RKL-RPL Kegiatan Pipanisasi Gas Bumi Semester I & II Tahun 2018', 'Sumartera Selatan', '2018', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(329, 'KSO DISY', 'Implementasi RKL-RPL Kegiatan Jalan Toll Semester I Tahun 2018', 'Jakarta Timur', '2018', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(330, 'PT Prima Tedja Kharisma', 'Implementasi RKL-RPL Kegiatan Kawasan Pergudangan Semester I Tahun 2018', 'Tangerang', '2018', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(331, 'PT Fajar Putera Dinasti', 'Implementasi RKL-RPL Kegiatan Pembangunan Metland Cibitung Semester I Tahun 2018', 'Bekasi', '2018', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(332, 'PT Multisukses Jayasakti', 'Implementasi RKL-RPL Kegiatan Industri Manufaktur Semester I & II Tahun 2018', 'Jakarta Timur', '2019', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(333, 'PT Bina Bangun Wibawa Mukti', 'Implementasi RKL-RPL Kegiatan Kilang LPG Tambun Semester I Tahun 2018', 'Bekasi', '2018', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(334, 'PT Rinnai Indonesia Plant Cikupa', 'Implementasi RKL-RPL Kegiatan Industri Perlengkapan Rumah Tangga Semester I Tahun 2018', 'Tangerang', '2018', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(335, 'PT Rinnai Indonesia Plant Balaraja', 'Implementasi RKL-RPL Kegiatan Industri Perlengkapan Rumah Tangga Semester I Tahun 2018', 'Tangerang', '2018', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(336, 'PT Kreasi Teknik Bahari', 'Implementasi RKL-RPL Kegiatan Dermaga Semester I Tahun 2018', 'Jakarta Utara', '2018', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(337, 'PT Kurnia Tirta Samudera Makmur', 'Implementasi RKL-RPL Kegiatan Bongkar Muat Pelabuhan Semester I Tahun 2018', 'Jakarta Utara', '2018', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(338, 'PT Hutama Sarana Dhianarta', 'Implementasi RKL-RPL Kegiatan Industri Garment Pelabuhan Semester I Tahun 2018', 'Jakarta Utara', '2018', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(339, 'PT Semen Lebak', 'Implementasi RKL-RPL Kegiatan Pembangunan Pabrik Semen dan Untilitas, Jalur Akses Serta Pelabuhan Khusus Semester I Tahun 2018', 'Lebak', '2018', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(340, 'PT Tainan Enterprises Indonesia', 'Implementasi RKL-RPL Kegiatan Industri Garment Semester I Tahun 2018', 'Jakarta Utara', '2018', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(341, 'PT Pan Pacific Jakarta', 'Implementasi RKL-RPL Kegiatan Industri Garment Semester I Tahun 2018', 'Jakarta Utara', '2018', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(342, 'PT Glorious Interbuana', 'Implementasi RKL-RPL Kegiatan Depo Container Semester I Tahun 2018', 'Jakarta Utara', '2018', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(343, 'Tokyu Wika Joint Operation', 'Implementasi RKL-RPL Kegiatan Pembangunan Jalur MRT Triwulan I, II, III & IV Tahun 2018', 'DKI Jakarta', '2018', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(344, 'Obayashi Shimizu Jaya KJV', 'Implementasi RKL-RPL Kegiatan Pembangunan Jalur MRT Triwulan I, II, III & IV Tahun 2018', 'DKI Jakarta', '2018', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(345, 'TAC Pertamina EP-Elipse Energi Jatirarangon Wahana Ltd', 'Implementasi RKL-RPL Kegiatan Operasional Pengembangan Lapangan Migas di Lapangan Jatirarangon Semester I & II Tahun 2018', 'Bekasi', '2018', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(346, 'PT Trafoindo Prima Perkasa', 'Pemantauan Lingkungan Pabrik Kabel Semester II Tahun 2017', 'Tangerang', '2017', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(347, 'PT Rinnai Indonesia Plant Balaraja', 'Implementasi RKL-RPL Kegiatan Industri Perlengkapan Rumah Tangga Semester II Tahun 2017', 'Tangerang', '2017', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(348, 'PT Prima Tedja Kharisma', 'Implementasi RKL-RPL Kegiatan Kawasan Pergudangan Semester II Tahun 2017', 'Tangerang', '2017', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(349, 'PT Kreasi Teknik Bahari', 'Implementasi RKL-RPL Kegiatan Dermaga Semester II Tahun 2017', 'Jakarta Utara', '2017', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(350, 'PT Rinnai Indonesia Plant Cikupa', 'Implementasi RKL-RPL Kegiatan Industri Perlengkapan Rumah Tangga Semester II Tahun 2017', 'Tangerang', '2017', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(351, 'PT Pan Pacific Jakarta', 'Implementasi RKL-RPL Kegiatan Industri Garment Semester II Tahun 2017', 'Jakarta Utara', '2017', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(352, 'PT Hutama Sarana Dhianarta', 'Implementasi RKL-RPL Kegiatan Industri Garment Pelabuhan Semester II Tahun 2017', 'Jakarta Utara', '2017', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(353, 'PT Panca Amara Utama', 'Kegiatan Pemantauan Lingkungan Pabrik Amoniak Semester I & II Tahun 2017', 'Sulawesi Selatan', '2017', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(354, 'PT Royal Bintang Persada', 'Implementasi RKL-RPL Kegiatan Hotel/Apartemen Semester II Tahun 2017 dan Semester I Tahun 2018', 'Tangerang', '2019', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(355, 'PT Kurnia Tirta Samudera Makmur', 'Implementasi RKL-RPL Kegiatan Bongkar Muat Pelabuhan Semester II Tahun 2017', 'Jakarta Utara', '2017', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(356, 'PT Kurnia Tirta Samudera Makmur', 'Implementasi RKL-RPL Kegiatan Bongkar Muat Pelabuhan Semester I Tahun 2017', 'Jakarta Utara', '2017', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(357, 'PT Tainan Enterprises Indonesia', 'Implementasi RKL-RPL Kegiatan Industri Garment Semester II Tahun 2017', 'Jakarta Utara', '2017', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(358, 'PT Bina Bangun Wibawa Mukti', 'Implementasi RKL-RPL Kegiatan Kilang LPG Tambun Semester I & II Tahun 2017', 'Bekasi', '2017', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(359, 'PT Wahyu Abadi', 'Implementasi RKL-RPL Kegiatan Industri Garment Pelabuhan Semester II Tahun 2017', 'Jakarta Utara', '2017', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(360, 'PT Glorious Interbuana', 'Implementasi RKL-RPL Kegiatan Depo Container Semester II Tahun 2017', 'Jakarta Utara', '2017', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(361, 'PT Colorpak Indonesia', 'Implementasi RKL-RPL Kegiatan Industri Tinta Cetak Semester II Tahun 2017', 'Tangerang', '2017', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(362, 'PT Adhi Karya Persero', 'Implementasi RKL-RPL Kegiatan Pembangunan Jalur LRT Semester I & II Tahun 2017 dan Semester I & II Tahun 2018', 'Jakarta Timur', '2017', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(363, 'PT Rinnai Indonesia Plant Balaraja', 'Implementasi RKL-RPL Kegiatan Industri Perlengkapan Rumah Tangga Semester I Tahun 2017', 'Tangerang', '2017', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(364, 'PT Rinnai Indonesia Plant Cikupa', 'Implementasi RKL-RPL Kegiatan Industri Perlengkapan Rumah Tangga Semester I Tahun 2017', 'Tangerang', '2017', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(365, 'PT Pan Pacific Jakarta', 'Implementasi RKL-RPL Kegiatan Industri Garment Semester I Tahun 2017', 'Jakarta Utara', '2017', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(366, 'PT Karya Tehnik Pasirindo', 'Implementasi RKL-RPL Kegiatan Stock Pile Pasir Semester I Tahun 2017', 'Jakarta Utara', '2017', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(367, 'PT Multisukses Jayasakti', 'Implementasi RKL-RPL Kegiatan Industri Manufaktur Semester I & II Tahun 2017', 'Jakarta Timur', '2017', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(368, 'PT Hutama Sarana Dhianarta', 'Implementasi RKL-RPL Kegiatan Industri Garment Pelabuhan Semester I Tahun 2017', 'Jakarta Utara', '2017', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(369, 'PT Wahyu Abadi', 'Implementasi RKL-RPL Kegiatan Industri Garment Pelabuhan Semester I Tahun 2017', 'Jakarta Utara', '2017', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(370, 'Obayashi Shimizu Jaya KJV', 'Implementasi RKL-RPL Kegiatan Pembangunan Jalur MRT Triwulan I, II, III & IV Tahun 2017', 'DKI Jakarta', '2017', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(371, 'Tokyu Wika Joint Operation', 'Implementasi RKL-RPL Kegiatan Pembangunan Jalur MRT Triwulan I, II, III & IV Tahun 2017', 'DKI Jakarta', '2017', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(372, 'TAC Pertamina EP-Elipse Energi Jatirarangon Wahana Ltd', 'Implementasi RKL-RPL Kegiatan Operasional Pengembangan Lapangan Migas di Lapangan Jatirarangon Semester I & II Tahun 2017', 'Bekasi', '2017', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(373, 'PT Young IL Indonesia', 'Implementasi RKL-RPL Kegiatan Pabrik Semester I Tahun 2017', 'Jakarta Utara', '2017', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(374, 'PT Glorious Interbuana', 'Implementasi RKL-RPL Kegiatan Depo Container Semester I Tahun 2017', 'Jakarta Utara', '2017', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(375, 'PT Colorpak Indonesia', 'Implementasi RKL-RPL Kegiatan Industri Tinta Cetak Semester I Tahun 2017', 'Tangerang', '2017', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(376, 'PT Envilab Indonesia', 'Implementasi RKL-RPL Kegiatan Pertamina Hulu Energi WMO Triwulan III & IV Tahun 2016, Triwulan I, II, III & IV Tahun 2017 dan Triwlan I & II Tahun 2018', 'Jawa Timur', '2016', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(377, 'PT Semen Lebak', 'Implementasi RKL-RPL Kegiatan Pembangunan Pabrik Semen dan Untilitas, Jalur Akses Serta Pelabuhan Khusus Semester II Tahun 2016', 'Lebak', '2016', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(378, 'PT Wahyu Abadi', 'Implementasi RKL-RPL Kegiatan Industri Garment Pelabuhan Semester II Tahun 2016', 'Jakarta Utara', '2016', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(379, 'PT Wooin Indonesia', 'Implementasi RKL-RPL Kegiatan Industri Garment Pelabuhan Semester II Tahun 2016', 'Jakarta Utara', '2016', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(380, 'PT Bina Bangun Wibawa Mukti', 'Implementasi RKL-RPL Kegiatan Kilang LPG Tambun Semester I & II Tahun 2016', 'Bekasi', '2016', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(381, 'PT Pan Pacific Jakarta', 'Implementasi RKL-RPL Kegiatan Industri Garment Semester II Tahun 2016', 'Jakarta Utara', '2016', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(382, 'PT Kereta Api Indonesia (Persero)', 'Implementasi RKL-RPL Kegiatan Pembangunan Jalur KA Stasiun Batu Ceper ? Bandara Soekarno Hatta Semester I & II Tahun 2016', 'Tangerang', '2016', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(383, 'PT Glorious Interbuana', 'Implementasi RKL-RPL Kegiatan Depo Container Semester II Tahun 2016', 'Jakarta Utara', '2016', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(384, 'PT Hutama Sarana Dhianarta', 'Implementasi RKL-RPL Kegiatan Industri Garment Pelabuhan Semester II Tahun 2016', 'Jakarta Utara', '2016', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(385, 'PT Rinnai Indonesia Plant Balaraja', 'Implementasi RKL-RPL Kegiatan Industri Perlengkapan Rumah Tangga Semester II Tahun 2016', 'Tangerang', '2016', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(386, 'PT Rinnai Indonesia Plant Cikupa', 'Implementasi RKL-RPL Kegiatan Industri Perlengkapan Rumah Tangga Semester II Tahun 2016', 'Tangerang', '2016', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(387, 'PT Tainan Enterprises Indonesia', 'Implementasi RKL-RPL Kegiatan Industri Garment Semester II Tahun 2016', 'Jakarta Utara', '2016', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(388, 'PT Kurnia Tirta Samudera Makmur', 'Implementasi RKL-RPL Kegiatan Bongkar Muat Pelabuhan Semester I Tahun 2016', 'Jakarta Utara', '2016', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(389, 'PT Pan Pacific Jakarta', 'Implementasi RKL-RPL Kegiatan Industri Garment Semester I Tahun 2016', 'Jakarta Utara', '2016', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(390, 'PT Semen Lebak', 'Implementasi RKL-RPL Kegiatan Pembangunan Pabrik Semen dan Untilitas, Jalur Akses Serta Pelabuhan Khusus Semester I Tahun 2016', 'Lebak', '2016', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(391, 'PT Panca Amara Utama', 'Kegiatan Pemantauan Lingkungan Pabrik Amoniak Semester I & II Tahun 2016', 'Sulawesi Selatan', '2016', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(392, 'Obayashi Shimizu Jaya KJV', 'Implementasi RKL-RPL Kegiatan Pembangunan Jalur MRT Triwulan I, II, III & IV Tahun 2016', 'DKI Jakarta', '2016', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(393, 'Tokyu Wika Joint Operation', 'Implementasi RKL-RPL Kegiatan Pembangunan Jalur MRT Triwulan I, II, III & IV Tahun 2016', 'DKI Jakarta', '2016', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(394, 'PT Colorpak Indonesia', 'Implementasi RKL-RPL Kegiatan Industri Tinta Cetak Semester I Tahun 2016', 'Tangerang', '2016', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(395, 'PT Rinnai Indonesia Plant Balaraja', 'Implementasi RKL-RPL Kegiatan Industri Perlengkapan Rumah Tangga Semester I Tahun 2016', 'Tangerang', '2016', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(396, 'PT Rinnai Indonesia Plant Cikupa', 'Implementasi RKL-RPL Kegiatan Industri Perlengkapan Rumah Tangga Semester I Tahun 2016', 'Tangerang', '2016', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(397, 'PT Tainan Enterprises Indonesia', 'Implementasi RKL-RPL Kegiatan Industri Garment Semester I Tahun 2016', 'Jakarta Utara', '2016', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(398, 'TAC Pertamina EP-Elipse Energi Jatirarangon Wahana Ltd', 'Implementasi RKL-RPL Kegiatan Operasional Pengembangan Lapangan Migas di Lapangan Jatirarangon Semester I & II Tahun 2016', 'Bekasi', '2016', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(399, 'Shimizu Obayashi Wijaya KJK', 'Implementasi RKL-RPL Kegiatan Pembangunan Jalur MRT Triwulan I, II, III & IV Tahun 2015', 'DKI Jakarta', '2015', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(400, 'SMCC-HK JO', 'Implementasi RKL-RPL Kegiatan Pembangunan Jalur MRT Triwulan I, II, III & IV Tahun 2015', 'DKI Jakarta', '2015', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(401, 'PT Layanan Lancar Lintas Logistindo', 'Implementasi RKL-RPL Kegiatan Logistik Semester I Tahun 2015', 'Jakarta Utara', '2015', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(402, 'PT Perusahaan Gas Negara (PGN)', 'Implementasi RKL-RPL Kegiatan Pembangunan Stasiun Kompressor Gas Pagar Dewa Semester I & II Tahun 2015 dan Semester I Tahun 2016', 'Sumatera Selatan', '2015', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(403, 'TAC Pertamina EP-Elipse Energi Jatirarangon Wahana Ltd', 'Implementasi RKL-RPL Kegiatan Operasional Pengembangan Lapangan Migas di Lapangan Jatirarangon Semester I & II Tahun 2015', 'Bekasi', '2015', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(404, 'Obayashi Shimizu Jaya KJV', 'Implementasi RKL-RPL Kegiatan Pembangunan Jalur MRT Triwulan I, II, III & IV Tahun 2015', 'DKI Jakarta', '2015', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0),
(405, 'Tokyu Wika Joint Operation', 'Implementasi RKL-RPL Kegiatan Pembangunan Jalur MRT Triwulan I, II, III & IV Tahun 2015', 'DKI Jakarta', '2015', 'PEMANTAUAN LINGKUNGAN', 'Energi', '2020-10-07 00:00:00', 1, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `amc_m_user`
--

CREATE TABLE `amc_m_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `position` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amc_m_user`
--

INSERT INTO `amc_m_user` (`id`, `name`, `email`, `contact`, `position`, `password`) VALUES
(1, 'admin AMC', 'amaracisadane@gmail.com', '081161615141516', 'HRD NGANU ITU', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(2, 'Heriansyah ZA', 'heriansyah@amaracisadane.co.id', '081191818171', 'CEO', ''),
(3, 'Budi Anduk', 'budi@anduk.co', '001928281716', 'OB', ''),
(4, 'Ismaya', 'ismaya@gmail.com', '01918172718', 'ACCOUNTING', ''),
(5, 'Abi', 'abi@gmail.com', '09181929', 'IT', ''),
(19, 'Fadilla', 'fadila@fadilla', '0191918', 'IT', '');

-- --------------------------------------------------------

--
-- Table structure for table `amc_t_work`
--

CREATE TABLE `amc_t_work` (
  `id` int(11) NOT NULL,
  `item` text NOT NULL,
  `id_job` int(11) NOT NULL,
  `date` date NOT NULL,
  `start` time NOT NULL,
  `finish` time NOT NULL,
  `note` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `createDate` datetime NOT NULL,
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
-- Indexes for table `amc_m_job`
--
ALTER TABLE `amc_m_job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amc_m_project`
--
ALTER TABLE `amc_m_project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amc_m_user`
--
ALTER TABLE `amc_m_user`
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
-- AUTO_INCREMENT for table `amc_m_job`
--
ALTER TABLE `amc_m_job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `amc_m_project`
--
ALTER TABLE `amc_m_project`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=406;

--
-- AUTO_INCREMENT for table `amc_m_user`
--
ALTER TABLE `amc_m_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `amc_t_work`
--
ALTER TABLE `amc_t_work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
