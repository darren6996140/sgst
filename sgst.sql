-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2020 at 05:20 AM
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
-- Database: `sgst`
--

-- --------------------------------------------------------

--
-- Table structure for table `maklumat_filem`
--

CREATE TABLE `maklumat_filem` (
  `id_filem` int(5) NOT NULL,
  `kategori_filem` varchar(255) NOT NULL,
  `tajuk_filem` varchar(255) NOT NULL,
  `harga` double NOT NULL,
  `tarikh_tayangan` date NOT NULL,
  `masa_tayangan` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maklumat_filem`
--

INSERT INTO `maklumat_filem` (`id_filem`, `kategori_filem`, `tajuk_filem`, `harga`, `tarikh_tayangan`, `masa_tayangan`) VALUES
(1, 'Sci-Fi', 'Star Wars: Episode IX', 10, '2020-02-18', '10:00:00'),
(2, 'Aksi', 'No Time To Die', 15, '2020-01-19', '15:00:00'),
(3, 'Biografi', 'Rocketman', 15, '2020-02-21', '20:00:00'),
(4, 'Seram', 'The Conjuring', 13, '2020-02-24', '03:15:00'),
(5, 'Romantis', 'Beauty & The Beast', 7, '2020-04-05', '14:30:00'),
(6, 'Perang', 'Hacksaw Ridge', 13, '2020-03-20', '19:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `emel` varchar(255) NOT NULL,
  `kata_laluan` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_HP` varchar(15) NOT NULL,
  `peranan` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`emel`, `kata_laluan`, `nama`, `no_HP`, `peranan`) VALUES
('admin', 'dcddb75469b4b4875094e14561e573d8', 'Admin', '0000000000', 1),
('darrenliau2003@gmail.com', '026489153214f0539fdd9a5946383028', 'Darren', '0123758580', 2),
('liaukaize2003@gmail.com', '670b14728ad9902aecba32e22fa4f6bd', 'Liau Kai', '0125158580', 2),
('liaukaize@gmail.com', '4e517bf07117dfc9a24b07e19ce99804', 'Liau', '0125158580', 2),
('ryanwong8809@gmail.com', 'f37c4630c796617ace93e19c350c321e', 'Ryan', '0162054431', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` int(5) NOT NULL,
  `emel` varchar(255) NOT NULL,
  `id_filem` int(5) NOT NULL,
  `bilangan` int(3) NOT NULL,
  `tarikh_tayangan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id_tiket`, `emel`, `id_filem`, `bilangan`, `tarikh_tayangan`) VALUES
(1, 'liaukaize@gmail.com', 1, 2, '2020-09-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `maklumat_filem`
--
ALTER TABLE `maklumat_filem`
  ADD PRIMARY KEY (`id_filem`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`emel`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`),
  ADD KEY `id_filem` (`id_filem`),
  ADD KEY `emel` (`emel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id_tiket` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tiket`
--
ALTER TABLE `tiket`
  ADD CONSTRAINT `tiket_ibfk_1` FOREIGN KEY (`id_filem`) REFERENCES `maklumat_filem` (`id_filem`),
  ADD CONSTRAINT `tiket_ibfk_2` FOREIGN KEY (`emel`) REFERENCES `pelanggan` (`emel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
