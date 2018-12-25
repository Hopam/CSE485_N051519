-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 25, 2018 lúc 01:01 PM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hopambh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baihat`
--

CREATE TABLE `baihat` (
  `Mabh` int(11) NOT NULL,
  `Tenbh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Loibh` text COLLATE utf8_unicode_ci NOT NULL,
  `CaSi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `TacGia` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `TheLoai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Dieubh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Tone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Capo` int(11) NOT NULL,
  `Link` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `CapNhat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `NguoiDang` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `LuotXem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `baihat`
--

INSERT INTO `baihat` (`Mabh`, `Tenbh`, `Loibh`, `CaSi`, `TacGia`, `TheLoai`, `Dieubh`, `Tone`, `Capo`, `Link`, `CapNhat`, `NguoiDang`, `LuotXem`) VALUES
(1, '<a href=\"../../php/song2.php\">Thăng Điên</a> ', '', 'Phương Ly, Justa Tee', 'Justa Tee, ViruSs', 'Pop Ballad', 'Ballad', 'C', 5, 'https://mp3.zing.vn/bai-hat/Thang-Dien-JustaTee-Phuong-Ly/ZW9DFW9A.html', '2018-12-24 09:10:40', 'Trung Nguyễn', 120220),
(2, '<a href=\"../../php/song.php\">Càng níu giữ càng dễ mất</a>', '\r\n\r\n', 'Mr.Siro', 'Mr.Siro', 'Nhạc Trẻ', 'Ballad', 'Em', 0, 'https://beta.mp3.zing.vn/bai-hat/Cang-Niu-Giu-Cang-De-Mat-Mr-Siro/ZW9DCEE6.html', '2018-12-24 09:16:34', 'Vương Thiện', 210760),
(3, 'Hong Kong 1', '', 'Nguyễn Trọng Tài', 'Nguyễn Trọng Tài', 'Nhạc Trẻ', 'Ballad', 'G', 3, 'https://www.youtube.com/watch?v=t7tZFq29lis', '2018-12-24 08:50:43', 'Lê Nhã', 470238),
(4, 'Chấp Nhận (Rời Bỏ 2)', '', 'Hòa Minzy', 'An Trịnh', 'Nhạc Trẻ', 'Ballad', 'Bm', 2, 'https://beta.mp3.zing.vn/bai-hat/Chap-Nhan-Hoa-Minzy/ZW9EAI76.html', '2018-12-24 08:52:40', 'Thiên', 22234),
(5, 'Suýt Nữa Thì', '', 'Andiez', 'Andiez', 'Nhạc Trẻ', 'Ballad', 'C', 1, 'https://www.youtube.com/watch?v=cUmpJ2zwfVU', '2018-12-24 08:51:09', 'Vương Thiện', 202356),
(6, 'Tháng Tư Là Lời Nói Dối Của Em', '', 'Hà Anh Tuấn', 'Phạm Toàn Thắng', 'Ballad', 'Ballad', 'F', 0, 'https://www.youtube.com/watch?v=UCXao7aTDQM', '2018-12-22 09:53:36', 'TrieuDatHo', 32021),
(7, 'Sai Người Sai Thời Điểm', '', 'Thanh Hưng Idol', 'Thanh Hưng Idol', 'Nhạc Trẻ', 'Ballad', 'G', 0, 'https://www.youtube.com/watch?v=5R5YnEbp2CU', '2018-12-24 08:52:21', 'Duy Võ', 222456),
(8, 'Vô Tình', '', 'Hoaprox, Xesi', 'Hoaprox, Xesi', 'Nhạc Trẻ', 'Ballad', 'C', 0, 'https://beta.mp3.zing.vn/bai-hat/Vo-Tinh-Xesi-Hoaprox/ZW9DC99A.html', '2018-12-24 08:52:10', 'Vương Thiện', 20157),
(9, 'Mãi Mãi Sẽ Hết Vào Ngày Mai', '', 'Andiez', 'Andiez', 'Nhạc Trẻ', 'Ballad', 'C', 4, 'https://beta.mp3.zing.vn/bai-hat/Mai-Mai-Se-Het-Vao-Ngay-Mai-Andiez/ZW9E6908.html', '2018-12-23 10:57:04', 'Dong Sy Nguyen', 30158),
(10, 'Chiều Nay Không Có Mưa Bay', '', 'Thái Tuyết Trâm', 'Minh Tuấn', '', 'Slow', 'C', 0, 'https://www.youtube.com/watch?v=8AaMb9kxhRI', '2018-12-22 09:54:45', 'kabigon91', 508819),
(11, 'Lạ Lùng', '', 'Vũ', 'Vũ', 'Nhạc Trẻ', 'Ballad', 'C', 0, 'https://beta.mp3.zing.vn/bai-hat/La-Lung-Vu/ZW78E6A9.html', '2018-12-22 09:54:51', 'Oneduck', 607146),
(12, 'Người Tình Mùa Đông', '', 'Hà Anh Tuấn', 'Nhạc ngoại', 'Trữ Tình', 'Chachacha', 'F', 0, 'https://www.youtube.com/watch?v=dns2WLu8Su8', '2018-12-24 08:51:26', 'Lê Tài Nhật Minh', 601257),
(13, 'Anh Đếch Cần Gì Nhiều Ngoài Em', '', 'Đen, Vũ, Thành Đồng', 'Đen Vâu', 'Rap Việt', 'Slow Rock', 'Am', 2, 'https://www.youtube.com/watch?v=KdrbBJNFwGw', '2018-12-24 08:51:42', 'Nguyễn Việt Thắng', 60127),
(14, 'Anh Đang Ở Đâu Đấy Anh', '', 'Hương Giang Idol', 'Andiez', 'Nhạc Trẻ', 'Ballad', 'Em', 4, 'https://www.youtube.com/watch?v=RLGiEBsQ1Xg', '2018-12-24 08:51:47', 'Duy Võ', 54970),
(15, 'Y.E.U', '', 'Min', 'Khắc Hưng', 'Nhạc Trẻ', 'Ballad', 'C', 0, 'https://beta.mp3.zing.vn/bai-hat/Y-E-U-Acoustic-Version-MIN/ZW70U88I.html', '2018-12-24 10:36:23', 'HongNgoc', 78246),
(16, 'Yêu 5', '', 'Rhymastic', 'Rhymastic', 'Nhạc Trẻ', 'Ballad', 'F', 0, 'https://beta.mp3.zing.vn/bai-hat/yeu-5-Rhymas/ZW78FFI6.html', '2018-12-25 11:45:19', 'Hải', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `contact_number` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `confirm_password` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `access_level` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `access_code` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `contact_number`, `address`, `password`, `confirm_password`, `access_level`, `access_code`, `status`, `created`, `modified`) VALUES
(2, 'Hai', 'Nguyen', 'mike@example.com', '0999999999', 'Blk. 24 A, Lot 6, Ph. 3, Peace Village', '$2y$10$AUBptrm9sQF696zr8Hv31On3x4wqnTihdCLocZmGLbiDvyLpyokL.', '$2y$10$AUBptrm9sQF696zr8Hv31On3x4wqnTihdCLocZmGLbiDvyLpyokL.', 'Admin', '', 1, '0000-00-00 00:00:00', '2018-12-23 10:58:02'),
(3, 'Hai', 'Nguyen', 'darwin@example.com', '9331868359', 'Blk 24 A Lot 6 Ph 3\r\nPeace Village, San Luis', '$2y$10$tLq9lTKDUt7EyTFhxL0QHuen/BgO9YQzFYTUyH50kJXLJ.ISO3HAO', '$2y$10$tLq9lTKDUt7EyTFhxL0QHuen/BgO9YQzFYTUyH50kJXLJ.ISO3HAO', 'Customer', 'wUIfU9VrUJm5Z712Ln4dLiywpHjxlXDj', 1, '2014-10-29 17:31:09', '2018-12-21 06:42:35'),
(4, 'Dương', 'Lăng Đại', 'duong62@gmail.com', '0359973579', '3d3565bd81f52f6bdf0032bc727d27cb', '$2y$10$8/ZlnenFCsuxxYqHOW6n9O.EnbBL1iW41kpV5mF1EiqYrKvmonbA2', '$2y$10$8/ZlnenFCsuxxYqHOW6n9O.EnbBL1iW41kpV5mF1EiqYrKvmonbA2', 'Customer', 'xFta3mzNPvQ8UT93HznN1nu4HXADIIeU', 0, '2018-12-10 12:38:59', '2018-12-24 06:19:06'),
(9, 'Hiền', 'Nguyễn', 'thanhhien94@gmail.com', '1683071238', '1/31 BÃ¹i XÆ°Æ¡ng Tráº¡ch', '$2y$10$nLjBun8RTy8Np2.Dm7bC3eqitK5lAnCvecvfxkd7bHciiVd1OLkaW', '$2y$10$nLjBun8RTy8Np2.Dm7bC3eqitK5lAnCvecvfxkd7bHciiVd1OLkaW', 'Customer', 'YhOsOtw1Slx7piiEmDxz6yzbY1GDrB1H', 0, '2018-12-19 23:18:40', '2018-12-24 06:20:28'),
(18, 'Hải', 'Nguyễn', 'thanhhai7698@gmail.com', '0383071238', '1/31 BÃ¹i XÆ°Æ¡ng Tráº¡ch', '$2y$10$raC90Toh1gr5kVj4JccRzOQZkKeN1QkNtvzdUtpkXAn8/1XhHmdhi', '$2y$10$DfLc6hgHMACXA0SzF6qZROhEye/73ed30wvTT7tukYB3Brb3zPrhW', 'Admin', 'HuJcFjHmsAVyrggczstDEubyuVM7oBlG', 1, '2018-12-20 00:35:19', '2018-12-24 06:20:35'),
(20, 'Hải', 'Nguyễn', 'haint62@wru.vn', '1683071238', '1/31 BÃ¹i XÆ°Æ¡ng Tráº¡ch', '$2y$10$RdZXnv3vJJNnnFi7jX8okuWSIM0dy0CSbOlhIJ5e9l.w/Fr.xc1Ve', '$2y$10$RdZXnv3vJJNnnFi7jX8okuWSIM0dy0CSbOlhIJ5e9l.w/Fr.xc1Ve', 'Customer', 'dJykxghxUV5kEgr1hrhaoJj7N6U8VR2e', 1, '2018-12-21 16:12:17', '2018-12-24 06:20:41');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baihat`
--
ALTER TABLE `baihat`
  ADD PRIMARY KEY (`Mabh`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baihat`
--
ALTER TABLE `baihat`
  MODIFY `Mabh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
