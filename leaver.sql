-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2019 at 07:41 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leaver`
--

-- --------------------------------------------------------

--
-- Table structure for table `bags`
--

CREATE TABLE `bags` (
  `id_doc` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_course` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`, `phone`, `course`, `created_at`, `updated_at`) VALUES
(1, 'Capa Pranowo M.Farm', 'raisa.kusumo', '12345', 'taufik08@yahoo.com', '(+62) 358 1668 6749', '', NULL, NULL),
(2, 'Farhunnisa Usyi Handayani', 'vicky97', '12345', 'putama@gmail.co.id', '(+62) 603 3219 1379', '', NULL, NULL),
(3, 'Devi Permata', 'utami.vanya', '12345', 'nmandasari@susanti.in', '(+62) 501 5889 706', '', NULL, NULL),
(4, 'Tina Novitasari M.Kom.', 'laila27', '12345', 'respati15@waluyo.info', '0886 1586 8175', '', NULL, NULL),
(5, 'Gandi Maulana M.TI.', 'qnarpati', '12345', 'puspa33@yahoo.com', '0450 5249 500', '', NULL, NULL),
(6, 'Jasmin Rahayu', 'sitorus.fathonah', '12345', 'rina30@gmail.co.id', '0747 0283 423', '', NULL, NULL),
(7, 'Ulva Permata M.Farm', 'emong.marbun', '12345', 'wisnu88@januar.my.id', '0249 1797 625', '', NULL, NULL),
(8, 'Galur Mandala S.IP', 'cengkal.gunarto', '12345', 'jamalia32@gmail.co.id', '0469 5437 8482', '', NULL, NULL),
(9, 'Winda Sadina Zulaika', 'nurdiyanti.dalima', '12345', 'maryati.alambana@yahoo.co.id', '0368 7652 267', '', NULL, NULL),
(10, 'Baktiono Firgantoro', 'agnes.widiastuti', '12345', 'rosman92@utami.co.id', '(+62) 842 2989 300', '', NULL, NULL),
(11, 'Zulaikha Suartini', 'silvia.suwarno', '12345', 'duyainah@laksmiwati.biz.id', '(+62) 707 2560 8150', '', NULL, NULL),
(12, 'Ana Uyainah S.Ked', 'titi59', '12345', 'waskita.tari@zulaika.co', '(+62) 372 1523 371', '', NULL, NULL),
(13, 'Dadap Tampubolon S.T.', 'cindy86', '12345', 'ajimin91@prasetya.name', '(+62) 600 1130 824', '', NULL, NULL),
(14, 'Asirwanda Pratama S.Pd', 'vgunawan', '12345', 'iutami@yahoo.co.id', '(+62) 865 834 573', '', NULL, NULL),
(15, 'Kusuma Kurniawan S.Farm', 'ssetiawan', '12345', 'enashiruddin@handayani.sch.id', '0925 7221 065', '', NULL, NULL),
(16, 'Tirta Hutapea', 'maryati.shakila', '12345', 'vinsen64@kurniawan.biz.id', '0453 9101 7042', '', NULL, NULL),
(17, 'Gaiman Tampubolon', 'wibisono.heryanto', '12345', 'mmanullang@wijayanti.in', '0848 7638 484', '', NULL, NULL),
(18, 'Maimunah Puspasari', 'carub.suryatmi', '12345', 'bakidin36@irawan.net', '0666 4930 897', '', NULL, NULL),
(19, 'Kasusra Carub Pratama S.IP', 'suwarno.kemal', '12345', 'tari.simanjuntak@yahoo.com', '(+62) 264 8004 670', '', NULL, NULL),
(20, 'Safina Usamah', 'cinthia85', '12345', 'prayoga.adiarja@hariyah.co', '(+62) 742 7575 528', '', NULL, NULL),
(21, 'Gina Winda Hassanah M.M.', 'sakti.farida', '12345', 'hardiansyah.radit@yahoo.co.id', '(+62) 785 8226 2687', '', NULL, NULL),
(22, 'Lanjar Wawan Kuswoyo', 'elon.tamba', '12345', 'rwacana@gmail.com', '0606 8114 1984', '', NULL, NULL),
(23, 'Hartana Dongoran', 'harsaya.lazuardi', '12345', 'halim37@yahoo.com', '(+62) 750 7559 290', '', NULL, NULL),
(24, 'Mustofa Pangestu', 'cawisono06', '12345', 'oman48@hidayat.net', '0354 6429 5467', '', NULL, NULL),
(25, 'Irwan Sitorus S.Gz', 'winarsih.darsirah', '12345', 'almira62@suryatmi.asia', '0375 6745 1198', '', NULL, NULL),
(26, 'Mutia Mandasari S.IP', 'ghaliyati.yolanda', '12345', 'genta03@gmail.co.id', '0644 3985 378', '', NULL, NULL),
(27, 'Hardi Tamba', 'spurwanti', '12345', 'blaksita@setiawan.name', '0939 3685 6512', '', NULL, NULL),
(28, 'Clara Lailasari', 'cinthia.pranowo', '12345', 'yuniar.okta@yahoo.com', '(+62) 652 0353 8688', '', NULL, NULL),
(29, 'Hana Rahmawati', 'pangestu.fitria', '12345', 'ranggriawan@pudjiastuti.desa.id', '0783 9455 050', '', NULL, NULL),
(30, 'Citra Rahmawati', 'vwinarsih', '12345', 'ihariyah@gmail.co.id', '(+62) 725 9428 336', '', NULL, NULL),
(31, 'Prayogo Kenes Permadi S.T.', 'ifa.haryanto', '12345', 'jaiman84@mansur.biz.id', '0832 1197 6753', '', NULL, NULL),
(32, 'Lamar Pratama', 'vmelani', '12345', 'aisyah.uyainah@gmail.co.id', '0521 8715 3461', '', NULL, NULL),
(33, 'Wahyu Prasetyo', 'intan88', '12345', 'baktiono66@gmail.com', '(+62) 944 3629 407', '', NULL, NULL),
(34, 'Martana Marwata Nababan', 'karimah15', '12345', 'kenzie.siregar@jailani.co', '0550 7812 598', '', NULL, NULL),
(35, 'Michelle Lailasari S.Pd', 'hasta64', '12345', 'farida.winda@tarihoran.ac.id', '0856 9972 5940', '', NULL, NULL),
(36, 'Yessi Yulianti', 'mwibisono', '12345', 'kamaria49@gmail.com', '021 4568 800', '', NULL, NULL),
(37, 'Yani Maida Rahmawati S.Gz', 'msiregar', '12345', 'jkusmawati@lestari.com', '0393 4219 494', '', NULL, NULL),
(38, 'Lutfan Gunarto', 'ghaliyati39', '12345', 'aditya31@susanti.sch.id', '0821 3882 896', '', NULL, NULL),
(39, 'Samiah Puspasari', 'lestari.tantri', '12345', 'oman39@gmail.co.id', '(+62) 556 0841 742', '', NULL, NULL),
(40, 'Samsul Halim', 'bella.permata', '12345', 'hendra56@gmail.co.id', '(+62) 25 0391 3879', '', NULL, NULL),
(41, 'Harto Rajasa', 'wprayoga', '12345', 'nilam.lazuardi@habibi.co.id', '0649 6644 3726', '', NULL, NULL),
(42, 'Salimah Ghaliyati Usada', 'jasmin79', '12345', 'lanang.wacana@widodo.in', '0565 4105 552', '', NULL, NULL),
(43, 'Intan Suryatmi', 'dalima.lazuardi', '12345', 'oktaviani.hani@yahoo.co.id', '0854 4083 5229', '', NULL, NULL),
(44, 'Lanjar Nainggolan', 'wakiman57', '12345', 'icha46@yahoo.co.id', '(+62) 573 9162 2845', '', NULL, NULL),
(45, 'Siti Safitri', 'mharyanti', '12345', 'latika.waskita@astuti.mil.id', '(+62) 678 8936 291', '', NULL, NULL),
(46, 'Salwa Laras Wijayanti S.Sos', 'hasim66', '12345', 'xpermata@yahoo.com', '0729 1528 038', '', NULL, NULL),
(47, 'Luhung Sitorus', 'tasnim32', '12345', 'kamila.lestari@yahoo.co.id', '0685 3642 004', '', NULL, NULL),
(48, 'Oliva Farida S.Farm', 'mulya.prabowo', '12345', 'firmansyah.yunita@gmail.com', '0894 534 310', '', NULL, NULL),
(49, 'Ganjaran Iswahyudi S.T.', 'diana14', '12345', 'putu21@gmail.com', '(+62) 574 1575 155', '', NULL, NULL),
(50, 'Cahyo Hardiansyah', 'winarno.enteng', '12345', 'fsudiati@gmail.com', '(+62) 416 4509 975', '', NULL, NULL),
(51, 'Hasna Elisa Wijayanti', 'novitasari.galih', '12345', 'twahyudin@yahoo.co.id', '0976 3736 407', '', NULL, NULL),
(52, 'Jarwi Margana Pradipta M.Kom.', 'ifa93', '12345', 'nugroho.ade@yulianti.co', '(+62) 277 8874 229', '', NULL, NULL),
(53, 'Utama Putra M.Kom.', 'hamima.andriani', '12345', 'novi87@yahoo.co.id', '(+62) 949 6186 480', '', NULL, NULL),
(54, 'Kamaria Rachel Wijayanti', 'isaputra', '12345', 'lili38@yahoo.co.id', '0262 3634 852', '', NULL, NULL),
(55, 'Jane Puspasari S.T.', 'nadia.oktaviani', '12345', 'bakda98@iswahyudi.asia', '(+62) 28 4563 6326', '', NULL, NULL),
(56, 'Galuh Zulkarnain', 'wlaksita', '12345', 'narpati.jarwadi@gmail.com', '(+62) 947 1227 594', '', NULL, NULL),
(57, 'Saiful Budi Prasetyo M.Ak', 'bakianto.safitri', '12345', 'ghartati@yahoo.com', '027 2381 7307', '', NULL, NULL),
(58, 'Maida Alika Maryati M.Pd', 'wastuti.aditya', '12345', 'ajimin91@gmail.com', '(+62) 854 8905 542', '', NULL, NULL),
(59, 'Yuliana Purwanti M.Farm', 'genta46', '12345', 'jagustina@gmail.com', '0858 1684 8487', '', NULL, NULL),
(60, 'Kasiyah Hasanah', 'hasanah.jefri', '12345', 'swijayanti@gmail.com', '0486 9958 7114', '', NULL, NULL),
(61, 'Amalia Rini Purwanti M.TI.', 'uramadan', '12345', 'lazuardi.sari@dongoran.sch.id', '0406 5821 431', '', NULL, NULL),
(62, 'Jati Mursita Pradana M.M.', 'alambana59', '12345', 'wawan32@hidayat.tv', '(+62) 218 2772 618', '', NULL, NULL),
(63, 'Amalia Ina Oktaviani S.Kom', 'inurdiyanti', '12345', 'yulianti.samiah@gmail.co.id', '0436 3036 787', '', NULL, NULL),
(64, 'Taswir Januar', 'suryono.gandi', '12345', 'hilda.fujiati@hutapea.info', '(+62) 390 1744 2372', '', NULL, NULL),
(65, 'Patricia Usamah', 'phidayanto', '12345', 'cahya.mayasari@yahoo.com', '029 5124 0788', '', NULL, NULL),
(66, 'Wani Permata', 'znuraini', '12345', 'ade.hidayat@padmasari.desa.id', '0561 5689 554', '', NULL, NULL),
(67, 'Salsabila Laksmiwati', 'virawan', '12345', 'qkusmawati@yahoo.co.id', '(+62) 560 5179 1367', '', NULL, NULL),
(68, 'Harsaya Wardaya Narpati S.I.Kom', 'sihombing.pangestu', '12345', 'usada.kala@gmail.co.id', '0662 5729 976', '', NULL, NULL),
(69, 'Mumpuni Adriansyah', 'latika.purnawati', '12345', 'qnainggolan@usada.go.id', '(+62) 449 0750 257', '', NULL, NULL),
(70, 'Melinda Fujiati M.Kom.', 'putri93', '12345', 'aurora48@yolanda.asia', '0858 4513 015', '', NULL, NULL),
(71, 'Lintang Rahmi Mandasari M.Pd', 'pradipta.lalita', '12345', 'dbudiyanto@gmail.co.id', '0888 8794 9320', '', NULL, NULL),
(72, 'Mulyanto Lazuardi', 'wahyuni.safina', '12345', 'mandasari.praba@nashiruddin.tv', '(+62) 282 1984 2412', '', NULL, NULL),
(73, 'Harjasa Ajiono Hutagalung S.T.', 'danang.nuraini', '12345', 'wiswahyudi@fujiati.go.id', '0231 1072 367', '', NULL, NULL),
(74, 'Putri Vera Utami', 'nalar.prabowo', '12345', 'nashiruddin.imam@gmail.com', '0866 174 774', '', NULL, NULL),
(75, 'Bakianto Suwarno S.Kom', 'saputra.atmaja', '12345', 'legawa45@astuti.asia', '0820 2965 950', '', NULL, NULL),
(76, 'Lala Laksmiwati', 'waskita.oman', '12345', 'handayani.marsito@irawan.info', '0230 8866 642', '', NULL, NULL),
(77, 'Purwadi Simanjuntak', 'najwa.simbolon', '12345', 'hasna57@gmail.co.id', '0385 7163 173', '', NULL, NULL),
(78, 'Widya Kuswandari', 'ida.mardhiyah', '12345', 'setiawan.dimas@yahoo.com', '(+62) 252 1586 837', '', NULL, NULL),
(79, 'Putri Amalia Kuswandari M.Pd', 'dewi21', '12345', 'esaputra@gmail.co.id', '0863 7333 3928', '', NULL, NULL),
(80, 'Dwi Mandala', 'pradipta.nilam', '12345', 'prayoga.himawan@yahoo.co.id', '0921 2823 427', '', NULL, NULL),
(81, 'Vera Ayu Wastuti S.T.', 'pratiwi.bakti', '12345', 'tpratiwi@halimah.co', '(+62) 666 9187 328', '', NULL, NULL),
(82, 'Kayla Ani Rahmawati S.Kom', 'gastuti', '12345', 'fnarpati@yahoo.co.id', '029 0676 092', '', NULL, NULL),
(83, 'Salimah Prastuti S.Pt', 'hartati.irfan', '12345', 'paris.yolanda@permata.my.id', '0497 7830 7553', '', NULL, NULL),
(84, 'Icha Nabila Susanti', 'gunawan.betania', '12345', 'jkuswoyo@gmail.co.id', '0883 999 226', '', NULL, NULL),
(85, 'Yuliana Siti Novitasari', 'ridwan90', '12345', 'thamrin.wadi@gmail.co.id', '(+62) 804 147 852', '', NULL, NULL),
(86, 'Jaswadi Bakianto Wibowo', 'utami.zulfa', '12345', 'jpangestu@lazuardi.info', '(+62) 893 5017 313', '', NULL, NULL),
(87, 'Adiarja Siregar', 'kusmawati.ganjaran', '12345', 'lmustofa@sitompul.biz', '(+62) 473 3891 159', '', NULL, NULL),
(88, 'Rosman Sirait', 'yani.halimah', '12345', 'edi78@mansur.in', '(+62) 459 4461 044', '', NULL, NULL),
(89, 'Prima Putra M.Pd', 'ksaputra', '12345', 'gawati00@yahoo.com', '(+62) 292 7918 7675', '', NULL, NULL),
(90, 'Ade Suwarno', 'rafid.tamba', '12345', 'imam.adriansyah@yahoo.co.id', '0885 1381 5656', '', NULL, NULL),
(91, 'Maida Winarsih S.E.I', 'hafshah.pranowo', '12345', 'fagustina@megantara.desa.id', '0828 722 917', '', NULL, NULL),
(92, 'Ciaobella Latika Safitri', 'mharyanti', '12345', 'ohidayat@yahoo.co.id', '(+62) 666 5067 0843', '', NULL, NULL),
(93, 'Bahuraksa Mansur', 'bakti11', '12345', 'uwais.ilsa@gmail.com', '(+62) 634 5710 194', '', NULL, NULL),
(94, 'Eva Kasiyah Aryani M.M.', 'mandala.dian', '12345', 'utami.gandi@siregar.biz', '(+62) 29 9923 8485', '', NULL, NULL),
(95, 'Samiah Lestari', 'baktianto.prayoga', '12345', 'kasusra64@gmail.co.id', '0801 3693 963', '', NULL, NULL),
(96, 'Rahmi Laksita S.I.Kom', 'xutama', '12345', 'jayeng18@yuliarti.org', '(+62) 606 0994 4744', '', NULL, NULL),
(97, 'Hari Iswahyudi', 'andriani.vero', '12345', 'adika.mahendra@winarsih.info', '021 4655 0082', '', NULL, NULL),
(98, 'Yusuf Lurhur Saputra S.E.I', 'salimah.sudiati', '12345', 'jamalia82@mangunsong.desa.id', '0484 4783 112', '', NULL, NULL),
(99, 'Marwata Ganep Pangestu', 'hendri.rahimah', '12345', 'tina.rahmawati@budiyanto.mil.id', '0430 5156 422', '', NULL, NULL),
(100, 'Ophelia Fitriani Susanti', 'dasa08', '12345', 'prabowo.ganep@winarsih.name', '0230 7002 5479', '', NULL, NULL),
(101, 'tombo0', 'tombo0', '123', 'tombo0@gmail.com', '1001', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bags`
--
ALTER TABLE `bags`
  ADD PRIMARY KEY (`id_doc`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_course` (`id_course`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bags`
--
ALTER TABLE `bags`
  MODIFY `id_doc` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bags`
--
ALTER TABLE `bags`
  ADD CONSTRAINT `bags_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `bags_ibfk_2` FOREIGN KEY (`id_course`) REFERENCES `courses` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
