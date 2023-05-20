-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2023 at 10:30 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dataekstra`
--

CREATE TABLE `tb_dataekstra` (
  `ID Ekstra` char(10) NOT NULL,
  `Pembimbing` varchar(15) NOT NULL,
  `Nama Ekstra` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_dataguru`
--

CREATE TABLE `tb_dataguru` (
  `ID Guru` char(10) NOT NULL,
  `Nama Guru` varchar(20) NOT NULL,
  `Jenis Kelamin` varchar(15) NOT NULL,
  `Umur` int(3) NOT NULL,
  `Alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_datajadwal`
--

CREATE TABLE `tb_datajadwal` (
  `ID Jadwal` char(10) NOT NULL,
  `ID Mapel` char(10) NOT NULL,
  `ID Kelas` char(10) NOT NULL,
  `ID Ekstra` char(10) NOT NULL,
  `Hari dan Jam` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_datajenisnilai`
--

CREATE TABLE `tb_datajenisnilai` (
  `ID Hasil` char(10) NOT NULL,
  `ID Siswa` char(10) NOT NULL,
  `ID Mapel` char(10) NOT NULL,
  `ID Nilai` char(10) NOT NULL,
  `Predikat` char(15) NOT NULL,
  `Keterangan` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_datakelas`
--

CREATE TABLE `tb_datakelas` (
  `ID Kelas` varchar(10) NOT NULL,
  `ID Siswa` varchar(10) NOT NULL,
  `Nama Kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_datamapel`
--

CREATE TABLE `tb_datamapel` (
  `ID Mapel` char(10) NOT NULL,
  `ID Guru` char(10) NOT NULL,
  `Nama Mapel` varchar(10) NOT NULL,
  `Semester` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_datanilai`
--

CREATE TABLE `tb_datanilai` (
  `ID Nilai` varchar(10) NOT NULL,
  `Nama Mapel` varchar(15) NOT NULL,
  `Nama Siswa` varchar(15) NOT NULL,
  `Nilai` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_datapegawai`
--

CREATE TABLE `tb_datapegawai` (
  `ID Pegawai` varchar(10) NOT NULL,
  `Nama Pegawai` varchar(15) NOT NULL,
  `Jabatan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_datapengguna`
--

CREATE TABLE `tb_datapengguna` (
  `ID Pengguna` varchar(10) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `Nama` varchar(15) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_datasiswa`
--

CREATE TABLE `tb_datasiswa` (
  `ID Siswa` char(10) NOT NULL,
  `Nama Siswa` varchar(20) NOT NULL,
  `Jenis Kelamin` varchar(15) NOT NULL,
  `Umur` int(3) NOT NULL,
  `Alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_datatahunajar`
--

CREATE TABLE `tb_datatahunajar` (
  `ID Tahun Ajaran` varchar(10) NOT NULL,
  `ID Siswa` varchar(10) NOT NULL,
  `Nama Murid` varchar(15) NOT NULL,
  `Angkatan` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_datawalimurid`
--

CREATE TABLE `tb_datawalimurid` (
  `ID Wali` varchar(10) NOT NULL,
  `Nama Murid` varchar(15) NOT NULL,
  `Nama Wali` varchar(15) NOT NULL,
  `Pekerjaan` varchar(15) NOT NULL,
  `Alamat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dataekstra`
--
ALTER TABLE `tb_dataekstra`
  ADD PRIMARY KEY (`ID Ekstra`);

--
-- Indexes for table `tb_dataguru`
--
ALTER TABLE `tb_dataguru`
  ADD PRIMARY KEY (`ID Guru`);

--
-- Indexes for table `tb_datajadwal`
--
ALTER TABLE `tb_datajadwal`
  ADD PRIMARY KEY (`ID Jadwal`),
  ADD KEY `ID Mapel` (`ID Mapel`,`ID Kelas`,`ID Ekstra`),
  ADD KEY `ID Ekstra` (`ID Ekstra`),
  ADD KEY `ID Kelas` (`ID Kelas`);

--
-- Indexes for table `tb_datajenisnilai`
--
ALTER TABLE `tb_datajenisnilai`
  ADD PRIMARY KEY (`ID Hasil`),
  ADD KEY `ID Siswa` (`ID Siswa`,`ID Mapel`,`ID Nilai`),
  ADD KEY `ID Mapel` (`ID Mapel`),
  ADD KEY `ID Nilai` (`ID Nilai`);

--
-- Indexes for table `tb_datakelas`
--
ALTER TABLE `tb_datakelas`
  ADD PRIMARY KEY (`ID Kelas`),
  ADD KEY `ID Siswa` (`ID Siswa`);

--
-- Indexes for table `tb_datamapel`
--
ALTER TABLE `tb_datamapel`
  ADD PRIMARY KEY (`ID Mapel`),
  ADD KEY `ID Guru` (`ID Guru`);

--
-- Indexes for table `tb_datanilai`
--
ALTER TABLE `tb_datanilai`
  ADD PRIMARY KEY (`ID Nilai`);

--
-- Indexes for table `tb_datapegawai`
--
ALTER TABLE `tb_datapegawai`
  ADD PRIMARY KEY (`ID Pegawai`);

--
-- Indexes for table `tb_datapengguna`
--
ALTER TABLE `tb_datapengguna`
  ADD PRIMARY KEY (`ID Pengguna`);

--
-- Indexes for table `tb_datasiswa`
--
ALTER TABLE `tb_datasiswa`
  ADD PRIMARY KEY (`ID Siswa`);

--
-- Indexes for table `tb_datatahunajar`
--
ALTER TABLE `tb_datatahunajar`
  ADD PRIMARY KEY (`ID Tahun Ajaran`),
  ADD KEY `ID Siswa` (`ID Siswa`);

--
-- Indexes for table `tb_datawalimurid`
--
ALTER TABLE `tb_datawalimurid`
  ADD PRIMARY KEY (`ID Wali`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_datajadwal`
--
ALTER TABLE `tb_datajadwal`
  ADD CONSTRAINT `tb_datajadwal_ibfk_1` FOREIGN KEY (`ID Mapel`) REFERENCES `tb_datamapel` (`ID Mapel`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_datajadwal_ibfk_2` FOREIGN KEY (`ID Ekstra`) REFERENCES `tb_dataekstra` (`ID Ekstra`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_datajadwal_ibfk_3` FOREIGN KEY (`ID Kelas`) REFERENCES `tb_datakelas` (`ID Kelas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_datajenisnilai`
--
ALTER TABLE `tb_datajenisnilai`
  ADD CONSTRAINT `tb_datajenisnilai_ibfk_1` FOREIGN KEY (`ID Siswa`) REFERENCES `tb_datasiswa` (`ID Siswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_datajenisnilai_ibfk_2` FOREIGN KEY (`ID Mapel`) REFERENCES `tb_datamapel` (`ID Mapel`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_datajenisnilai_ibfk_3` FOREIGN KEY (`ID Nilai`) REFERENCES `tb_datanilai` (`ID Nilai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_datakelas`
--
ALTER TABLE `tb_datakelas`
  ADD CONSTRAINT `tb_datakelas_ibfk_1` FOREIGN KEY (`ID Siswa`) REFERENCES `tb_datasiswa` (`ID Siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_datamapel`
--
ALTER TABLE `tb_datamapel`
  ADD CONSTRAINT `tb_datamapel_ibfk_1` FOREIGN KEY (`ID Guru`) REFERENCES `tb_dataguru` (`ID Guru`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_datatahunajar`
--
ALTER TABLE `tb_datatahunajar`
  ADD CONSTRAINT `tb_datatahunajar_ibfk_1` FOREIGN KEY (`ID Siswa`) REFERENCES `tb_datasiswa` (`ID Siswa`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
