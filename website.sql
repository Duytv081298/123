-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 12, 2019 lúc 06:47 AM
-- Phiên bản máy phục vụ: 10.1.39-MariaDB
-- Phiên bản PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `website`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trainer`
--

CREATE TABLE `trainer` (
  `idtrainer` int(11) NOT NULL,
  `user` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `idadmin` int(11) DEFAULT NULL,
  `idstaff` int(11) DEFAULT NULL,
  `idclass` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `trainer`
--

INSERT INTO `trainer` (`idtrainer`, `user`, `pass`, `name`, `idadmin`, `idstaff`, `idclass`, `status`) VALUES
(1, 'TrainerDuy@fpt.edu.vn', '1234', 'DuyTrainer', 1, 2, 1, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`idtrainer`,`user`,`pass`),
  ADD KEY `idadmin` (`idadmin`),
  ADD KEY `idstaff` (`idstaff`),
  ADD KEY `idclass` (`idclass`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `trainer`
--
ALTER TABLE `trainer`
  MODIFY `idtrainer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `trainer`
--
ALTER TABLE `trainer`
  ADD CONSTRAINT `trainer_ibfk_1` FOREIGN KEY (`idstaff`) REFERENCES `staff` (`idstaff`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trainer_ibfk_2` FOREIGN KEY (`idadmin`) REFERENCES `admin` (`idadmin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trainer_ibfk_3` FOREIGN KEY (`idclass`) REFERENCES `class` (`idclass`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
