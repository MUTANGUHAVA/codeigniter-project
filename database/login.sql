-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2023 at 04:11 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(210) NOT NULL,
  `email` varchar(210) NOT NULL,
  `message` varchar(210) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'yassin', 'yassin@gmail.com', 'rtdgjgj'),
(2, 'yassin', 'yassin@gmail.com', 'rtdgjgj'),
(3, 'dtd', 'agfdg@dgfg', 'fshfh'),
(4, 'yassin', 'yassin@gmail.com', 'yjujfddyude'),
(6, 'yassin', 'yassin@gmail.com', 'ghdfg'),
(7, 'emme', 'emme@dfdgf', 'i am sorry'),
(8, 'emme', 'emme@dfdgf', 'i am sorry'),
(9, 'yassin', 'anitha@gmail.com', 'hsfhfg'),
(10, 'yassin', 'fhf@gfg', 'fhdh'),
(11, 'yassin', 'fhf@gfg', 'fhdh'),
(12, 'yassin', 'yassin@gmail.com', 'ghdfg'),
(13, 'kagiraneza', 'kagiraneza@gmail.com', 'mother');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `order_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `order_details`) VALUES
(27, 'yassin', 'yassin@gmail.com', 'rty', 'tye'),
(31, 'amenaa', 'amena@dghf', '8454', 'gfgfg'),
(32, 'anitha', 'anitha@fgf', '5674', 'fdg'),
(35, 'kagiraneza', 'kagiraneza@gmail.com', '078956553', 'omolette'),
(36, 'gahigi', 'gahigi@gama', '8757575', 'imyumbati'),
(37, 'yassin', 'yassin@gmail.com', '857575', 'shhfh'),
(38, 'yassin', 'yassin@gmail.com', '857575', 'shhfh'),
(39, 'rg', 'yassin@gmail.com', '857575', 'dg'),
(40, 'yassin', 'yassin@gmail.com', '6584', 'goo'),
(41, 'yassin', 'yassin@gmail.com', '675', 'dj'),
(42, 'kagiraneza', 'kagiraneza@gmail.com', '876565', 'aminaaa'),
(43, 'nkurunziza', 'fgf@fcxfg', '4357', 'bnjm,.'),
(44, 'mukazi', 'mukazi@gmail.com', '08678677', 'bread'),
(45, 'fg', 'fgfg@dgfsg', 'sfg', 'fgfg'),
(46, 'yassin', 'yassin@gmail.com', '857575', 'GCBC'),
(47, 'yassin', 'yassin@gmail.com', '857575', 'DD');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(4, 'yassin', 'yassin@gmail.com', '$2y$10$EW5tPc/.FmtasNYH592q9eTxrnmy5kw.ejnmTO6kzg5foEne6YllW'),
(5, 'yassin', 'yassin@gmail.com', '$2y$10$A3ypxV8eG.nIYoNqM4rd7ugQR0opdMML9FbVJYqs3DhIiU34qC9BO'),
(6, 'Mutanguha Valentin', 'valentin@gmail.com', '$2y$10$EC5b1R8FcHcS354YeqDOOOMx1CLTKg6Bvs/wsWESKZ5uRqwkcB/iS'),
(7, 'amina', 'amina@gmail.com', '$2y$10$U9Dkkr9ukTfwyaia346PHeX/LynQb2zNpfKqKEedrKJB.TmifimXa'),
(8, 'alice', 'alice@gmail.com', '$2y$10$mmqX0tfcXy0NRMjngJP0u.o5R4TCTJ5LG/ssgXalNkNebJTDFDge6'),
(9, 'yassin', 'yassin@gmail.com', '$2y$10$nfwqwxqct.Pa9e8Ib90UZuaVOM3kOyOAyKqExLM5N1J58gg8edtse'),
(10, 'yassin', 'yassin@gmail.com', '$2y$10$kcbX7atcz3TV3PpdTVr6f.kfMj.cmq0.kCyv.k.flxJPBDKWsi1E.'),
(11, 'yassin', 'yassin@gmail.com', '$2y$10$YCNgWD0paAgVXoyoZH1jIOQZN5VstWiFAcF/SPJ.hxd3biIy7lh.i'),
(12, 'yassin', 'yassin@gmail.com', '$2y$10$8NBY28kETBEvk/vKwoMZcek4yRNPOqeqaW3un/Cy3Zt/LaUuC7Ema'),
(13, 'yassin', 'yassin@gmail.com', '$2y$10$PwVERcjdFSGeK8vglJGzaedEJId1e7fejc9tnG3U7DwrXVcnlMcY6'),
(14, 'yassin', 'yassin@gmail.com', '$2y$10$59xmaBUxaxaxifwyYRzEQOY3LKnUjitIZI.m5GLeF0WdH7W.cfHQO'),
(15, 'yassin', 'yassin@gmail.com', '$2y$10$sn1REv8/sgB1Dq5h4YL2beVBpK0Y9MlB.ZdO8F1qqXuD.3WFNDYMi'),
(16, 'bonke', 'bonke@gmail.com', '$2y$10$E5B9Dcnl3n5aGDGStidDkuCECNmeNzlrxeX3.L3NFkhH/MUslIsvm'),
(17, 'cyusa', 'cyusa@gmail.com', '$2y$10$M/5VcAuQnAWuMoeYeLRJoO9fgIVklt480jcLS9471a4HxPeJesiiS'),
(18, 'cyusa', 'cyusa@gmail.com', '$2y$10$JgpcvSycuxPQf/SbEP2T7OEz4AnDvrhpPyhF.tVtpVA3Zb/WHmcCC'),
(19, 'cyusa', 'cyusa@gmail.com', '$2y$10$wTAVNa.ma2q6FnUO4Edao.tY1FTcO1NAiopwBv57ny9DXWwklKHCC'),
(20, 'eric', 'eric@gmail.com', '$2y$10$l0sUCg/48XnEpw/OdZidXu7wkGlY7E89j8yZqeZY.5tI7e9inLRT6'),
(22, 'amina', 'amina@gmail.com', '$2y$10$74pY6AH3SuA4ae5uf4pS1ufoYsLD9vCTHCm8Nu1A7aDNGifFozCOq'),
(23, 'yassin', 'amina@gmail.com', '$2y$10$5SJqxzM6G71UV3vGi0pYCeLB0jaoVLEFQlVus8XDpQPslhWjWvl4K'),
(24, 'yassin', 'yassin@gmail.com', '$2y$10$ROUPwlpdKCAPVvXUqBkKaeMKShP02Fefaw2rRFaLpF2uMNhscigWK'),
(35, 'anithaa', 'anithaa@gmail.com', '$2y$10$NdOHBq6tVUnmRaSXsGRl7u7fw9tf345HnUpzvqjgfTNFEY5Ce2uCO'),
(36, 'boss', 'boss@gmail.com', '$2y$10$as6rVKzeR1jGVHX9llAxHOPoUhO/ncc.b.7LV1tWhcng.ePW8vgCi'),
(37, 'boss', 'boss@gmail.com', '$2y$10$pg33ek/6wl0uVeckl8fmruaWhF5a/nR3AmOTw.tfWpyu3NuRwc44e'),
(38, 'boss', 'boss@gmail.com', '$2y$10$BQugspWE9/slwsvw9PrAY.V9TJoQBx88OkNy9aY3vnQwAxMxKh9Bi'),
(39, 'haha', 'haha@gmail.com', '$2y$10$y.K59sH9uHZMCILJpM9.5uWKEX4Mfe91z/HU50sgxMQk8OEggw18e'),
(40, 'mukazi', 'mukazi@gmail.com', '$2y$10$VcpYXpf2GEDNGjxpyWIuBuQ6CNSPEIAyTHiSqBYtStnNUm/vPQLqu'),
(41, 'angel', 'angel@gmail.com', '$2y$10$BhCcItEdEkBZ9ozIzvqbL.Oq7vmwwvzSRHAiUNf5ezJZq8.SsXap2'),
(42, 'MIMI', 'MIMI@gmail.com', '$2y$10$2xptMQGojlGftROOzc.7.OXydBKleAbdAJZbszj5cwoTKx7Ohiha6'),
(43, 'kagiraneza', 'kagiraneza@gmail.com', '$2y$10$djjmiKkej0iTAnXCn.gB6OQLCP.OZRMsHt.mkzQY55d8afJnwtrUq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
