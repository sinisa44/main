-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2020 at 05:54 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

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
  `podkategorija` varchar(100) NOT NULL,
  `podelatnost` mediumtext NOT NULL,
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
  `client_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cegek`
--

INSERT INTO `cegek` (`id`, `datum_cegregisztralas`, `naziv_firme`, `email`, `opstina`, `mesto`, `kategorija`, `podkategorija`, `podelatnost`, `radno_vreme`, `slika_1`, `slika_2`, `o_nama`, `radno_vreme_1`, `galerija`, `podaci_firme`, `gde_smo`, `kontakt`, `facebook`, `web_page`, `google_maps`, `prosireni_podaci`, `instagram`, `youtube`, `news_letter`, `RSS`, `client_type`) VALUES
(12, '2020-08-11 19:01:00', 'test', '', '', '', '', '', '', '', 'Gunaras1.jpg', '', 'O nama', 'radno vreme', '', 'podaci firme', 'polovniautomobili.com', '', 'facebook.com', '', '', 'ne', '', '', '', '', 2),
(13, '2020-08-11 19:22:46', ' test 2', '', '', '', '', '', '', '', 'STR Moto Shop.jpg', 'Ruter.jpg', '', '', '', '', '', '', '', '', '', 'ne', '', '', '', '', 2),
(14, '2020-08-11 19:24:51', 'cao kako je', '', '', '', '', '', '', '', 'Kopre Family car.jpg', 'Bocor nevjegy2.jpg', '', '', '', '', '', '', '', '', '', 'ne', '', '', '', '', 3),
(15, '2020-08-12 11:46:08', 'Ferenc Poljoservis', '', 'Bečej', 'Bečej', ' Auto-moto', 'Auto-električari', '', '', 'poljoServis1.jpg', 'poljoServis2.jpg', '', '', '', '', '', '', '', '', '', 'ne', '', '', '', '', 1),
(17, '2020-08-23 12:44:27', 'Test', 'test@gmail.com', '', '', '', '', '', '00-24', '', '', '', '', '', '', '', '', '', '', '', 'ne', '', '', '', '', 2),
(18, '2020-09-13 19:55:02', 'test', 'test@gmail.com', 'Bečej', 'Bačko Petrovo Selo', 'Finansijske i pravne usluge', 'Knjigovodstvene agencije', 'Krediti', '00-24', 'Becej_auto delovi_Delmax.jpg', 'Becej_Auto Mehanicar_Kompas.jpg', 'sss', '00-24', 'test', 'http://webstranice.rs/PolarCool/kontakt.html', 'sad', '0601586165', 'facebook.com', 'test.com', '', 'ne', 'instagram.com', 'youtube.com', 'test', 'rss', 0),
(19, '2020-09-13 19:57:00', 'test', 'test@gmail.com', 'Bečej', 'Bačko Petrovo Selo', 'Finansije', 'Menjačnice', 'Kafići', '00-24', 'Becej_Auto Elektricar_Vukas.jpg', 'Becej_Farbe_Cameleon COlor.jpg', 'as', 'as', 'sa', '', '', '0601586165', 'facebook.com', 's', '', 'ne', 'instagram.com', 'youtube.com', 'news', 'rss', 0),
(20, '2020-09-13 19:58:48', 'test', 'test@gmail.com', 'Bečej', 'Bačko Petrovo Selo', 'Finansije', 'Menjačnice', 'Kafići', '00-24', 'Becej_Auto Elektricar_Vukas.jpg', 'Becej_Farbe_Cameleon COlor.jpg', 'as', 'as', 'sa', '', '', '0601586165', 'facebook.com', 's', '', 'ne', 'instagram.com', 'youtube.com', 'news', 'rss', 0),
(21, '2020-09-13 19:59:15', 'test', 'test@gmail.com', 'Bečej', 'Bačko Petrovo Selo', 'Finansije', 'Menjačnice', 'Kafići', '00-24', 'Becej_Auto Elektricar_Vukas.jpg', 'Becej_Farbe_Cameleon COlor.jpg', 'as', 'as', 'sa', '', '', '0601586165', 'facebook.com', 's', '', 'ne', 'instagram.com', 'youtube.com', 'news', 'rss', 0),
(22, '2020-09-13 20:00:37', '', '', '', '', '', '', 'Krediti', '', 'Becej_Auto Elektricar_Vukas.jpg', 'poljoServis1.jpg', '', '', '', '', '', '', '', '', '', 'ne', '', '', '', '', 0),
(23, '2020-09-13 20:01:33', '', '', '', '', '', '', 'Krediti', '', 'Becej_Auto Elektricar_Vukas.jpg', '', '', '', '', '', '', '', '', '', '', 'ne', '', '', '', '', 0),
(24, '2020-09-13 20:01:48', '', '', '', '', '', '', 'Krediti', '', 'Becej_Auto Elektricar_Vukas.jpg', '', '', '', '', '', '', '', '', '', '', 'ne', '', '', '', '', 0),
(25, '2020-09-13 20:03:09', '', '', '', '', '', '', 'Krediti', '', 'Becej_Auto Elektricar_Vukas.jpg', 'poljoServis1.jpg', '', '', '', '', '', '', '', '', '', 'ne', '', '', '', '', 0),
(26, '2020-09-14 20:42:21', 'asdas', '', '', '', '', '', 'Dečiji butici', '', 'Bocor nevjegy2.jpg', 'Bocor nevjegy2.jpg', '', '', '', '', '', '', '', '', '', 'ne', '', '', '', '', 0),
(27, '2020-09-15 20:55:56', '', '', '', '', ' Zanatske radnje', 'Obućarske radnje', 'Auto-mehaničari,Kursevi, škole i radionice', '', 'Bocor nevjegy2.jpg', 'Bocor nevjegy2.jpg', '', '', '', '', '', '', '', '', '', 'ne', '', '', '', '', 0),
(28, '2020-09-15 20:57:32', 'sinisa', '', '', '', 'Finansije', 'Menjačnice', 'Turističke agencije,TV i audio', '', 'Kopre Family car.jpg', 'Bocor nevjegy2.jpg', '', '', '', '', '', '', '', '', '', 'ne', '', '', '', '', 0),
(29, '2020-09-15 21:00:29', '', '', '', '', 'Finansijske i pravne usluge', 'Knjigovodstvene agencije', 'Stovarišta,Restorani', '', 'Becej_Auto Elektricar_Vukas.jpg', 'Bocor nevjegy2.jpg', '', '', '', '', '', '', '', '', '', 'ne', '', '', '', '', 0),
(30, '2020-09-15 21:05:16', '', '', '', '', 'Finansijske i pravne usluge', 'Knjigovodstvene agencije', 'Teretane', '', 'Becej_Auto Elektricar_Vukas.jpg', 'Bocor nevjegy2.jpg', '', '', '', '', '', '', '', '', '', 'ne', '', '', '', '', 0),
(31, '2020-09-15 21:06:30', '', '', '', '', 'Finansijske i pravne usluge', 'Knjigovodstvene agencije', 'Svečane sale', '', 'Becej_Auto Elektricar_Vukas.jpg', 'Bocor nevjegy2.jpg', '', '', '', '', '', '', '', '', '', 'ne', '', '', '', '', 0),
(32, '2020-09-15 21:07:50', '', '', '', '', '', '', 'Teretane', '', 'Becej_Auto Elektricar_Vukas.jpg', '', '', '', '', '', '', '', '', '', '', 'ne', '', '', '', '', 0),
(33, '2020-09-15 21:08:50', 'sinisa', '', '', '', '', '', '', '', '', 'poljoServis1.jpg', '', '', '', '', '', '', '', '', '', 'ne', '', '', '', '', 0);

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
  `id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `token` varchar(256) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `token`, `status`) VALUES
(NULL, 'Test', 'nhudjik2003@gmail.com', '$2y$10$rxTv/lSlYMZUinwqrsJJ9uaFj1MSBbGXAFGrUsnVbIGIv.GJXBOkq', '$2y$10$xguAfW1KfQvNWYmc3URc2eghTuEFhiQMfXxvXaHOwUS5xw2zH0cf6', 0),
(NULL, 'Test', 'nhudjik2003@gmail.com', '$2y$10$Kcw/51miRFlr66P/oRA1iuUC/y0jyNKhjfUztWexNAn6GF47yPEDW', '$2y$10$DYb38N4YVNw0qysL9dwVvuVKQEwgz7GHMfzbBDRqY6.AgGARG7TiK', 0),
(NULL, 'Test', 'nhudjik2003@gmail.com', '$2y$10$JAhr6wrqXpXu0iYRu2og6.zCpn3aXl9d8n4x5Z.IPmwQ/TDG97r3S', '$2y$10$DGBJaLcmIBobY5gekkcg7e2ztioiN53TTLY/dYEu/xcm/c3N4ZmqC', 0),
(NULL, 'Test', 'nhudjik2003@gmail.com', '$2y$10$fa1Ng2sFIuJqz/FmnXmc1.UKjhxkTJtT0sLD48QtbFl9R32ewQ7qC', '$2y$10$CdCaeEv39j4K2dA8yNge/.AW.6QmHlkz0p56a/JHCU5ObRSzUr3ze', 0),
(NULL, 'asdasd', 'nhudjik2003@gmail.com', '$2y$10$Hi9uML.hmuUtCCJoiH4XKeG9GoDP2eCBu4nrikKw5jg9JrJPPk5JK', '$2y$10$XOvDe2kfsjX8ps/sF7vt5.C9QtCpHddSLX.v0OKic51MqURQIcuuG', 0),
(NULL, 'Test', 'nhudjik2003@gmail.com', '$2y$10$VKA/kyOYtAc6PMKzTTCjH.PH6lS8eun0bHdAprDtd0o30QgPHgMvK', '$2y$10$NnPNX61TDQValVceYM5JPuIfDVwAAJf5vixEPZ7DN3O9NL.FLcjNK', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
