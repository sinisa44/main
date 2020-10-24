-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2020 at 05:29 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `main`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `name`) VALUES
(1, 'Bečej'),
(2, 'Bačka Topola');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(2, ' Auto-moto'),
(3, ' Deca i bebe'),
(4, ' Edukacija'),
(5, 'Finansije'),
(6, 'Finansijske i pravne usluge'),
(7, ' Hrana i ugostiteljstvo'),
(8, ' Kućni ljubimci'),
(9, ' Mediji i marketing'),
(10, ' Smeštaj i turizam'),
(11, ' Sport'),
(12, ' Tehnika'),
(13, ' Transport'),
(14, ' Trgovina'),
(15, ' Usluge'),
(16, ' Zanatske radnje'),
(17, ' Zdravstvo');

-- --------------------------------------------------------

--
-- Table structure for table `cegek`
--

CREATE TABLE `cegek` (
  `id` int(11) NOT NULL,
  `datum_cegregisztralas` datetime NOT NULL DEFAULT current_timestamp(),
  `naziv_firme` varchar(400) NOT NULL,
  `email` varchar(200) NOT NULL,
  `opstina` varchar(400) NOT NULL,
  `mesto` varchar(200) NOT NULL,
  `kategorija` varchar(100) NOT NULL,
  `pod_kategorija` varchar(100) NOT NULL,
  `pod_delatnost` mediumtext NOT NULL,
  `radno_vreme` mediumtext NOT NULL,
  `slika_1` varchar(100) NOT NULL,
  `slika_2` varchar(400) NOT NULL,
  `o_nama` varchar(400) NOT NULL,
  `radno_vreme_1` varchar(400) NOT NULL,
  `galerija` varchar(400) NOT NULL,
  `podaci_firme` varchar(400) NOT NULL,
  `gde_smo` varchar(400) NOT NULL,
  `kontakt` varchar(400) NOT NULL,
  `facebook` varchar(400) NOT NULL,
  `web_page` varchar(400) NOT NULL,
  `google_maps` varchar(400) NOT NULL,
  `prosireni_podaci` varchar(10) NOT NULL,
  `instagram` varchar(400) NOT NULL,
  `youtube` varchar(400) NOT NULL,
  `news_letter` varchar(400) NOT NULL,
  `RSS` varchar(400) NOT NULL,
  `client_type` int(11) NOT NULL,
  `user_id` int(255) DEFAULT NULL,
  `dozvoljeno` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cegek`
--

INSERT INTO `cegek` (`id`, `datum_cegregisztralas`, `naziv_firme`, `email`, `opstina`, `mesto`, `kategorija`, `pod_kategorija`, `pod_delatnost`, `radno_vreme`, `slika_1`, `slika_2`, `o_nama`, `radno_vreme_1`, `galerija`, `podaci_firme`, `gde_smo`, `kontakt`, `facebook`, `web_page`, `google_maps`, `prosireni_podaci`, `instagram`, `youtube`, `news_letter`, `RSS`, `client_type`, `user_id`, `dozvoljeno`) VALUES
(6, '2020-09-27 12:05:06', 'test', 'sinisa@mail.com', 'Bečej', 'Test', ' Trgovina', 's', 'Šlep služba', '00-24', 'Bocor nevjegy1.jpg', 'Bocor nevjegy2.jpg', 'oasdasda', '00-24', 'galerija', 'test firma', 'becej', '123123', 'facebook.com', 'www.sinisa.com', '', 'ne', 'instagra.com', 'youtube.com', 'new', 'rss', 1, 7, 1),
(7, '2020-09-27 12:05:06', 'test', 'sinisa@mail.com', 'Bečej', 'Bačko Petrovo Selo', ' Trgovina', 's', 'Šlep služba', '00-24', 'Bocor nevjegy1.jpg', 'Bocor nevjegy2.jpg', 'oasdasda', '00-24', 'galerija', 'test firma', 'becej', '123123', 'facebook.com', 'www.sinisa.com', '', 'ne', 'instagra.com', 'youtube.com', 'new', 'rss', 1, 7, 1),
(8, '2020-09-27 12:05:06', 'test', 'sinisa@mail.com', 'Bečej', 'Bačko Petrovo Selo', ' Trgovina', 's', 'Šlep služba', '00-24', 'Bocor nevjegy1.jpg', 'Bocor nevjegy2.jpg', 'oasdasda', '00-24', 'galerija', 'test firma', 'becej', '123123', 'facebook.com', 'www.sinisa.com', '', 'ne', 'instagra.com', 'youtube.com', 'new', 'rss', 1, 7, 0),
(9, '2020-09-27 12:05:06', 'test', 'sinisa@mail.com', 'Bečej', 'Bačko Petrovo Selo', ' Trgovina', 's', 'Šlep služba', '00-24', 'Bocor nevjegy1.jpg', 'Bocor nevjegy2.jpg', 'oasdasda', '00-24', 'galerija', 'test firma', 'becej', '123123', 'facebook.com', 'www.sinisa.com', '', 'ne', 'instagra.com', 'youtube.com', 'new', 'rss', 1, 7, 0),
(10, '2020-09-27 12:05:06', 'test', 'sinisa@mail.com', 'Bečej', 'Bačko Petrovo Selo', ' Trgovina', 's', 'Šlep služba', '00-24', 'Bocor nevjegy1.jpg', 'Bocor nevjegy2.jpg', 'oasdasda', '00-24', 'galerija', 'test firma', 'becej', '123123', 'facebook.com', 'www.sinisa.com', '', 'ne', 'instagra.com', 'youtube.com', 'new', 'rss', 1, 7, 0),
(11, '2020-09-27 12:05:06', 'test', 'sinisa@mail.com', 'Bečej', 'Bačko Petrovo Selo', ' Trgovina', 's', 'Šlep služba', '00-24', 'Bocor nevjegy1.jpg', 'Bocor nevjegy2.jpg', 'oasdasda', '00-24', 'galerija', 'test firma', 'becej', '123123', 'facebook.com', 'www.sinisa.com', '', 'ne', 'instagra.com', 'youtube.com', 'new', 'rss', 1, 7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area_name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `area_name`) VALUES
(2, 'Bagremovo', 'Bačka Topola'),
(3, 'Bajša', 'Bačka Topola'),
(4, 'Bačka Topola', 'Bačka Topola'),
(5, 'Bački Sokolac', 'Bačka Topola'),
(6, 'Bogaraš', 'Bačka Topola'),
(7, 'Gornja Rogatica', 'Bačka Topola'),
(8, 'Gunaroš', 'Bačka Topola'),
(9, 'Zobnatica', 'Bačka Topola'),
(10, 'Kavilo', 'Bačka Topola'),
(11, 'Karađorđevo', 'Bačka Topola'),
(12, 'Krivaja', 'Bačka Topola'),
(13, 'Mali Beograd', 'Bačka Topola'),
(14, 'Mićunovo', 'Bačka Topola'),
(15, 'Novo Orahovo', 'Bačka Topola'),
(16, 'Njegoševo', 'Bačka Topola'),
(17, 'Obornjača', 'Bačka Topola'),
(18, 'Tomislavci (ranije Orešković)', 'Bačka Topola'),
(19, 'Panonija', 'Bačka Topola'),
(20, 'Pačir', 'Bačka Topola'),
(21, 'Pobeda', 'Bačka Topola'),
(22, 'Svetićevo', 'Bačka Topola'),
(23, 'Srednji Salaš', 'Bačka Topola'),
(24, 'Stara Moravica', 'Bačka Topola'),
(25, 'Duboka', 'Bačka Topola'),
(26, 'Bačko Petrovo Selo', 'Bečej'),
(27, 'Bačko Gradište', 'Bečej'),
(28, 'Radičević', 'Bečej'),
(29, 'Mileševo', 'Bečej'),
(30, 'Bečej', 'Bečej'),
(31, 'Poljanica', 'Bečej'),
(32, 'Drljan', 'Bečej');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `category_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `name`, `category_name`) VALUES
(2, 'Auto-električari', ' Auto-moto'),
(3, 'Auto perionice', ' Auto-moto'),
(4, 'Vulkanizeri', ' Auto-moto'),
(5, 'Registracija vozila i tehnički pregled', ' Auto-moto'),
(6, 'Auto škole', ' Auto-moto'),
(7, 'Benzinske pumpe', ' Auto-moto'),
(8, 'Šlep služba', ' Auto-moto'),
(9, 'Dečiji butici', ' Deca i bebe'),
(10, 'Kursevi, škole i radionice', ' Edukacija'),
(11, 'Menjačnice', 'Finansije'),
(12, 'Zalgaonice', 'Finansije'),
(13, 'Knjigovodstvene agencije', 'Finansijske i pravne usluge'),
(14, 'Krediti', ' Finansijske i pravne usluge'),
(15, 'Platni promet', ' Finansijske i pravne usluge'),
(16, 'Zapošljavanje i consulting', ' Finansijske i pravne usluge'),
(17, 'Građevina', ' Finansijske i pravne usluge'),
(18, 'Stovarišta', ' Finansijske i pravne usluge'),
(19, 'Brza hrana', ' Hrana i ugostiteljstvo'),
(20, 'Pekare', ' Hrana i ugostiteljstvo'),
(21, 'Mesare', ' Hrana i ugostiteljstvo'),
(22, 'Mlekare', ' Hrana i ugostiteljstvo'),
(23, 'Kafići', ' Hrana i ugostiteljstvo'),
(24, 'Picerije', ' Hrana i ugostiteljstvo'),
(25, 'Poslastičarnice', ' Hrana i ugostiteljstvo'),
(26, 'Restorani', ' Hrana i ugostiteljstvo'),
(27, 'Svečane sale', ' Hrana i ugostiteljstvo'),
(28, 'Veterinari', ' Kućni ljubimci'),
(29, 'Nega kućnih ljubimaca', ' Kućni ljubimci'),
(30, 'Marketing agencije', ' Mediji i marketing'),
(31, 'Moteli', ' Smeštaj i turizam'),
(32, 'Turističke agencije', ' Smeštaj i turizam'),
(33, 'Teretane', ' Sport'),
(34, 'Bela tehnika', ' Tehnika'),
(35, 'TV i audio', ' Tehnika'),
(36, 'Elektro i ručni alat', ' Tehnika'),
(37, 'Prevoz putnika i robe', ' Transport'),
(38, 'Cvećare', ' Trgovina'),
(39, 'Podrumi pića', ' Trgovina'),
(40, 'Trafike', ' Trgovina'),
(41, 'Elektromaterijal', ' Trgovina'),
(42, 'Farbare', ' Trgovina'),
(43, 'Marketi', ' Trgovina'),
(44, 'Prodavnice obuće', ' Trgovina'),
(45, 'Prodavnice tekstila', ' Trgovina'),
(46, 'Butici', ' Trgovina'),
(47, 'Second hand', ' Trgovina'),
(48, 'Rasveta, tepisi', ' Trgovina'),
(49, 'Poljoprivreda i stočarstvo', ' Trgovina'),
(50, 'Saloni nameštaja', ' Trgovina'),
(51, 'Nekretnine', ' Trgovina'),
(52, 'Gvožđare', ' Trgovina'),
(53, 'Električari', ' Usluge'),
(54, 'Servis računara', ' Usluge'),
(55, 'Servis mobilnih telefona', ' Usluge'),
(56, 'Tepih servisi', ' Usluge'),
(57, 'Fizičko-tehnička zaštita (FTO)', ' Usluge'),
(58, 'Teška industrija', ' Usluge'),
(59, 'Obućarske radnje', ' Zanatske radnje'),
(60, 'Stolarija', ' Zanatske radnje'),
(61, 'Grejanje i oprema', ' Zanatske radnje'),
(62, 'Pedijatrijske ordinacije', ' Zdravstvo'),
(63, 'Poliklinike', ' Zdravstvo'),
(64, 'Oftalmološke ordinacije', ' Zdravstvo'),
(65, 'Ginekološke ordinacije', ' Zdravstvo'),
(66, 'Optičarske radnje', ' Zdravstvo'),
(67, 'Stomatološke ordinacije', ' Zdravstvo');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `is_admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `token`, `status`, `is_admin`) VALUES
(1, 'test', 'sinisa.miskovic@outlook.com', '$2y$10$lZ0Ihau5p.eDMV1T/rLRo.tC.6PsG4INYbCXLNTHVVPAg.m/hr.t.', '$2y$10$GbozjdCX2OWzXeB5kCx3euXp/G26mi7HVyUBADuEB1IpIwyP7hxX6', 1, 1),
(2, 'test', 'sinisa.miskovic@outlook.com', '$2y$10$ZhRlyYZnTcEWbmuxT3k/reo67vJ6Tjxe2.IaSM0HXN1ZXxA8AZGce', '$2y$10$8CaSf6Em91lulyvZaZALkusEtp6GVE2QkEN7cyqeOn2CNfRvN6z9m', 0, NULL),
(3, 'test', 'sinisa.miskovic@outlook.com', '$2y$10$8pGHVNiTjtKraviCJTBfyONeIPZXS.qifSvkfbkrrXp24ATYTj3G.', '$2y$10$KIQbrOrcjCsyb3D9Vqc0BeEyf1tCJZ71YI0RbczCW1z3hGbdqOBUO', 0, NULL),
(4, 'test', 'sinisa.miskovic@outlook.com', '$2y$10$Km45sT8G6Y41nlci9KkeWOu6Gi8GQAKE1FB8VOML8IZLpjHXWsBPW', '$2y$10$9MS6rJrc8RO.bkfJ/KtjsOwPqKxiP1uV/lOchjwdDcxNFKGEjLEHW', 1, NULL),
(5, 'test', 'sinisa.miskovic@outlook.com', '$2y$10$LumSIxtIxNxXz3wgHVVjgeuWi802063.BJ2I37Wqgc5E8w23jPusK', '$2y$10$6P.0k1E2aaIcOR6ylA5sHua8Lxb8e58UqHczldvTMT29kS/Ywp0Sm', 0, NULL),
(6, 'sinisa', 'sinisa.miskovic@outlook.com', '$2y$10$QmuFWlR6EsKdK0oYMuQT2Ox7wErCzKBjSGcS7z5uPK/YijrFqUvA6', '$2y$10$5bCo.Wl81UG1Da7D1D7m1ekKvydZXP9y.jtS8GNa.RjiF4QILu2dC', 1, 1),
(7, 'sinisa 1', 'sinisa.miskovic@outlook.com', '$2y$10$.HUkh8fVLuhYV3tW1s9VX.PkFOnMnXiIsRt2HyDJ0V4bnG1eXIiTC', '$2y$10$roybuhmJ4FVrooIuidwLdeSRmUn8rxDG9K0PzIJsdfXOt646xHyOG', 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indexes for table `cegek`
--
ALTER TABLE `cegek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
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
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cegek`
--
ALTER TABLE `cegek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
