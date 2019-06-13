-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 13, 2019 lúc 05:02 AM
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
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL,
  `user` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`idadmin`, `user`, `pass`, `name`) VALUES
(1, 'AdminDuy@fpt.edu.vn', '1234', 'Duy'),
(2, 'AdminTham@fpt.edu.vn', '1234', 'Tham');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `idcategory` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `idstaff` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`idcategory`, `name`, `description`, `idstaff`) VALUES
(1, 'Graphic Design', 'Graphic design is the process of visual communication and problem-solving through the use of typography, photography, and illustration.', 2),
(2, 'Computing', 'Computer training refers to resources, companies and services dedicated to helping educate users on computer-related topics.', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `class`
--

CREATE TABLE `class` (
  `idclass` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `idstaff` int(11) NOT NULL,
  `idcourse` int(11) NOT NULL,
  `idcategory` int(11) NOT NULL,
  `idtopic` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `class`
--

INSERT INTO `class` (`idclass`, `name`, `idstaff`, `idcourse`, `idcategory`, `idtopic`) VALUES
(1, 'GCH0701', 1, 1, 2, 2),
(2, 'GCH0704', 2, 2, 2, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `course`
--

CREATE TABLE `course` (
  `idcourse` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `idstaff` int(11) NOT NULL,
  `idcategory` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `course`
--

INSERT INTO `course` (`idcourse`, `name`, `description`, `idstaff`, `idcategory`) VALUES
(1, 'Programming', 'Programming is the implementation of logic to facilitate specified computing operations and functionality', 1, 2),
(2, 'Web Design', 'Web development is the coding or programming that enables website functionality, per the owner\'s requirements.', 2, 2),
(3, 'Printmaking \r\n', 'Print design, a subset of graphic design, is a form of visual communication used to convey information to an audience through intentional aesthetic design printed on a tangible surface, designed to be printed on paper, as opposed to presented on a digital platform.', 1, 1),
(4, 'Visual Narrative', 'A visual narrative (also visual storytelling) is a story told primarily through the use of visual media. The story may be told using still photography, illustration, or video, and can be enhanced with graphics, music, voice and other audio.', 2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `staff`
--

CREATE TABLE `staff` (
  `idstaff` int(11) NOT NULL,
  `user` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `idadmin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `staff`
--

INSERT INTO `staff` (`idstaff`, `user`, `pass`, `name`, `idadmin`) VALUES
(0, 'Ha@fpt.edu.vn', '1234', 'Nguyen Thanh Tam', 1),
(1, 'StaffDuy@fpt.edu.vn', '1234', 'DuyST', 2),
(2, 'StaffTham@fpt.edu.vn', '1234', 'ThamST', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `topic`
--

CREATE TABLE `topic` (
  `idtopic` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `idstaff` int(11) NOT NULL,
  `idcourse` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `topic`
--

INSERT INTO `topic` (`idtopic`, `name`, `description`, `idstaff`, `idcourse`) VALUES
(2, 'C++', 'C++ is a general-purpose object-oriented programming (OOP) language, developed by Bjarne Stroustrup, and is an extension of the C language. It is therefore possible to code C++ in a \"C style\" or \"object-oriented style.\" ', 2, 1),
(3, 'Java', 'Java is a programming language that produces software for multiple platforms. When a programmer writes a Java application, the compiled code (known as bytecode) runs on most operating systems (OS), including Windows, Linux and Mac OS.', 2, 1),
(4, 'PHP', 'PHP (recursive acronym for PHP: Hypertext Preprocessor) is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML.', 1, 2),
(5, 'Front-end', 'Front-end web development, also known as client-side development is the practice of producing HTML, CSS and JavaScript for a website or Web Application so that a user can see and interact with them directly. ', 1, 2),
(6, 'Nguyen Thanh Ha', 'ABCDEF', 1, 1),
(7, 'Luong Thi Tham', '1234567', 1, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trainee`
--

CREATE TABLE `trainee` (
  `idtrainee` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `age` int(11) NOT NULL,
  `mainlanguage` varchar(200) NOT NULL,
  `experience` varchar(200) NOT NULL,
  `idstaff` int(11) NOT NULL,
  `idclass` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `trainee`
--

INSERT INTO `trainee` (`idtrainee`, `name`, `age`, `mainlanguage`, `experience`, `idstaff`, `idclass`) VALUES
(1, 'Bui Thi Tam', 20, 'Java', 'one year', 1, 1),
(2, 'Luong Thi Tham', 19, 'C#', 'no', 2, 2),
(3, 'Nguyen Thanh Ha', 20, 'PHP', '5 years', 1, 1);

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
(1, 'TrainerDuy@fpt.edu.vn', '1234', 'DuyTrainer', 1, 2, 1, 1),
(6, 'TrainerTham@fpt.edu.vn', '1234', 'Luong Thi Tham', NULL, 1, 1, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`,`user`,`pass`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idcategory`),
  ADD KEY `idstaff` (`idstaff`);

--
-- Chỉ mục cho bảng `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`idclass`),
  ADD KEY `idstaff` (`idstaff`),
  ADD KEY `idcourse` (`idcourse`),
  ADD KEY `idcategory` (`idcategory`),
  ADD KEY `idtopic` (`idtopic`);

--
-- Chỉ mục cho bảng `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`idcourse`),
  ADD KEY `idstaff` (`idstaff`),
  ADD KEY `idcategory` (`idcategory`);

--
-- Chỉ mục cho bảng `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`idstaff`,`user`,`pass`),
  ADD KEY `idadmin` (`idadmin`);

--
-- Chỉ mục cho bảng `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`idtopic`),
  ADD KEY `idstaff` (`idstaff`),
  ADD KEY `idcourse` (`idcourse`);

--
-- Chỉ mục cho bảng `trainee`
--
ALTER TABLE `trainee`
  ADD PRIMARY KEY (`idtrainee`),
  ADD KEY `idstaff` (`idstaff`),
  ADD KEY `idclass` (`idclass`);

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
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `idcategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `class`
--
ALTER TABLE `class`
  MODIFY `idclass` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `course`
--
ALTER TABLE `course`
  MODIFY `idcourse` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `staff`
--
ALTER TABLE `staff`
  MODIFY `idstaff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `topic`
--
ALTER TABLE `topic`
  MODIFY `idtopic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `trainee`
--
ALTER TABLE `trainee`
  MODIFY `idtrainee` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `trainer`
--
ALTER TABLE `trainer`
  MODIFY `idtrainer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`idstaff`) REFERENCES `staff` (`idstaff`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `class_ibfk_1` FOREIGN KEY (`idstaff`) REFERENCES `staff` (`idstaff`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `class_ibfk_2` FOREIGN KEY (`idcategory`) REFERENCES `category` (`idcategory`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `class_ibfk_3` FOREIGN KEY (`idcourse`) REFERENCES `course` (`idcourse`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `class_ibfk_4` FOREIGN KEY (`idtopic`) REFERENCES `topic` (`idtopic`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`idstaff`) REFERENCES `staff` (`idstaff`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `course_ibfk_2` FOREIGN KEY (`idcategory`) REFERENCES `category` (`idcategory`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`idadmin`) REFERENCES `admin` (`idadmin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `topic`
--
ALTER TABLE `topic`
  ADD CONSTRAINT `topic_ibfk_1` FOREIGN KEY (`idstaff`) REFERENCES `staff` (`idstaff`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `topic_ibfk_2` FOREIGN KEY (`idcourse`) REFERENCES `course` (`idcourse`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `trainee`
--
ALTER TABLE `trainee`
  ADD CONSTRAINT `trainee_ibfk_1` FOREIGN KEY (`idstaff`) REFERENCES `staff` (`idstaff`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trainee_ibfk_2` FOREIGN KEY (`idclass`) REFERENCES `class` (`idclass`) ON DELETE CASCADE ON UPDATE CASCADE;

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
