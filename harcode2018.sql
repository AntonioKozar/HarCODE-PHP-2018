-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 16, 2018 at 12:48 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `harcode2018`
--
CREATE DATABASE IF NOT EXISTS `harcode2018` DEFAULT CHARACTER SET utf8 COLLATE utf8_croatian_ci;
USE `harcode2018`;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
CREATE TABLE IF NOT EXISTS `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) COLLATE utf8_croatian_ci NOT NULL,
  `zipcode` varchar(16) COLLATE utf8_croatian_ci NOT NULL,
  `country` varchar(64) COLLATE utf8_croatian_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `country` (`country`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `zipcode`, `country`) VALUES
(5, 'Osijek', '31000', 'Croatia');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

DROP TABLE IF EXISTS `country`;
CREATE TABLE IF NOT EXISTS `country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) COLLATE utf8_croatian_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`) VALUES
(8, 'Croatia');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) COLLATE utf8_croatian_ci NOT NULL,
  `description` text COLLATE utf8_croatian_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'Group of products', 'Description of group of products');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

DROP TABLE IF EXISTS `manufacturer`;
CREATE TABLE IF NOT EXISTS `manufacturer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) COLLATE utf8_croatian_ci NOT NULL,
  `description` text COLLATE utf8_croatian_ci NOT NULL,
  `adress` varchar(64) COLLATE utf8_croatian_ci NOT NULL,
  `telephone` varchar(64) COLLATE utf8_croatian_ci NOT NULL,
  `email` varchar(64) COLLATE utf8_croatian_ci NOT NULL,
  `url` varchar(254) COLLATE utf8_croatian_ci NOT NULL,
  `city` varchar(64) COLLATE utf8_croatian_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `city` (`city`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `name`, `description`, `adress`, `telephone`, `email`, `url`, `city`) VALUES
(3, 'Ekonomski fakultet u Osijeku', 'Ekonomski fakultet u Osijeku jedan je od najstarijih fakulteta i visokoobrazovnih institucija u Osijeku i Slavoniji i Baranji te je bio i okosnica osnutka SveuÄiliÅ¡ta Josipa Jurja Strossmayera u Osijeku. Osnovan je 1961. godine, kao nastavak aktivnosti Centra za ekonomski studij zagrebaÄkoga sveuÄiliÅ¡ta, a uz veliku podrÅ¡ku tadaÅ¡njega gospodarstva, gospodarske komore, te institucija lokalne i regionalne vlasti. Od prvih dana postojanja fakultet teÅ¾i svojem pozicioniranju kao autonomnoj, modernoj, komparativno-kompetitivnoj ustanovi bliskoj europskoj i svjetskoj kvaliteti nastavnog i znanstveno-istraÅ¾ivaÄkog rada.\r\n\r\nEkonomski fakultet u Osijeku odigrao je znakovitu ulogu u obrazovanju znanstvenika i struÄnjaka u ovom dijelu Hrvatske. NaÅ¡ najveÄ‡i uspjeh su naÅ¡i studenti, ljudi koji su zavrÅ¡ili studij na naÅ¡em Fakultetu i koji danas obnaÅ¡aju najodgovornije funkcije u gospodarstvu, drÅ¾avnoj upravi i lokalnoj i regionalnoj samoupravi, ne samo u regiji, nego i u cijeloj Hrvatskoj. Do 2017. godine je na Fakultetu diplomiralo 9.566 studenata na dodiplomskom i 2.465 studenata na diplomskom studiju, 691 studenata je magistriralo, te 258 studenata doktoriralo.\r\n\r\nSnaga Fakulteta poÄiva, prije svega, na visokoobrazovanim i visokomotiviranim nastavnicima i znanstvenicima koji su nositelj svih kljuÄnih aktivnosti fakulteta. Na fakultetu je trenutno zaposleno 49 nastavnika u znanstveno nastavnom zvanju (redoviti i izvanredni profesori, docenti) i 15 suradnika (asistenata i poslijedoktoranata). Kvaliteti nastavnog procesa uvelike pridonosi i angaÅ¾man velikog broja vanjskih suradnika koji su priznati struÄnjaci iz gospodarskog Å¾ivota. Entuzijazam i novi pogledi velikog broja mladih nastavnika, uz bogatstvo iskustva zrelih generacija, dragocjeni su kao polazna toÄka buduÄ‡eg razvoja fakulteta.\r\n\r\nFakultet raspolaÅ¾e s prostorom ukupne povrÅ¡ine 5050 m2, a Å¡to se odnosi na dvorane, kabinete nastavnika, te komunikacijske prostore. U ovim prostorima je instalirana najsuvremenija oprema za izvoÄ‘enje nastave, te 400 raÄunalnih mjesta, Å¡to sve zajedno stvara uvjete za visoku razinu kvalitete nastavnog procesa i znanstvenoistraÅ¾ivaÄkog rada. Biblioteka s fundusom knjiga i Äasopisa, te Äitaonica s virtualnim odjelom za internetski pristup svim relevantnim svjetskim bazama podataka omoguÄ‡ava nastavnicima i studentima kvalitetan odgovor  zahtjevima struke i najnovijim metodama potvrde teorije u stvarnosti.\r\n\r\nU 2011. godini Fakultet je proÅ¡ao kroz uspjeÅ¡an proces meÄ‘unarodne akreditacije i dobio IQA (CEEMAN International Quality Accreditation) certifikat kojim se potvrÄ‘uju: visoka kvaliteta programa i njegova realizacija, kadrovski potencijal i opremljenost ali i konaÄni rezultati. Ime Ekonomskog fakulteta u Osijeku moÅ¾e se naÄ‡i i u meÄ‘unarodnoj akademskoj bazi najboljih poslovnih Å¡kola u svijetu. Takova prepoznatljivost u meÄ‘unarodnim okvirima donijela je i dodatno priznanje, UNESCO â€“ katedra za poduzetniÅ¡tvo, koja se dodjeljuje institucijama i pojedincima za iznimna postignuÄ‡a u nekom podruÄju. Kao potvrda opredijeljenosti Fakulteta za pruÅ¾anje visoko kvalitetne obrazovne usluge i znanstvenoistraÅ¾ivaÄkog rada, te primjenu uspjeÅ¡nog sustava upravljanja organizacijom svjedoÄi i Certifikat o ispunjavanju norme ISO 9001:2008, koji je Fakultet dobio 2013. godine.\r\n\r\nU svojoj, viÅ¡e do 50 godina dugoj, povijesti kako su se mijenjale vanjske okolnosti tako se mijenjao i Fakultet. Promjene su se prije svega odnosile na prilagoÄ‘avanje studijskih programa Fakulteta potrebama trÅ¾iÅ¡ta rada. Tako se od 2005. godine na Fakultetu studira po studijskim programima prilagoÄ‘enim bolonjskom sustavu. Na Fakultetu se danas izvodi cjelokupna obrazovna vertikala sveuÄiliÅ¡nih studija od preddiplomskog do doktorskog studija. Resursi Fakulteta i veliki broj visokoobrazovanih nastavnika omoguÄ‡uju Fakultetu razvoj kvalitetnih studijskih programa koji se razvijaju i u dubinu i u Å¡irinu. Na Fakultetu se danas moÅ¾e studirati na Å¡est studijskih programa poslovne ekonomije i jednom programu ekonomije. Uz to veliki broj izbornih kolegija omoguÄ‡uje studentima prilagodbu studijskog programa njihovim vlastitim preferencijama i Å¾eljama.\r\n\r\nOno Å¡to je dodatna vrijednost Fakulteta jesu brojne moguÄ‡nosti koje pruÅ¾a svojim studentima: velik broj studijskih programa na svim razinama obrazovanja, brojne izvannastavne aktivnosti u kojima studenti razvijaju svoja znanja i vjeÅ¡tine te poveÄ‡avaju svoju zapoÅ¡ljivost, suradnja na nacionalnoj i meÄ‘unarodnoj razini s institucijama visokoga obrazovanja i gospodarskim subjektima na razliÄitim znanstvenim i struÄnim projektima, kao i projektima mobilnosti kroz Erasmus+ program. Neka od europskih sveuÄiliÅ¡ta s kojima Ekonomski fakultet u Osijeku ima potpisane ugovore o bilateralnoj suradnji su: University of Vienna, University of Business in Prague, Universitat Augsburg, HHL Leipzig Graduate School of Management, Pforzheim University, University of Malaga, Murcia University, Kaposvar University, University of Pecs, University of Bari Aldo Moro, Hanze University of Applied Sciences Groningen.\r\n\r\nDugi niz godina, kroz svoju viziju i misiju Ekonomski fakultet u Osijeku dokazuje svoju predanost poticanju i ostvarenju izvrsnosti u svojoj znanstvenoistraÅ¾ivaÄkoj i nastavnoj aktivnosti kao vaÅ¾nome preduvjetu ostvarenja napretka i konkurentnosti druÅ¡tva u kojemu Å¾ivi i djeluje. Sve navedeno zasigurno ukazuje da bogata tradicija i sadaÅ¡nji intelektualni potencijal Fakulteta mogu i u buduÄ‡nosti biti snaÅ¾na potpora razvoju gospodarstva Regije i Republike Hrvatske kao cjeline.', 'Trg Lj. Gaja 7, Osijek', '031/224-400', 'web@efos.hr', 'http://www.efos.unios.hr', 'Osijek');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `harcode` varchar(7) COLLATE utf8_croatian_ci NOT NULL,
  `barcode` varchar(13) COLLATE utf8_croatian_ci NOT NULL,
  `title` varchar(128) COLLATE utf8_croatian_ci NOT NULL,
  `subtitle` varchar(256) COLLATE utf8_croatian_ci NOT NULL,
  `description` text COLLATE utf8_croatian_ci NOT NULL,
  `information` text COLLATE utf8_croatian_ci NOT NULL,
  `audio` varchar(256) COLLATE utf8_croatian_ci NOT NULL,
  `video` varchar(256) COLLATE utf8_croatian_ci NOT NULL,
  `pdf` varchar(256) COLLATE utf8_croatian_ci NOT NULL,
  `groups` varchar(64) COLLATE utf8_croatian_ci NOT NULL,
  `subgroups` varchar(64) COLLATE utf8_croatian_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `harcode` (`harcode`),
  UNIQUE KEY `barcode` (`barcode`),
  KEY `group` (`groups`),
  KEY `subgroup` (`subgroups`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `harcode`, `barcode`, `title`, `subtitle`, `description`, `information`, `audio`, `video`, `pdf`, `groups`, `subgroups`) VALUES
(1, '0000018', '0000000000018', 'Group of products', 'Product subtitle', 'Product description', 'Product information', '../../../res/audio/0000018.mp3', 'https://www.youtube.com/embed/Lgv7aktFErA', '../../../res/pdf/0000018.pdf', 'Group of products', 'Subgroup of products');

-- --------------------------------------------------------

--
-- Table structure for table `subgroup`
--

DROP TABLE IF EXISTS `subgroup`;
CREATE TABLE IF NOT EXISTS `subgroup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) COLLATE utf8_croatian_ci NOT NULL,
  `description` text COLLATE utf8_croatian_ci NOT NULL,
  `groups` varchar(64) COLLATE utf8_croatian_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `group` (`groups`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `subgroup`
--

INSERT INTO `subgroup` (`id`, `name`, `description`, `groups`) VALUES
(1, 'Subgroup of products', 'Description of subgroup of products', 'Group of products');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(24) COLLATE utf8_croatian_ci NOT NULL,
  `password` varchar(24) COLLATE utf8_croatian_ci NOT NULL,
  `name` varchar(24) COLLATE utf8_croatian_ci NOT NULL,
  `lastname` varchar(48) COLLATE utf8_croatian_ci NOT NULL,
  `email` varchar(64) COLLATE utf8_croatian_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `role` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`,`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci COMMENT='Harcode users table with all user information';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `lastname`, `email`, `created`, `role`) VALUES
(1, 'admin', 'admin', 'Antonio', 'Kožar', '08akozar@gmail.com', '2018-11-09 10:36:40', 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
