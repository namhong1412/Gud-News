-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th4 25, 2020 lúc 03:24 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `news`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link_base` varchar(255) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id`, `title`, `image`, `link_base`, `date`) VALUES
(1, 'Chính thức ban hành quy định hỗ trợ người dân gặp khó khăn vì Covid-19', 'views/assets/images/posts/20200425140339.jpg', 'https://dantri.com.vn/viec-lam/chinh-thuc-ban-hanh-quy-dinh-ho-tro-nguoi-dan-gap-kho-khan-vi-covid-19-20200425085248707.htm', '04/25/2020'),
(2, 'Thủ tướng: Cho phép mở lại xổ số, học sinh đi học lệch giờ', 'views/assets/images/posts/20200425141323.jpg', 'https://dantri.com.vn/xa-hoi/thu-tuong-cho-phep-mo-lai-xo-so-hoc-sinh-di-hoc-lech-gio-20200425095354016.htm', '04/25/2020'),
(3, 'Chiều 25/4: Việt Nam không ghi nhận ca mắc mới Covid-19', 'views/assets/images/posts/20200425141340.jpg', 'https://dantri.com.vn/suc-khoe/chieu-254-viet-nam-khong-ghi-nhan-ca-mac-moi-covid-19-20200425181245968.htm', '04/25/2020'),
(4, 'Báo Mỹ: Việt Nam là điểm sáng trong cuộc chiến chống Covid-19', 'views/assets/images/posts/20200425141400.jpg', 'https://dantri.com.vn/the-gioi/bao-my-viet-nam-la-diem-sang-trong-cuoc-chien-chong-covid-19-20200425160739176.htm', '04/25/2020'),
(5, 'Thêm 5 bệnh nhân Covid-19 khỏi bệnh, Việt Nam đã chữa khỏi 225/270 ca', 'views/assets/images/posts/20200425141429.jpg', 'https://dantri.com.vn/suc-khoe/them-5-benh-nhan-covid-19-khoi-benh-viet-nam-da-chua-khoi-225270-ca-20200425125513170.htm', '04/25/2020'),
(6, 'Bệnh viện, nhà xác quá tải, Brazil nguy cơ vỡ trận vì Covid-19', 'views/assets/images/posts/20200425141445.jpg', 'https://dantri.com.vn/the-gioi/benh-vien-nha-xac-qua-tai-brazil-nguy-co-vo-tran-vi-covid-19-20200425143950665.htm', '04/25/2020'),
(7, 'Nghi vấn Trung Quốc “chặn” EU đăng báo cáo bất lợi cho Bắc Kinh về Covid-19', 'views/assets/images/posts/20200425143557.jpg', 'https://dantri.com.vn/the-gioi/nghi-van-trung-quoc-chan-eu-dang-bao-cao-bat-loi-cho-bac-kinh-ve-covid-19-20200425103204487.htm', '04/25/2020'),
(9, 'Sở Y tế Thái Bình nói về việc đàm phán giảm giá máy xét nghiệm Covid-19', 'views/assets/images/posts/20200425144940.jpg', 'https://dantri.com.vn/xa-hoi/so-y-te-thai-binh-noi-ve-viec-dam-phan-giam-gia-may-xet-nghiem-covid-19-20200425171432333.htm', '04/25/2020'),
(12, 'Thứ trưởng Y tế: “Chúng tôi lo ngại làn sóng thứ 2 với dịch Covid-19”', 'views/assets/images/posts/20200425145045.jpg', 'https://dantri.com.vn/suc-khoe/thu-truong-y-te-chung-toi-lo-ngai-lan-song-thu-2-voi-dich-covid-19-20200425120801854.htm', '04/25/2020');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
