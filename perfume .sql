-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 08, 2021 lúc 04:03 PM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `perfume`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `Cat_ID` varchar(10) NOT NULL,
  `Cat_Name` varchar(30) NOT NULL,
  `Cat_Des` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`Cat_ID`, `Cat_Name`, `Cat_Des`) VALUES
('P001', 'Louis Vuition', 'The brand popular'),
('P002', 'MCM', 'The fragrance bottle is meticulously modeled after the legendary Stark backpack.'),
('P003', 'Gucci', 'The brand popular'),
('P004', 'LeLaBo', ''),
('P005', 'Chanel', ''),
('P006', 'Dior', ''),
('P007', 'Victoria Seret', 'The brand popular');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `CustName` varchar(30) NOT NULL,
  `gender` int(11) NOT NULL,
  `Address` varchar(1000) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `CusDate` int(11) NOT NULL,
  `CusMonth` int(11) NOT NULL,
  `CusYear` int(11) NOT NULL,
  `SSN` varchar(10) DEFAULT NULL,
  `ActiveCode` varchar(100) NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`Username`, `Password`, `CustName`, `gender`, `Address`, `telephone`, `email`, `CusDate`, `CusMonth`, `CusYear`, `SSN`, `ActiveCode`, `state`) VALUES
('admin', 'e10adc3949ba59abbe56e057f20f883e', 'Duong Khanh Ngoc', 1, 'Can Tho', '0857882137', 'admin@gmail.com', 4, 3, 2001, '', '', 1),
('Finn', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyen Hung Dung', 0, 'Can Tho', '0903100550', 'nhdung.CPL@gmail.com', 31, 8, 1980, '', '', 0),
('kn040301', 'e10adc3949ba59abbe56e057f20f883e', 'Duong Khanh Ngoc', 1, '70 le lai street, An Phu, Ning Kieu, Can Tho city', '0779814377', 'knnn0400@gmail.com', 4, 3, 2001, '', '', 0),
('ngocdk', 'e10adc3949ba59abbe56e057f20f883e', 'Duong Khanh Ngoc', 1, 'Can Tho', '0779814377', 'ngocdk@gmail.com', 4, 3, 2001, '', '', 0),
('nhdung', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyen Hung Dung', 0, 'Can Thow', '0903100550', 'nhdung@gmail.com', 31, 8, 1980, '', '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `Product_ID` varchar(10) NOT NULL,
  `Product_Name` varchar(30) NOT NULL,
  `Price` bigint(20) NOT NULL,
  `oldPrice` decimal(12,2) NOT NULL,
  `SmallDesc` varchar(1000) NOT NULL,
  `DetailDesc` text NOT NULL,
  `ProDate` datetime NOT NULL,
  `Pro_qty` int(11) NOT NULL,
  `Pro_image` varchar(200) NOT NULL,
  `Cat_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`Product_ID`, `Product_Name`, `Price`, `oldPrice`, `SmallDesc`, `DetailDesc`, `ProDate`, `Pro_qty`, `Pro_image`, `Cat_ID`) VALUES
('C01', 'Afternoon Swim', 256, '0.00', 'Spray 100ml and Spray 200ml.', '2.6 x 5.8 x 2.6 inches\r\n(length x Height x Width)\r\nBergamot\r\nMandarin\r\nOrange\r\nGinger\r\nAmbregris', '2021-05-06 10:46:39', 6, 'lv.afternoonswim.png', 'P001'),
('C02', 'Cactus Garden', 256, '0.00', 'Spray 100ml and Spray 200ml.', 'Detailed Features\r\n2.9 x 7.3 x 2.9 inches\r\n(length x Height x Width)\r\nMate\r\nBergamot\r\nGeranium\r\nLemongrass\r\nIncense', '2021-05-06 10:46:33', 3, 'lv.cactusgarden.png', 'P001'),
('C03', 'On The Beach', 390, '0.00', 'Spray 100ml and Spray 200ml', '2.6 x 5.8 x 2.6 inches\r\n(length x Height x Width)\r\nKey notes:\r\nYuzu from Japan\r\nNeroli from Tunisia\r\nAromatic Herbs\r\nCypress', '2021-05-06 10:46:23', 8, 'lv.onthebeach.png', 'P001'),
('C04', 'Sun Song', 390, '0.00', 'Spray 100ml and Spray 200ml', '.87 x 7.28 x 2.87 inches\r\n(length x Height x Width)\r\nOrange blossom\r\nLemon\r\nBergamot\r\nNeroli\r\nJasmine\r\nMusky notes', '2021-05-06 10:49:02', 5, 'lv.sunsong.png', 'P001'),
('C05', 'MCM Eau de Parfum', 80, '0.00', 'The spirited scent of wanderlust in a boundary-pushing unisex fragrance', ' Fragrance family: Floral Woody\r\n Sustainably-sourced ingredients\r\n Top notes: Raspberry, Apricot\r\n Middle notes: Hand-picked Jasmine, White Peony, Violet Leaf\r\n Base notes: White Moss, Vanilla, Sandalwood, Sheer Ambrox\r\n Stark Backpack bottle: Visetos monogram print, heritage hardware, and top handle\r\n Made in France\r\n', '2021-05-06 10:55:52', 5, 'mcm.perfume.jpg', 'P002'),
('C06', 'Gucci Bloom 100ml eau de parfu', 135, '0.00', '', 'Natural tuberose harvested from India\r\nJasmine bud extract, obtained through an exclusive method of co-extraction to impart a fresh green and petal scent on the skin\r\nRangoon Creeper, embodying the fragrance’s concept and name, the slightly powdery floral scent is captured as the flower blooms from white and gradually darkens to pink, then red\r\n100ml', '2021-05-06 11:39:16', 4, 'gucci.edp.jpg', 'P003'),
('C07', 'Gucci Bloom Ambrosia di Fiori,', 145, '0.00', '', 'Eau de parfum\r\nVelvety Orris, the root of Iris—a rare and precious note derived from the resin of the flower that blooms in Tuscany in May\r\nDamascena Rose—a warm and rich floral scent, distilled from the most fragrant breed of rose\r\nNatural Tuberose harvested from India\r\nJasmine bud extract, obtained through an exclusive method of co-extraction to impart a fresh green and petal scent on the skin\r\nRangoon Creeper, embodying the fragrance’s concept and name, the slightly powdery floral scent is captured as the flower blooms from white and gradually darkens to pink, then red\r\nThe scent is presented in a burgundy lacquered glass bottle with a soft pink label. Contrasted by the emblematic Herbarium pattern in black, the same shade of pink defines the box.\r\n100ml', '2021-05-06 11:39:54', 5, 'gucci.badf.jpg', 'P003'),
('C08', 'Gucci Bloom Profumo di Fiori, ', 135, '0.00', '', 'Eau de parfum\r\nTop notes of Jasmine Sambac Absolute\r\nHeart notes of Natural Tuberose, Jasmine bud extract and Ylang Ylang\r\nBase notes of Sandalwood accord, Sun Drenched Wood accord, Orris Concrete, Benzoin and Musks\r\nThe scent is presented in a honey yellow lacquered glass bottle with the ribbed Gucci label framed in black. The outer packaging is decorated with the Herbarium print, a Toile de Jouy inspired motif featuring leaves, cherry branches, and flowers.\r\n100ml', '2021-05-06 11:39:26', 3, 'gucci.bpdf.jpg', 'P003'),
('C09', 'Baie 19', 236, '0.00', '', 'Truth is…Baie 19 should have been called Water 19. Not that it smells like nothing (though nothing smells like it), but it has this crisp, wet, drenched effect that water gives to the earth after the rain...', '2021-05-06 11:50:51', 9, 'lelebo.baie19.jpg', 'P004'),
('C10', 'Rose 31', 236, '0.00', '', 'The perfume’s aim is clear: to transform the famous Grasse Rose, a symbol of voluptuousness and unqualified femininity, into an assertively virile fragrance that can be worn by men and women…', '2021-05-06 11:53:41', 18, 'lelebo.rose31.jpg', 'P004'),
('C11', 'Santal 33', 236, '0.00', '', 'in a few words, what SANTAL 33 is... An open fire…The soft drift of smoke…Where sensuality rises after the light has gone.', '2021-05-06 11:57:21', 16, 'lelebo.santal33.jpg', 'P004'),
('C12', 'Coco Mademoiselle', 145, '0.00', '', 'product\r\nAn intense facet of the COCO MADEMOISELLE personality emerges to forge a powerful, deep floral-woody fragrance that is irresistible in every way.', '2021-05-06 12:15:07', 7, 'chanel.mad.jpg', 'P005'),
('C13', 'N°5', 138, '0.00', '', '', '2021-05-06 12:15:43', 8, 'chanel.n5.jpg', 'P005'),
('C14', 'Love Eau de Parfum', 130, '0.00', 'Spray 100ml and Spray 200ml', '', '2021-05-08 14:34:29', 2, 'victoria.Love.jpg', 'P007'),
('C16', 'MISS DIOR Blooming bouquet rol', 39, '0.00', '', '', '2021-05-06 12:27:21', 7, 'dior.roller.png', 'P006'),
('C17', 'MISS DIOR Roller-pearl eau de ', 39, '0.00', '', '', '2021-05-06 12:30:12', 6, 'dior.toilette.png', 'P006');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Cat_ID`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Username`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_ID`),
  ADD KEY `Cat_ID` (`Cat_ID`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`Cat_ID`) REFERENCES `category` (`Cat_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
