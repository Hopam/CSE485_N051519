-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 30, 2018 lúc 04:36 PM
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
(1, '<a href=\"Thang-dien.php\">Thằng Điên</a>', 'Giờ tôi lại <span class=\"hopam\">[Cmaj7]</span>lang thang tình yêu thì miên man <br/>                     Ngày xanh cùng <span class=\"hopam\">[Am7]</span>mây tung tăng tựa mình <span class=\"hopam\">[A7]</span>bên phím đàn<br/>                      Nhìn em mình <span class=\"hopam\">[Dm7]</span>ngơ ngác lòng anh chợt hơi khác <br/>                     Tình yêu này <span class=\"hopam\">[F]</span>đến đúng lúc thấy ánh sáng vụt qua <span class=\"hopam\">[Fm ]</span><br/>                                           Nụ cười tỏa <span class=\"hopam\">[Cmaj7]</span>hương nắng bình minh và mây trắng <br/>                     Hình như đều <span class=\"hopam\">[Am7]</span>kêu tôi \"ôi thôi tình yêu đến <span class=\"hopam\">[A7]</span>rồi!\"<br/>                      Chẳng ai phải <span class=\"hopam\">[Dm7]</span>thắc mắc còn tôi thì đã chắc <br/>                     Nàng ơi nàng <span class=\"hopam\">[F]</span>hãy đến chiếm lấy tâm hồn <span class=\"hopam\">[Fm]</span>tôi <br/>                                          T-ĐK:                      <span class=\"hopam\">[Em]</span>Mỉm cười lòng chợt bâng khuâng <span class=\"hopam\">[Am7]</span>tôi chẳng biết mơ hay thật <br/>                     <span class=\"hopam\">[Dm7]</span>Đợi chờ dù ngày hay đêm <span class=\"hopam\">[F]</span>anh chỉ cần nghĩ cũng thấy <span class=\"hopam\">[Fm]</span>vui..<br/>                                           ĐK:                      I\'m in <span class=\"hopam\">[Cmaj7]</span>love... màu nắng cuốn lấp chân mây mờ xa <br/>                     I\'m in <span class=\"hopam\">[Am7]</span>love... thành phố chỉ thấy mỗi <span class=\"hopam\">[A7]</span>riêng mình ta <br/>                     I\'m in <span class=\"hopam\">[Dm7]</span>love... tựa đầu bên tình yêu mới thiết tha <br/>                     Chỉ <span class=\"hopam\">[F]</span>Crazy man fall in <span class=\"hopam\">[Fm]</span>love <br/>                                          I\'m in <span class=\"hopam\">[Cmaj7]</span>love...hạnh phúc chỉ hết khi anh ngừng mơ <br/>                     I\'m in <span class=\"hopam\">[Am7]</span>love... cuộc sống vốn dĩ trôi <span class=\"hopam\">[A7]</span>như vần thơ <br/>                     I\'m in <span class=\"hopam\">[Dm7]</span>love... ngả lưng bên cành cây lá xác xơ <br/>                     Mờ <span class=\"hopam\">[F]</span>sương đưa tay anh ôm lấy <span class=\"hopam\">[Fm]</span>em.. <br/>                                          Dẫu biết chỉ là <span class=\"hopam\">[Cmaj7]</span>mơ.. <br/>                     Dẫu biết chỉ là <span class=\"hopam\">[Am7]</span> mơ <span class=\"hopam\">[A7 ]</span> <br/>                     Dẫu biết chỉ là <span class=\"hopam\">[Dm7]</span>mơ <br/>                     <span class=\"hopam\">[F]</span>\"Crazy man fall in <span class=\"hopam\">[Fm]</span>love..\"<br/> ', 'Phương Ly, Justa Tee', 'Justa Tee, ViruSs', 'Pop Ballad', 'Ballad', 'C', 5, 'https://mp3.zing.vn/bai-hat/Thang-Dien-JustaTee-Phuong-Ly/ZW9DFW9A.html', '2018-12-30 08:04:45', 'Hải', 0),
(2, '<a href=\"Cang-niu-giu-cang-de-mat.php\">Càng Níu Giữ Càng Dễ Mất</a>', 'Intro: <br/>\r\n                Nếu <span class=\"hopam\">[Em]</span>có nơi tôn thờ Tình Yêu Là <span class=\"hopam\">[Bm7]</span>Tất Cả <br/>\r\n                Sẽ có Chốn Vô Vọng để ta buông <span class=\"hopam\">[Am]</span>mình <br/>\r\n                sau những tổn thương mãi không <span class=\"hopam\">[Em]</span>thể hàn gắn <br/>\r\n                \r\n                1. <span class=\"hopam\">[Em7]</span>Lời chia tay nào chẳng ưu sầu <br/>\r\n                Dồn lại bao nhiêu tổn <span class=\"hopam\">[Bm7]</span>thương, tình yêu gục ngã <br/>\r\n                <span class=\"hopam\">[Em7]</span>Đừng nhìn tôi và hỏi quá nhiều <br/>\r\n                Vì chuyện tình nào cũng <span class=\"hopam\">[Bm7]</span>tan vậy thôi...<br/> \r\n                <br/>\r\n                2. Nhiều lần tôi ngỡ mình <span class=\"hopam\">[G]</span>đã tìm <br/>\r\n                được một người say đắm <span class=\"hopam\">[D]</span>yêu mình <br/>\r\n                Ngờ đâu quên mất điều <span class=\"hopam\">[Am]</span>trớ trêu: <br/>\r\n                \"Càng níu giữ, ta càng <span class=\"hopam\">[Em]</span>dễ mất\" <br/>\r\n                Có <span class=\"hopam\">[D]</span>khi cả cuộc <span class=\"hopam\">[Cmaj7]</span>đời, chẳng thể nào may <span class=\"hopam\">[D]</span>mắn <br/>\r\n                mãi <span class=\"hopam\">[Bm]</span>bên cạnh một <span class=\"hopam\">[Em]</span>người... <br/>\r\n                <br/>\r\n                Chorus: <br/>\r\n                Tình yêu đâu ai <span class=\"hopam\">[Em]</span>biết trước <br/>\r\n                sẽ bao lần lạc Giữa <span class=\"hopam\">[Bm7]</span>Hồ Nước Mắt?<br/> \r\n                <span class=\"hopam\">[Cmaj7]</span>Nhớ đến nỗi hao gầy, người vẫn <span class=\"hopam\">[Bm]</span>nỡ buông tay! <br/>\r\n                Tình yêu mong manh <span class=\"hopam\">[Em]</span>nhất là khi dâng trào! <br/>\r\n                Xóa đi một ký <span class=\"hopam\">[D]</span>ức tàn nhẫn thế nào.. <br/>\r\n                Từng hơi <span class=\"hopam\">[Cmaj7]</span>ấm lỡ trao... giờ vô nghĩa <span class=\"hopam\">[Bm]</span>sao?<br/> \r\n                Tình yêu đâu ai <span class=\"hopam\">[Em]</span>biết đã <br/>\r\n                bên nhau rồi, yên ấm <span class=\"hopam\">[D]</span>rồi... lạc mãi<br/>\r\n                <span class=\"hopam\">[Cmaj7]</span>Những chiếc hôn sơ sài.. người đã.. <span class=\"hopam\">[Bm]</span>nhớ thêm ai?<br/> \r\n                Càng chạy theo, tình <span class=\"hopam\">[Em]</span>yêu càng xa ta dần <br/>\r\n                Biết không thuộc về <span class=\"hopam\">[D]</span>nhau càng cố gắng tìm! <br/>\r\n                Chỉ cần <span class=\"hopam\">[Cmaj7]</span>chút hy vọng... <span class=\"hopam\">[Bm7]</span>dù bao cách <span class=\"hopam\">[Em]</span>trở <br/>\r\n                <br/>\r\n                Vì tôi <span class=\"hopam\">[Am]</span>muốn kiếm tìm... <span class=\"hopam\">[Bm]</span>Một Người Biết Trân <span class=\"hopam\">[Em]</span>Trọng <br/>\r\n                \r\n                (Giang Tấu) <br/>\r\n                \r\n                Đừng níu <span class=\"hopam\">[Cmaj7]</span>giữ một người <span class=\"hopam\">[D]</span>vòng tay dần lung [Em]lay... <span class=\"hopam\">[D]</span> <br/>\r\n                Đừng chạy <span class=\"hopam\">[Cmaj7]</span>theo một người chẳng hề biết <span class=\"hopam\">[Am]</span>quay lại...) <span class=\"hopam\">[Bm Em]</span> <br/>\r\n                <br/>\r\n                (2) (ĐK) <br/>\r\n                \r\n                Chorus cuối: <br/>\r\n                Tình yêu đâu phải <span class=\"hopam\">[Em]</span>suối mát giữa sa mạc <span class=\"hopam\">[D]</span><br/> \r\n                Bền lâu <span class=\"hopam\">[C]</span>đến mấy cũng rẽ ngang <br/>\r\n                Hạnh phúc nào <span class=\"hopam\">[Bm]</span>được mãi mãi? <br/>\r\n                Càng chạy <span class=\"hopam\">[Em]</span>theo, tình yêu càng xa ta dần <br/>\r\n                Biết <span class=\"hopam\">[Bm]</span>không thuộc về nhau càng cố gắng tìm! <br/>\r\n                Chỉ cần <span class=\"hopam\">[Cmaj7]</span>chút hy vọng... <span class=\"hopam\">[Bm]</span>dù bao cách <span class=\"hopam\">[Em]</span>trở <br/>\r\n                Vì tôi <span class=\"hopam\">[Am]</span>muốn kiếm tìm... <span class=\"hopam\">[Bm7] [Em]</span>]Một Người Biết Trân <span class=\"hopam\">[Cmaj7]</span>Trọng <span class=\"hopam\">[Bm7] [Am7]</span><br/> \r\n\r\n', 'Mr.Siro', 'Mr.Siro', 'Nhạc Trẻ', 'Ballad', 'Em', 0, 'https://beta.mp3.zing.vn/bai-hat/Cang-Niu-Giu-Cang-De-Mat-Mr-Siro/ZW9DCEE6.html', '2018-12-30 12:46:05', 'Hải', 0),
(3, '<a href=\"Hong-Kong-1.php\">Hong Kong 1</a>', 'Và giờ em [C]khóc thì cũng chẳng để làm gì Đâu phải do anh [Bm]chuyện tình mình mà là vì Em đã trao [Am]ai dòng lệ tràn đầy cầu kì [D ] Những năm tháng phai [G]nhòa 1. [C]Nếu... trái tim mình nói [Bm]không nên lời Đắng cay từng tiếng [Am]yêu xa vời Thế [G]là....... Và hôm nay em [C]đến Nhưng nắng đâu còn thiết [Bm]tha gọi mời Gió âm thầm lướt [Am ]qua muôn đời [D ] Vì ai vì [G]ai ĐK: Vì giờ anh [C ]biết chuyện tình mình chẳng còn gì Khi nắng xuân [Bm ]sang lời mật ngọt còn thầm thì Em bước sang [Am ]ngang đợi chờ một điều diệu kì [D ] Như lúc ban [G ]đầu Và giờ em [C ]khóc thì cũng chẳng để làm gì Đâu phải cho [Bm ]ai chuyện tình mình mà là vì Em đã trao [Am ]ai dòng lệ tràn đầy cầu kì [D ] Những năm tháng phai [G ]nhòa 2. [C]Nếu... đóa hoa trồng trước [Bm]kia chưa về Nhánh hương tình thoảng [Am]trên câu thề [D ] Anh ước [G]rằng Rằng một mai anh [C]đến Anh đón em vào sớm [Bm]mai trong lành Nhưng đó mãi là giấc [Am]mơ không thành [D ] Vì ai vì [G]ai ĐK: Vì giờ anh [C ]biết chuyện tình mình chẳng còn gì Khi nắng xuân [Bm ]sang lời mật ngọt còn thầm thì Em bước sang [Am ]ngang đợi chờ một điều diệu kì [D ] Như lúc ban [G ]đầu Và giờ em [C ]khóc thì cũng chẳng để làm gì Đâu phải cho [Bm ]ai chuyện tình mình mà là vì Em đã trao [Am ]ai dòng lệ tràn đầy cầu kì [D ] Những năm tháng phai [G ]nhòa', 'Nguyễn Trọng Tài', 'Nguyễn Trọng Tài', 'Nhạc Trẻ', 'Ballad', 'G', 3, 'https://www.youtube.com/watch?v=t7tZFq29lis', '2018-12-30 07:49:04', 'Dương', 0),
(4, 'Chấp Nhận (Rời Bỏ 2)', '', 'Hòa Minzy', 'An Trịnh', 'Nhạc Trẻ', 'Ballad', 'Bm', 2, 'https://beta.mp3.zing.vn/bai-hat/Chap-Nhan-Hoa-Minzy/ZW9EAI76.html', '2018-12-27 09:10:04', '', 0),
(5, 'Suýt Nữa Thì', ' <b>Tone chuan la C#. Capo 1 choi C </b><br/><br/>                         Suýt <span class=\"hopam\">[C]</span>nữa thì...anh có thể nói muôn <span class=\"hopam\">[G/B]</span>vàn lời muốn nói <br/>                         Suýt <span class=\"hopam\">[Am]</span>nữa thì...có thể đèo em qua <span class=\"hopam\">[Em/G]</span>từng hàng phố quen <br/>                         Dòng lưu <span class=\"hopam\">[Fmaj7]</span>bút năm xưa viết vội <br/>                         \"Hãy còn <span class=\"hopam\">[Em7]</span>nhớ nhau đến những ngày <span class=\"hopam\">[Am7]</span>sau\" <br/>                         Tình <span class=\"hopam\">[Dm7]</span> yêu đầu tiên anh giữ <br/>                         Vẫn vẹn <span class=\"hopam\">[G]</span>nguyên nơi con tim này! <br/>                                                  <span class=\"hopam\">[C]</span>Anh còn nhớ <br/>                         Mỗi lúc tan <span class=\"hopam\">[G/B]</span>trường ngại ngùng theo em <br/>                         <span class=\"hopam\">[Am]</span>Là con phố, có hoa <span class=\"hopam\">[Em/G]</span>bay <br/>                         Anh mãi theo sau <br/>                         Khoảng cách <span class=\"hopam\">[Fmaj7]</span> ấy mà sao xa <span class=\"hopam\">[G ]</span>quá <br/>                         Chẳng thể <span class=\"hopam\">[Em7]</span>nào để tới <span class=\"hopam\">[Am7]</span>bên em <br/>                         Thời thanh <span class=\"hopam\">[Dm7]</span>xuân anh có <br/>                         Là những nỗi niềm <span class=\"hopam\">[G]</span>nuối tiếc <br/>                           ĐK: <br/>                         Lời chưa <span class=\"hopam\">[C]</span>nói <br/>                         Anh thả vào trong cơn <span class=\"hopam\">[G/B]</span>gió nhắn với mây trời <br/>                         Tình yêu <span class=\"hopam\">[Am]</span>đó <br/>                         Chỉ riền anh biết anh <span class=\"hopam\">[Em/G]</span>cũng chẳng mong hơn nhiều! <br/>                         Liệu rằng <span class=\"hopam\">[Fmaj7]</span>em còn ai đưa <span class=\"hopam\">[G]</span>đón <br/>                         Anh ơ <span class=\"hopam\">[Em]</span>thờ dõi theo <span class=\"hopam\">[Am]</span>em <br/>                         Nếu có <span class=\"hopam\">[Dm7]</span>thể trở về hôm ấy <br/>                         Anh sẽ chẳng <span class=\"hopam\">[G6]</span>để phí cơ <span class=\"hopam\">[G]</span>hội <br/>                         Từng vòng <span class=\"hopam\">[C]</span>quay <br/>                         Trên chiếc xe đạp anh <span class=\"hopam\">[G/B]</span>đón đưa em ngang qua <br/>                         Thời thanh <span class=\"hopam\">[Am]</span>xuân <br/>                         Là ta cùng nhau viết <span class=\"hopam\">[Em/G]</span>lên những giấc mơ đẹp <br/>                         Một buổi <span class=\"hopam\">[Fmaj7]</span>chiều ngập tràn mảnh <span class=\"hopam\">[G]</span>vỡ <br/>                         Rơi ra <span class=\"hopam\">[Em]</span>từ hạnh phúc riêng <span class=\"hopam\">[Am]</span>em <br/>                         Suýt <span class=\"hopam\">[Dm7]</span>nữa thì người đã biết <br/>                         Yêu <span class=\"hopam\">[Fm6]</span>thương một thời anh <span class=\"hopam\">[G]</span>đã tương <span class=\"hopam\">[Cmaj7]</span>tư <br/>', 'Andiez', 'Andiez', 'Nhạc Trẻ', 'Ballad', 'C', 1, 'https://www.youtube.com/watch?v=cUmpJ2zwfVU', '2018-12-30 03:42:08', 'Dương', 0),
(6, 'Tháng Tư Là Lời Nói Dối Của Em', '', 'Hà Anh Tuấn', 'Phạm Toàn Thắng', 'Ballad', 'Ballad', 'F', 0, 'https://www.youtube.com/watch?v=UCXao7aTDQM', '2018-12-29 17:26:44', 'Hải', 0),
(7, 'Sai Người Sai Thời Điểm', '', 'Thanh Hưng Idol', 'Thanh Hưng Idol', 'Nhạc Trẻ', 'Ballad', 'G', 0, 'https://www.youtube.com/watch?v=5R5YnEbp2CU', '2018-12-27 09:10:22', '', 0),
(8, 'Vô Tình', '', 'Hoaprox, Xesi', 'Hoaprox, Xesi', 'Nhạc Trẻ', 'Ballad', 'C', 0, 'https://beta.mp3.zing.vn/bai-hat/Vo-Tinh-Xesi-Hoaprox/ZW9DC99A.html', '2018-12-27 09:10:27', '', 0),
(9, 'Mãi Mãi Sẽ Hết Vào Ngày Mai', 'Đừng nói sẽ yêu trọn một kiếp ...', 'Andiez', 'Andiez', 'Nhạc Trẻ', 'Ballad', 'C', 4, 'https://beta.mp3.zing.vn/bai-hat/Mai-Mai-Se-Het-Vao-Ngay-Mai-Andiez/ZW9E6908.html', '2018-12-30 09:40:11', 'Hải', 0),
(10, 'Chiều Nay Không Có Mưa Bay', '', 'Thái Tuyết Trâm', 'Minh Tuấn', '', 'Slow', 'C', 0, 'https://www.youtube.com/watch?v=8AaMb9kxhRI', '2018-12-27 09:10:36', '', 0),
(11, 'Lạ Lùng', '', 'Vũ', 'Vũ', 'Nhạc Trẻ', 'Ballad', 'C', 0, 'https://beta.mp3.zing.vn/bai-hat/La-Lung-Vu/ZW78E6A9.html', '2018-12-27 09:10:41', '', 0),
(12, 'Người Tình Mùa Đông', '', 'Hà Anh Tuấn', 'Nhạc ngoại', 'Trữ Tình', 'Chachacha', 'F', 0, 'https://www.youtube.com/watch?v=dns2WLu8Su8', '2018-12-27 09:10:46', '', 0),
(13, 'Anh Đếch Cần Gì Nhiều Ngoài Em', '', 'Đen, Vũ, Thành Đồng', 'Đen Vâu', 'Rap Việt', 'Slow Rock', 'Am', 2, 'https://www.youtube.com/watch?v=KdrbBJNFwGw', '2018-12-27 09:10:49', 'Hải', 0),
(14, 'Anh Đang Ở Đâu Đấy Anh', '', 'Hương Giang Idol', 'Andiez', 'Nhạc Trẻ', 'Ballad', 'Em', 4, 'https://www.youtube.com/watch?v=RLGiEBsQ1Xg', '2018-12-27 09:10:54', '', 0),
(15, 'Y.E.U', '', 'Min', 'Khắc Hưng', 'Nhạc Trẻ', 'Ballad', 'C', 0, 'https://beta.mp3.zing.vn/bai-hat/Y-E-U-Acoustic-Version-MIN/ZW70U88I.html', '2018-12-27 09:11:02', '', 0),
(16, 'Yêu 5', 'Xin những bối rối này cứ sẽ lên ngôi ...', 'Rhymastic', 'Rhymastic', 'Nhạc Trẻ', 'Ballad', 'F', 0, 'https://beta.mp3.zing.vn/bai-hat/yeu-5-Rhymas/ZW78FFI6.html', '2018-12-30 03:42:28', 'Hải', 0);

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
(1, 'Dũng', 'Lê', 'mike@example.com', '0999999999', 'Blk. 24 A, Lot 6, Ph. 3, Peace Village', '$2y$10$AUBptrm9sQF696zr8Hv31On3x4wqnTihdCLocZmGLbiDvyLpyokL.', '$2y$10$AUBptrm9sQF696zr8Hv31On3x4wqnTihdCLocZmGLbiDvyLpyokL.', 'Customer', 'DTaYBon8tecqWdY4evjsBcTPckUDRlKG', 1, '2018-12-28 20:23:20', '2018-12-28 12:23:41'),
(2, 'Đạt', 'Nguyễn Văn', 'darwin@example.com', '9331868359', 'Blk 24 A Lot 6 Ph 3\r\nPeace Village, San Luis', '$2y$10$tLq9lTKDUt7EyTFhxL0QHuen/BgO9YQzFYTUyH50kJXLJ.ISO3HAO', '$2y$10$tLq9lTKDUt7EyTFhxL0QHuen/BgO9YQzFYTUyH50kJXLJ.ISO3HAO', 'Customer', 'wUIfU9VrUJm5Z712Ln4dLiywpHjxlXDj', 1, '2014-10-29 17:31:09', '2018-12-27 10:13:34'),
(3, 'Dương', 'Lăng Đại', 'duong62@gmail.com', '0359973579', '3d3565bd81f52f6bdf0032bc727d27cb', '$2y$10$8/ZlnenFCsuxxYqHOW6n9O.EnbBL1iW41kpV5mF1EiqYrKvmonbA2', '$2y$10$8/ZlnenFCsuxxYqHOW6n9O.EnbBL1iW41kpV5mF1EiqYrKvmonbA2', 'Admin', 'xFta3mzNPvQ8UT93HznN1nu4HXADIIeU', 0, '2018-12-10 12:38:59', '2018-12-26 18:59:27'),
(4, 'Hiền', 'Nguyễn Thanh', 'thanhhien94@gmail.com', '01683071238', '1/31 Bùi Xương Trạch', '$2y$10$rGOrsQ9Xwr/ll/eESgNuh.FcD7LboV4qm79VqeMsV5NCAQlvRMdsO', '$2y$10$rGOrsQ9Xwr/ll/eESgNuh.FcD7LboV4qm79VqeMsV5NCAQlvRMdsO', 'Customer', 'lj58lm8f6gHzZlfuzVqf3GmwqzPROWfB', 0, '2018-12-30 10:25:28', '2018-12-30 02:25:46'),
(5, 'Hải', 'Nguyễn', 'thanhhai7698@gmail.com', '0383071238', '1/31 Bùi Xương Trạch', '$2y$10$raC90Toh1gr5kVj4JccRzOQZkKeN1QkNtvzdUtpkXAn8/1XhHmdhi', '$2y$10$DfLc6hgHMACXA0SzF6qZROhEye/73ed30wvTT7tukYB3Brb3zPrhW', 'Admin', 'HuJcFjHmsAVyrggczstDEubyuVM7oBlG', 1, '2018-12-20 00:35:19', '2018-12-26 18:51:47'),
(6, 'Hải', 'Nguyễn Thanh', 'haint62@wru.vn', '0383071238', '1/31 Bùi Xương Trạch', '$2y$10$LpROYJDJeF2hVXGMvaAoEu9scpYPb6VvpCJ6uOtQsae9lmD4pNDai', '$2y$10$LpROYJDJeF2hVXGMvaAoEu9scpYPb6VvpCJ6uOtQsae9lmD4pNDai', 'Customer', '9ow1DUc8dBBibjmGlle0ACORyR6787pZ', 1, '2018-12-30 16:28:51', '2018-12-30 08:29:53');

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
  MODIFY `Mabh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
